<?php get_header(); ?>
    
<div class="album py-5 bg-light">
    <div class="container">

    <h1><?php echo get_the_title() ?></h1>

    <div class="">
        <?php echo get_the_content() ?>
        <br>
        <!-- <img src="<?php the_post_thumbnail_url() ?>" alt="<?php echo get_the_title() ?>"> -->
    </div>
  <br>
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3 mt-8">

        <?php   
            $args= array('post_type' => 'servicio', 'order' => 'ASC');
            $loop = new WP_Query($args);
            while($loop->have_posts()): $loop->the_post(); global $post;
        ?>
            <div class="col">
              <div class="card shadow-sm">
                <img src="<?php the_post_thumbnail_url() ?>" alt="<?php echo get_the_title() ?>">

                <div class="card-body">
                  <h3><?php echo get_the_title() ?></h3>
                  <p class="card-text">
                    <?php echo get_the_excerpt() ?>
                  </p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <a href="<?php echo get_the_permalink() ?>">
                        <button type="button" class="btn btn-sm btn-outline-secondary">Ver más</button>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        <?php
            endwhile;
        ?>
        
      </div>
    </div>
  </div>
    
<?php get_footer(); ?>