<script>
window.addEventListener('alert', event => {
    toastr[event.detail.type](event.detail.message,
        event.detail.title ?? ''); 
        toastr.options = {
        "closeButton": true,
        "progressBar": true,
    }
});
</script>