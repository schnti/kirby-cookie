var banner = document.getElementById('cookie_banner-wrapper');
function closeCookie() {
    document.cookie = 'cookie-note=1;path=/;max-age=864000';
    banner.style.display = 'none';
}

if (document.cookie.indexOf('cookie-note=1') !== -1) {
    banner.style.display = 'none';
}