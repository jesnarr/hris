<div>
    <button type="button" {{ $attributes->merge(['class' => 'btn bg-blue-500 hover:bg-blue-600 text-white fw-700']) }}>
        {{ $slot }}
    </button>
</div>
