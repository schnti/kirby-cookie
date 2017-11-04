<div id="cookie_banner-wrapper">
    <div class="cookie_container">
        <p class="cookie_message"><?= $text; ?> <a href="<?= $link; ?>"><?= $linkText; ?></a></p>
        <button class="cookie_btn cookie_btn_accept_all" onclick="closeCookie()"><?= $buttonText; ?></button>
    </div>
</div>

<script>
    function closeCookie(){document.cookie="cookie-note=1;path=/;max-age=864000",banner.style.display="none"}var banner=document.getElementById("cookie_banner-wrapper");-1!==document.cookie.indexOf("cookie-note=1")&&(banner.style.display="none");
</script>