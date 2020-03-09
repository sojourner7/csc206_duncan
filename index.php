<?php
    // Layout code for page
        // Load configuraion and template files
        require('./csc206/includes/application_includes.php');
        require('./csc206/templates/header.php');
        require('./csc206/templates/carousel.php');
        require('./csc206/templates/blogcards.php');
        require('./csc206/templates/footer.php');
    // Display top of page
    header::render();
?>

<?php
  //render main body templates
  carousel::render();
?>
<!-- Container -->
<div class="container marketing">
<?php
  blogcards::render();
?>
</div>
<!-- end container -->

<?php
  //render footer
  footer::render();
?>
