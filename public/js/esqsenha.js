document.addEventListener('DOMContentLoaded', function () {
    // Verifique se a variável shouldShowModal está definida e é verdadeira
    if (typeof shouldShowModal !== 'undefined' && shouldShowModal) {
        var resetPasswordModal = new bootstrap.Modal(document.getElementById('resetPasswordModal'));
        resetPasswordModal.show();
    }
});
