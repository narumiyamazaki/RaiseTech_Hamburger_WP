<?php get_header();?>
                    <!--main(記事・map)部分-->
                    <main class="l-main">
                        <!--article部分　take outとeat in-->
                        <article class="l-article">
                            <!--take out部分　画像をdivタグのbackgroundに設定し、見出しと、小見出しを2つ付ける -->
                            <div class="p-article__takeout">
                                <!--見出し部分 cssでtake outの下線部も再現できると思うのだが・・・？-->          
                            <!--固定ページのIDを取得-->
                            <?php // スラッグからIDを取得して表示
                            $page_ID = get_page_by_path('about'); // 投稿オブジェクトの取得
                            $page_ID = $page_ID->ID; // 投稿オブジェクトからIDを取得
                            ?>
                            <a href="<?php echo get_page_link($page_ID);?>">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/image/front-page/front-page_main_takeout.jpg">
                                <h2 class="p-heading">Take Out</h2>
                                    <div class="p-heading__wrapper">
                                        <div class="p-heading__block">
                                            <h3 class="p-heading__small">小見出しが入ります</h3>
                                            <p class="c-heading__small--text">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
                                        </div>
                                        <div class="p-heading__block">
                                            <h3 class="p-heading__small">小見出しが入ります</h3>
                                            <p class="c-heading__small--text">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <!--eat in 部分-->
                            <!--見出し部分 cssでtake outの下線部も再現できると思うのだが・・・？-->
                            <div class="p-article__eatin">
                            <?php // スラッグからIDを取得して表示
                                $page_ID = get_page_by_path('about'); // 投稿オブジェクトの取得
                                $page_ID = $page_ID->ID; // 投稿オブジェクトからIDを取得
                                ?>
                                <a href="<?php echo get_page_link($page_ID);?>">
                                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/image/front-page/front-page_main_eatin.jpg">
                                    <!--固定ページのIDを取得-->
                                    <h2 class="p-heading">Eat In</h2>
                                        <div class="p-heading__wrapper">
                                            <div class="p-heading__block">
                                                <h3 class="p-heading__small">小見出しが入ります</h3>
                                                <p class="c-heading__small--text">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
                                            </div>
                                            <div class="p-heading__block">
                                                <h3 class="p-heading__small">小見出しが入ります</h3>
                                                <p class="c-heading__small--text">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
                                            </div>
                                        </div>
                            </div>
                        </article>
                        <!--aside部分-->
                        <aside class="p-aside">
                            <!--googlemap部分-->
                            <iframe class="p-aside__map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3241.747975472314!2d139.74323885099164!3d35.65858048010241!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188bbd9009ec09%3A0x481a93f0d2a409dd!2z5p2x5Lqs44K_44Ov44O8!5e0!3m2!1sja!2sjp!4v1613643288884!5m2!1sja!2sjp" width="600" height="350" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                                </iframe>
                                <!--地図全体-->
                                <div class="p-aside__cover">
                                    <!--半透明の2重になっている部分-->
                                    <div class="p-aside__cover2">
                                    <!--見出しとテキスト textboxは見出しと本文のpaddingなどをまとめて行うために必要？-->
                                        <div class="p-aside__textbox">
                                            <h2 class="p-aside__heading">見出しが入ります</h2>
                                            <div class="c-aside__text">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</div>
                                        </div>
                                    </div>
                                </div>
                        </aside>
                    <!--main部分(記事・map)終了-->
                    </main>
                <!--header＋mainのwrapper終了-->
                </div>
            <!--ボタン部分を含むナビゲーションメニュー全体-->
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
                </nav>
            </div>   
            <?php get_footer();?>
            <?php wp_footer(); ?>
        </body>
</html>