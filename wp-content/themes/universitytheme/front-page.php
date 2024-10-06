<?php get_header(); ?>

<div class="page-banner">
 <div class="page-banner__bg-banner"></div>
 <div class="page-banner__content container c-white t-center">
  <h1 class="headline headline--large">Welcome!</h1>
  <h2 class="headline headline--medium">
   We think you&rsquo;ll like it here.
  </h2>
  <h3 class="headline headline--small spacing-small">
   Why don&rsquo;t you check out the <strong>major</strong> you&rsquo;re
   interested in?
  </h3>
  <a href="#" class="btn-g btn--large btn--blue">Find Your Major</a>
 </div>
</div>

<div class="home-page-content">
 <div class="full-width-split group">
  <div class="full-width-split__one">
   <div class="full-width-split__inner">
    <h2 class="headline headline--small-plus t-center">
     Upcoming Events
    </h2>
    <?php
    $homePageEvents = new WP_Query(array(
     'posts_per_page' => 2,
     'post_type' => 'event'
    ));

    while ($homePageEvents->have_posts()) {
     $homePageEvents->the_post(); ?>

     <div class="event-summary">
      <a class="event-summary__date t-center" href="#">
       <span class="event-summary__month"><?php the_time('M') ?></span>
       <span class="event-summary__day">25</span>
      </a>
      <div class="event-summary__content">
       <h5 class="event-summary__title headline headline--tiny">
        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
       </h5>
       <p>
        <?php if (has_excerpt()) {
         echo get_the_excerpt();
        } else {
         echo wp_trim_words(get_the_content(), 10);
        } ?>
        <a href="<?php the_permalink(); ?>" class="nu gray">Learn more</a>
       </p>
      </div>
     </div>

    <?php }
    ?>

    <p class="t-center no-margin">
     <a href="<?php echo get_post_type_archive_link('event'); ?>" class="btn-g btn--medium btn--blue">View All Events</a>
    </p>
   </div>
  </div>
  <div class="full-width-split__two">
   <div class="full-width-split__inner">
    <h2 class="headline headline--small-plus t-center">From Our Blogs</h2>
    <?php
    $homePagePosts = new WP_Query(array(
     'posts_per_page' => 2,
    ));

    while ($homePagePosts->have_posts()) {
     $homePagePosts->the_post(); ?>
     <div class="event-summary">
      <a
       class="event-summary__date event-summary__date--beige t-center"
       href="<?php the_permalink(); ?>">
       <span class="event-summary__month"><?php the_time('M') ?></span>
       <span class="event-summary__day"><?php the_time('d') ?></span>
      </a>
      <div class="event-summary__content">
       <h5 class="event-summary__title headline headline--tiny">
        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
       </h5>
       <p>
        <?php if (has_excerpt()) {
         echo get_the_excerpt();
        } else {
         echo wp_trim_words(get_the_content(), 10);
        } ?>
        <a href="<?php the_permalink(); ?>" class="nu gray">Read more</a>
       </p>
      </div>
     </div>
    <?php }
    wp_reset_postdata();
    ?>

    <p class="t-center no-margin">
     <a href="<?php echo site_url('/blog'); ?>" class="btn-g btn--medium btn--blue">View All Blog Posts</a>
    </p>
   </div>
  </div>
 </div>
</div>



<?php get_footer(); ?>