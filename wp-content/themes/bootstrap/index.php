<?php get_header( ); ?>
<main class="container">
  
	<?php
          $phpPosts = new WP_Query(array(
            'posts_per_page' => 1,
            'category_name' => 'Wellness',
          ));
          
          while ($phpPosts->have_posts()) {
            $phpPosts->the_post(); ?>
  
  <div class="p-4 p-md-5 mb-4 text-white rounded bg-dark">
    <div class="col-md-6 px-0">
      <h1 class="display-4 fst-italic"><?php the_title(); ?></h1>
      <p class="lead my-3">
	<?php echo wp_trim_words( get_the_content(), 10 );?>	  
	</p>
      <p class="lead mb-0"><a href="<?php the_permalink(); ?>" class="text-white fw-bold">Continue reading...</a></p>
    </div>
  </div>
	  
	  <?php } ?>

	  

	
	

  <div class="row g-5">
    <div class="col-md-8">
      <h3 class="pb-4 mb-4 fst-italic border-bottom">
        From the Firehose
      </h3>

      <?php if(have_posts()) :  ?>

        <?php while(have_posts()) : the_post(); ?>

        <article class="blog-post">
        <h2 class="blog-post-title">
          <?php the_title(); ?>
        </h2>
        <p class="blog-post-meta">
          
          Posted by 
    <?php the_author_posts_link(); ?>
    on
    <?php the_time( 'd.m.y' ) ?>
    
    <?php //echo get_the_category_list(', '); ?>
        </p>

        <p>
          <?php the_excerpt(); ?>
        </p>
        <p><a class="btn btn--blue" href="<?php the_permalink(); ?>">
    Continue Reading &raquo;</a>    
    </p>

        </article>

        <?php endwhile; ?>

        <?php else : ?>
          <p><?php echo __('No posts found'); ?></p>
      
      <?php endif; ?>

      

      
      <nav class="blog-pagination" aria-label="Pagination">
        <?php echo paginate_links( ); ?>
      <a class="btn btn-outline-primary" href="#">Older</a>
        <a class="btn btn-outline-secondary disabled" href="#" tabindex="-1" aria-disabled="true">Newer</a>
      </nav>

    </div>

    <div class="col-md-4">
      <div class="position-sticky" style="top: 2rem;">
        <div class="p-4 mb-3 bg-light rounded">
          <h4 class="fst-italic">About</h4>
          <p class="mb-0">Customize this section to tell your visitors a little bit about your publication, writers, content, or something else entirely. Totally up to you.</p>
        </div>

        <div class="p-4">
          <h4 class="fst-italic">Archives</h4>
          <ol class="list-unstyled mb-0">
            <li><a href="#">March 2021</a></li>
            <li><a href="#">February 2021</a></li>
            <li><a href="#">January 2021</a></li>
            <li><a href="#">December 2020</a></li>
            <li><a href="#">November 2020</a></li>
            <li><a href="#">October 2020</a></li>
            <li><a href="#">September 2020</a></li>
            <li><a href="#">August 2020</a></li>
            <li><a href="#">July 2020</a></li>
            <li><a href="#">June 2020</a></li>
            <li><a href="#">May 2020</a></li>
            <li><a href="#">April 2020</a></li>
          </ol>
        </div>

        <div class="p-4">
          <h4 class="fst-italic">Elsewhere</h4>
          <ol class="list-unstyled">
            <li><a href="#">GitHub</a></li>
            <li><a href="#">Twitter</a></li>
            <li><a href="#">Facebook</a></li>
          </ol>
        </div>
      </div>
    </div>
  </div>

</main>

<?php get_footer( ); ?>