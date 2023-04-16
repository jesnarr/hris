<div>
    <div class="modal-body">
        <div class="row">
            <div class="col-12">
                <label>Department Name</label>
                <input type="text" class="form-control border-gray-300 rounded-lg @error('department') is-invalid @enderror" wire:model="department">
                @error('department')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <x-forms.button-success wire:click="save">Save <i class="fal fa-arrow-right"></i></x-forms.button-success>
    </div>
</div>
