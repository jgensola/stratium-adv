<?php 
header("Content-type: text/css; charset: UTF-8");
echo cs_get_option( 'custom-css' );


$mobile = cs_get_option('mobile_menu');

$min_mobile = isset($mobile) && $mobile ? '1025px' : '992px';
$max_mobile = isset($mobile) && $mobile ? '1024px' : '991px'; ?>


.header_top_bg {
    position: relative;
    z-index: auto;
    background-color: #ffffff;
}

.not-fixed-menu.bg-fixed-color{
    background-color: transparent!important;
}

.header_top_bg.fixed-header {
    position: fixed;
    top: 0;
    width: 100%;
    z-index: 100;
}

header {
    position: relative;
    width: 100%;
    z-index: 999;
    text-align: center;
}

header.absolute {
    position: absolute;
    margin-bottom: 0;
}

header a.logo {
    text-decoration: none;
    display: block;
}

header.zindex,
footer.zindex {
    z-index: 1 !important;
}

.header_top_bg.enable_fixed.fixed {
    position: fixed;
    z-index: 1000;
    width: 100%;
    top: 0;
}

.header_trans-fixed.header_top_bg {
    background-color: transparent;
    position: fixed;
    z-index: 1000;
    top: 0;
    width: 100%;
}

.header_trans-fixed.header_top_bg.open header .logo span,
.header_trans-fixed.header_top_bg.open header .mob-nav i {
    color: #222222;
}

.single-post .header_trans-fixed.bg-fixed-color {
    margin-left: 0;
    width: 100%;
}

.top-menu {
    padding-bottom: 10px;
}

.top-menu .logo {
    display: inline-block;
}

.top-menu .logo span {
    font-family: "Poppins", sans-serif;
    font-size: 40px;
    line-height: 1.2;
    font-weight: 800;
    letter-spacing: .6px;
    min-width: 170px;
    text-align: center;
    background-color: transparent;
    color: #222222;
    display: inline-block;
}

.right-menu .logo span {
    vertical-align: middle;
    text-align: left;
    font-family: "Poppins", sans-serif;
    font-size: 28px;
    line-height: 1.8;
    font-weight: 800;
    letter-spacing: 0.2px;
    color: #222222;
}
.right-menu .f-right li a {
    color: #222;
}
.right-menu #topmenu {
    text-align: right;
}

.no-menu {
    display: inline-block;
    margin-top: 12px;
}

.header_top_bg.bg-fixed-color .top-menu .logo span,
.header_top_bg.bg-fixed-color .right-menu #topmenu ul li ul li a,
.menu_light_text .right-menu #topmenu ul li ul li a,
.socials-mob-but i,
.header_top_bg.bg-fixed-color .right-menu #topmenu ul li a,
.header_top_bg.bg-fixed-color.menu_light_text .right-menu #topmenu ul li a,
.header_top_bg.bg-fixed-color .right-menu #topmenu .search-icon-wrapper i,
.header_top_bg.bg-fixed-color.menu_light_text .right-menu #topmenu .search-icon-wrapper i,
.header_top_bg.bg-fixed-color .right-menu #topmenu .pao-shop-icon::before,
.header_top_bg.bg-fixed-color.menu_light_text .right-menu #topmenu .pao-shop-icon::before {
    color: #222222;
}

#topmenu {
    width: 100%;
    text-align: center;
    background: #ffffff;
}

.not-fixed-menu{
    position: absolute!important;
}

#topmenu ul {
    list-style: none;
    margin: 0;
    padding: 0;
    display: inline-block;
}

#topmenu ul li {
    display: inline-block;
    position: relative;
}

#topmenu ul li a {
    font-size: 15px;
    font-family: "Poppins", sans-serif;
    color: #222222;
    font-weight: 600;
    display: block;
    text-align: left;
    text-decoration: none;
    padding: 0 20px 5px;
    line-height: 45px;
    letter-spacing: 0.2px;
    transition: all .3s ease;
    -webkit-font-smoothing: antialiased;
}

.header_trans-fixed.header_top_bg.open #topmenu ul li a {
    color: #222222;
}

.top-menu #topmenu > ul > li > a,
.top-menu #topmenu ul.social > li > a {
    padding: 0;
}

#topmenu .social .fa {
    font-size: 18px;
}

.top-menu .logo img {
    max-height: 100px;
}

#topmenu ul ul {
    position: absolute;
    z-index: 999;
    left: 0;
    top: 50px;
    min-width: 250px;
    display: none;
    box-sizing: border-box;
}

#topmenu ul ul li a {
    font-size: 13px;
    line-height: 26px;
    padding: 3px 30px;
    font-family: "Poppins", sans-serif;
    letter-spacing: 0.2px;
    display: block;
    width: 100%;
    position: relative;
    -webkit-font-smoothing: antialiased;
}

#topmenu > ul > li > ul > li:hover ul {
    display: block;
}

#topmenu > ul > li > ul > li > ul {
    left: 101%;
    top: -15px;
}

.mob-nav {
    display: none;
    width: 20px;
    height: 20px;
    margin: 0 auto 12px;
    font-size: 14px;
    color: #222222;
    opacity: 1;
}

.mob-nav:hover {
    opacity: 0.7;
}

.header_trans-fixed .mob-nav i {
    color: #fff;
}

.header_trans-fixed.header_top_bg {
    transition: background-color 300ms ease;
}

.header_trans-fixed.header_top_bg.bg-fixed-color {
    background-color: #fff;
}
.header_trans-fixed.header_top_bg.bg-fixed-color .mob-nav .line {
    background-color: #222;
}
.header_trans-fixed.header_top_bg.bg-fixed-color .logo span {
    color: #222;
}
.header_trans-fixed.header_top_bg.bg-fixed-color .f-right li a {
    color: #222;
}
.menu_light_text .right-menu .mob-nav .line {
    background-color: #ffffff;
}
.right-menu .topmenu.open .mob-nav .line {
    background-color: #222222;
}
.pao-top-social {
    display: inline-block;
    margin-left: 0px;
    position: relative;
    vertical-align: middle;
}

.pao-top-social .social-icon {
    display: none;
    font-size: 14px;
    color: #222222;
    opacity: 1;
    padding: 0 20px;
    cursor: pointer;
    transition: opacity 0.3s ease;
    position: relative;
    z-index: 30;
}

.header_trans-fixed .pao-top-social .social-icon {
    color: #fff;
}

.pao-top-social .social-icon:hover {
    opacity: 0.7;
}

#topmenu .pao-top-social .social {
    margin-left: 0;
}

#topmenu .social li {
    display: inline-block;
    margin-left: 12px;
}

#topmenu .pao-top-social .social li a {
    margin-left: 0;
    color: #222222;
    opacity: 1;
    transition: opacity 0.3s ease;
}

.header_trans-fixed .right-menu #topmenu .pao-top-social .social li a {
    color: #fff;
}

#topmenu .pao-top-social .social li a:hover {
    opacity: 1;
}

.header_trans-fixed .right-menu #topmenu .pao-top-social .social {
    background-color: transparent;
}

#topmenu .pao-top-social .social li {
    margin: 5px;
}

#topmenu .pao-top-social .social.active {
    visibility: visible;
    opacity: 1;
}

#topmenu .pao-top-social .social li a {
    line-height: 1.2;
}

#topmenu ul > li > ul > li > ul {
    display: none;
}

#topmenu .pao_mini_cart .product_list_widget .mini_cart_item .mini-cart-data .mini_cart_item_price {
    color: #fd8558;
    font-size: 15px;
    font-weight: 800;
}

.mini-cart-wrapper {
    display: inline-block;
    position: relative;
    vertical-align: middle;
}

.mini-cart-wrapper .pao-shop-icon {
    text-decoration: none;
    font-size: 17px;
}

.mini-cart-wrapper .pao-shop-icon:hover::before {
    color: #fd8558;
}

.mini-cart-wrapper .pao-shop-icon:before {
    position: relative;
    display: inline-block;
    line-height: 1;
    -webkit-transition: all 350ms ease;
    -moz-transition: all 350ms ease;
    -ms-transition: all 350ms ease;
    -o-transition: all 350ms ease;
    transition: all 350ms ease;
    color: #222222;
    font-size: 15px;
}

.mini-cart-wrapper .pao-shop-icon .cart-contents {
    display: -webkit-inline-box;
    display: -ms-inline-flexbox;
    display: inline-flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    position: absolute;
    top: -15px;
    right: -15px;
    width: 20px;
    height: 20px;
    border-radius: 50%;
    background-color: #fd8558;
}

.mini-cart-wrapper .pao-shop-icon .cart-contents-count {
    font-family: "Poppins";
    font-size: 10px;
    font-weight: 800;
    letter-spacing: 1.12px;
    color: #fff;
}

.pao_mini_cart {
    position: absolute;
    right: -20px;
    top: 50px;
    display: block;
    background-color: #fff;
    opacity: 0;
    visibility: hidden;
    min-width: 360px;
    padding: 23px 30px;
    text-align: center;
    transition: opacity 0.5s ease, visibility 0.5s ease;
    box-shadow: 3px 1px 20px 0 rgba(0, 0, 0, 0.07);
}
.header_trans-fixed #topmenu .pao_mini_cart .cart_list .mini_cart_item .remove_from_cart_button {
    color: #d8d8d8;
}
#topmenu .pao_mini_cart .cart_list .mini_cart_item .remove_from_cart_button {
    padding: 0;
    color: #d8d8d8;
    font-size: 30px;
    font-weight: 400;
}
#topmenu .pao_mini_cart .pao-buttons {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: justify;
    -ms-flex-pack: justify;
    justify-content: space-between;
    margin-bottom: 30px;
}
#topmenu .pao_mini_cart .pao-buttons a {
    display: -webkit-inline-box;
    display: -ms-inline-flexbox;
    display: inline-flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    color: #222222;
    font-size: 13px;
    font-weight: 800;
    letter-spacing: .2px;
    text-transform: none;
    text-decoration: none;
}
#topmenu .pao_mini_cart .pao-buttons a:hover i {
    margin-left: 10px;
}
#topmenu .pao_mini_cart .pao-buttons a i {
    margin-left: 5px;
    color: #fd8558;
    font-size: 10px;
    -webkit-transition: all .3s ease;
    -o-transition: all .3s ease;
    transition: all .3s ease;
}

.header_trans-fixed.none {
    display: none;
}

.socials-mob-but {
    display: none;
}

.socials-mob-but:active,
.socials-mob-but:visited {
    opacity: 1;
}

.header_top_bg:not(.header_trans-fixed) {
    padding-bottom: 10px;
}

header .logo img {
    max-width: none;
    max-height: 75px;
}

header .logo img.logo-hover {
    display: none;
}
header .logo:hover {
    opacity: 1;
}

.header_trans-fixed .f-right > div:first-child::before {
    background: #fff !important;
}

@media only screen and (max-width: 1199px) {
    .pao-top-social {
        margin-left: 5px;
    }
}

