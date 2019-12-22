<?php
get_header();
?>
<div class="container" style="margin-top: 30px; background-color: black; margin-bottom: 150px" >
<?php	
	if(have_posts()){
	    while(have_posts()){
	        
	        ?><h1><?php the_title();?></h1>
	        <?php
	        the_post();
	        
	        the_content();
	        
	        the_post_thumbnail('thumbnail');
	        
	    }
	}else{
	    echo "there are no posts!";
	}
	?>
	<br><br>
</div>
<?php
get_footer();
?>