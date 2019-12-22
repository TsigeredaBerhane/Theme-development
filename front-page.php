<?php get_header() ?>

<?php if ( function_exists( 'easingslider' ) ) { easingslider( 9 ); } ?>
<div class="container">
    <br>
    
    <br>
    <div class="col-12">

    <div class="note">
    <h2 align="center">WRITING</h2>
    <p align="center" style="text-align: justify;">Writing is a medium of human communication that represents language and emotion with signs and symbols. In most languages, writing is a complement to speech or spoken language. Writing is not a language, but a tool used to make languages be read. Within a language system, writing relies on many of the same structures as speech, such as vocabulary, grammar, and semantics, with the added dependency of a system of signs or symbols. The result of writing is called text, and the recipient of text is called a reader. Motivations for writing include publication, storytelling, correspondence, record keeping and diary. Writing has been instrumental in keeping history, maintaining culture, dissemination of knowledge through the media and the formation of legal systems.</p>
    </div>
    </div>
    
    <div class="height100">
        <a href="<?php the_permalink($post = 2);?>">
        	<div class="width33" align="center">
            <article class="individualButton">

                <b><h1>Sample Page</h1></b>
                <p>Learn what this site is all about and what you can find</p>

                <hr class="greyBorder" />

                Read More 

            </article>

        	</div>
        </a>

        <a href="<?php the_permalink($post = 30);?>">
	        <div class="width33" align="center">
	            <article class="individualButton">

	                <b><h1>Blog</h1></b>
	                <p>Write your own opinion about anything you want.</p>

	                <hr class="greyBorder" />

	                Read More

	            </article>

	        </div>
    	</a>

        <a href="<?php the_permalink($post = 55);?>">
	        <div class="width33" align="center">
	            <article class="individualButton">

	                <b><h1>Service</h1></b>
	                <p>Discover the services you can get and use from</p>

	                <hr class="greyBorder" />

	                Read More

	            </article>

	        </div>
    	</a>

    	
    
    </div>    
      <br>
      <br>
</div>


<?php get_footer() ?>
