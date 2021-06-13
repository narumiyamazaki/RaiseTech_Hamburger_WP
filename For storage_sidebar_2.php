<!--ナビゲーションメニューのメニューが書いてある部分-->
<nav class="p-nav__body">
                <div class="p-nav__burger">バーガー</div>
                    <ul class="p-nav__burgermenu">
                        <!--ループの条件-->
                        <?php
                        $cat_posts = get_posts(array(
                            'post_type' => 'post', // 投稿タイプ
                            'category' => get_cat_ID('hamburger'), // カテゴリIDを番号で指定する場合
                            'order' => 'ASC', // 昇順・降順
                            'posts_per_page' => -1 //表示件数の設定。設定しないと5件しか取得されない。
                        ));

                        global $post;
                        if($cat_posts): foreach($cat_posts as $post): setup_postdata($post); 
                        ?>
                        <!--ループはじめ-->
                        <!--チーズバーガーというタイトルの投稿がまとまっているページへのアーカイブ-->
                        <?php
                        $category_id = get_cat_ID( 'hamburger' );
                        $category_link = get_category_link( $category_id );
                        ?>
                        <li><a href="<?php echo esc_url($category_link); ?>"><?php the_title(); ?></a></il>
                        <!--アーカイブページへのリンク-->
                    <!-- ループおわり --> 
                    <?php endforeach; endif; wp_reset_postdata(); ?>
                    </ul>
                <div class="p-nav__side">サイド</div>
                    <ul class="p-nav__sidemenu">
                    <?php
                        $cat_posts = get_posts(array(
                            'post_type' => 'post', // 投稿タイプ
                            'category' => get_cat_ID('サイド'), // カテゴリIDを番号で指定する場合
                            'order' => 'DESC' // 昇順・降順
                        ));
                        global $post;
                        if($cat_posts): foreach($cat_posts as $post): setup_postdata($post); 
                        ?>
                        <!--ループはじめ-->
                        <!--記事タイトルの取得　アーカイブページはタグ毎にまとめる-->
                        <li><?php the_title(); ?><a href="<?php echo get_post_type_archive_link(''); ?>"></a></il>
                        <!--アーカイブページへのリンク-->
                    <!-- ループおわり --> 
                    <?php endforeach; endif; wp_reset_postdata(); ?>
                    </ul>
                <div class="p-nav__drink">ドリンク</div>
                    <ul class="p-nav__drinkmenu">
                    <?php
                        $cat_posts = get_posts(array(
                            'post_type' => 'post', // 投稿タイプ
                            'category' => get_cat_ID('ドリンク'), // カテゴリIDを番号で指定する場合
                            'order' => 'DESC' // 昇順・降順
                        ));
                        global $post;
                        if($cat_posts): foreach($cat_posts as $post): setup_postdata($post); 
                        ?>
                        <!--ループはじめ-->
                        <!--記事タイトルの取得　アーカイブページはタグ毎にまとめる-->
                        <li><?php the_title(); ?><a href="<?php echo get_post_type_archive_link(''); ?>"></a></il>
                        <!-- ループおわり --> 
                    <?php endforeach; endif; wp_reset_postdata(); ?>
                    </ul>
            <!--navbody部分終了-->
            </nav>