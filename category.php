<div class="row">
  <?php
  $terms = get_terms( 'category', array( 'orderby' => 'slug', 'parent' => get_query_var('cat') ) );
  if ( ! empty( $terms ) && ! is_wp_error( $terms ) ){
    foreach( $terms as $term ) {
      ?>
      <div class="col-md-6">
        <h4><?php echo $term->name ?> </h4>
        <?php
        $query = new WP_Query(
          array(
            'post_type' => 'menus',
            'order' => 'asc',
            'tax_query' => array(
              array(
          			'taxonomy' => 'category',
          			'field'    => 'term_id',
          			'terms'    => array( $term->term_id ),
          			'operator' => 'IN',
          		)
            )
          )
        );
        while( $query->have_posts() ) :
          $query->the_post(); ?>
        <h3><?php the_title() ?> <small><?php echo get_post_meta( $post->ID, 'price', true ) ?></small></h3>
        <?php the_content() ?>
      <?php endwhile; ?>
      </div>
    <?php
  }
  ?>
</div>
<?php
}
?>
