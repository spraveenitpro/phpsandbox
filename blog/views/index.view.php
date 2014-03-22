
<h1>My Blog</h1>

<?php foreach($posts as $post): ?>
	
<article>
	<h2>
		<a href="single.php?id=<?= $post['id']; ?>">
			<?= $post['title']; ?>
		</a>
	</h2>
	<div class="body"><?= $post['body']; ?></div>
</article>
<hr>
<?php endforeach; ?>
