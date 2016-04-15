<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
<!--   <div class="tabcontent" id="tab-<?php the_ID(); ?>">
    <?php the_content(); ?>
  </div> -->

<article id="sixth" class="case wrap">
	<div class="grid-row">
		<div class="colspan-6">
			<?php 
			      $image = get_field('project_image');
			      if( !empty($image) ): ?>
			       <?php
			        $size = 'large';
			        $size = $image['sizes'][ $size ];
			        $alt = $image['alt'];
			       ?>
			<?php endif; ?>
			<div class="thumb"> <img src="<?php echo $size; ?>"> </div>
		</div>
		<div class="colspan-6">
			<h1><?php the_title(); ?></h1>
			<div class="summary">
				<p><?php the_content(); ?></p>
			</div>
<!--  

<?php
$terms = get_the_terms( $post->ID, 'skill' );
 
if ( $terms && ! is_wp_error( $terms ) ) : 
 
	$vehicle_details = array();
 
	foreach ( $terms as $term ) {
		$vehicle_details[] = $term->name;
	}
 
	$vehicle_detail = join( "</li> <li>", $vehicle_details);
?>
 
<ul class="skills">
	<li><?php echo $vehicle_detail; ?></li>
</ul>
 
<?php endif; ?>

-->



			<a href="<?php the_field('project_url');?>" class="btns" target="_blank">Visit Site</a> </div>
	</div>
</article>

<?php endwhile; endif; ?>