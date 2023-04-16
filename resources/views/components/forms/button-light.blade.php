<div>
    <button type="button" {{ $attributes->merge(['class' => 'btn bg-gray-200 hover:bg-gray-300 text-gray-800 fw-700']) }}>
        {{ $slot }}
    </button>
</div>
