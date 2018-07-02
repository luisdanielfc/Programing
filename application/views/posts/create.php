<h2><?= $title ?> </h2>
<?php echo validation_errors(); ?>
<?php echo form_open("posts/create"); ?>

<div class="form-group">
    <label>Titulo</title>
    <input type="text" class="form-control" name="title" placeholder="Add title">
</div>
<div class="form-group">
    <label>Body</title>
    <input type="text" class="form-control" name="body" placeholder="Add body">
</div>
<button type="submit" class="btn btn-default">Submit</submit>