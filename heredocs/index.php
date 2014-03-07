<?php

$post = array(
	'author' => 'Jeff',
	'title'  => 'Awesome Post',
	'body'	 =>	'Here is the body',
	'publish-date'	=> '6-10-2112'
);

/*$email  = "<h1> {$post['title'] }</h1>";
$email .= "<p>By : {$post['author']}</p> on";
$email .= "<strong>{$post['publish-date']}</strong>";
echo $email;*/

//$email = sprintf("<h1>%s</h1><p>%s</p><div>%s</div>", $post['title'], $post['author'], $post['body']);

$email = <<<EOT
<h1>{$post['title'] }</h1>
<p>By : {$post['author']}</p>
<div>
	{$post['publish-date']}
</div>

EOT;

// echo $email;

extract($post);

echo $author;echo $title;echo $body;

$email = <<<EOT
<h1>$title</h1>
<p>By : $author</p>
<div>
	$body
</div>

EOT;

echo $email;