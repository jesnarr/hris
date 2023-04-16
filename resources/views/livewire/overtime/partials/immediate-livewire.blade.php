<div class="col-md-12" wire:ignore>
    <div class="row">
    <div class="col-md-6 mb-3">
        <label>IMMEDIATE HEAD'S APPROVAL</label>
        <div class="form-group mb-0">
          <select class="form-control @error('head_approval') is-invalid @enderror" wire:model="head_approval"
          {{ $head_approval ? 'disabled' : '' }}
          >
              <option value="">Select --</option>
              <option value="1">Approved</option>
              <option value="2">Reject</option>
          </select>
          @error('head_approval')
          <div class="invalid-feedback">
              {{ $message }}
          </div>
          @enderror
        </div>

    </div>
    @if (!$head_approval)
    <div class="col-md-6 mb-3">
        <label>Signature</label>
        <div class="form-group mb-0" wire:ignore>
            <div class="custom-file">
                <input type="file" class="custom-file-input @error('head_signature') is-invalid @enderror" id="file" wire:model="head_signature">
                <label class="custom-file-label" for="customFile" id="file_name">Choose file</label>
            </div>
            @error('head_signature')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>

    </div>
    @else
    <div class="col-md-6 mb-3">
        <label>Signature</label>
        <img src="{{ asset('img/signed.png') }}" width="50"/>
    </div>
    @endif
</div>
<div class="col-md-12 pt-4 pb-2">
    <button class="btn btn-outline-primary float-right" id="submit" wire:click="save">Submit <span
            class="fal fa-arrow-right"></span></button>
</div>

</div>
