<div>
    <div class="modal-body">
        <div class="row">
            <label>Agent</label>
            <select class="form-control mb-2" id="agent">
                @foreach($agent as $a)
                    <option value="{{ $a->user_id }}">{{ $a->name }}</option>
                @endforeach
            </select>
        </div>
      </div>
      <div class="modal-footer">
        <x-forms.button-success
        onclick="saveSchedule({{ $schedule_id ?? null }})"
        id="button_save" >Save <i class="fal fa-arrow-right"></i></x-forms.button-success>
      </div>

</div>
