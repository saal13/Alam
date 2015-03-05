<?php
function get_title($title){
	global $Alma;
	return $title . (isset($Alam['title_append']) ? $Alam['title_append'] : null);
}

function navbar($meny){
	$html = "<nav>";
	foreach($meny as $name =>$page){
		$html .= "<a href = '{$page}' class ='{$name}'> {$name}</a>";
	}
	$html .= "</nav>";
	return $html;
}

