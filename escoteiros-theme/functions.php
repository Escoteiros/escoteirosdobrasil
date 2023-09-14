<?php
// Register Custom Navigation Walker

require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
//require get_template_directory() . "/vendor/autoload.php";

function loadFiles(){
    wp_deregister_script('jquery');
    wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-1.12.4.min.js', array(), '1.12.4', true);
    wp_enqueue_script('bootstrap.js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js', 'jquery', '1.0', true);
    wp_enqueue_script('flexisel.js', get_theme_file_uri('/js/jquery.flexisel.js'), 'jquery', '1.0', true);
    wp_enqueue_script('script.js', get_theme_file_uri('/js/script.js'), 'jquery', '1.0', true);
    // wp_enqueue_script('popper.js', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js', 'jquery', '1.0', true);
    wp_enqueue_style('estilo', get_template_directory_uri() . '/estilo.css?v=20220420');
    wp_dequeue_style('wp-block-library');

    wp_localize_script(
        'script.js',
        'wpAjax',
        array('ajaxUrl' => admin_url('admin-ajax.php'))
    );
    // INSERE A MÁSCARA DE CPF "00000-000"
    wp_enqueue_script('jquery_mask', 'https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js');
}

@ini_set('upload_max_size', '64M');
@ini_set('post_max_size', '64M');
@ini_set('max_execution_time', '300');

add_action('wp_enqueue_scripts', 'loadFiles');

function escoteirosFeatures(){
    register_nav_menu('MovimentoEscoteiro', 'Movimento Escoteiro');
    register_nav_menu('OQueFazemos', 'O que fazemos');
    register_nav_menu('Informacoes', 'Informações');
    register_nav_menu('FaleConosco', 'Fale Conosco');
    add_theme_support('custom-logo', ['width' => '275']);
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'escoteirosFeatures');

function logo_size_change(){
    remove_theme_support( 'custom-logo' );
    add_theme_support( 'custom-logo', array(
        'height'      => 100,
        'width'       => 400,
        'flex-height' => true,
        'flex-width'  => true,
    ) );
}
add_action( 'after_setup_theme', 'logo_size_change', 11 );

// CUSTOM SIZE IMAGES
function pw_add_image_sizes(){
    add_image_size('pw-mini', 50, 50, false);
    add_image_size('pw-mega', 300, 300, false);
    add_image_size('pw-banner', 1110, 700, false);
}

add_action('init', 'pw_add_image_sizes');
function pw_show_image_sizes($sizes){
    $sizes['pw-mini'] = __('Custom mini');
    $sizes['pw-mega'] = __('Custom Mega');
    $sizes['pw-banner'] = __('Custom Banner');

    return $sizes;
}
add_filter('image_size_names_choose', 'pw_show_image_sizes');


//NEW FILE FORMATS
function my_myme_types($mime_types){
    $mime_types['eps'] = 'application/postscript';
    return $mime_types;
}
add_filter('upload_mimes', 'my_myme_types', 1, 1);

function add_additional_class_on_li($classes, $item, $args){
    if ($args->add_li_class) {
        $classes[] = $args->add_li_class;
    }

    return $classes;
}

add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);

if (function_exists('acf_add_options_page')){
    acf_add_options_page(array(
        'page_title'    => 'Configurações Gerais',
        'menu_title'    => 'Configurações Gerais',
        'menu_slug'     => 'theme-general-settings',
        'capability'    => 'edit_posts',
        'redirect'      => false
    ));
}


define('WPSL_MARKER_URI', dirname(get_bloginfo('stylesheet_url')) . '/wpsl-markers/');

add_filter('wpsl_admin_marker_dir', 'custom_admin_marker_dir');

function custom_admin_marker_dir(){
    $admin_marker_dir = get_stylesheet_directory() . '/wpsl-markers/';
    return $admin_marker_dir;
}

function escoteiros_custom_search_input($search){
    $search = isset($_GET['cep']) ? esc_attr($_GET['cep']) : '';

    return $search;
}

