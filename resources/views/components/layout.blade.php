<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    <script src="{{ mix('js/app.js') }}" defer></script>

    @stack('styles')
    <style>
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        input[type=number] {
            -moz-appearance: textfield;
        }

    </style>

    @livewireStyles
</head>

<body class="font-sans antialiased">
    <x-jet-banner />

    <div class="min-h-screen bg-white">
        @include('layouts.navbar')
        <!-- Page Heading -->
        {{-- @if (isset($header))
            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>
        @endif --}}

        @if (Session::has('success'))
            <x-alert.success message="{{ Session::get('success') }}" />
        @endif

        @if (Session::has('error'))
            <x-alert.error message="{{ Session::get('error') }}" />
        @endif

        @if ($errors->any())
            <x-alert.errors>
                <x-slot name="errors">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </x-slot>
            </x-alert.errors>
        @endif

        <!-- Page Content -->
        <main class="mt-10 mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            {{ $slot }}
        </main>
    </div>

    <script>
        const DATEPICKER_OPTIONS = {
            dateFormat: 'F d, Y'
        }
    </script>

    @stack('modals')
    @stack('scripts')
    @livewireScripts
</body>

</html>
