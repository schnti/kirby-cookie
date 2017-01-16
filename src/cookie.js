function closeCookie() {
    document.cookie = 'cookie-note=1;path=/';
    $('.cookie_banner-wrapper').slideUp()
}

if (document.cookie.indexOf('cookie-note=1') != -1) {
    $('.cookie_banner-wrapper').hide();
}