add_filter('wpsl_search_input', 'escoteiros_custom_search_input', 999, 1);
add_filter('get_the_archive_title', 'rvfa_product_archive_title');

function rvfa_product_archive_title($title){
    if (is_post_type_archive('especialidade')) $title = 'Especialidades';
    if (is_post_type_archive('materia')) $title = 'Matérias';
    if (is_post_type_archive('noticia')) $title = 'Notícias';
    if (is_post_type_archive('evento')) $title = 'Eventos';
    if (is_post_type_archive('projeto')) $title = 'Projetos Institucionais';
    if (is_post_type_archive('download')) $title = 'Downloads';
    if (is_post_type_archive('relatorio')) $title = 'Relatórios';
    if (is_post_type_archive('convenio')) $title = 'Convênios';
    return $title;
}

function custom_menu_order($menu_ord){
    if (!$menu_ord) return true;

    return array(
        'index.php', // this represents the dashboard link
        'edit.php?post_type=page',
        'edit.php?post_type=noticias',
        'edit.php?post_type=materia',
        'edit.php?post_type=evento',
        'edit.php?post_type=diretoria-conselho',
        'edit.php?post_type=relatorio',
        'edit.php?post_type=especialidade',
        'edit.php?post_type=download',
        'edit.php?post_type=projeto',
        'edit.php?post_type=convenio',
        'edit.php?post_type=wpsl_stores',
        'edit.php', // this is the default POST admin menu
    );
}

add_filter('custom_menu_order', 'custom_menu_order');
add_filter('menu_order', 'custom_menu_order');

add_action('wp_ajax_nopriv_filter', 'filter_ajax');
add_action('wp_ajax_filter', 'filter_ajax');

