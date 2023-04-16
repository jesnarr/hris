const removeUser =  (id) => {
    try{

        var form_data = new FormData()
        form_data.append('id',id)
        Livewire.emit('refresh-users');
        swalConfirmation('warning','Are you sure you want to remove this employee?','post','/eligibility/delete-user',form_data)

    }catch(err){
        return displayMessage('error',err)
    }
}
const saveUser = async (email,leave_id) => {
    try{

        const res = await callApi('post','/eligibility/add-user',{email,leave_id})
        document.getElementById('search_data').value = '';
        return_value(res);
        Livewire.emit('refresh-users');
    }catch(err){
        return displayMessage('error',err)
    }
}
const changeEligibility = async (value,leave_id) => {
    if(value == 3)
        eligibilities.style.display = 'block';
    else
        eligibilities.style.display = 'none';

    try{
        const res = await callApi('post','/leave/update-eligibility',{value,leave_id})
        return_value(res);
    }catch(err){
        return displayMessage('error',err)
    }

}
