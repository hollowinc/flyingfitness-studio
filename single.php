<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); 
$post_id = get_the_ID();
$thumbnail_url = get_the_post_thumbnail_url($post_id, 'full') ?: get_template_directory_uri() . '/assets/img/common/noimg.webp';
?>
    <main>
        <section class="single-content">
            <div class="single-content__inner">
                <?php if(get_the_post_thumbnail_url($post_id, 'full')):?>
                  <div class="thumb">
                    <img src="<?php echo esc_url($thumbnail_url); ?>" alt="">
                  </div>
                  
                <?php endif; ?>
                <div class="title">
                  <h1><?php the_title(); ?></h1>
                </div>
                <div class="content">
                  
                  <?php the_content(); ?>
                </div>
            </div>
        </section>



    </main>
<?php endwhile; endif; ?>
<?php get_footer(); ?>