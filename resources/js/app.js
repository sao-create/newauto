/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i);
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default));

Vue.component('example-component', require('./components/ExampleComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});

//member/bosyu/create
var $children = $('.children');
var original = $children.html();

$('.parent').change(function () {

    var val1 = $(this).val();

    $children.html(original).find('option').each(function () {
        var val2 = $(this).data('val');
        if (val1 != val2) {
            $(this).not('optgroup,.msg').remove();
        }
    });

    if ($(this).val() == "") {
        $children.attr('disabled', 'disabled');
    } else {
        $children.removeAttr('disabled');
    }

});

$(window).bind('scroll', function () {
    previousTop: 0;
    var currentTop = $(window).scrollTop();
    if (currentTop < this.previousTop) {
        $('header').addClass('visible');
    } else {
        $('header').removeClass('visible');
    }
    this.previousTop = currentTop;
});

//スクロール操作するたびに起動
$window.on('scroll', function () {
    //スクロール量を取得
    $scrollTopDistance = $(window).scrollTop();
    //もしスクロール量がヘッダーの上回ったら
    if ($scrollTopDistance >= headerHeight) {
        //クラスを追加する
        header.addClass('is_scroll');
        logo.addClass('is_scroll');
        headerNav.addClass('is_scroll');
        //もしスクロール量がヘッダーの高さを下回ったら。
    } else if ($scrollTopDistance <= headerHeight) {
        //クラスを除去する
        header.removeClass('is_scroll');
        logo.removeClass('is_scroll');
        headerNav.removeClass('is_scroll');
    }
});
