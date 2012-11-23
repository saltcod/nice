<?php
/**
 * @package WordPress
 * @subpackage Toolbox
 */
?>

 
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
      
     <div class="entry-content">
 
    <div class="thumbnail">
        <a href="<?php echo treasure_island_get_url();?>"><img src="<?php treasure_island_browser_shot();?>" alt=""></a>                                        
    </div>
    
    </div><!-- .entry-content -->

 
   
</article><!-- #post-<?php the_ID(); ?> -->