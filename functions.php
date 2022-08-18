<?php

function site_scripts() {
	//*** JS ***//
	wp_enqueue_script( 'jq', get_template_directory_uri() . '/assets/js/jquery-3.3.1.min.js', [], false, true );
	wp_enqueue_script( 'jqmask', get_template_directory_uri() . '/assets/js/jquery.maskedinput.min.js', [], false, true );
	wp_enqueue_script( 'aos', get_template_directory_uri() . '/assets/lib/aos-master/aos.js', [], false, true );
	wp_enqueue_script( 'swiper', get_template_directory_uri() . '/assets/lib/swiper/swiper.min.js', [], false, true );
	wp_enqueue_script( 'iziModal', get_template_directory_uri() . '/assets/js/iziModal.min.js', [], false, true );
	wp_enqueue_script( 'main', get_template_directory_uri() . '/assets/js/main.js', [], false, true );
	wp_enqueue_script( 'lpfhjs', get_template_directory_uri() . '/assets/js/lpformhandler.min.js', [], false, true );

	//*** Stylesheets ***//
	wp_enqueue_style( 'iziModal', get_template_directory_uri() . '/assets/css/iziModal.css' );
	wp_enqueue_style( 'style', get_template_directory_uri() . '/assets/css/style.css' );
	wp_enqueue_style( 'lpfhcss', get_template_directory_uri() . '/assets/css/lpformhandler.min.css' );
}

add_action( 'wp_enqueue_scripts', 'site_scripts' );


// function form_handler() {
// 	if ( empty( $_POST ) ) {
// 		return;
// 	} else {
// 		header( 'Location: ./thankyou/' );

// 		$res = [];

// 		$email1 = get_option( 'mail_send_email_1' );
// 		$email2 = get_option( 'mail_send_email_2' );
// //        $email3 = get_option('mail_send_email_3');

// 		$emails = [ $email1, $email2 ];
// //        $emailfrom = get_option('mail_email_from');
// 		$companyfrom = get_option( 'mail_company_from' );
// 		require __DIR__ . '/sendmail.php';

// //        debug($res)
// 	}
// }

// add_action( 'wp', 'form_handler' );

add_theme_support( 'post-thumbnails' );

function my_myme_types( $mime_types ) {
	$mime_types['svg'] = 'image/svg+xml'; // поддержка SVG

	return $mime_types;
}

add_filter( 'upload_mimes', 'my_myme_types', 1, 1 );

if ( function_exists( 'acf_add_options_page' ) ) {

	acf_add_options_page( array(
		'page_title' => 'Основные настройки темы',
		'menu_title' => 'Настройки темы',
		'menu_slug'  => 'dacorn-general-settings',
		'capability' => 'edit_posts',
		'position'   => 6,
		'redirect'   => false
	) );
	acf_add_options_page( array(
		'page_title' => 'Добавить новую акцию',
		'menu_title' => 'Акции',
		'menu_slug'  => 'dacorn-general-sale',
		'capability' => 'edit_posts',
		'position'   => 6,
		'redirect'   => false
	) );
	acf_add_options_page( array(
		'page_title' => 'Редактирование меню сайта',
		'menu_title' => 'Меню',
		'menu_slug'  => 'dacorn-general-menu',
		'capability' => 'edit_posts',
		'position'   => 6,
		'redirect'   => false
	) );

}

// Добавляем стили в админку для ACF
add_action( 'admin_head', function () { ?>

    <style type="text/css">
        .acf-field-object-tab {
            background: aliceblue;
            box-sizing: border-box;
            border: 3px solid transparent;
        }

        .acf-tab-wrap.-left .acf-tab-group,
        .acf-fields.-sidebar:before {
            width: 200px;
        }

        .acf-fields.-sidebar {
            padding-left: 200px !important;
        }

        .acf-tab-wrap.-left .acf-tab-group li a {
            background: #f9f9f9;
        }

        #titlediv .inside span {
            display: inline-block;
            margin: 5px;
            padding: 5px;
            background: #dbdbdb;
            cursor: pointer;
        }

        /****/

        .styled-inp {
            height: 40px;
            width: 300px;
            border-radius: 5px;
            padding-left: 15px;
            margin: 10px 0 10px;
            display: block;
        }
    </style>

    <script type="text/javascript">

        jQuery(document).ready(function ($) {

            var boxQuickLinks = $('#titlediv .inside');
            var boxTabs = $('.acf-field-object-tab');
            var QuickLinks = '';

            // Создаем меню из табов
            $(boxTabs).each(function (i) {

                var key = $(this).data('key');
                var span = '<span>' + $('.li-field-label strong', this).text() + '</span>';

                $(boxQuickLinks).append($(span).attr('key', key));

            });


            // Создаем скролл по клику span->tab
            $('#titlediv .inside').on('click', 'span', function () {

                var key = $(this).attr('key');
                var goTab = $('div[data-key=' + key + ']');

                console.log(goTab);

                $("html,body").animate({
                        scrollTop: goTab.offset().top - 200
                    },
                    300,
                    null,
                    function () {

                        goTab
                            .animate({
                                borderColor: "#bfe1ff"
                            }, 500)
                            .animate({
                                borderColor: "transparent"
                            }, 500, 'linear')
                            .stop();

                    });

            });

        });

    </script>

<? } );