@media (min-width: <?php echo esc_attr($min_mobile); ?>) {
    header .logo img.logo-mobile{
        display: none!important;
    }
    .menu_light_text.header_top_bg  .logo span,
    .menu_light_text.header_top_bg .right-menu #topmenu ul li a,
    .menu_light_text.header_top_bg .right-menu #topmenu .pao-shop-icon::before,
    .menu_light_text.header_top_bg .right-menu #topmenu .search-icon-wrapper i,
    .menu_light_text.header_top_bg .right-menu .socials-mob-but i,
    .menu_light_text.header_top_bg .f-right li a  {
        color: #ffffff;
    }

    .menu_light_text.header_top_bg:not(.bg-fixed-color)   .logo:hover span,
     .menu_light_text.header_top_bg:not(.bg-fixed-color)  .right-menu #topmenu .menu > li:not(.current-menu-parent) > a:hover,
     .menu_light_text.header_top_bg:not(.bg-fixed-color)  .right-menu #topmenu .search-icon-wrapper:hover i,
     .menu_light_text.header_top_bg:not(.bg-fixed-color)  .right-menu .socials-mob-but:hover i,
    .menu_light_text.header_top_bg:not(.bg-fixed-color) .f-right li a:hover {
        color: #fff !important;
        opacity: 0.7;
    }
    .menu_light_text.header_top_bg .right-menu #topmenu .sub-menu li a {
        color: #222222;
    }
    .menu_light_text.header_top_bg .right-menu #topmenu .sub-menu li a:hover {
        color: #fd8558;
    }
    .mob-nav-close {
        display: none;
    }
    .aside-menu .mini-cart-wrapper:hover .pao_mini_cart {
        opacity: 0;
        visibility: hidden;
    }

    .header_trans-fixed #topmenu {
        background-color: transparent;
    }

    #topmenu ul ul {
        padding: 10px 0;
    }

    .right-menu .logo{
        text-align: left;
    }

    .right-menu .logo,
    .right-menu #top-menu {
        display: table-cell;
        vertical-align: middle;
    }

    .top-menu #topmenu ul ul {
        left: -20px;
    }

    .top-menu .pao-top-social {
        margin-left: 10px;
    }

    #topmenu ul ul li {
        display: block;
        margin-bottom: 5px;
    }

    #topmenu ul ul li:last-child {
        margin-bottom: 0;
    }

    .top-menu #topmenu > ul:not(.social) > li {
        margin: 0 10px 5px 10px;
        padding: 0;
    }

    #topmenu ul li:hover > ul {
        display: block;
    }

    header:not(.full) #topmenu {
        vertical-align: middle;
        display: table-cell!important;
    }

    #topmenu .f-right > div {
        position: relative;
    }

    #topmenu .f-right > div:last-child::before {
        content: none;
    }

    #topmenu > ul > li > ul > li > ul {
        left: -100%;
        top: -15px;
    }

    .sub-menu li a {
        z-index: 1999;
    }

    .pr30md {
        padding-right: 30px !important;
        padding-left: 0 !important;
    }

    .right-menu {
        width: 100%;
        margin: auto;
        display: table;
        padding: 0;
    }

    .right-menu .f-right {
        float: right;
    }

    .right-menu .f-right > div {
        position: relative;
    }

    .right-menu .f-right > div:last-child::before {
        content: none;
    }

    header:not(.full) .right-menu #topmenu {
        text-align: center;
        display: table-cell !important;
        margin-top: 0;
        vertical-align: middle;
    }

    .header_trans-fixed.header_top_bg .right-menu #topmenu > ul > li > a {
        padding: 13px 0 13px;
        transform: translateZ(0);
    }

    .header_trans-fixed.header_top_bg .right-menu #topmenu > ul ul {
        top: 60px;
    }

    .header_trans-fixed.header_top_bg .right-menu #topmenu > ul ul ul {
        top: -10px;
    }

    .right-menu #topmenu ul ul {
        left: 10px;
        top: 44px;
    }

    .top-menu #topmenu ul ul {
        left: -20px;
        top: 100%;
    }

    .right-menu #topmenu > ul > li > ul > li > ul {
        left: 100%;
        top: -10px;
    }

    .top-menu #topmenu > ul > li > ul > li > ul {
        left: 100%;
        top: -10px;
    }

    .right-menu #topmenu .social {
        text-align: right;
        vertical-align: top;
    }

    .right-menu #topmenu .social li a {
        padding: 0;
        margin-left: 0;
        -webkit-transition: color 350ms ease;
        -moz-transition: color 350ms ease;
        -ms-transition: color 350ms ease;
        -o-transition: color 350ms ease;
        transition: color 350ms ease;
    }

    .right-menu #topmenu a:hover,
    .right-menu #topmenu .social li a:hover {
        color: #fd8558;
    }

    .right-menu #topmenu .social li a::after,
    .right-menu #topmenu .social li a::before {
        content: none;
    }

    .right-menu #topmenu > ul > li > a {
        position: relative;
        padding: 0;
        margin: 0 23px;
    }

    .right-menu #topmenu > ul > li.current-menu-item > a,
    .top-menu #topmenu > ul > li.current-menu-item > a,
    .right-menu #topmenu > ul > li.current-menu-parent > a,
    .top-menu #topmenu > ul > li.current-menu-parent > a,
    .right-menu #topmenu  ul li.current_page_item  > a,
    .top-menu #topmenu ul li.current_page_item  > a {
        transition: all 0.5s ease;
        color: #fd8558;
    }

    .right-menu .logo img {
        max-height: 75px;
        margin: 5px auto;
    }
    .full-width-menu .right-menu .logo img {
        margin: 0;
        max-height: 77px;
    }
    .right-menu.aside-fix .logo img {
        margin: 0;
    }
    .top-menu #topmenu > ul > li:last-child > ul > li > ul {
        left: calc(-100% - 30px);
    }

    #topmenu .pao-top-social .social {
        z-index: 25;
        text-align: left;
        transition: opacity 0.3s ease;
    }

    .aside-nav {
        display: none;
    }

    .aside-menu {
        position: fixed;
        top: 0;
        left: 0;
    }

    .aside-menu .topmenu {
        position: fixed;
        top: 0;
        left: -100%;
        height: 100%;
        width: 255px !important;
        padding: 50px 0;
        margin-left: 58px;
        text-align: center;
        background-color: #fff;
        box-sizing: border-box;
        outline: 0;
        z-index: 101;
        backface-visibility: hidden;
        transition: left 0.5s cubic-bezier(0.77, 0, 0.175, 1);
    }

    .aside-menu .topmenu.active-menu {
        left: 0;
    }

    .aside-menu.active-menu {
        left: 0;
    }

    .aside-menu.active-menu .aside-nav .aside-nav-line.line-1 {
        display: none;
    }

    .aside-menu.active-menu .aside-nav .aside-nav-line.line-2 {
        top: 50%;
        transform: rotate(45deg);
    }

    .aside-menu.active-menu .aside-nav .aside-nav-line.line-3 {
        top: 50%;
        transform: rotate(-45deg);
    }

    .aside-menu .logo {
        position: absolute;
        z-index: 9999;
        top: 20px;
        left: 31px;
        padding: 20px 0;
    }

    .aside-menu .aside-nav {
        position: fixed;
        display: block;
        left: 0;
        top: 0;
        width: 58px;
        background-color: #030e28;
        height: 100%;
        z-index: 1000;
    }

    .aside-menu .aside-nav .aside-nav-line {
        position: absolute;
        top: 50%;
        left: 18px;
        display: block;
        width: 22px;
        height: 1px;
        background-color: #fff;
        transition: transform .3s ease;
    }

    .aside-menu .aside-nav .aside-nav-line.line-1 {
        transform: translateY(-6px);
    }

    .aside-menu .aside-nav .aside-nav-line.line-3 {
        transform: translateY(6px);
    }

    .aside-menu .aside-nav:hover {
        opacity: 1;
    }

    .aside-menu .aside-nav:focus {
        opacity: 1;
    }

    .aside-menu .aside-nav:hover .aside-nav-line {
        transform: rotate(45deg);
    }

    .aside-menu #topmenu {
        display: table !important;
        border-right: 1px solid #f2f2f2;
    }
    .aside-menu.aside-fix #topmenu ul.menu {
        padding-bottom: 100px;
    }
    .aside-menu #topmenu ul.menu {
        display: inline-block;
        vertical-align: middle;
        overflow-y: auto;
        width: 100%;
        max-height: 100%;
        position: absolute;
        left: 50%;
        top: 50%;
        transform: translate(-50%, -50%);
        z-index: 100;
    }

    .aside-menu #topmenu ul.menu li {
        padding: 13px 20px 13px 45px;
        position: static;
        text-align: left;
        display: block;
    }
    .aside-menu.aside-fix #topmenu ul.menu li {
        padding: 10px 15px;
        text-align: center;
    }
    .aside-menu.aside-fix #topmenu ul.menu a {
        display: inline-block;
        position: relative;
        line-height: 1.2;
    }
    .aside-menu #topmenu ul.menu a {
        display: block;
        text-align: center;
        z-index: 9999;
    }
    .aside-menu.aside-fix #topmenu ul.menu li a::before {
        content: "";
        position: absolute;
        bottom: -2px;
        left: 0;
        width: 0;
        height: 8px;
        z-index: -1;
        background-color: #fd8558;
        -webkit-transition: width .5s ease;
        -o-transition: width .5s ease;
        transition: width .5s ease;
    }
    .aside-menu.aside-fix #topmenu ul.menu li a:hover::before,
    .aside-menu.aside-fix #topmenu ul.menu .current-menu-parent > a::before,
    .aside-menu.aside-fix #topmenu ul.menu .current-menu-item > a::before {
        width: 100%;
    }
    .aside-menu.aside-fix #topmenu ul ul li a {
        width: auto;
        padding: 0;
    }
    .aside-menu #topmenu .f-right {
        float: none;
        position: absolute;
        left: 50%;
        width: calc(100% - 35px);
        transform: translateX(-50%);
        bottom: 40px;
        z-index: 2;
    }

    .aside-menu #topmenu .f-right .pao-top-social {
        margin-left: 0;
    }

    .aside-menu #topmenu .f-right .pao-top-social li {
        margin-right: 5px;
        margin-left: 5px;
    }

    .aside-menu #topmenu .f-right .pao-top-social li {
        margin-left: 0;
        margin-right: 10px;
    }

    .aside-menu.aside-fix #topmenu .sub-menu {
        min-width: auto;
        position: static;
    }
    .aside-menu.aside-fix #topmenu .sub-menu a {
        font-weight: bold;
    }

    .aside-menu.aside-fix #topmenu::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        height: 80px;
        background: #fff;
        z-index: 1;
    }

    .aside-menu.aside-fix #topmenu .f-right {
        text-align: center;
    }

    .aside-menu #topmenu > ul > li:hover ul,
    .aside-menu #topmenu > ul > li > ul > li:hover ul {
        display: none;
    }

    .aside-menu #topmenu ul > li > ul > li > ul {
        border-top: 1px solid #eee;
        border-bottom: 1px solid #eee;
    }

    header:not(.aside-menu):not(.full) #topmenu ul li.mega-menu {
        position: static;
    }

    header:not(.aside-menu):not(.full).right-menu #topmenu ul .mega-menu > ul {
        width: 100%;
        max-width: 1140px;
        left: 50%;
        top: 60px;
        padding: 45px 0 30px;
        -webkit-transform: translateX(-50%);
        -moz-transform: translateX(-50%);
        -ms-transform: translateX(-50%);
        -o-transform: translateX(-50%);
        transform: translateX(-50%);
    }


    header:not(.aside-menu):not(.full) #topmenu ul li.mega-menu:hover > ul::before {
        content: "";
        position: absolute;
        width: 5000px;
        top: 0;
        bottom: 0;
        left: -100%;
        background-color: #fff;
        box-shadow: 3px 1px 20px 0 rgba(0, 0, 0, 0.07);
        z-index: 1;
    }

    header:not(.aside-menu):not(.full) #topmenu ul li.mega-menu > ul > li {
        float: left;
        width: 25%;

    }

    header:not(.aside-menu):not(.full) #topmenu ul li.mega-menu:hover > ul > li > a {
        font-size: 18px;
        font-weight: 600;
        letter-spacing: .2px;
    }

    header:not(.aside-menu):not(.full) #topmenu ul li.mega-menu > ul > li:nth-child(1)::before {
        left: 25%;
    }

    header:not(.aside-menu):not(.full) #topmenu ul li.mega-menu > ul > li:nth-child(2)::before {
        left: 50%;
    }

    header:not(.aside-menu):not(.full) #topmenu ul li.mega-menu > ul > li:nth-child(3)::before {
        left: 75%;
    }

    header:not(.aside-menu):not(.full) #topmenu ul > li.mega-menu > ul.sub-menu > li > ul.sub-menu {
        display: block;
        position: static;
        text-align: left;
        min-width: 100%;
        box-shadow: none;
        padding: 25px 0;
        transition: all .2s ease;
    }

    header:not(.aside-menu):not(.full) #topmenu ul > li.mega-menu > ul > li > ul.sub-menu > li {
        display: block;
        padding: 8px 0;
    }
    header:not(.aside-menu):not(.full) #topmenu ul > li.mega-menu > ul > li > ul.sub-menu > li a {
        opacity: 0;
        -webkit-transform: matrix(1, 0, 0, 1, 0, 20);
        -ms-transform: matrix(1, 0, 0, 1, 0, 20);
        transform: matrix(1, 0, 0, 1, 0, 20);
        -webkit-transition: opacity .75s ease, -webkit-transform .75s ease;
        transition: opacity .75s ease, -webkit-transform .75s ease;
        -o-transition: opacity .75s ease, transform .75s ease;
        transition: opacity .75s ease, transform .75s ease;
        transition: opacity .75s ease, transform .75s ease, -webkit-transform .75s ease;
    }
    header:not(.aside-menu):not(.full).right-menu #topmenu ul .mega-menu ul li {
        position: static;
        display: block;
    }

    header.top-menu #topmenu ul li.mega-menu > ul {
        top: calc(100% - 25px);
    }

    header.top-menu #topmenu ul li.mega-menu > ul > li::before {
        display: none;
    }

    header.top-menu #topmenu ul ul {
        left: 0;
    }

    header.top-menu #topmenu ul li.mega-menu > ul > li:nth-child(1)::before,
    header.top-menu #topmenu ul li.mega-menu > ul > li:nth-child(2)::before,
    header.top-menu #topmenu ul li.mega-menu > ul > li:nth-child(3)::before {
        left: 100%;
        display: block;
        top: 0;
    }

    .top-menu .logo span {
        padding: 24px 10px;
    }

    header.top-menu .logo span {
        padding: 15px 10px;
    }

    .right-menu .logo span {
        float: left;
    }

    .top-menu #topmenu > ul:not(.social) > li {
        margin: 0 0 5px;
        padding: 0 23px;
    }

    .top-menu #topmenu > ul > li:last-child > ul > li > ul {
        left: calc(-100%);
    }

    .top-menu #topmenu > ul > li > ul > li > ul {
        left: calc(100% + 23px);
    }
}

@media (min-width: <?php echo esc_attr($min_mobile); ?>) and (max-width: 1199px) {
    .right-menu #topmenu > ul > li > a {
        margin: 0 18px;
    }
}

@media (min-width: <?php echo esc_attr($max_mobile); ?>) and (max-width: 1100px){

    .main-wrapper.unit .right-menu #topmenu > ul > li > a {
        margin: 0 10px;
    }
}

@media (max-width: <?php echo esc_attr($max_mobile); ?>) {
    .menu_light_text.header_top_bg  .logo span  {
        color: #ffffff;
    }

    header .logo img.main-logo:not(.logo-mobile){
        display: none!important;
    }
    header .logo img.logo-mobile{
        display: inline;
    }
    .aside-menu.static #topmenu .f-right .copy {
        display: none;
    }

    .header_top_bg > .container {
        width: 100%;
    }

    #topmenu {
        overflow-x: hidden;
    }

    .header_trans-fixed.header_top_bg .mini-cart-wrapper .pao-shop-icon .cart-contents-count {
        color: #222222;
    }

    .main-wrapper {
        width: 100%;
    }

    .main-wrapper header .logo img {
        max-height: 75px;
    }

    header {
        padding: 10px 45px;
    }

    #topmenu ul li ul {
        box-shadow: none;
        font-style: normal;
    }

    #topmenu ul {
        box-shadow: none;
        font-style: normal;
    }

    .header_top_bg > .container > .row > .col-xs-12 {
        padding: 0;
    }

    .top-menu .logo {
        margin-bottom: 0;
        margin-top: 0;
    }

    .no-padd-mob {
        padding: 0 !important;
    }
    .right-menu #topmenu .menu li.menu-item-has-children,
    #topmenu .menu li.menu-item-has-children {
        position: relative;
        text-align: left;
    }
    .right-menu #topmenu .menu li.menu-item-has-children i,
    #topmenu .menu li.menu-item-has-children i {
        position: absolute;
        top: 16px;
        right: 35px;
    }

    .right-menu #topmenu .menu li.menu-item-has-children > a,
    #topmenu .menu li.menu-item-has-children > a {
        position: relative;
        display: inline-block;
        width: auto!important;
    }
    header{
        text-align: left;
        padding: 10px 0;
    }
    .mob-nav {
        display: block;
        margin: 0;
        position: absolute;
        top: 50%;
        right: 20px;
        -webkit-transform: translateY(-50%);
        -ms-transform: translateY(-50%);
        transform: translateY(-50%);
    }

    .mob-nav i::before {
        font-size: 24px;
    }
    .sidebar-open {
        height: 100vh;
    }
    .sidebar-open .canvas-wrap {
        -webkit-transform: translateX(320px);
        -moz-transform: translateX(320px);
        -ms-transform: translateX(320px);
        -o-transform: translateX(320px);
        transform: translateX(320px);
    }
    .sidebar-open .header_top_bg {
        position: fixed;
    }
    .main-wrapper {
        -webkit-transition: -webkit-transform 0.5s ease-in-out, -webkit-transform 0.5s ease-in-out;
        transition: -webkit-transform 0.5s ease-in-out, -webkit-transform 0.5s ease-in-out;
        -o-transition: transform 0.5s ease-in-out, transform 0.5s ease-in-out;
        transition: transform 0.5s ease-in-out, transform 0.5s ease-in-out;
        transition: transform 0.5s ease-in-out, transform 0.5s ease-in-out, -webkit-transform 0.5s ease-in-out, -webkit-transform 0.5s ease-in-out;
    }
    .main-wrapper::before {
        content: '';
        display: block;
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0,0,0,0.75);
        z-index: 400;
        opacity: 0;
        visibility: hidden;
        -webkit-transition: all 0.5s ease-in-out;
        transition: all 0.5s ease-in-out;
    }
    .sidebar-open .main-wrapper {
        position: fixed;
        -webkit-transform: translateX(320px);
        -ms-transform: translateX(320px);
        transform: translateX(320px);
        overflow: visible;
    }
    .sidebar-open .main-wrapper::before {
        opacity: 1;
        visibility: visible;
    }
    .mob-nav-close {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        -webkit-box-pack: end;
        -ms-flex-pack: end;
        justify-content: flex-end;
        text-decoration: none;
        border-bottom: 1px solid #f1f2f3;
    }
    .mob-nav-close span {
        font-weight: 800;
        letter-spacing: .2px;
    }
    .mob-nav-close .hamburger {
        padding: 30px 35px;
        padding-left: 15px;
    }
    .mob-nav-close .line {
        display: block;
        width: 24px;
        height: 3px;
        background-color: #222222;
    }

    .mob-nav-close .line:first-of-type {
        -webkit-transform: rotate(45deg) translateY(2px);
        -moz-transform: rotate(45deg) translateY(2px);
        -ms-transform: rotate(45deg) translateY(2px);
        -o-transform: rotate(45deg) translateY(2px);
        transform: rotate(45deg) translateY(2px);
    }

    .mob-nav-close .line:last-of-type {
        -webkit-transform: rotate(-45deg) translateY(-2px);
        -moz-transform: rotate(-45deg) translateY(-2px);
        -ms-transform: rotate(-45deg) translateY(-2px);
        -o-transform: rotate(-45deg) translateY(-2px);
        transform: rotate(-45deg) translateY(-2px);
    }

    #topmenu.open {
        opacity: 1;
    }

    #topmenu {
        display: inline-block;
        overflow-y: auto;
        position: absolute;
        text-align: left;
        padding-top: 0;
        padding-bottom: 100px;
        top: 0;
        bottom: 0;
        left: 0;
        width: 320px;
        background-color: #fff;
        -webkit-transform: translateX(-320px);
        -ms-transform: translateX(-320px);
        transform: translateX(-320px);
        height: 100vh;
        z-index: 100;
    }
    .sidebar-open #topmenu {
        position: fixed;
    }
    #topmenu ul ul {
        display: none;
        position: static;
    }

    #topmenu ul.menu > li > ul > li > ul {
        display: none;
    }

    #topmenu ul.menu {
        width: 100%;
        display: inline-block;
        padding-bottom: 30px;
        background-color: #fff;
    }

    #topmenu ul.menu li {
        display: block !important;
        float: none;
        text-align: left;
        margin-bottom: 0;
    }

    #topmenu ul.menu li a::before{
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        width: 320px;
        height: 1px;
        display: block;
        background-color: #f1f2f3;
    }
    #topmenu ul.menu li a {
        color: #222222;
        padding: 10px 35px;
        line-height: 25px;
        display: inline-block;
        width: 100%!important;
        float: none;
        transition: all 0.5s ease;
    }

    #topmenu ul.menu li a:hover {
        transition: all 0.5s ease;
    }

    /*1 level menu*/

    #topmenu > ul.menu > li > a {
        font-size: 14px;
    }

    /*2 level menu*/
    #topmenu > ul.menu > li > ul > li,
    #topmenu > ul.menu > li > ul > li > ul > li {
        padding-left: 10px;

    }

    #topmenu .social li a {
        line-height: 25px !important;
    }

    #topmenu .menu li a:hover,
    #topmenu .menu .current-menu-parent > a,
    #topmenu .menu .current-menu-item > a,
    #topmenu .menu .current-menu-ancestor > a {
        color: #fd8558;
    }

    .right-menu #topmenu .social {
        display: block;
    }

    .right-menu #topmenu .social li {
        display: inline-block;
    }

    .right-menu #topmenu .social li a {
        padding: 5px;
    }

    .pao-top-social .social-icon {
        display: none;
    }

    .right-menu #topmenu .pao-top-social .social {
        position: static;
        visibility: visible;
        opacity: 1;
    }

    .header_trans-fixed.open .right-menu #topmenu .pao-top-social .social li a {
        color: #222222;
    }

    .mini-cart-wrapper {
        display: block;
        margin: 20px 10px 30px 10px;
    }

    .pao_mini_cart {
        opacity: 1;
        visibility: visible;
        position: relative;
        right: auto;
        left: 0;
        top: 10px;
        width: 100%;
        min-width: 0;
    }

    #topmenu ul li.mega-menu:hover > ul > li {
        width: 100%;
    }

    header a.logo {
        display: inline-block;
    }

    #topmenu ul li.mega-menu:hover > ul > li {
        width: auto;
    }

    #topmenu.active-socials {
        left: 0;
        right: 0;
        overflow: visible;
        opacity: 1;
        width: 100%;
    }

    #topmenu .f-right {
        display: block;
        background: #fff;
        padding: 15px;
        text-align: center;
        z-index: 9999;
        width: 100%;
        transition: all 350ms ease;
    }

    #topmenu .f-right.active-socials {
        opacity: 1;
        visibility: visible;
    }

    #topmenu .f-right.active-socials a {
        visibility: visible;
    }

    #topmenu .f-right .header_trans-fixed.open .right-menu #topmenu .pao-top-social .social li a {
        transition: none;
    }

    .socials-mob-but {
        display: block;
        margin: 0;
        position: absolute;
        top: calc(50% + -3px);
        right: 20px;
        -webkit-transform: translateY(-50%);
        -ms-transform: translateY(-50%);
        transform: translateY(-50%);
    }

    .socials-mob-but i::before {
        font-size: 24px;
    }

    #topmenu .social .fa,
    .mini-cart-wrapper .pao-shop-icon {
        font-size: 28px;
        transition: none;
    }

    .mini-cart-wrapper .pao-shop-icon {
        margin: 5px;
    }

    .mini-cart-wrapper {
        margin: 0;
        margin-top: -3px;
    }

    .header_trans-fixed.header_top_bg.open header .socials-mob-but i,
    .header_trans-fixed #topmenu .pao-top-social .social li a,
    .header_trans-fixed .mini-cart-wrapper .pao-shop-icon::before {
        color: #222222 !important;
    }

    .header_trans-fixed.header_top_bg {
        transition: none;
    }

    .mini-cart-wrapper {
        display: inline-block;
        vertical-align: middle;
    }

    .pao_mini_cart {
        display: none;
    }

    .pao-top-social {
        vertical-align: middle;
        margin-left: 0;
    }

    .mini-cart-wrapper .pao-shop-icon:before {
        margin-top: -3px;
        font-size: 28px;
    }

    .header_trans-fixed.header_top_bg.open {
        background-color: #fff;
        position: fixed;
        z-index: 1000;
        top: 0;
        width: 100%;
    }
}

