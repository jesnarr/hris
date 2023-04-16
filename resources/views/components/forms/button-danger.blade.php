<div>
    <button type="button" {{ $attributes->merge(['class' => 'btn bg-red-500 hover:bg-red-600 text-white fw-700']) }}>
        {{ $slot }}
    </button>
</div>