// action function for above hook
function ext_page_settings() {
	// Add a new top-level menu (ill-advised):
	add_menu_page( 'Общее', 'Настройки почты', 8, __FILE__, 'ext_form_handler_page' );
}

add_action( 'admin_menu', 'ext_page_settings' );

// mt_toplevel_page() displays the page content for the custom Test Toplevel menu
function ext_form_handler_page() {
	$opt_email1 = 'mail_send_email_1';
	$opt_email2 = 'mail_send_email_2';
//    $opt_email3 = 'mail_send_email_3';
//    $opt_efrom = 'mail_email_from';
	$opt_cfrom         = 'mail_company_from';
	$hidden_field_name = 'sec_submit_hidden';
	$data_field_name1  = 'email1';
	$data_field_name2  = 'email2';
//    $data_field_name3 = 'email3';
	$data_field_efrom = 'efrom';
	$data_field_cfrom = 'cfrom';

	// Read in existing option value from database
	$email1_val = get_option( $opt_email1 );
	$email2_val = get_option( $opt_email2 );
//    $email3_val = get_option( $opt_email3 );
//    $efrom_val  = get_option( $opt_efrom );
	$cfrom_val = get_option( $opt_cfrom );

	// See if the user has posted us some information
	// If they did, this hidden field will be set to 'Y'
	if ( $_POST[ $hidden_field_name ] == 'Y' ) {
		// Read their posted value
		$field_email1_val = strtolower( trim( $_POST[ $data_field_name1 ] ) );
		$field_email2_val = strtolower( trim( $_POST[ $data_field_name2 ] ) );
//        $field_email3_val = strtolower(trim($_POST[ $data_field_name3 ]));
		$field_efrom_val = strtolower( trim( $_POST[ $data_field_efrom ] ) );
		$field_cfrom_val = strtolower( trim( $_POST[ $data_field_cfrom ] ) );

		// Save the posted value in the database
		update_option( $opt_email1, $field_email1_val );
		update_option( $opt_email2, $field_email2_val );
//        update_option( $opt_email3, $field_email3_val );
//        update_option( $opt_efrom, $field_efrom_val );
		update_option( $opt_cfrom, $field_cfrom_val );

		// Put an options updated message on the screen
		$email1_val = $field_email1_val;
		$email2_val = $field_email2_val;
		?>
        <div class="updated"><p><strong><?php _e( 'Сохранено', 'mt_trans_domain' ); ?></strong></p></div>
		<?php

	}
	?>
    <h2>Настройки почты для заявок</h2>
    <form name="settings-form" method="post" action="<?php echo str_replace( '%7E', '~', $_SERVER['REQUEST_URI'] ); ?>">
        <h4>E-mail'ы для рассылки</h4>
        <input type="hidden" name="<?= $hidden_field_name; ?>" value="Y">
        <input type="text" id="email1" name="<?= $data_field_name1; ?>" value="<?= $email1_val; ?>"
               placeholder="Введите Email для рассылки" class="styled-inp">
        <input type="text" id="email2" name="<?= $data_field_name2; ?>" value="<?= $email2_val; ?>"
               placeholder="Введите Email для рассылки" class="styled-inp">
		<?/*
    <input type="text" id="email3" name="<?= $data_field_name3; ?>" value="<?= $field_email3_val ? $field_email3_val : $email3_val; ?>"
       placeholder="Введите Email для рассылки" class="styled-inp">
    */ ?>

        <h4>От кого:</h4>
		<?/*
    <input type="text" id="efrom" name="<?= $data_field_efrom; ?>" value="<?= $field_efrom_val ? $field_efrom_val : $efrom_val; ?>"
           placeholder="Введите Email для обратной связи" class="styled-inp">
    */ ?>
        <input type="text" id="cfrom" name="<?= $data_field_cfrom; ?>"
               value="<?= $field_cfrom_val ? $field_cfrom_val : $cfrom_val; ?>"
               placeholder="Введите название компании" class="styled-inp">
        <p class="submit">
            <input type="submit" name="submit" class="button-primary" value="Сохранить"/>
        </p>
    </form>
	<?
}