/*------------------------------------------------------*/
/*---------------------- STATIC ASIDE MENU ----------------------*/
.mCSB_container.mCS_no_scrollbar_y.mCS_y_hidden,
.mCSB_inside > .mCSB_container {
    margin-right: 0;
}

@media only screen and (min-width: <?php echo esc_attr($min_mobile); ?>) {
    .static-menu {
        padding-left: 256px;
        position: relative;
    }

    .static-menu .right-menu .logo span {
        float: none;
    }

    .static-menu .main-header-testimonial {
        margin-left: auto;
        margin-right: auto;
    }

    .static-menu .single-pagination {
        padding: 15px;
    }

    .static-menu .top-banner {
        height: 500px;
    }

    .static-menu .row.single-share {
        margin-right: 0;
        margin-left: 0;
    }

    .static-menu .portfolio-single-content .izotope-container {
        margin-top: 20px;
    }

    .static-menu .pixproof-data,
    .static-menu .pixproof-data .grid__item:last-child {
        margin-top: 20px;
    }

    .static-menu .portfolio-single-content .single-pagination {
        padding: 50px 15px;
    }

    .static-menu .banner-slider .page-view {
        max-width: 100%;
    }

    .static-menu .portfolio-single-content p,
    .static-menu .portfolio-single-content h1,
    .static-menu .portfolio-single-content h2,
    .static-menu .portfolio-single-content h3,
    .static-menu .portfolio-single-content h4,
    .static-menu .portfolio-single-content h5,
    .static-menu .portfolio-single-content h6 {
        padding: 0 15px;
    }

    .static-menu .portfolio-single-content .row.gallery-single {
        margin-right: 0;
        margin-left: 0;
    }

    .static-menu .swiper-container-split .swiper-slide .slide-item.slide-text-left .wrap-slide-text {
        padding-left: 190px;
    }

    .static-menu .vc_row:not([data-vc-stretch-content="true"]) {
        padding-left: 0 !important;
        padding-right: 0 !important;
    }

    .static-menu .vc_row[data-vc-full-width] {
        max-width: calc(100% + 30px) !important;
        left: 0 !important;
    }

    .static-menu .top-banner .content {
        padding: 0 15px;
    }

    .static-menu .flow-slider .swiper-container {
        width: 120vw;
    }

    .static-menu .exhibition-wrap .container-wrap {
        max-width: 100%;
    }

    .static-menu .exhibition-wrap .slide {
        max-width: calc(70vw - 90px);
    }

    .static-menu #footer {
        max-width: calc(100% - 254px);
        left: 254px;
    }

    .static-menu .header_top_bg {
        padding-bottom: 0;
    }

    .aside-menu.static {
        max-width: 290px;
        left: 0;
    }

    .aside-menu.static .aside-nav {
        display: none;
    }

    .aside-menu.static #topmenu ul.menu {
        overflow-y: visible;
        transform: translate(-50%, -50%);
    }

    .aside-menu.static #topmenu {
        box-shadow: 3px 1px 20px 0 rgba(0, 0, 0, 0.12);
        left: 0 !important;
        margin-left: 0;
        vertical-align: top;
        border-right: none;
    }

    .aside-menu.static #topmenu .sub-menu {
        margin-left: 0;
        left: 100%;
        top: 50%;
        background-color: #fff;
        width: 100% !important;
        transform: translateY(-50%);
        box-shadow: 3px 1px 20px 0 rgba(0, 0, 0, 0.12);
    }
    .aside-menu.static #topmenu .sub-menu .sub-menu {
        left: 99%;
    }

    .aside-menu.static #topmenu li:hover > .sub-menu {
        display: none;
    }

    .aside-menu.static #topmenu .menu li a {
        text-align: left;
        font-size: 15px;
        font-weight: 800;
        display: inline-block;
        letter-spacing: .2px;
        margin: 0;
        width: auto;
        line-height: 1.1;
        padding: 0 2px 0 0;
    }

    .aside-menu.static #topmenu .menu li a:hover {
        margin-left: 10px !important;
        position: relative;
    }
    .aside-menu.static #topmenu .menu .current-menu-item  > a:hover,
    .aside-menu.static #topmenu .menu .current-menu-parent > a:hover {
        margin-left: 0!important;
    }

    .aside-menu.static #topmenu .menu .current-menu-parent li a,
    .aside-menu.static #topmenu .menu .current-menu-item li a {
        margin-left: 0 !important;
    }

    .aside-menu.static #topmenu .current-menu-parent > a::before,
    .aside-menu.static #topmenu .current-menu-item > a::before {
        content: "";
        position: absolute;
        bottom: -2px;
        left: 0;
        width: 100%;
        height: 8px;
        z-index: -1;
        background-color: #fd8558;
    }

    .aside-menu.static #topmenu .f-right {
        text-align: left;
        left: 0;
        -webkit-transform: none;
        -moz-transform: none;
        -ms-transform: none;
        -o-transform: none;
        transform: none;
        width: 100%;
        padding-left: 45px;
    }

    .aside-menu.static #topmenu .f-right .copy {
        text-transform: none;
        font-size: 14px;
        line-height: 1.57;
        color: #999999;
        margin-top: 35px;
    }

    .aside-menu.static .logo {
        left: 0;
        width: 100%;
        top: 0;
        padding-top: 40px;
        text-align: left;
        padding-left: 45px;
    }

    .aside-menu.static .logo span {
        font-size: 30px;
        line-height: 1;
    }

    .aside-menu.static .logo img {
        max-width: 100%;
    }
}

@media only screen and (min-width: 1650px) {
    .static-menu .vc_row:not([data-vc-stretch-content="true"]) {
        padding-left: 7% !important;
        padding-right: 7% !important;
    }
}

@media only screen and (min-width: 1199px) and (max-width: 1375px) {
    .static-menu .pricing-item {
        padding: 60px 40px;
    }

    .static-menu .pricing-item .mask-image {
        min-width: 150px;
        width: 150px;
    }
}

@media only screen and (min-width: 1200px) and (max-width: 1275px) {
    .static-menu .pricing-item .mask-image {
        min-width: 130px;
        width: 130px;
    }
}
@media only screen and (min-width: <?php echo esc_attr($min_mobile); ?>) and (max-width: 1460px) {
    .static-menu .about-section {
        padding: 0 30px;
        overflow: hidden;
    }
    .static-menu .headings-wrap,
    .static-menu .pao-post-list-1,
    .static-menu .pao-post-list-2,
    .static-menu .pao-portfolio-2,
    .static-menu .pao-portfolio-3,
    .static-menu .pao-portfolio-urban {
        padding: 0 15px;
    }
    .static-menu .contacts-info-wrap {
        padding: 0 15px 15px;
    }
    .static-menu .vc_row.pad-fix {
        padding-right: 15px!important;
        padding-left: 15px!important;
    }
}
@media only screen and (min-width: <?php echo esc_attr($min_mobile); ?>) and (max-width: 1375px) {
    .static-menu .outer-album-swiper .album-text-block,
    .static-menu .outer-album-swiper .right-content {
        max-width: 260px;
    }
}

@media only screen and (min-width: <?php echo esc_attr($min_mobile); ?>) and (max-width: 1350px) {
    .static-menu .contacts-info-wrap.style3 .content {
        padding: 100px 20px;
    }

    .static-menu .swiper3-container.carousel-albums .swiper3-button-prev {
        left: 30px;
    }

    .static-menu .swiper3-container.carousel-albums .swiper3-button-prev:hover {
        left: 20px;
    }

    .static-menu .swiper3-container.carousel-albums .swiper3-button-next {
        right: 30px;
    }

    .static-menu .swiper3-container.carousel-albums .swiper3-button-next:hover {
        right: 20px;
    }
}

@media only screen and (min-width: <?php echo esc_attr($min_mobile); ?>) and (max-width: 1200px) {
    .static-menu .coming-soon .svg .count {
        font-size: 115px;
    }

    .static-menu .client-wrap {
        width: 50%;
    }

    .static-menu .info-block-parallax-wrap .content-wrap {
        padding: 70px 20px 70px;
    }
}

@media only screen and (min-width: <?php echo esc_attr($min_mobile); ?>) and (max-width: 1100px) {
    .static-menu .top-banner {
        height: 300px;
    }

    .static-menu .top-banner.center_content {
        min-height: 300px;
    }

    .static-menu .fragment-wrapper .fragment-block .fragment-text .wrap-frag-text .title {
        font-size: 50px;
        line-height: 55px;
    }

    .static-menu .swiper-container-vert-slider .swiper-slide .container .wrap-text {
        max-width: calc(100% - 40px);
    }

    .static-menu .swiper-container-vert-slider .swiper-slide .container .wrap-text .title {
        font-size: 60px;
        letter-spacing: 8px;
    }

    .static-menu .portfolio-slider-wrapper.slider_classic .content-wrap .portfolio-title {
        font-size: 50px;
        letter-spacing: 7px;
    }

    .static-menu .portfolio-single-content .gallery-single.infinite_full_gallery .item-single {
        width: 33.33%;
    }

    .static-menu .portfolio.grid .item {
        width: 50% !important;
    }

    .static-menu .flow-slider .flow-title {
        font-size: 60px;
    }
}

/*------------------------------------------------------*/
/*---------------------- ASIDE MENU VERTICAL LOGO ----------------------*/

@media only screen and (min-width: <?php echo esc_attr($min_mobile); ?>) {
    header.aside-menu {
        padding: 0;
    }

    .aside-menu.vertical .logo {
        position: fixed;
        top: auto;
        bottom: -35px;
        left: 0;
        transform-origin: left top 0;
        transform: rotate(-90deg);
        padding: 0;
        height: 58px;

    span,
    img {
        max-height: 58px;
        margin: 0;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }
}

}

/*------------------------------------------------------*/
/*---------------------- LEFT ALIGN MENU ----------------------*/
@media only screen and (min-width: <?php echo esc_attr($min_mobile); ?>) {
    .right-menu.full #topmenu .search-title-menu{
        color: #222;
        font-size: 26px;
    }
    .full-width-menu .right-menu.left {
        padding: 0;
    }
    .right-menu.left {
        padding: 0 85px;
    }
    .unit .right-menu.left {
        padding: 0 15px;
    }
    .right-menu.left .site-search {
        position: fixed;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: 100;
        background-color: rgba(255, 255, 255, .9);
        overflow-x: hidden;
        overflow-y: auto;
        opacity: 0;
        visibility: hidden;
        -webkit-transition: opacity .7s ease, visibility .7s ease;
        -o-transition: opacity .7s ease, visibility .7s ease;
        transition: opacity .7s ease, visibility .7s ease;
    }
    .right-menu.left .site-search.open {
        opacity: 1;
        visibility: visible;
    }
    .right-menu.left .site-search .form-container {
        position: relative;
        top: 50%;
        -webkit-transform: translateY(-50%);
        -ms-transform: translateY(-50%);
        transform: translateY(-50%);
    }
    .right-menu.left .site-search .form-container .input-group {
        width: 100%;
    }
    .right-menu.left .site-search .form-container .input-group input {
        font-size: 18px;
    }
    .right-menu.left .site-search .close-search {
        position: absolute;
        top: 80px;
        right: 80px;
        width: 30px;
        height: 30px;
    }
    .right-menu.left .site-search .line {
        width: 18px;
        height: 3px;
        background-color: #222222;
        display: block;
        margin: 2px auto;
        -webkit-transition: all 0.3s ease-in-out;
        -o-transition: all 0.3s ease-in-out;
        transition: all 0.3s ease-in-out;
    }
    .right-menu.left .site-search .line:nth-of-type(1) {
        -webkit-transform: translateY(1px) rotate(45deg);
        -ms-transform: translateY(1px) rotate(45deg);
        -o-transform: translateY(1px) rotate(45deg);
        transform: translateY(1px) rotate(45deg);
    }
    .right-menu.left .site-search .line:nth-of-type(2) {
        -webkit-transform: translateY(-4px) rotate(-45deg);
        -ms-transform: translateY(-4px) rotate(-45deg);
        -o-transform: translateY(-4px) rotate(-45deg);
        transform: translateY(-4px) rotate(-45deg);
    }
    .right-menu.left .f-right {
        float: none;
    }
    .header_trans-fixed.header_top_bg .right-menu.left #topmenu  ul  li  a {
        padding: 0;
    }
    .right-menu.left #topmenu .menu li a {
        font-size: 15px;
        font-weight: 600;
        letter-spacing: .2px;
        line-height: 1.1;
        z-index: 1;
    }

    .right-menu.left #topmenu .menu > li {
        padding: 30px 0;
    }

    .right-menu.left #topmenu .sub-menu {
        top: 75px;
        left: -35px;
        min-width: 270px;
        padding: 30px 0;
        background-color: #ffffff;
        -webkit-box-shadow: 3px 1px 20px 0 rgba(0, 0, 0, 0.07);
        box-shadow: 3px 1px 20px 0 rgba(0, 0, 0, 0.07);
        opacity: 0;
        visibility: hidden;
        -webkit-transition: opacity .5s ease, visibility .5s ease;
        -o-transition: opacity .5s ease, visibility .5s ease;
        transition: opacity .5s ease, visibility .5s ease;
        display: block;
    }
    .right-menu.left #topmenu .menu li:hover > ul {
        opacity: 1;
        visibility: visible;
    }
    .right-menu.left #topmenu .menu .mega-menu:hover > ul > li > ul {
        opacity: 1;
        visibility: visible;
    }
    .right-menu.left #topmenu .menu > li ul a {
        opacity: 0;
        -webkit-transform: matrix(1, 0, 0, 1, 0, 20);
        -ms-transform: matrix(1, 0, 0, 1, 0, 20);
        transform: matrix(1, 0, 0, 1, 0, 20);
        -webkit-transition: opacity .75s ease, -webkit-transform .75s ease, color .5s ease;
        -o-transition: opacity .75s ease, transform .75s ease, color .5s ease;
        transition: opacity .75s ease, transform .75s ease, -webkit-transform .75s ease, color .5s ease;
    }

    .right-menu.left .topmenu .sub-menu .not-hover a:before {
        display: none;
    }
    .right-menu.left #topmenu .menu > li:hover ul a,
    .right-menu.left #topmenu .menu > li.mega-menu:hover ul > li > ul.sub-menu > li a {
        opacity: 1;
        -webkit-transform: matrix(1, 0, 0, 1, 0, 0);
        -ms-transform: matrix(1, 0, 0, 1, 0, 0);
        transform: matrix(1, 0, 0, 1, 0, 0);
    }

    .right-menu.left #topmenu .sub-menu .sub-menu {
        top: 0;
        left: 100%;
        padding: 40px 15px;
    }

    .right-menu.left #topmenu .menu li:last-of-type .sub-menu .sub-menu,
    .right-menu.left #topmenu .menu li:nth-last-of-type(2) .sub-menu .sub-menu,
    .right-menu.left #topmenu .menu li:nth-last-of-type(3) .sub-menu .sub-menu {
        left: -100%;
    }

    .right-menu.left #topmenu .sub-menu li {
        padding: 8px 35px;
        text-align: left;
    }

    .right-menu.left #topmenu .sub-menu li a {
        width: auto;
        display: inline-block;
        padding: 0;
        font-weight: 600;
    }

    .right-menu.left #topmenu .current-menu-parent > a,
    .right-menu.left #topmenu .current-menu-item > a {
        position: relative;
    }

    .right-menu.left #topmenu .menu li a:hover::before,
    .right-menu.left #topmenu .current-menu-parent > a::before,
    .right-menu.left #topmenu .current-menu-item > a::before,
    .right-menu.left #topmenu .current-menu-ancestor > a::before {
        width: 100%;
    }

    .right-menu.left .logo span {
        margin-top: 2px;
    }

    .right-menu.left #topmenu {
        padding-left: 23px;
        text-align: right;
    }

    .right-menu.left #topmenu > ul > li > a {
        margin: 0 18px 0 0;
    }

    .right-menu.left #topmenu .search-icon-wrapper {
        margin-left: 30px;
        cursor: pointer;
    }
    .right-menu.left #topmenu .mini-cart-wrapper {
        margin-left: 30px;
    }
    .search-form .input-group::after {
        display: block;
        position: absolute;
        bottom: 0;
        content: "";
        height: 3px;
        width: 50%;
        background-color: #fd8558;
    }
    .search-form input {
        width: 100%;
        border: 0;
        border-bottom: 3px solid rgba(34, 34, 34, .2);
        background-color: transparent;
        color: #999999;
        font-size: 15px;
        padding: 14px 0;
    }
    
    .header_top_bg.center-menu .right-menu:not(.full) #topmenu {
        display: flex !important;
        align-items: center;
    }

    .header_top_bg.center-menu #topmenu > ul {
        width: 100%;
        text-align: center;
    }

    .header_top_bg.center-menu .right-menu.left .f-right {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
    }

    .header_top_bg.center-menu .right-menu.left {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
    }
}

