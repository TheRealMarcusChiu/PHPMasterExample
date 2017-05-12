<?php

function getUrlContents($url) {
	$feed = apc_fetch($url);

	if ($feed === FALSE) {
		$feed = file_get_contents($url);
		// Store this data in shared memory for five minutes.
		apc_store($url, $feed, 300);
	}

	return $feed;
}

apc_fetch("cfgcs");
echo getUrlContents('http://example.org/news.xml');
