<?php get_header(); ?>

<div id="container">

	<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>

		<div class="post" id="post-<?php the_ID(); ?>">

			<h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>

			<div class="entry"> 
                     <p class="date">
<?php _e('Posted By '); ?> <?php the_author_posts_link(); ?> on <?php the_time(__('F j, Y')); ?>  <?php edit_post_link('Edit', ' &#124; ', ''); ?>  
				</p>                            			

				<?php the_content(); ?>
				<?php link_pages('<p><strong>Pages:</strong> ', '</p>', 'number'); ?>

				<p class="postmetadata">
<?php _e('Category&#58;'); ?> <?php the_category(', ') ?> 
                     <br />
<span class="tags"><?php _e('Tags: '); ?> <?php the_tags('', ', ', ''); ?></span>
                                </p>
<br />                              
                                
			</div>
                            
                        <div class="comments-template">
                              <h2>Comments</h2>
                              <?php comments_template(); ?>
                        </div>

		</div>

	<?php endwhile; ?>

		<div class="navigation">
			<?php previous_post_link('&laquo; %link') ?> &nbsp; &nbsp; <?php next_post_link(' %link &raquo;') ?>
		</div>

	<?php else : ?>

		<div class="post">
			<h2><?php _e('Not Found'); ?></h2>
		</div>

	<?php endif; ?>

</div>
<?php include('left_sidebar.php');?>
<?php include('right_sidebar.php');?>

<?php get_footer(); ?>