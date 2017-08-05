# Cookie Approval Plugin

A plugin for [Kirby 2 CMS](http://getkirby.com) that shows an cookie approval banner to use in your templates.

![Cookie Approval Plugin Example](./cookie.png)

## Installation

Copy or link the `cookie` directory to `site/plugins/` **or** use the [Kirby CLI](https://github.com/getkirby/cli):

```
kirby plugin:install schnti/kirby-cookie
```

### Dependencies

[jQuery](https://jquery.com) v2.*+

### CSS (SCSS)
```SCSS
$ka-cookie-bg: #222 !default;
$ka-cookie-color: #fff !default;
$ka-cookie-link-color: #31a8f0 !default;
$ka-cookie-link-color-hover: #b2f7ff !default;
$ka-cookie-btn-bg: #f1d600 !default;
$ka-cookie-btn-color: #222 !default;
$ka-cookie-position: bottom-right !default; // top-left, top-right, bottom-left, bottom-right
```

```SCSS
@import "../website/site/plugins/cookie/cookie.scss";
```

### Config Variables

* ka.cookie.link: String (default: 'datenschutzerklaerung')


```php
c::set('ka.cookie.link', 'datenschutz');
```

## How to use it

use this right before closing `</body>` tag and after jQuery import

```php
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>

<?= cookie(); ?>
```