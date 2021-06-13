<!DOCTYPE html>
<html lang="<?php language_attributes();?>">
    <head>
        <meta charset="UTF-8">
        <meta name="description" content="RaiseTechハンバーガーサイト">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php wp_head(); ?>
    </head>
        <body <?php body_class(); ?>>
        <?php wp_body_open(); ?>
            <!--サイドメニューの半透明黒部分-->
            <div class="p-sidemenu__background">
                <div class="p-sidemenu__backgroundcolor"></div>
            </div>
            <!--footer以外を包むwrapper-->
            <div class="l-container">
            <!--サイドメニューを含まない部分-->
                <div class="l-wrapper__main">
                    <!--header部分　メニュー・サイト名～写真部分まで-->
                    <header class="l-header" role="banner">
                        <!--メニュー、タイトル、検索バーのwrapper　PCサイズ以外の時はすべて縦てで並べておき、PCサイズになったらメニューを非表示にして、このwrapper部分にflexをかけてメニューと検索バーを並べる-->
                        <div class="p-header__wrapper">
                            <!--メニュー部分-->
                            <div class="p-header__menu"><span>Menu</span></div> 
                            <!--タイトル部分 aタグでhomeへ飛ぶようににphpを記載している-->
                            <h1 class="c-header__title"><a href="<?php echo esc_url(home_url('/'));?>"><?php bloginfo('name');?></a></h1>
                            <!--検索バー　後で虫眼鏡のアイコンを入れる　サイト名の右にflexか何かで並べる必要があるため、検索バーをサイト名の子要素としているWPのプラグインらしいので暫定的にコメントアウト-->
                            <div class=c-searchform>
                                <div>
                                    <?php get_search_form();?>
                            <!--検索バーまで-->
                                </div>
                            </div>
                        <!--メニュー・タイトル・検索バーのwrapper-->
                        </div>
                        <!--p_header__image〇〇 imgというcssになっているので、divタグから条件分岐をする iswitch = image-switch-->
                        <!--読み込むphpによってheaderの画像を変える条件分岐-->
                        <?php if(is_front_page() && is_home()): ?>
                        <div class="p-header__image">
                            <img class="p-header__image--js--iswitch" src="<?php echo esc_url(get_template_directory_uri()); ?>/image/front-page/front-page_header_sp.png" alt="ハンバーガー">
                            <p>ダミーサイト</p>
                        </div>
                        <!--アーカイブページの場合-->
                        <?php elseif(is_archive()) :?>
                        <div class="p-header__image--archive">
                            <img class="p-header__image--archive--js--iswitch" src="<?php echo esc_url(get_template_directory_uri()); ?>/image/archive-page/archive-page-header_sptb.png" alt="ハンバーガー">
                            <div class="p-header__image--titlebox">
                                <p class="p-header__title--archive">Menu:
                                <!--カテゴリスラッグの表示 -->
                                <span class="p-header__type--archive">
                                <?php
                                $cat = get_the_category();
                                $cat_name = $cat[2]->cat_name;
                                //echo $cat_name;
                                //$cat_name = $cat[3]->cat_name;
                                //echo $cat_name;
                                if($cat_name === 'バーガー'){
                                $cat_name = $cat[3]->cat_name;
                                echo $cat_name;
                                }else if($cat_name === 'ドリンク'){ 
                                $cat_name = $cat[3]->cat_name;
                                echo $cat_name; 
                                }else if($cat_name === 'サイド'){ 
                                $cat_name = $cat[3]->cat_name;
                                echo $cat_name; 
                                }else{
                                $cat_name = $cat[2]->cat_name;
                                echo $cat_name;
                                }
                                ?>
                                </span>
                                </p>
                            </div>
                        </div>
                        <!--search phpの場合 -->
                        <?php elseif(is_search()) :?>
                        <div class="p-header__image--archive">
                            <img class="p-header__image--archive--js--iswitch" src="<?php echo esc_url(get_template_directory_uri()); ?>/image/archive-page/archive-page-header_sptb.png" alt="ハンバーガー">
                            <div class="p-header__image--titlebox">
                                <p class="p-header__title--archive">Search:
                                    <span class="p-header__type--archive"><?php the_search_query(); ?>
                        <!--single phpの場合 -->
                        <?php elseif(is_single()) :?>
                        <div class="p-header__image--single">
                            <img class="p-header__image--single--js--iswitch" src="<?php echo esc_url(get_template_directory_uri()); ?>/image/single-page/single-page-header-hamburger_sp.png" alt="ハンバーガー">
                            <div class="p-header__image--titlebox">
                                <p class="p-header__title--single">h1<span><?php echo get_the_title(); ?></span></p>
                            </div>
                        </div>
                        <?php elseif(is_page()) :?>
                        <div class="p-header__image--single">
                            <img class="p-header__image--single--js--iswitch" src="<?php echo esc_url(get_template_directory_uri()); ?>/image/about-shop-page/about-shop-page-header_sp.png" alt="ハンバーガー">
                            <div class="p-header__image--titlebox">
                                <p class="p-header__title--single">ショップについて</p>
                            </div>
                        </div>
                        <?php else: ?>
                        <div class="p-header__image">
                            <img class="p-header__image--js--iswitch" src="<?php echo esc_url(get_template_directory_uri()); ?>/" alt="ハンバーガー">
                        <?php endif; ?>
                    </header>
                    <!--header部分終了 -->