@media only screen and (max-width: <?php echo esc_attr($max_mobile); ?>) {
    header {
        position: static;
    }
    #topmenu ul.menu {
        max-height: 300000px !important;
    }
}

/*------------------------------------------------------*/
/*---------------------- COMPACT MENU ----------------------*/
@media only screen and (min-width: <?php echo esc_attr($min_mobile); ?>) {
    .right-menu.compact .mob-nav {
        display: table-cell;
        vertical-align: middle;
        padding: 30px;
        width: 12px;
        font-size: 20px;
    }

    .right-menu.compact .mob-nav .fa-times {
        font-size: 22px;
    }

    .right-menu.compact #topmenu {
        opacity: 0;
        visibility: hidden;
        transition: all 350ms ease;
    }

    .right-menu.compact #topmenu.open {
        opacity: 1;
        visibility: visible;
    }

    .header_trans-fixed.header_top_bg.open .right-menu.compact #topmenu ul li a,
    .header_trans-fixed.header_top_bg.open .right-menu.compact .logo span,
    .header_trans-fixed.header_top_bg.open .right-menu.compact .mob-nav i {
        color: #fff;
    }
}

/*------------------------------------------------------*/
/*---------------------- FULL SCREEN MENU ----------------------*/

@media only screen and (min-width: <?php echo esc_attr($min_mobile); ?>) {
    .full {
        padding: 0 85px!important;
        text-align: left;
    }
    .full-menu-wrap .menu-menu-portfolio{
        width: 50%;
        float: left;
    }
    .full-menu-wrap .menu-img-wrap{
        align-items: center;
        display: flex;
    }
    .full-menu-wrap .menu-img-wrap .img-wrap-full{
        max-width: 50%;
        max-height: 400px;
        float: right;
        overflow: hidden;
        width: 100%;
    }

    .full-menu-wrap .menu-img-wrap .img-wrap-full img{
        transition-delay: 250ms;
        opacity: 0;
        -webkit-transition: opacity 500ms ease;
        -moz-transition: opacity 500ms ease;
        -ms-transition: opacity 500ms ease;
        -o-transition: opacity 500ms ease;
        transition: opacity 500ms ease;
        max-height: 400px;
    }
    .topmenu.open .full-menu-wrap .menu-img-wrap .img-wrap-full img{
        opacity: 1;
    }
    .right-menu.full .mob-nav {
        width: auto;
        padding: 30px 0;
        text-align: right;
        text-decoration: none;
    }
    .right-menu.full .mob-nav > span {
        display: none;
        margin-right: 10px;
        color: #222222;
        font-size: 24px;
        font-weight: 600;
    }
    .right-menu.full .mob-nav .line {
        width: 17px;
        height: 3px;
        background-color: #222222;
        display: block;
        float: left;
        margin: 2px auto;
        -webkit-transition: all 0.3s ease-in-out;
        -o-transition: all 0.3s ease-in-out;
        transition: all 0.3s ease-in-out;
    }
    .right-menu.full .mob-nav .line:last-of-type{
        float: right;
    }
    .menu_light_text.header_top_bg .right-menu.full .mob-nav .line {
        background-color: #fff;
    }
    .header_trans-fixed.header_top_bg.bg-fixed-color .mob-nav .line,
    .menu_light_text.header_trans-fixed.header_top_bg.bg-fixed-color .mob-nav .line,
    .menu_light_text.header_top_bg .right-menu.full .mob-nav.active .line{
        background-color: #222;
    }
    .right-menu.full .mob-nav.active > span {
        display: inline-block;
    }
    .right-menu.full .mob-nav .hamburger {
        display: inline-block;
        width: 22px;
    }
    .right-menu.full .mob-nav.active .line {
        margin: 0;
        background-color: #222222;
    }
    .right-menu.full .mob-nav.active .line:nth-of-type(2) {
        opacity: 0;
    }
    .right-menu.full .mob-nav.active .line:nth-of-type(1) {
        width: 22px;
        -webkit-transform: translateY(1px) rotate(45deg);
        -ms-transform: translateY(1px) rotate(45deg);
        -o-transform: translateY(1px) rotate(45deg);
        transform: translateY(1px) rotate(45deg);
    }
    .right-menu.full .mob-nav.active .line:nth-of-type(3) {
        width: 22px;
        -webkit-transform: translateY(-5px) rotate(-45deg);
        -ms-transform: translateY(-5px) rotate(-45deg);
        -o-transform: translateY(-5px) rotate(-45deg);
        transform: translateY(-5px) rotate(-45deg);
    }
    .right-menu.full .mob-nav .line:nth-of-type(2) {
        width: 22px;
    }
    .right-menu.full #topmenu .full-menu-wrap {
        position: absolute;
        top: 10%;
        left: 0;
        width: 100%;
        padding: 30px 100px;
        text-align: left;
        height: 90%;
        -ms-flex-direction: column;
        flex-direction: column;
    }

    .right-menu.full #topmenu .full-menu-wrap h1,
    .right-menu.full #topmenu .full-menu-wrap h2,
    .right-menu.full #topmenu .full-menu-wrap h3,
    .right-menu.full #topmenu .full-menu-wrap h4,
    .right-menu.full #topmenu .full-menu-wrap h5,
    .right-menu.full #topmenu .full-menu-wrap h6{
        color: #222;

    }

    .right-menu.full #topmenu {
        margin-top: 0;
        position: fixed;
        top: 0;
        right: 0;
        left: auto;
        bottom: 0;
        display: none;
        transition: none;
        width: 70%;
        opacity: 1;
        visibility: visible;
        height: 100vh;
        background: rgba(255, 255, 255, .95);
        overflow-y: auto;
        z-index: 90;
    }
    .right-menu.full #topmenu.open {
        opacity: 1;
        visibility: visible;
    }
    .right-menu.full #topmenu li {
        text-align: left;
    }
    .header_top_bg .right-menu.full #topmenu ul li a {
        color: #222222;
    }
    .right-menu.full #topmenu ul.menu{
        width: 50%;
    }
    .right-menu.full #topmenu ul.menu li {
        overflow: hidden;
    }
    .right-menu.full #topmenu ul.menu li a {
        position: relative;
        display: inline-block;
        padding: 0;
        font-size: 30px;
        text-align: left;
        line-height: 2;
        -webkit-transform: translateY(100%);
        -ms-transform: translateY(100%);
        transform: translateY(100%);
        -webkit-transition: -webkit-transform 500ms cubic-bezier(0.510, -0.015, 0.860, 0.160);
        transition: -webkit-transform 500ms cubic-bezier(0.510, -0.015, 0.860, 0.160);
        -o-transition: transform 500ms cubic-bezier(0.510, -0.015, 0.860, 0.160);
        transition: transform 500ms cubic-bezier(0.510, -0.015, 0.860, 0.160), color 350ms ease;
        transition: transform 500ms cubic-bezier(0.510, -0.015, 0.860, 0.160), -webkit-transform 500ms cubic-bezier(0.510, -0.015, 0.860, 0.160), color 350ms ease;
    }
    .right-menu.full .info-wrap .additional > div,
    .right-menu.full .info-wrap .search > div {
        overflow: hidden;
    }
    .right-menu.full .info-wrap .additional div *,
    .right-menu.full .info-wrap .search div * {
        -webkit-transform: translateY(130%);
        -ms-transform: translateY(130%);
        transform: translateY(130%);
        -webkit-transition: -webkit-transform 500ms cubic-bezier(0.510, -0.015, 0.860, 0.160);
        transition: -webkit-transform 500ms cubic-bezier(0.510, -0.015, 0.860, 0.160);
        -o-transition: transform 500ms cubic-bezier(0.510, -0.015, 0.860, 0.160);
        transition: transform 500ms cubic-bezier(0.510, -0.015, 0.860, 0.160);
        transition: transform 500ms cubic-bezier(0.510, -0.015, 0.860, 0.160), -webkit-transform 500ms cubic-bezier(0.510, -0.015, 0.860, 0.160);
    }
    .right-menu.full .copy {
        opacity: 0;
        webkit-transform: translateY(140%);
        -ms-transform: translateY(140%);
        transform: translateY(140%);
        -webkit-transition: opacity 500ms cubic-bezier(0.510, -0.015, 0.860, 0.160), -webkit-transform 500ms cubic-bezier(0.510, -0.015, 0.860, 0.160);
        transition: opacity 500ms cubic-bezier(0.510, -0.015, 0.860, 0.160), -webkit-transform 500ms cubic-bezier(0.510, -0.015, 0.860, 0.160);
        -o-transition: transform 500ms cubic-bezier(0.510, -0.015, 0.860, 0.160), opacity 500ms cubic-bezier(0.510, -0.015, 0.860, 0.160);
        transition: transform 500ms cubic-bezier(0.510, -0.015, 0.860, 0.160), opacity 500ms cubic-bezier(0.510, -0.015, 0.860, 0.160);
        transition: transform 500ms cubic-bezier(0.510, -0.015, 0.860, 0.160), opacity 500ms cubic-bezier(0.510, -0.015, 0.860, 0.160), -webkit-transform 500ms cubic-bezier(0.510, -0.015, 0.860, 0.160);
    }
    .right-menu.full #topmenu.open ul.menu li a,
    .right-menu.full .open .info-wrap .additional div *,
    .right-menu.full .open .info-wrap .search div * {
        -webkit-transform: translateY(0);
        -ms-transform: translateY(0);
        transform: translateY(0);
    }
    .right-menu.full .open .copy {
        -webkit-transform: translateY(0);
        -ms-transform: translateY(0);
        transform: translateY(0);
        opacity: 1;
    }
    .right-menu.full #topmenu ul.menu li .sub-menu {
        display: none;
        transition: none;
    }
    .right-menu.full #topmenu li a:hover {
        color: #fd8558;
    }

    .right-menu.full #topmenu .current-menu-parent > a,
    .right-menu.full #topmenu .current-menu-item > a {
        position: relative;
    }

    .header_top_bg .right-menu.full #topmenu ul li a:hover,
    .right-menu.full #topmenu .current-menu-parent > a,
    .right-menu.full #topmenu .current-menu-item > a,
    .right-menu.full #topmenu .current-menu-ancestor > a {
        color: #fd8558;;
    }

    header.full #topmenu ul li.mega-menu:hover > ul {
        padding-top: 10px;
    }

    .right-menu.full #topmenu ul li::before {
        display: none;
    }

    .right-menu.full #topmenu ul ul li {
        display: block !important;
        float: none !important;
        width: 100% !important;
    }

    .right-menu.full #topmenu .f-right li {
        display: inline-block;
    }

    .right-menu.full #topmenu .f-right {
        display: block;
        float: none;
        margin-top: 30px !important;
    }

    .right-menu.full #topmenu ul li {
        display: block;
    }

    .right-menu.full #topmenu .mob-nav {
        position: relative;
        z-index: 9000;
    }
    .right-menu.full #topmenu .menu {
        width: 50%;
    }
    .right-menu.full .sub-menu {
        position: static !important;
        -webkit-transform: none;
        -moz-transform: none;
        -ms-transform: none;
        -o-transform: none;
        transform: none;
    }
    .right-menu.full #topmenu ul ul {
        display: block;
        padding-left: 30px;
    }
    .right-menu.full #topmenu ul.menu ul li a {
        display: inline-block;
        width: auto;
        font-size: 18px;
    }
    .right-menu.full #topmenu ul.menu ul li a::before {
        height: 8px;
    }
    .right-menu.full .whizz_mini_cart {
        display: none;
    }

    .right-menu.full .mob-nav {
        position: relative;
        z-index: 1000;
    }
    .right-menu.full .info-wrap {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: start;
        -ms-flex-align: start;
        align-items: flex-start;
        margin-bottom: 30px;
    }
    .right-menu.full .copy {
        text-align: right;
        text-transform: capitalize;
    }
    .right-menu.full .info-wrap .additional {
        width: 40%;
    }
    .right-menu.full .info-wrap .search {
        width: 30%;
    }
    .right-menu.full .info-wrap .additional h3,
    .right-menu.full .info-wrap .search {
        font-size: 30px;
        font-weight: 800;
        line-height: normal;
    }
    .right-menu.full .info-wrap .additional p {
        margin: 0;
        font-size: 15px;
        line-height: 2.67;
    }
    .right-menu.full .info-wrap .search .input-group {
        width: 100%;
    }
    .right-menu.full .info-wrap .search .input-group::before {
        position: absolute;
        top: 50%;
        right: 10px;
        -webkit-transform: translateY(-50%);
        -ms-transform: translateY(-50%);
        transform: translateY(-50%);
        font-family: "FontAwesome";
        font-size: 15px;
        color: #222222;
        content: "\f002";
    }
    .right-menu.full .info-wrap .search input {
        color: #999999;
        font-size: 15px;
        font-weight: normal;
    }
    .right-menu.full .info-wrap .search .col-lg-12 {
        padding: 0;
    }
    .right-menu.full .copy {
        color: #222;
        font-size: 15px;
        opacity: .6;
    }
}

@media only screen and (max-width: <?php echo esc_attr($max_mobile); ?>) {
    .full-menu-wrap .menu-img-wrap .img-wrap-full{
        display: none;
    }
    .header_top_bg{
        position: fixed;
        top: 0;
        width: 100%;
        z-index: 100;
    }
    .right-menu.full #topmenu {
        background-color: #ffffff;
    }
    .right-menu.full #topmenu .sub-menu li {
        padding-left: 10px;
    }
    .right-menu.full #topmenu .full-menu-wrap {
        position: static;
        padding: 0;
    }
    .right-menu.full .mob-nav {
        width: auto;
        text-align: right;
        text-decoration: none;
    }
    .right-menu.full .mob-nav > span {
        display: none;
        margin-right: 10px;
        color: #222222;
        font-size: 24px;
        font-weight: 800;
    }
    .right-menu .mob-nav .line {
        width: 18px;
        height: 3px;
        background-color: #222222;
        display: block;
        float: left;
        margin: 2px auto;
        -webkit-transition: all 0.3s ease-in-out;
        -o-transition: all 0.3s ease-in-out;
        transition: all 0.3s ease-in-out;
    }

    .right-menu .mob-nav .hamburger {
        display: inline-block;
        width: 20px;
    }
    .right-menu .mob-nav.active .line {
        margin: 0;
        background-color: #222222;
    }
    .right-menu .mob-nav.active .line:nth-of-type(2) {
        opacity: 0;
    }
    .right-menu .mob-nav.active .line:nth-of-type(1) {
        width: 24px;
        -webkit-transform: translateY(2px) rotate(45deg);
        -ms-transform: translateY(2px) rotate(45deg);
        -o-transform: translateY(2px) rotate(45deg);
        transform: translateY(2px) rotate(45deg);
    }
    .right-menu .mob-nav.active .line:nth-of-type(3) {
        width: 24px;
        -webkit-transform: translateY(-4px) rotate(-45deg);
        -ms-transform: translateY(-4px) rotate(-45deg);
        -o-transform: translateY(-4px) rotate(-45deg);
        transform: translateY(-4px) rotate(-45deg);
    }
    .right-menu .mob-nav .line:nth-of-type(2) {
        width: 24px;
    }
    .right-menu.full .info-wrap {
        padding: 0 15px 0 35px;
        margin-bottom: 30px;
    }
    .right-menu.full .info-wrap .additional {
        margin-bottom: 30px;
    }
    .right-menu.full .copy {
        text-align: right;
        text-transform: capitalize;
    }
    .right-menu.full .info-wrap .additional h3,
    .right-menu.full .info-wrap .search {
        font-size: 24px;
        font-weight: 800;
        line-height: normal;
    }
    .right-menu.full .info-wrap .additional p {
        margin: 0;
        font-size: 15px;
        line-height: 2.67;
    }
    .right-menu.full .info-wrap .search .input-group {
        width: 100%;
        max-width: 500px;
    }
    .right-menu.full .info-wrap .search .input-group::before {
        position: absolute;
        top: 50%;
        right: 10px;
        -webkit-transform: translateY(-50%);
        -ms-transform: translateY(-50%);
        transform: translateY(-50%);
        font-family: "FontAwesome";
        font-size: 15px;
        color: #222222;
        content: "\f002";
    }
    .right-menu.full .info-wrap .search input {
        color: #999999;
        font-size: 15px;
        font-weight: normal;
    }
    .right-menu.full .info-wrap .search .col-lg-12 {
        padding: 0;
    }
    .right-menu.full .copy {
        padding: 0 15px;
        color: #999999;
        font-size: 15px;
    }
    .search-form .input-group::after {
        display: block;
        position: absolute;
        bottom: 0;
        content: "";
        height: 3px;
        width: 50%;
        background-color: #fd8558;
    }
    .search-form input {
        width: 100%;
        border: 0;
        border-bottom: 3px solid rgba(34, 34, 34, .2);
        background-color: transparent;
        color: #999999;
        font-size: 15px;
        padding: 14px 0;
    }
    .search-icon-wrapper {
        display: block;
        position: relative;
        margin-top: 30px;
    }
    .search-icon-wrapper i {
        position: absolute;
        top: 50%;
        right: 20px;
        -webkit-transform: translateY(-50%);
        -moz-transform: translateY(-50%);
        -ms-transform: translateY(-50%);
        -o-transform: translateY(-50%);
        transform: translateY(-50%);
    }
    .search-icon-wrapper .input-group {
        width: 100%;
    }
    .right-menu.full .socials-mob-but,
    .right-menu.full .copy,
    .right-menu.full .additional {
        display: none;
    }
}



