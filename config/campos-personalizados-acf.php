<?php
/**
 * Configugacoes dos campos personalizados do plugin Advanced Custom Field
 * e remocao da pagina de configuracao em ambientes que nao sejam de desenvolvimento
 * @return void
*/
function ueb_campos_personalizados(){
    // Esconde o menu de configuracoes do plugin
    //if(!in_array(wp_get_environment_type(), ['development', 'local'])){
    //    add_filter('acf/settings/show_admin', '__return_false');
    //}

    // Cria os campos personalizados do plugin
    if (function_exists('acf_add_local_field_group')):
        /*
            // Banner
            acf_add_local_field_group(array(
                'key' => 'group_5dace9c965387',
                'title' => 'Banner',
                'fields' => array(
                    array(
                        'key' => 'field_5ed1cc76e07e9',
                        'label' => 'Exibir banner',
                        'name' => 'banner_show',
                        'type' => 'true_false',
                        'instructions' => 'Caso esteja configurado para exibir, mas não tenha sido adicionado uma imagem, será utilizado a imagem em destaque, se também não tiver nenhuma, será pego uma imagem padrão.',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'message' => '',
                        'default_value' => 0,
                        'ui' => 1,
                        'ui_on_text' => '',
                        'ui_off_text' => '',
                    ),
                    array(
                        'key' => 'field_5e5c60dbe7b11',
                        'label' => 'Imagem',
                        'name' => 'banner_image',
                        'type' => 'image',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => array(
    						array(
    							array(
    								'field' => 'field_5ed1cc76e07e9',
    								'operator' => '==',
    								'value' => '1'
    							)
    						)
    					),
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'return_format' => 'array',
                        'preview_size' => 'medium',
                        'library' => 'all',
                        'min_width' => '',
                        'min_height' => '',
                        'min_size' => '',
                        'max_width' => '',
                        'max_height' => '',
                        'max_size' => '',
                        'mime_types' => '',
                    )
                ),
                'location' => array(
                    array(
                        array(
                            'param' => 'post_type',
                            'operator' => '==',
                            'value' => 'eventos',
                        )
                    ),
                    array(
                        array(
                            'param' => 'post_type',
                            'operator' => '==',
                            'value' => 'projetos',
                        ),
                    ),
                    array(
                        array(
                            'param' => 'post_type',
                            'operator' => '==',
                            'value' => 'noticias',
                        ),
                    ),
                    array(
                        array(
                            'param' => 'post_type',
                            'operator' => '==',
                            'value' => 'page',
                        ),
                        array(
                            'param' => 'page_type',
                            'operator' => '!=',
                            'value' => 'front_page',
                        )
                    )
                ),
                'menu_order' => 1,
                'position' => 'acf_after_title',
                'style' => 'default',
                'label_placement' => 'top',
                'instruction_placement' => 'label',
                'hide_on_screen' =>  array(
                    0 => 'discussion',
                    1 => 'comments',
                    2 => 'format',
                    3 => 'send-trackbacks',
                ),
                'active' => true,
                'description' => '',
            ));

            // Destaque
            acf_add_local_field_group(array(
                'key' => 'group_625851559dc36',
                'title' => 'Destaques',
                'fields' => array(
                    array(
                        'key' => 'field_62585183340cf',
                        'label' => 'Mostrar destaques',
                        'name' => 'mostrar_destaques',
                        'type' => 'true_false',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'message' => '',
                        'default_value' => 0,
                        'ui' => 1,
                        'ui_on_text' => '',
                        'ui_off_text' => '',
                    ),
                    array(
                        'key' => 'field_6258515a340cd',
                        'label' => 'Destaque_1',
                        'name' => 'destaque_1',
                        'type' => 'group',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => array(
                            array(
                                array(
                                    'field' => 'field_62585183340cf',
                                    'operator' => '==',
                                    'value' => '1',
                                )
                            )
                        ),
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'layout' => 'block',
                        'sub_fields' => array(
                            array(
                                'key' => 'field_625851e2340d0',
                                'label' => 'Imagem',
                                'name' => 'img_destaque',
                                'type' => 'image',
                                'instructions' => '',
                                'required' => 0,
                                'conditional_logic' => 0,
                                'wrapper' => array(
                                    'width' => '',
                                    'class' => '',
                                    'id' => '',
                                ),
                                'return_format' => 'url',
                                'preview_size' => 'medium',
                                'library' => 'all',
                                'min_width' => '',
                                'min_height' => '',
                                'min_size' => '',
                                'max_width' => '',
                                'max_height' => '',
                                'max_size' => '',
                                'mime_types' => '',
                            ),
                            array(
                                'key' => 'field_62585242340d2',
                                'label' => 'Link',
                                'name' => 'link_destaque',
                                'type' => 'url',
                                'instructions' => '',
                                'required' => 0,
                                'conditional_logic' => 0,
                                'wrapper' => array(
                                    'width' => '',
                                    'class' => '',
                                    'id' => '',
                                ),
                                'default_value' => '',
                                'placeholder' => '',
                            ),
                        ),
                    ),
                    array(
                        'key' => 'field_6258528f340d3',
                        'label' => 'Destaque_2',
                        'name' => 'destaque_2',
                        'type' => 'group',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => array(
                            array(
                                array(
                                    'field' => 'field_62585183340cf',
                                    'operator' => '==',
                                    'value' => '1',
                                ),
                            ),
                        ),
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'layout' => 'block',
                        'sub_fields' => array(
                            array(
                                'key' => 'field_6258528f340d4',
                                'label' => 'Imagem',
                                'name' => 'img_destaque',
                                'type' => 'image',
                                'instructions' => '',
                                'required' => 0,
                                'conditional_logic' => 0,
                                'wrapper' => array(
                                    'width' => '',
                                    'class' => '',
                                    'id' => '',
                                ),
                                'return_format' => 'url',
                                'preview_size' => 'medium',
                                'library' => 'all',
                                'min_width' => '',
                                'min_height' => '',
                                'min_size' => '',
                                'max_width' => '',
                                'max_height' => '',
                                'max_size' => '',
                                'mime_types' => '',
                            ),
                            array(
                                'key' => 'field_6258528f340d6',
                                'label' => 'Link',
                                'name' => 'link_destaque',
                                'type' => 'url',
                                'instructions' => '',
                                'required' => 0,
                                'conditional_logic' => 0,
                                'wrapper' => array(
                                    'width' => '',
                                    'class' => '',
                                    'id' => '',
                                ),
                                'default_value' => '',
                                'placeholder' => '',
                            )
                        )
                    )
                ),
                'location' => array(
                    array(
                        array(
                            'param' => 'page_type',
                            'operator' => '==',
                            'value' => 'front_page',
                        ),
                    ),
                ),
                'menu_order' => 1,
                'position' => 'normal',
                'style' => 'default',
                'label_placement' => 'top',
                'instruction_placement' => 'label',
                'hide_on_screen' => '',
                'active' => true,
                'description' => '',
                'show_in_rest' => 1,
            ));

            // Downloads
            acf_add_local_field_group(array(
                'key' => 'group_622b4594ae288',
                'title' => 'Downloads',
                'fields' => array(
                    array(
                        'key' => 'field_622b4956bb280',
                        'label' => 'Mostrar lista',
                        'name' => 'mostrar_lista',
                        'type' => 'true_false',
                        'instructions' => 'Caso esteja marcado para não aparecer, a área do texto irá ocupar esse espaço',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'message' => '',
                        'default_value' => 1,
                        'ui' => 1,
                        'ui_on_text' => '',
                        'ui_off_text' => '',
                    ),
                    array(
                        'key' => 'field_622b459aeffd4',
                        'label' => 'Nome lista',
                        'name' => 'nome_lista',
                        'type' => 'text',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => array(
    						array(
    							array(
    								'field' => 'field_622b4956bb280',
    								'operator' => '==',
    								'value' => '1'
    							)
    						)
    					),
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'default_value' => 'Arquivos relacionados',
                        'placeholder' => '',
                        'prepend' => '',
                        'append' => '',
                        'maxlength' => '',
                    ),
                    array(
                        'key' => 'field_622b45c9effd5',
                        'label' => 'Download 1',
                        'name' => 'download_1',
                        'type' => 'group',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => array(
    						array(
    							array(
    								'field' => 'field_622b4956bb280',
    								'operator' => '==',
    								'value' => '1'
    							)
    						)
    					),
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'layout' => 'table',
                        'sub_fields' => array(
                            array(
                                'key' => 'field_622b45e0effd6',
                                'label' => 'Nome arquivo',
                                'name' => 'nome_arquivo',
                                'type' => 'text',
                                'instructions' => '',
                                'required' => 0,
                                'conditional_logic' => 0,
                                'wrapper' => array(
                                    'width' => '',
                                    'class' => '',
                                    'id' => '',
                                ),
                                'default_value' => '',
                                'placeholder' => '',
                                'prepend' => '',
                                'append' => '',
                                'maxlength' => '',
                            ),
                            array(
                                'key' => 'field_622b4602effd7',
                                'label' => 'Arquivo',
                                'name' => 'arquivo',
                                'type' => 'file',
                                'instructions' => '',
                                'required' => 0,
                                'conditional_logic' => array(
                                    array(
                                        array(
                                            'field' => 'field_622b4619effd8',
                                            'operator' => '==empty',
                                        ),
                                    ),
                                ),
                                'wrapper' => array(
                                    'width' => '',
                                    'class' => '',
                                    'id' => '',
                                ),
                                'return_format' => 'url',
                                'library' => '',
                                'min_size' => '',
                                'max_size' => '',
                                'mime_types' => '',
                            ),
                            array(
                                'key' => 'field_622b4619effd8',
                                'label' => 'URL',
                                'name' => 'url_arquivo',
                                'type' => 'url',
                                'instructions' => '',
                                'required' => 0,
                                'conditional_logic' => array(
                                    array(
                                        array(
                                            'field' => 'field_622b4602effd7',
                                            'operator' => '==empty',
                                        ),
                                    ),
                                ),
                                'wrapper' => array(
                                    'width' => '',
                                    'class' => '',
                                    'id' => '',
                                ),
                                'default_value' => '',
                                'placeholder' => '',
                            ),
                        ),
                    ),
                    array(
                        'key' => 'field_622b4677effda',
                        'label' => 'Download 2',
                        'name' => 'download_2',
                        'type' => 'group',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => array(
    						array(
    							array(
    								'field' => 'field_622b4956bb280',
    								'operator' => '==',
    								'value' => '1'
    							)
    						)
    					),
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'layout' => 'table',
                        'sub_fields' => array(
                            array(
                                'key' => 'field_622b4677effdb',
                                'label' => 'Nome arquivo',
                                'name' => 'nome_arquivo',
                                'type' => 'text',
                                'instructions' => '',
                                'required' => 0,
                                'conditional_logic' => 0,
                                'wrapper' => array(
                                    'width' => '',
                                    'class' => '',
                                    'id' => '',
                                ),
                                'default_value' => '',
                                'placeholder' => '',
                                'prepend' => '',
                                'append' => '',
                                'maxlength' => '',
                            ),
                            array(
                                'key' => 'field_622b4677effdc',
                                'label' => 'Arquivo',
                                'name' => 'arquivo',
                                'type' => 'file',
                                'instructions' => '',
                                'required' => 0,
                                'conditional_logic' => array(
                                    array(
                                        array(
                                            'field' => 'field_622b4677effdd',
                                            'operator' => '==empty',
                                        ),
                                    ),
                                ),
                                'wrapper' => array(
                                    'width' => '',
                                    'class' => '',
                                    'id' => '',
                                ),
                                'return_format' => 'url',
                                'library' => '',
                                'min_size' => '',
                                'max_size' => '',
                                'mime_types' => '',
                            ),
                            array(
                                'key' => 'field_622b4677effdd',
                                'label' => 'URL',
                                'name' => 'url_arquivo',
                                'type' => 'url',
                                'instructions' => '',
                                'required' => 0,
                                'conditional_logic' => array(
                                    array(
                                        array(
                                            'field' => 'field_622b4677effdc',
                                            'operator' => '==empty',
                                        ),
                                    ),
                                ),
                                'wrapper' => array(
                                    'width' => '',
                                    'class' => '',
                                    'id' => '',
                                ),
                                'default_value' => '',
                                'placeholder' => '',
                            ),
                        ),
                    ),
                    array(
                        'key' => 'field_622b467deffde',
                        'label' => 'Download 3',
                        'name' => 'download_3',
                        'type' => 'group',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => array(
    						array(
    							array(
    								'field' => 'field_622b4956bb280',
    								'operator' => '==',
    								'value' => '1'
    							)
    						)
    					),
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'layout' => 'table',
                        'sub_fields' => array(
                            array(
                                'key' => 'field_622b467deffdf',
                                'label' => 'Nome arquivo',
                                'name' => 'nome_arquivo',
                                'type' => 'text',
                                'instructions' => '',
                                'required' => 0,
                                'conditional_logic' => 0,
                                'wrapper' => array(
                                    'width' => '',
                                    'class' => '',
                                    'id' => '',
                                ),
                                'default_value' => '',
                                'placeholder' => '',
                                'prepend' => '',
                                'append' => '',
                                'maxlength' => '',
                            ),
                            array(
                                'key' => 'field_622b467deffe0',
                                'label' => 'Arquivo',
                                'name' => 'arquivo',
                                'type' => 'file',
                                'instructions' => '',
                                'required' => 0,
                                'conditional_logic' => array(
                                    array(
                                        array(
                                            'field' => 'field_622b467deffe1',
                                            'operator' => '==empty',
                                        ),
                                    ),
                                ),
                                'wrapper' => array(
                                    'width' => '',
                                    'class' => '',
                                    'id' => '',
                                ),
                                'return_format' => 'url',
                                'library' => '',
                                'min_size' => '',
                                'max_size' => '',
                                'mime_types' => '',
                            ),
                            array(
                                'key' => 'field_622b467deffe1',
                                'label' => 'URL',
                                'name' => 'url_arquivo',
                                'type' => 'url',
                                'instructions' => '',
                                'required' => 0,
                                'conditional_logic' => array(
                                    array(
                                        array(
                                            'field' => 'field_622b467deffe0',
                                            'operator' => '==empty',
                                        ),
                                    ),
                                ),
                                'wrapper' => array(
                                    'width' => '',
                                    'class' => '',
                                    'id' => '',
                                ),
                                'default_value' => '',
                                'placeholder' => '',
                            ),
                        ),
                    ),
                    array(
                        'key' => 'field_622b4680effe2',
                        'label' => 'Download 4',
                        'name' => 'download_4',
                        'type' => 'group',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => array(
    						array(
    							array(
    								'field' => 'field_622b4956bb280',
    								'operator' => '==',
    								'value' => '1'
    							)
    						)
    					),
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'layout' => 'table',
                        'sub_fields' => array(
                            array(
                                'key' => 'field_622b4681effe3',
                                'label' => 'Nome arquivo',
                                'name' => 'nome_arquivo',
                                'type' => 'text',
                                'instructions' => '',
                                'required' => 0,
                                'conditional_logic' => 0,
                                'wrapper' => array(
                                    'width' => '',
                                    'class' => '',
                                    'id' => '',
                                ),
                                'default_value' => '',
                                'placeholder' => '',
                                'prepend' => '',
                                'append' => '',
                                'maxlength' => '',
                            ),
                            array(
                                'key' => 'field_622b4681effe4',
                                'label' => 'Arquivo',
                                'name' => 'arquivo',
                                'type' => 'file',
                                'instructions' => '',
                                'required' => 0,
                                'conditional_logic' => array(
                                    array(
                                        array(
                                            'field' => 'field_622b4681effe5',
                                            'operator' => '==empty',
                                        ),
                                    ),
                                ),
                                'wrapper' => array(
                                    'width' => '',
                                    'class' => '',
                                    'id' => '',
                                ),
                                'return_format' => 'url',
                                'library' => '',
                                'min_size' => '',
                                'max_size' => '',
                                'mime_types' => '',
                            ),
                            array(
                                'key' => 'field_622b4681effe5',
                                'label' => 'URL',
                                'name' => 'url_arquivo',
                                'type' => 'url',
                                'instructions' => '',
                                'required' => 0,
                                'conditional_logic' => array(
                                    array(
                                        array(
                                            'field' => 'field_622b4681effe4',
                                            'operator' => '==empty',
                                        ),
                                    ),
                                ),
                                'wrapper' => array(
                                    'width' => '',
                                    'class' => '',
                                    'id' => '',
                                ),
                                'default_value' => '',
                                'placeholder' => '',
                            ),
                        ),
                    ),
                    array(
                        'key' => 'field_622b4682effe6',
                        'label' => 'Download 5',
                        'name' => 'download_5',
                        'type' => 'group',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => array(
    						array(
    							array(
    								'field' => 'field_622b4956bb280',
    								'operator' => '==',
    								'value' => '1'
    							)
    						)
    					),
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'layout' => 'table',
                        'sub_fields' => array(
                            array(
                                'key' => 'field_622b4682effe7',
                                'label' => 'Nome arquivo',
                                'name' => 'nome_arquivo',
                                'type' => 'text',
                                'instructions' => '',
                                'required' => 0,
                                'conditional_logic' => 0,
                                'wrapper' => array(
                                    'width' => '',
                                    'class' => '',
                                    'id' => '',
                                ),
                                'default_value' => '',
                                'placeholder' => '',
                                'prepend' => '',
                                'append' => '',
                                'maxlength' => '',
                            ),
                            array(
                                'key' => 'field_622b4682effe8',
                                'label' => 'Arquivo',
                                'name' => 'arquivo',
                                'type' => 'file',
                                'instructions' => '',
                                'required' => 0,
                                'conditional_logic' => array(
                                    array(
                                        array(
                                            'field' => 'field_622b4682effe9',
                                            'operator' => '==empty',
                                        ),
                                    ),
                                ),
                                'wrapper' => array(
                                    'width' => '',
                                    'class' => '',
                                    'id' => '',
                                ),
                                'return_format' => 'url',
                                'library' => '',
                                'min_size' => '',
                                'max_size' => '',
                                'mime_types' => '',
                            ),
                            array(
                                'key' => 'field_622b4682effe9',
                                'label' => 'URL',
                                'name' => 'url_arquivo',
                                'type' => 'url',
                                'instructions' => '',
                                'required' => 0,
                                'conditional_logic' => array(
                                    array(
                                        array(
                                            'field' => 'field_622b4682effe8',
                                            'operator' => '==empty',
                                        ),
                                    ),
                                ),
                                'wrapper' => array(
                                    'width' => '',
                                    'class' => '',
                                    'id' => '',
                                ),
                                'default_value' => '',
                                'placeholder' => '',
                            ),
                        ),
                    ),
                    array(
                        'key' => 'field_622b4683effea',
                        'label' => 'Download 6',
                        'name' => 'download_6',
                        'type' => 'group',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => array(
    						array(
    							array(
    								'field' => 'field_622b4956bb280',
    								'operator' => '==',
    								'value' => '1'
    							)
    						)
    					),
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'layout' => 'table',
                        'sub_fields' => array(
                            array(
                                'key' => 'field_622b4683effeb',
                                'label' => 'Nome arquivo',
                                'name' => 'nome_arquivo',
                                'type' => 'text',
                                'instructions' => '',
                                'required' => 0,
                                'conditional_logic' => 0,
                                'wrapper' => array(
                                    'width' => '',
                                    'class' => '',
                                    'id' => '',
                                ),
                                'default_value' => '',
                                'placeholder' => '',
                                'prepend' => '',
                                'append' => '',
                                'maxlength' => '',
                            ),
                            array(
                                'key' => 'field_622b4683effec',
                                'label' => 'Arquivo',
                                'name' => 'arquivo',
                                'type' => 'file',
                                'instructions' => '',
                                'required' => 0,
                                'conditional_logic' => array(
                                    array(
                                        array(
                                            'field' => 'field_622b4683effed',
                                            'operator' => '==empty',
                                        ),
                                    ),
                                ),
                                'wrapper' => array(
                                    'width' => '',
                                    'class' => '',
                                    'id' => '',
                                ),
                                'return_format' => 'url',
                                'library' => '',
                                'min_size' => '',
                                'max_size' => '',
                                'mime_types' => '',
                            ),
                            array(
                                'key' => 'field_622b4683effed',
                                'label' => 'URL',
                                'name' => 'url_arquivo',
                                'type' => 'url',
                                'instructions' => '',
                                'required' => 0,
                                'conditional_logic' => array(
                                    array(
                                        array(
                                            'field' => 'field_622b4683effec',
                                            'operator' => '==empty',
                                        ),
                                    ),
                                ),
                                'wrapper' => array(
                                    'width' => '',
                                    'class' => '',
                                    'id' => '',
                                ),
                                'default_value' => '',
                                'placeholder' => '',
                            ),
                        ),
                    ),
                    array(
                        'key' => 'field_622b4687effee',
                        'label' => 'Download 7',
                        'name' => 'download_7',
                        'type' => 'group',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => array(
    						array(
    							array(
    								'field' => 'field_622b4956bb280',
    								'operator' => '==',
    								'value' => '1'
    							)
    						)
    					),
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'layout' => 'table',
                        'sub_fields' => array(
                            array(
                                'key' => 'field_622b4687effef',
                                'label' => 'Nome arquivo',
                                'name' => 'nome_arquivo',
                                'type' => 'text',
                                'instructions' => '',
                                'required' => 0,
                                'conditional_logic' => 0,
                                'wrapper' => array(
                                    'width' => '',
                                    'class' => '',
                                    'id' => '',
                                ),
                                'default_value' => '',
                                'placeholder' => '',
                                'prepend' => '',
                                'append' => '',
                                'maxlength' => '',
                            ),
                            array(
                                'key' => 'field_622b4687efff0',
                                'label' => 'Arquivo',
                                'name' => 'arquivo',
                                'type' => 'file',
                                'instructions' => '',
                                'required' => 0,
                                'conditional_logic' => array(
                                    array(
                                        array(
                                            'field' => 'field_622b4687efff1',
                                            'operator' => '==empty',
                                        ),
                                    ),
                                ),
                                'wrapper' => array(
                                    'width' => '',
                                    'class' => '',
                                    'id' => '',
                                ),
                                'return_format' => 'url',
                                'library' => '',
                                'min_size' => '',
                                'max_size' => '',
                                'mime_types' => '',
                            ),
                            array(
                                'key' => 'field_622b4687efff1',
                                'label' => 'URL',
                                'name' => 'url_arquivo',
                                'type' => 'url',
                                'instructions' => '',
                                'required' => 0,
                                'conditional_logic' => array(
                                    array(
                                        array(
                                            'field' => 'field_622b4687efff0',
                                            'operator' => '==empty',
                                        ),
                                    ),
                                ),
                                'wrapper' => array(
                                    'width' => '',
                                    'class' => '',
                                    'id' => '',
                                ),
                                'default_value' => '',
                                'placeholder' => '',
                            ),
                        ),
                    ),
                    array(
                        'key' => 'field_622b4689efff2',
                        'label' => 'Download 8',
                        'name' => 'download_8',
                        'type' => 'group',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => array(
    						array(
    							array(
    								'field' => 'field_622b4956bb280',
    								'operator' => '==',
    								'value' => '1'
    							)
    						)
    					),
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'layout' => 'table',
                        'sub_fields' => array(
                            array(
                                'key' => 'field_622b4689efff3',
                                'label' => 'Nome arquivo',
                                'name' => 'nome_arquivo',
                                'type' => 'text',
                                'instructions' => '',
                                'required' => 0,
                                'conditional_logic' => 0,
                                'wrapper' => array(
                                    'width' => '',
                                    'class' => '',
                                    'id' => '',
                                ),
                                'default_value' => '',
                                'placeholder' => '',
                                'prepend' => '',
                                'append' => '',
                                'maxlength' => '',
                            ),
                            array(
                                'key' => 'field_622b4689efff4',
                                'label' => 'Arquivo',
                                'name' => 'arquivo',
                                'type' => 'file',
                                'instructions' => '',
                                'required' => 0,
                                'conditional_logic' => array(
                                    array(
                                        array(
                                            'field' => 'field_622b4689efff5',
                                            'operator' => '==empty',
                                        ),
                                    ),
                                ),
                                'wrapper' => array(
                                    'width' => '',
                                    'class' => '',
                                    'id' => '',
                                ),
                                'return_format' => 'url',
                                'library' => '',
                                'min_size' => '',
                                'max_size' => '',
                                'mime_types' => '',
                            ),
                            array(
                                'key' => 'field_622b4689efff5',
                                'label' => 'URL',
                                'name' => 'url_arquivo',
                                'type' => 'url',
                                'instructions' => '',
                                'required' => 0,
                                'conditional_logic' => array(
                                    array(
                                        array(
                                            'field' => 'field_622b4689efff4',
                                            'operator' => '==empty',
                                        ),
                                    ),
                                ),
                                'wrapper' => array(
                                    'width' => '',
                                    'class' => '',
                                    'id' => '',
                                ),
                                'default_value' => '',
                                'placeholder' => '',
                            ),
                        ),
                    ),
                    array(
                        'key' => 'field_622b468befff6',
                        'label' => 'Download 9',
                        'name' => 'download_9',
                        'type' => 'group',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => array(
    						array(
    							array(
    								'field' => 'field_622b4956bb280',
    								'operator' => '==',
    								'value' => '1'
    							)
    						)
    					),
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'layout' => 'table',
                        'sub_fields' => array(
                            array(
                                'key' => 'field_622b468befff7',
                                'label' => 'Nome arquivo',
                                'name' => 'nome_arquivo',
                                'type' => 'text',
                                'instructions' => '',
                                'required' => 0,
                                'conditional_logic' => 0,
                                'wrapper' => array(
                                    'width' => '',
                                    'class' => '',
                                    'id' => '',
                                ),
                                'default_value' => '',
                                'placeholder' => '',
                                'prepend' => '',
                                'append' => '',
                                'maxlength' => '',
                            ),
                            array(
                                'key' => 'field_622b468befff8',
                                'label' => 'Arquivo',
                                'name' => 'arquivo',
                                'type' => 'file',
                                'instructions' => '',
                                'required' => 0,
                                'conditional_logic' => array(
                                    array(
                                        array(
                                            'field' => 'field_622b468befff9',
                                            'operator' => '==empty',
                                        ),
                                    ),
                                ),
                                'wrapper' => array(
                                    'width' => '',
                                    'class' => '',
                                    'id' => '',
                                ),
                                'return_format' => 'url',
                                'library' => '',
                                'min_size' => '',
                                'max_size' => '',
                                'mime_types' => '',
                            ),
                            array(
                                'key' => 'field_622b468befff9',
                                'label' => 'URL',
                                'name' => 'url_arquivo',
                                'type' => 'url',
                                'instructions' => '',
                                'required' => 0,
                                'conditional_logic' => array(
                                    array(
                                        array(
                                            'field' => 'field_622b468befff8',
                                            'operator' => '==empty',
                                        ),
                                    ),
                                ),
                                'wrapper' => array(
                                    'width' => '',
                                    'class' => '',
                                    'id' => '',
                                ),
                                'default_value' => '',
                                'placeholder' => '',
                            ),
                        ),
                    ),
                    array(
                        'key' => 'field_622b468cefffa',
                        'label' => 'Download 10',
                        'name' => 'download_10',
                        'type' => 'group',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => array(
    						array(
    							array(
    								'field' => 'field_622b4956bb280',
    								'operator' => '==',
    								'value' => '1'
    							)
    						)
    					),
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'layout' => 'table',
                        'sub_fields' => array(
                            array(
                                'key' => 'field_622b468cefffb',
                                'label' => 'Nome arquivo',
                                'name' => 'nome_arquivo',
                                'type' => 'text',
                                'instructions' => '',
                                'required' => 0,
                                'conditional_logic' => 0,
                                'wrapper' => array(
                                    'width' => '',
                                    'class' => '',
                                    'id' => '',
                                ),
                                'default_value' => '',
                                'placeholder' => '',
                                'prepend' => '',
                                'append' => '',
                                'maxlength' => '',
                            ),
                            array(
                                'key' => 'field_622b468cefffc',
                                'label' => 'Arquivo',
                                'name' => 'arquivo',
                                'type' => 'file',
                                'instructions' => '',
                                'required' => 0,
                                'conditional_logic' => array(
                                    array(
                                        array(
                                            'field' => 'field_622b468cefffd',
                                            'operator' => '==empty',
                                        ),
                                    ),
                                ),
                                'wrapper' => array(
                                    'width' => '',
                                    'class' => '',
                                    'id' => '',
                                ),
                                'return_format' => 'url',
                                'library' => 'all',
                                'min_size' => '',
                                'max_size' => '',
                                'mime_types' => '',
                            ),
                            array(
                                'key' => 'field_622b468cefffd',
                                'label' => 'URL',
                                'name' => 'url_arquivo',
                                'type' => 'url',
                                'instructions' => '',
                                'required' => 0,
                                'conditional_logic' => array(
                                    array(
                                        array(
                                            'field' => 'field_622b468cefffc',
                                            'operator' => '==empty',
                                        ),
                                    ),
                                ),
                                'wrapper' => array(
                                    'width' => '',
                                    'class' => '',
                                    'id' => '',
                                ),
                                'default_value' => '',
                                'placeholder' => '',
                            ),
                        ),
                    ),
                ),
                'location' => array(
                    array(
                        array(
                            'param' => 'post_type',
                            'operator' => '==',
                            'value' => 'eventos',
                        )
                    ),
                    array(
                        array(
                            'param' => 'post_type',
                            'operator' => '==',
                            'value' => 'projetos',
                        )
                    ),
                    array(
                        array(
                            'param' => 'post_template',
                            'operator' => '==',
                            'value' => 'template/downloadsLateral.php',
                        )
                    )
                ),
                'menu_order' => 10,
                'position' => 'normal',
                'style' => 'table',
                'label_placement' => 'top',
                'instruction_placement' => 'label',
                'hide_on_screen' =>  array(
                    0 => 'discussion',
                    1 => 'comments',
                    2 => 'format',
                    3 => 'send-trackbacks',
                ),
                'active' => true,
                'description' => '',
                'show_in_rest' => 1,
            ));

            // Downloads (tipo de post)
            acf_add_local_field_group(array(
                'key' => 'group_6266b2d2582cc',
                'title' => 'Download (post)',
                'fields' => array(
                    array(
                        'key' => 'field_6266b2e0ad7b9',
                        'label' => 'Arquivo',
                        'name' => 'arquivo_download',
                        'type' => 'file',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => array(
                            array(
                                array(
                                    'field' => 'field_6266b2fcad7ba',
                                    'operator' => '==empty',
                                ),
                            ),
                        ),
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'return_format' => 'array',
                        'library' => 'all',
                        'min_size' => '',
                        'max_size' => '',
                        'mime_types' => '',
                    ),
                    array(
                        'key' => 'field_6266b2fcad7ba',
                        'label' => 'Link externo',
                        'name' => 'link_externo',
                        'type' => 'link',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => array(
                            array(
                                array(
                                    'field' => 'field_6266b2e0ad7b9',
                                    'operator' => '==empty',
                                ),
                            ),
                        ),
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'return_format' => 'array',
                    ),
                ),
                'location' => array(
                    array(
                        array(
                            'param' => 'post_type',
                            'operator' => '==',
                            'value' => 'download',
                        ),
                    ),
                ),
                'menu_order' => 1,
                'position' => 'normal',
                'style' => 'default',
                'label_placement' => 'top',
                'instruction_placement' => 'label',
                'hide_on_screen' => '',
                'active' => true,
                'description' => '',
                'show_in_rest' => 1,
            ));

            // Downloads (card)
            acf_add_local_field_group(array(
                'key' => 'group_625080e56978f',
                'title' => 'Downloads(card)',
                'fields' => array(
                    array(
                        'key' => 'field_625080f8cba10',
                        'label' => 'Mostrar lista',
                        'name' => 'mostrar_lista',
                        'type' => 'true_false',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'message' => '',
                        'default_value' => 0,
                        'ui' => 1,
                        'ui_on_text' => '',
                        'ui_off_text' => '',
                    ),
                    array(
                        'key' => 'field_62508112cba11',
                        'label' => 'Título',
                        'name' => 'area_download_titulo',
                        'type' => 'text',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => array(
                            array(
                                array(
                                    'field' => 'field_625080f8cba10',
                                    'operator' => '==',
                                    'value' => '1',
                                ),
                            ),
                        ),
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'default_value' => 'Arquivos relacionados',
                        'placeholder' => '',
                        'prepend' => '',
                        'append' => '',
                        'maxlength' => '',
                    ),
                    array(
                        'key' => 'field_62508132cba12',
                        'label' => 'Download 1',
                        'name' => 'download_1',
                        'type' => 'group',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => array(
                            array(
                                array(
                                    'field' => 'field_625080f8cba10',
                                    'operator' => '==',
                                    'value' => '1',
                                ),
                            ),
                        ),
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'layout' => 'row',
                        'sub_fields' => array(
                            array(
                                'key' => 'field_6250814bcba13',
                                'label' => 'Título do arquivo',
                                'name' => 'titulo_arquivo',
                                'type' => 'text',
                                'instructions' => '',
                                'required' => 0,
                                'conditional_logic' => 0,
                                'wrapper' => array(
                                    'width' => '',
                                    'class' => '',
                                    'id' => '',
                                ),
                                'default_value' => '',
                                'placeholder' => '',
                                'prepend' => '',
                                'append' => '',
                                'maxlength' => '',
                            ),
                            array(
                                'key' => 'field_6250816acba14',
                                'label' => 'Arquivo',
                                'name' => 'arquivo_download',
                                'type' => 'file',
                                'instructions' => '',
                                'required' => 0,
                                'conditional_logic' => array(
                                    array(
                                        array(
                                            'field' => 'field_62508184cba15',
                                            'operator' => '==empty',
                                        ),
                                    ),
                                ),
                                'wrapper' => array(
                                    'width' => '',
                                    'class' => '',
                                    'id' => '',
                                ),
                                'return_format' => 'url',
                                'library' => 'all',
                                'min_size' => '',
                                'max_size' => '',
                                'mime_types' => '',
                            ),
                            array(
                                'key' => 'field_62508184cba15',
                                'label' => 'Link',
                                'name' => 'link',
                                'type' => 'url',
                                'instructions' => '',
                                'required' => 0,
                                'conditional_logic' => array(
                                    array(
                                        array(
                                            'field' => 'field_6250816acba14',
                                            'operator' => '==empty',
                                        ),
                                    ),
                                ),
                                'wrapper' => array(
                                    'width' => '',
                                    'class' => '',
                                    'id' => '',
                                ),
                                'default_value' => '',
                                'placeholder' => '',
                            ),
                            array(
                                'key' => 'field_6250818dcba16',
                                'label' => 'Imagem',
                                'name' => 'imagem_arquivo',
                                'type' => 'image',
                                'instructions' => '',
                                'required' => 0,
                                'conditional_logic' => 0,
                                'wrapper' => array(
                                    'width' => '',
                                    'class' => '',
                                    'id' => '',
                                ),
                                'return_format' => 'url',
                                'preview_size' => 'thumbnail',
                                'library' => 'all',
                                'min_width' => '',
                                'min_height' => '',
                                'min_size' => '',
                                'max_width' => '',
                                'max_height' => '',
                                'max_size' => '',
                                'mime_types' => '',
                            ),
                        ),
                    ),
                    array(
                        'key' => 'field_625081e0cba17',
                        'label' => 'Download 2',
                        'name' => 'download_2',
                        'type' => 'group',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => array(
                            array(
                                array(
                                    'field' => 'field_62508184cba15',
                                    'operator' => '!=empty',
                                ),
                                array(
                                    'field' => 'field_6250814bcba13',
                                    'operator' => '!=empty',
                                ),
                            ),
                            array(
                                array(
                                    'field' => 'field_6250816acba14',
                                    'operator' => '!=empty',
                                ),
                                array(
                                    'field' => 'field_6250814bcba13',
                                    'operator' => '!=empty',
                                ),
                            ),
                        ),
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'layout' => 'row',
                        'sub_fields' => array(
                            array(
                                'key' => 'field_625081e0cba18',
                                'label' => 'Título do arquivo',
                                'name' => 'titulo_arquivo',
                                'type' => 'text',
                                'instructions' => '',
                                'required' => 0,
                                'conditional_logic' => 0,
                                'wrapper' => array(
                                    'width' => '',
                                    'class' => '',
                                    'id' => '',
                                ),
                                'default_value' => '',
                                'placeholder' => '',
                                'prepend' => '',
                                'append' => '',
                                'maxlength' => '',
                            ),
                            array(
                                'key' => 'field_625081e0cba19',
                                'label' => 'Arquivo',
                                'name' => 'arquivo_download',
                                'type' => 'file',
                                'instructions' => '',
                                'required' => 0,
                                'conditional_logic' => array(
                                    array(
                                        array(
                                            'field' => 'field_625081e0cba1a',
                                            'operator' => '==empty',
                                        ),
                                    ),
                                ),
                                'wrapper' => array(
                                    'width' => '',
                                    'class' => '',
                                    'id' => '',
                                ),
                                'return_format' => 'url',
                                'library' => 'all',
                                'min_size' => '',
                                'max_size' => '',
                                'mime_types' => '',
                            ),
                            array(
                                'key' => 'field_625081e0cba1a',
                                'label' => 'Link',
                                'name' => 'link',
                                'type' => 'url',
                                'instructions' => '',
                                'required' => 0,
                                'conditional_logic' => array(
                                    array(
                                        array(
                                            'field' => 'field_625081e0cba19',
                                            'operator' => '==empty',
                                        ),
                                    ),
                                ),
                                'wrapper' => array(
                                    'width' => '',
                                    'class' => '',
                                    'id' => '',
                                ),
                                'default_value' => '',
                                'placeholder' => '',
                            ),
                            array(
                                'key' => 'field_625081e0cba1b',
                                'label' => 'Imagem',
                                'name' => 'imagem_arquivo',
                                'type' => 'image',
                                'instructions' => '',
                                'required' => 0,
                                'conditional_logic' => 0,
                                'wrapper' => array(
                                    'width' => '',
                                    'class' => '',
                                    'id' => '',
                                ),
                                'return_format' => 'url',
                                'preview_size' => 'thumbnail',
                                'library' => 'all',
                                'min_width' => '',
                                'min_height' => '',
                                'min_size' => '',
                                'max_width' => '',
                                'max_height' => '',
                                'max_size' => '',
                                'mime_types' => '',
                            ),
                        ),
                    ),
                    array(
                        'key' => 'field_62508212cba20',
                        'label' => 'Download 3',
                        'name' => 'download_3',
                        'type' => 'group',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => array(
                            array(
                                array(
                                    'field' => 'field_625081e0cba18',
                                    'operator' => '!=empty',
                                ),
                                array(
                                    'field' => 'field_625081e0cba19',
                                    'operator' => '!=empty',
                                ),
                            ),
                            array(
                                array(
                                    'field' => 'field_625081e0cba1a',
                                    'operator' => '!=empty',
                                ),
                                array(
                                    'field' => 'field_625081e0cba18',
                                    'operator' => '!=empty',
                                ),
                            ),
                        ),
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'layout' => 'row',
                        'sub_fields' => array(
                            array(
                                'key' => 'field_62508212cba21',
                                'label' => 'Título do arquivo',
                                'name' => 'titulo_arquivo',
                                'type' => 'text',
                                'instructions' => '',
                                'required' => 0,
                                'conditional_logic' => 0,
                                'wrapper' => array(
                                    'width' => '',
                                    'class' => '',
                                    'id' => '',
                                ),
                                'default_value' => '',
                                'placeholder' => '',
                                'prepend' => '',
                                'append' => '',
                                'maxlength' => '',
                            ),
                            array(
                                'key' => 'field_62508212cba22',
                                'label' => 'Arquivo',
                                'name' => 'arquivo_download',
                                'type' => 'file',
                                'instructions' => '',
                                'required' => 0,
                                'conditional_logic' => 0,
                                'wrapper' => array(
                                    'width' => '',
                                    'class' => '',
                                    'id' => '',
                                ),
                                'return_format' => 'url',
                                'library' => 'all',
                                'min_size' => '',
                                'max_size' => '',
                                'mime_types' => '',
                            ),
                            array(
                                'key' => 'field_62508212cba23',
                                'label' => 'Link',
                                'name' => 'link',
                                'type' => 'url',
                                'instructions' => '',
                                'required' => 0,
                                'conditional_logic' => 0,
                                'wrapper' => array(
                                    'width' => '',
                                    'class' => '',
                                    'id' => '',
                                ),
                                'default_value' => '',
                                'placeholder' => '',
                            ),
                            array(
                                'key' => 'field_62508212cba24',
                                'label' => 'Imagem',
                                'name' => 'imagem_arquivo',
                                'type' => 'image',
                                'instructions' => '',
                                'required' => 0,
                                'conditional_logic' => 0,
                                'wrapper' => array(
                                    'width' => '',
                                    'class' => '',
                                    'id' => '',
                                ),
                                'return_format' => 'url',
                                'preview_size' => 'thumbnail',
                                'library' => 'all',
                                'min_width' => '',
                                'min_height' => '',
                                'min_size' => '',
                                'max_width' => '',
                                'max_height' => '',
                                'max_size' => '',
                                'mime_types' => '',
                            ),
                        ),
                    ),
                    array(
                        'key' => 'field_6250822ccba25',
                        'label' => 'Download 4',
                        'name' => 'download_4',
                        'type' => 'group',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => array(
                            array(
                                array(
                                    'field' => 'field_62508212cba21',
                                    'operator' => '!=empty',
                                ),
                                array(
                                    'field' => 'field_62508212cba22',
                                    'operator' => '!=empty',
                                ),
                            ),
                            array(
                                array(
                                    'field' => 'field_62508212cba21',
                                    'operator' => '!=empty',
                                ),
                                array(
                                    'field' => 'field_62508212cba23',
                                    'operator' => '!=empty',
                                ),
                            ),
                        ),
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'layout' => 'row',
                        'sub_fields' => array(
                            array(
                                'key' => 'field_6250822ccba26',
                                'label' => 'Título do arquivo',
                                'name' => 'titulo_arquivo',
                                'type' => 'text',
                                'instructions' => '',
                                'required' => 0,
                                'conditional_logic' => 0,
                                'wrapper' => array(
                                    'width' => '',
                                    'class' => '',
                                    'id' => '',
                                ),
                                'default_value' => '',
                                'placeholder' => '',
                                'prepend' => '',
                                'append' => '',
                                'maxlength' => '',
                            ),
                            array(
                                'key' => 'field_6250822ccba27',
                                'label' => 'Arquivo',
                                'name' => 'arquivo_download',
                                'type' => 'file',
                                'instructions' => '',
                                'required' => 0,
                                'conditional_logic' => 0,
                                'wrapper' => array(
                                    'width' => '',
                                    'class' => '',
                                    'id' => '',
                                ),
                                'return_format' => 'url',
                                'library' => 'all',
                                'min_size' => '',
                                'max_size' => '',
                                'mime_types' => '',
                            ),
                            array(
                                'key' => 'field_6250822ccba28',
                                'label' => 'Link',
                                'name' => 'link',
                                'type' => 'url',
                                'instructions' => '',
                                'required' => 0,
                                'conditional_logic' => 0,
                                'wrapper' => array(
                                    'width' => '',
                                    'class' => '',
                                    'id' => '',
                                ),
                                'default_value' => '',
                                'placeholder' => '',
                            ),
                            array(
                                'key' => 'field_6250822ccba29',
                                'label' => 'Imagem',
                                'name' => 'imagem_arquivo',
                                'type' => 'image',
                                'instructions' => '',
                                'required' => 0,
                                'conditional_logic' => 0,
                                'wrapper' => array(
                                    'width' => '',
                                    'class' => '',
                                    'id' => '',
                                ),
                                'return_format' => 'url',
                                'preview_size' => 'thumbnail',
                                'library' => 'all',
                                'min_width' => '',
                                'min_height' => '',
                                'min_size' => '',
                                'max_width' => '',
                                'max_height' => '',
                                'max_size' => '',
                                'mime_types' => '',
                            ),
                        ),
                    ),
                    array(
                        'key' => 'field_6250822fcba2a',
                        'label' => 'Download 5',
                        'name' => 'download_5',
                        'type' => 'group',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => array(
                            array(
                                array(
                                    'field' => 'field_6250822ccba26',
                                    'operator' => '!=empty',
                                ),
                                array(
                                    'field' => 'field_6250822ccba27',
                                    'operator' => '!=empty',
                                ),
                            ),
                            array(
                                array(
                                    'field' => 'field_6250822ccba26',
                                    'operator' => '!=empty',
                                ),
                                array(
                                    'field' => 'field_6250822ccba28',
                                    'operator' => '!=empty',
                                ),
                            ),
                        ),
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'layout' => 'row',
                        'sub_fields' => array(
                            array(
                                'key' => 'field_6250822fcba2b',
                                'label' => 'Título do arquivo',
                                'name' => 'titulo_arquivo',
                                'type' => 'text',
                                'instructions' => '',
                                'required' => 0,
                                'conditional_logic' => 0,
                                'wrapper' => array(
                                    'width' => '',
                                    'class' => '',
                                    'id' => '',
                                ),
                                'default_value' => '',
                                'placeholder' => '',
                                'prepend' => '',
                                'append' => '',
                                'maxlength' => '',
                            ),
                            array(
                                'key' => 'field_6250822fcba2c',
                                'label' => 'Arquivo',
                                'name' => 'arquivo_download',
                                'type' => 'file',
                                'instructions' => '',
                                'required' => 0,
                                'conditional_logic' => 0,
                                'wrapper' => array(
                                    'width' => '',
                                    'class' => '',
                                    'id' => '',
                                ),
                                'return_format' => 'url',
                                'library' => 'all',
                                'min_size' => '',
                                'max_size' => '',
                                'mime_types' => '',
                            ),
                            array(
                                'key' => 'field_6250822fcba2d',
                                'label' => 'Link',
                                'name' => 'link',
                                'type' => 'url',
                                'instructions' => '',
                                'required' => 0,
                                'conditional_logic' => 0,
                                'wrapper' => array(
                                    'width' => '',
                                    'class' => '',
                                    'id' => '',
                                ),
                                'default_value' => '',
                                'placeholder' => '',
                            ),
                            array(
                                'key' => 'field_6250822fcba2e',
                                'label' => 'Imagem',
                                'name' => 'imagem_arquivo',
                                'type' => 'image',
                                'instructions' => '',
                                'required' => 0,
                                'conditional_logic' => 0,
                                'wrapper' => array(
                                    'width' => '',
                                    'class' => '',
                                    'id' => '',
                                ),
                                'return_format' => 'url',
                                'preview_size' => 'thumbnail',
                                'library' => 'all',
                                'min_width' => '',
                                'min_height' => '',
                                'min_size' => '',
                                'max_width' => '',
                                'max_height' => '',
                                'max_size' => '',
                                'mime_types' => '',
                            ),
                        ),
                    ),
                    array(
                        'key' => 'field_62508230cba2f',
                        'label' => 'Download 6',
                        'name' => 'download_6',
                        'type' => 'group',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => array(
                            array(
                                array(
                                    'field' => 'field_6250822fcba2b',
                                    'operator' => '!=empty',
                                ),
                                array(
                                    'field' => 'field_6250822fcba2c',
                                    'operator' => '!=empty',
                                ),
                            ),
                            array(
                                array(
                                    'field' => 'field_6250822fcba2b',
                                    'operator' => '!=empty',
                                ),
                                array(
                                    'field' => 'field_6250822fcba2d',
                                    'operator' => '!=empty',
                                ),
                            ),
                        ),
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'layout' => 'row',
                        'sub_fields' => array(
                            array(
                                'key' => 'field_62508231cba30',
                                'label' => 'Título do arquivo',
                                'name' => 'titulo_arquivo',
                                'type' => 'text',
                                'instructions' => '',
                                'required' => 0,
                                'conditional_logic' => 0,
                                'wrapper' => array(
                                    'width' => '',
                                    'class' => '',
                                    'id' => '',
                                ),
                                'default_value' => '',
                                'placeholder' => '',
                                'prepend' => '',
                                'append' => '',
                                'maxlength' => '',
                            ),
                            array(
                                'key' => 'field_62508231cba31',
                                'label' => 'Arquivo',
                                'name' => 'arquivo_download',
                                'type' => 'file',
                                'instructions' => '',
                                'required' => 0,
                                'conditional_logic' => 0,
                                'wrapper' => array(
                                    'width' => '',
                                    'class' => '',
                                    'id' => '',
                                ),
                                'return_format' => 'url',
                                'library' => 'all',
                                'min_size' => '',
                                'max_size' => '',
                                'mime_types' => '',
                            ),
                            array(
                                'key' => 'field_62508231cba32',
                                'label' => 'Link',
                                'name' => 'link',
                                'type' => 'url',
                                'instructions' => '',
                                'required' => 0,
                                'conditional_logic' => 0,
                                'wrapper' => array(
                                    'width' => '',
                                    'class' => '',
                                    'id' => '',
                                ),
                                'default_value' => '',
                                'placeholder' => '',
                            ),
                            array(
                                'key' => 'field_62508231cba33',
                                'label' => 'Imagem',
                                'name' => 'imagem_arquivo',
                                'type' => 'image',
                                'instructions' => '',
                                'required' => 0,
                                'conditional_logic' => 0,
                                'wrapper' => array(
                                    'width' => '',
                                    'class' => '',
                                    'id' => '',
                                ),
                                'return_format' => 'url',
                                'preview_size' => 'thumbnail',
                                'library' => 'all',
                                'min_width' => '',
                                'min_height' => '',
                                'min_size' => '',
                                'max_width' => '',
                                'max_height' => '',
                                'max_size' => '',
                                'mime_types' => '',
                            ),
                        ),
                    ),
                    array(
                        'key' => 'field_62508232cba34',
                        'label' => 'Download 7',
                        'name' => 'download_7',
                        'type' => 'group',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => array(
                            array(
                                array(
                                    'field' => 'field_62508231cba30',
                                    'operator' => '!=empty',
                                ),
                                array(
                                    'field' => 'field_62508231cba31',
                                    'operator' => '!=empty',
                                ),
                            ),
                            array(
                                array(
                                    'field' => 'field_62508231cba30',
                                    'operator' => '!=empty',
                                ),
                                array(
                                    'field' => 'field_62508231cba32',
                                    'operator' => '!=empty',
                                ),
                            ),
                        ),
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'layout' => 'row',
                        'sub_fields' => array(
                            array(
                                'key' => 'field_62508232cba35',
                                'label' => 'Título do arquivo',
                                'name' => 'titulo_arquivo',
                                'type' => 'text',
                                'instructions' => '',
                                'required' => 0,
                                'conditional_logic' => 0,
                                'wrapper' => array(
                                    'width' => '',
                                    'class' => '',
                                    'id' => '',
                                ),
                                'default_value' => '',
                                'placeholder' => '',
                                'prepend' => '',
                                'append' => '',
                                'maxlength' => '',
                            ),
                            array(
                                'key' => 'field_62508232cba36',
                                'label' => 'Arquivo',
                                'name' => 'arquivo_download',
                                'type' => 'file',
                                'instructions' => '',
                                'required' => 0,
                                'conditional_logic' => 0,
                                'wrapper' => array(
                                    'width' => '',
                                    'class' => '',
                                    'id' => '',
                                ),
                                'return_format' => 'url',
                                'library' => 'all',
                                'min_size' => '',
                                'max_size' => '',
                                'mime_types' => '',
                            ),
                            array(
                                'key' => 'field_62508232cba37',
                                'label' => 'Link',
                                'name' => 'link',
                                'type' => 'url',
                                'instructions' => '',
                                'required' => 0,
                                'conditional_logic' => 0,
                                'wrapper' => array(
                                    'width' => '',
                                    'class' => '',
                                    'id' => '',
                                ),
                                'default_value' => '',
                                'placeholder' => '',
                            ),
                            array(
                                'key' => 'field_62508232cba38',
                                'label' => 'Imagem',
                                'name' => 'imagem_arquivo',
                                'type' => 'image',
                                'instructions' => '',
                                'required' => 0,
                                'conditional_logic' => 0,
                                'wrapper' => array(
                                    'width' => '',
                                    'class' => '',
                                    'id' => '',
                                ),
                                'return_format' => 'url',
                                'preview_size' => 'thumbnail',
                                'library' => 'all',
                                'min_width' => '',
                                'min_height' => '',
                                'min_size' => '',
                                'max_width' => '',
                                'max_height' => '',
                                'max_size' => '',
                                'mime_types' => '',
                            ),
                        ),
                    ),
                    array(
                        'key' => 'field_62508234cba39',
                        'label' => 'Download 8',
                        'name' => 'download_8',
                        'type' => 'group',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => array(
                            array(
                                array(
                                    'field' => 'field_62508232cba35',
                                    'operator' => '!=empty',
                                ),
                                array(
                                    'field' => 'field_62508232cba36',
                                    'operator' => '!=empty',
                                ),
                            ),
                            array(
                                array(
                                    'field' => 'field_62508232cba35',
                                    'operator' => '!=empty',
                                ),
                                array(
                                    'field' => 'field_62508232cba37',
                                    'operator' => '!=empty',
                                ),
                            ),
                        ),
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'layout' => 'row',
                        'sub_fields' => array(
                            array(
                                'key' => 'field_62508234cba3a',
                                'label' => 'Título do arquivo',
                                'name' => 'titulo_arquivo',
                                'type' => 'text',
                                'instructions' => '',
                                'required' => 0,
                                'conditional_logic' => 0,
                                'wrapper' => array(
                                    'width' => '',
                                    'class' => '',
                                    'id' => '',
                                ),
                                'default_value' => '',
                                'placeholder' => '',
                                'prepend' => '',
                                'append' => '',
                                'maxlength' => '',
                            ),
                            array(
                                'key' => 'field_62508234cba3b',
                                'label' => 'Arquivo',
                                'name' => 'arquivo_download',
                                'type' => 'file',
                                'instructions' => '',
                                'required' => 0,
                                'conditional_logic' => 0,
                                'wrapper' => array(
                                    'width' => '',
                                    'class' => '',
                                    'id' => '',
                                ),
                                'return_format' => 'url',
                                'library' => 'all',
                                'min_size' => '',
                                'max_size' => '',
                                'mime_types' => '',
                            ),
                            array(
                                'key' => 'field_62508234cba3c',
                                'label' => 'Link',
                                'name' => 'link',
                                'type' => 'url',
                                'instructions' => '',
                                'required' => 0,
                                'conditional_logic' => 0,
                                'wrapper' => array(
                                    'width' => '',
                                    'class' => '',
                                    'id' => '',
                                ),
                                'default_value' => '',
                                'placeholder' => '',
                            ),
                            array(
                                'key' => 'field_62508234cba3d',
                                'label' => 'Imagem',
                                'name' => 'imagem_arquivo',
                                'type' => 'image',
                                'instructions' => '',
                                'required' => 0,
                                'conditional_logic' => 0,
                                'wrapper' => array(
                                    'width' => '',
                                    'class' => '',
                                    'id' => '',
                                ),
                                'return_format' => 'url',
                                'preview_size' => 'thumbnail',
                                'library' => 'all',
                                'min_width' => '',
                                'min_height' => '',
                                'min_size' => '',
                                'max_width' => '',
                                'max_height' => '',
                                'max_size' => '',
                                'mime_types' => '',
                            ),
                        ),
                    ),
                    array(
                        'key' => 'field_62508239cba3e',
                        'label' => 'Download 9',
                        'name' => 'download_9',
                        'type' => 'group',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => array(
                            array(
                                array(
                                    'field' => 'field_62508234cba3a',
                                    'operator' => '!=empty',
                                ),
                                array(
                                    'field' => 'field_62508234cba3b',
                                    'operator' => '!=empty',
                                ),
                            ),
                            array(
                                array(
                                    'field' => 'field_62508234cba3a',
                                    'operator' => '!=empty',
                                ),
                                array(
                                    'field' => 'field_62508234cba3c',
                                    'operator' => '!=empty',
                                ),
                            ),
                        ),
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'layout' => 'row',
                        'sub_fields' => array(
                            array(
                                'key' => 'field_62508239cba3f',
                                'label' => 'Título do arquivo',
                                'name' => 'titulo_arquivo',
                                'type' => 'text',
                                'instructions' => '',
                                'required' => 0,
                                'conditional_logic' => 0,
                                'wrapper' => array(
                                    'width' => '',
                                    'class' => '',
                                    'id' => '',
                                ),
                                'default_value' => '',
                                'placeholder' => '',
                                'prepend' => '',
                                'append' => '',
                                'maxlength' => '',
                            ),
                            array(
                                'key' => 'field_62508239cba40',
                                'label' => 'Arquivo',
                                'name' => 'arquivo_download',
                                'type' => 'file',
                                'instructions' => '',
                                'required' => 0,
                                'conditional_logic' => 0,
                                'wrapper' => array(
                                    'width' => '',
                                    'class' => '',
                                    'id' => '',
                                ),
                                'return_format' => 'url',
                                'library' => 'all',
                                'min_size' => '',
                                'max_size' => '',
                                'mime_types' => '',
                            ),
                            array(
                                'key' => 'field_62508239cba41',
                                'label' => 'Link',
                                'name' => 'link',
                                'type' => 'url',
                                'instructions' => '',
                                'required' => 0,
                                'conditional_logic' => 0,
                                'wrapper' => array(
                                    'width' => '',
                                    'class' => '',
                                    'id' => '',
                                ),
                                'default_value' => '',
                                'placeholder' => '',
                            ),
                            array(
                                'key' => 'field_62508239cba42',
                                'label' => 'Imagem',
                                'name' => 'imagem_arquivo',
                                'type' => 'image',
                                'instructions' => '',
                                'required' => 0,
                                'conditional_logic' => 0,
                                'wrapper' => array(
                                    'width' => '',
                                    'class' => '',
                                    'id' => '',
                                ),
                                'return_format' => 'url',
                                'preview_size' => 'thumbnail',
                                'library' => 'all',
                                'min_width' => '',
                                'min_height' => '',
                                'min_size' => '',
                                'max_width' => '',
                                'max_height' => '',
                                'max_size' => '',
                                'mime_types' => '',
                            ),
                        ),
                    ),
                    array(
                        'key' => 'field_6250823bcba43',
                        'label' => 'Download 10',
                        'name' => 'download_10',
                        'type' => 'group',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => array(
                            array(
                                array(
                                    'field' => 'field_62508239cba3f',
                                    'operator' => '!=empty',
                                ),
                                array(
                                    'field' => 'field_62508239cba40',
                                    'operator' => '!=empty',
                                ),
                            ),
                            array(
                                array(
                                    'field' => 'field_62508239cba3f',
                                    'operator' => '!=empty',
                                ),
                                array(
                                    'field' => 'field_62508239cba41',
                                    'operator' => '!=empty',
                                ),
                            ),
                        ),
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'layout' => 'row',
                        'sub_fields' => array(
                            array(
                                'key' => 'field_6250823bcba44',
                                'label' => 'Título do arquivo',
                                'name' => 'titulo_arquivo',
                                'type' => 'text',
                                'instructions' => '',
                                'required' => 0,
                                'conditional_logic' => 0,
                                'wrapper' => array(
                                    'width' => '',
                                    'class' => '',
                                    'id' => '',
                                ),
                                'default_value' => '',
                                'placeholder' => '',
                                'prepend' => '',
                                'append' => '',
                                'maxlength' => '',
                            ),
                            array(
                                'key' => 'field_6250823bcba45',
                                'label' => 'Arquivo',
                                'name' => 'arquivo_download',
                                'type' => 'file',
                                'instructions' => '',
                                'required' => 0,
                                'conditional_logic' => 0,
                                'wrapper' => array(
                                    'width' => '',
                                    'class' => '',
                                    'id' => '',
                                ),
                                'return_format' => 'url',
                                'library' => 'all',
                                'min_size' => '',
                                'max_size' => '',
                                'mime_types' => '',
                            ),
                            array(
                                'key' => 'field_6250823bcba46',
                                'label' => 'Link',
                                'name' => 'link',
                                'type' => 'url',
                                'instructions' => '',
                                'required' => 0,
                                'conditional_logic' => 0,
                                'wrapper' => array(
                                    'width' => '',
                                    'class' => '',
                                    'id' => '',
                                ),
                                'default_value' => '',
                                'placeholder' => '',
                            ),
                            array(
                                'key' => 'field_6250823bcba47',
                                'label' => 'Imagem',
                                'name' => 'imagem_arquivo',
                                'type' => 'image',
                                'instructions' => '',
                                'required' => 0,
                                'conditional_logic' => 0,
                                'wrapper' => array(
                                    'width' => '',
                                    'class' => '',
                                    'id' => '',
                                ),
                                'return_format' => 'url',
                                'preview_size' => 'thumbnail',
                                'library' => 'all',
                                'min_width' => '',
                                'min_height' => '',
                                'min_size' => '',
                                'max_width' => '',
                                'max_height' => '',
                                'max_size' => '',
                                'mime_types' => '',
                            ),
                        ),
                    ),
                ),
                'location' => array(
                    array(
                        array(
                            'param' => 'post_template',
                            'operator' => '==',
                            'value' => 'template/downloadsCard.php'
                        )
                    )
                ),
                'menu_order' => 10,
                'position' => 'normal',
                'style' => 'default',
                'label_placement' => 'top',
                'instruction_placement' => 'label',
                'hide_on_screen' =>  array(
                    0 => 'discussion',
                    1 => 'comments',
                    2 => 'format',
                    3 => 'send-trackbacks',
                ),
                'active' => true,
                'description' => '',
                'show_in_rest' => 1,
            ));

            // Titulo
            acf_add_local_field_group(array(
                'key' => 'group_622fa51032df2',
                'title' => 'Título',
                'fields' => array(
                    array(
                        'key' => 'field_show_title',
                        'label' => 'Mostrar título?',
                        'name' => 'show_title',
                        'type' => 'true_false',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'message' => '',
                        'default_value' => 1,
                        'ui' => 1,
                        'ui_on_text' => '',
                        'ui_off_text' => '',
                    ),
                    array(
                        'key' => 'field_icones',
                        'label' => 'Ícone do título',
                        'name' => 'icone',
                        'type' => 'radio',
                        'instructions' => 'O ícone escolhido irá aparecer ao lado do título da página.',
                        'required' => 1,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'choices' => array(
                            'mosquetoes-branco' => 'Mosquetões',
                            'canivete-branco' => 'Canivete',
                            'placa-info-branca' => 'Placas',
                            'bussola-branco' => 'Bússola',
                        ),
                        'allow_null' => 0,
                        'other_choice' => 0,
                        'default_value' => 'mosquetoes-branco',
                        'layout' => 'vertical',
                        'return_format' => 'value',
                        'save_other_choice' => 0,
                    )
                ),
                'location' => array(
                    array(
                        array(
                            'param' => 'post_type',
                            'operator' => '==',
                            'value' => 'page',
                        ),
                        array(
                            'param' => 'page_type',
                            'operator' => '!=',
                            'value' => 'front_page',
                        )
                    ),
                    array(
                        array(
                            'param' => 'post_type',
                            'operator' => '==',
                            'value' => 'eventos',
                        ),
                    ),
                    array(
                        array(
                            'param' => 'post_type',
                            'operator' => '==',
                            'value' => 'projetos',
                        ),
                    ),
                    array(
                        array(
                            'param' => 'post_type',
                            'operator' => '==',
                            'value' => 'noticias',
                        ),
                    )
                ),
                'menu_order' => 0,
                'position' => 'side',
                'style' => 'seamless',
                'label_placement' => 'top',
                'instruction_placement' => 'label',
                'hide_on_screen' =>  array(
                    0 => 'discussion',
                    1 => 'comments',
                    2 => 'format',
                    3 => 'send-trackbacks',
                ),
                'active' => true,
                'description' => 'Configuração da área do título',
                'show_in_rest' => 1,
            ));

            // Especialidades
            acf_add_local_field_group(array(
                'key' => 'group_5f05e4b341dff',
                'title' => 'Especialidade',
                'fields' => array(
                    array(
                        'key' => 'field_5f05e4cebc785',
                        'label' => 'Quantidade de etapas',
                        'name' => 'quantidade_itens',
                        'type' => 'number',
                        'instructions' => 'Quantidade total de etapas necessário para concluir o nível 3',
                        'required' => 1,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'default_value' => 9,
                        'placeholder' => '',
                        'prepend' => '',
                        'append' => '',
                        'min' => 3,
                        'max' => '',
                        'step' => '',
                    ),
                ),
                'location' => array(
                    array(
                        array(
                            'param' => 'post_type',
                            'operator' => '==',
                            'value' => 'especialidades',
                        ),
                    ),
                ),
                'menu_order' => 2,
                'position' => 'side',
                'style' => 'default',
                'label_placement' => 'top',
                'instruction_placement' => 'label',
                'hide_on_screen' =>  array(
                    0 => 'discussion',
                    1 => 'comments',
                    2 => 'format',
                    3 => 'send-trackbacks',
                ),
                'active' => true,
                'description' => '',
                'show_in_rest' => true,
            ));

            // Eventos
            acf_add_local_field_group(array(
                'key' => 'group_62265baca642b',
                'title' => 'Evento',
                'fields' => array(
                    array(
                        'key' => 'field_62265bb1c8861',
                        'label' => 'Evento nacional',
                        'name' => 'evento_nacional',
                        'type' => 'true_false',
                        'instructions' => 'É evento nacional?',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'message' => '',
                        'default_value' => 1,
                        'ui' => 1,
                        'ui_on_text' => '',
                        'ui_off_text' => '',
                    ),
                    array(
                        'key' => 'field_62265c08c8862',
                        'label' => 'Evento descentralizado?',
                        'name' => 'evento_descentralizado',
                        'type' => 'true_false',
                        'instructions' => 'É um evento sem localidade fixa e única?',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'message' => '',
                        'default_value' => 0,
                        'ui' => 1,
                        'ui_on_text' => '',
                        'ui_off_text' => '',
                    ),
                    array(
                        'key' => 'field_62265c38c8863',
                        'label' => 'País',
                        'name' => 'pais_evento',
                        'type' => 'text',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => array(
                            array(
                                array(
                                    'field' => 'field_62265bb1c8861',
                                    'operator' => '!=',
                                    'value' => '1',
                                ),
                            ),
                        ),
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'default_value' => '',
                        'placeholder' => '',
                        'prepend' => '',
                        'append' => '',
                        'maxlength' => '',
                    ),
                    array(
                        'key' => 'field_62265c70c8864',
                        'label' => 'Tipo do Evento',
                        'name' => 'tipo_do_evento',
                        'type' => 'text',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => array(
                            array(
                                array(
                                    'field' => 'field_62265c08c8862',
                                    'operator' => '==',
                                    'value' => '1',
                                ),
                            ),
                        ),
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'default_value' => '',
                        'placeholder' => '',
                        'prepend' => '',
                        'append' => '',
                        'maxlength' => '',
                    ),
                    array(
                        'key' => 'field_62265c8bc8865',
                        'label' => 'Cidade do Evento',
                        'name' => 'cidade_do_evento',
                        'type' => 'text',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => array(
                            array(
                                array(
                                    'field' => 'field_62265c08c8862',
                                    'operator' => '!=',
                                    'value' => '1',
                                ),
                            ),
                        ),
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'default_value' => '',
                        'placeholder' => '',
                        'prepend' => '',
                        'append' => '',
                        'maxlength' => '',
                    ),
                    array(
                        'key' => 'field_62265cbbc8867',
                        'label' => 'UF da Cidade',
                        'name' => 'uf_cidade',
                        'type' => 'select',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => array(
                            array(
                                array(
                                    'field' => 'field_62265bb1c8861',
                                    'operator' => '==',
                                    'value' => '1',
                                ),
                                array(
                                    'field' => 'field_62265c08c8862',
                                    'operator' => '!=',
                                    'value' => '1',
                                ),
                            ),
                        ),
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'choices' => array(
                            'AC' => 'Acre',
                            'AL' => 'Alagoas',
                            'AP' => 'Amapá',
                            'AM' => 'Amazonas',
                            'BA' => 'Bahia',
                            'CE' => 'Ceará',
                            'DF' => 'Distrito Federal',
                            'ES' => 'Espírito Santo',
                            'GO' => 'Goiás',
                            'MA' => 'Maranhão',
                            'MT' => 'Mato Grosso',
                            'MS' => 'Mato Grosso do Sul',
                            'MG' => 'Minas Gerais',
                            'PA' => 'Pará',
                            'PB' => 'Paraíba',
                            'PR' => 'Paraná',
                            'PE' => 'Pernambuco',
                            'PI' => 'Piauí',
                            'RJ' => 'Rio de Janeiro',
                            'RN' => 'Rio Grande do Norte',
                            'RS' => 'Rio Grande do Sul',
                            'RO' => 'Rondônia',
                            'RR' => 'Roraima',
                            'SC' => 'Santa Catarina',
                            'SP' => 'São Paulo',
                            'SE' => 'Sergipe',
                            'TO' => 'Tocantins',
                        ),
                        'default_value' => false,
                        'allow_null' => 0,
                        'multiple' => 0,
                        'ui' => 1,
                        'return_format' => 'value',
                        'ajax' => 0,
                        'placeholder' => '',
                    ),
                    array(
                        'key' => 'field_62265e7ac8869',
                        'label' => 'Data de Inicio do evento',
                        'name' => 'data_evento',
                        'type' => 'date_picker',
                        'instructions' => '',
                        'required' => 1,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'display_format' => 'd/m/Y',
                        'return_format' => 'j F Y',
                        'first_day' => 0,
                    ),
                    array(
                        'key' => 'field_62265ec6c886a',
                        'label' => 'Data de Termino do Evento',
                        'name' => 'data_fim_evento',
                        'type' => 'date_picker',
                        'instructions' => 'Se o evento ocorrer em apenas um dia, a data de termino será a mesma data de inicio',
                        'required' => 1,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'display_format' => 'd/m/Y',
                        'return_format' => 'j F Y',
                        'first_day' => 0,
                    ),
                    array(
                        'key' => 'field_62265f08c886b',
                        'label' => 'Hora do Evento',
                        'name' => 'hora_evento',
                        'type' => 'time_picker',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'display_format' => 'H:i',
                        'return_format' => 'H:i',
                    ),
                ),
                'location' => array(
                    array(
                        array(
                            'param' => 'post_type',
                            'operator' => '==',
                            'value' => 'eventos',
                        ),
                    ),
                ),
                'menu_order' => 2,
                'position' => 'normal',
                'style' => 'default',
                'label_placement' => 'top',
                'instruction_placement' => 'label',
                'hide_on_screen' =>  array(
                    0 => 'discussion',
                    1 => 'comments',
                    2 => 'format',
                    3 => 'send-trackbacks',
                ),
                'active' => true,
                'description' => '',
                'show_in_rest' => 1,
            ));
        */
		acf_add_local_field_group(array(
            'key' => 'group_62580f96',
            'title' => 'Escoteiros do Brasil',
            'fields' => array(
                /*
				array(
                    'key' => 'field_62580fa01f076',
                    'label' => 'Mostrar eventos',
                    'name' => 'mostrar_eventos',
                    'type' => 'true_false',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'message' => '',
                    'default_value' => 0,
                    'ui' => 1,
                    'ui_on_text' => '',
                    'ui_off_text' => '',
                ),
                array(
                    'key' => 'field_62580fba1f077',
                    'label' => 'Eventos',
                    'name' => 'eventos',
                    'type' => 'relationship',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => array(
                        array(
                            array(
                                'field' => 'field_62580fa01f076',
                                'operator' => '==',
                                'value' => '1',
                            )
                        )
                    ),
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'post_type' => array(
                        0 => 'eventos',
                    ),
                    'taxonomy' => '',
                    'filters' => array(
                        0 => 'search',
                    ),
                    'elements' => '',
                    'min' => '',
                    'max' => 4,
                    'return_format' => 'object',
                ),
                */
                array(
                    'key' => 'field_62580f',
                    'label' => 'Mostrar notícias',
                    'name' => 'mostrar_noticias',
                    'type' => 'true_false',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'message' => '',
                    'default_value' => 0,
                    'ui' => 1,
                    'ui_on_text' => '',
                    'ui_off_text' => '',
                ),
                array(
                    'key' => 'field_62580f_noticias',
                    'label' => 'Notícias',
                    'name' => 'noticias',
                    'type' => 'relationship',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => array(
                        array(
                            array(
                                'field' => 'field_62580f',
                                'operator' => '==',
                                'value' => '1',
                            )
                        )
                    ),
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'post_type' => array(
                        0 => 'noticias',
                    ),
                    'taxonomy' => '',
                    'filters' => array(
                        0 => 'search',
                    ),
                    'elements' => '',
                    'min' => '',
                    'max' => 3,
                    'return_format' => 'object',
                )
            ),
            'location' => array(
                array(
                    array(
                        'param' => 'page_type',
                        'operator' => '==',
                        'value' => 'front_page',
                    ),
                ),
            ),
            'menu_order' => 3,
            'position' => 'normal',
            'style' => 'default',
            'label_placement' => 'top',
            'instruction_placement' => 'label',
            'hide_on_screen' => '',
            'active' => true,
            'description' => '',
            'show_in_rest' => 1,
        ));
    endif;
}
add_action('acf/init', 'ueb_campos_personalizados');
