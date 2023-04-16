<div>
    <div class="modal-body">
        <div class="row">
            <label>Day</label>
            <select class="form-control mb-2" id="day" wire:model="day">
                @foreach($days as $key => $value)
                    <option value="{{ $key }}">{{ $value }}</option>
                @endforeach
            </select>
        </div>
        <div class="row">
            <label>From</label>
            <select class="form-control mb-2" id="from"  wire:model="from">
                @foreach($time as $t)
                    <option value="{{ $t }}">{{ $t }}</option>
                @endforeach
            </select>
        </div>
        <div class="row" id="to_display">
            <label>To</label>
            <select class="form-control" id="to" wire:model="to">
                @foreach($time as $t)
                      <option value="{{ $t }}">{{ $t }}</option>
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
