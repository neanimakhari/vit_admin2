<div {{ $attributes->merge(['class' => 'bg-white shadow sm:rounded-lg']) }}>
    @isset($header)
        <div class="px-4 py-5 sm:px-6 border-b border-gray-200">
            {{ $header }}
        </div>
    @endisset

    <div class="px-4 py-5 sm:p-6">
        {{ $slot }}
    </div>

    @isset($footer)
        <div class="px-4 py-4 sm:px-6 bg-gray-50 border-t border-gray-200">
            {{ $footer }}
        </div>
    @endisset
</div> 