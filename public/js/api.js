const callApi = async (method, url, data) => {
    return axios({ method, url, data });
};

const Toast = Swal.mixin({
    toast: true,
    position: "top-start",
    showConfirmButton: true,
    // timer: 5000,
    width: 450,
    // timerProgressBar: true,
    // didOpen: (toast) => {
    //     toast.addEventListener('mouseenter', Swal.stopTimer)
    //     toast.addEventListener('mouseleave', Swal.resumeTimer)
    // }
});

const displayMessage = (type, title) => {
    Toast.fire({
        icon: type,
        title: title,
    });
};

const swalConfirmation = async (icon, title, method, url, data) => {
    Swal.fire({
        position: "center",
        icon: icon,
        title: title,
        padding: "0",
        showConfirmButton: true,
        showCancelButton: true,
        preConfirm: async () => {
            const res = await callApi(method, url, data);
            return_value(res);
        },
    });
};

const return_value = async (res) => {
    if (res.data.status == 200) {
        $(".dt-basic").DataTable().ajax.reload(null, false);
        return displayMessage("success", res.data.message);
    }
    return displayMessage("error", res.data.message);
};

window.addEventListener("prompt-message", (event) => {
    displayMessage(event.detail.type, event.detail.message);
});

toastr.options = {
    closeButton: true,
    debug: false,
    newestOnTop: true,
    progressBar: true,
    positionClass: "toast-top-left",
    preventDuplicates: false,
    showDuration: 300,
    hideDuration: 100,
    timeOut: 5000,
    extendedTimeOut: 1000,
    showEasing: "swing",
    hideEasing: "linear",
    showMethod: "fadeIn",
    hideMethod: "fadeOut",
};

window.addEventListener('new-notification', (e) => {
    toastr.info(e.detail.message, e.detail.title)
})
