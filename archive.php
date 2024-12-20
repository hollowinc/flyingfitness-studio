<?php get_header(); ?>
<main>

    <section class="fv kaso-fv">
        <picture>
            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/lp2/kaso-fv.webp" media="(min-width: 768px)" />
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/lp2/kaso-fv.webp" class="fv-bg" alt="Studio.com">
        </picture>
        <div class="kaso-fv__inner">
          <h6>Topics</h6>
          <h1>お知らせ</h1>
        </div>

    </section>

    <section class="archive-sec">
      <div class="archive-sec__inner">
        <ul class="articles">
          <?php
              // メインループ
              while (have_posts()) : the_post();
              $post_id = get_the_ID();
              $thumbnail_url = get_the_post_thumbnail_url($post_id, 'full') ?: get_template_directory_uri() . '/assets/img/common/noimg.webp';
              ?>
              <li>
                  <a href="<?php the_permalink(); ?>">
                      <div class="img-wrapper">
                          <img src="<?php echo esc_url($thumbnail_url); ?>">
                      </div>
                      <div class="txt-wrapper">
                          <time><?php the_time('Y.m.d'); ?></time>
                          <p class="ttl">
                              <?php the_title(); ?>
                          </p>
                      </div>
                  </a>
              </li>
              <?php endwhile; ?>
          </ul>

          <div class="pagination">
              <?php
                  $big = 999999999; // この数字は単にページネーションのURLを生成するためのダミーです。

                  echo paginate_links(array(
                      'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
                      'format' => '?paged=%#%',
                      'current' => max(1, get_query_var('paged')),
                      'total' => $wp_query->max_num_pages,
                      'prev_text' => '←',
                      'next_text' => '→',
                  ));
              ?>
          </div>
      </div>
    </section>

</main>

<?php get_footer(); ?>