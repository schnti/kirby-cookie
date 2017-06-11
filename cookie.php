<?php

function cookie()
{

	cookieLoadTranslation();

	$site = kirby()->site();
	$pages = $site->pages();

	$link = c::get('ka.cookie.link', 'datenschutzerklaerung');
	$url = $pages->find($link);

	$data = array(
		'text' => l::get('ka.cookie.text'),
		'link' => ($url) ? $url->url() : null,
		'linkText' => l::get('ka.cookie.linkText'),
		'buttonText' => l::get('ka.cookie.buttonText')
	);

	// Return template HTML
	return tpl::load(__DIR__ . DS . 'templates/cookie.php', $data);
}

function cookieLoadTranslation()
{

	if (defined('KIRBY')) {
		$site = kirby()->site();
		$code = $site->multilang() ? $site->language()->code() : c::get('ka.cookie.language', 'de');

		try {
			include_once __DIR__ . DS . 'languages' . DS . $code . '.php';
		} catch (ErrorException $e) {
			try {
				include_once __DIR__ . DS . 'languages' . DS . 'de' . '.php';
			} catch (ErrorException $e) {
				throw new Exception("Uniform does not have a translation for the language '$code'.");
			}
		}
	}
}