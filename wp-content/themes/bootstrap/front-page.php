<?php get_header( ); ?>
<!-- main started -->
<main class="container">
  
  <div class="p-4 p-md-5 mb-4 text-white rounded bg-dark">
    <div class="col-md-6 px-0">
      <h1 class="display-4 fst-italic">Title of a longer featured blog post</h1>
      <p class="lead my-3">Multiple lines of text that form the lede, informing new readers quickly and efficiently about what’s most interesting in this post’s contents.</p>
      <p class="lead mb-0"><a href="#" class="text-white fw-bold">Continue reading...</a></p>
    </div>
  </div>
  
  <!-- row started -->
  <div class="row mb-2">

  <?php
          $flutterPosts = new WP_Query(array(
            'posts_per_page' => 2,
            'category_name' => 'Flutter',
          ));
          
          while ($flutterPosts->have_posts()) {
            $flutterPosts->the_post(); ?>

    <div class="col-md-6">
      <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-primary">
              <?php echo "Flutter"; ?>
          </strong>
          <h3 class="mb-0"><?php the_title(); ?></h3>
          <div class="mb-1 text-muted">Nov 12</div>
          <p class="card-text mb-auto">
            <?php echo wp_trim_words( get_the_content(), 10 );?>
            </p>
          <a href="#" class="stretched-link">Continue reading</a>
        </div>
        <div class="col-auto d-none d-lg-block">
          <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>

        </div>
      </div>
    </div>
    <?php } ?>



    <?php
          $wordpressPosts = new WP_Query(array(
            'posts_per_page' => 2,
            'category_name' => 'WordPress',
          ));
          
          while ($wordpressPosts->have_posts()) {
            $wordpressPosts->the_post(); ?>

    <div class="col-md-6">
      <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-primary">
              <?php echo "WordPress"; ?>
          </strong>
          <h3 class="mb-0"><?php the_title(); ?></h3>
          <div class="mb-1 text-muted">Nov 12</div>
          <p class="card-text mb-auto">
            <?php echo wp_trim_words( get_the_content(), 10 );?>
            </p>
          <a href="#" class="stretched-link">Continue reading</a>
        </div>
        <div class="col-auto d-none d-lg-block">
          <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>

        </div>
      </div>
    </div>
    <?php } ?>


    <?php
          $dartPosts = new WP_Query(array(
            'posts_per_page' => 2,
            'category_name' => 'Dart',
          ));
          
          while ($dartPosts->have_posts()) {
            $dartPosts->the_post(); ?>

    <div class="col-md-6">
      <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-primary">
              <?php echo "Flutter"; ?>
          </strong>
          <h3 class="mb-0"><?php the_title(); ?></h3>
          <div class="mb-1 text-muted">Nov 12</div>
          <p class="card-text mb-auto">
            <?php echo wp_trim_words( get_the_content(), 10 );?>
            </p>
          <a href="#" class="stretched-link">Continue reading</a>
        </div>
        <div class="col-auto d-none d-lg-block">
          <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>

        </div>
      </div>
    </div>
    <?php } ?>


    <?php
          $phpPosts = new WP_Query(array(
            'posts_per_page' => 2,
            'category_name' => 'PHP',
          ));
          
          while ($phpPosts->have_posts()) {
            $phpPosts->the_post(); ?>

    <div class="col-md-6">
      <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-primary">
              <?php echo "PHP"; ?>
          </strong>
          <h3 class="mb-0"><?php the_title(); ?></h3>
          <div class="mb-1 text-muted">Nov 12</div>
          <p class="card-text mb-auto">
            <?php echo wp_trim_words( get_the_content(), 10 );?>
            </p>
          <a href="#" class="stretched-link">Continue reading</a>
        </div>
        <div class="col-auto d-none d-lg-block">
          <svg class="bd-placeholder-img" 
          width="200" height="250" 
          xmlns="<?php echo get_the_post_thumbnail(); ?>" 
          role="img" aria-label="Placeholder: Thumbnail" 
          preserveAspectRatio="xMidYMid slice" 
          focusable="false">
          <title>Placeholder</title>
          <rect width="100%" height="100%" fill="#55595c"/>
          <text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text>
          </svg>

        </div>
      </div>
    </div>
    <?php } ?>



<!-- row ended -->
  </div>
  <!-- main ended -->
 </main>

<?php get_footer( ); ?>