function debug( $var ) {
	echo '<pre>' . print_r( $var, true ) . '</pre>';
}

/**
 * Хлебные крошки для WordPress (breadcrumbs)
 *
 * @param string [$sep  = '']      Разделитель. По умолчанию ' » '
 * @param array  [$l10n = array()] Для локализации. См. переменную $default_l10n.
 * @param array  [$args = array()] Опции. См. переменную $def_args
 *
 * @return string Выводит на экран HTML код
 *
 * version 3.3.2
 */
function kama_breadcrumbs( $sep = ' » ', $l10n = array(), $args = array() ) {
	$kb = new Kama_Breadcrumbs;
	echo $kb->get_crumbs( $sep, $l10n, $args );
}

class Kama_Breadcrumbs {

	public $arg;

	// Локализация
	static $l10n = array(
		'home'       => 'Главная',
		'paged'      => 'Страница %d',
		'_404'       => 'Ошибка 404',
		'search'     => 'Результаты поиска по запросу - <b>%s</b>',
		'author'     => 'Архив автора: <b>%s</b>',
		'year'       => 'Архив за <b>%d</b> год',
		'month'      => 'Архив за: <b>%s</b>',
		'day'        => '',
		'attachment' => 'Медиа: %s',
		'tag'        => 'Записи по метке: <b>%s</b>',
		'tax_tag'    => '%1$s из "%2$s" по тегу: <b>%3$s</b>',
		// tax_tag выведет: 'тип_записи из "название_таксы" по тегу: имя_термина'.
		// Если нужны отдельные холдеры, например только имя термина, пишем так: 'записи по тегу: %3$s'
	);

	// Параметры по умолчанию
	static $args = array(
		'on_front_page'   => true,
		// выводить крошки на главной странице
		'show_post_title' => true,
		// показывать ли название записи в конце (последний элемент). Для записей, страниц, вложений
		'show_term_title' => true,
		// показывать ли название элемента таксономии в конце (последний элемент). Для меток, рубрик и других такс
		'title_patt'      => '<li class="kb_title"><li><a href="#">%s</a></li></li>',
		// шаблон для последнего заголовка. Если включено: show_post_title или show_term_title
		'last_sep'        => true,
		// показывать последний разделитель, когда заголовок в конце не отображается
		'markup'          => 'schema.org',
		// 'markup' - микроразметка. Может быть: 'rdf.data-vocabulary.org', 'schema.org', '' - без микроразметки
		// или можно указать свой массив разметки:
		// array( 'wrappatt'=>'<div class="kama_breadcrumbs">%s</div>', 'linkpatt'=>'<li><a href="%s">%s</a></li>', 'sep_after'=>'', )
		'priority_tax'    => array( 'category' ),
		// приоритетные таксономии, нужно когда запись в нескольких таксах
		'priority_terms'  => array(),
		// 'priority_terms' - приоритетные элементы таксономий, когда запись находится в нескольких элементах одной таксы одновременно.
		// Например: array( 'category'=>array(45,'term_name'), 'tax_name'=>array(1,2,'name') )
		// 'category' - такса для которой указываются приор. элементы: 45 - ID термина и 'term_name' - ярлык.
		// порядок 45 и 'term_name' имеет значение: чем раньше тем важнее. Все указанные термины важнее неуказанных...
		'nofollow'        => false,
		// добавлять rel=nofollow к ссылкам?

		// служебные
		'sep'             => '',
		'linkpatt'        => '',
		'pg_end'          => '',
	);

