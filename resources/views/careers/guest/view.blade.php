<x-layout>
    <x-slot name="slot">
        <div class="mt-10 sm:mt-0">
            <div class="md:grid md:grid-cols-4 md:gap-6">
                <div class="col-span-3 md:col-span-2">
                    <div class="p-4 sm:px-0">

                    </div>

                    <div class="p-4 sm:px-0">
                        <h3 class="text-2xl font-bold leading-6 text-gray-900 uppercase">{{ $career->job_name }}</h3>
                        <p class="mt-1 text-base text-gray-700">{!! $career->job_description !!}</p>
                        <p class="mt-4 text-base text-gray-900">{!! nl2br($career->job_responsibilities) !!}</p>
                        <p class="mt-4 text-base text-gray-900">{!! nl2br($career->job_qualification) !!}</p>
                    </div>
                </div>
                <div class="mt-5 md:mt-0 md:col-span-2">
                    <form action="{{ route('applicant.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="shadow overflow-hidden sm:rounded-md">
                            <div class="px-4 py-5 bg-white sm:p-6">
                                <div class="grid grid-cols-6 gap-6">
                                    <div class="col-span-6">
                                        <label for="first_name" class="block text-sm font-medium text-gray-700">First name</label>
                                        <input type="text" name="first_name" id="first_name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" autocomplete="off" >
                                    </div>

                                    <div class="col-span-6">
                                        <label for="last_name" class="block text-sm font-medium text-gray-700">Last name</label>
                                        <input type="text" name="last_name" id="last_name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" autocomplete="off" >
                                    </div>

                                    <div class="col-span-6">
                                        <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                                        <input type="email" name="email" id="email" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" autocomplete="off" >
                                    </div>

                                    <div class="col-span-6">
                                        <label for="contact_number" class="block text-sm font-medium text-gray-700">Contact Number <small class="text-red-500">Format ex: (09123456789)</small></label>
                                        <input type="number" name="contact_number" id="contact_number" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" autocomplete="off" >
                                    </div>

                                    <div class="col-span-6">
                                        <label for="available_start_date" class="block text-sm font-medium text-gray-700">Available Start Date</label>
                                        <input type="text" name="available_start_date" id="available_start_date" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" autocomplete="off" >
                                    </div>

                                    <div class="col-span-6">
                                        <label for="referral" class="block text-sm font-medium text-gray-700">Referral</label>
                                        <select name="referral" id="referral" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" >
                                            <option value="">--Select your referral--</option>
                                            @foreach ($employees as $email => $name)
                                                <option value="{{ $email }}">{{ $name }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="col-span-6">
                                        <label for="resume" class="block text-sm font-medium text-gray-700">Resume / CV</label>
                                        <input type="file" id="resume" name="resume" accept="application/pdf, applicaton/msword" />
                                    </div>
                                </div>
                            </div>
                            <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                                <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        @push('styles')
            <link rel="stylesheet" href="{{ asset('css/flatpickr.css') }}">
        @endpush

        @push('scripts')
            <script src="{{ asset('js/flatpickr.min.js') }}"></script>
            <script>
                const start_date = document.querySelector('#available_start_date')
                start_date.flatpickr({
                    ...DATEPICKER_OPTIONS,
                    minDate: "{!! \Carbon\Carbon::now()->format('F d, Y') !!}",
                    maxDate: "{!! \Carbon\Carbon::now()->addDays(45)->format('F d, Y') !!}"
                })
            </script>
        @endpush
    </x-slot>
</x-layout>
