<div>
    <div class="modal-body">
        <div class="row mb-3 col-md-12 col-xs-12">
            <label>Type Name *</label>
            <select id="leave_id" class="form-control">
                <option value="0" readonly>Select --</option>
                @foreach ($leaves as $l)
                    <option value="{{ $l->id }}">{{ $l->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="row mb-3 col-md-12 col-xs-12">
            <input type="radio" name="request_type" checked onclick="selectType(this.value)" value="1"><label
                class="mr-2">Single Day</label>
            <input type="radio" name="request_type" onclick="selectType(this.value)" value="2"><label
                class="mr-2">Multiple Day</label>
        </div>

        {{-- <div class="col-md-12"> --}}
        <div id="single">
            <div class="row mb-3">
                <div class="col-md-3">
                    <input type="text" class="datepicker-basic form-control" id="dates">
                </div>
                <div class="col-md-3">
                    <select class="form-control" id="from" onchange="selectTime()">
                        @foreach ($times as $t)
                            <option value="{{ $t }}">{{ $t }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-3">
                    <select class="form-control" id="to" onchange="selectTime()">
                        @foreach ($times as $t)
                            <option value="{{ $t }}">{{ $t }}</option>
                        @endforeach
                    </select>
                </div>
                <label style="line-height: 30px;visibility:hidden">Total <strong><span id="total_time"></span></strong></label>
                <small id="feed" class="text-red-500  ml-3"></small>
            </div>

        </div>

        <div id="multi" style="display:none">
            <div class="row mb-3">
                <div class="col-md-3">
                    <label>From</label>
                    <input type="text" class="datepicker-basic form-control" id="from_multi" onchange="getValidation(1)">
                </div>
                <div class="col-md-3">
                    <label>To</label>
                    <input type="text" class="datepicker-basic form-control" id="to_multi" onchange="getValidation(2)" disabled>
                </div>

                <div class="col-md-3"></div>
                <label style="line-height: 80px;visibility:hidden" st>Total <strong><span id="total_day"></span></strong></label>
                <small id="error_feed" class="text-red-500 ml-3"></small>
            </div>

        </div>
        {{-- </div> --}}

        <div class="row mb-3 col-md-12 col-xs-12">
            <label>Note (Optional)</label>
            <textarea id="note" class="form-control"></textarea>
        </div>

        <div class="row mb-3 col-md-12 col-xs-12">
            <label>Upload Attachment (Optional)</label>
            <input type="file" id="fil1" class="form-control">
            <small>Max file size: 4MB. File format: pdf,docx,png,jpeg,jpg</small>
        </div>


        <div class="row mb-3 col-md-12 col-xs-12" wire:ignore>
            <label>Add Members to notify them</label>
            <select class="form-control select2" multiple="multiple" name="users[]" id="users" wire:ignore>
                @foreach ($users as $u)
                       <option value="{{ $u->work_email }}">{{ $u->last_name.', '.$u->first_name}}</option>
                @endforeach
            </select>

            {{-- <select class="form-control select2 " id="users" wire:model="user">
                <option value="">--Select--</option>
                @foreach ($users as $u)
                        <option value="{{ $u->id }}">{{ $u->name}}</option>
                 @endforeach
            </select> --}}
            {{-- <input id="search_data" type="text" list="custom_field2_datalist" autocomplete="off"
            onChange="saveUser(this.value,{{ $leave->id }})"
                class="form-control" placeholder="Add Members to notify them">
            <datalist id="custom_field2_datalist">
                @foreach ($user as $u)
                        <option value="{{ $u->email }}">{{ $u->name}}</option>
                    @endforeach
            </datalist> --}}
        </div>
    </div>


    <div class="modal-footer">
        <x-forms.button-success class=" waves-effect waves-themed" type="button" disabled="" style="display:none;"  id="loader">
            <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
            Please wait...
            <i class="fal fa-arrow-right"></i></x-forms.button-success>

        <x-forms.button-success onclick="submitRequest()" {{-- wire:click="saveLeave()" --}} id="save_request">Save <i
                class="fal fa-arrow-right"></i></x-forms.button-success>
    </div>
    @push('scripts')
    <script src="/js/formplugins/select2/select2.bundle.js"></script>
        <script>
            var date_now = new Date();
            $(".datepicker-basic").datepicker({
                startDate: new Date(new Date().setDate(new Date().getDate() + 2)),
                format: "dd M yyyy",
                daysOfWeekDisabled: [1,0]
            });

            $('#users').select2({
                dropdownParent: $('#add-leave')
            })

            document.getElementById('dates').value = date_now.getDate()+2 + '-' + (date_now.getMonth() + 1) + "-" + date_now
                .getFullYear();
        </script>
    @endpush
</div>
