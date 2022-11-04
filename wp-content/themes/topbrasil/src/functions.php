<?php


add_action('pre_get_posts', 'remove_query_attachment_filename_filter');

function remove_query_attachment_filename_filter()
{
    remove_filter('posts_clauses', '_filter_query_attachment_filenames');
}


/*







 * Custom Post's







 */


require_once 'functions/custom-posts/pacotes.php';




/*







 * Taxonomies







 */



/*







 * Fun��es Auxiliares







 */


require_once 'functions/helpers/upload-integracao.php';


require_once 'functions/helpers/upload-integracao-pacotes.php';


require_once 'functions/helpers/termo-por-nome-integracao.php';


require_once 'functions/helpers/moeda.php';


require_once 'functions/theme-options.php';


require_once 'functions/seo-tags.php';


/*







 * Outra Fun��es







 */


/*







 * Importar Scripts e Styles







 */


function wpdocs_theme_name_scripts()
{


    wp_enqueue_style('Owl-Carousel-CSS', get_template_directory_uri() . '/assets/css/lib/owl.carousel.css');
    wp_enqueue_style('Fancybox-CSS', get_template_directory_uri() . '/assets/css/lib/fancybox/jquery.fancybox.css');
    wp_enqueue_style('JSUI-CSS', get_template_directory_uri() . '/assets/css/lib/jquery-ui.css');

    wp_enqueue_style('Font-Awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css');
//   wp_enqueue_style( 'Font-Raleway', 'https://fonts.googleapis.com/css?family=Raleway:300,300i,400,400i,500,500i,600,600i,700,700i,800');
//   wp_enqueue_style( 'Font-Open-Sans', 'https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600,600i,700,700i');

    wp_enqueue_style('Animate', get_template_directory_uri() . '/assets/css/lib/animate.css');
    wp_enqueue_style('CSS-Principal', get_template_directory_uri() . '/assets/css/main.css?v=' . time());
    wp_enqueue_style('CSS-Impressao', get_template_directory_uri() . '/assets/css/print.css?v=' . time());

//   wp_enqueue_style( 'CSS-Concated', get_template_directory_uri() . '/assets/css/concat-css.css');

    wp_enqueue_script('jQuery', get_template_directory_uri() . '/assets/js/lib/jquery-2.2.3.min.js', array(), '1.0.0', true); // Verificar vers�o do Jquery
    wp_enqueue_script('Masks Plugins', get_template_directory_uri() . '/assets/js/lib/mask.js', array(), '1.0.0', true);
    wp_enqueue_script('Owl Carousel', get_template_directory_uri() . '/assets/js/lib/owl.carousel.min.js', array(), '1.0.0', true);
    wp_enqueue_script('Fancybox JS', get_template_directory_uri() . '/assets/js/lib/jquery.fancybox.js', array(), '1.0.0', true);
    wp_enqueue_script('RX Scroll', get_template_directory_uri() . '/assets/js/lib/rxscroll.js', array(), '1.0.0', true);
    wp_enqueue_script('YTS Validation', get_template_directory_uri() . '/assets/js/lib/yts-validation.js?v=' . time(), array(), '1.0.0', true);
    wp_enqueue_script('Map ACF', get_template_directory_uri() . '/assets/js/lib/map-acf.js', array(), '1.0.0', true);
    wp_enqueue_script('JS UI', get_template_directory_uri() . '/assets/js/lib/jquery-ui.min.js', array(), '1.0.0', true);
    wp_enqueue_script('JS Principal', get_template_directory_uri() . '/assets/js/main.js?v=' . time(), array(), '1.0.0', true);

//   wp_enqueue_script( 'JS-Concated', get_template_directory_uri() . '/assets/css/concat-js.js', array(), '1.0.0', true );


    wp_enqueue_script('Google API', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyB40kFY4W0BuCvpUzht31mLHGGMhgwS3Kg', array(), '1.0.0', true);
    wp_localize_script('Ajax Area', 'object_name', $translation_array);
    wp_enqueue_script('jQuery Easing', 'https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js', array(), '1.0.0', true);
    wp_localize_script('JS Principal', 'object_name', $translation_array);

}


add_action('wp_enqueue_scripts', 'wpdocs_theme_name_scripts');


/*







 * Importar Admin Scripts e Styles







 */


add_action('admin_enqueue_scripts', 'wptuts53021_load_admin_script');


function wptuts53021_load_admin_script($hook)
{


    wp_enqueue_script(


        'wptuts53021_script', //unique handle


        get_template_directory_uri() . '/assets/js/admin.js', //location


        array('jquery')  //dependencies


    );


}


function my_admin_enqueue($hook)
{


    if ('post.php' != $hook) {


        return;


    }


    wp_enqueue_script('my_custom_script', get_template_directory_uri() . '/assets/js/lib/admin.js');


}


add_action('admin_enqueue_scripts', 'my_admin_enqueue');


/*







 * EDITOR CSS







 */


function my_theme_add_editor_styles()
{


    add_editor_style(get_template_directory_uri() . '/assets/css/admin.css');


}


add_action('admin_init', 'my_theme_add_editor_styles');


/*







 * REMOVER CARACTERES E ESPA�OS







 */


function cleanstring($str)
{
    //$str = preg_replace('/[�����]/ui', 'a', $str);
    //$str = preg_replace('/[����]/ui', 'e', $str);
    //$str = preg_replace('/[����]/ui', 'i', $str);
    //$str = preg_replace('/[�����]/ui', 'o', $str);
    //$str = preg_replace('/[����]/ui', 'u', $str);
    //$str = preg_replace('/[�]/ui', 'c', $str);
    //$str = preg_replace('/[,(),;:|!"#$%&/=?~^><��-]/', '_', $str);
    //$str = preg_replace('/[^a-z0-9]/i', '', $str);
    //$str = preg_replace('/[^0-9,.]/', '', $str);
    //$str = preg_replace('/_+/', '_', $str); // ideia do Bacco :)

    $str = str_replace(' ', '', $str); // Replaces all spaces.

    $str = str_replace('-', '', $str); // Replaces all hyphens.

    $str = preg_replace('/[^A-Za-z0-9\-]/', '', $str); // Removes special chars.

    $str = preg_replace("/[^0-9,.]/", '', $str);

    return $str;
}


/*







 * Menus







 */


add_action('init', 'register_menu');


function register_menu()
{


    register_nav_menu('primary-menu', __('Menu Topo'));


}


/*







 * Add Sidebar







 */


if (function_exists('register_sidebar'))


    register_sidebar(array(


        'name' => __('Blog Sidebar', 'theme_text_domain'),


        'before_widget' => '<li id="%1$s" class="widget %2$s">',


        'after_widget' => '</li>',


        'before_title' => '<p class="widgettitle">',


        'after_title' => '</p>',


    ));


/*







 * IMAGEM DESTACADA







 */


add_theme_support('post-thumbnails');


add_image_size('box_thumb', 204, 100, false);


/*







 * Remover a Barra do Admin para ADMS







 */


//add_filter('show_admin_bar', '__return_false');


/*







 * Get YouTube ID from URL







 */


function youtube_id_from_url($url)
{


    $pattern =


        '%^# Match any youtube URL







        (?:https?://)?  # Optional scheme. Either http or https







        (?:www\.)?      # Optional www subdomain







        (?:             # Group host alternatives







          youtu\.be/    # Either youtu.be,







        | youtube\.com  # or youtube.com







          (?:           # Group path alternatives







            /embed/     # Either /embed/







          | /v/         # or /v/







          | /watch\?v=  # or /watch\?v=







          )             # End path alternatives.







        )               # End host alternatives.







        ([\w-]{10,12})  # Allow 10-12 for 11 char youtube id.







        $%x';


    $result = preg_match($pattern, $url, $matches);


    if ($result) {


        return $matches[1];


    }


    return false;


}


/*







 * Custom Excerpt







 */


function limita_caracteres($texto, $limite = 50, $quebra = true)
{


    $tamanho = strlen($texto);


    if ($tamanho <= $limite) { //Verifica se o tamanho do texto � menor ou igual ao limite


        $novo_texto = $texto;


    } else { // Se o tamanho do texto for maior que o limite


        if ($quebra == true) { // Verifica a op��o de quebrar o texto


            $novo_texto = trim(substr($texto, 0, $limite)) . "...";


        } else { // Se n�o, corta $texto na �ltima palavra antes do limite


            $ultimo_espaco = strrpos(substr($texto, 0, $limite), " "); // Localiza o �tlimo espa�o antes de $limite


            $novo_texto = trim(substr($texto, 0, $ultimo_espaco)) . "..."; // Corta o $texto at� a posi��o localizada


        }


    }


    return $novo_texto; // Retorna o valor formatado


}


/*







 * Pagina��o







 */


function wordpress_pagination()
{


    global $wp_query;


    $big = 999999999;


    echo paginate_links(array(


        'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),


        'format' => '?paged=%#%',


        'current' => max(1, get_query_var('paged')),


        'total' => $wp_query->max_num_pages


    ));


}


/////////////////////////////////////////// Cr�ditos Imagem


/*







** Custom field para Media Uploader







*/


function attachment_field_credit($form_fields, $post)
{


    $form_fields['be_photographer_name'] = array(


        'label' => 'Autor da Imagem',


        'input' => 'text',


        'value' => get_post_meta($post->ID, 'be_photographer_name', true)


    );


    $form_fields['be_photographer_url'] = array(


        'label' => 'Url de Origem',


        'input' => 'text',


        'value' => get_post_meta($post->ID, 'be_photographer_url', true)


    );


    return $form_fields;


}


add_filter('attachment_fields_to_edit', 'attachment_field_credit', 10, 2);


function attachment_field_credit_save($post, $attachment)
{


    if (isset($attachment['be_photographer_name'])) {


        update_post_meta($post['ID'], 'be_photographer_name', $attachment['be_photographer_name']);


    }


    if (isset($attachment['be_photographer_url'])) {


        update_post_meta($post['ID'], 'be_photographer_url', esc_url($attachment['be_photographer_url']));


    }


    return $post;


}


add_filter('attachment_fields_to_save', 'attachment_field_credit_save', 10, 2);


function get_media_info($id)
{


    $nome = get_post_meta($id, 'be_photographer_name', true);


    $url = get_post_meta($id, 'be_photographer_url', true);


    $output = NULL;


    if ($nome) {


        if ($url) {


            $output = '<span class="origem-media"><a href="' . $url . '" title="' . $nome . '" target="_blank">' . $nome . '</a></span>';


        } else {


            $output = '<span class="origem-media">' . $nome . '</span>';


        }


    }


    return $output;


}


function html_insert_image($html, $id, $caption, $title, $align, $url, $size)
{


    $html = get_image_tag($id, '', $title, $align, $size);


    $info = get_media_info($id);


    $output = "<figure id='post-$id media-$id' class='figure align$align'>";


    $output .= $html;


    $output .= ' ' . $info . ' ';


    $output .= "</figure>";


    return $output;


}


add_filter('image_send_to_editor', 'html_insert_image', 10, 9);


/*







 * Get first image from the_content()







 */


function catch_that_image()
{


    global $post, $posts;


    $first_img = '';


    ob_start();


    ob_end_clean();


    $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);


    $first_img = $matches[1][0];


    if (empty($first_img)) {


        $first_img = $output;


    }


    return $first_img;


}


/* Limita caracteres */


function lchar($str, $val)
{
    return strlen($str) <= $val ? $str : substr($str, 0, $val) . '...';
}


/*







 * Options Page Campos de C�mbio







 */


if (function_exists('acf_add_options_page')) {


    acf_add_options_page(array(


        'page_title' => 'Cotacao',


        'menu_title' => 'Cotacao',


        'menu_slug' => 'cotacao-code',


        'capability' => 'edit_posts',


        'redirect' => false


    ));


}


/*







 * API GOOGLE ACF







 */


function my_acf_init()
{


    acf_update_setting('google_api_key', 'AIzaSyB40kFY4W0BuCvpUzht31mLHGGMhgwS3Kg');


}


add_action('acf/init', 'my_acf_init');


// URL AMIGAVEL


function urlAmigavel($nom_tag, $slug = "-")
{


    $string = strtolower($nom_tag);


    // C�digo ASCII das vogais


    $ascii['a'] = range(224, 230);


    $ascii['e'] = range(232, 235);


    $ascii['i'] = range(236, 239);


    $ascii['o'] = array_merge(range(242, 246), array(240, 248));


    $ascii['u'] = range(249, 252);


    // C�digo ASCII dos outros caracteres


    $ascii['b'] = array(223);


    $ascii['c'] = array(231);


    $ascii['d'] = array(208);


    $ascii['n'] = array(241);


    $ascii['y'] = array(253, 255);


    foreach ($ascii as $key => $item) {


        $acentos = '';


        foreach ($item as $codigo) $acentos .= chr($codigo);


        $troca[$key] = '/[' . $acentos . ']/i';


    }


    $string = preg_replace(array_values($troca), array_keys($troca), $string);


    // Slug?


    if ($slug) {


        // Troca tudo que n�o for letra ou n�mero por um caractere ($slug)


        $string = preg_replace('/[^a-z0-9]/i', $slug, $string);


        // Tira os caracteres ($slug) repetidos


        $string = preg_replace('/' . $slug . '{2,}/i', $slug, $string);


        $string = trim($string, $slug);


    }


    return $string;


}


// Limite de caracteres

function excerpt($limit)
{

    $excerpt = explode(' ', get_the_content(), $limit);

    if (count($excerpt) >= $limit) {

        array_pop($excerpt);

        $excerpt = implode(" ", $excerpt) . '...';

    } else {

        $excerpt = implode(" ", $excerpt);

    }

    $excerpt = preg_replace('`\[[^\]]*\]`', '', $excerpt);

    return $excerpt;

}


add_action('manage_posts_custom_column', 'custom_columns', 10, 2);


function custom_columns($column, $post_id)
{

    switch ($column) {

        case 'peso_destinos':

            $terms = get_the_term_list($post_id, 'peso_destinos', '', ',', '');

            if (is_string($terms)) {

                echo $terms;

            } else {

                _e('Unable to get author(s)', 'your_text_domain');

            }

            break;


        case 'publisher':

            echo get_post_meta($post_id, 'publisher', true);

            break;

    }

}

add_filter('posts_results', 'cache_meta_data', 9999, 2);
function cache_meta_data($posts, $object)
{
    $posts_to_cache = array();
    // this usually makes only sense when we have a bunch of posts
    if (empty($posts) || is_wp_error($posts) || is_single() || is_page() || count($posts) < 3)
        return $posts;

    foreach ($posts as $post) {
        if (isset($post->ID) && isset($post->post_type)) {
            $posts_to_cache[$post->ID] = 1;
        }
    }

    if (empty($posts_to_cache))
        return $posts;

    update_meta_cache('post', array_keys($posts_to_cache));
    unset($posts_to_cache);

    return $posts;
}

// Dados Estruturados

function edit_yoast_organization($data)
{

    if (!is_front_page()) {
        return array();
    }


    $data["contactPoint"] = array(
        "@type" => "ContactPoint",
        "telephone" => "(11) 5576-6300",
        "contactType" => "customer service",
        "areaServed" => array(
            "@type" => "AdministrativeArea",
            "name" => "Brazil"
        ),
        "availableLanguage" => array(
            "@type" => "Language",
            "name" => "Português",
            "alternateName" => "pt-BR"
        ));
    $data["areaServed"] = array(
        "@type" => "AdministrativeArea",
        "name" => "Brazil"
    );


    return $data;
}


add_filter('wpseo_schema_organization', 'edit_yoast_organization', 10, 1);


function yst_change_json_ld_search_url()
{
    return "https://www.topbrasiltur.com.br/busca/?busca={search_term_string}";
}

add_filter('wpseo_json_ld_search_url', 'yst_change_json_ld_search_url');




