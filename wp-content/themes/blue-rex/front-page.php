<?php get_header('main') ?>
<?php
$design_cat = get_category(3);
if ($design_cat):
    $posts = get_posts(array(
        'numberposts' => 3,
        'category' => 3,
    ));
    ?>
  <section class="sectionWatch sectionTabs" <?php echo blueRex_get_background('section_img', $design_cat) ?>>
    <div class="container">
      <div class="row">
        <div class="col-lg-6 mb-5">
          <h3><?php the_field('section_header', $design_cat) ?></h3>
          <h4><?php echo $design_cat->description ?></h4>
          <ul class="nav nav-pills" id="myTab" role="tablist">
              <?php
              $data = [];
              $i = 0;
              foreach ($posts as $post):
                  setup_postdata($post);
                  $data[$i]['post_name'] = $post->post_name;
                  $data[$i]['url'] = get_the_permalink();
                  $data[$i]['content'] = get_the_content('');

                  ?>
                <li class="nav-item ">
                  <a class="nav-link rounded-pill <?php if (!$i) echo 'active' ?>"
                     id="<?php echo $post->post_name ?>-tab"
                     data-toggle="tab" href="#<?php echo $post->post_name ?>"
                     role="tab"
                     aria-controls="webDesign" aria-selected="true"><?php the_title() ?></a>
                </li>
                  <?php
                  $i++; endforeach;
              ?>
          </ul>
          <div class="tab-content" id="myTabContent">
              <?php foreach ($data as $k => $item): ?>
                <div class="tab-pane fade show <?php if (!$k) echo 'active' ?>"
                     id="<?php echo $item['post_name'] ?>"
                     role="tabpanel" aria-labelledby="<?php echo $item['post_name'] ?>-tab">
                  <p><?php echo $item['content'] ?></p>
                  <p><a href="<?php echo $item['url'] ?>" class="btn btn-pink btn-shadow">
                          <?php echo __('Read more', 'bluerex') ?></a></p>
                </div>
              <?php
              endforeach;
              ?>
          </div>
        </div>
        <div class="col-lg-6 text-center">
            <?php if (get_field('section_add_img', $design_cat)): ?>
              <img src="<?php echo get_field('section_add_img', $design_cat) ?>" alt="">
            <?php endif; ?>
        </div>
      </div>
    </div>
      <?php wp_reset_postdata();
      unset($data, $posts); ?>
  </section>
<?php endif; //$design_cat ?>
<?php
$posts = get_posts(array(
    'numberposts' => 3,
    'category' => 4,
));
if ($posts) :
    ?>
  <section class="sectionProgress text-center">
    <div class="container">
      <div class="row">
          <?php foreach ($posts as $post): ?>
            <div class="col-md-4 progressItem">
                <?php echo $post->post_content; ?>
              <!--        <div><i class="fas fa-bullhorn"></i></div>-->
              <!--        <div class="num">500+</div>-->
              <!--        <h4><span>Successfully</span> completed projects</h4>-->
              <!--        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo, illo?</p>-->
            </div>
          <?php endforeach; ?>
      </div>
    </div>
      <?php unset($posts); ?>
  </section>
<?php endif; //progress?>
<?php
$lets_cat = get_category(5);
if ($lets_cat):
    ?>
  <section class="sectionLets text-center" <?php echo blueRex_get_background('section_img', $lets_cat) ?>>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h3><?php echo $lets_cat->name ?></h3>
            <?php if (get_field('section_header', $lets_cat)): ?>
              <h4><?php echo get_field('section_header', $lets_cat) ?></h4>
            <?php endif; ?>
          <p><?php echo $lets_cat->description ?></p>
          <p><a href="<?php echo get_category_link(5) ?>"
                class="btn btn-pink btn-shadow"><?php echo __('Read more', 'bluerex') ?></a></p>
        </div>
      </div>
    </div>
  </section>
