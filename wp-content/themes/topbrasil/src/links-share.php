<ul class="links-share">
  <?php

$urlPost = get_permalink();
$tituloPost = get_the_title();

?>
  <li><a class="social" href="http://www.facebook.com/share.php?u=<?php echo $urlPost ?>&title=<?php echo $tituloPost ?>" title="Share on Facebook" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>

 <li><a title="social icon-twitter" href="https://twitter.com/intent/tweet?text=<?php echo urlencode( get_the_title() ) ?>&amp;url=<?php echo urlencode( get_permalink() ); ?>" title="Tweet Me"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>


  <li><a class="social icon-linkedin" href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo $urlPost ?>" title="Share on Linkedin" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>


  <li>
  	<a class="social icon-whatsapp" href="https://web.whatsapp.com/send?text=<?php echo $urlPost ?>" target="_blank" data-action="share/whatsapp/share">
  		<i class="fa fa-whatsapp" aria-hidden="true"></i>
  	</a>
  	<a class="social icon-whatsapp mobile-icon" href="whatsapp://send?text=<?php echo $urlPost ?>" target="_blank" data-action="share/whatsapp/share">
  		<i class="fa fa-whatsapp" aria-hidden="true"></i>
  	</a>
  </li>  
</ul>  
