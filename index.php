 <?php get_header(); ?>
 <div class="blog-body">
         <div class="row">
            <div class="col-xs-12 blog-main">
 <?php if(have_posts()): ?>
 <?php while(have_posts()): the_post(); ?>
   <div class="blog-post">
   <div <?php post_class(); ?>>
      <div class="blog-post-header">
         <a href="<?php the_permalink(); ?>"><h1 class="blog-post-title"><?php the_title(); ?></h1></a>
         <p class="blog-post-meta">
            Yazar: <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><?php the_author(); ?></a><span> - <?php the_time('F jS, Y') ?></span>
            <span> <?php if(!is_page()): ?>- Kategori: <?php the_category(', '); endif; ?>
         </p>
      </div>
      
      <?php
      
      if(is_singular()){
		the_content('');
	  ?> 
	  
	  <div class="comments_p">
	  <span class="comments_span">Yorumlar</span>
	  <hr class="small" />
		<?php comments_template(); ?>
	  </div>
	  
      <?php } else {
		the_content('.. Devamını Oku »');
      }
      
      ?>
      
      <?php endwhile; ?>

   </div>
   
   <nav>
   <ul class="pager">
      <span class="page-number"><?php next_posts_link('Older') ?></span>
      <span class="page-number"><?php previous_posts_link('Newer') ?></span>
   </ul>
</nav>



<?php else : ?>

<h1>HOUSTON WE HAVE A PROBLEM!</h1>
<img src="<?php bloginfo('template_url'); ?>/whp.png">

<?php endif; ?>
   	
<?php get_footer(); ?>