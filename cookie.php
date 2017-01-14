<?php

function cookie()
{

	$data = array(
		'text' => c::get('ka.cookie.text', 'Diese Website benutzt Cookies, um seinen Lesern das beste Webseiten-Erlebnis zu ermöglichen.'),
		'link' => c::get('ka.cookie.link', '/datenschutzerklaerung'),
		'linkText' => c::get('ka.cookie.linkText', 'Mehr Infos'),
		'buttonText' => c::get('ka.cookie.buttonText', 'Ich habe verstanden')
	);

	// Return template HTML
	return tpl::load(__DIR__ . DS . 'templates/cookie.php', $data);
}