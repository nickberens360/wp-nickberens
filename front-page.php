<?php
/*
Template Name: Front page 
*/
?>

<?php get_header(); ?>
<div class="bg-bg"></div>
<div class="menu-container">
	<div class="menu">
		<ul>
			<li><a href="#home"> <span aria-hidden="true" class="icons-home"></span></a></li>
			<li><a href="#about"> <span aria-hidden="true" class="icons-user"></span></a></li>
			<li><a href="#work"> <span aria-hidden="true" class="icons-briefcase"></span></a></li>
			<!-- <li><a href="#blog"><span aria-hidden="true" class="icons-pencil"></span></a></li> -->
			<li><a class="atomicNavLink" href="#atomic"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/docsNav.png"/></a></li>
			<li><a href="#atmedia"><span aria-hidden="true" class="icons-amper atmediaLink">@</span></a></li>
			<li class="scribLink"><a class="atomicNavLink" href="#scribbles"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/scribNav.png"/></a></li>
			<li><a href="#contact"> <span aria-hidden="true" class="icons-mail"></span></a></li>
		</ul>
	</div>
	
	<div class="menu-toggle animated fadeInDown">
		<span class="toggle-f"></span> 
		<span class="toggle-m"></span> 
		<span class="toggle-l"></span> 
	</div>
	
</div>

	<section id="home" class="size animated fadeIn">
		<div class="cell">
			<div class="billboard wrap animated fadeInUp">
				<h1>Nick Berens</h1>
				<h2>UX/UI Developer, Designer, Consultant</h2>
			</div>
		</div>
		<a href="#about" class="arrows down dark"><span aria-hidden="true" class="icons-arrow-down"></span></a> 
	</section>

<section id="about" class="size animated fadeIn"> <a href="#home" class="arrows up"><span aria-hidden="true" class="icons-arrow-up"></span></a>
	<div class="cell">
		<article class="profile wrap">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/me2.png" width="166" height="164" alt="Nick Berens">
			<p>I work for the wonderful company <a href="http://www.wisnet.com/">wisnet.com</a> in Fond du Lac, WI. You can friend me on <a href="https://www.facebook.com/">Facebook</a>, follow me on <a href="https://twitter.com/bl0cklevel">Twitter</a>, join my circles on <a href="https://plus.google.com/101857672599259815688/posts">Google+</a>, or take a look at some of my code on  <a href="https://github.com/nickberens360?tab=repositories">github</a>.</p>
		</article>
	</div>
	<a href="#work" class="arrows down"><span aria-hidden="true" class="icons-arrow-down"></span></a> 	
</section>



<section id="work" class="size animated fadeIn"> <a href="#about" class="arrows up"><span aria-hidden="true" class="icons-arrow-up"></span></a>
	
	<div class="cell">
	
<section id="details" class="details size animated fadeIn"> 
	<div class="cell">
	<div class=" wrap"> <span class="clse">X</span> </div>
	<div id="cases">
		
	</div>
	</div>
</section>
		<div class="workGrid wrap">
			<?php
			$args = array(
				'post_type' => 'projects'
			);
			$query = new WP_Query( $args );
			?>				
			<?php if($query->have_posts()) : ?>					
				 <?php while($query->have_posts()) : $query->the_post() ?>

			<div class="workGrid__item">	
	        	<a href="<?php the_permalink(); ?>" rel="<?php the_ID(); ?>" class="mylinks">
	        		<?php 
					      $image = get_field('project_image');
					      if( !empty($image) ): ?>
					       <?php
					        $size = 'large';
					        $size = $image['sizes'][ $size ];
					        $alt = $image['alt'];
					       ?>
					       <img src="<?php echo $size; ?>">
					<?php endif; ?>
	        	</a> 
			</div>
			<?php endwhile ?>					
			<?php endif ?>	
			<?php wp_reset_postdata(); ?>
    

       
					
			

		
			 
		</div>
	</div>
	<a href="#atomic" class="arrows down"><span aria-hidden="true" class="icons-arrow-down"></span></a> 
</section>