function filter_ajax()
{
    $category = $_POST['category'];
    $taxonomy = $_POST['taxonomy'];
    $pagina = $_POST['page'];
    $tipoPost = $_POST['tipo'];
    if (isset($_GET["item"])) {
        var_dump($_GET["item"]);
        die;
    }

    if ($tipoPost == "download" && $category == ""){
?>
        <script>
            $(document).ready(function() {
                $("#emptyContainer").hide();
                $("#firstPageContainer").show();
            })
        </script>
    <?php
    } else {
    ?>
        <script>
            $(document).ready(function() {
                $("#emptyContainer").show();
                $("#firstPageContainer").hide();
            })
        </script>
    <?php
    }
    if ($category) {
        switch ($tipoPost) {
            case "evento":
                if ($category == "eventos-passados") {
                    $dataAtualPre = explode("-", date('Y-m-d'));
                    $dataAtual = $dataAtualPre[0] . "-" . $dataAtualPre[1] . "-" . $dataAtualPre[2];
                    $args = array(
                        'post_type' => $tipoPost,
                        'paged' => $pagina,
                        'meta_query' => array(
                            'key' => 'data_fim_evento',
                            'compare' => '<',
                            'value' => $dataAtual,
                            'type' => 'DATE',
                        ),

                        'meta_key' => 'data_evento',
                        'orderby' => 'meta_value_num',
                        'order' => 'DESC',
                    );
                } else {
                    $dataAtualPre = explode("-", date('Y-m-d'));
                    $dataAtual = $dataAtualPre[0] . $dataAtualPre[1] . $dataAtualPre[2];
                    $args = array(
                        'post_type' => $tipoPost,
                        'paged' => $pagina,
                        'tax_query' => array(
                            array(
                                'taxonomy' => $taxonomy,
                                'field' => 'slug',
                                'terms' => $category
                            )
                        ),
                        'meta_query' => array(
                            'key' => 'data_evento',
                            'compare' => '>=',
                            'value' => $dataAtual,
                            'type' => 'numeric',
                        ),
                        'meta_key' => 'data_evento',
                        'orderby' => 'meta_value_num',
                        'order' => 'ASC',
                    );
                }
                break;

            case "especialidade":
                $args = array(
                    'post_type' => $tipoPost,
                    'paged' => $pagina,
                    'tax_query' => array(
                        array(
                            'taxonomy' => $taxonomy,
                            'field' => 'slug',
                            'terms' => $category
                        )
                    ),
                    'orderby' => 'post_title',
                    'order' => 'ASC',
                );
                break;
            case 'download':
                $args = array(
                    'post_type' => $tipoPost,
                    'paged' => $pagina,
                    'tax_query' => array(
                        array(
                            'taxonomy' => $taxonomy,
                            'field' => 'slug',
                            'terms' => $category
                        )
                    ),
                    'orderby' => 'date',
                    'order' => 'DESC'
                );
                break;
            default:
                $args = array(
                    'post_type' => $tipoPost,
                    'paged' => $pagina,
                    'tax_query' => array(
                        array(
                            'taxonomy' => $taxonomy,
                            'field' => 'slug',
                            'terms' => $category
                        )
                    ),
                );
        }
    } else {
        if ($tipoPost == "especialidade"){
            $args = array(
                'post_type' => $tipoPost,
                'paged' => $pagina,
                'orderby' => 'post_title',
                'order' => 'ASC',
            );
        } else if ($tipoPost == "noticias"){
            $args = array(
                'post_type' => $tipoPost,
                'paged' => $pagina,
                'orderby' => 'post_date',
                'order' => 'DESC',
            );
        } else if ($tipoPost == "evento"){
            $dataAtualPre = explode("-", date('Y-m-d'));
            $dataAtual = $dataAtualPre[0] . $dataAtualPre[1] . $dataAtualPre[2];
            $args = array(
                'post_type' => $tipoPost,
                'paged' => $pagina,
                'meta_query' => array(
                    'key' => 'data_fim_evento',
                    'compare' => '>=',
                    'value' => $dataAtual,
                    'type' => 'numeric',
                ),
                'meta_key' => 'data_evento',
                'orderby' => 'meta_value_num',
                'order' => 'ASC'
            );
        } else if ($tipoPost == "download") {
            $args = array();
        } else

            $args = array(
                'post_type' => $tipoPost,
                'paged' => $pagina,
            );
    }

    $query = new WP_Query($args);

    if ($tipoPost == "noticias" && $category != "") {
    ?>
        <script>
            $("#noticiasDestaque").hide();
        </script>
    <?php
    }

    if ($tipoPost == "noticias" && $category == "") {
    ?>
        <script>
            $("#noticiasDestaque").show();
        </script>
        <?php
    }

    if ($query->have_posts()) :
        $cont = 0;
        while ($query->have_posts()) :

            $query->the_post();

            if ($tipoPost == 'evento') {
                include('include-card-eventos.php');
            }

            if ($tipoPost == 'projeto'){
                include('include-card-projetos.php');
            }

            if ($tipoPost == 'noticias' && $category == "") {
                $taxonomies = get_taxonomies('', 'names');
                $eDestaque = false;
                $arrayTax = wp_get_post_terms(get_the_ID(), $taxonomies);
                foreach ($arrayTax as $tax) {
                    if ($tax->name == "Destaque") {
                        $eDestaque = true;
                    }
                }
                if ($cont < 6 && $eDestaque) {
                    $cont++;
                } else
                    include('include-card-noticias.php');
            } else if ($tipoPost == 'noticias' && $category != "") {
                include('include-card-noticias.php');
            }

            if ($tipoPost == 'download') {
                include('include-card-download.php');
            }

            if ($tipoPost == 'especialidade'){
                include('include-card-especialidade.php');
            }
            ?>

            <span class="pages" data-max-page="<?php echo $query->max_num_pages; ?>"></span>

    <?php
        endwhile;
    endif;

    wp_reset_postdata();
    die();
}

