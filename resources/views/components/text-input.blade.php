@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-gray-300 focus:ring-0 focus:border-black rounded-md shadow-sm']) !!}>
