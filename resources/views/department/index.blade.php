@extends('layouts.base')

@section('breadcrumbs')
    <li class="breadcrumb-item"><a href="/department">Department</a></li>
@endsection

@section('content')
    @livewire('department.parent-livewire')
@endsection

@section('scripts')
<script src="/js/dashboard/dashboard.js"></script>
<script>

</script>
@endsection

