@extends('layouts.one-panel')

@section('head')

@endsection


@section('panel-content')
    <div class="container">
        <div class="list-grid mt-5 col-md-12 col-xs-12">
            <div class="projects">
                <div id="panel-1" class="panel panel-locked">
                    {{-- start of header --}}
                    <div class="panel-hdr">
                        <h2>
                            <div class="d-flex flex-row">
                                <div class="p-2 flex-5">
                                    <x-forms.button-primary onclick="modalComponent(this.value,null)" data-target="#add-schedule" class="float-right"  value="cut-off">
                                        <i class="fal fa-plus mr-2"></i>Set Cut-off
                                    </x-forms.button-primary>
                                </div>
                            </div>


                        </h2>


                    </div>
                    {{-- end of header --}}

                    {{-- start of panel --}}
                    <div class="panel-container show">
                        <div class="panel-content">
                            <div class="col-md-12">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @push('modals')
    <div class="modal fade " tabindex="-1" id="cut-off" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title h4">Set cut-off</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fal fa-times"></i></span>
                    </button>
                </div>
                <div class="modal-body">
                    <label>First cut-off</label>
                    <div class="row mb-3 col-md-12 col-xs-12">
                        <label>From (Day)</label>
                        <input type="number" class="form-control" min="0">
                        <label>To (Day)</label>
                        <input type="number" class="form-control" min="0">
                    </div>
                    {{-- @livewire('modals.leave.request') --}}
                </div>
                <div class="modal-footer">
                    {{-- @livewire('modals.leave.request') --}}
                </div>
            </div>
        </div>
    </div>
    @endpush
@endsection

@section('scripts')
<script src="/js/components/modal.js"></script>
    {{-- <script src="/js/api.js"></script> --}}
    <script>
        // const openCutoff = () => {
        //     $('#')
        // }
    </script>
@endsection
