<div class="row mt-5">
    <div class="col-md-6 mb-3" >
        <label>MANAGER'S APPROVAL</label>
        <div class="form-group mb-0">
            <select class="form-control @error('manager_approval') is-invalid @enderror" wire:model="manager_approval">
                <option value="">Select --</option>
                <option value="1">Approved</option>
                <option value="2">Reject</option>
            </select>
        </div>
        @error('manager_approval')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
    </div>
    <div class="col-md-6 mb-3" >
        <label>Signature</label>
        <div class="form-group mb-0" wire:ignore>
            <div class="custom-file">
                <input type="file" class="custom-file-input @error('manager_signature') is-invalid @enderror" id="file" wire:model="manager_signature">
                <label class="custom-file-label" for="customFile" id="file_name">Choose file</label>
            </div>
        </div>
        @error('manager_signature')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
    </div>

    <div class="col-md-12 pt-4 pb-2">
        <button class="btn btn-outline-primary float-right" id="submit" wire:click="submit">Submit <span
                class="fal fa-arrow-right"></span></button>
    </div>

</div>
@push('scripts')
    <script>
            window.addEventListener('update-overtime', async (event) => {
            $(".dt-basic").DataTable().ajax.reload(null, false);
            $('#'+event.detail.id).modal('hide');
            return displayMessage('success', "Overtime Request updated")
        })
    </script>
@endpush
