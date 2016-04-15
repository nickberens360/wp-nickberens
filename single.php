<?php get_header(); ?>


<div class="menu-container">
	<div class="menu">
		<ul>
			<li><a href="../../../index.html#home"> <span aria-hidden="true" class="icons-home"></span></a></li>
			<li><a href="../../../index.html#about"> <span aria-hidden="true" class="icons-user"></span></a></li>
			<li><a href="../../../index.html#work"> <span aria-hidden="true" class="icons-briefcase"></span></a></li>
			<li><a href="../../../index.html#blog"><span aria-hidden="true" class="icons-pencil"></span></a></li>
			<li><a href="../../../index.html#contact"> <span aria-hidden="true" class="icons-mail"></span></a></li>

		</ul>
	</div>
	<div class="menu-toggle animated fadeInDown">
		<span class="toggle-f"></span> 
		<span class="toggle-m"></span> 
		<span class="toggle-l"></span> 
	</div>
</div>
<div class="name"><a href="http://nickberens.me"><span class="myname">Nick Berens</span> <span class="name-title"><span class="keep">Front End Developer</span><span class="lose">, Designer, Consultant</span></a></span></div>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<section class="single size"> <a href="#work" class="arrows up dark"></a>
	<div class="cell">
	<!-- <img src="http://nickberens.me//img/css.png" width="166" height="166" alt=""/> -->
  
	<article class="wrap">
	<h1 class="fittext2"><?php the_title()?></h1>
	<!-- <span class="tags"><a class="tag-link" href="http://nickberens.me//tag/CSS">CSS</a></span> -->

	<div class="intro"><?php the_field('post_intro');?></div>


	<?php the_content();?>



	</article>

	<?php endwhile; else: ?>
	<p>Sorry, no posts to list</p>
<?php endif; ?>


<!-- <p class="pull-right">    	<a href="http://nickberens.me//2013/12/27/git-alias.html" title="Next Post: Git Alias">right</a> 	 </p> -->

    <div class="comments wrap">
<div id="disqus_thread"></div>
    <script type="text/javascript">
        /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
        var disqus_shortname = 'nickberensme'; // required: replace example with your forum shortname

        /* * * DON'T EDIT BELOW THIS LINE * * */
        (function() {
            var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
            dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
            (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
        })();
    </script>
    <noscript>Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
    <a href="http://disqus.com" class="dsq-brlink">comments powered by <span class="logo-disqus">Disqus</span></a>
    
    </div>
	</div>
		
</section>



<?php get_footer(); ?>




