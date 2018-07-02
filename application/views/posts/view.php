<h2><?php echo $post["title"];?></h2>
<p> <?php echo $post["body"]; ?></p>

<hr>

<?php echo form_open("/posts/delete/".$post["id"]); ?>
<input type="submit" value="delete" class="bt btn-danger">

<a class="btn btn-default" href="edit/<?php echo $post["slug"]; ?>">Edit</a>
