<?php get_header(); ?>
    
    <div class="album py-5 bg-light">
        <div class="container">

        <h1><?php echo get_the_title() ?></h1>

        <div class="">
            <?php echo get_the_content() ?>
        </div>
    
        </div>
    </div>
    <br>
    <hr>

    <div class="album py-5 bg-light">
        <h2>Restricciones</h2>
        <?php echo get_post_field("restricciones", $post->id) ?>
    </div>

    
<?php get_footer(); ?>