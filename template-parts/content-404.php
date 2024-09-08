<?php if (get_field('404_body_content', 'option')) : ?>
  <div class="container-fluid px-0 404-page-content">
    <div class="container">
      <div class="row">
        <?php the_field('404_body_content', 'option'); ?>
      </div>
    </div>
  </div>
<?php endif; ?>
