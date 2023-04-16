@extends('layouts.base')

@section('og')
    <meta property="og:title" content="HRIS" />
    <style>
        input{
            border-color:transparent !important;
            border:0.5px solid #c0c0c0 !important;
            text-align: right;
        }
    </style>
@endsection

@section('breadcrumbs')
    <li class="breadcrumb-item"><a href="/employee">Employee</a></li>
    <li class="breadcrumb-item"><a href="javascript:void(0)">{{ $title }}</a></li>
@endsection

@section('content')
    @livewire('salary.settings-livewire')
@endsection

@section('scripts')
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="/js/dashboard/dashboard.js"></script>
@endsection

