const timelog = async (id) => {

    if(id){
        $('#out_button').css('display', 'none');
        $('#loader_out').css('display', 'block');
    }else{
        $('#in_button').css('display', 'none');
        $('#loader_in').css('display', 'block');
    }

    const res = await callApi('post','/timelog',{id})
    if(res.status == 200){
        displayMessage('success',res.data.message)

        return location.reload()
    }
        return displayMessage('error',res.data.message)
}