/*------------------------------------------------------*/
/*---------------------- CENTER MENU ----------------------*/

@media only screen and (max-width: <?php echo esc_attr($max_mobile); ?>) {
    .right-menu.center-menu-style .f-right:not(.for-mob){
        display: none;
    }
}
@media only screen and (min-width: <?php echo esc_attr($min_mobile); ?>) {
    .right-menu.center-menu-style .f-right.for-mob{
        display: none;
    }
    .right-menu.center-menu-style .f-right{
        display: table-cell;
        text-align: right;
        vertical-align: middle;
    }
    .right-menu.center-menu-style .f-right ul{
        list-style: none;
        margin-bottom: 0;
        white-space: nowrap;
    }
    .right-menu.center-menu-style .f-right li {
        font-size: 22px;
        display: inline-block;
    }
    .right-menu.center-menu-style .f-right li a{
        -webkit-transition: all 350ms ease;
        -moz-transition: all 350ms ease;
        -ms-transition: all 350ms ease;
        -o-transition: all 350ms ease;
        transition: all 350ms ease;
        margin-left: 20px;
    }
    .right-menu.center-menu-style .f-right li a:hover{
        color: #fd8558;
    }
    .right-menu.center-menu-style nav{
        text-align: center!important;
    }
    .right-menu.left #topmenu > ul > li > a{
        margin: 0 8px;
    }
}

@media only screen and (min-width: 1200px) {
    .right-menu.left #topmenu > ul > li > a{
        margin: 0 18px;
    }
}





<?php
$style = '';
///HEADER LOGO//
if ( cs_get_option('site_logo') == 'txtlogo' ) {
    //Header logo text
    if ( cs_get_option('text_logo_style') == 'custom' ) {

        $style .= 'a.logo span{';
        $style .=  cs_get_option('text_logo_color') && cs_get_option('text_logo_color') !== '#fff' ? 'color:' . cs_get_option('text_logo_color') . ' !important;' : '';
        $style .=  cs_get_option('text_logo_width') ? 'width:' . cs_get_option('text_logo_width') . ' !important;' : '';
        $style .=  cs_get_option('text_logo_font_size') ? 'font-size:' . cs_get_option('text_logo_font_size') . ' !important;' : '';
        $style .= '}';
    }

} else {
    //Header logo image
    if ( cs_get_option('img_logo_style') == 'custom' ) {
        $style .= '.logo img {';
        if (cs_get_option('img_logo_width')) {
            $logo_width = is_integer(cs_get_option('img_logo_width')) ? cs_get_option('img_logo_width') . 'px' : cs_get_option('img_logo_width');
             $style .=  cs_get_option('img_logo_width') ? 'width:' . esc_attr($logo_width) . ' !important;' : '';
        }
        if (cs_get_option('img_logo_height')) {
            $logo_height = is_integer(cs_get_option('img_logo_height')) ? cs_get_option('img_logo_height') . 'px' : cs_get_option('img_logo_height');
             $style .=  cs_get_option('img_logo_height') ? 'height:' . esc_attr( $logo_height ) . ' !important;' : '';
             $style .=  cs_get_option('img_logo_height') ? 'max-height:' . cs_get_option('img_logo_height') . ' !important;' : '';
        }
        $style .= '}';
    }
}
echo esc_html($style);

$post_id = isset($_GET['post']) && is_numeric($_GET['post']) ? $_GET['post'] : '' ;

if(!empty($post_id)){
 $meta_data = get_post_meta( $post_id, '_custom_page_options', true );

if (isset($meta_data['footer_color']) && !empty($meta_data['footer_color'])) { ?>
.page-id-<?php echo esc_attr($post_id); ?> #footer{
    background-color: <?php echo esc_html($meta_data['footer_color']) ?>;
}
<?php }

if (isset($meta_data['header_scroll_bg']) && !empty($meta_data['header_scroll_bg'])) { ?>
.page-id-<?php echo esc_attr($post_id); ?> .header_trans-fixed.header_top_bg.bg-fixed-color{
    background-color: <?php echo esc_html($meta_data['header_scroll_bg']) ?>;
}
<?php }
if (isset($meta_data['header_scroll_text']) && !empty($meta_data['header_scroll_text'])) { ?>

.page-id-<?php echo esc_attr($post_id); ?> .header_trans-fixed.header_top_bg.bg-fixed-color #topmenu:not(.open) ul li a,
.page-id-<?php echo esc_attr($post_id); ?> .header_trans-fixed.header_top_bg.bg-fixed-color #topmenu .search-icon-wrapper i,
.page-id-<?php echo esc_attr($post_id); ?> .header_trans-fixed.header_top_bg.bg-fixed-color #topmenu .mini-cart-wrapper .pao-shop-icon::before,
.page-id-<?php echo esc_attr($post_id); ?> .header_trans-fixed.header_top_bg.bg-fixed-color #topmenu .pao-top-social .social li a,
.page-id-<?php echo esc_attr($post_id); ?> .header_trans-fixed.header_top_bg.bg-fixed-color .header_top_bg .right-menu.full #topmenu ul li a,
.page-id-<?php echo esc_attr($post_id); ?> .header_trans-fixed.header_top_bg.bg-fixed-color .right-menu .logo span,
.page-id-<?php echo esc_attr($post_id); ?> .header_trans-fixed.header_top_bg.bg-fixed-color .top-menu .logo span,
.page-id-<?php echo esc_attr($post_id); ?> .header_trans-fixed.header_top_bg.bg-fixed-color .aside-menu.static #topmenu .f-right .copy {
    color: <?php echo esc_html($meta_data['header_scroll_text']) ?>;
}

.page-id-<?php echo esc_attr($post_id); ?> .header_trans-fixed.header_top_bg.bg-fixed-color .right-menu.full .mob-nav:not(.active) .line {
    background-color: <?php echo esc_html($meta_data['header_scroll_text']) ?>;
}

@media only screen and (max-width: <?php echo esc_attr($max_mobile); ?>) {
    .page-id-<?php echo esc_attr($post_id); ?> .header_trans-fixed.header_top_bg.bg-fixed-color .mob-nav-close,
    .page-id-<?php echo esc_attr($post_id); ?> .header_trans-fixed.header_top_bg.bg-fixed-color #topmenu ul.menu li a {
        color: <?php echo esc_html($meta_data['header_scroll_text']) ?>;
    }

    .page-id-<?php echo esc_attr($post_id); ?> .header_trans-fixed.header_top_bg.bg-fixed-color .mob-nav-close .line,
    .page-id-<?php echo esc_attr($post_id); ?> .header_trans-fixed.header_top_bg.bg-fixed-color .right-menu .mob-nav .line {
        background-color: <?php echo esc_html($meta_data['header_scroll_text']) ?>;
    }
}
<?php }

 if(!empty($meta_data['padding_desktop'])){ ?>
.page-id-<?php echo esc_attr($post_id); ?> .padding-desc,
.page-id-<?php echo esc_attr($post_id); ?> .padding-desc .vc_row,
.page-id-<?php echo esc_attr($post_id); ?> .padding-desc + #footer > div {
    padding-right: <?php echo esc_attr($meta_data['padding_desktop']); ?>;
    padding-left: <?php echo esc_attr($meta_data['padding_desktop']); ?>;
}

<?php }

 if(!empty($meta_data['padding_mobile'])){ ?>

@media only screen and (max-width: 767px) {
    .page-id-<?php echo esc_attr($post_id); ?> .padding-mob,
    .page-id-<?php echo esc_attr($post_id); ?> .padding-mob .vc_row,
    .page-id-<?php echo esc_attr($post_id); ?> .padding-mob + #footer > div {
        padding-right: <?php echo esc_attr($meta_data['padding_mobile']); ?>;
        padding-left: <?php echo esc_attr($meta_data['padding_mobile']); ?>;
    }
}

@media (min-width: 768px) {
    .right-menu {
        width: 100%;
        margin: 0;
        max-width: 100%;
    }

    .header_top_bg .col-xs-12 {
        padding: 0;
    }
}

<?php }
}

$preloaderSize_d = cs_get_option('preloader_size_d');
$preloaderSize_t = cs_get_option('preloader_size_t');
$preloaderSize_m = cs_get_option('preloader_size_m');

if(isset($preloaderSize_d) && $preloaderSize_d){ ?>
.preloader-svg svg {
    height: <?php echo esc_html($preloaderSize_d); ?>px !important;
}

<?php }

if(isset($preloaderSize_t) && $preloaderSize_t){ ?>
@media only screen and (max-width: 991px) {
    .preloader-svg svg {
        height: <?php echo esc_html($preloaderSize_t); ?>px !important;
    }
}

<?php }

if(isset($preloaderSize_m) && $preloaderSize_m){ ?>
@media only screen and (max-width: 767px) {
    .preloader-svg svg {
        height: <?php echo esc_html($preloaderSize_m); ?>px !important;
    }
}

<?php }



//DARK VERSION THEME
if(cs_get_option('enable_dark')){ ?>
    a,
    .bottom-infopwrap .likes-wrap span,
    .bottom-infopwrap .count,
    .bottom-infopwrap .post__likes,
    .single-post .single-content blockquote p,
    .single-post h1,
    .single-post h2,
    .single-post h3,
    .single-post h4,
    .single-post h5,
    .single-post h6,
    .post-details .date-post span,
    .post-details .author span,
    .header_top_bg .right-menu .logo span,
    .header_top_bg #topmenu .menu > li > a,
    .about-section .title,
    .tg-post-simple .title,
    .about-section.simple_text .description h1,
    .about-section.simple_text .description h2,
    .about-section.simple_text .description h3,
    .about-section.simple_text .description h4,
    .about-section.simple_text .description h5,
    .about-section.simple_text .description h6,
    .about-section.classic .content-wrap .blockquote,
    .services.center .content .title,
    .about-section.classic .content-wrap .author,
    .headings .title,
    .portfolio-single-content.left_gallery .info-wrap .title,
    .comments .comment-reply-title,
    .contacts-info-wrap .content-item div,
    .contacts-info-wrap .content-item a,
    .skill-wrapper.linear .title,
    .contacts-info-wrap.style3 .text,
    .skill-wrapper.linear .skill-value,
    .tg-post-simple-2 .tg-element-3,
    .tg-post-simple-2 .tg-element-1,
    .preloader-modern .loader-title,
    .preloader-modern .loader-subtitle,
    .info-block-wrap .title,
    .simple_gallery .title,
    .alia .text-gallery-wrap .additional-text,
    .tile_info .blockquote,
    .simple_slider .info-wrap .date,
    .portfolio-single-content.left_gallery .info-item-wrap .name,
    .info-block-wrap .content h1,
    .info-block-wrap .content h2,
    .info-block-wrap .content h3,
    .simple_gallery .info-item-wrap .name,
    .info-block-wrap .content h4,
    .alia .text-gallery-wrap .info-item-wrap .name,
    .simple_slider .blockquote,
    .info-block-wrap .content h5,
    .info-block-wrap .content h6,
    .single-pagination>div a.content,
    .post-slider-wrapper .title,
    .user-info-wrap .post-author__title,
    .service-list-wrapper .content-wrap .a-btn,
    .pricing-info .title,
    .urban .info-item-wrap .name,
    .comments .content .comment-reply-link,
    .comments .person .author,
    .single-post .title,
    .pricing-info .price,
    .tile_info .recent-posts-wrapper .title,
    .tile_info .banner-wrap .title,
    .urban .blockquote,
    .simple_slider .text-wrap .title,
    .pricing-info .currency,
    .urban .banner-wrap .title,
    .filter_slider .portfolio-tabs-wrapper .filters ul li,
    .filter_slider .portfolio-tabs-wrapper .title,
    .services.default .content .title,
    .services.default .content .text,
    .alia .text-wrap .title-for-text,
    .service-list-wrapper .title,
    .post-details .date-post span, .post-details .author span,
    .post.metro-style .info-wrap .title,
    .parallax-window .content-parallax .title,
    .alia .banner-wrap .title,
    .tile_info .text-gallery-wrap .info-item-wrap .name,
    .parallax-window .content-parallax .info-item-wrap .item .name,
    .skill-wrapper.linear .skill-label,
    .main-header-testimonial.modern .content-slide .name,
    .main-header-testimonial.modern .content-slide .description p,
    .filter_slider .swiper3-pagination .swiper3-pagination-bullet-active i,
    .main-header-testimonial.modern .swiper3-button-next::before,
    .main-header-testimonial.modern .swiper3-button-prev::before,
    .right-menu .f-right li a,
    .simple_slider .info-wrap .name,
    .comments .comments-title, .comments .comments-title span,
    #topmenu ul li a,
    .mob-nav{
        color: #fff;
    }

    .right-menu.full .mob-nav .line,
    .simple_slider .post-media .swiper3-pagination-bullet-active{
        background-color: #fff;
    }
    .skill-wrapper.linear .skill-label{
        opacity: 1;
    }

    body,
    #grid-1009 .tg-item-content-holder,
    .header_top_bg,
    .services.default,
    .post-paper.masonry,
    .right-menu.left #topmenu .sub-menu,
    header:not(.aside-menu):not(.full) #topmenu ul li.mega-menu:hover > ul::before,
    #topmenu{
        background-color: #0d0d0d;
    }

    .blog.metro,
    .archive.metro,
    .metro-load-more,
    .post-list .tg-item-content-holder,
    .tg-post-simple-2 .tg-item-content-holder{
        background-color: #0d0d0d!important;
    }

    .contacts-info-wrap .content-item div,
    .contacts-info-wrap .content-item a{
        font-weight: 700;
    }
    .skill-wrapper.linear .line,
    .post-slider-wrapper .swiper3-pagination{
        background-color: #333;
    }
    .post-slider-wrapper.slider_progress .content-wrap,
    .preloader-modern,
    .contacts-info-wrap.style7,
    .service-list-wrapper .content-wrap,
    .pricing-item.active,
    .post.metro-style .info-wrap,
    .post.metro-style .post-wrap-item,
    .user-info-wrap .post-author,
    .comments .comment .content,
    #contactform textarea,
    #contactform input:not([type="submit"]),
    .comments-form textarea,
    .parallax-window .content-parallax,
    .urban .banner-wrap,
    .tile_info .recent-posts-wrapper,
    .comments-form input:not([type="submit"]),
    .contacts-info-wrap .form input:not([type="submit"]),
    .contacts-info-wrap .form textarea{
        background-color: #222222;
    }

    .contacts-info-wrap .form input:not([type="submit"]),
    #contactform textarea,
    #contactform input:not([type="submit"]),
    .comments-form textarea,
    .comments-form input:not([type="submit"]),
    .contacts-info-wrap .form input:not([type="submit"]),
    .post-slider-wrapper.slider_progress .swiper3-slide,
    .contacts-info-wrap .form textarea{
        border-color: #4d4d4d;
    }

    .skill-wrapper.linear .text,
    .post-slider-wrapper .category,
    .skill-wrapper.linear-text .text,
    .post.metro-style .info-wrap .text p,
    .tg-post-simple-2 .tg-element-5{
        color: #999;
    }

    .contacts-info-wrap .form input:not([type="submit"]):-ms-input-placeholder,
    .contacts-info-wrap .form textarea:-ms-input-placeholder{
        color: #888;
    }

    .contacts-info-wrap .form input:not([type="submit"])::-webkit-input-placeholder,
    .contacts-info-wrap .form textarea::-webkit-input-placeholder{
        color: #888;
    }

    .contacts-info-wrap .form input:not([type="submit"])::-moz-placeholder,
    .contacts-info-wrap .form textarea::-moz-placeholder{
        color: #888;
    }
    .tg-post-simple .title{
        color: #fff!important;
    }
    .top-banner.simple.with-border{
        border-color: #0d0d0d;
    }
    .video.only-button .video-content::before,
    .video.only-button .video-content::after{
        opacity: .3;
    }
    .tg-post-simple .tg-element-10{
        text-transform: uppercase;
    }
    .services.center i span{
        opacity: .2;
    }

    .tg-post-simple .tg-element-4{
        color: rgba(255,255,255,.4);
    }
    .tg-post-simple .category.main-color::after{
        background-color: rgba(255,255,255,.4);
    }

    .video.only-button .video-content .play:hover{
        background-color: #fff;
    }
    .headings-wrap .title-bg,
    .about-section .title-bg,
    .main-header-testimonial.modern .bg-text,
    .info-block-wrap.style-3 .bg-text{
        color: rgba(255,255,255,.1);
    }

    @media only screen and (min-width: <?php echo esc_attr($min_mobile); ?>) {
        .right-menu.full #topmenu{
            background-color: rgba(0,0,0,.95);
        }
        .header_top_bg .right-menu.full #topmenu ul li a,
        .right-menu.full .mob-nav > span{
            color: #fff;
        }
    }
    @media only screen and (max-width: <?php echo esc_attr($max_mobile); ?>) {
        .mob-nav-close,
        #topmenu .pao-top-social .social li a{
            color: #fff;
        }
        .right-menu .mob-nav .line,
        .mob-nav-close .line{
            background-color: #fff;
        }
        .right-menu.full #topmenu,
        #topmenu ul.menu,
        #topmenu .f-right{
            background-color: #0d0d0d;
        }
        .mob-nav-close{
            border-bottom: 1px solid #444;
        }
        #topmenu ul.menu li a::before{
            background-color: #444;
        }
    }

