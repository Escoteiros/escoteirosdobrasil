<?php
function ueb_post_customizados() {

    /*
    // DOWNLOAD
    register_post_type('download', array(
        'supports' => array('title','editor','thumbnail'),
        'hierarchical' => false,
        'has_archive' => true,
        'public' => true,
        'show_in_rest' => true,
        'labels' => array(
            'name' => 'Downloads',
            'add_new' => 'Adicionar download',
            'add_new_item' => 'Adicionar download',
            'edit_item' => 'Editar download',
            'all_items' => 'Todos os downaloads',
            'singular_name' => 'Download',
            'not_found' => 'Download não encontrado',
            'item_updated' => 'Download atualizado',
            'item_published' => 'Download publicado',
            'search_items' => 'Buscar download',
            'view_items' => 'Ver downloads',
            'view_item' => 'Ver download'
        ),
        'menu_icon' => 'dashicons-download',
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_nav_menus' => true
    ));

    // equipes
    register_post_type('diretoria-conselho', array(
        'supports' => array('title','editor'),
        'has_archive' => false,
        'public' => true,
        'show_in_rest' => true,
        'labels' => array(
            'name' => 'Equipes',
            'add_new' => 'Adicionar nova',
            'add_new_item' => 'Adicionar nova equipe',
            'edit_item' => 'Editar equipe',
            'all_items' => 'Todos as equipes',
            'singular_name' => 'Equipe',
            'not_found' => 'Equipe não encontrada',
            'item_updated' => 'Equipe atualizada',
            'item_published' => 'Equipe publicada',
            'search_items' => 'Buscar equipe',
            'view_items' => 'Ver equipes',
            'view_item' => 'Ver equipe'
        ),
        'menu_icon' => 'dashicons-groups'
    ));

    // ESPECIALIDADE
    register_post_type('especialidades', array(
        'supports' => array('title','editor','thumbnail'),
        'has_archive' => true,
        'public' => true,
        'show_in_rest' => true,
        'labels' => array(
            'name' => 'Especialidades',
            'add_new' => 'Adicionar especialidade',
            'add_new_item' => 'Adicionar especialidade',
            'edit_item' => 'Editar especialidade',
            'all_items' => 'Todas as especialidades',
            'singular_name' => 'Especialidade',
            'not_found' => 'Especialidade não encontrada',
            'item_updated' => 'Especialidade atualizada',
            'item_published' => 'Especialidade publicada',
            'search_items' => 'Buscar especialidade',
            'view_items' => 'Ver especialidades',
            'view_item' => 'Ver especialidade'
        ),
        'menu_icon' => 'dashicons-shield-alt',
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_nav_menus' => true
    ));

    // EVENTOS
    register_post_type('eventos', array(
        'supports' => array('title','editor','custom-field','excerpt','thumbnail'),
        'hierarchical' => false,
        'has_archive' => true,
        'public' => true,
        'show_in_rest' => true,
        'labels' => array(
            'name' => 'Eventos',
            'add_new' => 'Adicionar evento',
            'add_new_item' => 'Adicionar evento',
            'edit_item' => 'Editar evento',
            'all_items' => 'Todos os eventos',
            'singular_name' => 'Evento',
            'not_found' => 'Evento não encontrado',
            'item_updated' => 'Evento atualizado',
            'item_published' => 'Evento publicado',
            'search_items' => 'Buscar evento',
            'view_items' => 'Ver eventos',
            'view_item' => 'Ver evento'
        ),
        'menu_icon' => 'dashicons-calendar-alt',
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_nav_menus' => true
    ));
    */

    // NOTICIAS
    register_post_type('noticias', array(
        'supports' => array('title','editor','excerpt','thumbnail'),
        'hierarchical' => false,
        'has_archive' => true,
        'public' => true,
        'show_in_rest' => true,
        'labels' => array(
            'name' => 'Notícias',
            'add_new' => 'Adicionar notícia',
            'add_new_item' => 'Adicionar notícia',
            'edit_item' => 'Editar notícia',
            'all_items' => 'Todas as notícias',
            'singular_name' => 'Notícia',
            'not_found' => 'Notícia não encontrada',
            'item_updated' => 'Notícia atualizada',
            'item_published' => 'Notícia publicada',
            'search_items' => 'Buscar notícia',
            'view_items' => 'Ver notícias',
            'view_item' => 'Ver notícia'
        ),
        'menu_icon' => 'dashicons-media-text'
    ));

    /*
    // PROJETO
    register_post_type('projetos', array(
        'capability_type' => 'post',
        'supports' => array('title','editor','excerpt','thumbnail'),
        'hierarchical' => true,
        'has_archive' => true,
        'public' => true,
        'show_in_rest' => true,
        'labels' => array(
            'name' => 'Projetos',
            'add_new' => 'Adicionar projeto',
            'add_new_item' => 'Adicionar projeto',
            'edit_item' => 'Editar projeto',
            'all_items' => 'Todos os projetos',
            'singular_name' => 'Projeto',
            'not_found' => 'Projeto não encontrado',
            'item_updated' => 'Projeto atualizado',
            'item_published' => 'Projeto publicado',
            'search_items' => 'Buscar projeto',
            'view_items' => 'Ver projetos',
            'view_item' => 'Ver projeto'
        ),
        'menu_icon' => 'dashicons-clipboard',
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_nav_menus' => true
    ));
    */
}
add_action('init','ueb_post_customizados');

