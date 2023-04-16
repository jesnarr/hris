<div>
    <div class="modal-body">
        <div class="row mb-3 col-md-12 col-xs-12">
            <label>Type Name *</label>
            <input type="text" id="name" wire:model="name" class="form-control @error('name') is-invalid @enderror" placeholder="Type name">
            @error('name')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="row mb-3 col-md-12 col-xs-12">
            <input type="checkbox" id="type" wire:model="type" class="mr-2">
            <label for="type">Paid Time Off</label>
        </div>

        <div class="row mb-3 col-md-12 col-xs-12">
            <label class="mt-2">Entitlement * (Days per year)</label>
            <input type="number" id="entitlement" wire:model="entitlement" min="0"
                class="mr-2 form-control  @error('entitlement') is-invalid @enderror">
            @error('entitlement')
                    <div class="invalid-feedback">{{ $message }}</div>
            @enderror

        </div>


        <div class="row mb-3 col-md-12 col-xs-12">
            <label class="mt-2">Accrual Frequency *</label>
            <select class="form-control" id="frequency" wire:model="frequency">
                <option value="1">Yearly</option>
                <option value="2">Monthly</option>
            </select>
        </div>

        <div class="row mb-3 col-md-12 col-xs-12">
            <input type="checkbox" id="prorate" wire:model="prorate" class="mr-2">
            <label for="prorate">Prorate Accrual</label>
        </div>

        <div class="row mb-3 col-md-12 col-xs-12">
            <label class="mt-2">Maximum Carry Over * (Days per year)</label>
            <input type="number" id="carry_over" wire:model="carry_over"  min="0"
            class="mr-2 form-control @error('carry_over') is-invalid @enderror">
        @error('carry_over')
            <div class="invalid-feedback">{{ $message }}</div>
           @enderror
        </div>

        <div class="row mb-3 col-md-12 col-xs-12">
            <label>Carry over Expiration *</label>
            <input type="text" id="carry_over_exp" wire:model="carry_over_exp"
             class="mr-2 form-control @error('carry_over_exp') is-invalid @enderror">
             @error('carry_over_exp')
             <div class="invalid-feedback">{{ $message }}</div>
             @enderror
        </div>

      </div>
      <div class="modal-footer">

            <x-forms.button-success
            {{-- onclick="saveLeave()" --}}
            wire:click="saveLeave()"
            id="button_save" >Save <i class="fal fa-arrow-right"></i></x-forms.button-success>
        </div>
</div>

@push('scripts')
    <script>
        $("#carry_over_exp").datepicker( {
                format: "MM dd, yyyy",

        }).change(function (e){
            @this.set('carry_over_exp',e.target.value)
        });
    </script>
@endpush