<?php }
elseif(isset($meta_data['enable_dark']) && !empty($meta_data['enable_dark'])){ ?>
    .page-id-<?php echo esc_attr($post_id); ?> a,
    .page-id-<?php echo esc_attr($post_id); ?> .bottom-infopwrap .likes-wrap span,
    .page-id-<?php echo esc_attr($post_id); ?> .bottom-infopwrap .count,
    .page-id-<?php echo esc_attr($post_id); ?> .bottom-infopwrap .post__likes,
    .page-id-<?php echo esc_attr($post_id); ?> .single-post .single-content blockquote p,
    .page-id-<?php echo esc_attr($post_id); ?> .comments .comment-reply-title,
    .page-id-<?php echo esc_attr($post_id); ?> .alia .text-wrap .title-for-text,
    .page-id-<?php echo esc_attr($post_id); ?> .tile_info .blockquote,
    .page-id-<?php echo esc_attr($post_id); ?> .portfolio-single-content.left_gallery .info-item-wrap .name,
    .page-id-<?php echo esc_attr($post_id); ?> .single-post h1,
    .page-id-<?php echo esc_attr($post_id); ?> .single-post h2,
    .page-id-<?php echo esc_attr($post_id); ?> .tile_info .banner-wrap .title,
    .page-id-<?php echo esc_attr($post_id); ?> .simple_gallery .title,
    .page-id-<?php echo esc_attr($post_id); ?> .simple_slider .info-wrap .date,
    .page-id-<?php echo esc_attr($post_id); ?> .single-post h3,
    .page-id-<?php echo esc_attr($post_id); ?> .tile_info .text-gallery-wrap .info-item-wrap .name,
    .page-id-<?php echo esc_attr($post_id); ?> .simple_slider .blockquote,
    .page-id-<?php echo esc_attr($post_id); ?> .urban .info-item-wrap .name,
    .page-id-<?php echo esc_attr($post_id); ?> .alia .text-gallery-wrap .info-item-wrap .name,
    .page-id-<?php echo esc_attr($post_id); ?> .single-post h4,
    .page-id-<?php echo esc_attr($post_id); ?> .single-post h5,
    .page-id-<?php echo esc_attr($post_id); ?> .single-post h6,
    .page-id-<?php echo esc_attr($post_id); ?> .urban .blockquote,
    .page-id-<?php echo esc_attr($post_id); ?> .alia .banner-wrap .title,
    .page-id-<?php echo esc_attr($post_id); ?> .urban .banner-wrap .title,
    .page-id-<?php echo esc_attr($post_id); ?> .simple_slider .info-wrap .name,
    .page-id-<?php echo esc_attr($post_id); ?> .comments .content .comment-reply-link,
    .page-id-<?php echo esc_attr($post_id); ?> .post-details .date-post span,
    .page-id-<?php echo esc_attr($post_id); ?> .alia .text-gallery-wrap .additional-text,
    .page-id-<?php echo esc_attr($post_id); ?> .post-details .author span,
    .page-id-<?php echo esc_attr($post_id); ?> .header_top_bg .right-menu .logo span,
    .page-id-<?php echo esc_attr($post_id); ?> .header_top_bg #topmenu .menu > li > a,
    .page-id-<?php echo esc_attr($post_id); ?> .about-section .title,
    .page-id-<?php echo esc_attr($post_id); ?> .simple_gallery .info-item-wrap .name,
    .page-id-<?php echo esc_attr($post_id); ?> .portfolio-single-content.left_gallery .info-wrap .title,
    .page-id-<?php echo esc_attr($post_id); ?> .tg-post-simple .title,
    .page-id-<?php echo esc_attr($post_id); ?> .about-section.simple_text .description h1,
    .page-id-<?php echo esc_attr($post_id); ?> .about-section.simple_text .description h2,
    .page-id-<?php echo esc_attr($post_id); ?> .about-section.simple_text .description h3,
    .page-id-<?php echo esc_attr($post_id); ?> .about-section.simple_text .description h4,
    .page-id-<?php echo esc_attr($post_id); ?> .about-section.simple_text .description h5,
    .page-id-<?php echo esc_attr($post_id); ?> .about-section.simple_text .description h6,
    .page-id-<?php echo esc_attr($post_id); ?> .about-section.classic .content-wrap .blockquote,
    .page-id-<?php echo esc_attr($post_id); ?> .services.center .content .title,
    .page-id-<?php echo esc_attr($post_id); ?> .about-section.classic .content-wrap .author,
    .page-id-<?php echo esc_attr($post_id); ?> .headings .title,
    .page-id-<?php echo esc_attr($post_id); ?> .comments .comments-title,
    .page-id-<?php echo esc_attr($post_id); ?> .comments .comments-title span,
    .page-id-<?php echo esc_attr($post_id); ?> .contacts-info-wrap .content-item div,
    .page-id-<?php echo esc_attr($post_id); ?> .contacts-info-wrap .content-item a,
    .page-id-<?php echo esc_attr($post_id); ?> .skill-wrapper.linear .title,
    .page-id-<?php echo esc_attr($post_id); ?> .contacts-info-wrap.style3 .text,
    .page-id-<?php echo esc_attr($post_id); ?> .skill-wrapper.linear .skill-value,
    .page-id-<?php echo esc_attr($post_id); ?> .tg-post-simple-2 .tg-element-3,
    .page-id-<?php echo esc_attr($post_id); ?> .tg-post-simple-2 .tg-element-1,
    .page-id-<?php echo esc_attr($post_id); ?> .single-pagination>div a.content,
    .page-id-<?php echo esc_attr($post_id); ?> .preloader-modern .loader-title,
    .page-id-<?php echo esc_attr($post_id); ?> .preloader-modern .loader-subtitle,
    .page-id-<?php echo esc_attr($post_id); ?> .info-block-wrap .title,
    .page-id-<?php echo esc_attr($post_id); ?> .parallax-window .content-parallax .title,
    .page-id-<?php echo esc_attr($post_id); ?> .parallax-window .content-parallax .info-item-wrap .item .name,
    .page-id-<?php echo esc_attr($post_id); ?> .info-block-wrap .content h1,
    .page-id-<?php echo esc_attr($post_id); ?> .info-block-wrap .content h2,
    .page-id-<?php echo esc_attr($post_id); ?> .info-block-wrap .content h3,
    .page-id-<?php echo esc_attr($post_id); ?> .info-block-wrap .content h4,
    .page-id-<?php echo esc_attr($post_id); ?> .info-block-wrap .content h5,
    .page-id-<?php echo esc_attr($post_id); ?> .info-block-wrap .content h6,
    .page-id-<?php echo esc_attr($post_id); ?> .post-slider-wrapper .title,
    .page-id-<?php echo esc_attr($post_id); ?> .service-list-wrapper .content-wrap .a-btn,
    .page-id-<?php echo esc_attr($post_id); ?> .pricing-info .title,
    .page-id-<?php echo esc_attr($post_id); ?> .pricing-info .price,
    .page-id-<?php echo esc_attr($post_id); ?> .pricing-info .currency,
    .page-id-<?php echo esc_attr($post_id); ?> .filter_slider .portfolio-tabs-wrapper .filters ul li,
    .page-id-<?php echo esc_attr($post_id); ?> .filter_slider .portfolio-tabs-wrapper .title,
    .page-id-<?php echo esc_attr($post_id); ?> .services.default .content .title,
    .page-id-<?php echo esc_attr($post_id); ?> .services.default .content .text,
    .page-id-<?php echo esc_attr($post_id); ?> .service-list-wrapper .title,
    .page-id-<?php echo esc_attr($post_id); ?> .skill-wrapper.linear .skill-label,
    .page-id-<?php echo esc_attr($post_id); ?> .comments .person .author,
    .page-id-<?php echo esc_attr($post_id); ?> .main-header-testimonial.modern .content-slide .name,
    .page-id-<?php echo esc_attr($post_id); ?> .main-header-testimonial.modern .content-slide .description p,
    .page-id-<?php echo esc_attr($post_id); ?> .filter_slider .swiper3-pagination .swiper3-pagination-bullet-active i,
    .page-id-<?php echo esc_attr($post_id); ?> .main-header-testimonial.modern .swiper3-button-next::before,
    .page-id-<?php echo esc_attr($post_id); ?> .main-header-testimonial.modern .swiper3-button-prev::before,
    .page-id-<?php echo esc_attr($post_id); ?> .user-info-wrap .post-author__title,
    .page-id-<?php echo esc_attr($post_id); ?> .post.metro-style .info-wrap .title,
    .page-id-<?php echo esc_attr($post_id); ?> .single-post .title,
    .page-id-<?php echo esc_attr($post_id); ?> .simple_slider .text-wrap .title,
    .page-id-<?php echo esc_attr($post_id); ?> .tile_info .recent-posts-wrapper .title,
    .page-id-<?php echo esc_attr($post_id); ?> .right-menu .f-right li a,
    .page-id-<?php echo esc_attr($post_id); ?> #topmenu ul li a,
    .page-id-<?php echo esc_attr($post_id); ?> .mob-nav{
        color: #fff;
    }

    .page-id-<?php echo esc_attr($post_id); ?> .simple_slider .post-media .swiper3-pagination-bullet-active,
    .page-id-<?php echo esc_attr($post_id); ?> .right-menu.full .mob-nav .line{
        background-color: #fff;
    }
    .page-id-<?php echo esc_attr($post_id); ?> .skill-wrapper.linear .skill-label{
        opacity: 1;
    }

    body.page-id-<?php echo esc_attr($post_id); ?>,
    .page-id-<?php echo esc_attr($post_id); ?> .post-paper.masonry,
    .page-id-<?php echo esc_attr($post_id); ?> .blog.metro,
    .page-id-<?php echo esc_attr($post_id); ?> .archive.metro,
    .page-id-<?php echo esc_attr($post_id); ?> .metro-load-more,
    .page-id-<?php echo esc_attr($post_id); ?> #grid-1009 .tg-item-content-holder,
    .page-id-<?php echo esc_attr($post_id); ?> .header_top_bg,
    .page-id-<?php echo esc_attr($post_id); ?> .services.default,
    .page-id-<?php echo esc_attr($post_id); ?> .right-menu.left #topmenu .sub-menu,
    .page-id-<?php echo esc_attr($post_id); ?> header:not(.aside-menu):not(.full) #topmenu ul li.mega-menu:hover > ul::before,
    .page-id-<?php echo esc_attr($post_id); ?> #topmenu{
        background-color: #0d0d0d;
    }

    .page-id-<?php echo esc_attr($post_id); ?> .tg-post-simple .title{
        color: #fff!important;
    }

.page-id-<?php echo esc_attr($post_id); ?> .post-list .tg-item-content-holder,
    .page-id-<?php echo esc_attr($post_id); ?> .tg-post-simple-2 .tg-item-content-holder{
        background-color: #0d0d0d!important;
    }

    .page-id-<?php echo esc_attr($post_id); ?> .contacts-info-wrap .content-item div,
    .page-id-<?php echo esc_attr($post_id); ?> .contacts-info-wrap .content-item a{
        font-weight: 700;
    }
    .page-id-<?php echo esc_attr($post_id); ?> .skill-wrapper.linear .line,
    .page-id-<?php echo esc_attr($post_id); ?> .post-slider-wrapper .swiper3-pagination{
        background-color: #333;
    }
    .page-id-<?php echo esc_attr($post_id); ?> .post-slider-wrapper.slider_progress .content-wrap,
    .page-id-<?php echo esc_attr($post_id); ?> .preloader-modern,
    .page-id-<?php echo esc_attr($post_id); ?> .contacts-info-wrap.style7,
    .page-id-<?php echo esc_attr($post_id); ?> .service-list-wrapper .content-wrap,
    .page-id-<?php echo esc_attr($post_id); ?> .pricing-item.active,
    .page-id-<?php echo esc_attr($post_id); ?> .user-info-wrap .post-author,
    .page-id-<?php echo esc_attr($post_id); ?> .post.metro-style .info-wrap,
    .page-id-<?php echo esc_attr($post_id); ?> .post.metro-style .post-wrap-item,
    .page-id-<?php echo esc_attr($post_id); ?> .comments .comment .content,
    .page-id-<?php echo esc_attr($post_id); ?> .parallax-window .content-parallax,
    .page-id-<?php echo esc_attr($post_id); ?> #contactform textarea,
    .page-id-<?php echo esc_attr($post_id); ?> #contactform input:not([type="submit"]),
    .page-id-<?php echo esc_attr($post_id); ?> .comments-form textarea,
    .page-id-<?php echo esc_attr($post_id); ?> .urban .banner-wrap,
    .page-id-<?php echo esc_attr($post_id); ?> .tile_info .recent-posts-wrapper,
    .page-id-<?php echo esc_attr($post_id); ?> .comments-form input:not([type="submit"]),
    .page-id-<?php echo esc_attr($post_id); ?> .contacts-info-wrap .form input:not([type="submit"]),
    .page-id-<?php echo esc_attr($post_id); ?> .contacts-info-wrap .form textarea{
        background-color: #222222;
    }

    .page-id-<?php echo esc_attr($post_id); ?> .contacts-info-wrap .form input:not([type="submit"]),
    .page-id-<?php echo esc_attr($post_id); ?> #contactform textarea,
    .page-id-<?php echo esc_attr($post_id); ?> #contactform input:not([type="submit"]),
    .page-id-<?php echo esc_attr($post_id); ?> .comments-form textarea,
    .page-id-<?php echo esc_attr($post_id); ?> .comments-form input:not([type="submit"]),
    .page-id-<?php echo esc_attr($post_id); ?> .post-slider-wrapper.slider_progress .swiper3-slide,
    .page-id-<?php echo esc_attr($post_id); ?> .contacts-info-wrap .form textarea{
        border-color: #4d4d4d;
    }

    .page-id-<?php echo esc_attr($post_id); ?> .skill-wrapper.linear .text,
    .page-id-<?php echo esc_attr($post_id); ?> .post-slider-wrapper .category,
    .page-id-<?php echo esc_attr($post_id); ?> .skill-wrapper.linear-text .text,
    .page-id-<?php echo esc_attr($post_id); ?> .post.metro-style .info-wrap .text p,
    .page-id-<?php echo esc_attr($post_id); ?> .tg-post-simple-2 .tg-element-5{
        color: #999;
    }

    .page-id-<?php echo esc_attr($post_id); ?> .contacts-info-wrap .form input:not([type="submit"]):-ms-input-placeholder,
    .page-id-<?php echo esc_attr($post_id); ?> .contacts-info-wrap .form textarea:-ms-input-placeholder{
        color: #888;
    }

    .page-id-<?php echo esc_attr($post_id); ?> .contacts-info-wrap .form input:not([type="submit"])::-webkit-input-placeholder,
    .page-id-<?php echo esc_attr($post_id); ?> .contacts-info-wrap .form textarea::-webkit-input-placeholder{
        color: #888;
    }

    .page-id-<?php echo esc_attr($post_id); ?> .contacts-info-wrap .form input:not([type="submit"])::-moz-placeholder,
    .page-id-<?php echo esc_attr($post_id); ?> .contacts-info-wrap .form textarea::-moz-placeholder{
        color: #888;
    }

    .page-id-<?php echo esc_attr($post_id); ?> .top-banner.simple.with-border{
        border-color: #0d0d0d;
    }
    .page-id-<?php echo esc_attr($post_id); ?> .video.only-button .video-content::before,
    .page-id-<?php echo esc_attr($post_id); ?> .video.only-button .video-content::after{
        opacity: .3;
    }
    .page-id-<?php echo esc_attr($post_id); ?> .tg-post-simple .tg-element-10{
        text-transform: uppercase;
    }
    .page-id-<?php echo esc_attr($post_id); ?> .services.center i span{
        opacity: .2;
    }
    
    .page-id-<?php echo esc_attr($post_id); ?> .tg-post-simple .tg-element-4{
        color: rgba(255,255,255,.4);
    }
    .page-id-<?php echo esc_attr($post_id); ?> .tg-post-simple .category.main-color::after{
        background-color: rgba(255,255,255,.4);
    }

    .page-id-<?php echo esc_attr($post_id); ?> .video.only-button .video-content .play:hover{
        background-color: #fff;
    }
    .page-id-<?php echo esc_attr($post_id); ?> .headings-wrap .title-bg,
    .page-id-<?php echo esc_attr($post_id); ?> .about-section .title-bg,
    .page-id-<?php echo esc_attr($post_id); ?> .main-header-testimonial.modern .bg-text,
    .page-id-<?php echo esc_attr($post_id); ?> .info-block-wrap.style-3 .bg-text{
        color: rgba(255,255,255,.1);
    }

    @media only screen and (min-width: <?php echo esc_attr($min_mobile); ?>) {
        .page-id-<?php echo esc_attr($post_id); ?> .right-menu.full #topmenu{
            background-color: rgba(0,0,0,.95);
        }
        .page-id-<?php echo esc_attr($post_id); ?> .header_top_bg .right-menu.full #topmenu ul li a,
        .page-id-<?php echo esc_attr($post_id); ?> .right-menu.full .mob-nav > span{
            color: #fff;
        }
    }
    @media only screen and (max-width: <?php echo esc_attr($max_mobile); ?>) {
        .page-id-<?php echo esc_attr($post_id); ?> .mob-nav-close,
        .page-id-<?php echo esc_attr($post_id); ?> #topmenu .pao-top-social .social li a{
            color: #fff;
        }
        .page-id-<?php echo esc_attr($post_id); ?> .right-menu .mob-nav .line,
        .page-id-<?php echo esc_attr($post_id); ?> .mob-nav-close .line{
            background-color: #fff;
        }
        .page-id-<?php echo esc_attr($post_id); ?> .right-menu.full #topmenu,
        .page-id-<?php echo esc_attr($post_id); ?> #topmenu ul.menu,
        .page-id-<?php echo esc_attr($post_id); ?> #topmenu .f-right{
            background-color: #0d0d0d;
        }
        .page-id-<?php echo esc_attr($post_id); ?> .mob-nav-close{
            border-bottom: 1px solid #444;
        }
        .page-id-<?php echo esc_attr($post_id); ?> #topmenu ul.menu li a::before{
            background-color: #444;
        }
    }


