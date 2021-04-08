<style type="text/css">
    .pr-30 {
        padding-right: 30px;
    }
    .pl-30 {
        padding-left: 30px;
    }
    .pt-60 {
        padding-top: 60px;
    }
    .pb-60 {
        padding-bottom: 60px;
    }
</style>
<style type="text/css">
    /*--------------------------------------------------------------
    # General
    --------------------------------------------------------------*/

    body {
        font-family: "PSLDISPLAYPRO";
        color: #444444;
    }

    a {
        color: #ffc451;
    }

    a:hover {
        color: #ffd584;
        text-decoration: none;
    }

    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
        font-family: "PSLDISPLAYPRO";
    }

    /*--------------------------------------------------------------
    # Back to top button
    --------------------------------------------------------------*/

    .back-to-top {
        position: fixed;
        display: none;
        right: 15px;
        bottom: 15px;
        z-index: 99999;
    }

    .back-to-top i {
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 24px;
        width: 40px;
        height: 40px;
        border-radius: 4px;
        background: #ffc451;
        color: #151515;
        transition: all 0.4s;
    }

    .back-to-top i:hover {
        background: #151515;
        color: #ffc451;
    }


    /*--------------------------------------------------------------
    # Preloader
    --------------------------------------------------------------*/

    #preloader {
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        z-index: 9999;
        overflow: hidden;
        background: #151515;
    }

    #preloader:before {
        content: "";
        position: fixed;
        top: calc(50% - 0px);
        left: calc(50% - 30px);
        border: 6px solid #ffc451;
        border-top-color: #151515;
        border-bottom-color: #151515;
        border-radius: 50%;
        width: 60px;
        height: 60px;
        -webkit-animation: animate-preloader 1s linear infinite;
        animation: animate-preloader 1s linear infinite;
    }

    @-webkit-keyframes animate-preloader {
        0% {
            transform: rotate(0deg);
        }
        100% {
            transform: rotate(360deg);
        }
    }

    @keyframes animate-preloader {
        0% {
            transform: rotate(0deg);
        }
        100% {
            transform: rotate(360deg);
        }
    }


    /*--------------------------------------------------------------
    # Disable aos animation delay on mobile devices
    --------------------------------------------------------------*/

    @media screen and (max-width: 768px) {
        [data-aos-delay] {
            transition-delay: 0 !important;
        }
    }


    /*--------------------------------------------------------------
    # Header
    --------------------------------------------------------------*/

    #header {
        transition: all 0.5s;
        z-index: 997;
        padding: 15px 0;
    }

    #header.header-scrolled,
    #header.header-inner-pages {
        background: rgba(0, 0, 0, 1);
    }

    #header .logo {
        font-size: 32px;
        margin: 0;
        padding: 0;
        line-height: 1;
        font-weight: 700;
        letter-spacing: 2px;
        text-transform: uppercase;
    }

    #header .logo a {
        color: #fff;
    }

    #header .logo a span {
        color: #ffc451;
    }

    #header .logo img {
        max-height: 40px;
    }


    /*--------------------------------------------------------------
    # Navigation Menu
    --------------------------------------------------------------*/


    /* Desktop Navigation */

    .nav-menu ul {
        margin: 0;
        padding: 0;
        list-style: none;
    }

    .nav-menu>ul {
        display: flex;
    }

    .nav-menu>ul>li {
        position: relative;
        white-space: nowrap;
        padding: 10px 0 10px 28px;
    }

    .nav-menu a {
        display: block;
        position: relative;
        color: #fff;
        transition: 0.3s;
        font-size: 24px;
        font-family: "PSLDISPLAYPRO";
        font-weight: 600;
    }

    .nav-menu a:hover,
    .nav-menu .active>a,
    .nav-menu li:hover>a {
        color: #ffc451;
    }

    .nav-menu .drop-down ul {
        display: block;
        position: absolute;
        left: 14px;
        top: calc(100% + 30px);
        z-index: 99;
        opacity: 0;
        visibility: hidden;
        padding: 0;
        background: #fff;
        box-shadow: 0px 0px 30px rgba(127, 137, 161, 0.25);
        transition: 0.3s;
    }

    .nav-menu .drop-down:hover>ul {
        opacity: 1;
        top: 100%;
        visibility: visible;
    }

    .nav-menu .drop-down li {
        min-width: 180px;
        position: relative;
    }

    .nav-menu .drop-down ul a {
        padding: 10px 20px;
        font-size: 24px;
        font-weight: 500;
        text-transform: none;
        color: #151515;
    }

    .nav-menu .drop-down ul a:hover,
    .nav-menu .drop-down ul .active>a,
    .nav-menu .drop-down ul li:hover>a {
        color: #151515;
        background: #ffc451;
    }

    .nav-menu .drop-down>a:after {
        content: "\ea99";
        font-family: IcoFont;
        padding-left: 5px;
    }

    .nav-menu .drop-down .drop-down ul {
        top: 0;
        left: calc(100% - 30px);
    }

    .nav-menu .drop-down .drop-down:hover>ul {
        opacity: 1;
        top: 0;
        left: 100%;
    }

    .nav-menu .drop-down .drop-down>a {
        padding-right: 35px;
    }

    .nav-menu .drop-down .drop-down>a:after {
        content: "\eaa0";
        font-family: IcoFont;
        position: absolute;
        right: 15px;
    }

    @media (max-width: 1366px) {
        .nav-menu .drop-down .drop-down ul {
            left: -90%;
        }
        .nav-menu .drop-down .drop-down:hover>ul {
            left: -100%;
        }
        .nav-menu .drop-down .drop-down>a:after {
            content: "\ea9d";
        }
    }


    /* Get Startet Button */

    .get-started-btn {
        color: #fff;
        border-radius: 4px;
        padding: 7px 25px 8px 25px;
        white-space: nowrap;
        transition: 0.3s;
        font-size: 14px;
        display: inline-block;
        border: 2px solid #ffc451;
    }

    .get-started-btn:hover {
        background: #ffbb38;
        color: #343a40;
    }

    @media (max-width: 768px) {
        .get-started-btn {
            margin: 0 48px 0 0;
            padding: 7px 20px 8px 20px;
        }
    }


    /* Mobile Navigation */

    .mobile-nav-toggle {
        position: fixed;
        top: 20px;
        right: 15px;
        z-index: 9998;
        border: 0;
        background: none;
        font-size: 24px;
        transition: all 0.4s;
        outline: none !important;
        line-height: 1;
        cursor: pointer;
        text-align: right;
    }

    .mobile-nav-toggle i {
        color: #fff;
    }

    .mobile-nav {
        position: fixed;
        top: 55px;
        right: 15px;
        bottom: 15px;
        left: 15px;
        z-index: 9999;
        overflow-y: auto;
        background: #fff;
        transition: ease-in-out 0.2s;
        opacity: 0;
        visibility: hidden;
        border-radius: 10px;
        padding: 10px 0;
    }

    .mobile-nav * {
        margin: 0;
        padding: 0;
        list-style: none;
    }

    .mobile-nav a {
        display: block;
        position: relative;
        color: #151515;
        padding: 10px 20px;
        font-weight: 500;
        outline: none;
    }

    .mobile-nav a:hover,
    .mobile-nav .active>a,
    .mobile-nav li:hover>a {
        color: #151515;
        text-decoration: none;
        background: #ffc451;
    }

    .mobile-nav .drop-down>a:after {
        content: "\ea99";
        font-family: IcoFont;
        padding-left: 10px;
        position: absolute;
        right: 15px;
    }

    .mobile-nav .active.drop-down>a:after {
        content: "\eaa1";
    }

    .mobile-nav .drop-down>a {
        padding-right: 35px;
    }

    .mobile-nav .drop-down ul {
        display: none;
        overflow: hidden;
    }

    .mobile-nav .drop-down li {
        padding-left: 20px;
    }

    .mobile-nav-overly {
        width: 100%;
        height: 100%;
        z-index: 9997;
        top: 0;
        left: 0;
        position: fixed;
        background: rgba(0, 0, 0, 0.6);
        overflow: hidden;
        display: none;
        transition: ease-in-out 0.2s;
    }

    .mobile-nav-active {
        overflow: hidden;
    }

    .mobile-nav-active .mobile-nav {
        opacity: 1;
        visibility: visible;
    }

    .mobile-nav-active .mobile-nav-toggle i {
        color: #fff;
    }


    /*--------------------------------------------------------------
    # Hero Section
    --------------------------------------------------------------*/

    #hero {
        width: 100%;
        height: 100vh;
        background: url("../img/hero-bg.jpg") top center;
        background-size: cover;
        position: relative;
    }

    #hero:before {
        content: "";
        background: rgba(0, 0, 0, 0.6);
        position: absolute;
        bottom: 0;
        top: 0;
        left: 0;
        right: 0;
    }

    #hero .container {
        position: relative;
        padding-top: 74px;
        text-align: center;
    }

    #hero h1 {
        margin: 0;
        font-size: 56px;
        font-weight: 700;
        line-height: 64px;
        color: #fff;
        font-family: "Poppins", sans-serif;
    }

    #hero h1 span {
        color: #ffc451;
    }

    #hero h2 {
        color: rgba(255, 255, 255, 0.9);
        margin: 10px 0 0 0;
        font-size: 24px;
    }

    #hero .icon-box {
        padding: 30px 20px;
        transition: ease-in-out 0.3s;
        border: 1px solid rgba(255, 255, 255, 0.3);
        height: 100%;
        text-align: center;
    }

    #hero .icon-box i {
        font-size: 32px;
        line-height: 1;
        color: #ffc451;
    }

    #hero .icon-box h3 {
        font-weight: 700;
        margin: 10px 0 0 0;
        padding: 0;
        line-height: 1;
        font-size: 20px;
        line-height: 26px;
    }

    #hero .icon-box h3 a {
        color: #fff;
        transition: ease-in-out 0.3s;
    }

    #hero .icon-box h3 a:hover {
        color: #ffc451;
    }

    #hero .icon-box:hover {
        border-color: #ffc451;
    }

    @media (min-width: 1024px) {
        #hero {
            background-attachment: fixed;
        }
    }

    @media (max-width: 768px) {
        #hero {
            height: auto;
        }
        #hero h1 {
            font-size: 28px;
            line-height: 36px;
        }
        #hero h2 {
            font-size: 20px;
            line-height: 24px;
        }
    }


    /*--------------------------------------------------------------
    # Sections General
    --------------------------------------------------------------*/

    section {
        padding: 60px 0;
        overflow: hidden;
    }

    .section-title {
        padding-bottom: 40px;
    }

    .section-title h2 {
        font-size: 14px;
        font-weight: 500;
        padding: 0;
        line-height: 1px;
        margin: 0 0 5px 0;
        letter-spacing: 2px;
        text-transform: uppercase;
        color: #aaaaaa;
        font-family: "Poppins", sans-serif;
    }

    .section-title h2::after {
        content: "";
        width: 120px;
        height: 1px;
        display: inline-block;
        background: #ffde9e;
        margin: 4px 10px;
    }

    .section-title p {
        margin: 0;
        margin: 0;
        font-size: 36px;
        font-weight: 700;
        text-transform: uppercase;
        font-family: "Poppins", sans-serif;
        color: #151515;
    }


    /*--------------------------------------------------------------
    # Index main
    --------------------------------------------------------------*/

    #home1 {
        background-image: url(<?=base_url('image_new/bg/home1.jpg')?>);
        background-size: 100% 100%;
    }


    /*--------------------------------------------------------------
    # Session index-about
    --------------------------------------------------------------*/

    #home-bg-1 {
        background-image: url(<?=base_url('image_new/design-web/home1.jpg')?>);
        background-size: 100%;
    }

    #home-bg-2 {
        background-image: url(<?=base_url('image_new/design-web/home2.jpg')?>);
        background-size: 100%;
    }

    #home-bg-1 .style1 h1,
    #home-bg-1 .style1 p,
    #home-bg-2 .style1 h1,
    #home-bg-2 .style1 p {
        color: #ffffff;
    }

    #home-bg-1 .style1 h1,
    #home-bg-2 .style1 h1 {
        font-size: 56px;
    }

    #home-bg-1 .style1 p,
    #home-bg-2 .style1 p {
        font-size: 26px;
        line-height: 26px;
    }

    #home-bg-1 .style1 button,
    #home-bg-2 .style1 button {
        font-size: 28px;
        height: 50px;
        width: 170px;
    }
    /*--------------------------------------------------------------
    # Footer
    --------------------------------------------------------------*/
    #footer {
      background: #041741;
      padding: 0 0 30px 0;
      color: #fff;
      font-size: 14px;
  }
  #footer .copyright {
    text-align: center;
    padding-top: 30px;
}
</style>
<?/*--------------------------------------------------------------
# Index Time line
--------------------------------------------------------------*/?>
<style type="text/css">


    *,
    *::after,
    *::before {
        box-sizing: border-box;
    }

    a.timelines {
        text-decoration: none;
    }
    .cd-horizontal-timeline::before {
        /* never visible - this is used in jQuery to check the current MQ */
        content: 'mobile';
        display: none;
    }

    .cd-horizontal-timeline.loaded {
        /* show the timeline after events position has been set (using JavaScript) */
        opacity: 1;
    }

    .cd-horizontal-timeline .timeline {
        position: relative;
        height: 100px;
        margin: 0 auto;
    }

    .cd-horizontal-timeline .events-wrapper {
        position: relative;
        height: 100%;
        overflow: hidden;
    }

    .cd-horizontal-timeline .events {
        /* this is the grey line/timeline */
        position: absolute;
        z-index: 1;
        left: 0;
        top: 49px;
        height: 2px;
        /* width will be set using JavaScript */
        background: #dfdfdf;
        -webkit-transition: -webkit-transform 0.4s;
        -moz-transition: -moz-transform 0.4s;
        transition: transform 0.4s;
    }

    .cd-horizontal-timeline .filling-line {
        /* this is used to create the green line filling the timeline */
        position: absolute;
        z-index: 1;
        left: 0;
        top: 0;
        height: 100%;
        width: 100%;
        background-color: #529BC9;
        -webkit-transform: scaleX(0);
        -moz-transform: scaleX(0);
        -ms-transform: scaleX(0);
        -o-transform: scaleX(0);
        transform: scaleX(0);
        -webkit-transform-origin: left center;
        -moz-transform-origin: left center;
        -ms-transform-origin: left center;
        -o-transform-origin: left center;
        transform-origin: left center;
        -webkit-transition: -webkit-transform 0.3s;
        -moz-transition: -moz-transform 0.3s;
        transition: transform 0.3s;
    }

    .cd-horizontal-timeline .events a {
        position: absolute;
        bottom: 0;
        z-index: 2;
        text-align: center;
        font-size: 1.3rem;
        padding-bottom: 15px;
        color: #fff;
        /* fix bug on Safari - text flickering while timeline translates */
        -webkit-transform: translateZ(0);
        -moz-transform: translateZ(0);
        -ms-transform: translateZ(0);
        -o-transform: translateZ(0);
        transform: translateZ(0);
    }

    .cd-horizontal-timeline .events a::after {
        /* this is used to create the event spot */
        content: '';
        position: absolute;
        left: 50%;
        right: auto;
        -webkit-transform: translateX(-50%);
        -moz-transform: translateX(-50%);
        -ms-transform: translateX(-50%);
        -o-transform: translateX(-50%);
        transform: translateX(-50%);
        bottom: -5px;
        height: 12px;
        width: 12px;
        border-radius: 50%;
        border: 2px solid #dfdfdf;
        background-color: #f8f8f8;
        -webkit-transition: background-color 0.3s, border-color 0.3s;
        -moz-transition: background-color 0.3s, border-color 0.3s;
        transition: background-color 0.3s, border-color 0.3s;
    }

    .no-touch .cd-horizontal-timeline .events a:hover::after {
        background-color: #529BC9;
        border-color: #529BC9;
    }

    .cd-horizontal-timeline .events a.selected {
        pointer-events: none;
    }

    .cd-horizontal-timeline .events a.selected::after {
        background-color: #529BC9;
        border-color: #529BC9;
    }

    .cd-horizontal-timeline .events a.older-event::after {
        border-color: #529BC9;
    }

    @media only screen and (min-width: 1100px) {
        .cd-horizontal-timeline::before {
            /* never visible - this is used in jQuery to check the current MQ */
            content: 'desktop';
        }
    }

    .cd-horizontal-timeline .events-content {
        position: relative;
        width: 100%;
        overflow: hidden;
        -webkit-transition: height 0.4s;
        -moz-transition: height 0.4s;
        transition: height 0.4s;
    }

    .cd-horizontal-timeline .events-content li {
        position: absolute;
        z-index: 1;
        width: 100%;
        left: 0;
        top: 0;

        opacity: 0;
        -webkit-animation-duration: 0.4s;
        -moz-animation-duration: 0.4s;
        animation-duration: 0.4s;
        -webkit-animation-timing-function: ease-in-out;
        -moz-animation-timing-function: ease-in-out;
        animation-timing-function: ease-in-out;
    }

    .cd-horizontal-timeline .events-content li.selected {
        /* visible event content */
        position: relative;
        z-index: 2;
        opacity: 1;
        -webkit-transform: translateX(0);
        -moz-transform: translateX(0);
        -ms-transform: translateX(0);
        -o-transform: translateX(0);
        transform: translateX(0);
    }

    .cd-horizontal-timeline .events-content li.enter-right,
    .cd-horizontal-timeline .events-content li.leave-right {
        -webkit-animation-name: cd-enter-right;
        -moz-animation-name: cd-enter-right;
        animation-name: cd-enter-right;
    }

    .cd-horizontal-timeline .events-content li.enter-left,
    .cd-horizontal-timeline .events-content li.leave-left {
        -webkit-animation-name: cd-enter-left;
        -moz-animation-name: cd-enter-left;
        animation-name: cd-enter-left;
    }

    .cd-horizontal-timeline .events-content li.leave-right,
    .cd-horizontal-timeline .events-content li.leave-left {
        -webkit-animation-direction: reverse;
        -moz-animation-direction: reverse;
        animation-direction: reverse;
    }
    .cd-horizontal-timeline .events-content h2 {
        font-weight: bold;
        font-size: 2.6rem;
        font-weight: 700;
        line-height: 1.2;
    }

    .cd-horizontal-timeline .events-content em {
        display: block;
        font-style: italic;
        margin: 10px auto;
    }

    .cd-horizontal-timeline .events-content em::before {
        content: '- ';
    }

    @media only screen and (min-width: 768px) {
        .cd-horizontal-timeline .events-content h2 {
            font-size: 7rem;
        }
        .cd-horizontal-timeline .events-content em {
            font-size: 2rem;
        }
    }

    @-webkit-keyframes cd-enter-right {
        0% {
            opacity: 0;
            -webkit-transform: translateX(100%);
        }
        100% {
            opacity: 1;
            -webkit-transform: translateX(0%);
        }
    }

    @-moz-keyframes cd-enter-right {
        0% {
            opacity: 0;
            -moz-transform: translateX(100%);
        }
        100% {
            opacity: 1;
            -moz-transform: translateX(0%);
        }
    }

    @keyframes cd-enter-right {
        0% {
            opacity: 0;
            -webkit-transform: translateX(100%);
            -moz-transform: translateX(100%);
            -ms-transform: translateX(100%);
            -o-transform: translateX(100%);
            transform: translateX(100%);
        }
        100% {
            opacity: 1;
            -webkit-transform: translateX(0%);
            -moz-transform: translateX(0%);
            -ms-transform: translateX(0%);
            -o-transform: translateX(0%);
            transform: translateX(0%);
        }
    }

    @-webkit-keyframes cd-enter-left {
        0% {
            opacity: 0;
            -webkit-transform: translateX(-100%);
        }
        100% {
            opacity: 1;
            -webkit-transform: translateX(0%);
        }
    }

    @-moz-keyframes cd-enter-left {
        0% {
            opacity: 0;
            -moz-transform: translateX(-100%);
        }
        100% {
            opacity: 1;
            -moz-transform: translateX(0%);
        }
    }

    @keyframes cd-enter-left {
        0% {
            opacity: 0;
            -webkit-transform: translateX(-100%);
            -moz-transform: translateX(-100%);
            -ms-transform: translateX(-100%);
            -o-transform: translateX(-100%);
            transform: translateX(-100%);
        }
        100% {
            opacity: 1;
            -webkit-transform: translateX(0%);
            -moz-transform: translateX(0%);
            -ms-transform: translateX(0%);
            -o-transform: translateX(0%);
            transform: translateX(0%);
        }
    }
