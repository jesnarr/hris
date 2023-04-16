@props([
    'image', 'name', 'position', 'contact', 'email'
])

<div>
    <div class="w-full bg-white rounded-lg p-12 flex flex-col justify-center items-center shadow-md @admin cursor-pointer @endadmin h-100" {{ $attributes }}>
        <div class="mb-2">
            <img class="object-center object-cover rounded-full border-2 border-gray-100 w-24 h-24 md:h-30 md:w-30 lg:h-36 lg:w-36" src="{{ $image }}" alt="photo">
        </div>
        <div class="text-center pb-8 w-full">
            <p class="truncate text-sm text-gray-700 hover:text-blue-400 font-bold mb-2" title="{{ $name }}">{{ $name }}</p>
            <p class="truncate text-sm text-gray-400 font-normal " title="{{ $position }}">{{ $position }}</p>
        </div>
        <div class="flex flex-col w-full border-t-2 border-gray-200 text-center justify-center items-center">
            <div class="flex justify-center items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                </svg>
                <p class="truncate text-sm pl-2 py-2 text-gray-700 font-bold">{{ $contact }}</p>
            </div>
            <div class="flex justify-center items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                </svg>
                <p class="truncate text-sm pl-2 py-2 text-gray-700 font-bold">{{ $email }}</p>
            </div>
        </div>
    </div>
</div>
