var eligibilities = document.getElementById('eligibilities')
const deleteLeave =  (id) => {
    try{

        swalConfirmation('warning','Are you sure you want to delete this?','post','/leave/delete-status',{id})
    }catch(err){
        return displayMessage('error',err)
    }
}

const updateStatus =  async (id,status) => {
    try{
        const res = await callApi('post','/leave/update-status',{id,status})
        return_value(res);
    }catch(err){
        return displayMessage('error',err)
    }
}

const cancelRequest = async (id,status) => {
    try{
        var title = '';
        if(status == 3){
            title = 'Reject';

        }else{
            title = 'Cancel'
        }
        swalConfirmation('warning',`${title} this request?`,'post','/timeoff/update-status',{id,status})

    }catch(err){
        return displayMessage('error',err)
    }
}
const approveRequest = async (id,user_id,leave_id,total,status) => {
    try{
        swalConfirmation('info','Are you sure you want to approve this request?','post','/eligibility/update-status',{id,user_id,leave_id,total,status})
    }catch(err){
        return displayMessage('error',err)
    }
}

const updateLeave = async (id) => {
    Livewire.emit('add-leave', id)
    $('#add-leave').modal('show')
}

const uploadFile = (id) => {
    try{
        Swal.fire({
            position: 'center',
            icon: 'info',
            title: 'File upload',
            padding: '0',
            html:'<div class="container"><label>Upload File here</label><input type="file" class="form-control" id="file"></div>',
            showConfirmButton: true,
            showCancelButton: true,
            confirmButtonText:'Upload',
            preConfirm: async () => {
                var file_data = document.getElementById('file').files[0];
                var form_data = new FormData();
                const allowedExtensions = /(\.jpg|\.jpeg|\.png|\.doc|\.docx|\.pdf)$/i;
                if(file_data){
                    if (!allowedExtensions.exec(file_data.name))
                        return displayMessage('error', 'Invalid file type');
                    if (file_data.size > (1024 * 1024) * 4)
                        return displayMessage('error',
                            'File must be 4mb below, Please compress it here : <a href="smallpdf.com">SMALLPDF</a>');
                    form_data.append('attachment',file_data);
                    form_data.append('id',id)
                const res = await callApi('post','/timeoff/upload-file',form_data)
                return_value(res)
                }else{
                    Swal.showValidationMessage(
                        '<i class="fal fa-info-circle mr-2"></i> File is required'
                      )
                }

            }
        })
    }catch(err){
        return displayMessage('error',err)
    }
}

const selectTime= async () => {

    // var value
    var to = document.getElementById('to')
    var from = document.getElementById('from')
    var dis = document.getElementById('save_request');
    var total_time = document.getElementById('total_time');
    document.getElementById('feed').innerHTML = '';
    var total = 0;


    if(to.value < from.value){
            return document.getElementById('feed').innerHTML = 'Start time should be earlier than End time.';
    }
    total = parseInt(to.value) - parseInt(from.value);

    if(total >= 10 ){
        dis.setAttribute('disabled')
        total_time.innerHTML = total+'h';
         return document.getElementById('feed').innerHTML = 'You can request a maximum 9h based on your work schedule';
    }
    if(total <= 0){
        dis.setAttribute('disabled')
        total_time.innerHTML = total+'h';
        return document.getElementById('feed').innerHTML = 'You can request a minimum 1h based on your work schedule';
    }

    total_time.innerHTML = total+'h';
    dis.removeAttribute('disabled')

}


const selectType = async (value) => {

    var date_now = new Date();
    var singl = document.getElementById('single')
    var multi = document.getElementById('multi')

    if(value == 1)
    {
        singl.style.display = 'block';
        multi.style.display = 'none';
        document.getElementById('dates').value = (date_now.getDate()+2)+'-'+(date_now.getMonth()+1) + "-" + date_now.getFullYear();
    }else{
        // var to_date = document.getElementById('to_multi')
        // var from_date = document.getElementById('from_multi')

        // var to_multi = document.getElementById('to_multi')
        var from_multi = document.getElementById('from_multi')
        // var to = new Date (Date.now());
        // var from = new Date (Date.now());

        // var diff = to.getTime() - from.getTime();
        // var days = (diff / (1000 * 3600 * 24)) +1;
        // if(days <= 0){
        //     return displayMessage('error','Start time should be earlier than End time.');
        // }
        // if(!isNaN(days)){
        //     document.getElementById('total_day').innerHTML = days+ 'day';
        // }

        singl.style.display = 'none';
        multi.style.display = 'block';
        // to_multi.value = (date_now.getDate()+2)+'-'+(date_now.getMonth()+1) + "-" + date_now.getFullYear();
        from_multi.value = (date_now.getDate()+2)+'-'+(date_now.getMonth()+1) + "-" + date_now.getFullYear();
    }
}