	function get_crumbs( $sep, $l10n, $args ) {
		global $post, $wp_query, $wp_post_types;

		self::$args['sep'] = $sep;

		// Фильтрует дефолты и сливает
		$loc = (object) array_merge( apply_filters( 'kama_breadcrumbs_default_loc', self::$l10n ), $l10n );
		$arg = (object) array_merge( apply_filters( 'kama_breadcrumbs_default_args', self::$args ), $args );

		$arg->sep = '<span class="kb_sep">' . $arg->sep . '</span>'; // дополним

		// упростим
		$sep       = &$arg->sep;
		$this->arg = &$arg;

		// микроразметка ---
		if ( 1 ) {
			$mark = &$arg->markup;

			// Разметка по умолчанию
			if ( ! $mark ) {
				$mark = array(
					'wrappatt'  => '<div class="container"><ul class="bread-crumbs fl-row-aic">%s</ul></div>',
					'linkpatt'  => '<li><a href="%s">%s</a></li>',
					'sep_after' => '',
				);
			} // rdf
            elseif ( $mark === 'rdf.data-vocabulary.org' ) {
				$mark = array(
					'wrappatt'  => '<div class="kama_breadcrumbs" prefix="v: http://rdf.data-vocabulary.org/#">%s</div>',
					'linkpatt'  => '<li typeof="v:Breadcrumb"><li><a href="%s" rel="v:url" property="v:title">%s</a></li>',
					'sep_after' => '</li>', // закрываем span после разделителя!
				);
			} // schema.org
            elseif ( $mark === 'schema.org' ) {
				$mark = array(
					'wrappatt'  => '<div class="container"><ul class="bread-crumbs fl-row-aic" itemscope itemtype="http://schema.org/BreadcrumbList">%s</ul></div>',
					'linkpatt'  => '<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><li><a href="%s" itemprop="item"><span itemprop="name">%s</span></a></li></li>',
					'sep_after' => '',
				);
			} elseif ( ! is_array( $mark ) ) {
				die( __CLASS__ . ': "markup" parameter must be array...' );
			}

			$wrappatt      = $mark['wrappatt'];
			$arg->linkpatt = $arg->nofollow ? str_replace( '<a ', '<a rel="nofollow"', $mark['linkpatt'] ) : $mark['linkpatt'];
			$arg->sep      .= $mark['sep_after'] . "\n";
		}

		$linkpatt = $arg->linkpatt; // упростим

		$q_obj = get_queried_object();

		// может это архив пустой таксы?
		$ptype = null;
		if ( empty( $post ) ) {
			if ( isset( $q_obj->taxonomy ) ) {
				$ptype = &$wp_post_types[ get_taxonomy( $q_obj->taxonomy )->object_type[0] ];
			}
		} else {
			$ptype = &$wp_post_types[ $post->post_type ];
		}

		// paged
		$arg->pg_end = '';
		if ( ( $paged_num = get_query_var( 'paged' ) ) || ( $paged_num = get_query_var( 'page' ) ) ) {
			$arg->pg_end = $sep . sprintf( $loc->paged, (int) $paged_num );
		}

		$pg_end = $arg->pg_end; // упростим

		$out = '';

		if ( is_front_page() ) {
			return $arg->on_front_page ? sprintf( $wrappatt, ( $paged_num ? sprintf( $linkpatt, get_home_url(), $loc->home ) . $pg_end : $loc->home ) ) : '';
		} // страница записей, когда для главной установлена отдельная страница.
        elseif ( is_home() ) {
			$out = $paged_num ? ( sprintf( $linkpatt, get_permalink( $q_obj ), esc_html( $q_obj->post_title ) ) . $pg_end ) : esc_html( $q_obj->post_title );
		} elseif ( is_404() ) {
			$out = $loc->_404;
		} elseif ( is_search() ) {
			$out = sprintf( $loc->search, esc_html( $GLOBALS['s'] ) );
		} elseif ( is_author() ) {
			$tit = sprintf( $loc->author, esc_html( $q_obj->display_name ) );
			$out = ( $paged_num ? sprintf( $linkpatt, get_author_posts_url( $q_obj->ID, $q_obj->user_nicename ) . $pg_end, $tit ) : $tit );
		} elseif ( is_year() || is_month() || is_day() ) {
			$y_url = get_year_link( $year = get_the_time( 'Y' ) );

			if ( is_year() ) {
				$tit = sprintf( $loc->year, $year );
				$out = ( $paged_num ? sprintf( $linkpatt, $y_url, $tit ) . $pg_end : $tit );
			} // month day
			else {
				$y_link = sprintf( $linkpatt, $y_url, $year );
				$m_url  = get_month_link( $year, get_the_time( 'm' ) );

				if ( is_month() ) {
					$tit = sprintf( $loc->month, get_the_time( 'F' ) );
					$out = $y_link . $sep . ( $paged_num ? sprintf( $linkpatt, $m_url, $tit ) . $pg_end : $tit );
				} elseif ( is_day() ) {
					$m_link = sprintf( $linkpatt, $m_url, get_the_time( 'F' ) );
					$out    = $y_link . $sep . $m_link . $sep . get_the_time( 'l' );
				}
			}
		} // Древовидные записи
        elseif ( is_singular() && $ptype->hierarchical ) {
			$out = $this->_add_title( $this->_page_crumbs( $post ), $post );
		} // Таксы, плоские записи и вложения
		else {
			$term = $q_obj; // таксономии

			// определяем термин для записей (включая вложения attachments)
			if ( is_singular() ) {
				// изменим $post, чтобы определить термин родителя вложения
				if ( is_attachment() && $post->post_parent ) {
					$save_post = $post; // сохраним
					$post      = get_post( $post->post_parent );
				}

				// учитывает если вложения прикрепляются к таксам древовидным - все бывает :)
				$taxonomies = get_object_taxonomies( $post->post_type );
				// оставим только древовидные и публичные, мало ли...
				$taxonomies = array_intersect( $taxonomies, get_taxonomies( array(
					'hierarchical' => true,
					'public'       => true
				) ) );

				if ( $taxonomies ) {
					// сортируем по приоритету
					if ( ! empty( $arg->priority_tax ) ) {
						usort( $taxonomies, function ( $a, $b ) use ( $arg ) {
							$a_index = array_search( $a, $arg->priority_tax );
							if ( $a_index === false ) {
								$a_index = 9999999;
							}

							$b_index = array_search( $b, $arg->priority_tax );
							if ( $b_index === false ) {
								$b_index = 9999999;
							}

							return ( $b_index === $a_index ) ? 0 : ( $b_index < $a_index ? 1 : - 1 ); // меньше индекс - выше
						} );
					}

					// пробуем получить термины, в порядке приоритета такс
					foreach ( $taxonomies as $taxname ) {
						if ( $terms = get_the_terms( $post->ID, $taxname ) ) {
							// проверим приоритетные термины для таксы
							$prior_terms = &$arg->priority_terms[ $taxname ];
							if ( $prior_terms && count( $terms ) > 2 ) {
								foreach ( (array) $prior_terms as $term_id ) {
									$filter_field = is_numeric( $term_id ) ? 'term_id' : 'slug';
									$_terms       = wp_list_filter( $terms, array( $filter_field => $term_id ) );

									if ( $_terms ) {
										$term = array_shift( $_terms );
										break;
									}
								}
							} else {
								$term = array_shift( $terms );
							}

							break;
						}
					}
				}

				if ( isset( $save_post ) ) {
					$post = $save_post;
				} // вернем обратно (для вложений)
			}

			// вывод

			// все виды записей с терминами или термины
			if ( $term && isset( $term->term_id ) ) {
				$term = apply_filters( 'kama_breadcrumbs_term', $term );

				// attachment
				if ( is_attachment() ) {
					if ( ! $post->post_parent ) {
						$out = sprintf( $loc->attachment, esc_html( $post->post_title ) );
					} else {
						if ( ! $out = apply_filters( 'attachment_tax_crumbs', '', $term, $this ) ) {
							$_crumbs    = $this->_tax_crumbs( $term, 'self' );
							$parent_tit = sprintf( $linkpatt, get_permalink( $post->post_parent ), get_the_title( $post->post_parent ) );
							$_out       = implode( $sep, array( $_crumbs, $parent_tit ) );
							$out        = $this->_add_title( $_out, $post );
						}
					}
				} // single
                elseif ( is_single() ) {
					if ( ! $out = apply_filters( 'post_tax_crumbs', '', $term, $this ) ) {
						$_crumbs = $this->_tax_crumbs( $term, 'self' );
						$out     = $this->_add_title( $_crumbs, $post );
					}
				} // не древовидная такса (метки)
                elseif ( ! is_taxonomy_hierarchical( $term->taxonomy ) ) {
					// метка
					if ( is_tag() ) {
						$out = $this->_add_title( '', $term, sprintf( $loc->tag, esc_html( $term->name ) ) );
					} // такса
                    elseif ( is_tax() ) {
						$post_label = $ptype->labels->name;
						$tax_label  = $GLOBALS['wp_taxonomies'][ $term->taxonomy ]->labels->name;
						$out        = $this->_add_title( '', $term, sprintf( $loc->tax_tag, $post_label, $tax_label, esc_html( $term->name ) ) );
					}
				} // древовидная такса (рибрики)
				else {
					if ( ! $out = apply_filters( 'term_tax_crumbs', '', $term, $this ) ) {
						$_crumbs = $this->_tax_crumbs( $term, 'parent' );
						$out     = $this->_add_title( $_crumbs, $term, esc_html( $term->name ) );
					}
				}
			} // влоежния от записи без терминов
            elseif ( is_attachment() ) {
				$parent      = get_post( $post->post_parent );
				$parent_link = sprintf( $linkpatt, get_permalink( $parent ), esc_html( $parent->post_title ) );
				$_out        = $parent_link;

				// вложение от записи древовидного типа записи
				if ( is_post_type_hierarchical( $parent->post_type ) ) {
					$parent_crumbs = $this->_page_crumbs( $parent );
					$_out          = implode( $sep, array( $parent_crumbs, $parent_link ) );
				}

				$out = $this->_add_title( $_out, $post );
			} // записи без терминов
            elseif ( is_singular() ) {
				$out = $this->_add_title( '', $post );
			}
		}

		// замена ссылки на архивную страницу для типа записи
		$home_after = apply_filters( 'kama_breadcrumbs_home_after', '', $linkpatt, $sep, $ptype );

		if ( '' === $home_after ) {
			// Ссылка на архивную страницу типа записи для: отдельных страниц этого типа; архивов этого типа; таксономий связанных с этим типом.
			if ( $ptype && $ptype->has_archive && ! in_array( $ptype->name, array( 'post', 'page', 'attachment' ) )
			     && ( is_post_type_archive() || is_singular() || ( is_tax() && in_array( $term->taxonomy, $ptype->taxonomies ) ) )
			) {
				$pt_title = $ptype->labels->name;

				// первая страница архива типа записи
				if ( is_post_type_archive() && ! $paged_num ) {
					$home_after = sprintf( $this->arg->title_patt, $pt_title );
				} // singular, paged post_type_archive, tax
				else {
					$home_after = sprintf( $linkpatt, get_post_type_archive_link( $ptype->name ), $pt_title );

					$home_after .= ( ( $paged_num && ! is_tax() ) ? $pg_end : $sep ); // пагинация
				}
			}
		}

		$before_out = sprintf( $linkpatt, home_url(), $loc->home ) . ( $home_after ? $sep . $home_after : ( $out ? $sep : '' ) );

		$out = apply_filters( 'kama_breadcrumbs_pre_out', $out, $sep, $loc, $arg );

		$out = sprintf( $wrappatt, $before_out . $out );

		return apply_filters( 'kama_breadcrumbs', $out, $sep, $loc, $arg );
	}

