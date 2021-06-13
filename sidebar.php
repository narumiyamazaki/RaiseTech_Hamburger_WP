<!--サイドバー部分-->
<?php
  wp_nav_menu(array(
    'theme_location' => 'sidebar',
    //コンテナ部分をdivにするかnavにするか。デフォルトはdiv?
    'container' => 'nav',
    //コンテナ部分のクラス名
    'container_class' => 'p-nav__body'
    //カテゴリ名
    ))
?>