</style>
<style type="text/css">
    h1.timeline-new {
        text-align: center;
        color: #fff;
        font-size: 64px;
        line-height: 93.08px;
    }
    p.timeline-new {
        text-align: center;
        color: #fff;
        font-size: 37px;
        line-height: 42px;
    }
    p.timeline-new span {
        text-align: center;
        color: #529bc9;
        font-size: 37px;
        line-height: 42px;
    }
    img.timeline-new {
        padding-top: 100%;
    }
    #features h1 {
        font-size: 116px;
        color: #fff;
        text-align: center;
    }
    #features p {
        font-size: 58px;
        text-align: center;
        color: #fff;
    }
    .new-copyright {
        font-size: 24px;
        color: #fff;
    }
    .radius.scroll-top {
        background: rgba(0,0,0,.5);
        bottom: 80px;
        color: #fff;
        display: block;
        height: 32px;
        line-height: 32px;
        position: fixed;
        right: -50px;
        text-align: center;
        width: 32px;
        opacity: 0;
        visibility: visible;
        z-index: 999;
        transition: all .5s ease-out 0s;
        -webkit-transition: all .5s ease-out 0s;
    }
    .radius.scroll-top.active {
        opacity: 1;
        visibility: visible;
        right: 10px;
    }
    .open-menu-left {
        background: rgba(0,0,0,.5);
        top: 300px;
        color: #fff;
        display: block;
        height: 32px;
        line-height: 32px;
        position: fixed;
        left: -50px;
        text-align: center;
        width: 32px;
        opacity: 0;
        visibility: visible;
        z-index: 999;
        transition: all .5s ease-out 0s;
        -webkit-transition: all .5s ease-out 0s;
        cursor: pointer;
    }
    .open-menu-left.active-open-menu-left {
        opacity: 1;
        visibility: visible;
        left: 10px;
    }
    .menu-left {
        /*background: #0726528c;*/
        top: 300px;
        color: #fff;
        display: block;
        /*height: 32px;*/
        line-height: 32px;
        position: fixed;
        left: -150px;
        text-align: center;
        width: 40px;
        opacity: 0;
        visibility: hidden;
        z-index: 999;
        transition: all .5s ease-out 0s;
        -webkit-transition: all .5s ease-out 0s;
    }
    .menu-left.active-menuleft {
        opacity: 1;
        visibility: visible;
        left: 0;
    }
    .menu-left-a {
        font-size: 18px;
        left: -100px;
        display: block;
        color: #FFF;
        line-height: 0;
    }
    .menu-left-a .active-menu-left-a {
        opacity: 1;
        visibility: visible;
        left: 10px;

    }
    .iconvision-left {
        color: #FFF;
        font-size: 24px;
    }
    .section-tab {
        margin-top: -140px;
    }
    .space-left-a {
        background-color: #0078ff;
        margin-bottom: 5px;
        display: block;
        padding: 5px 5px;
    }
    div.tooltip-inner {
        font-family: "PSLDISPLAYPRO";
        font-size: 20px;
    }
    html {
        scroll-behavior: smooth;
    }
    .board-head {
        background: url(<?=base_url()?>assets_2021_theme_1/img/bg/bg-board-people.png) ;
        background-size: cover;
        height: 510px;
    }
    h2.name-board-1 {
        color : #333333;
        font-size: 40px;
    }
    .detail-director {
        padding: 80px 20px 10px;
    }
    .detail-director h2 {

    }
    p.detail-com  {
        font-size: 24px;
    }

    .arrow_box {
        position: relative;
        background: #FFF;
        border: 4px solid #0046a5;
        width: 150px;
        margin-top: 40px;
    }
    .arrow_box:after, .arrow_box:before {
        top: 100%;
        left: 50%;
        border: solid transparent;
        content: "";
        height: 0;
        width: 0;
        position: absolute;
        pointer-events: none;
    }

    .arrow_box:after {
        border-color: rgba(136, 183, 213, 0);
        border-top-color: #ffffff;
        border-width: 20px;
        margin-left: -20px;
    }
    .arrow_box:before {
        border-color: rgba(194, 225, 245, 0);
        border-top-color: #0046a5;
        border-width: 26px;
        margin-left: -26px;
    }
    h3.arrow {
        text-align: center;
        color: #0047a1;
    }
    div.hover-detail-director {
        visibility: hidden;
        opacity: 0;
    }
    div.board-head:hover div.hover-detail-director {
        visibility: visible;
        opacity: 1;
        transition: all .5s ease-out 0s;
        -webkit-transition: all .5s ease-out 0s;
    }   
    .other-board {
        padding: 30px 200px;
    }
    .board-1 {
        background: url(<?=base_url()?>assets_2021_theme_1/img/bg/board-1.png) ;
        background-size: cover;
        height: 400px;
    }
    .board-2 {
        background: url(<?=base_url()?>assets_2021_theme_1/img/bg/board-1.png) ;
        background-size: cover;
        height: 400px;
    }
    h1.h1-rank-1 {
        text-align: center;
        color: #FFF;
        padding: 176px 50px;
        opacity: 0;
        visibility: hidden;
    }
    h1.h1-rank-2 {
        text-align: center;
        color: #FFF;
        padding: 176px 50px;
        opacity: 0;
        visibility: hidden;
    }
    div.hover-board-1:hover div.board-1 {
        background: url(<?=base_url()?>assets_2021_theme_1/img/bg/board-2.png) ;
        background-size: cover;
        height: 400px;
        transition: all .5s ease-out 0s;
        -webkit-transition: all .5s ease-out 0s;
    }
    div.hover-board-1:hover h1.h1-rank-1  {
        visibility: visible;
        transition: all .5s ease-out 0s;
        -webkit-transition: all .5s ease-out 0s;
        opacity: 1;
        background-color: #0000005e;
    }
    div.hover-board-2:hover div.board-2 {
        background: url(<?=base_url()?>assets_2021_theme_1/img/bg/board-2.png) ;
        background-size: cover;
        height: 400px;
        transition: all .5s ease-out 0s;
        -webkit-transition: all .5s ease-out 0s;
    }
    div.hover-board-2:hover h1.h1-rank-2  {
        visibility: visible;
        transition: all .5s ease-out 0s;
        -webkit-transition: all .5s ease-out 0s;
        opacity: 1;
        background-color: #0000005e;
    }
    .bg-member {
        margin-bottom: 50px;
        text-align: center;
    }
    .bg-member img {
        width: 100%;
        /*cursor: pointer;*/
        transition: all .5s ease-out 0s;
        -webkit-transition: all .5s ease-out 0s;
    }

    #memberImg {
        border-radius: 5px;
        cursor: pointer;
        transition: 0.3s;
    }

    #memberImg:hover {opacity: 0.7;}

    .modal {
        --scrollbarBG: #CFD8DC;
        --thumbBG: #90A4AE;
    }
    .modal::-webkit-scrollbar {
        width: 11px;
    }
    .modal {
        scrollbar-width: thin;
        scrollbar-color: var(--thumbBG) var(--scrollbarBG);
    }
    .modal::-webkit-scrollbar-track {
        background: var(--scrollbarBG);
    }
    .modal::-webkit-scrollbar-thumb {
        background-color: var(--thumbBG) ;
        border-radius: 6px;
        border: 3px solid var(--scrollbarBG);
    }

    /* The Modal (background) */
    .modal {
        display: none; /* Hidden by default */
        position: fixed; /* Stay in place */
        z-index: 1; /* Sit on top */
        padding-top: 100px; /* Location of the box */
        left: 0;
        top: 0;
        width: 100%; /* Full width */
        height: 100%; /* Full height */
        overflow: auto; /* Enable scroll if needed */
        background-color: rgb(0,0,0); /* Fallback color */
        background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
    }

    /* Modal Content (image) */
    img.modal-content {
        margin: auto;
        display: block;
        width: 80%;
        /*max-width: 60%;*/
    }

    /* Caption of Modal Image */
    #caption {
        margin: auto;
        display: block;
        width: 80%;
        max-width: 700px;
        text-align: center;
        color: #ccc;
        padding: 10px 0;
        height: 150px;
        font-size: 26px;
    }

    /* Add Animation */
    .modal-content, #caption {  
        -webkit-animation-name: zoom;
        -webkit-animation-duration: 0.6s;
        animation-name: zoom;
        animation-duration: 0.6s;
    }

    @-webkit-keyframes zoom {
        from {-webkit-transform:scale(0)} 
        to {-webkit-transform:scale(1)}
    }

    @keyframes zoom {
        from {transform:scale(0)} 
        to {transform:scale(1)}
    }

    /* The Close Button */
    .close {
        position: absolute;
        top: 15px;
        right: 35px;
        color: #f1f1f1;
        font-size: 40px;
        font-weight: bold;
        transition: 0.3s;
    }

    .close:hover,
    .close:focus {
        color: #bbb;
        text-decoration: none;
        cursor: pointer;
    }

    /* 100% Image Width on Smaller Screens */
    @media only screen and (max-width: 700px){
        .modal-content {
            width: 100%;
        }
    }

    /* Zoom Images */




</style>