	function _page_crumbs( $post ) {
		$parent = $post->post_parent;

		$crumbs = array();
		while ( $parent ) {
			$page     = get_post( $parent );
			$crumbs[] = sprintf( $this->arg->linkpatt, get_permalink( $page ), esc_html( $page->post_title ) );
			$parent   = $page->post_parent;
		}

		return implode( $this->arg->sep, array_reverse( $crumbs ) );
	}

	function _tax_crumbs( $term, $start_from = 'self' ) {
		$termlinks = array();
		$term_id   = ( $start_from === 'parent' ) ? $term->parent : $term->term_id;
		while ( $term_id ) {
			$term        = get_term( $term_id, $term->taxonomy );
			$termlinks[] = sprintf( $this->arg->linkpatt, get_term_link( $term ), esc_html( $term->name ) );
			$term_id     = $term->parent;
		}

		if ( $termlinks ) {
			return implode( $this->arg->sep, array_reverse( $termlinks ) ) /*. $this->arg->sep*/ ;
		}

		return '';
	}

	// добалвяет заголовок к переданному тексту, с учетом всех опций. Добавляет разделитель в начало, если надо.
	function _add_title( $add_to, $obj, $term_title = '' ) {
		$arg        = &$this->arg; // упростим...
		$title      = $term_title ? $term_title : esc_html( $obj->post_title ); // $term_title чиститься отдельно, теги моугт быть...
		$show_title = $term_title ? $arg->show_term_title : $arg->show_post_title;

		// пагинация
		if ( $arg->pg_end ) {
			$link   = $term_title ? get_term_link( $obj ) : get_permalink( $obj );
			$add_to .= ( $add_to ? $arg->sep : '' ) . sprintf( $arg->linkpatt, $link, $title ) . $arg->pg_end;
		} // дополняем - ставим sep
        elseif ( $add_to ) {
			if ( $show_title ) {
				$add_to .= $arg->sep . sprintf( $arg->title_patt, $title );
			} elseif ( $arg->last_sep ) {
				$add_to .= $arg->sep;
			}
		} // sep будет потом...
        elseif ( $show_title ) {
			$add_to = sprintf( $arg->title_patt, $title );
		}

		return $add_to;
	}

}

