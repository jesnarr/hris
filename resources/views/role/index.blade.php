@extends('layouts.one-panel')

@section('panel-content')
    <div class="row">
        <div class="list-grid mt-5 col-md-12 col-xs-12">
            <div class="projects">
                <div id="panel-1" class="panel panel-locked">
                    {{-- start of header --}}
                    <div class="panel-hdr">
                        <h2>
                            <div class="d-flex flex-row">
                                <div class="p-2 flex-5">
                                   Roles
                                </div>
                            </div>
                        </h2>

                    </div>
                    {{-- end of header --}}

                    {{-- start of panel --}}
                    <div class="panel-container show">
                        <div class="panel-content">
                            <table class="dt-basic table  table-hover table-striped w-100">
                                <thead>
                                    <tr>
                                        {{-- <th>Membership ID</th> --}}
                                        <th>Module</th>
                                        <th>Members</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($roles as $key => $value)
                                        <tr>
                                            <td>{{ $value }}</td>
                                            <td>
                                                <a href="">Members</a>
                                            </td>
                                            <td>
                                                <x-forms.button-primary  data-target="#add-schedule" onclick="add_schedule(null)" class="btn-sm">Add Agent
                                                </x-forms.button-primary>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>

                            {{-- <div class="col-md-12 mb-4">
                            <button onClick="" class="btn btn-sm btn-primary" id="move" style="display:none">Move</button>
                        </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@push('modals')
    <div class="modal fade" id="add-schedule" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document" style="top:20%">
            <div class="modal-content" style="border-radius: 0.75rem;">
                <div class="modal-header">
                    <h1 class="modal-title text-lg">Add Agent</h1>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fal fa-times text-red-500"></i></span>
                    </button>
                </div>
                @livewire('modals.agents.add')
                {{-- @livewire('modals.schedule.add', ['days' => $days,'time' => $time]) --}}
            </div>
        </div>
    </div>
@endpush

@section('scripts')
<script src="/js/schedule/schedule.js"></script>
    <script>
    </script>
@endsection
