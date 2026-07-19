window.addEventListener('scroll', function() {
    var sidebar1Height = document.getElementById('sidebar').offsetHeight;
    var sidebar2 = document.getElementById('sidebar2');
    var sidebar2Height = sidebar2.offsetHeight;
    var sidebar2Top = sidebar2.getBoundingClientRect().top;
    if (sidebar2Top <= sidebar1Height) {
        sidebar2.style.position = 'absolute';
        sidebar2.style.top = sidebar1Height + 'px';
    } else {
        sidebar2.style.position = 'relative';
        sidebar2.style.top = 'auto';
    }
});
