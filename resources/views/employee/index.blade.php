@extends('layouts.base')

@section('breadcrumbs')
    <li class="breadcrumb-item"><a href="/employee">{{ $title }}</a></li>
@endsection

@section('content')
    @livewire('employee.parent-livewire', ['title' => $title])
@endsection

@section('scripts')
<script src="/js/dashboard/dashboard.js"></script>
@endsection

