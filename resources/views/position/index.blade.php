@extends('layouts.base')

@section('breadcrumbs')
    <li class="breadcrumb-item"><a href="/position">Position</a></li>
@endsection

@section('content')
    @livewire('position.parent-livewire')
@endsection

@section('scripts')
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="/js/dashboard/dashboard.js"></script>
<script>

</script>
@endsection

