<!--
サイドバーから飛ぶのはカテゴリーページだから
本来であればアーカイブページ自体が必要ないのでは？
-->

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
                            <!--wrapperはメニューと写真をまとめる-->
                            <div class="p-article__archive--wrapper">
                            <?php
                            $cat_posts = get_posts(array(
                                'post_type' => 'post', // 投稿タイプ
                                'category' => get_query_var( 'cat' ), // カテゴリIDを自動で取得？
                                'posts_per_page' => 3, // 表示件数
                                'orderby' => 'date', // 表示順の基準
                                'order' => 'DESC' // 昇順・降順
                            ));
                            global $post;
                            if($cat_posts): foreach($cat_posts as $post): setup_postdata($post); 
                            ?>
                            <!-- ループはじめ -->
                            <h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
                            <p><?php the_category(', ') ?></p>
                            <p><?php the_time('Y/m/d') ?></p>
                            <p><?php the_excerpt(); ?></p>
                            <!-- ループおわり -->
                            
                            <?php endforeach; endif; wp_reset_postdata(); ?>
                                <img class="p-article__image--archive" src="image/archive-page/archive-page-article-burger.png" alt="美味しそうなハンバーガー">
                                <!--品目とボタン部分-->
                                <div class="p-article__textbox--archive">
                                    <h2 class="p-article__menu-name--archive">チーズバーガー</h2>
                                    <h3 class="p-article__heading--archive">小見出しが入ります</h3>
                                    <p class="p-article__textarea--archive">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
                                    <div class="u-position-relative">
                                        <button class="p-article__button">詳しく見る</button>
                                    </div>
                                </div>
                            </div>
                            <div class="p-article__archive--wrapper">
                                <!--wrapperはメニューと写真をまとめる-->
                                <img class="p-article__image--archive" src="image/archive-page/archive-page-article-burger.png" alt="美味しそうなハンバーガー">
                                <!--品目とボタン部分-->
                                <div class="p-article__textbox--archive">
                                    <h2 class="p-article__menu-name--archive">ダブルチーズバーガー</h2>
                                    <h3 class="p-article__heading--archive">小見出しが入ります</h3>
                                    <p class="p-article__textarea--archive">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
                                    <div class="u-position-relative">
                                        <button class="p-article__button">詳しく見る</button>
                                    </div>
                                </div>
                            </div>
                            <div class="p-article__archive--wrapper">
                                <!--wrapperはメニューと写真をまとめる-->
                                <img class="p-article__image--archive" src="image/archive-page/archive-page-article-burger.png" alt="美味しそうなハンバーガー">
                                <!--品目とボタン部分-->
                                <div class="p-article__textbox--archive">
                                    <h2 class="p-article__menu-name--archive">スペシャルチーズバーガー</h2>
                                    <h3 class="p-article__heading--archive">小見出しが入ります</h3>
                                    <p class="p-article__textarea--archive">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
                                    <div class="u-position-relative">
                                        <button class="p-article__button">詳しく見る</button>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </main>
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