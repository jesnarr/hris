var day = document.getElementById('day');
var from = document.getElementById('from');
var to = document.getElementById('to');
var display_to = document.getElementById('to_display')
var btn = document.getElementById('button_save')

const add_schedule = (id) => {
    Livewire.emit('add-schedule', id)
    $('#add-schedule').modal('show')
}

const saveSchedule = async (id) => {
    try{
        const res = await callApi('post','/schedule/save_schedule',{id,day: day.value,from: from.value,to: to.value})
        return_value(res).then(() => {
            hideModal()
        })
    }catch(err){
        return displayMessage('error',err)
    }
}
const deleteSchedule =  (id) => {
    try{
        Swal.fire({
            position: 'middle',
            icon: 'warning',
            title: `Are you sure you want to delete this schedule?`,
            padding: '0',
            showConfirmButton: true,
            showCancelButton: true,
            preConfirm: async () => {
                const res = await callApi('post','/schedule/action',{id})
                return_value(res)
            }
        })
    }catch(err){
        return displayMessage('error',err)
    }
}

const return_value = async (res) => {
    if(res.data.status == 200){
        $('.dt-basic').DataTable().ajax.reload( null, false )
       return displayMessage('success',res.data.message)
   }
     return displayMessage('error',res.data.message)

   return displayMessage('error',res.data.message)
}
const hideModal = () => {
    $('#add-schedule').modal('toggle')
}