// const getDays = async (id) => {
//     try{
//         const res = await callApi('post','/leave/days',{id})
//         console.log(res)
//     }catch(err){
//         return displayMessage('error',err)
//     }
// }

const getValidation = async (id) => {
    document.getElementById('error_feed').innerHTML = '';

    if(id == 1){
        document.getElementById('to_multi').removeAttribute('disabled')
    }
    var to = new Date (document.getElementById('to_multi').value);
    var from = new Date (document.getElementById('from_multi').value);
    var diff = to.getTime() - from.getTime();
    var days = (diff / (1000 * 3600 * 24)) +1;
    if(days < 0 ){
         document.getElementById('save_request').setAttribute('disabled')
        return document.getElementById('error_feed').innerHTML = 'Start date should be earlier than End date.';
    }
    if(!isNaN(days)){
        document.getElementById('save_request').removeAttribute('disabled')
       return document.getElementById('total_day').innerHTML = days+ 'days';
    }
}
const submitRequest = async () => {


    const allowedExtensions = /(\.jpg|\.jpeg|\.png|\.doc|\.docx|\.pdf)$/i;
    var type = $('input[name="request_type"]:checked').val();
    var form_data = new FormData();
    var leave_id = document.getElementById('leave_id').value;
    var file_data = document.getElementById('fil1').files[0];
    var total = 0;

    if(leave_id == 0)
        return displayMessage('error','Please type name')
    if(type == 1)
    {


        var to = document.getElementById('to')
        var from = document.getElementById('from')
        if(to.value < from.value){
            return displayMessage('error','Start time should be earlier than End time.');
        }
        var date = $('#dates').val();
        if(!date)
            return displayMessage('error','Date is required');

        total = parseInt(to.value) - parseInt(from.value);
        form_data.append('total',total)
        form_data.append('from',$('#dates').val()+' '+$('#from').val())
        form_data.append('to',$('#dates').val()+' '+$('#to').val())
        form_data.append('leave_type',1)

    }else{
        form_data.append('from',$('#from_multi').val())
        form_data.append('to',$('#to_multi').val())
        var to_multi = document.getElementById('to_multi')
        var from_multi = document.getElementById('from_multi')
        var to = new Date (to_multi.value);
        var from = new Date (from_multi.value);
        if(!to_multi.value && !from_multi.value)
         return displayMessage('error','Date is required');

        var diff = to.getTime() - from.getTime();
        var days = (diff / (1000 * 3600 * 24)) +1;
        if(days <= 0){
            return displayMessage('error','Start time should be earlier than End time.');
        }
        if(!isNaN(days)){
            form_data.append('total',days)
        }
        form_data.append('leave_type',2)
    }

    form_data.append('leave_id',leave_id);

    if($('#users').val())
        form_data.append('members',$('#users').val())
    if($('#note').val())
        form_data.append('note',$('#note').val())

if(file_data){
    if (!allowedExtensions.exec(file_data.name))
        return displayMessage('error', 'Invalid file type');
    if (file_data.size > (1024 * 1024) * 4)
        return displayMessage('error',
            'File must be 4mb below, Please compress it here : <a href="smallpdf.com">SMALLPDF</a>');
    form_data.append('attachment',file_data);
}
    try{

        $('#save_request').css('display', 'none');
        $('#loader').css('display', 'block');
        const res = await callApi('post','/timeoff/submit-request',form_data)
        return_value(res);
        if(res.data.status == 200){
              $('#add-leave').modal('toggle');
        }else{
            $('#save_request').css('display', 'block');
            $('#loader').css('display', 'none');
        }
        // location.reload()
    }catch(err){
        return displayMessage('error',err)
    }
}
