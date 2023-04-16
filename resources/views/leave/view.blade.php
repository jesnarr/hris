@extends('layouts.one-panel')
@section('panel-header')
    <div class="panel-toolbar pr-3 mb-1 align-self-end d-flex-end">
        <x-forms.button-primary onclick="modalComponent(this.value,null)" data-target="#add-schedule" class="float-right"  value="add-leave"><i class="fal fa-plus mr-2"></i>Add
        </x-forms.button-primary>
    </div>
@endsection
@section('panel-content')

    <div class="row">
        <div class="list-grid mt-5 col-md-6 col-xs-6">
            <div class="projects">
                <div id="panel-1" class="panel panel-locked">
                    {{-- start of header --}}
                    <div class="panel-hdr">
                        <h2>
                            <div class="d-flex flex-row">
                                <div class="p-2 flex-5">
                                   Leave
                                </div>
                            </div>
                        </h2>

                    </div>
                    {{-- end of header --}}

                    {{-- start of panel --}}
                    <div class="panel-container show">
                        <div class="panel-content">
                                @livewire('tables.leave.display',['leave' => $leave])
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="list-grid mt-5 col-md-6 col-xs-6" id="eligibilities">
            <div class="projects">
                <div id="panel-1" class="panel panel-locked">
                    {{-- start of header --}}
                    <div class="panel-hdr">
                        <h2>
                            <div class="d-flex flex-row">
                                <div class="p-2 flex-5">
                                   Eligibility

                                </div>
                            </div>
                        </h2>

                    </div>
                    {{-- end of header --}}

                    {{-- start of panel --}}
                    <div class="panel-container show">
                        <div class="panel-content">
                            <div class="panel-container show">
                                <div class="panel-content">

                                    @livewire('users.add',['leave_id' => $leave->id]);


                                    <table class="dt-basic table  table-striped w-100">
                                        <thead>
                                            <tr>
                                                {{-- <th>Membership ID</th> --}}
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>

                                    </table>

                                    {{-- <div class="col-md-12 mb-4">
                                    <button onClick="" class="btn btn-sm btn-primary" id="move" style="display:none">Move</button>
                                </div> --}}
                                </div>
                            </div>
                                {{-- @livewire('tables.leave.eligibility',['leave_id' => $leave->id]) --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection

@section('scripts')

<script src="/js/eligibility/eligibility.js"></script>
<script>
 $('.dt-basic').DataTable({
        stateSave: true,
        processing: true,
        fixedHeader: {
            header: true,
            footer: true
        },
        responsive: true,
        ajax: "{!! url()->current() !!}",
        deferRender: true,
        columns: @json($response),
    });

    var rad = $('input[name="eligibility"]:checked').val();
    if(rad == 3)
        $('#eligibilities').css('display','block')
    else
         $('#eligibilities').css('display','none')

</script>
@endsection
