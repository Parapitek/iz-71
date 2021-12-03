
<?php
	$str = 'aa aba abba abbba abca abea';
	$match = [];
	preg_match_all('#ab+a#', $str, $match);

	foreach($match[0] as $m) {
		echo $m .' ';
	}
?>