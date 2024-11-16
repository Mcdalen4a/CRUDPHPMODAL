$(document).ready(function() {
    $('#editModal').on('show.bs.modal', function(event) {
        var button = $(event.relatedTarget);
        var id = button.data('id');
        var nombre = button.data('nombre');
        var email = button.data('email');
        var telefono = button.data('telefono');

        var modal = $(this);
        modal.find('#edit-id').val(id);
        modal.find('#edit-nombre').val(nombre);
        modal.find('#edit-email').val(email);
        modal.find('#edit-telefono').val(telefono);
    });

    $('#deleteModal').on('show.bs.modal', function(event) {
        var button = $(event.relatedTarget);
        var id = button.data('id');

        var modal = $(this);
        modal.find('#delete-id').val(id);
    });
});