<section id="atomic" class="atomic size animated fadeIn"> <a href="#work" class="arrows up dark"><span aria-hidden="true" class="icons-arrow-up"></span></a>

	<div class="cell">
		
		<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo.png"/>
		<br/><br/>
		<p class="atomicSub">Styleguide generator and sass partial manager.</p>
		<img class="atomicDemo shadow" src="http://atomic-docs.io/img/demo1.gif"/>
		<a href="http://atomic-docs.io/" class="atomicLink">Check it out!</a>

	</div>
	<a href="#atmedia" class="arrows down dark"><span aria-hidden="true" class="icons-arrow-down"></span></a> 	
</section>


<section id="atmedia" class="atmedia size animated fadeIn"> <a href="#atomic" class="arrows up"><span aria-hidden="true" class="icons-arrow-up"></span></a>

	<div class="cell">
	<div class="amper">&#64;</div>
	<a href="http://atmediaquery.com/" class="atmedia__heading">atmediaquery.com</a>
	<p class="atomicSub">Media query generator, because I'm lazy.</p>
	


	</div>
	<a href="#scribbles" class="arrows down"><span aria-hidden="true" class="icons-arrow-down"></span></a> 	
</section>




<section id="scribbles" class="scribbles size animated fadeIn"> <a href="#atmedia" class="arrows up dark">
<span aria-hidden="true" class="icons-arrow-up "></span></a>
<div class="sideRule"></div>

	<div class="cell">
	
		<h2 class="writtenHeading">Scribbles</h2>
		<p class="writtenSub">Half baked ideas, wireframes, odds&nbsp;&amp;&nbsp;ends&nbsp;etc...</p>
		<ul class="scribbleList">
		<?php
			$args = array(
				'post_type' => 'scribbles',
				'orderby' => 'menu_order title',
	            'order'   => 'ASC',
			);
			$query = new WP_Query( $args );
			?>				
			<?php if($query->have_posts()) : ?>					
				 <?php while($query->have_posts()) : $query->the_post() ?>
                <li><a href="<?php the_field('url');?>"><?php the_title();?></a></li>
			<?php endwhile ?>					
			<?php endif ?>	
			<?php wp_reset_postdata(); ?>
		</ul>


	</div>
	<a href="#contact" class="arrows down dark"><span aria-hidden="true" class="icons-arrow-down"></span></a> 	
</section>  




<!-- <section id="blog" class="blog size animated fadeIn"> <a href="#work" class="arrows up dark"><span aria-hidden="true" class="icons-arrow-up"></span></a>

	<div class="cell">
	<h2>Words, Snippets, Stuff</h2>
	<article class="article-index wrap">
		<ul class="article-roll">
		<?php
			$args = array(
				'post_type' => 'post'
			);
			$query = new WP_Query( $args );
			?>				
			<?php if($query->have_posts()) : ?>					
			<?php while($query->have_posts()) : $query->the_post() ?>
    
		      <li>   
		        <span class="post-date"><?php the_date(); ?></span> <a href="<?php the_permalink();?>"><img src="http://nickberens.me//img/" width="50" height="50" alt=""/><span class="post-title"><?php the_title();?><span></a>
						
		      </li>
            
            <?php endwhile ?>					
			<?php endif ?>	
			<?php wp_reset_postdata(); ?>
</ul>
 
		<div class="more">More</div>
	</article>


	</div>
	<a href="#contact" class="arrows down dark"><span aria-hidden="true" class="icons-arrow-down"></span></a> 	
</section> -->


<section id="contact" class="size animated fadeIn"> <a href="#scribbles" class="arrows up"><span aria-hidden="true" class="icons-arrow-up"></span></a>
	<div class="cell">
	
<div class="cntct-form">
		<h2 id="sup">Hello.</h2>
		<h2 id="ty">Thanks (:</h2>			
<div id='container' style="color:white">
  


<?php echo do_shortcode('[contact-form-7 id="34" title="Contact form 1"]'); ?>

 </div> 
</div>
		
	</div>
</section>


<?php get_footer(); ?>


