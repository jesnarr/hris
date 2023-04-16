<div class="tw-card">
    <a href="{{ $url }}">
        <img class="rounded-t-lg" src="https://flowbite.com/docs/images/blog/image-1.jpg" alt="" />
    </a>
    <div class="p-5">
        <h5 class="tw-card-title">{{ $department }}</h5>
        <h5 class="font-bold text-lg sm:text-xl">{{ $position }}</h5>
        <h5 class="text-base sm:text-lg mb-2 font-bold text-gray-500">Vacancy: <span class="text-black">{{ $vacancy }}</span></h5>

        <hr class="-mx-5" />

        <div class="relative py-2">
            <div class="flex justify-evenly items-center">
                <div class="whitespace-nowrap">
                    <svg xmlns="http://www.w3.org/2000/svg" class="mr-2 inline-block h-5 w-5 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                    </svg>
                    <span class="font-bold text-gray-700">Full Time</span>
                </div>

                <div class="whitespace-nowrap">
                    <svg xmlns="http://www.w3.org/2000/svg" class="mr-2 inline-block h-5 w-5 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>
                    <span class="font-bold text-gray-700">{{ $area }}</span>
                </div>

            </div>

        </div>

        <hr class="-mx-5" />
        <p class="mt-2 tw-card-body line-clamp-3 cursor-default">{!! $description !!}</p>
        <div class="flex items-center py-2 px-5 -mx-5 -mb-5 bg-gray-50 space-x-2 rounded-b border-t border-gray-200">
            <a href="{{ $url }}" class="tw-card-button">
                Read more
                <svg class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                </svg>
            </a>
        </div>
    </div>
</div>
