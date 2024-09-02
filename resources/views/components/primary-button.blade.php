<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-2 bg-jaune rounded-md font-black text-xs uppercase tracking-widest']) }}>
    {{ $slot }}
</button>
