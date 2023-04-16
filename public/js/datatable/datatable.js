$('.dt-basic').DataTable({
    stateSave: true,
    processing: true,
    fixedHeader: {
        header: true,
        footer: true
    },
    responsive: true,
    ajax: "{!! url()->current() !!}",
    deferRender: true,
    columns: @json($response),
});
