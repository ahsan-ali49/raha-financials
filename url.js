
document.addEventListener("DOMContentLoaded", function () {
    var pathname = window.location.pathname;
    var basename = pathname.split('/').pop();
    console.log("Full path:", pathname);
    console.log("Basename:", basename);
    document.querySelectorAll('.url').forEach(function(input) {
        input.value = basename;
    });
});
