<x-app-layout>

    <div class="relative top-6 left-0 p-4">
        <div class="hover:underline cursor-pointer font-semibold space-x-2">
            <i class="fa-solid fa-arrow-left"></i> 
            <a href="/dashboard">Retour à l'espace administrateur</a>
        </div>
    </div>
    

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Mon profil') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-profile-information-form')
                    <section>
                        <header>
                            <h2 class="text-lg font-medium text-gray-900">
                                {{ __('Informations du profil') }}
                            </h2>
                    
                            <p class="mt-1 text-sm text-gray-600">
                                {{ __("Mettez à jour les informations de votre profil") }}
                            </p>
                        </header>
                    
                        <form id="send-verification" method="post" action="{{ route('verification.send') }}">
                            @csrf
                        </form>
                    
                        <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6">
                            @csrf
                            @method('patch')
                    
                            <div>
                                <x-input-label for="name" :value="__('Nom')" />
                                <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" :value="old('name', $user->name)" required autofocus autocomplete="name" />
                                <x-input-error class="mt-2" :messages="$errors->get('name')" />
                            </div>
                    
                            <div>
                                <x-input-label for="email" :value="__('Adresse e-mail')" />
                                <x-text-input id="email" name="email" type="email" class="mt-1 block w-full" :value="old('email', $user->email)" required autocomplete="username" />
                                <x-input-error class="mt-2" :messages="$errors->get('email')" />
                    
                                @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                                    <div>
                                        <p class="text-sm mt-2 text-gray-800">
                                            {{ __('Votre adresse e-mail n\'est pas vérifiée.') }}
                    
                                            <button form="send-verification" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                                {{ __('Cliquez ici pour renvoyer l\'e-mail de vérification.') }}
                                            </button>
                                        </p>
                    
                                        @if (session('status') === 'verification-link-sent')
                                            <p class="mt-2 font-medium text-sm text-green-600">
                                                {{ __('Un nouveau lien de vérification a été envoyé à votre adresse e-mail.') }}
                                            </p>
                                        @endif
                                    </div>
                                @endif
                            </div>
                    
                            <div class="flex items-center gap-4">
                                <x-primary-button>{{ __('Sauvegarder') }}</x-primary-button>
                    
                                @if (session('status') === 'profile-updated')
                                    <p
                                        x-data="{ show: true }"
                                        x-show="show"
                                        x-transition
                                        x-init="setTimeout(() => show = false, 2000)"
                                        class="text-sm text-gray-600"
                                    >{{ __('Saved.') }}</p>
                                @endif
                            </div>
                        </form>
                    </section>
                    
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-password-form')
                    <section>
                        <header>
                            <h2 class="text-lg font-medium text-gray-900">
                                {{ __('Mettre à jour le mot de passe') }}
                            </h2>
                    
                            <p class="mt-1 text-sm text-gray-600">
                                {{ __('Assurez-vous que votre compte utilise un mot de passe complexe pour rester sécurisé.') }}
                            </p>
                        </header>
                    
                        <form method="post" action="{{ route('password.update') }}" class="mt-6 space-y-6">
                            @csrf
                            @method('put')
                    
                            <div>
                                <x-input-label for="update_password_current_password" :value="__('Mot de passe actuel')" />
                                <x-text-input id="update_password_current_password" name="current_password" type="password" class="mt-1 block w-full" autocomplete="current-password" />
                                <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />
                            </div>
                    
                            <div>
                                <x-input-label for="update_password_password" :value="__('Nouveau mot de passe')" />
                                <x-text-input id="update_password_password" name="password" type="password" class="mt-1 block w-full" autocomplete="new-password" />
                                <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />
                            </div>
                    
                            <div>
                                <x-input-label for="update_password_password_confirmation" :value="__('Confirmez le mot de passe')" />
                                <x-text-input id="update_password_password_confirmation" name="password_confirmation" type="password" class="mt-1 block w-full" autocomplete="new-password" />
                                <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />
                            </div>
                    
                            <div class="flex items-center gap-4">
                                <x-primary-button>{{ __('Sauvegarder') }}</x-primary-button>
                    
                                @if (session('status') === 'password-updated')
                                    <p
                                        x-data="{ show: true }"
                                        x-show="show"
                                        x-transition
                                        x-init="setTimeout(() => show = false, 2000)"
                                        class="text-sm text-gray-600"
                                    >{{ __('Enregistré') }}</p>
                                @endif
                            </div>
                        </form>
                    </section>
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.delete-user-form')
                    <section class="space-y-6">
                        <header>
                            <h2 class="text-lg font-medium text-gray-900">
                                {{ __('Supprimer le compte') }}
                            </h2>
                    
                            <p class="mt-1 text-sm text-gray-600">
                                {{ __('Une fois votre compte supprimé, toutes ses ressources et données seront définitivement supprimées. Avant de supprimer votre compte, veuillez télécharger toutes les données ou informations que vous souhaitez conserver.') }}
                            </p>
                        </header>
                    
                        <x-danger-button
                            x-data=""
                            x-on:click.prevent="$dispatch('open-modal', 'confirm-user-deletion')"
                        >{{ __('Supprimer le compte') }}</x-danger-button>
                    
                        <x-modal name="confirm-user-deletion" :show="$errors->userDeletion->isNotEmpty()" focusable>
                            <form method="post" action="{{ route('profile.destroy') }}" class="p-6">
                                @csrf
                                @method('delete')
                    
                                <h2 class="text-lg font-medium text-gray-900">
                                    {{ __('Êtes-vous sûr de vouloir supprimer votre compte ?') }}
                                </h2>
                    
                                <p class="mt-1 text-sm text-gray-600">
                                    {{ __('Une fois votre compte supprimé, toutes ses ressources et données seront définitivement supprimées. Veuillez entrer votre mot de passe pour confirmer que vous souhaitez supprimer définitivement votre compte.') }}
                                </p>
                    
                                <div class="mt-6">
                                    <x-input-label for="password" value="{{ __('Password') }}" class="sr-only" />
                    
                                    <x-text-input
                                        id="password"
                                        name="password"
                                        type="password"
                                        class="mt-1 block w-3/4"
                                        placeholder="{{ __('Mot de passe') }}"
                                    />
                    
                                    <x-input-error :messages="$errors->userDeletion->get('password')" class="mt-2" />
                                </div>
                    
                                <div class="mt-6 flex justify-end">
                                    <x-secondary-button x-on:click="$dispatch('close')">
                                        {{ __('Annuler') }}
                                    </x-secondary-button>
                    
                                    <x-danger-button class="ms-3">
                                        {{ __('Supprimer le compte') }}
                                    </x-danger-button>
                                </div>
                            </form>
                        </x-modal>
                    </section>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

