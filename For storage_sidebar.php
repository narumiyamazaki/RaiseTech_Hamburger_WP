<!--ナビゲーションメニューのメニューが書いてある部分-->
<nav class="p-nav__body">
                <div class="p-nav__burger">バーガー</div>
                    <ul class="p-nav__burgermenu">
                        <?php
                        // 指定したカテゴリーの ID を取得
                        $category_id = get_cat_ID( 'hamburger' );
                        // このカテゴリーの URL を取得
                        $category_link = get_category_link(2);
                        ?>
                        <!-- このカテゴリーへのリンクを出力 -->                                            
                        <a href="<?php echo esc_url( $category_link ); ?>" title="ハンバーガー">
                            <li>ハンバーガー</li>
                        </a>
                        <?php
                        $category_id = get_cat_ID( 'cheeseburger' );
                        $category_link = get_category_link(3);
                        ?>    
                        <a href="<?php echo esc_url( $category_link ); ?>" title="チーズバーガー">
                            <li>チーズバーガー</li>
                        </a>
                        <?php
                        $category_id = get_cat_ID( 'teriyakiburger' );
                        $category_link = get_category_link(4);
                        ?>    
                        <a href="<?php echo esc_url( $category_link ); ?>" title="テリヤキバーガー">
                            <li>テリヤキバーガー</li>
                        </a>
                        <?php
                        $category_id = get_cat_ID( 'avocadoburger' );
                        $category_link = get_category_link(5);
                        ?>    
                        <a href="<?php echo esc_url( $category_link ); ?>" title="アボカドバーガー">
                            <li>アボカドバーガー</li>
                        </a>
                        <?php
                        $category_id = get_cat_ID( 'fishburger' );
                        $category_link = get_category_link(6);
                        ?>    
                        <a href="<?php echo esc_url( $category_link ); ?>" title="フィッシュバーガー">
                            <li>フィッシュバーガー</li>
                        </a>
                        <?php
                        $category_id = get_cat_ID( 'baconburger' );
                        $category_link = get_category_link(7);
                        ?>    
                        <a href="<?php echo esc_url( $category_link ); ?>" title="ベーコンバーガー">
                            <li>ベーコンバーガー</li>
                        </a>
                        <?php
                        $category_id = get_cat_ID( 'chickenburger' );
                        $category_link = get_category_link(8);
                        ?>    
                        <a href="<?php echo esc_url( $category_link ); ?>" title="チキンバーガー">
                            <li>チキンバーガー</li>
                        </a>                                        
                    </ul>
                <div class="p-nav__side">サイド</div>
                    <ul class="p-nav__sidemenu">
                        <?php
                        $category_id = get_cat_ID( 'potato' );
                        $category_link = get_category_link(9);
                        ?>    
                        <a href="<?php echo esc_url( $category_link ); ?>" title="ポテト">
                            <li>ポテト</li>
                        </a>
                        <?php
                        $category_id = get_cat_ID( 'salad' );
                        $category_link = get_category_link(10);
                        ?>    
                        <a href="<?php echo esc_url( $category_link ); ?>" title="サラダ">
                            <li>サラダ</li>
                        </a>
                        <?php
                        $category_id = get_cat_ID( 'nugget' );
                        $category_link = get_category_link(11);
                        ?>    
                        <a href="<?php echo esc_url( $category_link ); ?>" title="ナゲット">
                            <li>ナゲット</li>
                        </a>
                        <?php
                        $category_id = get_cat_ID( 'corn' );
                        $category_link = get_category_link(12);
                        ?>    
                        <a href="<?php echo esc_url( $category_link ); ?>" title="コーン">
                            <li>コーン</li>
                        </a>
                    </ul>
                <div class="p-nav__drink">ドリンク</div>
                    <ul class="p-nav__drinkmenu">
                        <?php
                        $category_id = get_cat_ID( 'cola' );
                        $category_link = get_category_link(13);
                        ?>    
                        <a href="<?php echo esc_url( $category_link ); ?>" title="コーラ">
                            <li>コーラ</li>
                        </a>
                        <?php
                        $category_id = get_cat_ID( 'fanta' );
                        $category_link = get_category_link(14);
                        ?>    
                        <a href="<?php echo esc_url( $category_link ); ?>" title="ファンタ">
                            <li>ファンタ</li>
                        </a>
                        <?php
                        $category_id = get_cat_ID( 'orange' );
                        $category_link = get_category_link(15);
                        ?>    
                        <a href="<?php echo esc_url( $category_link ); ?>" title="オレンジ">
                            <li>オレンジ</li>
                        </a>
                        <?php
                        $category_id = get_cat_ID( 'apple' );
                        $category_link = get_category_link(16);
                        ?>    
                        <a href="<?php echo esc_url( $category_link ); ?>" title="アップル">
                            <li>アップル</li>
                        </a>
                        <?php
                        $category_id = get_cat_ID( 'tea' );
                        $category_link = get_category_link(17);
                        ?>    
                        <a href="<?php echo esc_url( $category_link ); ?>" title="紅茶">
                            <li>紅茶（Ice/Hot)</li>
                        </a>
                        <?php
                        $category_id = get_cat_ID( 'coffee' );
                        $category_link = get_category_link(18);
                        ?>    
                        <a href="<?php echo esc_url( $category_link ); ?>" title="コーヒー">
                            <li>コーヒー（Ice/Hot)</li>
                        </a>
                    </ul>
            <!--navbody部分終了-->
            </nav>