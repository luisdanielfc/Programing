<h2><?= $title ?></h2>
<p> Welcome to Home </p>
<?php foreach($posts as $post): ?>
    <h3> <?php 
    //Aqui se imprimen lo que ven de la DB, entre [] se coloca el nombre del atributo a imprimir
    echo $post["title"]; ?> </h3>
    <small> Posted on: <?php echo $post["time"];  ?> </small>
    <p> <?php echo $post["body"]; 
    //echo base_url();
    //echo site_url();
    ?> </p>
    <p>  <a href="<?php echo "posts/".($post["slug"]); ?>"> Read More </a></p>
<?php endforeach; ?>