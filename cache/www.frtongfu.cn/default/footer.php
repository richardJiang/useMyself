﻿<?php  $_CMS['module']='shopwap'; ?><link type="text/css" rel="stylesheet"      href="<?php echo RESOURCE_ROOT;?>addons/common/fontawesome3/css/font-awesome.min.css"/><style>    a, a:visited {        text-decoration: none;        color: #333    }    .wx_nav, .WX_tab_inner, .wx_referrer {        display: box;        display: -ms-box;        display: -webkit-box;        display: flex;        display: -ms-flexbox;        display: -webkit-flex    }    .wx_nav a, .WX_tab_inner a, .wx_referrer a {        display: block;        flex: 1;        -ms-flex: 1;        -webkit-flex: 1;        box-flex: 1;        -ms-box-flex: 1;        -webkit-box-flex: 1    }    .WX_bar:after {        clear: both;        content: '\20';        display: block    }    .WX_search_txt, .hd_search_txt {        background-image: url(http://www.frtongfu.cn/themes/default/__RESOURCE__/recouse/images/icon_ss.png)    }    .WX_msg_bar .msg_order:after {        display: block;        content: '\20';        position: absolute;        top: 50%;        width: 12px;        height: 12px;        border-top: 1px solid #7d7d7d;        border-left: 1px solid #7d7d7d;        background: none    }    .WX_msg_bar .msg_order:after {        margin-top: -6px;        -webkit-transform: rotate(135deg);        -ms-transform: rotate(135deg);        transform: rotate(135deg)    }    .wx_nav a:before, .WX_backtop:after, .wx_aside .btn_more:after, .wx_aside .btn_top:after {        background-image: url(http://www.frtongfu.cn/themes/default/__RESOURCE__/recouse/images/icon_nav_v2.png);        background-repeat: no-repeat;        background-size: 207px 46px;        -webkit-background-size: 207px 46px    }    .wx_nav {        overflow: hidden;        height: 49px;        position: fixed;        z-index: 900;        width: 100%;        bottom: 0;        left: 0;    }    .wx_nav a {        width: 200px;        height: 49px;        padding-top: 4px;        color: #FFF;        font-size: 12px;        filter: alpha(opacity=50);        background: rgba(49, 48, 48, 0.8) none repeat scroll 0 0 !important;        text-align: center    }    .wx_nav a:before {        width: 23px;        height: 23px;        content: '\20';        display: block;        margin: 0 auto 2px auto    }    .wx_nav a:active {        background-color: #FFF    }    .wx_nav a:active, .wx_nav a.on {        color: #FFF    }    .wx_nav a:active:before, .wx_nav a.on:before {        background-position-y: -23px    }    .wx_nav a.dot {        position: relative    }    .wx_nav a.dot:after {        content: '';        display: inline-block;        width: 7px;        height: 7px;        background: #e4393c;        border-radius: 4px;        position: absolute;        top: 5px;        left: 50%;        margin-left: 10px    }    .wx_nav .nav_index:before {        background-position: 0 0    }    .wx_nav .nav_search:before {        background-position: -46px 0    }    .wx_nav .nav_fav:before {        background-position: -23px 0    }    .wx_nav .nav_shopcart:before {        background-position: -138px 0    }    .wx_nav .nav_me:before {        background-position: -69px 0    }    .nav_me1:before {        background-position: -69px 0    }    .wx_nav .nav_newsfeed:before {        background-position: -161px 0    }    .wx_nav .nav_shopping_guide:before {        background-position: -184px 0    }</style><div style="height:30px"></div><div class="wx_nav">    <a href="<?php  echo mobile_url('shopindex');?>" data-href="###" ptag="37080.1.1" class="nav_index on">首页</a>    <a href="<?php  echo mobile_url('listCategory')?>" ptag="37080.1.2" class="nav_search" style="display:">分类</a>    <a href="<?php  echo mobile_url('mycart')?>" ptag="37080.1.3" class="nav_shopcart">购物车</a>    <a href="<?php  echo mobile_url('fansindex')?>" ptag="37080.1.4" class="nav_me">我的</a></div>