<div>
    <button type="button" {{ $attributes->merge(['class' => 'btn bg-gray-800 hover:bg-gray-700 text-white fw-700']) }}>
        {{ $slot }}
    </button>
</div>
