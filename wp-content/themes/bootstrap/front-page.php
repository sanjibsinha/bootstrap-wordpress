<?php get_header( ); ?>
<!-- main started -->
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
  
  <!-- row started -->
  <div class="row mb-2">
<?php
          $phpPosts = new WP_Query(array(
            'posts_per_page' => 2,
            'category_name' => 'Psychology',
          ));
          
          while ($phpPosts->have_posts()) {
            $phpPosts->the_post(); ?>

    <div class="col-md-6">
      <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-primary">
              <?php echo "মন নিয়ে"; ?>
          </strong>
          <h3 class="mb-0"><?php the_title(); ?></h3>
			
          <div class="mb-1 text-muted">Nov 12</div>
          <p class="card-text mb-auto">
            <?php echo wp_trim_words( get_the_content(), 10 );?>
            </p>
          <a href="<?php the_permalink(); ?>" class="stretched-link">Continue reading</a>
        </div>
        <div class="col-auto d-none d-lg-block">
          <p>
			  <?php echo get_the_post_thumbnail( $flutterPosts->ID, array(200,250)); ?>
			</p>

        </div>
      </div>
    </div>
    <?php } ?>


<?php
          $phpPosts = new WP_Query(array(
            'posts_per_page' => 2,
            'category_name' => 'Health',
          ));
          
          while ($phpPosts->have_posts()) {
            $phpPosts->the_post(); ?>

    <div class="col-md-6">
      <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-primary">
              <?php echo "Health"; ?>
          </strong>
          <h3 class="mb-0"><?php the_title(); ?></h3>
			
          <div class="mb-1 text-muted">Nov 12</div>
          <p class="card-text mb-auto">
            <?php echo wp_trim_words( get_the_content(), 10 );?>
            </p>
          <a href="<?php the_permalink(); ?>" class="stretched-link">Continue reading</a>
        </div>
        <div class="col-auto d-none d-lg-block">
          <p>
			  <?php echo get_the_post_thumbnail( $flutterPosts->ID, array(200,250)); ?>
			</p>

        </div>
      </div>
    </div>
    <?php } ?>
	  
	  
	  
<?php
          $phpPosts = new WP_Query(array(
            'posts_per_page' => 2,
            'category_name' => 'Song',
          ));
          
          while ($phpPosts->have_posts()) {
            $phpPosts->the_post(); ?>

    <div class="col-md-6">
      <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-primary">
              <?php echo "Song"; ?>
          </strong>
          <h3 class="mb-0"><?php the_title(); ?></h3>
			
          <div class="mb-1 text-muted">Nov 12</div>
          <p class="card-text mb-auto">
            <?php echo wp_trim_words( get_the_content(), 10 );?>
            </p>
          <a href="<?php the_permalink(); ?>" class="stretched-link">Continue reading</a>
        </div>
        <div class="col-auto d-none d-lg-block">
          <p>
			  <?php echo get_the_post_thumbnail( $flutterPosts->ID, array(200,250)); ?>
			</p>

        </div>
      </div>
    </div>
    <?php } ?>


    <?php
          $phpPosts = new WP_Query(array(
            'posts_per_page' => 2,
            'category_name' => 'Friendship',
          ));
          
          while ($phpPosts->have_posts()) {
            $phpPosts->the_post(); ?>

    <div class="col-md-6">
      <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-primary">
              <?php echo "Friendship"; ?>
          </strong>
          <h3 class="mb-0"><?php the_title(); ?></h3>
			
          <div class="mb-1 text-muted">Nov 12</div>
          <p class="card-text mb-auto">
            <?php echo wp_trim_words( get_the_content(), 10 );?>
            </p>
          <a href="<?php the_permalink(); ?>" class="stretched-link">Continue reading</a>
        </div>
        <div class="col-auto d-none d-lg-block">
          <p>
			  <?php echo get_the_post_thumbnail( $flutterPosts->ID, array(200,250)); ?>
			</p>

        </div>
      </div>
    </div>
    <?php } ?>



<!-- row ended -->
  </div>
  <!-- main ended -->
 </main>

<?php get_footer( ); ?>
