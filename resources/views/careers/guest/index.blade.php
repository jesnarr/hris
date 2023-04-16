<x-layout>
    <x-slot name="slot">
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4 pb-10">

            @foreach ($careers as $career)
                <x-career-card :department="$career->department->department" :area="$career->area" :position="$career->job_name" url="{{ '/careers/' . $career->id }}" :description="$career->job_description" :vacancy="$career->job_available" />
            @endforeach
            {{-- <div class="tw-card">
                <a href="#">
                    <img class="rounded-t-lg" src="https://flowbite.com/docs/images/blog/image-1.jpg" alt="" />
                </a>
                <div class="p-5">
                    <h5 class="tw-card-title">Information Technology</h5>
                    <h5 class="font-bold text-2xl mb-2">Software Engineer</h5>

                    <hr class="-mx-5" />

                    <div class="py-2">
                        <div class="flex justify-evenly items-center">
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" class="mr-2 inline-block h-5 w-5 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                                <span class="font-bold text-gray-700">Full Time</span>
                            </div>

                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" class="mr-2 inline-block h-5 w-5 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                                <span class="font-bold text-gray-700">Manila</span>
                            </div>

                        </div>

                    </div>

                    <hr class="-mx-5" />
                    <p class="mt-2 tw-card-body line-clamp-3">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order. Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                    <a href="#" class="tw-card-button">
                        Read more
                        <svg class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                        </svg>
                    </a>
                </div>
            </div> --}}
        </div>
    </x-slot>
</x-layout>