function ueb_registrar_taxonomias(){
    #region noticias
    $labels = array(
        'name' => _x( 'Categoria', 'taxonomy general name' ),
        'singular_name' => _x( 'Categoria', 'taxonomy singular name' ),
        'search_items' =>  __( 'Buscar categorias' ),
        'all_items' => __( 'Todas as categorias' ),
        'edit_item' => __( 'Editar categoria' ),
        'update_item' => __( 'Atualizar categoria' ),
        'add_new_item' => __( 'Adicionar nova categoria' ),
        'new_item_name' => __( 'Novo nome de categoria' ),
        'menu_name' => __( 'Categorias' )
    );
    register_taxonomy('CategoriaNoticia',array('noticias'), array(
      'hierarchical' => true,
      'labels' => $labels,
      'show_ui' => true,
      'show_admin_column' => true,
      'show_in_nav_menus' => false,
      'show_in_rest' => true
    ));
    #endregion

    #region eventos
    $labels = array(
      'name' => 'Categoria de eventos',
      'singular_name' => 'Categoria de eventos',
      'search_items' =>  __( 'Buscar categorias'),
      'all_items' => __( 'Todas as categorias' ),
      'edit_item' => __( 'Editar categoria' ),
      'update_item' => __( 'Atualizar categoria' ),
      'add_new_item' => __( 'Adicionar nova categoria' ),
      'new_item_name' => __( 'Novo nome de categoria' ),
      'menu_name' => __( 'Categorias' ),
    );
    register_taxonomy('CategoriaEvento',array('eventos'), array(
        'hierarchical' => true,
        'labels' => $labels,
        'public' => true,
        'show_admin_column' => true,
        'show_in_nav_menus' => false,
        'show_in_rest' => true
    ));
    #endregion

    #region DOWNLOADS
    $labels = array(
      'name' => 'Categoria',
      'singular_name' => 'Categoria',
      'search_items' => 'Procurar categoria',
      'all_items' => 'Todas as categorias',
      'edit_item' => 'Editar categoria',
      'update_item' => 'Atualizar categoria',
      'add_new_item' => 'Adicionar categoria',
      'new_item_name' => 'Nova categoria',
      'menu_name' => 'Categorias',
    );
    register_taxonomy('categoriaDownload',array('download'), array(
      'hierarchical' => true,
      'labels' => $labels,
      'show_ui' => true,
      'show_admin_column' => true,
      'show_in_rest' => true
    ));
    #endregion

    #region PROJETOS
    // Categoria
    $labels = array(
      'name' => _x( 'Categoria', 'taxonomy general name' ),
      'singular_name' => _x( 'Categoria', 'taxonomy singular name' ),
      'search_items' =>  __( 'Buscar categoria' ),
      'all_items' => __( 'Todas as categorias' ),
      'edit_item' => __( 'Editar categoria' ),
      'update_item' => __( 'Atualizar categoria' ),
      'add_new_item' => __( 'Adicionar nova categoria' ),
      'new_item_name' => __( 'Nome de categoria' ),
      'menu_name' => __( 'Categorias' ),
    );
    register_taxonomy('CategoriaProjeto',array('projetos'), array(
      'hierarchical' => true,
      'labels' => $labels,
      'show_ui' => true,
      'show_admin_column' => true,
      'show_in_nav_menus' => false,
      'show_in_rest' => true
    ));

    // Tag
    $labels = array(
      'name' => _x( 'Tag Projeto', 'taxonomy general name' ),
      'singular_name' => _x( 'Tag Projeto', 'taxonomy singular name' ),
      'search_items' =>  __( 'Buscar tag' ),
      'all_items' => __( 'Todas as tags' ),
      'edit_item' => __( 'Editar tag' ),
      'update_item' => __( 'Atualizar tag' ),
      'add_new_item' => __( 'Adicionar nova tag' ),
      'new_item_name' => __( 'Novo nome de tag' ),
      'menu_name' => __( 'Tags' ),
    );
    register_taxonomy('TagProjeto',array('projetos'), array(
      'hierarchical' => true,
      'labels' => $labels,
      'show_ui' => true,
      'show_admin_column' => true,
      'show_in_nav_menus' => false,
      'show_in_rest' => true
    ));

    // Status
    $labels = array(
      'name' => _x( 'Status', 'taxonomy general name' ),
      'singular_name' => _x( 'Status', 'taxonomy singular name' ),
      'search_items' =>  __( 'Buscar status' ),
      'all_items' => __( 'Todos os status' ),
      'edit_item' => __( 'Editar status' ),
      'update_item' => __( 'Atualizar status' ),
      'add_new_item' => __( 'Adicionar novo status' ),
      'new_item_name' => __( 'Novo nome de status' ),
      'menu_name' => __( 'Status' ),
    );
//    register_taxonomy('Status','projetos', array(
//      'hierarchical' => true,
//      'labels' => $labels,
//      'show_ui' => true,
//      'show_admin_column' => true,
//      'query_var' => true,
//        'show_in_nav_menus' => false,
//        'show_in_rest' => true,
//        'sort' => 'name',
//        'description' => 'Status de andamento do projeto'
//    ));

    #endregion

    #region ESPECIALIDADE
    // Area
    $labels = array(
      'name' => _x( 'Área', 'taxonomy general name' ),
      'singular_name' => _x( 'Área', 'taxonomy singular name' ),
      'search_items' =>  __( 'Buscar área' ),
      'all_items' => __( 'Todas as áreas' ),
      'edit_item' => __( 'Editar área' ),
      'update_item' => __( 'Atualizar área' ),
      'add_new_item' => __( 'Adicionar nova área' ),
      'new_item_name' => __( 'Novo nome de área' ),
      'menu_name' => __( 'Áreas' ),
    );
    register_taxonomy('Area',array('especialidades'), array(
      'hierarchical' => true,
      'labels' => $labels,
      'show_ui' => true,
      'show_admin_column' => true,
      'show_in_nav_menus' => false,
      'show_in_rest' => true
    ));

    // Modalidade
    $labels = array(
      'name' => _x( 'Modalidade', 'taxonomy general name' ),
      'singular_name' => _x( 'Modalidade', 'taxonomy singular name' ),
      'search_items' =>  __( 'Buscar modalidade' ),
      'all_items' => __( 'Todas as modalidades' ),
      'edit_item' => __( 'Editar modalidade' ),
      'update_item' => __( 'Atualizar modalidade' ),
      'add_new_item' => __( 'Adicionar nova modalidade' ),
      'new_item_name' => __( 'Novo nome de modalidade' ),
      'menu_name' => __( 'Modalidades' ),
    );
    register_taxonomy('Modalidade',array('especialidades'), array(
      'hierarchical' => true,
      'labels' => $labels,
      'show_ui' => true,
      'show_admin_column' => true,
      'show_in_nav_menus' => false,
      'show_in_rest' => true
    ));

    // Categoria
    $labels = array(
      'name' => _x( 'Categoria', 'taxonomy general name' ),
      'singular_name' => _x( 'Categoria', 'taxonomy singular name' ),
      'search_items' =>  __( 'Buscar categoria' ),
      'all_items' => __( 'Todas as categorias' ),
      'edit_item' => __( 'Editar categoria' ),
      'update_item' => __( 'Atualizar categoria' ),
      'add_new_item' => __( 'Adicionar nova categoria' ),
      'new_item_name' => __( 'Novo nome de categoria' ),
      'menu_name' => __( 'Categorias' ),
    );
    register_taxonomy(
        'CategoriaEspecialidade',
        array('especialidades'),
        array(
            'hierarchical' => true,
            'labels' => $labels,
            'show_ui' => true,
            'show_admin_column' => true,
            'show_in_nav_menus' => false,
            'show_in_rest' => true
        )
    );
    #endregion
}
//add_action('init', 'ueb_registrar_taxonomias', 0);
