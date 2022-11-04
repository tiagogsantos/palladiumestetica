<section class="breadcrumb-back">
	<div class="container">
		<div class="parent-flex flex">
			<div class="breadcrumb col">
				
				
			</div>

			<span class="compartilhar">Compartilhe!</span> &nbsp;&nbsp;&nbsp;

			<ul class="links-share"> 

				 <?php

				$urlPost = get_permalink();
				$tituloPost = get_the_title();

				?>
		 
			  <li><a style="cursor: pointer;" class="social icon-twitter" href="http://twitter.com/home?status=<?php the_permalink(); ?>&amp;title=<?php the_title(); ?>" title="Share on Twitter" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>

			  <li><a style="cursor: pointer;" class="social icon-linkedin" href="http://www.linkedin.com/shareArticle?mini=true&url=<?php the_permalink(); ?>&amp;title=<?php the_title(); ?>&source=" title="Share on Linkedin" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>

			  <li>
			  	<a style="cursor: pointer;" class="social icon-whatsapp" href="https://web.whatsapp.com/send?text=<?php the_permalink(); ?>&amp;title=<?php the_title(); ?>" target="_blank" data-action="share/whatsapp/share">
			  		<i class="fa fa-whatsapp" aria-hidden="true"></i>
			  	</a>
			  	<a style="cursor: pointer;" class="social icon-whatsapp mobile-icon" href="whatsapp://send?text=<?php echo $urlPost ?>" target="_blank" data-action="share/whatsapp/share">
			  		<i class="fa fa-whatsapp" aria-hidden="true"></i>
			  	</a>
			  </li>  
			</ul>

			

			<div class="col back-page">
				<a href="javascript:history.back()" class="back-page-button">Voltar</a> <br/>
			</div>
		</div>
	</div> 
</section>



<style type="text/css">

.links-share {justify-content: space-evenly !important; margin-right: -60%; }	

span.compartilhar {margin-top: 29px; font-weight: 700; text-transform: uppercase;}

.back-page {margin-top: 32px !important; margin-bottom: 0px !important;}

.back-page a {margin-top: -7px !important;}

</style>