<?php }

if(cs_get_option('enable_dark') && isset($meta_data['change_colors']) && !empty($meta_data['change_colors']) && isset($meta_data['page_main_color']) && !empty($meta_data['page_main_color'])){ ?>
    .page-id-<?php echo esc_attr($post_id); ?> .contacts-info-wrap .title,
    .page-id-<?php echo esc_attr($post_id); ?> .contacts-info-wrap.style3 .title-main{
        color: <?php echo esc_html($meta_data['page_main_color']) ?>;
        opacity: 1;
    }
<?php }
elseif(isset($meta_data['enable_dark']) && !empty($meta_data['enable_dark']) && isset($meta_data['change_colors']) && !empty($meta_data['change_colors']) && isset($meta_data['page_main_color']) && !empty($meta_data['page_main_color'])){ ?>
    .page-id-<?php echo esc_attr($post_id); ?> .contacts-info-wrap .title,
    .page-id-<?php echo esc_attr($post_id); ?> .contacts-info-wrap.style3 .title-main{
        color: <?php echo esc_html($meta_data['page_main_color']) ?>;
        opacity: 1;
    }

<?php }
elseif(cs_get_option('enable_dark')){ ?>
    .contacts-info-wrap .title{
        color: #fd8558;
        opacity: 1;
    }
<?php }
elseif(isset($meta_data['enable_dark']) && !empty($meta_data['enable_dark'])){ ?>
.page-id-<?php echo esc_attr($post_id); ?> .contacts-info-wrap .title{
    color: #fd8558;
    opacity: 1;
}
<?php }

if(cs_get_option('enable_font')){ ?>
    @font-face {
        font-family: SignPainter_HouseScript;
        src: url(<?php echo PAO_T_URI; ?>/assets/fonts/SignPainter_HouseScript.ttf);
        font-weight: normal;
    }
    .about-section.simple_text .content-wrap .subtitle,
    .headings .subtitle,
    .skill-wrapper.linear .subtitle,
    .contacts-info-wrap.style3 .title-main,
    .about-section .subtitle,
    .contacts-info-wrap .title{
        font-family: SignPainter_HouseScript;
        font-size: 40px;
        text-transform: lowercase;
    }

    @media only screen and (max-width: 767px){
        .about-section.simple_text .content-wrap .subtitle,
        .headings .subtitle,
        .skill-wrapper.linear .subtitle,
        .contacts-info-wrap.style3 .title-main,
        .about-section .subtitle,
        .contacts-info-wrap .title{
            font-size: 30px;
        }
    }
<?php }
elseif(isset($meta_data['enable_font']) && !empty($meta_data['enable_font'])){ ?>
    @font-face {
        font-family: SignPainter_HouseScript;
        src: url(<?php echo PAO_T_URI; ?>/assets/fonts/SignPainter_HouseScript.ttf);
        font-weight: normal;
    }
    .page-id-<?php echo esc_attr($post_id); ?> .about-section.simple_text .content-wrap .subtitle,
    .page-id-<?php echo esc_attr($post_id); ?> .headings .subtitle,
    .page-id-<?php echo esc_attr($post_id); ?> .skill-wrapper.linear .subtitle,
    .page-id-<?php echo esc_attr($post_id); ?> .contacts-info-wrap.style3 .title-main,
    .page-id-<?php echo esc_attr($post_id); ?> .about-section .subtitle,
    .page-id-<?php echo esc_attr($post_id); ?> .contacts-info-wrap .title{
        font-family: SignPainter_HouseScript;
        font-size: 40px;
        text-transform: lowercase;
    }

    @media only screen and (max-width: 767px){
        .page-id-<?php echo esc_attr($post_id); ?> .about-section.simple_text .content-wrap .subtitle,
        .page-id-<?php echo esc_attr($post_id); ?> .headings .subtitle,
        .page-id-<?php echo esc_attr($post_id); ?> .skill-wrapper.linear .subtitle,
        .page-id-<?php echo esc_attr($post_id); ?> .contacts-info-wrap.style3 .title-main,
        .page-id-<?php echo esc_attr($post_id); ?> .about-section .subtitle,
        .page-id-<?php echo esc_attr($post_id); ?> .contacts-info-wrap .title{
            font-size: 30px;
        }
    }

<?php }


/* ======= MAIN COLOR ON PAGE  ======= */


if(isset($meta_data['change_colors']) && !empty($meta_data['change_colors']) && isset($meta_data['page_main_color']) && !empty($meta_data['page_main_color'])){
    $meta_data['page_second_color'] = (isset($meta_data['page_second_color']) && !empty($meta_data['page_second_color'])) ? $meta_data['page_second_color'] : '#ffcf6d'; ?>

    .page-id-<?php echo esc_attr($post_id); ?> .tg-item .tg-item-inner .main-color,
    .page-id-<?php echo esc_attr($post_id); ?> .video.only-button .video-content .play:hover::before,
    .page-id-<?php echo esc_attr($post_id); ?> .skill-wrapper.linear .subtitle,
    .page-id-<?php echo esc_attr($post_id); ?> .about-section .subtitle,
    .page-id-<?php echo esc_attr($post_id); ?> .about-section.classic .content-wrap .blockquote i,
    .page-id-<?php echo esc_attr($post_id); ?> .services i,
    .page-id-<?php echo esc_attr($post_id); ?> .headings .subtitle,
    .page-id-<?php echo esc_attr($post_id); ?> .main-header-testimonial.simple_sl .stars,
    .page-id-<?php echo esc_attr($post_id); ?> .contacts-info-wrap .content-item a:hover,
    .page-id-<?php echo esc_attr($post_id); ?> .main-header-testimonial.modern .content-slide .description p::before,
    .page-id-<?php echo esc_attr($post_id); ?> .portfolio-single-content.left_gallery .social-list a:hover,
    .page-id-<?php echo esc_attr($post_id); ?> .parallax-window .content-parallax .category-parallax a,
    .page-id-<?php echo esc_attr($post_id); ?> .parallax-window .content-parallax .info-item-wrap .item .text-item a:hover,
    .page-id-<?php echo esc_attr($post_id); ?> .parallax-window .content-parallax .social-list>li a:hover,
    .page-id-<?php echo esc_attr($post_id); ?> .simple_gallery .categories a,
    .page-id-<?php echo esc_attr($post_id); ?> .simple_slider .info-wrap a:hover,
    .page-id-<?php echo esc_attr($post_id); ?> .simple_slider .info-wrap .social-list a:hover,
    .page-id-<?php echo esc_attr($post_id); ?> .simple_slider .blockquote::before,
    .page-id-<?php echo esc_attr($post_id); ?> .urban .info-item-wrap a:hover,
    .page-id-<?php echo esc_attr($post_id); ?> .urban .blockquote::before,
    .page-id-<?php echo esc_attr($post_id); ?> .urban .social-list a:hover,
    .page-id-<?php echo esc_attr($post_id); ?> .tile_info .text-gallery-wrap .info-item-wrap a:hover,
    .page-id-<?php echo esc_attr($post_id); ?> .tile_info .blockquote::before,
    .page-id-<?php echo esc_attr($post_id); ?> .tile_info .social-list a:hover,
    .page-id-<?php echo esc_attr($post_id); ?> .alia .text-gallery-wrap .info-item-wrap a:hover,
    .page-id-<?php echo esc_attr($post_id); ?> .alia .social-list a:hover,
    .page-id-<?php echo esc_attr($post_id); ?> .widget_product_search form::after, .widget_search form div::after,
    .page-id-<?php echo esc_attr($post_id); ?> .main-wrapper .col-md-4 .sidebar-item a:hover,
    .page-id-<?php echo esc_attr($post_id); ?> .main-wrapper .col-md-3 .sidebar-item a:hover,
    .page-id-<?php echo esc_attr($post_id); ?> .single-post .single-content blockquote p::before,
    .page-id-<?php echo esc_attr($post_id); ?> .bottom-infopwrap .social-list a:hover,
    .page-id-<?php echo esc_attr($post_id); ?> .user-info-wrap .post-author__social a:hover,
    .page-id-<?php echo esc_attr($post_id); ?> .comments .person .author:hover,
    .page-id-<?php echo esc_attr($post_id); ?> #contactform textarea,
    .page-id-<?php echo esc_attr($post_id); ?> #contactform input:not([type="submit"]),
    .page-id-<?php echo esc_attr($post_id); ?> .comments-form textarea,
    .page-id-<?php echo esc_attr($post_id); ?> .comments-form input:not([type="submit"]),
    .page-id-<?php echo esc_attr($post_id); ?> .single-pagination>div.pag-prev:hover::before,
    .page-id-<?php echo esc_attr($post_id); ?> .filter_slider .portfolio-tabs-wrapper .filters ul li:hover,
    .page-id-<?php echo esc_attr($post_id); ?> .filter_slider .portfolio-tabs-wrapper .filters ul li.active,
    .page-id-<?php echo esc_attr($post_id); ?> .menu_light_text.header_top_bg .right-menu #topmenu .sub-menu li a:hover,
    .page-id-<?php echo esc_attr($post_id); ?> .header_top_bg.bg-fixed-color.menu_light_text .right-menu #topmenu ul li.current > a:hover,
    .page-id-<?php echo esc_attr($post_id); ?> .header_top_bg.bg-fixed-color.menu_light_text .right-menu #topmenu ul li a:hover,
    .page-id-<?php echo esc_attr($post_id); ?> .filter_slider .portfolio-tabs-wrapper .filters ul li:hover span,
    .page-id-<?php echo esc_attr($post_id); ?> .filter_slider .portfolio-tabs-wrapper .filters ul li.active span,
    .page-id-<?php echo esc_attr($post_id); ?> .right-menu #topmenu  ul li.current_page_item  > a,
    .page-id-<?php echo esc_attr($post_id); ?> .top-menu #topmenu ul li.current_page_item  > a,
    .page-id-<?php echo esc_attr($post_id); ?> .info-block-wrap.style-6 .info-wrapper .subtitle,
    .page-id-<?php echo esc_attr($post_id); ?> .info-block-wrap.style-6 .bg-text,
    .page-id-<?php echo esc_attr($post_id); ?> .service-list-wrapper.simple .service-list-item-wrap .content-wrap .a-btn,
    .page-id-<?php echo esc_attr($post_id); ?> .pricing-item.modern .title,
    .page-id-<?php echo esc_attr($post_id); ?> .pricing-item.modern .currency,
    .page-id-<?php echo esc_attr($post_id); ?> .pricing-item.modern .price,
    .page-id-<?php echo esc_attr($post_id); ?> .info-block-wrap.style-6 .video.only-button .video-content .play:hover::before,
    .page-id-<?php echo esc_attr($post_id); ?> .tg-post-modern .tg-element-1,
    .page-id-<?php echo esc_attr($post_id); ?> .contacts-info-wrap.style8 .maps-wrapper .contact-form-wrap .subtitle,
    .page-id-<?php echo esc_attr($post_id); ?> .info-block-wrap.style-7 .info-wrapper .subtitle,
    .page-id-<?php echo esc_attr($post_id); ?> .services.classic_slider .content-slide .button-wrap a,
    .page-id-<?php echo esc_attr($post_id); ?> .services.accordion .accordeon a:hover,
    .page-id-<?php echo esc_attr($post_id); ?> .services.accordion .accordeon a:hover .title,
    .page-id-<?php echo esc_attr($post_id); ?> .tg-post-pao .tg-element-1,
    .page-id-<?php echo esc_attr($post_id); ?> .contacts-info-wrap.style9 .maps-wrapper .contact-form-wrap .subtitle {
        color: <?php echo esc_html($meta_data['page_main_color']) ?>;
    }

    .page-id-<?php echo esc_attr($post_id); ?> .preloader-modern .loader-title::after,
    .page-id-<?php echo esc_attr($post_id); ?> .tg-post-simple-2 .category span,
    .page-id-<?php echo esc_attr($post_id); ?> .post.metro-style .info-wrap .category a,
    .page-id-<?php echo esc_attr($post_id); ?> .post.metro-style.format-video .video-content .play:hover,
    .page-id-<?php echo esc_attr($post_id); ?> .post.metro-style.format-post-video .video-content .play:hover,
    .page-id-<?php echo esc_attr($post_id); ?> .post.metro-style.format-gallery .flex-direction-nav .flex-prev:hover,
    .page-id-<?php echo esc_attr($post_id); ?> .post.metro-style.format-gallery .flex-direction-nav .flex-next:hover,
    .page-id-<?php echo esc_attr($post_id); ?> .post.metro-style.format-post-slider .flex-direction-nav .flex-prev:hover,
    .page-id-<?php echo esc_attr($post_id); ?> .post.metro-style.format-post-slider .flex-direction-nav .flex-next:hover,
    .page-id-<?php echo esc_attr($post_id); ?> .portfolio-single-content.left_gallery .single-pagination.left_gallery a.content,
    .page-id-<?php echo esc_attr($post_id); ?> .portfolio-single-content .single-pagination>div a.content,
    .page-id-<?php echo esc_attr($post_id); ?> .urban .banner-wrap .title::after,
    .page-id-<?php echo esc_attr($post_id); ?> .post-details .single-categories a,
    .page-id-<?php echo esc_attr($post_id); ?> .post-slider-wrapper .swiper3-pagination-progressbar,
    .page-id-<?php echo esc_attr($post_id); ?> .tg-post-modern .tg-element-6,
    .page-id-<?php echo esc_attr($post_id); ?> .tg-post-pao .category span {
        background-color: <?php echo esc_html($meta_data['page_main_color']) ?>;
    }

    .page-id-<?php echo esc_attr($post_id); ?> .form.btn-style-1 input[type='submit']:hover,
    .page-id-<?php echo esc_attr($post_id); ?> .form.btn-style-2 input[type='submit']:hover,
    .page-id-<?php echo esc_attr($post_id); ?> .a-btn-1:hover,
    .page-id-<?php echo esc_attr($post_id); ?> .a-btn-2:hover,
    .page-id-<?php echo esc_attr($post_id); ?> #contactform #submit:hover,
    .page-id-<?php echo esc_attr($post_id); ?> #contactform #submit:focus,
    .page-id-<?php echo esc_attr($post_id); ?> .comments-form #submit:hover,
    .page-id-<?php echo esc_attr($post_id); ?> .comments-form #submit:focus,
    .page-id-<?php echo esc_attr($post_id); ?> .main-wrapper .col-md-4 .sidebar-item.widget_tag_cloud a:hover,
    .page-id-<?php echo esc_attr($post_id); ?> .main-wrapper .col-md-3 .sidebar-item.widget_tag_cloud a:hover,
    .page-id-<?php echo esc_attr($post_id); ?> .main-wrapper .col-md-3 .sidebar-item.widget_tag_cloud a:hover {
        border-color: <?php echo esc_html($meta_data['page_main_color']) ?>;
        color: <?php echo esc_html($meta_data['page_main_color']) ?>;
    }

.page-id-<?php echo esc_attr($post_id); ?> .info-block-wrap.style-6 .video.only-button .video-content .play,
.page-id-<?php echo esc_attr($post_id); ?> .contacts-info-wrap.style8 .maps-wrapper .contact-form-wrap .form input:not([type="submit"]):focus,
.page-id-<?php echo esc_attr($post_id); ?> .contacts-info-wrap.style8 .maps-wrapper .contact-form-wrap .form textarea:focus,
.page-id-<?php echo esc_attr($post_id); ?> .contacts-info-wrap.style9 .maps-wrapper .contact-form-wrap .form input:not([type="submit"]):focus,
.page-id-<?php echo esc_attr($post_id); ?> .contacts-info-wrap.style9 .maps-wrapper .contact-form-wrap .form textarea:focus {
    border-color: <?php echo esc_html($meta_data['page_main_color']) ?>;
}

    <?php

    function hex2rgba($color, $opacity = false) {

        $default = 'rgb(0,0,0)';

        //Return default if no color provided
        if(empty($color))
              return $default;

        //Sanitize $color if "#" is provided
            if ($color[0] == '#' ) {
                $color = substr( $color, 1 );
            }

            //Check if color has 6 or 3 characters and get values
            if (strlen($color) == 6) {
                    $hex = array( $color[0] . $color[1], $color[2] . $color[3], $color[4] . $color[5] );
            } elseif ( strlen( $color ) == 3 ) {
                    $hex = array( $color[0] . $color[0], $color[1] . $color[1], $color[2] . $color[2] );
            } else {
                    return $default;
            }

            //Convert hexadec to rgb
            $rgb =  array_map('hexdec', $hex);

            //Check if opacity is set(rgba or rgb)
            if($opacity){
                if(abs($opacity) > 1)
                    $opacity = 1.0;
                $output = 'rgba('.implode(",",$rgb).','.$opacity.')';
            } else {
                $output = 'rgb('.implode(",",$rgb).')';
            }

            //Return rgb(a) color string
            return $output;
    }

     ?>

    .page-id-<?php echo esc_attr($post_id); ?> .form.btn-style-2 input[type='submit'],
    .page-id-<?php echo esc_attr($post_id); ?> .a-btn-2 {
        box-shadow: 0 10px 10px 0 <?php echo esc_html(hex2rgba($meta_data['page_main_color'], 0.25)) ?>;
    }

    .page-id-<?php echo esc_attr($post_id); ?> .form.btn-style-1 input[type='submit'],
    .page-id-<?php echo esc_attr($post_id); ?> .form.btn-style-2 input[type='submit'],
    .page-id-<?php echo esc_attr($post_id); ?> .a-btn-1,
    .page-id-<?php echo esc_attr($post_id); ?> .a-btn-2,
    .page-id-<?php echo esc_attr($post_id); ?> #contactform #submit, .comments-form #submit {
        border-color: <?php echo esc_html($meta_data['page_main_color']) ?>;
        background-color: <?php echo esc_html($meta_data['page_main_color']) ?>;
        background-image: linear-gradient(to right, transparent 50%, <?php echo esc_html($meta_data['page_main_color']) ?> 50%);
    }

    .page-id-<?php echo esc_attr($post_id); ?> .a-btn-3 {
        border-color: <?php echo esc_html($meta_data['page_main_color']) ?>;
        background-image: linear-gradient(to right, <?php echo esc_html($meta_data['page_main_color']) ?> 50%, transparent 50%);
    }

    .page-id-<?php echo esc_attr($post_id); ?> .a-btn-3:hover {
        background-color: <?php echo esc_html($meta_data['page_main_color']) ?>;
        border-color: <?php echo esc_html($meta_data['page_main_color']) ?>;
    }

    .page-id-<?php echo esc_attr($post_id); ?> .video.only-button .video-content .play {
        border-color: <?php echo esc_html($meta_data['page_main_color']) ?>;
        background-color: <?php echo esc_html($meta_data['page_main_color']) ?>;
    }

    .page-id-<?php echo esc_attr($post_id); ?> #contactform textarea:focus,
    .page-id-<?php echo esc_attr($post_id); ?> #contactform input:not([type="submit"]):focus,
    .page-id-<?php echo esc_attr($post_id); ?> .comments-form textarea:focus,
    .page-id-<?php echo esc_attr($post_id); ?> .comments-form input:not([type="submit"]):focus {
        border-color: <?php echo esc_html($meta_data['page_main_color']) ?>;
    }

    .page-id-<?php echo esc_attr($post_id); ?> .tg-simple .tg-bottom-holder .link-icon:hover {
        border: 2px solid <?php echo esc_html($meta_data['page_main_color']) ?> !important;
    }

    .page-id-<?php echo esc_attr($post_id); ?> .tg-pao-resume .tg-item-media-content,
    .page-id-<?php echo esc_attr($post_id); ?> .skill-wrapper.linear .line .active-line {
        background-image: linear-gradient(271deg, <?php echo esc_html($meta_data['page_second_color']) ?>, <?php echo esc_html($meta_data['page_main_color']) ?>);
    }

    .page-id-<?php echo esc_attr($post_id); ?> .team-members-wrap.inline .team-member .member-info-wrap,
    .page-id-<?php echo esc_attr($post_id); ?> .info-block-wrap.style-6 .video.only-button .video-content .play {
        background-image: linear-gradient(319deg, <?php echo esc_html($meta_data['page_second_color']) ?>, <?php echo esc_html($meta_data['page_main_color']) ?>);
    }

    .page-id-<?php echo esc_attr($post_id); ?> .pricing-item.modern.active {
        background-image: linear-gradient(330deg, <?php echo esc_html($meta_data['page_second_color']) ?>, <?php echo esc_html($meta_data['page_main_color']) ?>);
    }

    .page-id-<?php echo esc_attr($post_id); ?> .contacts-info-wrap .form input:not([type="submit"]):focus,
    .page-id-<?php echo esc_attr($post_id); ?> .contacts-info-wrap .form textarea:focus {
        border-color: <?php echo esc_html($meta_data['page_main_color']) ?>;
        outline-color: <?php echo esc_html($meta_data['page_main_color']) ?>;
        color: <?php echo esc_html($meta_data['page_main_color']) ?>;
    }

    @media (min-width: 992px) {
        .page-id-<?php echo esc_attr($post_id); ?> .right-menu #topmenu a:hover,
        .page-id-<?php echo esc_attr($post_id); ?> .right-menu #topmenu .social li a:hover {
            color: <?php echo esc_html($meta_data['page_main_color']) ?>;
        }

        .page-id-<?php echo esc_attr($post_id); ?> .right-menu #topmenu > ul > li.current-menu-item > a,
        .page-id-<?php echo esc_attr($post_id); ?> .top-menu #topmenu > ul > li.current-menu-item > a,
        .page-id-<?php echo esc_attr($post_id); ?> .right-menu #topmenu > ul > li.current-menu-parent > a,
        .page-id-<?php echo esc_attr($post_id); ?> .top-menu #topmenu > ul > li.current-menu-parent > a {
            color: <?php echo esc_html($meta_data['page_main_color']) ?>;
        }
    }

    @media (max-width: 991px) {
        .page-id-<?php echo esc_attr($post_id); ?> #topmenu .menu li a:hover, #topmenu .menu .current-menu-parent > a, #topmenu .menu .current-menu-item > a, #topmenu .menu .current-menu-ancestor > a {
            color: <?php echo esc_html($meta_data['page_main_color']) ?>;
        }
    }

    @media only screen and (min-width: 992px) {
        .page-id-<?php echo esc_attr($post_id); ?> .right-menu.center-menu-style .f-right li a:hover {
            color: <?php echo esc_html($meta_data['page_main_color']) ?>;
        }
    }


