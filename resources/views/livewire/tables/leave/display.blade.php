<div>
    <table class=" table table-borderless  w-100">
        <thead>
            <tr>
                {{-- <th>Membership ID</th> --}}

            </tr>
        </thead>
        <tbody>
            @if(isset($leave))

                    <tr>
                        <td>Type Name</td>
                        <td>{{ $leave->name }}</td>
                    </tr>
                    <tr>
                        <td>Paid Time off</td>
                        <td>{{ $leave->type == 1 ? 'Yes' : 'No' }}</td>
                    </tr>
                    <tr>
                        <td>Entitlement</td>
                        <td>
                            {{ $leave->entitlement }}
                        </td>
                    </tr>
                    <tr>
                        <td>Status</td>
                        <td> {{ $leave->status == 0 ? 'Inactive' : 'Active' }} </td>
                    </tr>
                    <tr>
                        <td>Prorate Accrual</td>
                        <td>{{ $leave->prorate == 0 ? 'No' :  'Yes' }}</td>
                    </tr>

                    <tr>
                        <td>Maximum Carry Over</td>
                        <td>{{ $leave->carry_over }}</td>
                    </tr>
                    <tr>
                        <td>Carry Over Expiration</td>
                        <td>{{ $leave->carry_over_exp }}</td>
                    </tr>
                    <tr>
                        <td>Eligibility</td>
                        <td>
                            <input type="radio" name="eligibility" value="1" class="mr-2" {{ $leave->eligibility == 1 ? 'checked' : '' }} onClick="changeEligibility(this.value,{{ $leave->id }})">
                            <label>All Employees</label><br>
                            <input type="radio" name="eligibility" value="2" class="mr-2" {{ $leave->eligibility == 2 ? 'checked' : '' }} onClick="changeEligibility(this.value,{{ $leave->id }})">
                            <label>Full-time Employees only</label><br>
                            <input type="radio" name="eligibility" value="3" class="mr-2" {{ $leave->eligibility == 3 ? 'checked' : '' }} onClick="changeEligibility(this.value,{{ $leave->id }})">
                            <label>Specific Employees</label>

                        </td>
                    </tr>

            @endif
        </tbody>
    </table>
</div>
