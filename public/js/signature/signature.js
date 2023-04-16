const uploadFile = async (type,id,emp_type) => {

    const form_data = new FormData();
    const allowedExtensions = /(\.jpg|\.jpeg|\.png)$/i;
    const file_data = document.getElementById('file_'+type).files[0];


    if (!file_data)
    return displayMessage('error', 'File is required')
    if (!allowedExtensions.exec(file_data.name))
        return displayMessage('error', 'Invalid file type');
    const file_size = Math.round(file_data.size / 1024);
    if (file_size > (1024 * 1024) * 4)
        return displayMessage('error','File size too large, Please compress it here : <a href="smallpdf.com">SMALLPDF</a>');


            form_data.append('file',file_data)
            form_data.append('id',id)
            form_data.append('type',emp_type)
    try{
    const res = await callApi('post','/mrf/uploadFile',form_data)
        if(res.data.status == 200){
            displayMessage('success',res.data.message)
            return location.reload()
        }
        else
            return displayMessage('error',res.data.message)
    }catch(err){
        return displayMessage('error',err.response)
    }
}

const submitRemarks = async (id) => {
    var remarks = $('#remarks').val()
    var names = $('#names').val()
    var date_served = $('#date_served').val()

    if(!remarks || !names || !date_served)
        return displayMessage('error','Please fill out all required fields')
    try{
        const res = await callApi('post','/mrf/submitRemarks',{remarks,names,date_served,id})
            if(res.data.status == 200)
            {
                displayMessage('success',res.data.message);
                return location.reload()
            }else{
                return displayMessage('error',res.data.message)
            }
    }catch(err){
        return displayMessage('error',err.response)
    }
}
