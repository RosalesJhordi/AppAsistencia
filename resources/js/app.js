document.addEventListener('DOMContentLoaded', function() {
    const close = document.getElementById('close_info');
    const info = document.getElementById('info');

    close.addEventListener('click', function() {
        info.style.display = 'none';
    });
});
