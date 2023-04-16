const modalComponent = (modal,id) => {
    Livewire.emit('clearVars')
    $('#'+modal).modal('show');
}
