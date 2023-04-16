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
                                    Request MRF
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
                            <div class="col-md-3 mb-3">
                                <label>Requesting Department <span style="color:red;font-size:16px;">*</span></label>
                                <select id="department" class="form-control">
                                    <option value="">Select --</option>
                                    <option value="1">ACCOUNTS</option>
                                    <option value="2">BUSINESS DEVELOPMENT</option>
                                    <option value="3">CUSTOMER SERVICE</option>
                                    <option value="4">DIGITAL SALES</option>
                                    <option value="5">EXECUTIVE</option>
                                    <option value="6">HR</option>
                                    <option value="7">IT</option>
                                    <option value="8">JVB WCC</option>
                                    <option value="9">PROGRAMMES</option>
                                    <option value="10">QUALITY CONTROL</option>
                                    <option value="11">SALES</option>
                                </select>
                            </div>
                            <div class="col-md-3 mb-3">
                                <label>Position Title <span style="color:red;font-size:16px;">*</span></label>
                                <input type="text"  id="position" class="form-control">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label>Number Required <span style="color:red;font-size:16px;">*</span></label>
                                {{-- <input type="number"  id="number" class="form-control"> --}}
                                <select class="form-control" id="number">
                                    @for ($i=1;$i<=100;$i++)
                                        <option value="{{ $i }}">{{ $i }}</option>
                                    @endfor
                                </select>
                            </div>
                            <div class="col-md-3 mb-3">
                                <label>Date Needed <span style="color:red;font-size:16px;">*</span></label>
                                <input type="text"  id="date_needed" class="form-control datepicker-basic">
                            </div>
                        </div>
                        <div class="row mt-5" style="border-top:1px solid #c0c0c0">
                            <div class="col-md-6 mt-3">
                                <h4>APPOINTMENT	STATUS <span style="color:red;font-size:16px;">*</span></h4>
                                <p>Specify number or personal per status</p>
                                <label>Project-based</label>
                                <select class="form-control" id="project_based">
                                    <option value="0">Select --</option>
                                    @for ($i=1;$i<=100;$i++)
                                        <option value='{{ $i }}'>{{ $i }}</option>
                                    @endfor
                                </select>
                                <label>Probationary</label>
                                <select class="form-control" id="probationary">
                                    <option value="0">Select --</option>
                                    @for ($i=1;$i<=100;$i++)
                                        <option value='{{ $i }}'>{{ $i }}</option>
                                    @endfor
                                </select>

                                <label>Regular</label>
                                <select class="form-control" id="regular">
                                    <option value="0">Select --</option>
                                    @for ($i=1;$i<=100;$i++)
                                        <option value='{{ $i }}'>{{ $i }}</option>
                                    @endfor
                                </select>

                            </div>

                            <div class="col-md-6 mt-3">
                                <h4>SPECIFICATIONS <span style="color:red;font-size:16px;">*</span></h4>
                                <br><br><br>
                                <select class="form-control" id="specs1">
                                    <option value="">Select Specifications --</option>
                                    <option value="1">Justification</option>
                                    <option value="2">Job Description</option>
                                    <option value="3">Organizational Chart</option>
                                </select>
                            </div>
                        </div>

                        <div class="row mt-5" style="border-top:1px solid #c0c0c0">
                            <div class="col-md-6 mt-3">
                                <h4>REASON FOR REQUISITION <span style="color:red;font-size:16px;">*</span></h4>

                                <select class="form-control" onchange="selectStatus(this.value)" id="app_status">
                                    <option value="">Select Status--</option>
                                    <option value="1">Replacement</option>
                                    <option value="2">Additional Manpower</option>
                                    <option value="3">Position Upgrade</option>
                                </select>
                                 <div id="status1" style="display:none">
                                        <label>Select the reason for replacement and name to be replace:</label>
                                        <select class="form-control" id="replacement">
                                            <option value="1">Replacement</option>
                                            <option value="2">Termination</option>
                                            <option value="3">End of Contract</option>
                                            <option value="4">Promotion</option>
                                            <option value="5">Transfer</option>
                                        </select>
                                    </div>
                                <div id="status2" style="display:none">
                                        <label>Select --</label>
                                        <select class="form-control" id="manpower">
                                            <option value="1">Budgeted</option>
                                            <option value="2">Unbudgeted</option>
                                        </select>
                                </div>
                            </div>

                            <div class="col-md-6 mt-3">
                                <h4>SPECIFICATIONS <span style="color:red;font-size:16px;">*</span></h4>
                                <select class="form-control" id="specs2">
                                    <option value="">Select Specifications --</option>
                                    <option value="1">Rank and File</option>
                                    <option value="2">Supervisory/Officer</option>
                                    <option value="3">Manager</option>
                                </select>

                                <label class="mr-3 mt-5">Qualifications: <span style="color:red;font-size:16px;">*</span></label><br>
                                <textarea class="form-control" id="qualification"></textarea>
                                    <br>
                                    <label>Signature</label>

                                        <div class="form-group mb-0">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input"
                                                    id="file">
                                                <label class="custom-file-label" for="customFile"
                                                    id="file_name">Choose file</label>
                                            </div>
                                        </div>


                            </div>



                            <div class="col-md-12 pt-4 pb-2">
                                <button class="btn btn-outline-primary float-right" id="submit"
                                    onClick="submit_mrf()">Submit <span class="fal fa-arrow-right"></span></button>
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
{{-- <script src="/js/api.js"></script> --}}
<script>
    const selectStatus = (value) => {
        for(i = 1;i<=2;i++){
            if(i == value){
                document.getElementById('status'+i).style.display = 'block';
            }else{

                document.getElementById('status'+i).style.display = 'none';
            }
        }
    }

    const submit_mrf = async () => {

    const allowedExtensions = /(\.jpg|\.jpeg|\.png)$/i;
        var form_data = new FormData()
        const MRF_INFORMATION = ['department', 'position', 'number', 'date_needed',
                'specs1', 'specs2', 'qualification',
            ];
            var x = 0;
            MRF_INFORMATION.map(value => {
                var data = $(`#${value}`).val();
                if (!data.trim()) {
                    x++;
                    return displayMessage('error', 'Please fill up all required fields')

                }
                form_data.append(value, data)


            })
        const file_data = document.getElementById('file').files[0];
        var app_status = $('#app_status').val() ? $('#app_status').val() : 0;
        var project_based = $('#project_based').val() ? $('#project_based').val() : 0;
        var probationary = $('#probationary').val() ? $('#probationary').val() : 0;
        var regular = $('#regular').val() ? $('#regular').val() : 0;
        form_data.append('app_status',app_status)
        form_data.append('project_based',project_based)
        form_data.append('probationary',probationary)
        form_data.append('regular',regular)
        const total = parseInt(project_based) + parseInt(probationary) + parseInt(regular);


        if(project_based == 0 && probationary == 0 && regular == 0)
            return displayMessage('error', 'Please specify the number of appointment ')
        if(total != $('#number').val())
             return displayMessage('error', 'Personal status is not equal to the number of required personal')
        if(!app_status)
             return displayMessage('error', 'Please select the reason for requisition')
        if(app_status == 1)
                form_data.append('appointment_status',$('#replacement').val())
        else if (app_status == 2)
               form_data.append('appointment_status',$('#manpower').val())
        // files
        if (!file_data)
            return displayMessage('error', 'File is required')
        if (!allowedExtensions.exec(file_data.name))
            return displayMessage('error', 'Invalid file type');
        const file_size = Math.round(file_data.size / 1024);
        if (file_size > (1024 * 1024) * 4)
            return displayMessage('error',
                'File size too large, Please compress it here : <a href="smallpdf.com">SMALLPDF</a>');
        form_data.append('file', file_data);

    if(x == 0){
        try{
        const res = await callApi('post', '/mrf/submit_prf', form_data);
            if(res.status == 200){
                 displayMessage('success', res.data.message)
                 location.reload();
            }else{
                return displayMessage('error', res.data.message)

            }
        }catch(err){
            return displayMessage('error', err)

        }
    }

    }
</script>
@endsection
