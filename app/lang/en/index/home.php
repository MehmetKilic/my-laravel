<?php 

$query = LangEN::all();

return array(
	'site_title' => $query[0]->lang_text
);