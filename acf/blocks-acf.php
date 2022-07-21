<?php

add_action('acf/init', 'my_acf_init');

function my_acf_init() {
	
	// check function exists
	if( function_exists('acf_register_block') ) {

		// register a testimonial block
		acf_register_block(array(
			'name'				=> 'madiator-and-guests',
			'title'				=> __('Mediador e convidados'),
			'description'		=> __('Mediador e convidados'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'category-bienal2',
			'icon'				=> '<svg><path d="M19 3H5c-.6 0-1 .4-1 1v7c0 .5.4 1 1 1h14c.5 0 1-.4 1-1V4c0-.6-.4-1-1-1zM5.5 10.5v-.4l1.8-1.3 1.3.8c.3.2.7.2.9-.1L11 8.1l2.4 2.4H5.5zm13 0h-2.9l-4-4c-.3-.3-.8-.3-1.1 0L8.9 8l-1.2-.8c-.3-.2-.6-.2-.9 0l-1.3 1V4.5h13v6zM4 20h9v-1.5H4V20zm0-4h16v-1.5H4V16z"></path></svg>',
			'keywords'			=> array( 'slide', 'image' ),
			'example'           => array(
				'attributes' => array(
					'mode' => 'preview',
					'data' => array(
						'block-convidados'   	=> "Blocks are...",
						'block-mediador'        => "Jane Smith",
						'role'          => "Person",
						'is_preview'    => true
					)
				)
			)
		));


		// register a testimonial block
		acf_register_block(array(
			'name'				=> 'feature-posts',
			'title'				=> __('Posts destacados'),
			'description'		=> __('Posts destacados'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'category-bienal',
			'icon'				=> '<svg><path d="M19 3H5c-.6 0-1 .4-1 1v7c0 .5.4 1 1 1h14c.5 0 1-.4 1-1V4c0-.6-.4-1-1-1zM5.5 10.5v-.4l1.8-1.3 1.3.8c.3.2.7.2.9-.1L11 8.1l2.4 2.4H5.5zm13 0h-2.9l-4-4c-.3-.3-.8-.3-1.1 0L8.9 8l-1.2-.8c-.3-.2-.6-.2-.9 0l-1.3 1V4.5h13v6zM4 20h9v-1.5H4V20zm0-4h16v-1.5H4V16z"></path></svg>',
			'keywords'			=> array( 'slide', 'image' ),
			'example'           => array(
				'attributes' => array(
					'mode' => 'preview',
					'data' => array(
						'block-convidados'   	=> "Blocks are...",
						'block-mediador'        => "Jane Smith",
						'role'          => "Person",
						'is_preview'    => true
					)
				)
			)
		));

		acf_register_block(array(
			'name'				=> 'feature-posts-fixed',
			'title'				=> __('Posts destacados com post fixo'),
			'description'		=> __('Posts destacados com post fixo'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'category-bienal',
			'icon'				=> '<svg><path d="M19 3H5c-.6 0-1 .4-1 1v7c0 .5.4 1 1 1h14c.5 0 1-.4 1-1V4c0-.6-.4-1-1-1zM5.5 10.5v-.4l1.8-1.3 1.3.8c.3.2.7.2.9-.1L11 8.1l2.4 2.4H5.5zm13 0h-2.9l-4-4c-.3-.3-.8-.3-1.1 0L8.9 8l-1.2-.8c-.3-.2-.6-.2-.9 0l-1.3 1V4.5h13v6zM4 20h9v-1.5H4V20zm0-4h16v-1.5H4V16z"></path></svg>',
			'keywords'			=> array( 'slide', 'image' ),
			'example'           => array(
				'attributes' => array(
					'mode' => 'preview',
					'data' => array(
						'block-convidados'   	=> "Blocks are...",
						'block-mediador'        => "Jane Smith",
						'role'          => "Person",
						'is_preview'    => true
					)
				)
			)
		));
		
		
		// register a testimonial block
		acf_register_block(array(
			'name'				=> 'releases',
			'title'				=> __('Lançamentos'),
			'description'		=> __('Lançamentos'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'category-bienal',
			'icon'				=> '<svg><path d="M19 3H5c-.6 0-1 .4-1 1v7c0 .5.4 1 1 1h14c.5 0 1-.4 1-1V4c0-.6-.4-1-1-1zM5.5 10.5v-.4l1.8-1.3 1.3.8c.3.2.7.2.9-.1L11 8.1l2.4 2.4H5.5zm13 0h-2.9l-4-4c-.3-.3-.8-.3-1.1 0L8.9 8l-1.2-.8c-.3-.2-.6-.2-.9 0l-1.3 1V4.5h13v6zM4 20h9v-1.5H4V20zm0-4h16v-1.5H4V16z"></path></svg>',
			'keywords'			=> array( 'slide', 'image' ),
			'example'           => array(
				'attributes' => array(
					'mode' => 'preview',
					'data' => array(
						'block-convidados'   	=> "Blocks are...",
						'block-mediador'        => "Jane Smith",
						'role'          => "Person",
						'is_preview'    => true
					)
				)
			)
		));


		// register a testimonial block
		acf_register_block(array(
			'name'				=> 'columnist',
			'title'				=> __('Colunista'),
			'description'		=> __('Colunista'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'category-bienal',
			'icon'				=> '<svg><path d="M19 3H5c-.6 0-1 .4-1 1v7c0 .5.4 1 1 1h14c.5 0 1-.4 1-1V4c0-.6-.4-1-1-1zM5.5 10.5v-.4l1.8-1.3 1.3.8c.3.2.7.2.9-.1L11 8.1l2.4 2.4H5.5zm13 0h-2.9l-4-4c-.3-.3-.8-.3-1.1 0L8.9 8l-1.2-.8c-.3-.2-.6-.2-.9 0l-1.3 1V4.5h13v6zM4 20h9v-1.5H4V20zm0-4h16v-1.5H4V16z"></path></svg>',
			'keywords'			=> array( 'slide', 'image' ),
			'example'           => array(
				'attributes' => array(
					'mode' => 'preview',
					'data' => array(
						'block-convidados'   	=> "Blocks are...",
						'block-mediador'        => "Jane Smith",
						'role'          => "Person",
						'is_preview'    => true
					)
				)
			)
		));


		// register a testimonial block
		acf_register_block(array(
			'name'				=> 'branded-content',
			'title'				=> __('Branded Content'),
			'description'		=> __('Branded Content'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'category-bienal',
			'icon'				=> '<svg><path d="M19 3H5c-.6 0-1 .4-1 1v7c0 .5.4 1 1 1h14c.5 0 1-.4 1-1V4c0-.6-.4-1-1-1zM5.5 10.5v-.4l1.8-1.3 1.3.8c.3.2.7.2.9-.1L11 8.1l2.4 2.4H5.5zm13 0h-2.9l-4-4c-.3-.3-.8-.3-1.1 0L8.9 8l-1.2-.8c-.3-.2-.6-.2-.9 0l-1.3 1V4.5h13v6zM4 20h9v-1.5H4V20zm0-4h16v-1.5H4V16z"></path></svg>',
			'keywords'			=> array( 'slide', 'image' ),
			'example'           => array(
				'attributes' => array(
					'mode' => 'preview',
					'data' => array(
						'block-convidados'   	=> "Blocks are...",
						'block-mediador'        => "Jane Smith",
						'role'          => "Person",
						'is_preview'    => true
					)
				)
			)
		));


		// register a testimonial block
		acf_register_block(array(
			'name'				=> 'outher-content',
			'title'				=> __('Outros conteúdos'),
			'description'		=> __('Outros conteúdos'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'category-bienal',
			'icon'				=> '<svg><path d="M19 3H5c-.6 0-1 .4-1 1v7c0 .5.4 1 1 1h14c.5 0 1-.4 1-1V4c0-.6-.4-1-1-1zM5.5 10.5v-.4l1.8-1.3 1.3.8c.3.2.7.2.9-.1L11 8.1l2.4 2.4H5.5zm13 0h-2.9l-4-4c-.3-.3-.8-.3-1.1 0L8.9 8l-1.2-.8c-.3-.2-.6-.2-.9 0l-1.3 1V4.5h13v6zM4 20h9v-1.5H4V20zm0-4h16v-1.5H4V16z"></path></svg>',
			'keywords'			=> array( 'slide', 'image' ),
			'example'           => array(
				'attributes' => array(
					'mode' => 'preview',
					'data' => array(
						'block-convidados'   	=> "Blocks are...",
						'block-mediador'        => "Jane Smith",
						'role'          => "Person",
						'is_preview'    => true
					)
				)
			)
		));


		// register a testimonial block
		acf_register_block(array(
			'name'				=> 'ads',
			'title'				=> __('Anúncios'),
			'description'		=> __('Anúncios'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'category-bienal',
			'icon'				=> '<svg><path d="M19 3H5c-.6 0-1 .4-1 1v7c0 .5.4 1 1 1h14c.5 0 1-.4 1-1V4c0-.6-.4-1-1-1zM5.5 10.5v-.4l1.8-1.3 1.3.8c.3.2.7.2.9-.1L11 8.1l2.4 2.4H5.5zm13 0h-2.9l-4-4c-.3-.3-.8-.3-1.1 0L8.9 8l-1.2-.8c-.3-.2-.6-.2-.9 0l-1.3 1V4.5h13v6zM4 20h9v-1.5H4V20zm0-4h16v-1.5H4V16z"></path></svg>',
			'keywords'			=> array( 'slide', 'image' ),
			'example'           => array(
				'attributes' => array(
					'mode' => 'preview',
					'data' => array(
						'block-convidados'   	=> "Blocks are...",
						'block-mediador'        => "Jane Smith",
						'role'          => "Person",
						'is_preview'    => true
					)
				)
			)
		));


		// register a testimonial block
		acf_register_block(array(
			'name'				=> 'bienal-meetings',
			'title'				=> __('Encontros Bienal'),
			'description'		=> __('Encontros Bienal'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'category-bienal',
			'icon'				=> '<svg><path d="M19 3H5c-.6 0-1 .4-1 1v7c0 .5.4 1 1 1h14c.5 0 1-.4 1-1V4c0-.6-.4-1-1-1zM5.5 10.5v-.4l1.8-1.3 1.3.8c.3.2.7.2.9-.1L11 8.1l2.4 2.4H5.5zm13 0h-2.9l-4-4c-.3-.3-.8-.3-1.1 0L8.9 8l-1.2-.8c-.3-.2-.6-.2-.9 0l-1.3 1V4.5h13v6zM4 20h9v-1.5H4V20zm0-4h16v-1.5H4V16z"></path></svg>',
			'keywords'			=> array( 'slide', 'image' ),
			'example'           => array(
				'attributes' => array(
					'mode' => 'preview',
					'data' => array(
						'block-convidados'   	=> "Blocks are...",
						'block-mediador'        => "Jane Smith",
						'role'          => "Person",
						'is_preview'    => true
					)
				)
			)
		));


		// register a page hub
		acf_register_block(array(
			'name'				=> 'hero-countdown',
			'title'				=> __('Hero com contador'),
			'description'		=> __('Hero com contador'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'category-hub',
			'icon'				=> '<svg><path d="M19 3H5c-.6 0-1 .4-1 1v7c0 .5.4 1 1 1h14c.5 0 1-.4 1-1V4c0-.6-.4-1-1-1zM5.5 10.5v-.4l1.8-1.3 1.3.8c.3.2.7.2.9-.1L11 8.1l2.4 2.4H5.5zm13 0h-2.9l-4-4c-.3-.3-.8-.3-1.1 0L8.9 8l-1.2-.8c-.3-.2-.6-.2-.9 0l-1.3 1V4.5h13v6zM4 20h9v-1.5H4V20zm0-4h16v-1.5H4V16z"></path></svg>',
			'keywords'			=> array( 'slide', 'image' ),
		));

		// register a page hub - modelo 1 seção hub
		acf_register_block(array(
			'name'				=> 'mod1-section-hub',
			'title'				=> __('Modelo 1 - Section Hub'),
			'description'		=> __('Modelo 1 - Section Hub'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'category-hub',
			'icon'				=> '<svg><path d="M19 3H5c-.6 0-1 .4-1 1v7c0 .5.4 1 1 1h14c.5 0 1-.4 1-1V4c0-.6-.4-1-1-1zM5.5 10.5v-.4l1.8-1.3 1.3.8c.3.2.7.2.9-.1L11 8.1l2.4 2.4H5.5zm13 0h-2.9l-4-4c-.3-.3-.8-.3-1.1 0L8.9 8l-1.2-.8c-.3-.2-.6-.2-.9 0l-1.3 1V4.5h13v6zM4 20h9v-1.5H4V20zm0-4h16v-1.5H4V16z"></path></svg>',
			'keywords'			=> array( 'slide', 'image' ),
		));

		// register a page hub - modelo 2 seção hub
		acf_register_block(array(
			'name'				=> 'mod2-section-hub',
			'title'				=> __('Modelo 2 - Section Hub'),
			'description'		=> __('Modelo 2 - Section Hub'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'category-hub',
			'icon'				=> '<svg><path d="M19 3H5c-.6 0-1 .4-1 1v7c0 .5.4 1 1 1h14c.5 0 1-.4 1-1V4c0-.6-.4-1-1-1zM5.5 10.5v-.4l1.8-1.3 1.3.8c.3.2.7.2.9-.1L11 8.1l2.4 2.4H5.5zm13 0h-2.9l-4-4c-.3-.3-.8-.3-1.1 0L8.9 8l-1.2-.8c-.3-.2-.6-.2-.9 0l-1.3 1V4.5h13v6zM4 20h9v-1.5H4V20zm0-4h16v-1.5H4V16z"></path></svg>',
			'keywords'			=> array( 'slide', 'image' ),
		));

		// register a page hub - modelo 3 seção hub
		acf_register_block(array(
			'name'				=> 'mod3-section-hub',
			'title'				=> __('Modelo 3 - Section Hub'),
			'description'		=> __('Modelo 3 - Section Hub'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'category-hub',
			'icon'				=> '<svg><path d="M19 3H5c-.6 0-1 .4-1 1v7c0 .5.4 1 1 1h14c.5 0 1-.4 1-1V4c0-.6-.4-1-1-1zM5.5 10.5v-.4l1.8-1.3 1.3.8c.3.2.7.2.9-.1L11 8.1l2.4 2.4H5.5zm13 0h-2.9l-4-4c-.3-.3-.8-.3-1.1 0L8.9 8l-1.2-.8c-.3-.2-.6-.2-.9 0l-1.3 1V4.5h13v6zM4 20h9v-1.5H4V20zm0-4h16v-1.5H4V16z"></path></svg>',
			'keywords'			=> array( 'slide', 'image' ),
		));

		// register a page hub - modelo 4 seção hub
		acf_register_block(array(
			'name'				=> 'mod4-section-hub',
			'title'				=> __('Modelo 4 - Section Hub'),
			'description'		=> __('Modelo 4 - Section Hub'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'category-hub',
			'icon'				=> '<svg><path d="M19 3H5c-.6 0-1 .4-1 1v7c0 .5.4 1 1 1h14c.5 0 1-.4 1-1V4c0-.6-.4-1-1-1zM5.5 10.5v-.4l1.8-1.3 1.3.8c.3.2.7.2.9-.1L11 8.1l2.4 2.4H5.5zm13 0h-2.9l-4-4c-.3-.3-.8-.3-1.1 0L8.9 8l-1.2-.8c-.3-.2-.6-.2-.9 0l-1.3 1V4.5h13v6zM4 20h9v-1.5H4V20zm0-4h16v-1.5H4V16z"></path></svg>',
			'keywords'			=> array( 'slide', 'image' ),
		));

		// register a page hub - modelo 5 seção hub
		acf_register_block(array(
			'name'				=> 'mod5-section-hub',
			'title'				=> __('Modelo 5 - Section Hub'),
			'description'		=> __('Modelo 5 - Section Hub'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'category-hub',
			'icon'				=> '<svg><path d="M19 3H5c-.6 0-1 .4-1 1v7c0 .5.4 1 1 1h14c.5 0 1-.4 1-1V4c0-.6-.4-1-1-1zM5.5 10.5v-.4l1.8-1.3 1.3.8c.3.2.7.2.9-.1L11 8.1l2.4 2.4H5.5zm13 0h-2.9l-4-4c-.3-.3-.8-.3-1.1 0L8.9 8l-1.2-.8c-.3-.2-.6-.2-.9 0l-1.3 1V4.5h13v6zM4 20h9v-1.5H4V20zm0-4h16v-1.5H4V16z"></path></svg>',
			'keywords'			=> array( 'slide', 'image' ),
		));

		// register section videos
		acf_register_block(array(
			'name'				=> 'videos-event',
			'title'				=> __('Videos do Evento'),
			'description'		=> __('Videos do Evento'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'category-hub',
			'icon'				=> '<svg><path d="M19 3H5c-.6 0-1 .4-1 1v7c0 .5.4 1 1 1h14c.5 0 1-.4 1-1V4c0-.6-.4-1-1-1zM5.5 10.5v-.4l1.8-1.3 1.3.8c.3.2.7.2.9-.1L11 8.1l2.4 2.4H5.5zm13 0h-2.9l-4-4c-.3-.3-.8-.3-1.1 0L8.9 8l-1.2-.8c-.3-.2-.6-.2-.9 0l-1.3 1V4.5h13v6zM4 20h9v-1.5H4V20zm0-4h16v-1.5H4V16z"></path></svg>',
			'keywords'			=> array( 'slide', 'image' ),
		));

		// register section atrações
		acf_register_block(array(
			'name'				=> 'attraction',
			'title'				=> __('Atrações'),
			'description'		=> __('Atrações'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'category-hub',
			'icon'				=> '<svg><path d="M19 3H5c-.6 0-1 .4-1 1v7c0 .5.4 1 1 1h14c.5 0 1-.4 1-1V4c0-.6-.4-1-1-1zM5.5 10.5v-.4l1.8-1.3 1.3.8c.3.2.7.2.9-.1L11 8.1l2.4 2.4H5.5zm13 0h-2.9l-4-4c-.3-.3-.8-.3-1.1 0L8.9 8l-1.2-.8c-.3-.2-.6-.2-.9 0l-1.3 1V4.5h13v6zM4 20h9v-1.5H4V20zm0-4h16v-1.5H4V16z"></path></svg>',
			'keywords'			=> array( 'Atrações', 'image' ),
		));

		// register section atrações
		acf_register_block(array(
			'name'				=> 'short-attraction',
			'title'				=> __('Exibirá somente algumas atrações'),
			'description'		=> __('Exibirá somente algumas atrações'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'category-hub',
			'icon'				=> '<svg><path d="M19 3H5c-.6 0-1 .4-1 1v7c0 .5.4 1 1 1h14c.5 0 1-.4 1-1V4c0-.6-.4-1-1-1zM5.5 10.5v-.4l1.8-1.3 1.3.8c.3.2.7.2.9-.1L11 8.1l2.4 2.4H5.5zm13 0h-2.9l-4-4c-.3-.3-.8-.3-1.1 0L8.9 8l-1.2-.8c-.3-.2-.6-.2-.9 0l-1.3 1V4.5h13v6zM4 20h9v-1.5H4V20zm0-4h16v-1.5H4V16z"></path></svg>',
			'keywords'			=> array( 'Atrações', 'image' ),
		));


		// register
		acf_register_block(array(
			'name'				=> 'display-content-page',
			'title'				=> __('Exibir o conteúdo de uma determinada página'),
			'description'		=> __('Exibir somente página que estiver usando blocos como estrutura'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'category-general',
			'icon'				=> '<svg><path d="M19 3H5c-.6 0-1 .4-1 1v7c0 .5.4 1 1 1h14c.5 0 1-.4 1-1V4c0-.6-.4-1-1-1zM5.5 10.5v-.4l1.8-1.3 1.3.8c.3.2.7.2.9-.1L11 8.1l2.4 2.4H5.5zm13 0h-2.9l-4-4c-.3-.3-.8-.3-1.1 0L8.9 8l-1.2-.8c-.3-.2-.6-.2-.9 0l-1.3 1V4.5h13v6zM4 20h9v-1.5H4V20zm0-4h16v-1.5H4V16z"></path></svg>',
			'keywords'			=> array( 'slide', 'image' ),
		));


		// register 
		acf_register_block(array(
			'name'				=> 'display-tickets-info',
			'title'				=> __('Ingressos'),
			'description'		=> __('Mostrará as informações sobre o ingresso'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'category-tickets',
			'icon'				=> '<svg><path d="M19 3H5c-.6 0-1 .4-1 1v7c0 .5.4 1 1 1h14c.5 0 1-.4 1-1V4c0-.6-.4-1-1-1zM5.5 10.5v-.4l1.8-1.3 1.3.8c.3.2.7.2.9-.1L11 8.1l2.4 2.4H5.5zm13 0h-2.9l-4-4c-.3-.3-.8-.3-1.1 0L8.9 8l-1.2-.8c-.3-.2-.6-.2-.9 0l-1.3 1V4.5h13v6zM4 20h9v-1.5H4V20zm0-4h16v-1.5H4V16z"></path></svg>',
			'keywords'			=> array( 'Ingressos', 'tickets' ),
		));


		// register 
		acf_register_block(array(
			'name'				=> 'cards-visitors',
			'title'				=> __('Card Visitantes'),
			'description'		=> __('Mostra cards com informações dos visitantes'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'category-visitors',
			'icon'				=> '<svg><path d="M19 3H5c-.6 0-1 .4-1 1v7c0 .5.4 1 1 1h14c.5 0 1-.4 1-1V4c0-.6-.4-1-1-1zM5.5 10.5v-.4l1.8-1.3 1.3.8c.3.2.7.2.9-.1L11 8.1l2.4 2.4H5.5zm13 0h-2.9l-4-4c-.3-.3-.8-.3-1.1 0L8.9 8l-1.2-.8c-.3-.2-.6-.2-.9 0l-1.3 1V4.5h13v6zM4 20h9v-1.5H4V20zm0-4h16v-1.5H4V16z"></path></svg>',
			'keywords'			=> array( 'Visitantes', 'visitors' ),
		));

		// register 
		acf_register_block(array(
			'name'				=> 'espaco-oficinas',
			'title'				=> __('Espaço Oficinas'),
			'description'		=> __('Seção Espaço Oficinas'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'category-hub',
			'icon'				=> '<svg><path d="M19 3H5c-.6 0-1 .4-1 1v7c0 .5.4 1 1 1h14c.5 0 1-.4 1-1V4c0-.6-.4-1-1-1zM5.5 10.5v-.4l1.8-1.3 1.3.8c.3.2.7.2.9-.1L11 8.1l2.4 2.4H5.5zm13 0h-2.9l-4-4c-.3-.3-.8-.3-1.1 0L8.9 8l-1.2-.8c-.3-.2-.6-.2-.9 0l-1.3 1V4.5h13v6zM4 20h9v-1.5H4V20zm0-4h16v-1.5H4V16z"></path></svg>',
			'keywords'			=> array( 'Oficinas', 'oficinas' ),
		));

		// register 
		acf_register_block(array(
			'name'				=> 'hero-blue',
			'title'				=> __('Hero Azul'),
			'description'		=> __('Hero Azul'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'category-hub',
			'icon'				=> '<svg><path d="M19 3H5c-.6 0-1 .4-1 1v7c0 .5.4 1 1 1h14c.5 0 1-.4 1-1V4c0-.6-.4-1-1-1zM5.5 10.5v-.4l1.8-1.3 1.3.8c.3.2.7.2.9-.1L11 8.1l2.4 2.4H5.5zm13 0h-2.9l-4-4c-.3-.3-.8-.3-1.1 0L8.9 8l-1.2-.8c-.3-.2-.6-.2-.9 0l-1.3 1V4.5h13v6zM4 20h9v-1.5H4V20zm0-4h16v-1.5H4V16z"></path></svg>',
			'keywords'			=> array( 'Hero Azul', 'hero-azul' ),
		));

		// register 
		acf_register_block(array(
			'name'				=> 'novidades-evento',
			'title'				=> __('Novidades Evento'),
			'description'		=> __('Seção Novidades Evento'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'category-hub',
			'icon'				=> '<svg><path d="M19 3H5c-.6 0-1 .4-1 1v7c0 .5.4 1 1 1h14c.5 0 1-.4 1-1V4c0-.6-.4-1-1-1zM5.5 10.5v-.4l1.8-1.3 1.3.8c.3.2.7.2.9-.1L11 8.1l2.4 2.4H5.5zm13 0h-2.9l-4-4c-.3-.3-.8-.3-1.1 0L8.9 8l-1.2-.8c-.3-.2-.6-.2-.9 0l-1.3 1V4.5h13v6zM4 20h9v-1.5H4V20zm0-4h16v-1.5H4V16z"></path></svg>',
			'keywords'			=> array( 'Novidades', 'novidades' ),
			'example'           => array(
				'attributes' => array(
					'mode' => 'preview',
					'data' => array(
						'block-convidados'   	=> "Blocks are...",
						'block-mediador'        => "Jane Smith",
						'role'          => "Person",
						'is_preview'    => true
					)
				)
			)
		));



		// register banner fullpage
		acf_register_block(array(
			'name'				=> 'banner-fullpage',
			'title'				=> __('Banner Fullpage'),
			'description'		=> __('Seção Banner Fullpage'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'category-hub',
			'icon'				=> '<svg><path d="M19 3H5c-.6 0-1 .4-1 1v7c0 .5.4 1 1 1h14c.5 0 1-.4 1-1V4c0-.6-.4-1-1-1zM5.5 10.5v-.4l1.8-1.3 1.3.8c.3.2.7.2.9-.1L11 8.1l2.4 2.4H5.5zm13 0h-2.9l-4-4c-.3-.3-.8-.3-1.1 0L8.9 8l-1.2-.8c-.3-.2-.6-.2-.9 0l-1.3 1V4.5h13v6zM4 20h9v-1.5H4V20zm0-4h16v-1.5H4V16z"></path></svg>',
			'keywords'			=> array( 'Novidades', 'novidades' )
		));


		// register banner fullpage
		acf_register_block(array(
			'name'				=> 'feature-programming-attraction-tickets',
			'title'				=> __('Destaque programação, Atrações e Ingressos'),
			'description'		=> __('Seção exibirá banners com links para a programação, atrações e ingressos'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'category-hub',
			'icon'				=> '<svg><path d="M19 3H5c-.6 0-1 .4-1 1v7c0 .5.4 1 1 1h14c.5 0 1-.4 1-1V4c0-.6-.4-1-1-1zM5.5 10.5v-.4l1.8-1.3 1.3.8c.3.2.7.2.9-.1L11 8.1l2.4 2.4H5.5zm13 0h-2.9l-4-4c-.3-.3-.8-.3-1.1 0L8.9 8l-1.2-.8c-.3-.2-.6-.2-.9 0l-1.3 1V4.5h13v6zM4 20h9v-1.5H4V20zm0-4h16v-1.5H4V16z"></path></svg>',
			'keywords'			=> array( 'Novidades', 'novidades' )
		));


		// register FAQ
		acf_register_block(array(
			'name'				=> 'faq',
			'title'				=> __('FAQ'),
			'description'		=> __('Exibirá perguntas e respostas'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'category-faq',
			'icon'				=> '<svg><path d="M19 3H5c-.6 0-1 .4-1 1v7c0 .5.4 1 1 1h14c.5 0 1-.4 1-1V4c0-.6-.4-1-1-1zM5.5 10.5v-.4l1.8-1.3 1.3.8c.3.2.7.2.9-.1L11 8.1l2.4 2.4H5.5zm13 0h-2.9l-4-4c-.3-.3-.8-.3-1.1 0L8.9 8l-1.2-.8c-.3-.2-.6-.2-.9 0l-1.3 1V4.5h13v6zM4 20h9v-1.5H4V20zm0-4h16v-1.5H4V16z"></path></svg>',
			'keywords'			=> array( 'Novidades', 'novidades' )
		));

		// register Informações de Acesso
		acf_register_block(array(
			'name'				=> 'information-access',
			'title'				=> __('Informações de Acesso'),
			'description'		=> __('Mostras as informações de como chegar ao local do evento'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'category-como-chegar',
			'icon'				=> '<svg><path d="M19 3H5c-.6 0-1 .4-1 1v7c0 .5.4 1 1 1h14c.5 0 1-.4 1-1V4c0-.6-.4-1-1-1zM5.5 10.5v-.4l1.8-1.3 1.3.8c.3.2.7.2.9-.1L11 8.1l2.4 2.4H5.5zm13 0h-2.9l-4-4c-.3-.3-.8-.3-1.1 0L8.9 8l-1.2-.8c-.3-.2-.6-.2-.9 0l-1.3 1V4.5h13v6zM4 20h9v-1.5H4V20zm0-4h16v-1.5H4V16z"></path></svg>',
			'keywords'			=> array( 'Informações', 'acesso' )
		));
	}
}

function my_acf_block_render_callback( $block ) {
	
	// convert name ("acf/testimonial") into path friendly slug ("testimonial")
	$slug = str_replace('acf/', '', $block['name']);
	
	// include a template part from within the "template-parts/block" folder
	if( file_exists( get_theme_file_path("/acf/template-parts/block/content-{$slug}.php") ) ) {
		include( get_theme_file_path("/acf/template-parts/block/content-{$slug}.php") );
	}
}

function my_plugin_block_categories( $categories, $post ) {
	return array_merge(
		$categories,
		array(
			array(
				'slug' => 'category-bienal',
				'title' => __( 'Bienal frontend', 'my-plugin' ),
				//'icon'  => 'admin-home',
			),

			array(
				'slug' => 'category-bienal2',
				'title' => __( 'Bienal posts', 'my-plugin' ),
				//'icon'  => 'admin-home',
			),

			array(
				'slug' => 'category-hub',
				'title' => __( 'Bienal Evento', 'my-plugin' ),
				//'icon'  => 'admin-home',
			),

			array(
				'slug' => 'category-general',
				'title' => __( 'Bienal Geral', 'my-plugin' ),
				//'icon'  => 'admin-home',
			),

			array(
				'slug' => 'category-tickets',
				'title' => __( 'Bienal Ingressos', 'my-plugin' ),
				//'icon'  => 'admin-home',
			),

			array(
				'slug' => 'category-visitors',
				'title' => __( 'Bienal Visitantes', 'my-plugin' ),
				//'icon'  => 'admin-home',
			),

			array(
				'slug' => 'category-faq',
				'title' => __( 'Bienal FAQ', 'my-plugin' ),
				//'icon'  => 'admin-home',
			),

			array(
				'slug' => 'category-como-chegar',
				'title' => __( 'Bienal Como Chegar', 'my-plugin' ),
				//'icon'  => 'admin-home',
			),
		)
	);
}
add_filter( 'block_categories', 'my_plugin_block_categories', 10, 2 );