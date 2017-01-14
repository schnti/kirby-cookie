<div class="cookie_banner-wrapper">
    <div class="cookie_container">
        <p class="cookie_message">
			<?= $text; ?> <a href="><?= $link; ?>"><?= $linkText; ?></a>
        </p>
        <button class="cookie_btn cookie_btn_accept_all" onclick="closeCookie()"><?= $buttonText; ?></button>
    </div>
</div>

<script>
    function closeCookie() {
        document.cookie = 'cookie-note=1;path=/';
        $('.cookie_banner-wrapper').slideUp()
    }

    if (document.cookie.indexOf('cookie-note=1') != -1) {
        $('.cookie_banner-wrapper').hide();
    }
</script>