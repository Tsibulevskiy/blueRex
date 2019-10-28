<?php get_header() ?>

<section class="sectionContent">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
          <?php if (have_posts()) : while (have_posts()) : the_post() ?>
            <article class="articlePreview">
              <h2><?php the_title() ?></h2>
              <p>
                  <span class="articleDate">
                      <i class="far fa-calendar-alt"><?php the_time('d.m.Y') ?></i>
                  </span>
              </p>
              <div class="articleExcerpt">
                  <?php if (has_post_thumbnail()): ?>
                    <div class="bluerex-thumb">
                      <a href="<?php the_permalink() ?>">
                          <?php the_post_thumbnail('thumbnail', array('class' => 'thumb')) ?>
                      </a>
                    </div>
                  <?php endif; ?>
                  <?php the_content('') ?>
              </div>
            </article>
          <?php endwhile; ?>


          <?php else: ?>
            <!-- no post founded  -->
          <?php endif; ?>
      </div>
        <?php get_sidebar() ?>
    </div>
  </div>
</section>

<?php get_footer() ?>
