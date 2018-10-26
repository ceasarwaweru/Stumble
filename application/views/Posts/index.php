<!-- <div class="container"><h2><?=$title ?></h2></div> -->

<hr>
<br>
<?php foreach($posts as $post): ?>
	<div class="container">
		 <div class="row">
    		<div class="col-sm">
    
	<h3><?php echo $post['name']; ?></h3>
	<p>Website: <?php echo $post['slug'] ?></p>
	<p>Category: <?php echo $post['category'] ?></p>
	<p>Date added: <?php echo $post['time'] ?></p>

	<a class="navbar-brand" a target="_blank" href="<?php echo $post['slug'] ?>"><button class="btn btn-primary" >Visit.</button></a>

    </div>
	</div>

	</div>

<?php endforeach; ?>