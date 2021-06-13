
//windowサイズによってheader画像を切り替える。frontページ

//const { on } = require("gulp");??

$(function() {
    // 置換の対象とするclass属性。
   var $elem = $('.p-header__image--single--js--iswitch , .p-article__single--main-img--js--iswitch , .p-article__single--sub-img--js--iswitch , .p-article__single--bottom-img--js--iswitch , .p-section__single--img--js--iswitch');
    //var $elem = $('.p-header__image--single--js--iswitch');
    //var $elem = $('.p-article__single--main-img--js--iswitch');
    
    // 置換の対象とするsrc属性の末尾の文字列。
    var sp = '_sp';
    var tb = '_tb';
    var pc = '_pc';
    // 画像を切り替えるウィンドウサイズ。
    var replaceWidth_tb = 768;
    var replaceWidth_pc = 1024;
  
    function imageSwitch() {
      // ウィンドウサイズを取得する。
      var windowWidth = parseInt(window.innerWidth);
  
      // ページ内にあるすべての`.p-header__image--single--js--iswitch`に適応される。
      $elem.each(function() {
        var $this = $(this);
        // ウィンドウサイズが768px以上1024未満であれば_spを_tbに _pcを_tbに置換する。
        if(windowWidth >= replaceWidth_tb && windowWidth < replaceWidth_pc) {
          $this.attr('src', $this.attr('src').replace(sp, tb));
          $this.attr('src', $this.attr('src').replace(pc, tb));
        // ウィンドウサイズが1024px以上であれば_tbを_pcに _spを_pcを置換する。
        } else if(windowWidth >= replaceWidth_pc) {
          $this.attr('src', $this.attr('src').replace(tb, pc));
          $this.attr('src', $this.attr('src').replace(sp, pc));
        //　ウィンドウサイズが768未満の時
        } else {
          $this.attr('src', $this.attr('src').replace(tb, sp));
          $this.attr('src', $this.attr('src').replace(pc, sp));
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