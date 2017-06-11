function closeCookie() {
    document.cookie = 'cookie-note=1;path=/;max-age=864000'; // max-age=864000 = 10 Days
    $('.cookie_banner-wrapper').slideUp()
}

if (document.cookie.indexOf('cookie-note=1') != -1) {
    $('.cookie_banner-wrapper').hide();
}