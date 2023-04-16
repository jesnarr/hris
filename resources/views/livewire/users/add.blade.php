<div>
    {{-- In work, do what you enjoy. --}}
    <div class="search-wrapper mb-2" style="width: 100%;height:50px !important;">
        <input id="search_data"  type="text" list="custom_field2_datalist" autocomplete="off"
            onchange="saveUser(this.value,{{ $leave_id }})"
            class="form-control" placeholder="Search here">
        <datalist id="custom_field2_datalist" >
            @foreach ($user as $u)
                <option value="{{ $u->email }}">{{ $u->name}}</option>
            @endforeach
        </datalist>
    </div>
</div>
