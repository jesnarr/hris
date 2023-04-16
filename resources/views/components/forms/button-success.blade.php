<div>
    <button type="button" {{ $attributes->merge(['class' => 'btn bg-green-500 hover:bg-green-600 text-white fw-700']) }}>
        {{ $slot }}
    </button>
</div>

