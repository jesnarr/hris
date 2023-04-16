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
                                    MRF
                                </div>
                            </div>
                        </h2>

                    </div>
                    {{-- end of header --}}

                    {{-- start of panel --}}
                    <div class="panel-container show">
                        <div class="panel-content">
                            <div class="col-md-12 mb-4">
                                <div class="row">
                                    <div class="col-md-3">
                                        <label>Requesting Department</label>

                                    </div>
                                    <div class="col-md-3">
                                        <label>
                                            @if (array_key_exists($mrf->department, $arr))
                                                <strong> {{ $arr[$mrf->department] }}</strong>
                                            @endif
                                        </label>
                                    </div>

                                    <div class="col-md-3"><label>Position Title</label> </div>
                                    <div class="col-md-3"><label><strong>
                                                {{ strtoupper($mrf->position) }}</strong></label></div>
                                    <div class="col-md-3"><label>Number Required</label> </div>
                                    <div class="col-md-3"><label><strong> {{ $mrf->number }}</strong></label>
                                    </div>
                                    <div class="col-md-3"><label>Date Needed</label> </div>
                                    <div class="col-md-3"><label><strong>
                                                {{ date('F d, Y', strtotime($mrf->date_needed)) }}</strong></label></div>

                                    <div class="col-md-3"><label>Appointment Status</label></div>
                                    <div class="col-md-3">
                                        <strong>
                                            @if ($mrf->project_based != 0)
                                                <label>Project Based : {{ $mrf->project_based }}</label>
                                            @endif
                                            @if ($mrf->probationary != 0)
                                                <label> Probationary : {{ $mrf->probationary }}</label>
                                            @endif
                                            @if ($mrf->regular != 0)
                                                <label>Regular : {{ $mrf->regular }}</label>
                                            @endif
                                        </strong>
                                    </div>
                                    <div class="col-md-3"><label>Attachment</label></div>
                                    <div class="col-md-3">
                                        <label>
                                            @if (array_key_exists($mrf->specs1, $arr2))
                                                <strong>{{ $arr2[$mrf->specs1] }}</strong>
                                            @endif
                                        </label>
                                    </div>
                                    <div class="col-md-3"><label>Reason for Requisition</label></div>
                                    <div class="col-md-3">
                                        <label>
                                            @if (array_key_exists($mrf->app_status, $arr3))
                                                <strong>{{ $arr3[$mrf->app_status] }}</strong>
                                            @endif
                                        </label>
                                    </div>

                                    <div class="col-md-3"><label>Specifications</label></div>
                                    <div class="col-md-3">
                                        <label>
                                            @if (array_key_exists($mrf->specs2, $arr4))
                                                <strong>{{ $arr4[$mrf->specs2] }}</strong>
                                            @endif
                                        </label>
                                    </div>

                                    <div class="col-md-3"><label>Qualification</label></div>
                                    <div class="col-md-3"><label><strong>{{ $mrf->qualification }}</strong></label>
                                    </div>
                                </div>


                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="container">
        <div class="list-grid mt-5 col-md-12 col-xs-12">
            <div class="projects">
                <div id="panel-2" class="panel panel-locked">
                    {{-- start of header --}}
                    <div class="panel-hdr">
                        <h2>
                            <div class="d-flex flex-row">
                                <div class="p-2 flex-5">
                                    Signatures
                                </div>
                            </div>
                        </h2>

                    </div>
                    {{-- end of header --}}

                    {{-- start of panel --}}
                    <div class="panel-container show">
                        <div class="panel-content">

                            <div class="row">

                                <div class="col-md-6 mb-3 ">
                                    <label>Hiring Manager <span
                                            class="fal fa-check badge badge-success ml-5">Submitted</span> </label><br>
                                    <label>Date Signed:
                                        <strong>{{ isset($mrf->signature->r_date) ? date('F d, Y g:i A', strtotime($mrf->signature->r_date)) : '' }}</strong></label>

                                </div>

                                @if (isset($mrf->signature->s_signature))
                                    <div class="col-md-6 mb-3">
                                        <label>Successive Head <span
                                                class="fal fa-check badge badge-success ml-5">Submitted</span> </label><br>
                                        <label>Date Signed:
                                            <strong>{{ isset($mrf->signature->s_date) ? date('F d, Y g:i A', strtotime($mrf->signature->s_date)) : '' }}</strong></label>

                                    </div>
                                @else
                                    <div class="col-md-5 mb-3">
                                        <label>Successive Head</label>
                                        <div class="form-group mb-0">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="file_1">
                                                <label class="custom-file-label" for="customFile" id="file_name">Choose
                                                    file</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-1 col-xs-1 mb-3">
                                        <label></label>
                                        <div class="form-group mb-0">
                                            <a href="javascript:void(0);"
                                                class="btn btn-primary btn-icon waves-effect waves-themed form-control"
                                                onclick="uploadFile(1,{{ $mrf->id }},'s')">
                                                <i class="fal fa-download"></i>
                                            </a>
                                        </div>
                                    </div>
                                @endif

                                @if (isset($mrf->signature->hr_signature))
                                    <div class="col-md-6 mb-3">
                                        <label>HR Manager <span
                                                class="fal fa-check badge badge-success ml-5">Submitted</span> </label><br>
                                        <label>Date Signed:
                                            <strong>{{ isset($mrf->signature->hr_date) ? date('F d, Y g:i A', strtotime($mrf->signature->hr_date)) : '' }}</strong></label>

                                    </div>
                                @else
                                    <div class="col-md-5 mb-3">
                                        <label>HR Manager</label>
                                        <div class="form-group mb-0">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="file_2">
                                                <label class="custom-file-label" for="customFile" id="file_name">Choose
                                                    file</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-1 col-xs-1 mb-3">
                                        @if (Auth::user()->email == 'test@gmail.com' )
                                            <label></label>
                                            <div class="form-group mb-0">
                                                <a href="javascript:void(0);"
                                                    class="btn btn-primary btn-icon waves-effect waves-themed form-control"
                                                    onclick="uploadFile(2,{{ $mrf->id }},'hr')">
                                                    <i class="fal fa-download"></i>
                                                </a>
                                            </div>
                                        @else
                                            <label></label>
                                            <div class="form-group mt-2">
                                                <span class="fal fa-times badge badge-danger">No signature</span>
                                            </div>
                                        @endif
                                    </div>
                                @endif
                                @if (isset($mrf->signature->dir_signature))
                                    <div class="col-md-6 mb-3">
                                        <label>Director of Finance and Administration <span
                                                class="fal fa-check badge badge-success ml-5">Submitted</span> </label><br>
                                        <label>Date Signed:
                                            <strong>{{ isset($mrf->signature->dir_date) ? date('F d, Y g:i A', strtotime($mrf->signature->dir_date)) : '' }}</strong></label>

                                    </div>
                                @else
                                    <div class="col-md-5 mb-3">
                                        <label>Director of Finance and Administration</label>
                                        <div class="form-group mb-0">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="file_3">
                                                <label class="custom-file-label" for="customFile" id="file_name">Choose
                                                    file</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-1 col-xs-1 mb-3">
                                        @if (Auth::user()->email == 'test@gmail.com')
                                            <label></label>
                                            <div class="form-group mb-0">
                                                <a href="javascript:void(0);"
                                                    class="btn btn-primary btn-icon waves-effect waves-themed form-control"
                                                    onclick="uploadFile(3,{{ $mrf->id }},'dir')">
                                                    <i class="fal fa-download"></i>
                                                </a>
                                            </div>
                                        @else
                                            <label></label>
                                            <div class="form-group mt-2">
                                                <span class="fal fa-times badge badge-danger">No signature</span>
                                            </div>
                                        @endif

                                    </div>
                                @endif


                                @if (isset($mrf->signature->bir_signature))
                                    <div class="col-md-6 mb-3">
                                        <label>Managing Director <span
                                                class="fal fa-check badge badge-success ml-5">Submitted</span> </label><br>
                                        <label>Date Signed:
                                            <strong>{{ isset($mrf->signature->dir_date) ? date('F d, Y g:i A', strtotime($mrf->signature->dir_date)) : '' }}</strong></label>

                                    </div>
                                @else
                                    <div class="col-md-5 mb-3">
                                        <label>Managing Director</label>
                                        <div class="form-group mb-0">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="file_4">
                                                <label class="custom-file-label" for="customFile" id="file_name">Choose
                                                    file</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-1 col-xs-1 mb-3">
                                        @if (Auth::user()->email == 'test@gmail.com')
                                            <label></label>
                                            <div class="form-group mb-0">
                                                <a href="javascript:void(0);"
                                                    class="btn btn-primary btn-icon waves-effect waves-themed form-control"
                                                    onclick="uploadFile(4,{{ $mrf->id }},'bir')">
                                                    <i class="fal fa-download"></i>
                                                </a>
                                            </div>
                                        @else
                                            <label></label>
                                            <div class="form-group mt-2">
                                                <span class="fal fa-times badge badge-danger">No signature</span>
                                            </div>
                                        @endif


                                    </div>
                                @endif

                            </div>
                        </div>


                    </div>

                </div>
            </div>
        </div>
    </div>
    </div>
    </div>



    {{-- HR Notes --}}


    <div class="container">
        <div class="list-grid mt-5 col-md-12 col-xs-12">
            <div class="projects">
                <div id="panel-2" class="panel panel-locked">
                    {{-- start of header --}}
                    <div class="panel-hdr">
                        <h2>
                            <div class="d-flex flex-row">
                                <div class="p-2 flex-5">
                                    TO BE FILLED OUT BY HRD
                                </div>
                            </div>
                        </h2>

                    </div>
                    {{-- end of header --}}

                    {{-- start of panel --}}
                    <div class="panel-container show">
                        <div class="panel-content">
                            <div class="container">
                                <div class="row">
                                    <label>REMARKS/COMMENTS:</label>
                                    <textarea id="remarks"
                                        class="form-control">{{ isset($mrf->remarks) ? $mrf->remarks : '' }}</textarea>

                                    <label>NAME/S OF HIRES STAFF:</label>
                                    <textarea id="names"
                                        class="form-control">{{ isset($mrf->names) ? $mrf->names : '' }}</textarea>

                                    <label>DATE SERVED:</label>
                                    <input type="text" class="form-control datepicker-basic" id="date_served"
                                        value="{{ isset($mrf->date_served) ? $mrf->date_served : '' }}">
                                </div>
                                @if (!isset($mrf->names) && !isset($mrf->remarks) && !isset($mrf->date_served))
                                    <div class="col-md-12 pt-4 mb-5">
                                        <button class="btn btn-outline-primary float-right" id="submit"
                                            onClick="submitRemarks({{ $mrf->id }})">Submit <span
                                                class="fal fa-arrow-right"></span></button>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
@endsection

@section('scripts')
    <script src="/js/signature/signature.js"></script>
@endsection
