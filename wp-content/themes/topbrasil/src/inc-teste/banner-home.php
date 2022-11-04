<section class="banner-home">
  <div class="banner-home-carousel">

  <?php  
  	$slides = get_field('slides_home');
  	foreach ($slides as $slide) :
  ?>
    <a href="<?= $slide["link_slide"] ?>"><div class="item-carousel" style="background: url(<?=$slide["imagem_slide"]["url"] ?>) center center no-repeat;"></div></a>
  
  <?php endforeach; ?>

  </div>
</section>
