<h2><?=$title ?></h2>
<?php foreach($posts as $post): ?>
	<div class="container">
	
	<h3><?php echo $post['name']; ?></h3>
	<p>Website: <?php echo $post['slug'] ?></p>
	<p>Category: <?php echo $post['category'] ?></p>
	<p>Date added: <?php echo $post['time'] ?></p>

	</div>

<?php endforeach; ?>