// APRESENTA O CARROSEL DE DEPOIMENTOS 1 A 1 NO MOBILE
function wp_mobile_carrousel(){
    if(is_front_page()):
    ?>
    <script type="text/javascript">
        $(document).ready(function() {
            if (screen.width < 780){
                $(".carouselMobile").show();
                $(".carouselDesktop").hide();
                $(".destaquesMobile").show();
                $(".destaquesDesktop").hide();
            }
        });
    </script>
    <?php
    endif;
}
add_action('wp_head', 'wp_mobile_carrousel');

// EXCLUI O BREADCRUMB DE ÁREA DE ESPECIALIDADE
function my_breadcrumb_title_swapper($term, $id, $type, $taxonomy){
    if ("Area" != $taxonomy){
        return $term;
    }
}
add_filter('bcn_pick_post_term', 'my_breadcrumb_title_swapper', 3, 10);

function projetos_register_post_type(){
    register_post_type(
        'projeto',
        array(
            'labels' => array(
                'name' => __('Portfólio'),
                'singular_name' => __('portfolios')
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array(
                'slug' => 'portfolio'
            )
        )
    );
} // end example_register_post_type

add_filter('login_errors', function($error){ return null; });

//add_filter('login_errors', '__return_false');
add_action('init', 'projetos_register_post_type');
add_filter('projetos-type_post_type_args', '_my_rewrite_slug'); // Here replace "your-post-type" with the actual post type, e.g., "cherry_services", "cherry-projects"

function _my_rewrite_slug($args){
    $args['rewrite']['slug'] = 'portfolio'; // Replace "our-services" with your preferable slug
    return $args;
}

#region seguranca
// remove version from head
remove_action('wp_head', 'wp_generator');

// remove version from rss
add_filter('the_generator', '__return_empty_string');

// remove version from scripts and styles
function ueb_remove_version_scripts_styles($src) {
    if (strpos($src, 'ver=')) {
        $src = remove_query_arg('ver', $src);
    }
    return $src;
}
add_filter('style_loader_src', 'ueb_remove_version_scripts_styles', 9999);
add_filter('script_loader_src', 'ueb_remove_version_scripts_styles', 9999);

function ueb_template_redirect(){
    if(is_author() || is_attachment()){
        wp_safe_redirect(home_url());
        exit();
    }
}
add_action('template_redirect', 'ueb_template_redirect');

function ueb_desabilida_comentarios_midia( $open, $post_id ) {
    $post = get_post( $post_id );
    if( $post->post_type == 'attachment' ) {
        return false;
    }
    return $open;
}
add_filter('comments_open', 'ueb_desabilida_comentarios_midia', 10, 2);
#endregion

function ueb_remover_bar_itens($wp_admin_bar){
    $wp_admin_bar->remove_node('comments');
    $wp_admin_bar->remove_node('new-post');
}
add_action('admin_bar_menu', 'ueb_remover_bar_itens', 999);

function ueb_remover_menus(){
    remove_menu_page( 'edit.php' );
    remove_menu_page( 'edit-comments.php');
    //if(wp_get_environment_type() !== 'development'){
    //    remove_menu_page('edit.php?post_type=acf-field-group');
    //}
}
add_action('admin_menu', 'ueb_remover_menus');

/*function ueb_config_acf(){
    if(wp_get_environment_type() !== 'development'){
        add_filter('acf/settings/show_admin', '__return_false');
    }
}
add_action('acf/init', 'ueb_config_acf');*/


add_filter( 'ure_role_additional_options', 'add_prohibit_access_to_admin_option', 10, 1 );

function add_prohibit_access_to_admin_option($items) {
    $item = URE_Role_Additional_Options::create_item( 'prohibit_admin_access', esc_html__('Prohibit access to admin', 'user-role-editor'), 'init', 'prohibit_access_to_admin' );
    $items[$item->id] = $item;
    
    return $items;
}

function prohibit_access_to_admin() {
    
    if ( is_admin() && !wp_doing_ajax() ) {
        wp_redirect( get_home_url() );
    }
}
