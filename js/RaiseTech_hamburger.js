
//windowサイズによってheader画像を切り替える。frontページ

//const { on } = require("gulp");??

$(function() {
    // 置換の対象とするclass属性。
    var $elem = $('.p-header__image--js--iswitch');
    // 置換の対象とするsrc属性の末尾の文字列。
    var sp = '_sp';
    var tbpc = '_tbpc';
    // 画像を切り替えるウィンドウサイズ。
    var replaceWidth = 768;
  
    function imageSwitch() {
      // ウィンドウサイズを取得する。
      var windowWidth = parseInt(window.innerWidth);
  
      // ページ内にあるすべての`.js-image-switch`に適応される。
      $elem.each(function() {
        var $this = $(this);
        // ウィンドウサイズが768px以上であれば_spを_pcに置換する。
        if(windowWidth >= replaceWidth) {
          $this.attr('src', $this.attr('src').replace(sp, tbpc));
        // ウィンドウサイズが768px未満であれば_pcを_spに置換する。
        } else {
          $this.attr('src', $this.attr('src').replace(tbpc, sp));
        }
      });
    }

    imageSwitch();  
    // 動的なリサイズは操作後0.1秒経ってから処理を実行する。
    var resizeTimer;
    $(window).on('resize', function() {
      clearTimeout(resizeTimer);
      resizeTimer = setTimeout(function() {
        imageSwitch();
      }, 100);
    });
  });

  //menuの開閉
  $(function( ) {
    $(".p-header__menu").on("click",function() {
    $(".p-nav").addClass("p-nav-is-open").removeClass("p-nav");
    $(".p-sidemenu__backgroundcolor").addClass("p-sidemenu__backgroundcolor-is-active").removeClass("p-sidemenu__backgroundcolor");
    $(".p-nav__container").addClass("p-nav__container").removeClass("p-nav__container");
    $(".l-wrapper__main").addClass("l-wrapper__main-is-hidden").removeClass("l-wrapper__main");
    $(".l-footer").addClass("l-footer-is-hidden").removeClass("l-footer");
    });
    $(".p-nav__btn").on("click",function() {
    $(".p-nav-is-open").addClass("p-nav").removeClass("p-nav-is-open");
    $(".p-sidemenu__backgroundcolor-is-active").addClass("p-sidemenu__backgroundcolor").removeClass("p-sidemenu__backgroundcolor-is-active");
    $(".p-nav__container-is-open").addClass("p-nav__container").removeClass("p-nav__container-is-open");
    $(".l-wrapper__main-is-hidden").addClass("l-wrapper__main").removeClass("l-wrapper__main-is-hidden");
    $(".l-footer-is-hidden").addClass("l-footer").removeClass("l-footer-is-hidden");
  });
});