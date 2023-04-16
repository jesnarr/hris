@extends('layouts.base')

@section('og')
    <meta property="og:title" content="HRIS" />
    <meta property="og:url" content="{{ $og_url }}" />
    <meta property="og:image" content="{{ $og_image }}" />
@endsection

@section('breadcrumbs')
    <li class="breadcrumb-item"><a href="/employee">Employee</a></li>
    <li class="breadcrumb-item"><a href="javascript:void(0)">{{ $title }}</a></li>
@endsection

@section('content')
    @livewire('employee.basic-information', ['employee' => $employee])
    <div class="py-3"></div>
    @livewire('employee.job-information', ['employee' => $employee])
    <div class="pb-5"></div>
    @livewire('employee.leave-settings', ['employee' => $employee])
    <div class="pb-5"></div>
    @livewire('employee.settings-information', ['employee' => $employee])
@endsection

@section('scripts')
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="/js/dashboard/dashboard.js"></script>
@endsection