<?php }


//TYPOGRAPHY

$options = apply_filters( 'cs_get_option', get_option( CS_OPTION ) );

function get_str_by_number($str){
$number = preg_replace("/[0-9|\.]/", '', $str);
return $number;
}

foreach ($options as $key => $item) {
if (is_array($item)) {
	if (!empty($item['variant']) && $item['variant'] == 'regular') {
		$item['variant'] = 'normal';
	}
}
$options[$key] = $item;
}

function calculateFontWeight( $fontWeight ) {
$fontWeightValue = '';
$fontStyleValue = '';

switch( $fontWeight ) {
	case '100':
		$fontWeightValue = '100';
		break;
	case '100italic':
		$fontWeightValue = '100';
		$fontStyleValue = 'italic';
		break;
	case '300':
		$fontWeightValue = '300';
		break;
	case '300italic':
		$fontWeightValue = '300';
		$fontStyleValue = 'italic';
		break;
	case '500':
		$fontWeightValue = '500';
		break;
	case '500italic':
		$fontWeightValue = '500';
		$fontStyleValue = 'italic';
		break;
	case '700':
		$fontWeightValue = '700';
		break;
	case '700italic':
		$fontWeightValue = '700';
		$fontStyleValue = 'italic';
		break;
	case '900':
		$fontWeightValue = '900';
		break;
	case '900italic':
		$fontWeightValue = '900';
		$fontStyleValue = 'italic';
		break;
	case 'italic':
		$fontStyleValue = 'italic';
		break;
}

return array('weight' => $fontWeightValue, 'style' => $fontStyleValue);
}

$all_button_font = $options['all_button_font_family']; ?>

.a-btn, .a-btn-2, .a-btn-3, .a-btn-4,
.btn-style-1 input[type="submit"],
.btn-style-2 input[type="submit"],
.btn-style-3 input[type="submit"],
.btn-style-4 input[type="submit"] {
    <?php if(!empty($all_button_font['family'])){
	    echo "font-family: \"{$all_button_font['family']}\" !important;";
    }

    $variant = calculateFontWeight( $all_button_font['variant'] );

    if(!empty($variant['style'])) : ?> font-style: <?php echo esc_html( $variant['style']); ?> !important;
    <?php endif;

    if(!empty($variant['weight'])) : ?> font-weight: <?php echo esc_html( $variant['weight']); ?> !important;
    <?php endif;

    $button_font_style = get_str_by_number($all_button_font['variant']);

    if(!empty($button_font_style) && !empty($all_button_font['family'])){
        echo "font-style:{$button_font_style} !important;";
    }

    $all_button_font_size = get_number_str($options['all_button_font_size']);

    if(!empty($all_button_font_size)){
        echo "font-size: {$all_button_font_size}px !important;";
    }

    $all_button_line_height = get_number_str($options['all_button_line_height']);

    if(!empty($all_button_line_height)){
       echo "line-height:{$all_button_line_height}px !important;";
    }

    if(!empty($options['all_button_letter_spacing'])){
        echo "letter-spacing:{$options['all_button_letter_spacing']} !important;";
    } ?>
}

<?php $all_links_font= $options['all_links_font_family']; ?>

a {
    <?php if(!empty($all_links_font['family'])){
        echo "font-family: \"{$all_links_font['family']}\" !important;";
    }

    $variant = calculateFontWeight( $all_links_font['variant'] );

    if(!empty($all_links_font['family']) && !empty($variant['style'])) : ?> font-style: <?php echo esc_html( $variant['style']); ?> !important;
    <?php endif;

    if(!empty($variant['weight'])) : ?> font-weight: <?php echo esc_html( $variant['weight']); ?> !important;
    <?php endif;

    $links_font_family = get_str_by_number($all_links_font['variant']);

    if(!empty($links_font_family) && !empty($all_links_font['family'])) {
        echo "font-style:{$links_font_family} !important;";
    }

    $all_links_font_size = get_number_str($options['all_links_font_size']);

    if(!empty($all_links_font_size)){
        echo "font-size: {$all_links_font_size}px !important;" ;
    }

    $all_links_line_height = get_number_str($options['all_links_line_height']);

    if(!empty($all_links_line_height)){
        echo "line-height:{$all_links_line_height}px !important;";
    }

    $all_links_letter_spacing = get_number_str($options['all_links_letter_spacing']);

    if(!empty($all_links_letter_spacing)){
        echo "letter-spacing:{$all_links_letter_spacing} !important;";
    } ?>
}

/*FOOTER*/
<?php function get_number_str($str){
    $number = preg_replace("/[^0-9|\.]/", '', $str);
    return $number;
}

/* FOR TITLE H1 - H6 */
if ( cs_get_option('heading') ) {
    foreach (cs_get_option('heading') as $title) {
        $font_family = $title['heading_family'];
        echo esc_attr($title['heading_tag']); ?> ,
        <?php echo esc_attr($title['heading_tag']); ?> a {

           <?php if($font_family['family']){
               echo "font-family: {$font_family['family']} !important;";
           }

           $one_title_size = get_number_str($title['heading_size']);

           if($one_title_size){
               echo "font-size: {$one_title_size}px !important;\n line-height: normal;";
           }?>
        }

<?php }
} ?>

#topmenu ul.menu > li > a {
    <?php if ( cs_get_option('menu_item_family') ) {

        $font_family = cs_get_option('menu_item_family');

        if(!empty($font_family['family'])){ ?> font-family: "<?php echo esc_html( $font_family['family'] ); ?>", sans-serif;
        <?php }

        $variant = calculateFontWeight( $font_family['variant'] );

        if(!empty($variant['style'])) : ?> font-style: <?php echo esc_html( $variant['style']); ?> !important;
        <?php endif;

        if(!empty($variant['weight'])) : ?> font-weight: <?php echo esc_html( $variant['weight']); ?> !important;
        <?php endif;
    }
    if ( cs_get_option('menu_item_size') ) {
        $menu_item_size = get_number_str(cs_get_option('menu_item_size'));  ?> font-size: <?php echo esc_html( $menu_item_size ); ?>px!important;
    <?php }

    if ( cs_get_option('menu_line_height') ) {
        $menu_line_height = get_number_str(cs_get_option('menu_line_height'));  ?> line-height: <?php echo esc_html( $menu_line_height ); ?>px!important;
    <?php } ?>
}

#topmenu ul ul li a {
    <?php if ( cs_get_option('submenu_item_family') ) {

        $font_family = cs_get_option('submenu_item_family');

        if(!empty($font_family['family'])){ ?> font-family: "<?php echo esc_html( $font_family['family'] ); ?>", sans-serif;
        <?php }

        $variant = calculateFontWeight( $font_family['variant'] );

        if(!empty($variant['style'])) : ?> font-style: <?php echo esc_html( $variant['style']); ?> !important;
        <?php endif;

        if(!empty($variant['weight'])) : ?> font-weight: <?php echo esc_html( $variant['weight']); ?> !important;
        <?php endif;
    }

    if ( cs_get_option('submenu_item_size') ) {
        $submenu_item_size = get_number_str(cs_get_option('submenu_item_size')); ?> font-size: <?php echo esc_html( $submenu_item_size ); ?>px;
    <?php }

    if ( cs_get_option('submenu_line_height') ) {
        $submenu_line_height = get_number_str(cs_get_option('submenu_line_height'));  ?> line-height: <?php echo esc_html( $submenu_line_height ); ?>px;
    <?php } ?>
}

<?php if( cs_get_option( 'preloader_image' ) ) :

    $image_src = wp_get_attachment_image_url( cs_get_option( 'preloader_image' ), 'full', false ); ?>

    @-webkit-keyframes scaleout-image {
        0% {
            -webkit-transform: scale(0.5);
        }
        100% {
            -webkit-transform: scale(1);
            opacity: 0;
        }
    }

    @keyframes scaleout-image {
        0% {
            transform: scale(0.5);
            -webkit-transform: scale(0.5);
        }
        100% {
            transform: scale(1);
            -webkit-transform: scale(1);
            opacity: 0;
        }
    }

    .animsition-loading {
        background-color: white;
        z-index: 9999;
        background-image: url(<?php echo esc_url( $image_src ); ?>) !important;
        background-repeat: no-repeat !important;
        background-position: center center !important;
    }

    .animsition-loading:before {
        display: none;
    }

<?php endif; ?>