<?php endif; //$lets_cat?>
<?php
$graphic_cat = get_category(6);
if ($graphic_cat):
    $posts = get_posts(array(
        'numberposts' => 2,
        'category' => 6,
    ));
    ?>
  <section class="sectionDesign">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <h3><?php echo $graphic_cat->name ?></h3>
          <h4><?php echo get_field('section_header', $graphic_cat) ?></h4>
          <p><?php echo $graphic_cat->description; ?></p>
          <div class="row">
              <?php foreach ($posts as $post): setup_postdata($post); ?>
                <div class="col-md-6 mb-3">
                  <span><?php echo get_field('icon') ?></span>
                  <h2><?php the_title() ?></h2>
                  <p><?php the_content('') ?></p>
                  <p><a href="<?php the_permalink() ?>"
                        class="btn btn-pink btn-shadow"><?php echo __('Read more', 'bluerex') ?></a></p>
                </div>
              <?php endforeach; ?>
          </div>
        </div>
        <div class="col-lg-6">
            <?php
            if ($video = get_field('section_video', $graphic_cat)):
            $video = str_replace('watch?v=', 'embed/', $video);
            ?>
          <div class="embed-responsive embed-responsive-16by9 mt-5">
            <iframe id="videoPlayer" class="embed-responsive-item"
                    src="<?php echo $video ?>?enablejsapi=1&amp;html5=1&amp;rel=0&amp;&amp;showinfo=0"
                    allowfullscreen></iframe>
            <div id="videoPlayBtn"></div>
              <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
      <?php wp_reset_postdata();
      unset($posts); ?>
  </section>
<?php endif; //$graphic_cat?>

<?php
$work_cat = get_category(7);
if ($work_cat):
$posts = get_posts(array(
    'numberposts' => 3,
    'category' => 7,
));
?>
<section class="sectionWork sectionTabs">
  <div class="container">
    <div class="row">
      <div class="col-md-8 offset-md-2 text-center">
        <h4><?php echo $work_cat->name?></h4>
        <p><?php echo $work_cat->description ?></p>
      </div>
      <div class="col-md-12">
        <ul class="nav nav-pills justify-content-center" id="myTabGallery" role="tablist">
          <?php
              $data = [];
              $i = 0;
              foreach ($posts as $post):
                  setup_postdata($post);
                  $data[$i]['post_name'] = $post->post_name;
                  $data[$i]['url'] = get_the_permalink();
                  $data[$i]['content'] = get_the_content('');

                  ?>
                <li class="nav-item ">
                  <a class="nav-link rounded-pill <?php if (!$i) echo 'active' ?>"
                     id="<?php echo $post->post_name ?>-tab"
                     data-toggle="tab" href="#<?php echo $post->post_name ?>"
                     role="tab"
                     aria-controls="webDesign" aria-selected="true"><?php the_title() ?></a>
                </li>
                  <?php
                  $i++; endforeach;
          ?>
        </ul>
        <div class="tab-content" id="myTabContentGallery">
            <?php foreach ($data as $k => $item): ?>
              <div class="tab-pane fade show <?php if (!$k) echo 'active' ?>"
                   id="<?php echo $item['post_name'] ?>"
                   role="tabpanel" aria-labelledby="<?php echo $item['post_name'] ?>-tab">
                <p><?php echo $item['content'] ?></p>

              </div>
            <?php
            endforeach;
            ?>
        </div>
      </div>
    </div>
  </div>
</section>
<?php endif; //$work_cat?>
<?php
$posts = get_posts( array(
    'post_type' => 'reviews',
));
if ($posts):
    ?>
  <section class="sectionReviews">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
          <?php for ($i = 0; $i < count($posts); $i++ ): ?>
            <li data-target="#carouselExampleIndicators" data-slide-to="<?= $i ?>"
                <?php if (!$i) echo 'class="active"' ?>></li>
          <?php endfor; ?>
      </ol>

      <div class="carousel-inner">
          <?php $i = 0; foreach ($posts as $post): ?>
            <div class="carousel-item <?php if (!$i) echo 'active' ?>">
              <div class="container">
                <div class="row">
                  <div class="col-sm-7">
                    <div class="carousel-caption ">
                      <h3><?= $post->post_title ?></h3>
                      <h4><?= the_field('review_header')?></h4>
                      <blockquote class="blockquote">
                        <p class="mb-0"><?= $post->post_content ?></p>
                        <footer class="blockquote-footer"><?= the_field('review_author')?></footer>
                      </blockquote>
                    </div>
                  </div>
                  <div class="col-sm-5 d-none d-sm-block">
                      <?php if (has_post_thumbnail($post->ID)):?>
                          <?php echo  get_the_post_thumbnail($post->ID) ?>
                      <?php endif; ?>
                  </div>
                </div>
              </div>
            </div>
              <?php $i++; endforeach; ?>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </section>
<?php endif; //reviews ?>
<?php
$contact = get_page_by_title('contact');
if ($contact):
//    setup_postdata($contact);
//    the_content();
?>
<section class="sectionForm text-center">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <?php echo do_shortcode($contact-> post_content) ?>
      </div>
    </div>
  </div>
</section>
<?php endif; //$contact ?>
<?php get_footer() ?>