add_filter( 'excerpt_length', function () {
	return 10;
} );
add_filter( 'excerpt_more', function ( $more ) {
	return '...';
} );


/**
 * Load WooCommerce compatibility file.
 */
if ( class_exists( 'WooCommerce' ) ) {
	require get_template_directory() . '/inc/woocommerce.php';
}

remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20 );
remove_action( 'woocommerce_before_single_product_summary', 'woocommerce_show_product_images', 20 );
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_price', 10 );
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_add_to_cart', 30 );
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40 );
remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_product_data_tabs', 10 );
remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20 );


remove_action( 'woocommerce_before_shop_loop', 'woocommerce_output_all_notices', 10 );
remove_action( 'woocommerce_before_shop_loop', 'woocommerce_result_count', 20 );
remove_action( 'woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30 );


/*
 * product_breadcrumbs_func()
 */
function product_breadcrumbs_func() {
	if ( function_exists( 'kama_breadcrumbs' ) ) {
		kama_breadcrumbs( '' );
	}
}

add_action( 'woocommerce_before_main_content', 'product_breadcrumbs_func', 20 );


/*
 * product_desc_func()
 */
function product_desc_func() {
	ob_start();

	global $product;
	$heading = apply_filters( 'woocommerce_product_description_heading', __( 'Description', 'woocommerce' ) );
	?>
    <section class="seo-text">
        <div class="container">

			<?php if ( $heading ) : ?>
                <h2><?php echo esc_html( $heading ); ?></h2>
			<?php endif; ?>

            <div class="seo-text__visible">

				<?php the_content( $product->ID ); ?>

            </div> <!-- seo-text__visible -->

        </div> <!--contaienr -->
    </section>
	<?php
	$output_string = ob_get_contents();
	ob_end_clean();

	echo $output_string;

}

add_action( 'woocommerce_after_single_product_summary', 'product_desc_func' );


/*
 * product_stock_status_func()
 */
function product_stock_status_func() {
	global $product;
	if ( $product->stock_status == 'instock' ) {
		echo '<div class="product-item__available">В наличии</div>';
	} else {
		echo '<div class="product-item__available product-item__available_not">Нет в наличии</div>';
	}
}

add_action( 'woocommerce_single_product_summary', 'product_stock_status_func', 1 );


/*
 * product_attributes_func()
 */
function product_attributes_func() {
	global $product;

	$attributes = $product->get_attributes();

	if ( ! $attributes ) {

		return;

	}

	$display_result = '';


	foreach ( $attributes as $attribute ) {

		if ( $attribute->get_variation() ) {
			continue;
		}

		$name = $attribute->get_name();

		if ( $attribute->is_taxonomy() ) {

			$terms = wp_get_post_terms( $product->get_id(), $name, 'all' );

			$njengahtax = $terms[0]->taxonomy;

			$njengah_object_taxonomy = get_taxonomy( $njengahtax );

			if ( isset ( $njengah_object_taxonomy->labels->singular_name ) ) {

				$tax_label = $njengah_object_taxonomy->labels->singular_name;

			} elseif ( isset( $njengah_object_taxonomy->label ) ) {

				$tax_label = $njengah_object_taxonomy->label;

				if ( 0 === strpos( $tax_label, 'Product ' ) ) {

					$tax_label = substr( $tax_label, 8 );

				}

			}

			$display_result .= '<ul class="product__property">';
			$display_result .= '<li><span>' . $tax_label . ':</span> ';

			$tax_terms = array();

			foreach ( $terms as $term ) {

				$single_term = esc_html( $term->name );

				array_push( $tax_terms, $single_term );

			}

			$display_result .= implode( ', ', $tax_terms ) . '</li>';
			$display_result .= '</ul>';

		} else {
			$display_result .= '<ul class="product__property">';
			$display_result .= '<li><span>' . $name . ':</span> ';
			$display_result .= esc_html( implode( ', ', $attribute->get_options() ) ) . '</li>';
			$display_result .= '</ul>';
		}

	}

	echo $display_result;

}

add_action( 'woocommerce_single_product_summary', 'product_attributes_func', 65 );

/*
 * product_buy_func()
 */
function product_buy_func() {
	$price = get_post_meta( get_the_ID(), '_regular_price', true );
	$sale  = get_post_meta( get_the_ID(), '_price', true );
	if ( ! empty( $sale ) ) {
		echo '<div class="product__price old">' . $price . ' ₽</div>';
		echo '<div class="product__price"> ' . $sale . ' ₽</div>';
		echo '<a href="#" class="btn btn-large" data-izimodal-open="#modalRequizOrder">Получить консультацию</a>';
	} else {
		echo '<div class="product__price">' . $price . ' ₽</div>';
		echo '<a href="#" class="btn btn-large" data-izimodal-open="#modalRequizOrder">Получить консультацию</a>';
	}
}

add_action( 'woocommerce_single_product_summary', 'product_buy_func', 65 );

/*
 * product_image_func()
 */
function product_image_func() {
	global $product;
	echo get_the_post_thumbnail( $product->ID );
}

add_action( 'woocommerce_before_single_product_summary', 'product_image_func', 20 );


/*
 * product_modification_func()
 */
function product_modification_func() {
	require get_template_directory() . '/inc/parts/modifications.php';
}

add_action( 'woocommerce_after_single_product_summary', 'product_modification_func' );


/*
 * product_brand_func()
 */
function product_brand_func() {
	require get_template_directory() . '/inc/brands.php';
}

add_action( 'woocommerce_after_single_product_summary', 'product_brand_func' );


/*
 * woocommerce_product_archive_description()
 */
function woocommerce_product_archive_description() {
	// Don't display the description on search results page.
	if ( is_search() ) {
		return;
	}

	if ( is_post_type_archive( 'product' ) && in_array( absint( get_query_var( 'paged' ) ), array( 0, 1 ), true ) ) {
		$shop_page = get_post( wc_get_page_id( 'shop' ) );

		if ( $shop_page ) {

			$allowed_html = wp_kses_allowed_html( 'post' );

			// This is needed for the search product block to work.
			$allowed_html = array_merge(
				$allowed_html,
				array(
					'form' => array(
						'action'         => true,
						'accept'         => true,
						'accept-charset' => true,
						'enctype'        => true,
						'method'         => true,
						'name'           => true,
						'target'         => true,
					),

					'input' => array(
						'type'        => true,
						'id'          => true,
						'class'       => true,
						'placeholder' => true,
						'name'        => true,
						'value'       => true,
					),

					'button' => array(
						'type'  => true,
						'class' => true,
						'label' => true,
					),

					'svg'  => array(
						'hidden'    => true,
						'role'      => true,
						'focusable' => true,
						'xmlns'     => true,
						'width'     => true,
						'height'    => true,
						'viewbox'   => true,
					),
					'path' => array(
						'd' => true,
					),
				)
			);

			$description = wc_format_content( wp_kses( $shop_page->post_content, $allowed_html ) );
			if ( $description ) { ?>
                <section class="seo-text">
                    <div class="container">
                        <h2>Какие ошибки бывают, при выборе котла отопления и системы отопления для частного дома?</h2>
                        <div class="seo-text__visible seo-text__visible_off"><?= $description ?></div>
                    </div>
                </section>
			<?php }
		}
	}
}

add_action( 'woocommerce_archive_description', 'product_brand_func', 5 );
add_action( 'woocommerce_archive_description', 'woocommerce_product_archive_description', 10 );


/*
 * removepanel woo into customizer
 */

function mytheme_customize_register( $wp_customize ) {
	$wp_customize->remove_panel( 'woocommerce' );

}

add_action( 'customize_register', 'mytheme_customize_register', 99 );


/*
 * sidebar
 */
function register_my_widgets() {
	register_sidebar( array(
		'name'          => "Правая боковая панель сайта",
		'id'            => 'right-sidebar',
		'description'   => 'Эти виджеты будут показаны в правой колонке сайта',
		'before_widget' => '<div id="%1$s" class="widget filter__group %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<<div class="filter__label">',
		'after_title'   => '</div>'
	) );
}

add_action( 'widgets_init', 'register_my_widgets' );


// Disables the block editor from managing widgets.
add_filter( 'gutenberg_use_widgets_block_editor', '__return_false', 100 );
add_filter( 'use_widgets_block_editor', '__return_false' );


function dco_pre_get_posts($query) {
    if (!is_admin() && $query->is_main_query()) {
        if ($query->is_search) {
            $query->set('post_type', 'product');
        }
    }
}

add_action('pre_get_posts', 'dco_pre_get_posts');