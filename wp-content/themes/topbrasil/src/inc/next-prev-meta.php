<?php
	// Pagination Settings
	$args = array(
		'post_type'              => array( 'post' ),
		'posts_per_page'         => 7,
		'nopaging'               => true,
		'posts_per_page'         => -1,
	);
	// The Query
	$query = new WP_Query( $args );
	$x = 0;
	while ( $query->have_posts() ) : $query->the_post();
		$x++;
	endwhile;
	$pages = $x / 7;
	$pages = ceil($pages);
	$url = $_SERVER['REQUEST_URI'];
	$url = explode('page/', $url);
	$page_atual = intval(stripslashes($url[1]));
	$page_atual = (int)$page_atual;
	if ($page_atual < 1 || $page_atual ==  null) {
		$page_atual++;
	}
	$page_atual--;
?>

<?php $page_atual++; ?>

<?php
	$url = get_bloginfo('url');
	if ($page_atual >= 2) {
		echo '<link rel="prev" href="'.$url.'/blog/page/'.($page_atual-1).'">';
	}

	if ($page_atual + 1 <= $pages) {
		echo '<link rel="next" href="'.$url.'/blog/page/'.($page_atual+1).'">';
	}
?>