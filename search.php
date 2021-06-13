<?php get_header();?>
                     <!--アーカイブ・小見出し・メニュー部分-->
                    <main class="l-main__archive">
                        <!--aside部分-->
                        <aside class="p-aside__textbox--archive">
                             <p class="p-aside__heading--archive">小見出しが入ります</h4>
                             <p class="p-aside__text--archive">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
                        </aside>
                        <!--article部分-->
                        <article class="p-article__archive">
                            <?php
                            $paged =  get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1;
                            $args = array(
                                'post_type'      => 'post', // 投稿タイプ
                                'posts_per_page' => 5, // 取得する投稿数
                                'paged' => $paged, //ページ番号
                                's' => $s, //URLパラメータの取得？
                            );
                            //$mypostsにner WP_query(args)とすることで、仮想配列の情報を渡している。
                            $myposts = new WP_query($args);
                            //$myposts(get_posts($args)の情報を1件1件グローバル変数$postに入れていっている)
                            if($myposts->have_posts()): while($myposts->have_posts()): $myposts->the_post(); //　グローバル変数$postを書き換え
                            ?>
                            <!-- ループはじめ -->
                            <!--wrapperはメニューと写真をまとめる-->
                            <div class="p-article__archive--wrapper">
                                <img class="p-article__image--archive" src="<?php the_post_thumbnail_url(); ?>" alt="美味しそうなハンバーガー">
                                <!--品目とボタン部分-->
                                <div class="p-article__textbox--archive">
                                    <h2 class="p-article__menu-name--archive"><?php the_title(); ?></h2>
                                    <h3 class="p-article__heading--archive"><?php get_index(); //ここで<h>を出力する ?></h3>
                                    <p class="p-article__textarea--archive"><?php $str = get_the_excerpt(); echo na_trim_words($str,60);?></p>
                                    <div class="u-position-relative">
                                        <button class="p-article__button"><a href="<?php the_permalink() ?>">詳しく見る</button></a>
                                    </div>
                                </div>
                            </div>
                            <!-- ループおわり -->
                            <?php endwhile; endif; wp_reset_postdata(); ?>
                        </article>
                    </main>
                    <?php
                            if(function_exists('wp_pagenavi')) {
                                wp_pagenavi(array('query' => $myposts));
                            }
                    ?>
                </div>
                <nav class="p-nav__container">
                    <div class="p-nav">
                        <button class="p-nav__btn">
                            <a href="javascript:void(0)"></a>
                                <span>Menu</span>
                        </button>
                        <!--ナビゲーションの背景の黒の透過部分等を再現するためのwrapper p-navに黒い部分を選択すると、ボタン部分まで黒くなってしまう。PCサイズ以外はp-nav---->
                        <div class="p-nav__wrapper">
                            <?php get_sidebar();?>
                        <!--nav--wrapper部分終了-->
                        </div>
                    <!--navのボタン部分とか-->
                    </div>
                <!--footer以外を包むwrapperの終了-->
                </div>
            </nav>
            <?php get_footer();?>
            <?php wp_footer(); ?>
    </body>
</html>
<?php
/*
Template Name: Search Page
*/
?>