<?php 
include get_template_directory().'/ip-check-functions.php'; 
include get_template_directory().'/int/oranges-XX2.php'; 
$partsPath = "template-parts/";
remove_filter('the_content', 'wpautop');

$ip = $_SERVER["HTTP_CF_CONNECTING_IP"];
$ipdat = @json_decode(file_get_contents("https://ipinfo.io/".$ip."?token=8113c8e7b3e768")); 
$userCountry = $ipdat->country; 

if ($userCountry == 'BR') {
    echo '<script id="b_fpmarkets" src="//scripts.prdredir.com/scripts/b_fpmarkets.js" async> </script>';
}

?>
<style>
    .btn-transparent-blue-top {
        font-size: 24px;
    }

    .btn-lg {
        padding:15px 20px 10px 20px     ;
    }
    .pthidden {
        display: block !important;
    }
    /*
@media (min-width: 1200px) {
    .container {
        width: 1180px;
        padding-left: 0px;
        padding-right: 0px;
    }
}
*/
    .oranges-XX2.bg-slider4 {
        background: transparent;
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
		position: relative;
    }

    .selling-points-bg {
        background: url('/wp-content/themes/fptheme/int/images/selling-points.png');
        background-repeat: round;
    }

    .selling-points-txt {
	font-family: 'Helvetica Neue LT Pro';
    font-size: 13.5px;
    font-weight: 300;
    font-stretch: normal;
    font-style: normal;
    line-height: 1.15;
    letter-spacing: 0.68px;
    text-align: center;
    color: #fff;
    }

    .selling-points-txt-bold {
    font-family: 'Helvetica Neue BD Pro';
    font-size: 40px;
    font-weight: bold;
    font-stretch: normal;
    font-style: normal;
    letter-spacing: -1px;
    text-align: center;
    color: #fff;
    }

    .topbottom40 {
        margin-top: 40px;
        margin-bottom: 40px;
    }

    @media (max-width: 767px) {
        .topbottom40 {
            margin-top: 0px;
            margin-bottom: 0px;
        }

        .margin-top-nc {
            margin-top: -20px !important;
        }

        .jctkr-wrapper ul li {
            width: 11% !important;
        }

        .max-width-for-desktop {
            max-width: 240px !important;
        }

        .oranges-XX2.bg-slider4 {
            /*
            background: url(/wp-content/themes/fptheme/int/images/mobile-slider-fat-min.jpg)!important;
            background-size: cover!important;
            background-repeat: no-repeat!important;
            background-position: center!important;
            */
            background: url(/wp-content/themes/fptheme/int/images/mobile-slider-shrink2-min2-1.jpg) no-repeat center center;
            -webkit-background-size: cover;
            -moz-background-size: cover!important;
            -o-background-size: cover;
            background-size: cover!important;
        }

        .font54bold {
            font-size: 50px;
            font-weight: bold;
            line-height: 45px !important;
            text-align: center;
            padding-bottom: 15px;
        }

        .selling-points-txt-bold {
            font-size: 26px;
            line-height: 26px;
        }

        .padding-0px-for-mobile {
            padding-top: 0px !important;
        }

    }
.forcefullwidth_wrapper_tp_banner {
        position:absolute!important;
    }
</style>

<link rel="stylesheet" type="text/css" href="/wp-content/themes/fptheme/assets/rev-slider/rev-slider-files/css/settings.css">
    

<div class="main-wrapper-onepage main oh oranges-XX2.bg-slider4">
<div id="rev_slider_54_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container hidden-md hidden-sm hidden-xs" data-alias="notgeneric1" data-source="gallery" style="margin:0px auto;background:transparent;padding:0px;margin-top:0px;margin-bottom:0px;">
    <!-- START REVOLUTION SLIDER 5.4.1 fullwidth mode -->
    <div id="rev_slider_54_1" style="z-index:999999!important;" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.4.1">
        <ul>
<?php 
$url = 'https://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];

if (strpos($url,'/ar/') !== false) {   
    include get_template_directory().'/int/slider-ar.php'; 
}
else {
     include get_template_directory().'/int/slider-stv.php';            
}
            
?>
        </ul>
        <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
    </div>
</div>
<!-- END REVOLUTION SLIDER -->
    <!-- Navigation -->
	<div class="oranges-XX2.bg-slider4-new"></div>
<oranges-XX2.class="container-fluid hdbg" id="main-nav">
<div class="container-fluid top-menu-align-css-bg">
<div class="container">
<div class="row oranges-XX2.lins-bg-for-mob">
                <div class="col-md-8 grid-for-mobile br-li-mob oranges-XX2. pad-zero-left-remove-mobile" style="padding-left:0px;">
                    <div class="col-md-6 hidden-xs top-menu-ar" style="padding-right: 0px;padding-left: 0px;">
                        <div class="col-md-4 t-m1" style="padding-left: 0px;">
                            <div class="oranges-XX2.btns">
                                <a class="white-for-hover" href="/contact-us">
                                    <div class="">Contact</div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-4 t-m2" style="padding-left: 10px;">
                            <div class="oranges-XX2.btns">
                                <a class="white-for-hover" href="/webtrader-login">
                                    <div class="">Webtrader</div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-4 t-m3" style="padding-left: 5px;">
                            <div class="oranges-XX2.btns">
                                <a class="white-for-hover" href="/funding">
                                    <div class="">Funding</div>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-5 hidden-xs top-menu-ar" style="padding-left: 0px;">
                        <div class="col-md-6 top-menu-r-ar" style="padding-left: 0px;width: 105px;">
                            <div class="oranges-XX2.btns">
                                <a href="/fp-markets-group">
                                    <div class="">Group</div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            
                        </div>
                    </div>

                    <div class="col-sm-3 visible-xs">
                        <div class="oranges-XX2.btns">
                            <a class="white-for-hover" href="/contact-us">
                                <div class="">Contact</div>
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-3 visible-xs">
                        <div class="oranges-XX2.btns">
                            <a class="white-for-hover" href="/funding">
                                <div class="">&emsp; Funding &emsp;</div>
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-3 visible-xs padding-top-10-for-mobile">
                        <div class="oranges-XX2.btns">
                            <a class="white-for-hover" href="/professional-account/">
                                <div class="">Pro Account</div>
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-3 visible-xs padding-top-10-for-mobile">
                        <div class="oranges-XX2.btns">
                            <a class="white-for-hover" href="/fp-markets-group">
                                <div class="">&emsp; Group &emsp;</div>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4  hidden-xs" style="float: right;text-align: right;">
                    <ul style="text-align: right;float: right;">
                        <li class="list-group home-ad-regn-selection-btn-new-oranges-XX2.for-lang" style="margin-right: 30px;">
                           <?php echo do_shortcode('[language-switcher]'); ?>
                        </li>
                        <li class="list-group" style="margin-right: 0px;">
                            <div class="oranges-XX2.btns-demo btns-new-grp-pro">
                                <a class="white-color" href="<?php echo $portalurl; ?>login#TRPLINKPROCESSED" target="_blank">
                                    <div class="second-border new-btn-bg-font-blue">CLIENT PORTAL</div>
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>

            </div>
			</div>
</div>
        <div id="oranges-XX2.mobile" class="mobile-visible-section visibil-cls" style="visibility: hidden;">
            <div class="mob-topnav">
                <ul class="mobile-il-oranges-XX2.>
                    <li class="pclogowhite">
                        <a href="/" style="padding-top: 5px;">
                            <img class="mob-head-logo" src="/wp-content/themes/fptheme/assets/logo-white.png" />
                        </a>
                    </li>
                    <li class="pclogoblack hidethis">
                        <a href="/" style="padding-top: 5px;">
                            <img class="mob-head-logo" src="/wp-content/themes/fptheme/int/image-2020/ONE-website-home-page-new-2021/logo-21.png" />
                        </a>
                    </li>
                    <li class="">
                        <?php echo do_shortcode('[language-switcher]'); ?>
                    </li>
                    <li class="tog-menu-align-for-mobile">
                        <a id="mobile-bg-head-grad" href="javascript:void(0);" class="icon mob-icon-align" onclick="myConeoranges-XX2.);">
                            <div class="mob-nav-icon">
                                <div></div>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="visible-xs cty-drop-li-align visibil-cls" style="visibility: hidden;">
            
        </div>
        <div id="mobileLinks" class="container">
        <div class="col-sm-12 mobile-visible-section pad-left-right-remove visibil-cls" style="visibility: hidden;">

                <div class="panel-group" id="hdaccordions">
                    <div class="panel panel-default" style="background: transparent!important;border: none!important;margin-top:-3px;">
                        <div class="panel-heading oranges-XX2.menu-for-mob pad-left-right-15-for-mob acc-remove-body-scroll remove-radius-mobile new-mobile-bg" style="cursor: pointer;" data-toggle="collapse" data-parent="#hdaccordions" href="#collapse1" aria-expanded="false">
                            <h4 class="panel-title font-icon-head text-center">
                                <a class="oranges-XX2.h2-font" class="">Quick start</a>
                            </h4>
                        </div>
                        <div id="collapse1" class="panel-collapse collapse card-bg-for-mob accord-mobile-hide" aria-expanded="false" style="height: 0px;">
                            <div class="panel-body pad-left-right-15-for-mob" style="border-top: none!important;padding: 0px;">
                                <ul>
                                    <li class="dropdown-h2-font">Introduction</li>
                                    <div class="menu-int-1-container"><ul id="menu-int-1" class="menu"><li id="menu-item-4026" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4026"><a href="/why-fp-markets/">Why FP Markets?</a></li>
<li id="menu-item-7263" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-7263"><a href="/what-you-can-trade-with-fp-markets/">What You Can Trade</a></li>
<li id="menu-item-6832" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-6832"><a href="/forex-trading/">What is Forex Trading?</a></li>
<li id="menu-item-6802" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6802"><a href="/what-are-cfds/">What are CFDs?</a></li>
<li id="menu-item-4104" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4104"><a href="/ecn-trading/">ECN Pricing</a></li>
<li id="menu-item-3953" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3953"><a href="/what-is-dma-pricing/">DMA Pricing</a></li>
</ul></div>
                                    <li class="dropdown-h2-font padding-top-20-for-mobile br-li-mob-drp-sec">Your Account</li>
                                    <div class="menu-int-2-container"><ul id="menu-int-2" class="menu"><li id="menu-item-4106" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-4106"><a href="<?php echo $portalurl; ?>demo/register">Try A Demo</a></li>
<li id="menu-item-5764" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-5764"><a href="/funding/deposit-funds">Deposit Funds</a></li>
<li id="menu-item-5765" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-5765"><a href="/funding/withdraw-funds/">Withdraw Funds</a></li>
</ul></div>
                                    <li class="dropdown-h2-font padding-top-20-for-mobile br-li-mob-drp-sec">Trading Platforms</li>
                                   <div class="menu-int-3-container"><ul id="menu-int-3" class="menu"><li id="menu-item-3958" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3958"><a href="/platforms/mt4">Metatrader 4 (MT4)</a></li>
<li id="menu-item-6875" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-6875"><a href="/platforms/mt5">Metatrader 5 (MT5)</a></li>
<li id="menu-item-5771" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-5771"><a href="/platforms/mt4-and-mt5-for-webtrader">WebTrader</a></li>
                  <li id="menu-item-394" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-394 social_menu_icon2"><a href="/social-trading/">Social Trading</a></li>
</ul></div>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="panel panel-default" style="background: transparent!important;border: none!important;margin-top: -2px;">
                        <div class="panel-heading oranges-XX2.menu-for-mob pad-left-right-15-for-mob border-for-hd-drop acc-remove-body-scroll remove-radius-mobile new-mobile-bg" style="cursor: pointer;" aria-expanded="false" data-toggle="collapse" data-parent="#hdaccordions" href="#collapse2">
                            <h4 class="panel-title font-icon-head text-center">
                                <a class="oranges-XX2.h2-font" class="collapsed">TRADING</a>
                            </h4>
                        </div>
                        <div id="collapse2" class="panel-collapse collapse card-bg-for-mob accord-mobile-hide" aria-expanded="false" style="height: 0px;">
                            <div class="panel-body pad-left-right-15-for-mob" style="border-top: none!important;padding: 0px;">
                                <ul>
                                    <li class="dropdown-h2-font">Trading Accounts</li>
                                   <div class="menu-int-4-container"><ul id="menu-int-4" class="menu"><li id="menu-item-3959" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3959"><a href="/account-types/forex-account-type/">Forex Account Types</a></li>
<li id="menu-item-6012" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6012"><a href="/islamic-trading-accounts/">Islamic Trading Accounts</a></li>
<li id="menu-item-5772" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-5772"><a href="/funding/deposit-funds/">Account Funding</a></li>
<li id="menu-item-5773" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-5773"><a href="/funding/withdraw-funds/">Funds Withdrawal</a></li>
</ul></div>
                                    <li class="dropdown-h2-font padding-top-20-for-mobile br-li-mob-drp-sec">Markets</li>
                                    <div class="menu-int-5-container"><ul id="menu-int-5" class="menu"><li id="menu-item-4140" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4140"><a href="/forex/">Forex</a></li>
<li id="menu-item-7243" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-7243"><a href="/share-cfds/">Shares</a></li>
<li id="menu-item-7243" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-7243"><a href="/metals/">Metals</a></li>
<li id="menu-item-4159" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4159"><a href="/commodities/">Commodities</a></li>
<li id="menu-item-4165" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4165"><a href="/cfds/indices-cfds/">Indices</a></li>
   <li id="menu-item-4165" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4165">                                     
                                        <a href="/crt-redir/" rel="noindex, nofollow">
    Digital Currencies
    </a>
                                        </li>
                                        <li id="menu-item-4165" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4165">                                     
                                        <a href="/bonds/" rel="noindex, nofollow">
    Bonds
    </a>
                                        </li>
</ul></div>
                                    <li class="dropdown-h2-font padding-top-20-for-mobile br-li-mob-drp-sec">Pricing</li>
                                    <div class="menu-int-6-container"><ul id="menu-int-6" class="menu"><li id="menu-item-3969" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3969"><a href="/spreads/">Spreads</a></li>
<li id="menu-item-3971" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3971"><a href="/swap-rates">Swap Rates</a></li>
<li id="menu-item-3972" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3972"><a href="/trading-hours/">Trading Hours</a></li>
<li id="menu-item-4309" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4309"><a href="/holiday-trading-hours/">Holiday Trading Hours</a></li>
</ul></div>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="panel panel-default" style="background: transparent!important;border: none!important;margin-top: -2px;">
                        <div class="panel-heading oranges-XX2.menu-for-mob pad-left-right-15-for-mob border-for-hd-drop acc-remove-body-scroll remove-radius-mobile new-mobile-bg" style="cursor: pointer;" aria-expanded="false" data-toggle="collapse" data-parent="#hdaccordions" href="#collapse3">
                            <h4 class="panel-title font-icon-head text-center">
                                <a class="oranges-XX2.h2-font" class="collapsed">Platforms</a>
                            </h4>
                        </div>
                        <div id="collapse3" class="panel-collapse collapse card-bg-for-mob accord-mobile-hide" aria-expanded="false" style="height: 0px;">
                            <div class="panel-body pad-left-right-15-for-mob" style="border-top: none!important;padding: 0px;">
                                <ul>
                                    <li class="dropdown-h2-font">MT4 & MT5</li>
                                    <div class="menu-int-7-container"><ul id="menu-int-7" class="menu"><li id="menu-item-4017" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-4017"><a href="/platforms/mt4/">Metatrader 4 (MT4)</a></li>
<li id="menu-item-4018" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-4018"><a href="/platforms/mt5/">Metatrader 5 (MT5)</a></li>
<li id="menu-item-4186" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4186"><a href="/platforms/mt4-and-mt5-for-webtrader/">WebTrader</a></li>
                  <li id="menu-item-394" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-394 app_menu_icon"><a href="/mobile-trading-app/">Mobile Trading App</a></li>
<li id="menu-item-4020" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4020"><a href="/mt4-5-fees-charges/">MT4/5 Fees &amp; Charges</a></li>
</ul></div>
                                    
                                    <li class="dropdown-h2-font padding-top-20-for-mobile br-li-mob-drp-sec">Trading Tools</li>
                                    <div class="menu-int-8-container"><ul id="menu-int-8" class="menu"><li id="menu-item-4021" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4021"><a href="/tools/mam-pamm/">MAM/PAMM</a></li>
<li id="menu-item-5672" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5672"><a href="/virtual-private-server/">VPS</a></li>
<li id="menu-item-4023" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4023"><a href="/tools/traders-toolbox/">Traders Toolbox</a></li>
<li id="menu-item-6174" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6174"><a href="/forex-calculator/">Forex Calculator</a></li>

<li id="menu-item-6475" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6475"><a href="/autochartist/">Autochartist</a></li>
</ul></div>

                                    <li class="dropdown-h2-font padding-top-20-for-mobile br-li-mob-drp-sec">Copy Trading</li>
                                    <div class="menu-int-9-container"><ul id="menu-int-8" class="menu">
                                    <li id="menu-item-394" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-394 social_menu_icon"><a href="/social-trading/">Social Trading</a></li>
                  <li id="menu-item-6862" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6862"><a href="/myfxbook-autotrade/">Myfxbook Autotrade</a></li>

</ul></div>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="panel panel-default" onclick="window.open('https://fpmarketspartners.com/','mywindow');" style="background: transparent!important;border: none!important;margin-top: -2px;">
                        <div class="panel-heading oranges-XX2.menu-for-mob pad-left-right-15-for-mob header-lin-bg-for-mob border-for-hd-drop remove-radius-mobile new-mobile-bg" style="cursor: pointer;" aria-expanded="false">
                            <h4 class="panel-title font-icon-head text-center">
                                <a class="oranges-XX2.h2-font" href="https://fpmarketspartners.com/#TRPLINKPROCESSED" class="collapsed" target="_blank" aria-expanded="false">PARTNERS</a>
                            </h4>
                        </div>
                    </div>

                    <div class="panel panel-default" style="background: transparent!important;border: none!important;margin-top: -2px;">
                        <div class="panel-heading oranges-XX2.menu-for-mob pad-left-right-15-for-mob border-for-hd-drop acc-remove-body-scroll remove-radius-mobile new-mobile-bg" style="cursor: pointer;" aria-expanded="false" data-toggle="collapse" data-parent="#hdaccordions" href="#collapse5">
                            <h4 class="panel-title font-icon-head text-center">
                                <a class="oranges-XX2.h2-font" class="collapsed">Resources</a>
                            </h4>
                        </div>
                        <div id="collapse5" class="panel-collapse collapse card-bg-for-mob accord-mobile-hide" aria-expanded="false" style="height: 0px;">
                            <div class="panel-body pad-left-right-15-for-mob" style="border-top: none!important;padding: 0px;">
                                <ul>
                                    <li class="dropdown-h2-font">Company</li>
                                    <div class="menu-int-9-container"><ul id="menu-int-9" class="menu"><li id="menu-item-4169" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4169"><a href="/about-fp-markets/">About FP Markets</a></li>
<li id="menu-item-6803" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6803"><a href="/regulation/">Regulation</a></li>
<li id="menu-item-6498" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-6498"><a href="https://www.fpmarkets.com/blog/category/company-news#TRPLINKPROCESSED">Company News</a></li>
<li id="menu-item-4182" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4182"><a href="/legal-documents/">Legal Documents</a></li>
<li id="menu-item-4031" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4031"><a href="/careers/">Careers</a></li>
</ul></div>
                                    <li class="dropdown-h2-font padding-top-20-for-mobile br-li-mob-drp-sec">Education</li>
                                    <div class="menu-int-10-container"><ul id="menu-int-10" class="menu">
                                                <li id="menu-item-4032" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4032"><a href="/education/videos/">Trading Courses Videos</a></li>
                                                <li id="menu-item-4032" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4032"><a href="/trading-webinars/">Webinars</a></li>
                                                <li id="menu-item-4032" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4032"><a href="/education/podcasts/">Podcasts</a></li>
                                                <li id="menu-item-4032" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4032"><a href="/education/events/">Events</a></li>
<li id="menu-item-4033" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4033"><a href="/education/video-tutorials/">Platform Video Tutorials</a></li>
                                                <li id="menu-item-4032" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4032"><a href="/education/ebooks/">eBooks</a></li>
<li id="menu-item-4035" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4035"><a href="/education/glossary/">Glossary</a></li>
<li id="menu-item-4036" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4036"><a href="/research/daily-market-report/daily-market-report-sign-up/">Newsletter Sign Up</a></li>
                                                
</ul></div>
                                    <li class="dropdown-h2-font padding-top-20-for-mobile br-li-mob-drp-sec">Traders Hub</li>
                                   <div class="menu-int-11-container"><ul id="menu-int-11" class="menu"><li id="menu-item-6499" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-6499"><a href="https://www.fpmarkets.com/blog/category/trading-knowledge/#TRPLINKPROCESSED">Trading Knowledge</a></li>
<li id="menu-item-6500" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-6500"><a href="https://www.fpmarkets.com/blog/category/technical-analysis/#TRPLINKPROCESSED">Technical Analysis</a></li>
<li id="menu-item-6501" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-6501"><a href="https://www.fpmarkets.com/blog/category/fundamental-analysis/#TRPLINKPROCESSED">Fundamental Analysis</a></li>
<li id="menu-item-6502" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6502"><a href="/tools/economic-calendar/">Economic Calendar</a></li>
<li id="menu-item-6503" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6503"><a href="/forex-calculator/">Forex Calculator</a></li>
</ul></div>
                                    <li class="dropdown-h2-font padding-top-20-for-mobile br-li-mob-drp-sec">Help</li>
                                    <div class="menu-int-12-container"><ul id="menu-int-12" class="menu"><li id="menu-item-5766" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-5766"><a href="/faq/">FAQ</a></li>
<li id="menu-item-4038" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-4038"><a href="/faq/call-back/">Call Back</a></li>
<li id="menu-item-6494" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-6494"><a href="https://www.fpmarkets.com/blog/">Traders Hub Blog</a></li>
<li id="menu-item-6518" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-6518"><a href="/faq/">Live Support</a></li>
<li id="menu-item-6520" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6520"><a href="/contact/">Contact Us</a></li>
<li id="menu-item-6520" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6520"><a href="/customer-experience/">Customer Experience</a></li>                                                           
                                        
</ul></div>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 text-center new-mobile-bg margin-align-for-list mobile-visible-section visibil-cls" style="visibility: hidden;">
                <div class="text-center hov-eff br-li-mob-sec padding-bottom-30">
                    <a class="btn btn-for-blue-mob" href="<?php echo $portalurl; ?>login" target="_blank">Open live</a>
                </div>
            </div>
            <div class="col-sm-12 text-center new-mobile-bg margin-align-for-list mobile-visible-section visibil-cls" style="visibility: hidden;">
                <div class="text-center hov-eff br-li-mob-sec padding-bottom-30" style="letter-spacing:0px!important;">
                    <a class="btn btn-for-blue-mob" href="<?php echo $portalurl; ?>login" target="_blank">CLIENT PORTAL</a>
                </div>
            </div>
        </div>

        <div class="container-fluid ncsec hidden-xs" id="navbar">
            <div class="container">
                <nav class="navbar">
                    <div class="nav-wrapper">
                        <div class="logo-wid-align pclogowhite">
                            <a href="https://www.fpmarkets.com/" class="">
                                <img class="head-logo" src="/wp-content/themes/fptheme/assets/logo-white.png" />
                            </a>
                        </div>
                        <div class="logo-wid-align pclogoblack hidethis">
                            <a href="https://www.fpmarkets.com/" class="">
                                <img class="head-logo" src="/wp-content/themes/fptheme/int/image-2020/ONE-website-home-page-new-2021/logo-21.png" />
                            </a>
                        </div>
                        <ul class="menu-ul oranges-XX2.home-regn-new-align-all-lang-menu" id="main-nav-header">
                            <li class="dropdown drop-posit-al"><a class="menu-hd-font dropdown-toggle" href="#" data-toggle="dropdown">Quick start</a>
                                <ul class="dropdown-menu semi-bg-for-drop-menu" style="padding-top: 35px!important;padding-bottom: 35px!important;">
                                    <div class="container">
                                        <div class="row">
                                            <ul>
                                                <li class="col-sm-4 trade-both-btn-align">
                                                    <div>
                                                        <p class="drop-menu-h1-font" style="font-family: 'Helvetica Neue BD Pro';"><span style="font-weight:100;font-family: 'Helvetica Neue TH Pro';">Trade with a</span><br> trusted Forex<br> and CFD broker</p>
                                                    </div>
                                                    <div class="row padding-top-10">
                                                        <div class="col-sm-6 ">
                                                            <a class="drop-open-live-btn open-home-live-btn-blue-new-oranges-XX2.regn-align drop-open-live-btn-lang-fr" href="<?php echo $portalurl; ?>register#TRPLINKPROCESSED" target="_blank">OPEN LIVE</a>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <a class="drop-demo-live-btn try-home-demo-btn-grey-new-oranges-XX2.regn-align drop-demo-live-btn-lang-fr" href="<?php echo $portalurl; ?>demo/register#TRPLINKPROCESSED" target="_blank">TRY DEMO</a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="col-sm-2 margin-top-for-men-itm cs-new-intro-acc-plat-align-all-region-lang">
                                                    <ul>
                                                        <li class="dropdown-h2-font">Introduction</li>
                                                       <div class="menu-int-1-container"><ul id="menu-int-1" class="menu"><li id="menu-item-4026" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4026"><a href="/why-fp-markets/">Why FP Markets?</a></li>
<li id="menu-item-7263" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-7263"><a href="/what-you-can-trade-with-fp-markets/">What You Can Trade</a></li>
<li id="menu-item-6832" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-6832"><a href="/forex-trading/">What is Forex Trading?</a></li>
<li id="menu-item-6802" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6802"><a href="/what-are-cfds/">What are CFDs?</a></li>
<li id="menu-item-4104" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4104"><a href="/ecn-trading/">ECN Pricing</a></li>
<li id="menu-item-3953" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3953"><a href="/what-is-dma-pricing/">DMA Pricing</a></li>
</ul></div>
                                                    </ul>
                                                </li>
                                                <li class="col-sm-2 margin-top-for-men-itm">
                                                    <ul>
                                                        <li class="dropdown-h2-font">Your Account</li>
                                                        <div class="menu-int-2-container"><ul id="menu-int-2" class="menu"><li id="menu-item-4106" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-4106"><a href="<?php echo $portalurl; ?>demo/register">Try A Demo</a></li>
<li id="menu-item-5764" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-5764"><a href="/funding/deposit-funds">Deposit Funds</a></li>
<li id="menu-item-5765" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-5765"><a href="/funding/withdraw-funds/">Withdraw Funds</a></li>
</ul></div>
                                                    </ul>
                                                </li>
                                                <li class="col-sm-2 margin-top-for-men-itm">
                                                    <ul>
                                                        <li class="dropdown-h2-font">Trading Platforms</li>
                                                        <div class="menu-int-3-container"><ul id="menu-int-3" class="menu"><li id="menu-item-3958" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3958"><a href="/platforms/mt4">Metatrader 4 (MT4)</a></li>
<li id="menu-item-6875" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-6875"><a href="/platforms/mt5">Metatrader 5 (MT5)</a></li>
<li id="menu-item-5771" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-5771"><a href="/platforms/mt4-and-mt5-for-webtrader">WebTrader</a></li>
                  <li id="menu-item-394" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-394 social_menu_icon2"><a href="/social-trading/">Social Trading</a></li>
</ul></div>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </ul>
                            </li>
                            <li class="dropdown drop-posit-al"><a class="menu-hd-font dropdown-toggle" href="#" data-toggle="dropdown">TRADING</a>
                                <ul class="dropdown-menu semi-bg-for-drop-menu" style="padding-top: 35px!important;padding-bottom: 35px!important;">
                                    <div class="container">
                                        <div class="row">
                                            <ul>
                                                <li class="col-sm-4 trade-both-btn-align" style="padding-top:25px;">
                                                    <div>
                                                        <p class="drop-menu-h1-font" style="font-family: 'Helvetica Neue BD Pro';"><span style="font-weight:100;font-family: 'Helvetica Neue TH Pro';">Trade with a</span><br> trusted forex<br> broker</p>
                                                    </div>
                                                    <div class="row padding-top-10">
                                                        <div class="col-sm-6">
                                                            <a class="drop-open-live-btn open-home-live-btn-blue-new-oranges-XX2.regn-align" href="<?php echo $portalurl; ?>register#TRPLINKPROCESSED" target="_blank">OPEN LIVE</a>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <a class="drop-demo-live-btn try-home-demo-btn-grey-new-oranges-XX2.regn-align" href="<?php echo $portalurl; ?>demo/register#TRPLINKPROCESSED" target="_blank">TRY DEMO</a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="col-sm-3 margin-top-for-men-itm cs-new-trade-mark-price-align-all-region-lang">
                                                    <ul>
                                                        <li class="dropdown-h2-font">Trading Accounts</li>
                                                        <div class="menu-int-4-container"><ul id="menu-int-4" class="menu"><li id="menu-item-3959" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3959"><a href="/account-types/forex-account-type/">Forex Account Types</a></li>
<li id="menu-item-6012" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6012"><a href="/islamic-trading-accounts/">Islamic Trading Accounts</a></li>
<li id="menu-item-5772" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-5772"><a href="/funding/deposit-funds/">Account Funding</a></li>
<li id="menu-item-5773" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-5773"><a href="/funding/withdraw-funds/">Funds Withdrawal</a></li>
</ul></div>
                                                    </ul>
                                                </li>
                                                <li class="col-sm-2 margin-top-for-men-itm">
                                                    <ul>
                                                        <li class="dropdown-h2-font">Markets</li>
                                                        <div class="menu-int-5-container"><ul id="menu-int-5" class="menu"><li id="menu-item-4140" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4140"><a href="/forex/">Forex</a></li>
<li id="menu-item-7243" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-7243"><a href="/share-cfds/">Shares</a></li>
<li id="menu-item-7243" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-7243"><a href="/metals/">Metals</a></li>
<li id="menu-item-4159" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4159"><a href="/commodities/">Commodities</a></li>
<li id="menu-item-4165" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4165"><a href="/cfds/indices-cfds/">Indices</a></li>
                                                            <li id="menu-item-4165" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4165">
                                                            <a href="/crt-redir/" rel="noindex, nofollow">
    Digital Currencies
    </a>
                                                            </li>
                                                            <li id="menu-item-4165" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4165">
                                                            <a href="/bonds/" rel="noindex, nofollow">
    Bonds
    </a>
                                                            </li>
</ul></div>
                                                    </ul>
                                                </li>
                                                <li class="col-sm-2 margin-top-for-men-itm">
                                                    <ul>
                                                        <li class="dropdown-h2-font">Pricing</li>
                                                        <div class="menu-int-6-container"><ul id="menu-int-6" class="menu"><li id="menu-item-3969" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3969"><a href="/spreads/">Spreads</a></li>
<li id="menu-item-3971" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3971"><a href="/swap-rates">Swap Rates</a></li>
<li id="menu-item-3972" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3972"><a href="/trading-hours/">Trading Hours</a></li>
<li id="menu-item-4309" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4309"><a href="/holiday-trading-hours/">Holiday Trading Hours</a></li>
</ul></div>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </ul>
                            </li>
                            <li class="dropdown drop-posit-al"><a class="menu-hd-font dropdown-toggle" href="#" data-toggle="dropdown">Platforms</a>
                                <ul class="dropdown-menu semi-bg-for-drop-menu" style="padding-top: 35px!important;padding-bottom: 35px!important;">
                                    <div class="container">
                                        <div class="row">
                                            <ul>
                                                <li class="col-sm-4 trade-both-btn-align trade-2-new-oranges-XX2.align-padding">
                                                    <div>
                                                        <p class="drop-menu-h1-font" style="font-family: 'Helvetica Neue BD Pro';"><span style="font-weight:100;font-family: 'Helvetica Neue TH Pro';">Trade with a </span><br>trusted forex<br> broker</p>
                                                    </div>
                                                    <div class="row padding-top-10">
                                                        <div class="col-sm-6">
                                                            <a class="drop-open-live-btn open-home-live-btn-blue-new-oranges-XX2.regn-align" href="<?php echo $portalurl; ?>register#TRPLINKPROCESSED" target="_blank">OPEN LIVE</a>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <a class="drop-demo-live-btn try-home-demo-btn-grey-new-oranges-XX2.regn-align" href="<?php echo $portalurl; ?>demo/register#TRPLINKPROCESSED" target="_blank">TRY DEMO</a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="col-sm-3 margin-top-for-men-itm margin-left-new-oranges-XX2.align-for-menu cs-new-header-menu-home-align-for-all-regn-left-lang">
                                                    <ul>
                                                        <li class="dropdown-h2-font">MT4 & MT5</li>
                                                        <div class="menu-int-7-container"><ul id="menu-int-7" class="menu"><li id="menu-item-4017" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-4017"><a href="/platforms/mt4/">Metatrader 4 (MT4)</a></li>
<li id="menu-item-4018" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-4018"><a href="/platforms/mt5/">Metatrader 5 (MT5)</a></li>
<li id="menu-item-4186" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4186"><a href="/platforms/mt4-and-mt5-for-webtrader/">WebTrader</a></li>
                  <li id="menu-item-394" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-394 app_menu_icon"><a href="/mobile-trading-app/">Mobile Trading App</a></li>
<li id="menu-item-4020" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4020"><a href="/mt4-5-fees-charges/">MT4/5 Fees &amp; Charges</a></li>
</ul></div>
                                                    </ul>
                                                </li>
                                              
                                                <li class="col-sm-3 margin-top-for-men-itm">
                                                    <ul>
                                                        <li class="dropdown-h2-font">Trading Tools</li>
                                                        <div class="menu-int-8-container"><ul id="menu-int-8" class="menu"><li id="menu-item-4021" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4021"><a href="/tools/mam-pamm/">MAM/PAMM</a></li>
<li id="menu-item-5672" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5672"><a href="/virtual-private-server/">VPS</a></li>
<li id="menu-item-4023" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4023"><a href="/tools/traders-toolbox/">Traders Toolbox</a></li>
<li id="menu-item-6174" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6174"><a href="/forex-calculator/">Forex Calculator</a></li>

<li id="menu-item-6475" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6475"><a href="/autochartist/">Autochartist</a></li>
</ul></div>
                                                    </ul>
                                                </li>


                                                <li class="col-sm-2 margin-top-for-men-itm">
                                                    <ul>

                                                        <li class="dropdown-h2-font">Copy Trading</li>
                                                        <div class="menu-int-9-container"><ul id="menu-int-8" class="menu">
                                    <li id="menu-item-394" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-394 social_menu_icon"><a href="/social-trading/">Social Trading</a></li>
                  <li id="menu-item-6862" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6862"><a href="/myfxbook-autotrade/">Myfxbook Autotrade</a></li>

</ul></div>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </ul>
                            </li>
                            <li class="dropdown"><a class="menu-hd-font partner-btn" href="https://fpmarketspartners.com/#TRPLINKPROCESSED">PARTNERS</a></li>
                            <li class="dropdown drop-posit-al"><a class="menu-hd-font dropdown-toggle" href="#" data-toggle="dropdown">resources</a>
                                <ul class="dropdown-menu semi-bg-for-drop-menu" style="padding-top: 35px!important;padding-bottom: 35px!important;">
                                    <div class="container">
                                        <div class="row">
                                            <ul>
                                                <li class="col-sm-4 trade-both-btn-align" style="    padding-top: 75px;">
                                                    <div>
                                                        <p class="drop-menu-h1-font"style="font-family: 'Helvetica Neue BD Pro';"><span style="font-weight:100;font-family: 'Helvetica Neue TH Pro';">Trade markets with a</span><br> regulated broker</p>
                                                    </div>
                                                    <div class="row padding-top-20">
                                                        <div class="col-sm-6">
                                                            <a class="drop-open-live-btn open-home-live-btn-blue-new-oranges-XX2.regn-align" href="<?php echo $portalurl; ?>register#TRPLINKPROCESSED" target="_blank">OPEN LIVE</a>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <a class="drop-demo-live-btn try-home-demo-btn-grey-new-oranges-XX2.regn-align" href="<?php echo $portalurl; ?>demo/register#TRPLINKPROCESSED" target="_blank">TRY DEMO</a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="col-sm-2 margin-top-for-men-itm cs-home-new-oranges-XX2.align-for-regn-2021-left-menu">
                                                    <ul>
                                                        <li class="dropdown-h2-font">Company</li>
                                                       <div class="menu-int-9-container"><ul id="menu-int-9" class="menu"><li id="menu-item-4169" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4169"><a href="/about-fp-markets/">About FP Markets</a></li>
<li id="menu-item-6803" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6803"><a href="/regulation/">Regulation</a></li>
<li id="menu-item-6498" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-6498"><a href="https://www.fpmarkets.com/blog/category/company-news#TRPLINKPROCESSED">Company News</a></li>
<li id="menu-item-4182" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4182"><a href="/legal-documents/">Legal Documents</a></li>
<li id="menu-item-4031" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4031"><a href="/careers/">Careers</a></li>
</ul></div>
                                                    </ul>
                                                </li>
                                                <li class="col-sm-2 margin-top-for-men-itm">
                                                    <ul>
                                                        <li class="dropdown-h2-font">Education</li>
                                                        <div class="menu-int-10-container"><ul id="menu-int-10" class="menu">
                                                <li id="menu-item-4032" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4032"><a href="/education/videos/">Trading Courses Videos</a></li>
                                                <li id="menu-item-4032" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4032"><a href="/trading-webinars/">Webinars</a></li>
                                                <li id="menu-item-4032" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4032"><a href="/education/podcasts/">Podcasts</a></li>
                                                <li id="menu-item-4032" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4032"><a href="/education/events/">Events</a></li>
<li id="menu-item-4033" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4033"><a href="/education/video-tutorials/">Platform Video Tutorials</a></li>
                                                <li id="menu-item-4032" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4032"><a href="/education/ebooks/">eBooks</a></li>
<li id="menu-item-4035" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4035"><a href="/education/glossary/">Glossary</a></li>
<li id="menu-item-4036" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4036"><a href="/research/daily-market-report/daily-market-report-sign-up/">Newsletter Sign Up</a></li>
                                                
</ul></div>
                                                    </ul>
                                                </li>
                                                <li class="col-sm-2 margin-top-for-men-itm">
                                                    <ul>
                                                        <li class="dropdown-h2-font">Traders Hub</li>
                                                        <div class="menu-int-11-container"><ul id="menu-int-11" class="menu"><li id="menu-item-6499" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-6499"><a href="https://www.fpmarkets.com/blog/category/trading-knowledge/#TRPLINKPROCESSED">Trading Knowledge</a></li>
<li id="menu-item-6500" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-6500"><a href="https://www.fpmarkets.com/blog/category/technical-analysis/#TRPLINKPROCESSED">Technical Analysis</a></li>
<li id="menu-item-6501" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-6501"><a href="https://www.fpmarkets.com/blog/category/fundamental-analysis/#TRPLINKPROCESSED">Fundamental Analysis</a></li>
<li id="menu-item-6502" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6502"><a href="/tools/economic-calendar/">Economic Calendar</a></li>
<li id="menu-item-6503" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6503"><a href="/forex-calculator/">Forex Calculator</a></li>
</ul></div>
                                                    </ul>
                                                </li>
                                                <li class="col-sm-2 margin-top-for-men-itm">
                                                    <ul>
                                                        <li class="dropdown-h2-font">Help</li>
                                                       <div class="menu-int-12-container"><ul id="menu-int-12" class="menu"><li id="menu-item-5766" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-5766"><a href="/faq/">FAQ</a></li>
<li id="menu-item-4038" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-4038"><a href="/faq/call-back/">Call Back</a></li>
<li id="menu-item-6494" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-6494"><a href="https://www.fpmarkets.com/blog/#TRPLINKPROCESSED">Traders Hub Blog</a></li>
<li id="menu-item-6518" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-6518"><a href="/faq/">Live Support</a></li>
<li id="menu-item-6520" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6520"><a href="/contact/">Contact Us</a></li>
<li id="menu-item-6520" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6520"><a href="/customer-experience/">Customer Experience</a></li>                                                           
</ul></div>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </ul>
                            </li>
                            <li style="margin-top:-2px;"><a id="mobile-open-live-btn italin-langs-enables-btn" class="menu-hd-font open-live-buton cs-home-new-oranges-XX2.btn-open-live-for-all-lang grhidden ruhidden ithidden eshidden dehidden czhidden mshidden idhidden pthidden frhidden pthidden plhidden" href="<?php echo $portalurl; ?>register#TRPLINKPROCESSED" target="_blank" style="margin-left: 19px;">open live</a></li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>

    </oranges-XX2.
    
    <!-- end navigation -->




    <section>
        <div class="container">
            <div class="row">

                <div class="visible-xs padding-0px-for-mobile" style="padding-left:20px;padding-top:60px;">


                    <h1 class="slider-h hidden-xs zero-letter cs-hero-text-ar-regn-font-align slider-h-ar" style="margin-top:70px;font-size:34px;line-height:42px;font-weight:300;height:450px;">
                    </h1>
                    
                    <div class="slider-h visible-xs zero-letter" style="padding-left: 10px;padding-right: 10px;line-height: 28px;font-weight: 300;padding-bottom: 0px;margin-bottom:0px;padding-top:50px;">
                        <span class="banner-create-txt-" style="font-size: 40.5px;font-weight: bold;font-stretch: normal;font-style: normal;line-height: 51px;letter-spacing: normal;text-align: left;color: #ffffff;font-family: 'Helvetica Neue BD Pro';">Performance-<br>driven
                            <span style=" font-weight: 100;font-family: 'Helvetica Neue TH Pro';color:#00bdff;">technology<br>& </span>ultra-low <span style=" font-weight: 100;font-family: 'Helvetica Neue TH Pro';color:#00bdff;">spreads</span></span>

                    </div>
                    
                    
                    <div class="visible-xs col-xs-12" style="padding:0px;padding-top:420px!important;margin:auto;">
                        <div class="tp-caption tp-resizeme text-center-mobile" style="width:70%;margin:auto;">
                            <a href='<?php echo $portalurl; ?>register' target='_blank' class='btn btn-lg btn-transparent-blue-top' style="    border-radius: 0px 13px 13px 13px;
    font-weight: 300;
    font-stretch: normal;
    font-style: normal;
    line-height: 1.49;
    letter-spacing: 2px;
    text-align: center;
    color: #fff;
    background-color: #0b121c;font-size: 20px;font-family: 'Helvetica Neue LT Pro'!important;">
                                START TRADING
                            </a>
                            <div class="text-center" style="margin-top:6px;width:100%;font-weight: 700;font-size: 18px;text-align: center;">
                                <a class="white-color" style="font-size: 18px;font-weight: 300;font-family: 'Helvetica Neue LT Pro';" href="<?php echo $portalurl; ?>demo/register"><span class="custom-link" style="font-family: 'Helvetica Neue MD Pro';font-weight: 500;text-decoration: none!important;color:black;">Test your knowledge and potential on a Free 30 Day Demo</span></a>
                            </div>
                        </div>


                    </div>
                    
                   
                </div>
                <div class="col-md-offset-7 col-md-3" style="height:1px;"></div>
                <div class="hidden-xs col-md-2 text-center selling-points-bg" style="margin-top:30px;padding-bottom:35px;margin-left: -18px;">
                    <div class="col-md-12 text-center" style="padding:0px;padding-top:40px;">
                        <div class="selling-points-txt">
                            Tight Raw<br>
                            Spreads from
                        </div>
                        <div class="selling-points-txt-bold" style="margin-top: -5px;">
                            0.0 pips
                        </div>
                        <div>
                            <img src="/wp-content/themes/fptheme/int/images/points-seperator.png">
                        </div>
                    </div>
                    <div class="clear"></div>
                    <div class="col-md-12 text-center" style="padding:0px;">
                        <div class="selling-points-txt-bold">
                            $0
                        </div>
                        <div class="selling-points-txt"  style="margin-top: -6px;">
                            Commission-Free<br>
                            Funding Options^^
                        </div>
                        <div>
                            <img src="/wp-content/themes/fptheme/int/images/points-seperator.png">
                        </div>
                    </div>
                    <div class="clear"></div>
                    <div class="col-md-12 text-center" style="padding:0px;">
                        <div class="selling-points-txt-bold">
                            500:1
                        </div>
                        <div class="selling-points-txt"  style="margin-top: -6px;">
                           MAX LEVERAGE
                        </div>
                        <div>
                            <img src="/wp-content/themes/fptheme/int/images/points-seperator.png">
                        </div>
                    </div>
                    <div class="clear"></div>
                    <div class="col-md-12 text-center" style="padding:0px;">
                        <div class="selling-points-txt" style="padding-top: 15px;">
                            SUPPORT
                        </div>
                        <div class="selling-points-txt-bold"  style="margin-top: -6px;">
                           24/7^
                        </div>
                        <div style="margin-top: -10px;">
                            <img src="/wp-content/themes/fptheme/int/images/points-seperator.png">
                        </div>
                    </div>
                    <div class="clear"></div>
                    <div class="col-md-12 text-center" style="padding:0px;">
                        <div class="selling-points-txt-bold">
                            0.01
                        </div>
                        <div class="selling-points-txt"  style="margin-top: -6px;">
                            Micro-Lot Trading
                        </div>

                    </div>
                </div>
                <div class="visible-xs" style="padding-left: 25px;padding-right: 25px;">
                    <div class="col-xs-12 bg-align-for-mobile">
                        <div class="col-xs-4 text-center" style="background-repeat: no-repeat;background-image: url(/wp-content/themes/fptheme/int/image-2020/new-homepage-img/Div.png);background-position: center right;">
                            <div class="selling-points-txt-bold" style="padding-top: 20px;">0.0</div>
                            <div class="selling-points-txt" style="padding-bottom: 25px;line-height: 15px;padding-top: 5px;">Raw Spreads <br>from 0.0</div>
                        </div>
                        <div class="col-xs-4" style="background-repeat: no-repeat;background-image: url(/wp-content/themes/fptheme/int/image-2020/new-homepage-img/Div.png);background-position: center right;padding-left: 10px;padding-right: 10px;">
                            <div class="selling-points-txt-bold" style="padding-top: 20px;">$0</div>
                            <div class="selling-points-txt" style="line-height: 15px;padding-top: 5px;">Commission-Free Funding<br> Options^</div>
                        </div>
                        <div class="col-xs-4 text-center" style="padding-left: 10px;padding-right: 10px;">
                            <div class="selling-points-txt-bold" style="padding-top: 20px;padding-bottom: 5px;">500:1</div>
                            <div class="selling-points-txt" style="line-height: 15px;">Max<br>Leverage</div>
                        </div>
                    </div>
                </div>
                <div class="clear"></div>

            </div>


        </div>
        <div class="clear"></div>



        <!-- Plugin styles -->
        <link type="text/css" rel="stylesheet" href="/wp-content/themes/fptheme/int/assets/tick/css/jquery.jConveyorTicker.min.css?v=1.1.0" />

        <!-- jConveyorTicker plugin -->
        <script src="/wp-content/themes/fptheme/int/assets/tick/js/jquery.jConveyorTicker.min.js?v=1.1.0"></script>

        <script type="text/javascript" charset="utf-8">
            $(function() {

                /*! Default options:
                 *  
                 *  anim_duration:  200
                 *  reverse_elm:    false
                 *  force_loop:     false
                 *  start_paused:   false
                 * 
                 */

                $('.js-conveyor-1').jConveyorTicker();



            });
        </script>

<?php 
$url = 'https://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];

if (strpos($url,'/ar/') !== false) {   
    
}
else {
     include get_template_directory().'/int/prices-widget-home.php';            
}
            
?>
        
        <div class="clear"></div>

    </section>

</div> 
<!-- end main-wrapper -->

<style>
    .max-width-for-desktop {
        max-width: 255px;
    }

    .banks-logos h3 {
		font-family: 'Helvetica Neue BD Pro'!important;
        font-size: 32px !important;
        font-weight: bold!important;
        font-stretch: normal;
        font-style: normal;
        line-height: 1.81;
        letter-spacing: normal!important;
        text-align: center;
        color: #17191d !important;
    }

    .font-for-grey-trusted-brand-head {
        font-size: 44px;
        font-weight: bold;
        font-stretch: normal;
        font-style: normal;
        line-height: 1;
        letter-spacing: normal;
        text-align: center;
        color: #3e495c;
    }

    .font-for-grey-semi-head {
        font-size: 32px;
        font-weight: bold;
        font-stretch: normal;
        font-style: normal;
        line-height: 1.08;
        letter-spacing: normal;
        text-align: left;
        color: #3e495c;
    }

    .font-for-white-semi-head {
		font-family: 'Helvetica Neue BD Pro';
         font-size: 32px;
  font-weight: bold;
  font-stretch: normal;
  font-style: normal;
  line-height: 1.08;
  letter-spacing: normal;
  text-align: left;
  color: #fff;
    }

    .quote-widget__content-price .price-2 {
        font-size: 28.5px !important;
    }

    .quote-widget__content-price .price-1 {
        font-size: 16.5px !important;
    }

    .custom-link {
        text-decoration: underline !important;
        font-size: 18px;
        font-weight: 600;
        font-stretch: normal;
        font-style: normal;
        line-height: 1.39;
        letter-spacing: normal;
        text-align: center;
        color: #00bdff;
    }

    .navbar-brand {
        margin-left: 10px;
    }

    .jctkr-wrapper {
        height: 100px;
    }

    .pstyling-about {
        font-size: 20px;
        color: #3e495c;
        padding-left: 60px;
    }

    .pstyling-about-mobile {
        font-size: 20px;
        color: #3e495c;
        text-align: center;
    }
.social_menu_icon2:after {
 right: -105px;
}
    .trade-fsection-font {
		font-family:'Helvetica Neue BD Pro';
  font-size: 32px;
  font-weight: bold;
  font-stretch: normal;
  font-style: normal;
  line-height: 1.13;
  letter-spacing: 0.32px;
  text-align: center;
  color: #0b121c!important;
    }

    .light-grey-bg-font {
		font-family: 'Helvetica Neue BD Pro';
    margin-top: 5px;
      font-size: 28px;
    margin-bottom: -5px;
    font-weight: bold;
    font-stretch: normal;
    font-style: normal;
    line-height: 1.3;
    letter-spacing: normal;
    text-align: center;
    color: #0b121c !important;
    }

    .span-light-blue-font {
        font-size: 18.5px;
        font-stretch: normal;
        font-style: normal;
        line-height: 1.51;
        letter-spacing: normal;
        text-align: center;
        font-weight: bold;
        color: #00bdff !important;
    }

    .light-grey-font {
		font-family: 'Helvetica Neue LT Pro';
     font-size: 18.5px;
  font-weight: 300;
  font-stretch: normal;
  font-style: normal;
  line-height: 1.3;
  letter-spacing: normal;
  text-align: center;
  color: #0b121c !important;
    }

    .padding-50 {
        padding-top: 50px;
    }

    #section1-trade {
     padding-top: 55px;
    padding-bottom: 40px;
    }

    b {
        color: #00beff;
    }

    #most-trusted-brands-section {
        padding-top: 95px;
        padding-bottom: 0px;
        background-size: auto;
        background-repeat: no-repeat;
        background-image: url(/wp-content/themes/fptheme/int/images/payments-bg.jpg);
        background-position: center bottom;
    }
.padding-top-5{
	padding-top:5px;
}
    #advanced-trading-technology-section {
	padding-top: 15px;
    padding-bottom: 0px;
    }

    .light-white-bg {
        background-position: 85%;
        background-size: cover;
        background-repeat: no-repeat;
        background-image: url(/wp-content/themes/fptheme/int/image-2020/new-homepage-img/white-bg-first-section-desktop.png);
    }

    .jctkr-wrapper ul li {
        width: 11%;
        background:none;
    }
.jctkr-wrapper ul li>div{
	    background: url(/wp-content/themes/fptheme/int/image-2020/new-homepage-img/Div.png);
    background-repeat: no-repeat;
    background-size: 1.1px;
    background-position: center right;
	padding: 0px 30px;
}
    @media only screen and (max-width: 600px) {
	.selling-points-txt-bold {
    letter-spacing: normal;
	}
        .cstm3-stp-numbr:after {
            display: none !important;
        }

        .arrow-imag-align {
            margin-left: 20px;
            margin-top: 12px !important;
            margin-bottom: 5px !important;
        }

        .font-for-mobile {
            font-size: 18px !important;
        }

        .selling-points-txt {
            font-size: 11px !important;
        }

        .bg-align-for-mobile {
			padding-left: 0px;
    padding-right: 0px;
            padding-bottom: 0px;
            background-image: url(/wp-content/themes/fptheme/int/image-2020/new-homepage-img/Rounded-for-first-mobile.png);
            background-repeat: no-repeat;
            background-position: center;
            border-radius: 0px 10px 10px 10px;
            margin-left: 0px;
            margin-right: 0px;
            margin-bottom: 30px;
            margin-top:35px;
            justify-content: center;
            display: flex;
        }

        .bgXAUUSD {
            background: transparent !important;
        }

        .width-for-mobile {
            width: 50% !important;
            max-width: 100%;
            float: left;
        }

        .jctkr-wrapper ul li {
            width: 14% !important;
        }

        .dis-flex {
            display: flex;
            padding-left: 20px;
        }

        .light-grey-font {
            font-size: 16.5px;
        }

        #section1-trade {
            padding-top: 20px;
            padding-bottom: 30px;
        }

        .light-white-bg {
            background-image: url(/wp-content/themes/fptheme/int/image-2020/new-homepage-img/white-bg-first-section-mobile.png);
			padding-top: 50px;
    padding-bottom: 30px;
        }
    }
</style>

<div class="section light-white-bg">
    <div id="section1-trade" class="container default-wd">
        <div>
            <p class="trade-fsection-font hidden-xs"><span style="font-weight: 100;font-family:'Helvetica Neue TH Pro';">What can you</span> trade with FP Markets<span style="font-weight: 100;font-family:'Helvetica Neue TH Pro';">?</span></p>
            <p class="trade-fsection-font visible-xs"><span style="font-weight: 100;font-family:'Helvetica Neue TH Pro';">What can you</span> trade<br> with FP Markets<span style="font-weight: 100;font-family:'Helvetica Neue TH Pro';">?</span></p>
        </div>

        

        <div class="col-sm-12 padding-50 hidden-xs ">
            
            <div class="row">
                <div class="col-sm-7">
                    <div class="row">
                        <div class="col-sm-3 dis-flex">

                            <div class="image-section margin-right-for-mob" style="padding-bottom: 10px;text-align:center">
                                <span class="section_image_wrap "><a href="/forex/"><img src="/wp-content/themes/fptheme/int/image-2020/iress-mobile/desktop/Group 397-min.png" alt="" title=""></a></span>
                            </div>
                            <div class="text_block">
                                <a href="/forex/"><p class="light-grey-bg-font" style="font-size:18px;">Forex</p></a>
                                <p class="light-grey-font">60+ forex currency <br>pairs on MT4</p>
                            </div>

                        </div>
                        <div class="col-sm-3 dis-flex">
                            <div class="image-section " style="padding-bottom: 10px;text-align:center">
                                <span class="section_image_wrap "><a href="/share-cfds/"><img src="/wp-content/themes/fptheme/int/image-2020/iress-mobile/desktop/Group 397 copy 5.png" alt="" title=""></a></span>
                            </div>
                            <div class="text_block">
                                <a href="/share-cfds/"><p class="light-grey-bg-font" style="font-size:18px;">Shares</p></a>
                                <p class="light-grey-font">More than 10,000 stocks on global exchanges </p>
                            </div>
                        </div>
                        <div class="col-sm-3 dis-flex">
                            <div class="image-section " style="padding-bottom: 10px;text-align:center">
                                <span class="section_image_wrap "><a href="/indices/"><img src="/wp-content/themes/fptheme/int/image-2020/iress-mobile/desktop/Group 397 copy 4-min.png" alt="" title="" style="margin-top:10px;"></a></span>
                            </div>
                            <div class="text_block">
                                <a href="/indices/"><p class="light-grey-bg-font" style="font-size:18px;">Indices</p></a>
                                <p class="light-grey-font">19 major<br> global Indices</p>
                            </div>
                        </div>
                        <div class="col-sm-3 dis-flex">
                            <div class="image-section " style="padding-bottom: 10px;text-align:center">
                                <span class="section_image_wrap">
                                    <a href="/commodities/"><img src="/wp-content/themes/fptheme/int/image-2020/iress-mobile/desktop/Group 397 copy 2-min.png" alt="" title="Commodities" style="margin-top:10px;"></a>
                                </span>
                            </div>
                            <div class="text_block">
                                <a href="/commodities/"><p class="light-grey-bg-font" style="font-size:18px;">Commodities</p></a>
                                <p class="light-grey-font">Coffee, natural gas, corn & more</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                
                <div class="col-sm-5">    
                     <div class="row"> 
                        
                        <div class="col-sm-4 dis-flex">
                            <div class="image-section " style="padding-bottom: 10px;text-align:center">
                                <span class="section_image_wrap "><a href="/bonds/"><img src="/wp-content/themes/fptheme/images/icon-bond.png" alt="" title="" style="margin-top:10px;"></a></span>
                            </div>
                            <div class="text_block">
                                <a href="/bonds/"><p class="light-grey-bg-font" style="font-size:18px;">Bonds</p></a>
                                <p class="light-grey-font">US10YR & UK Long Gilt Futures GILT </p>
                            </div>
                        </div>
                        <div class="col-sm-4 dis-flex">
                            <div class="image-section " style="padding-bottom: 10px;text-align:center">
                                <span class="section_image_wrap "><a href="/metals/"><img src="/wp-content/themes/fptheme/images/icon-metals.png" alt="" title="" style="margin-top:0px;"></a></span>
                            </div>
                            <div class="text_block">
                                <a href="/metals/"><p class="light-grey-bg-font" style="font-size:18px;">Metals</p></a>
                                <p class="light-grey-font">Gold, oil, <br>silver & more  </p>
                            </div>
                        </div>
                         <div class="col-sm-4 dis-flex" style="padding:0px;">
                            <div class="image-section " style="padding-bottom: 10px;text-align:center">
                                <span class="section_image_wrap "><a href="/crt-redir/"><img src="/wp-content/themes/fptheme/images/0012_Group-398.png" alt="" title="" style="margin-top:3px;"></a></span>
                            </div>
                            <div class="text_block">
                                <a href="/crt-redir/"><p class="light-grey-bg-font" style="font-size:18px;">Digital Currencies</p></a>
                                <p class="light-grey-font">Bitcoin, Ethereum, Ripple, Bitcoin Cash, Litecoin </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-sm-12 padding-top-30 visible-xs">
            <div class="row">
                <div class="col-sm-7">
                    <div class="row">
                        <div class="col-sm-4 dis-flex">

                            <div class="image-section margin-right-for-mob" style="padding-bottom: 10px;text-align:center;margin-right: 25px;max-width: none!important;">
                                <span class="section_image_wrap "><img data-cfsrc="/wp-content/themes/fptheme/image-2020/iress-mobile/desktop/Group 397-min.png" alt="" title="" src="/wp-content/themes/fptheme/image-2020/iress-mobile/desktop/Group%20397-min.png" style="max-width: none !important;"></span>
                            </div>
                            <div class="text_block">
                                <p class="light-grey-bg-font" style="text-align: left;">Forex</p>
                                <p class="light-grey-font" style="text-align: left;">60+ forex currency pairs on MT4 <br><span class="span-light-blue-font" style="text-align: left;"><a href="/forex/"><b>View full list of financial products</b></a></span></p>
                            </div>

                        </div>
                        <div class="col-sm-4 dis-flex" style="margin-top: 20px;">
                            <div class="image-section " style="padding-bottom: 10px;text-align:center;margin-right: 20px;max-width: none!important;">
                                <span class="section_image_wrap "><img data-cfsrc="/wp-content/themes/fptheme/image-2020/iress-mobile/desktop/Group 397 copy 5.png" alt="" title="" src="/wp-content/themes/fptheme/image-2020/iress-mobile/desktop/Group%20397%20copy%205.png" style="max-width: none !important;margin-top: 17px;"></span>
                            </div>
                            <div class="text_block">
                                <p class="light-grey-bg-font" style="text-align: left;">Shares</p>
                                <p class="light-grey-font" style="text-align: left;">More than 10,000 stocks<br> on global exchanges<br> <span class="span-light-blue-font"><a href="/share-cfds/"><b>View full list</b></a></span></p>
                            </div>
                        </div>
                        <div class="col-sm-4 dis-flex" style="margin-top: 20px;">
                            <div class="image-section " style="padding-bottom: 10px;text-align:center;margin-right: 20px!important;">
                                <span class="section_image_wrap "><img data-cfsrc="/wp-content/themes/fptheme/image-2020/iress-mobile/desktop/Group 397 copy 4-min.png" alt="" title="" data-cfstyle="margin-top:10px;" style="margin-top:10px;" src="/wp-content/themes/fptheme/image-2020/iress-mobile/desktop/Group%20397%20copy%204-min.png"></span>
                            </div>
                            <div class="text_block">
                                <p class="light-grey-bg-font" style="text-align: left;">Indices</p>
                                <p class="light-grey-font" style="text-align: left;">19 major<br> global Indices <br><span class="span-light-blue-font"><a href="/indices/"><b>View full list</b></a></span></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-5">
                    <div class="row">
                        <div class="col-sm-6 dis-flex padding-formobile" style="margin-top: 20px;padding-left: 30px;">
                            <div class="image-section " style="padding-bottom: 10px;text-align:center;margin-right: 15px;margin-left: -20px;">
                                <span class="section_image_wrap "><img data-cfsrc="/wp-content/themes/fptheme/image-2020/iress-mobile/desktop/Group 397 copy 2-min.png" alt="" title="" data-cfstyle="margin-top:10px;" style="margin-top:10px;" src="/wp-content/themes/fptheme/image-2020/iress-mobile/desktop/Group%20397%20copy%202-min.png"></span>
                            </div>
                            <div class="text_block">
                                <p class="light-grey-bg-font" style="text-align: left;">Commodities</p>
                                <p class="light-grey-font" style="text-align: left;">Coffee, natural gas,<br>corn & more <br><span class="span-light-blue-font"><a href="/commodities/"><b>View full list</b></a></span></p>
                            </div>
                        </div>
                        
                        <div class="col-sm-6 dis-flex padding-formobile" style="margin-top: 20px;padding-left: 30px;">
                            <div class="image-section " style="padding-bottom: 10px;text-align:center;margin-right: 15px;margin-left: -20px;">
                                <span class="section_image_wrap "><img data-cfsrc="/wp-content/themes/fptheme/images/icon-metals.png" alt="" title="" data-cfstyle="margin-top:10px;" style="margin-top:10px;" src="/wp-content/themes/fptheme/images/icon-metals.png"></span>
                            </div>
                            <div class="text_block">
                                <p class="light-grey-bg-font" style="text-align: left;">Metals</p>
                                <p class="light-grey-font" style="text-align: left;">Gold, oil,<br> silver &amp; more <br><span class="span-light-blue-font"><a href="/metals/"><b>View full list</b></a></span></p>
                            </div>
                        </div>
                        
                        <div class="col-sm-6 dis-flex padding-formobile" style="margin-top: 20px;padding-left: 30px;">
                            <div class="image-section " style="padding-bottom: 10px;text-align:center;margin-right: 15px;margin-left: -20px;">
                                <span class="section_image_wrap "><img alt="" title="" data-cfstyle="margin-top:10px;" style="margin-top:10px;" src="/wp-content/themes/fptheme/images/icon-bond.png"></span>
                            </div>
                            <div class="text_block">
                                <p class="light-grey-bg-font" style="text-align: left;">Bonds</p>
                                <p class="light-grey-font" style="text-align: left;">US10YR & UK Long<br>Gilt Futures GILT <br><span class="span-light-blue-font"><a href="/bonds/"><b>View full list</b></a></span></p>
                            </div>
                        </div>
                        
                        <div class="col-sm-6 dis-flex padding-formobile" style="margin-top: 20px;padding-left: 30px;">
                            <div class="image-section " style="padding-bottom: 10px;text-align:center;margin-right: 15px;margin-left: -20px;">
                                <span class="section_image_wrap "><img data-cfsrc="/wp-content/themes/fptheme/images/0012_Group-398.png" alt="" title="" data-cfstyle="margin-top:10px;" style="margin-top:10px;" src="/wp-content/themes/fptheme/images/0012_Group-398.png"></span>
                            </div>
                            <div class="text_block">
                                <p class="light-grey-bg-font" style="text-align: left;">Digital Currencies</p>
                                <p class="light-grey-font" style="text-align: left;">Bitcoin, Ethereum, Ripple,<br>Bitcoin Cash, Litecoin<br><span class="span-light-blue-font"><a href="/metals/"><b>View full list</b></a></span></p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>		
			
		
    </div>
</div>


<div class="clear">

</div>

<!--trustpilot-->

<div class="container-fluid hidden-xs" style="background-image: url('https://www.fpmarkets.com/wp-content/uploads/2020/01/pilot-bg.jpg');">
  <div class="col-md-12">
      <br><br>
      <div class="trustpilot-widget" data-locale="en-GB" data-template-id="5406e65db0d04a09e042d5fc" data-businessunit-id="5866c4f90000ff000599f216" data-style-height="28px" data-style-width="100%" data-theme="dark"> <a href="https://uk.trustpilot.com/review/fpmarkets.com" target="_blank" rel="noopener">Trustpilot</a> </div> <!-- End TrustBox widget -->
      <br><br class="hidden-xs">
  </div>
</div>
  
<div class="container-fluid visible-xs" style="background-size: cover;background-position: center top;background-image: url('https://www.fpmarkets.com/wp-content/uploads/2020/01/pilot-bg.jpg');">
  <div class="col-md-12">
      <br><br>
      <div class="visible-xs"> 
        <a href="https://uk.trustpilot.com/review/fpmarkets.com" target="_blank" rel="noopener"><img src="/wp-content/themes/FPMarkets/images/trust-pilot-mobile.png"></a> 
      </div> <!-- End TrustBox widget -->
      <br><br>
  </div>
</div>

<div class="hidden-xs container-fluid" style="background-color:#00bdff;">
    <div class="container">
        <div class="col-md-12" style="padding:0px;margin-top:10px;margin-bottom:10px;">
            <div class="col-md-6 text-center" style="padding:20px 50px 15px 50px;">
                <p class="text-center" style="margin-top: 55px;
                    font-size: 27.5px;
                    font-weight: 100;
                    font-stretch: normal;
                    font-style: normal;
                    line-height: 1;
                    letter-spacing: 0.55px;
                    text-align: center;
                    color: #3e495c;
                    font-family: 'Helvetica Neue TH Pro';">
                    Spreads<br>from
                    <br> 
                    <?php
                    $uriSegments = explode("/", parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
                    if ($uriSegments[1] == "zh_tw") { ?>
                    <img alt="0.0 pips" src="/wp-content/themes/fptheme/int/image-2020/new-homepage-img/0.0-pips-new.png" class="tighter-pips-img">.<br>
                    <?php }else { ?>
                        <img alt="0.0 pips" src="/wp-content/themes/fptheme/int/image-2020/new-homepage-img/0.0-pips-new.png" class="tighter-pips-img"><br>
                    <?php }?>

                </p>
            </div>
            <div class="col-md-6" style="padding-left: 70px;padding-top: 85px;padding-bottom: 55px;">
                <p class="h2-left-grey-font-sen">Tighter <span style=" font-weight: 100;font-family: 'Helvetica Neue TH Pro';">spreads.</span><br>Faster <span style=" font-weight: 100;font-family: 'Helvetica Neue TH Pro';">execution.</span></p>
				<div style="height:15px;"></div>
                <div class="col-xs-1 img-rtl" style="padding: 0px;">
                    <img src="/wp-content/themes/fptheme/int/image-2020/ONE-website-home-page-new-2021/Tick-icon-01.png" style="padding-top: 0px;" alt="fpmarkets bullet point">
                </div>
                <div class="col-xs-11" style="margin-left: -10px;padding: 0px;">
                    <span style="color:#0b121c;font-size: 18px;font-family: 'Helvetica Neue LT Pro';">Trade on consistently low spreads from 0.0 pips**</span>
                </div>
                <div style="height:15px;clear: both;"></div>
                <div class="col-xs-1 img-rtl" style="padding: 0px;">
                    <img src="/wp-content/themes/fptheme/int/image-2020/ONE-website-home-page-new-2021/Tick-icon-01.png" style="padding-top: 0px;" alt="fpmarkets bullet point">
                </div>
                <div class="col-xs-11" style="margin-left: -10px;padding: 0px;">
                    <span style="color:#0b121c;font-size: 18px;font-family: 'Helvetica Neue LT Pro';">Fast execution from an NY4 server facility</span><br>
                </div>
                <div style="height:15px;clear: both;"></div>
                <div class="col-xs-1 img-rtl" style="padding: 0px;">
                    <img src="/wp-content/themes/fptheme/int/image-2020/ONE-website-home-page-new-2021/Tick-icon-01.png" style="padding-top: 0px;" alt="fpmarkets bullet point">
                </div>
                <div class="col-xs-11" style="margin-left: -10px;padding: 0px;">
                    <span style="color:#0b121c;font-size: 18px;font-family: 'Helvetica Neue LT Pro';">Top-tier liquidity and market leading pricing, 24/5</span>
                </div>
                <div style="height:15px;clear: both;"></div>
                <div class="col-xs-1 img-rtl" style="padding: 0px;">
                    <img src="/wp-content/themes/fptheme/int/image-2020/ONE-website-home-page-new-2021/Tick-icon-01.png" style="padding-top: 0px;" alt="fpmarkets bullet point">
                </div>
                <div class="col-xs-11" style="margin-left: -10px;padding: 0px;">
                    <span style="color:#0b121c;font-size: 18px;font-family: 'Helvetica Neue LT Pro';">No dealing desk and no requotes</span>
                </div>
                <div style="height:15px;clear: both;"></div>
                <div class="col-xs-1 img-rtl" style="padding: 0px;">
                    <img src="/wp-content/themes/fptheme/image-2020/ONE-website-home-page-new-2021/Tick-icon-01.png" style="padding-top: 0px;" alt="fpmarkets bullet point">
                </div>
                <div class="col-xs-11" style="margin-left: -10px;padding: 0px;">
                    <span style="color:#0b121c;font-size: 18px;font-family: 'Helvetica Neue LT Pro';">Access FP Markets Forex Trading Education</span>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="visible-xs container-fluid" style="background-color:#00bdff;margin-bottom: -45px;">
    <div class="container">
        <div class="col-md-12" style="padding:0px;">

            <div class="col-md-12 text-center" style="padding:30px;padding-top:45px;">
                <p class="fp-font text-center" style="line-height:25px;color:#3e495c;font-weight:500;font-size:23px;margin-top: 20px;">
                    <span class="0-0-pips-new">Spreads <br>from </span>
                    <br>
                    <img alt="0.0 pips" src="/wp-content/themes/fptheme/int/image-2020/new-homepage-img/0.0-pips-new.png" style="margin-top:30px;max-width: 150%;margin-left: -95px;margin-bottom: -35px;">
                    <br>

                </p>
            </div>

            <div class="col-md-12" style="padding-left: 0px;padding-right: 0px;">
                <p class="h2-left-grey-font-sen">Tighter <span style=" font-weight: 100;    font-family: 'Helvetica Neue TH Pro';">spreads.</span><br>Faster <span style=" font-weight: 100;    font-family: 'Helvetica Neue TH Pro';">execution.</span></p>
				<div style="width:90%;margin:auto;margin-top:25px;">
                    <div style="color:#2e3642;font-size: 18px;">
                        <div class="col-xs-1 img-rtl" style="padding:0px;">
                            <img src="/wp-content/themes/fptheme/int/image-2020/ONE-website-home-page-new-2021/Tick-icon-01.png" alt="fpmarkets bullet point" />
                        </div>
                        <div class="col-xs-10" style="padding:0px;margin-left:10px;font-family: 'Helvetica Neue LT Pro';">
                            Trade on consistently low spreads from 0.0 pips**
                        </div>
                        <div style="clear:both;"></div>
                        <div style="height:15px;"></div>
                        <div class="col-xs-1 img-rtl" style="padding:0px;">
                            <img src="/wp-content/themes/fptheme/int/image-2020/ONE-website-home-page-new-2021/Tick-icon-01.png" alt="fpmarkets bullet point" />
                        </div>
                        <div class="col-xs-10" style="padding:0px;margin-left:10px;font-family: 'Helvetica Neue LT Pro';">
                            Fast execution from an NY4 server facility
                        </div>
                        <div style="clear:both;"></div>
                        <div style="height:15px;"></div>
                        <div class="col-xs-1 img-rtl" style="padding:0px;">
                            <img src="/wp-content/themes/fptheme/int/image-2020/ONE-website-home-page-new-2021/Tick-icon-01.png" alt="fpmarkets bullet point" />
                        </div>
                        <div class="col-xs-10" style="padding:0px;margin-left:10px;font-family: 'Helvetica Neue LT Pro';">
                            Top-tier liquidity and market leading pricing, 24/5
                        </div>
                        <div style="clear:both;"></div>
                        <div style="height:15px;"></div>
                        <div class="col-xs-1 img-rtl" style="padding:0px;">
                            <img src="/wp-content/themes/fptheme/int/image-2020/ONE-website-home-page-new-2021/Tick-icon-01.png" alt="fpmarkets bullet point" />
                        </div>
                        <div class="col-xs-10" style="padding:0px;margin-left:10px;font-family: 'Helvetica Neue LT Pro';">
                            No dealing desk and no requotes
                        </div>
                        <div style="clear:both;"></div>
                        <div style="height:15px;"></div>
                        <div class="col-xs-1 img-rtl" style="padding:0px;">
                            <img src="/wp-content/themes/fptheme/int/image-2020/ONE-website-home-page-new-2021/Tick-icon-01.png" alt="fpmarkets bullet point" />
                        </div>
                        <div class="col-xs-10" style="padding:0px;margin-left:10px;font-family: 'Helvetica Neue LT Pro';">
                            Access FP Markets Forex Trading Education
                        </div>
                        <div style="clear:both;"></div>
                    </div>
                </div>
            </div>
            <br><br><br>
        </div>
    </div>
</div>


<div class="hidden-xs container-fluid" style="background: url(/wp-content/themes/fptheme/int/image-2020/ONE-website-home-page-new-2021/Rectangle-19-desktop.png);
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;">
    <div class="container">
        <div class="col-md-12" style="padding:0px;">

            <div class="col-md-6" style="margin-top:20px;margin-bottom: 95px;padding-left: 20px;padding-right: 20px;padding-top: 80px;">
                <p class="h2-left-grey-font-sen">Learn and Trade what <span style="font-weight: 100;    font-family: 'Helvetica Neue TH Pro';">you want.</span> <br>When <span style="font-weight: 100;    font-family: 'Helvetica Neue TH Pro';">you want.</span></p>
				<div style="height:15px;"></div>
                <div class="col-xs-1 img-rtl" style="padding: 0px;">
                    <img src="/wp-content/themes/fptheme/int/image-2020/ONE-website-home-page-new-2021/Tick-icon_Gradient-01.png" style="padding-top: 0px;" alt="fpmarkets bullet point">
                </div>
                <div class="col-xs-11" style="margin-left: -10px;padding: 0px;">
                    <span style="color:#0b121c;font-size: 18px;font-family: 'Helvetica Neue LT Pro';">Trade <a href="/forex/">Forex</a>, <a href="/what-are-cfds/">CFDs</a>, <a href="/indices/">Indices</a>, <a href="/share-cfds/">Shares</a>, <a href="/commodities/">Commodities</a>, <a href="/metals/">Metals</a>, <a href="/crt-redir/">Digital Currencies</a> & <a href="/bonds/">Bonds</a></span>
                </div>
                <div style="height:15px;clear: both;"></div>
                <div class="col-xs-1 img-rtl" style="padding: 0px;">
                    <img src="/wp-content/themes/fptheme/int/image-2020/ONE-website-home-page-new-2021/Tick-icon_Gradient-01.png" style="padding-top: 0px;" alt="fpmarkets bullet point">
                </div>
                <div class="col-xs-11" style="margin-left: -10px;padding: 0px;">
                    <span style="color:#0b121c;font-size: 18px;font-family: 'Helvetica Neue LT Pro';">Access global markets 24 hours / 5 days</span>
                </div>
                <div style="height:15px;clear: both;"></div>
                <div class="col-xs-1 img-rtl" style="padding: 0px;">
                    <img src="/wp-content/themes/fptheme/int/image-2020/ONE-website-home-page-new-2021/Tick-icon_Gradient-01.png" style="padding-top: 0px;" alt="fpmarkets bullet point">
                </div>
                <div class="col-xs-11" style="margin-left: -10px;padding: 0px;">
                    <span style="color:#0b121c;font-size: 18px;font-family: 'Helvetica Neue LT Pro';">Trade on the go on our mobile apps</span>
                </div>
                <div style="height:15px;clear: both;"></div>
                <div class="col-xs-1 img-rtl" style="padding: 0px;">
                    <img src="/wp-content/themes/fptheme/int/image-2020/ONE-website-home-page-new-2021/Tick-icon_Gradient-01.png" style="padding-top: 0px;" alt="fpmarkets bullet point">
                </div>
                <div class="col-xs-11" style="margin-left: -10px;padding: 0px;">
                    <span style="color:#0b121c;font-size: 18px;font-family: 'Helvetica Neue LT Pro';">Multilingual customer support</span>
                </div>


            </div>

            <div class="col-md-6 text-center" style="padding:50px;">
                <div class="text-center" style="margin-top:-51px;margin-bottom:-51px;">

                   
                </div>
            </div>

        </div>
    </div>
</div>

<div class="visible-xs container-fluid" style="background-image: url(/wp-content/themes/fptheme/int/image-2020/ONE-website-home-page-new-2021/Layer-12-mobile.png);background-repeat: no-repeat;background-size: contain;margin-top: 45px;">
    <div class="container">
        <div class="col-md-12" style="padding:0px;">

            <div class="col-md-12 text-center" style="padding:50px;">

            </div>
            <div class="col-md-12" style="margin-top:50px;margin-bottom: 0px;padding-left: 0px;padding-right: 0px;padding-top: 200px;">
                <p class="h2-left-grey-font-sen">Learn and Trade what <span style="font-weight: 100;    font-family: 'Helvetica Neue TH Pro';">you want.</span> <br>When <span style="font-weight: 100;    font-family: 'Helvetica Neue TH Pro';">you want.</span></p>
				<div style="height:15px;"></div>

                <div style="color: #ffffff; font-size: 22px;margin-bottom:70px;padding-left: 15px;padding-right: 15px;width: 300px;margin: 0 auto 70px auto;">
                    <div class="col-xs-1 img-rtl" style="padding:0px;">
                        <img src="/wp-content/themes/fptheme/int/image-2020/ONE-website-home-page-new-2021/Tick-icon_Gradient-01.png" alt="fpmarkets bullet point" />
                    </div>
                    <div class="col-xs-10" style="padding:0px;margin-left:10px;color:#2e3642;font-family: 'Helvetica Neue LT Pro';">
                        Trade Forex, Indices, Shares & Commodities
                    </div>
                    <div style="clear:both;"></div>
                    <div style="height:15px;"></div>
                    <div class="col-xs-1 img-rtl" style="padding:0px;">
                        <img src="/wp-content/themes/fptheme/int/image-2020/ONE-website-home-page-new-2021/Tick-icon_Gradient-01.png" alt="fpmarkets bullet point" />
                    </div>
                    <div class="col-xs-10" style="padding:0px;margin-left:10px;color:#2e3642;font-family: 'Helvetica Neue LT Pro';">
                        Access global markets 24 hours / 5 days
                    </div>
                    <div style="clear:both;"></div>
                    <div style="height:15px;"></div>
                    <div class="col-xs-1 img-rtl" style="padding:0px;">
                        <img src="/wp-content/themes/fptheme/int/image-2020/ONE-website-home-page-new-2021/Tick-icon_Gradient-01.png" alt="fpmarkets bullet point" />
                    </div>
                    <div class="col-xs-10" style="padding:0px;margin-left:10px;color:#2e3642;font-family: 'Helvetica Neue LT Pro';">
                        Trade on the go with full mobile accessibility
                    </div>
                    <div style="clear:both;"></div>
                    <div style="height:15px;"></div>
                    <div class="col-xs-1 img-rtl" style="padding:0px;">
                        <img src="/wp-content/themes/fptheme/int/image-2020/ONE-website-home-page-new-2021/Tick-icon_Gradient-01.png" alt="fpmarkets bullet point" />
                    </div>
                    <div class="col-xs-10" style="padding:0px;margin-left:10px;color:#2e3642;font-family: 'Helvetica Neue LT Pro';">
                        Multilingual customer support
                    </div>
                    <div style="clear:both;"></div>
                </div>
            </div>

        </div>
    </div>
</div>

<div class="container-fluid hidden-xs" style="background:#0b121c;">
    <div id="advanced-trading-technology-section" class="container">
        <div class="col-md-12" style="padding:0px;">
            <div class="col-md-6 text-center">
                <div class="text-center">

                    <img alt="0.0 pips" style="width: 100%;transform: scale(1.2);margin-top: -50px;" src="/wp-content/themes/fptheme/int/image-2020/ONE-website-home-page-new-2021/Group-446.png">

                </div>
            </div>
            <div class="col-md-6 cs-advan-es-padding-regn-align" style="padding-left: 70px;padding-top: 100px;">
                <p class="font-for-white-semi-head"><span style="font-weight: 100;font-family: 'Helvetica Neue TH Pro';">Advanced</span> Trading <br>Platforms & Financial Technology  </p>
                <div style="height:15px;"></div>
                <div class="col-xs-1 img-rtl" style="padding:0px;">
                    <img src="/wp-content/themes/fptheme/int/image-2020/ONE-website-home-page-new-2021/Tick-icon_Gradient-01.png" style="padding-top: 0px;" alt="fpmarkets bullet point" />
                </div>
                <div class="col-xs-11" style="margin-left:-10px;padding:0px;">
                    <span style="color:#ffffff;font-size: 18px;font-family: 'Helvetica Neue LT Pro';"><a href="/platforms/mt4/">MetaTrader 4 (MT4)</a> & <a href="/platforms/mt5/">MetaTrader 5 (MT5)</a>, IRESS and<br>WebTrader & mobile apps for iPhone and Android devices</span>
                </div>
                <div style="height:15px;clear:both;"></div>
                <div class="col-xs-1 img-rtl" style="padding:0px;">
                    <img src="/wp-content/themes/fptheme/image-2020/ONE-website-home-page-new-2021/Tick-icon_Gradient-01.png" style="padding-top: 0px;" alt="fpmarkets bullet point" />
                </div>
                <div class="col-xs-11" style="margin-left:-10px;padding:0px;">
                    <span style="color:#ffffff;font-size: 18px;font-family: 'Helvetica Neue LT Pro';">Advanced client portal to monitor your trading in real-time</span>
                </div>
                <div style="height:15px;clear:both;"></div>
                <div class="col-xs-1 img-rtl" style="padding:0px;">
                    <img src="/wp-content/themes/fptheme/image-2020/ONE-website-home-page-new-2021/Tick-icon_Gradient-01.png" style="padding-top: 0px;" alt="fpmarkets bullet point" />
                </div>
                <div class="col-xs-11" style="margin-left:-10px;padding:0px;">
                    <span style="color:#ffffff;font-size: 18px;font-family: 'Helvetica Neue LT Pro';">Superior <a href="/virtual-private-server/">Virtual Private Servers</a> (VPS) solutions for Expert Advisors (EAs) , scalping and auto-trading</span>
                </div>
                <div style="clear:both;"></div>

            </div>

        </div>
    </div>
</div>

<div class="container-fluid visible-xs" style="background:#0b121c;">
    <div class="container" style="padding:0px;">
        <div class="col-md-12" style="padding:0px;">
            <div class="col-md-12 text-center">
                <div class="text-center" style="margin-top:50px;margin-bottom:50px;">

                    <img style="width: 100%;transform: scale(1.3);margin-top: -50px;margin-bottom: -75px;" src="/wp-content/themes/fptheme/int/image-2020/ONE-website-home-page-new-2021/Group-446.png">

                </div>
            </div>
            <div class="col-md-12" style="padding:0px;">
                <p class="font-for-white-semi-head" style="text-align: center;"><span style="font-weight: 100;font-family: 'Helvetica Neue TH Pro';">Advanced</span> Trading <br>Platforms & Financial Technology</p>
                <div style="height:15px;"></div>

                <div style="color:#2e3642;font-size: 18px;padding-left: 15px;padding-right: 15px;">
                    <div class="col-xs-1 img-rtl" style="padding:0px;">
                        <img src="/wp-content/themes/fptheme/int/image-2020/ONE-website-home-page-new-2021/Tick-icon_Gradient-01.png" alt="fpmarkets bullet point" />
                    </div>
                    <div class="col-xs-10" style="padding:0px;margin-left:10px;color:#ffffff;font-family: 'Helvetica Neue LT Pro';">
                        MetaTrader 4 (MT4) & MetaTrader 5 (MT5), IRESS and WebTrader & mobile apps for iPhone and Android devices
                    </div>
                    <div style="clear:both;"></div>
                    <div style="height:15px;"></div>
                    <div class="col-xs-1 img-rtl" style="padding:0px;">
                        <img src="/wp-content/themes/fptheme/int/image-2020/ONE-website-home-page-new-2021/Tick-icon_Gradient-01.png" alt="fpmarkets bullet point" />
                    </div>
                    <div class="col-xs-10" style="padding:0px;margin-left:10px;color:#ffffff;font-family: 'Helvetica Neue LT Pro';">
                        Advanced client portal to monitor your trading in real-time
                    </div>
                    <div style="clear:both;"></div>
                    <div style="height:15px;"></div>
                    <div class="col-xs-1 img-rtl" style="padding:0px;">
                        <img src="/wp-content/themes/fptheme/int/image-2020/ONE-website-home-page-new-2021/Tick-icon_Gradient-01.png" alt="fpmarkets bullet point" />
                    </div>
                    <div class="col-xs-10" style="padding:0px;margin-left:10px;color:#ffffff;font-family: 'Helvetica Neue LT Pro';">
                        Superior Virtual Private Servers (VPS) solutions for Expert Advisors (EAs) , scalping and auto-trading
                    </div>
                    <div style="clear:both;"></div>
                    <div style="height:80px;"></div>


                </div>
            </div>

        </div>
    </div>
</div>

<div class="container-fluid hidden-xs" style="background: #f5f7fa;">
    <div id="copy-trading-technology-section" class="container">
        <div class="col-md-12" style="padding:0px;">
            <div class="col-md-6 cs-advan-es-padding-regn-align">
                <p class="h2-left-grey-font-sen">Copy Trading:<span style="font-weight: 100;font-family: 'Helvetica Neue TH Pro';"> Follow<br> top-performing traders</span></p>
                <div style="height:15px;"></div>
                <div class="col-xs-1 img-rtl" style="padding:0px;">
                    <img src="/wp-content/themes/fptheme/image-2020/ONE-website-home-page-new-2021/Tick-icon_Gradient-01.png" style="padding-top: 0px;" alt="fpmarkets bullet point">
                </div>
                <div class="col-xs-11" style="margin-left:-10px;padding:0px;">
                    <span class="normal-bullet-font-new" >Follow & copy top-performing traders</span>
                </div>
                <div style="height:15px;clear:both;"></div>
                <div class="col-xs-1 img-rtl" style="padding:0px;">
                    <img src="/wp-content/themes/fptheme/image-2020/ONE-website-home-page-new-2021/Tick-icon_Gradient-01.png" style="padding-top: 0px;" alt="fpmarkets bullet point">
                </div>
                
                <div class="col-xs-11 " style="margin-left:-10px;padding:0px;">
                    <span class="normal-bullet-font-new">Forex, Shares, Indices, Commodities, Metals, Bonds, Digital Currencies</span>
                </div>
                
                <div style="height:15px;clear:both;"></div>
                <div class="col-xs-1 img-rtl" style="padding:0px;">
                    <img src="/wp-content/themes/fptheme/image-2020/ONE-website-home-page-new-2021/Tick-icon_Gradient-01.png" style="padding-top: 0px;" alt="fpmarkets bullet point">
                </div>
                <div class="col-xs-11" style="margin-left:-10px;padding:0px;">
                    <span class="normal-bullet-font-new">Become a copier or a provider</span>
                </div>
				<div style="height:15px;clear:both;"></div>
                <div class="col-xs-1 img-rtl" style="padding:0px;">
                    <img src="/wp-content/themes/fptheme/image-2020/ONE-website-home-page-new-2021/Tick-icon_Gradient-01.png" style="padding-top: 0px;" alt="fpmarkets bullet point">
                </div>
                <div class="col-xs-11" style="margin-left:-10px;padding:0px;">
                    <span class="normal-bullet-font-new">No need to develop your own trading plan</span>
                </div>
                <div style="clear:both;"></div>
<div class="padding-top-30">
                    <a href="<?php echo $portalurl; ?>register" class="font-for-mobile txt-bold btn btn-lg btn-transparent-blue" style="padding-top:10px;font-size: 17.5px;
  font-weight: 300!important;
  font-stretch: normal;
  font-style: normal;
  line-height: 1.49;
  letter-spacing: 2.63px;
  text-align: center;
  color: #0b121c;border-radius:0px 10px 10px 10px;">
Copy Trade Now
                    </a>
                </div>
            </div>
<div class="col-md-6 text-center">
                <div class="text-center">

                    <img alt="0.0 pips" src="/wp-content/themes/fptheme/image-2020/social-trading-site-new-page-march/new-image-3.png" style="margin-top: 10px;">

                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid visible-xs" style="background:#f5f7fa;">
    <div class="container" style="padding:0px;">
        <div class="col-md-12" style="padding:0px;">
            <div class="col-md-12 text-center">
                <div class="text-center" style="margin-top:65px;margin-bottom:50px;">

                    <img alt="0.0 pips" src="/wp-content/themes/fptheme/image-2020/social-trading-site-new-page-march/new-image-3.png" style="margin-bottom:-50px;">

                </div>
            </div>
            <div class="col-md-12" style="padding:0px;">
                <p class="h2-left-grey-font-sen">Copy Trading:<span style="font-weight: 100;font-family: 'Helvetica Neue TH Pro';"> Follow<br> top-performing traders</span></p>
                <div style="height:15px;"></div>

                <div style="color:#2e3642;font-size: 18px;padding-left: 15px;padding-right: 15px;width: 270px;margin: 0 auto;">
                    <div class="col-xs-1 img-rtl" style="padding:0px;">
                        <img src="/wp-content/themes/fptheme/image-2020/ONE-website-home-page-new-2021/Tick-icon_Gradient-01.png" alt="fpmarkets bullet point" />
                    </div>
                    <div class="col-xs-10" style="padding:0px;margin-left:10px;color:#0b121c;font-family: 'Helvetica Neue LT Pro';">
                        Follow & copy top-performing traders
                    </div>
                    <div style="clear:both;"></div>
                    <div style="height:15px;"></div>
                    <div class="col-xs-1 img-rtl" style="padding:0px;">
                        <img src="/wp-content/themes/fptheme/image-2020/ONE-website-home-page-new-2021/Tick-icon_Gradient-01.png" alt="fpmarkets bullet point" />
                    </div>
                    <div class="col-xs-10" style="padding:0px;margin-left:10px;color:#0b121c;font-family: 'Helvetica Neue LT Pro';">
                        Forex, Shares, Indices, Commodities
                    </div>
					<div style="clear:both;"></div>
                    <div style="height:15px;"></div>
                    <div class="col-xs-1 img-rtl" style="padding:0px;">
                        <img src="/wp-content/themes/fptheme/image-2020/ONE-website-home-page-new-2021/Tick-icon_Gradient-01.png" alt="fpmarkets bullet point" />
                    </div>
                    <div class="col-xs-10" style="padding:0px;margin-left:10px;color:#0b121c;font-family: 'Helvetica Neue LT Pro';">
                        Become a copier or a provider
                    </div>
                    <div style="clear:both;"></div>
                    <div style="height:15px;"></div>
                    <div class="col-xs-1 img-rtl" style="padding:0px;">
                        <img src="/wp-content/themes/fptheme/image-2020/ONE-website-home-page-new-2021/Tick-icon_Gradient-01.png" alt="fpmarkets bullet point" />
                    </div>
                    <div class="col-xs-10" style="padding:0px;margin-left:10px;color:#0b121c;font-family: 'Helvetica Neue LT Pro';">
                        No need to develop your own trading plan
                    </div>
                    <div style="clear:both;"></div>
                    <div style="height:70px;"></div>


                </div>
            </div>

        </div>
    </div>
</div>
    
    
<div class="hidden-xs container-fluid">
    <div id="most-trusted-brands-section" class="container">
	<div>
                        <p class="h2-left-grey-font-sen hidden-xs" style="text-align: center;"><span style="font-weight: 100;font-family: 'Helvetica Neue TH Pro';">Why is FP Markets</span> one of <br>the world’s most trusted <span style="font-weight: 100;font-family: 'Helvetica Neue TH Pro';">Forex Brokers?</span></p>
                        <p class="h2-left-grey-font-sen visible-xs"><span style="font-weight: 100;font-family: 'Helvetica Neue TH Pro';">Why is FP Markets</span><br> one of the world’s <br>most trusted <span style="font-weight: 100;font-family: 'Helvetica Neue TH Pro';">Forex Brokers?</span></p>
                    </div>
        <div class="col-md-12 padding-top-40">
            <div class="col-md-7 text-center">
                <div class="text-center" style="margin-top:30px;">

                    <img src="/wp-content/themes/fptheme/int/image-2020/ONE-website-home-page-new-2021/Group-447.png" style="margin-top:-15px;width:90%;margin-bottom: -35px;">

                </div>
            </div>
            <div class="col-md-5" style="padding-left: 20px;padding-right: 20px;padding-bottom :50px;">

                <div style="height:10px;"></div>
                <div class="col-xs-1 img-rtl" style="padding:0px;">
                    <img src="/wp-content/themes/fptheme/int/image-2020/ONE-website-home-page-new-2021/Star.png" style="padding-top: 0px;" alt="fpmarkets bullet point" />
                </div>
                <div class="col-xs-11" style="margin-left:0px;padding:0px;">
                    <span class="bullet-point-sect"> Globally Regulated </span>
                </div>
                <div style="height:10px;clear:both;"></div>
                <div class="col-xs-1 img-rtl" style="padding:0px;">
                    <img src="/wp-content/themes/fptheme/int/image-2020/ONE-website-home-page-new-2021/Star.png" style="padding-top: 0px;" alt="fpmarkets bullet point" />
                </div>
                <div class="col-xs-11" style="margin-left:0px;padding:0px;">
                    <span class="bullet-point-sect"> Segregated Client Funds </span>
                </div>
                <div style="height:10px;clear:both;"></div>
                <div class="col-xs-1 img-rtl" style="padding:0px;">
                    <img src="/wp-content/themes/fptheme/int/image-2020/ONE-website-home-page-new-2021/Star.png" style="padding-top: 0px;" alt="fpmarkets bullet point" />
                </div>
                <div class="col-xs-11" style="margin-left:0px;padding:0px;">
                    <span class="bullet-point-sect"> 40+ International Awards </span>
                </div>
                <div style="clear:both;"></div>
                <div style="height:10px;clear:both;"></div>
                <div class="col-xs-1 img-rtl" style="padding:0px;">
                    <img src="/wp-content/themes/fptheme/int/image-2020/ONE-website-home-page-new-2021/Star.png" style="padding-top: 0px;" alt="fpmarkets bullet point" />
                </div>
                <div class="col-xs-11" style="margin-left:0px;padding:0px;">
                    <span class="bullet-point-sect"> 24/7^^ Multilingual Customer Support </span>
                </div>
                <div style="clear:both;"></div>
                <div style="height:10px;clear:both;"></div>
                <div class="col-xs-1 img-rtl" style="padding:0px;">
                    <img src="/wp-content/themes/fptheme/int/image-2020/ONE-website-home-page-new-2021/Star.png" style="padding-top: 0px;" alt="fpmarkets bullet point" />
                </div>
                <div class="col-xs-11" style="margin-left:0px;padding:0px;">
                    <span class="bullet-point-sect">Consistently Tighter Spreads** </span>
                </div>
                <div style="clear:both;"></div>
                <div style="height:10px;clear:both;"></div>
                <div class="col-xs-1 img-rtl" style="padding:0px;">
                    <img src="/wp-content/themes/fptheme/int/image-2020/ONE-website-home-page-new-2021/Star.png" style="padding-top: 0px;" alt="fpmarkets bullet point" />
                </div>
                <div class="col-xs-11" style="margin-left:0px;padding:0px;">
                    <span class="bullet-point-sect"> Personal Account Managers </span>
                </div>
                <div style="clear:both;"></div>
                <div style="height:10px;clear:both;"></div>
                <div class="col-xs-1 img-rtl" style="padding:0px;">
                    <img src="/wp-content/themes/fptheme/int/image-2020/ONE-website-home-page-new-2021/Star.png" style="padding-top: 0px;" alt="fpmarkets bullet point" />
                </div>
                <div class="col-xs-11" style="margin-left:0px;padding:0px;">
                    <span class="bullet-point-sect"> 15 Years Trading Experience </span>
                </div>
                <div style="clear:both;"></div>

            </div>

        </div>

    </div>
</div>


<div class="visible-xs container-fluid" style="padding-bottom: 75px;background-size: auto;background-repeat: no-repeat;background-image: url(/wp-content/themes/fptheme/int/images/payments-bg.jpg);background-position: center bottom;">
    <div class="container" style="padding-left:0px;padding-right:0px;">

        <div class="col-md-12">

            <div style="height:75px;"></div>
                        <p class="h2-left-grey-font-sen visible-xs"><span style="font-weight: 100;font-family: 'Helvetica Neue TH Pro';">Why is FP Markets</span><br> one of the world’s <br>most trusted <span style="font-weight: 100;font-family: 'Helvetica Neue TH Pro';">Forex Brokers?</span></p>
                    <div class="text-center" style="margin-top:40px;margin-bottom: -50px;">

                <img src="/wp-content/themes/fptheme/int/image-2020/new-homepage-img/global-desktop.png">

            </div>

            <div style="font-size: 18px;margin-top: 40px;width: 295px;margin: 40px auto 0 auto;font-weight: 300;font-stretch: normal;font-style: normal;line-height: 1.31;letter-spacing: normal;text-align: left;color: #2e3642;">
                <div class="col-xs-1 img-rtl" style="padding:0px;">
                    <img src="/wp-content/themes/fptheme/int/image-2020/ONE-website-home-page-new-2021/Star.png" alt="fpmarkets bullet point" />
                </div>
                <div class="col-xs-10" style="font-family: 'Helvetica Neue LT Pro';padding:0px;margin-left:10px;color:#2e3642;margin-top:5px;">
                    Globally Regulated
                </div>
                <div style="clear:both;"></div>

                <div style="height:15px;"></div>
                <div class="col-xs-1 img-rtl" style="padding:0px;">
                    <img src="/wp-content/themes/fptheme/int/image-2020/ONE-website-home-page-new-2021/Star.png" alt="fpmarkets bullet point" />
                </div>
                <div class="col-xs-10" style="font-family: 'Helvetica Neue LT Pro';padding:0px;margin-left:10px;color:#2e3642;margin-top:5px;">
                    Segregated Client Funds
                </div>
                <div style="clear:both;"></div>

                <div style="height:15px;"></div>
                <div class="col-xs-1 img-rtl" style="padding:0px;">
                    <img src="/wp-content/themes/fptheme/int/image-2020/ONE-website-home-page-new-2021/Star.png" alt="fpmarkets bullet point" />
                </div>
                <div class="col-xs-10" style="font-family: 'Helvetica Neue LT Pro';padding:0px;margin-left:10px;color:#2e3642;margin-top:5px;">
                    40+ International Awards
                </div>
                <div style="clear:both;"></div>

                <div style="height:15px;"></div>
                <div class="col-xs-1 img-rtl" style="padding:0px;">
                    <img src="/wp-content/themes/fptheme/int/image-2020/ONE-website-home-page-new-2021/Star.png" alt="fpmarkets bullet point" />
                </div>
                <div class="col-xs-10" style="font-family: 'Helvetica Neue LT Pro';padding:0px;margin-left:10px;color:#2e3642;margin-top:5px;">
                    24/7^^ Multilingual Customer Support
                </div>
                <div style="clear:both;"></div>

                <div style="height:15px;"></div>
                <div class="col-xs-1 img-rtl" style="padding:0px;">
                    <img src="/wp-content/themes/fptheme/int/image-2020/ONE-website-home-page-new-2021/Star.png" alt="fpmarkets bullet point" />
                </div>
                <div class="col-xs-10" style="font-family: 'Helvetica Neue LT Pro';padding:0px;margin-left:10px;color:#2e3642;margin-top:5px;">
                    Consistently Tighter Spreads**
                </div>
                <div style="clear:both;"></div>

                <div style="height:15px;"></div>
                <div class="col-xs-1 img-rtl" style="padding:0px;">
                    <img src="/wp-content/themes/fptheme/int/image-2020/ONE-website-home-page-new-2021/Star.png" alt="fpmarkets bullet point" />
                </div>
                <div class="col-xs-10" style="font-family: 'Helvetica Neue LT Pro';padding:0px;margin-left:10px;color:#2e3642;margin-top:5px;">
                    Personal Account Managers
                </div>
                <div style="clear:both;"></div>

                <div style="height:15px;"></div>
                <div class="col-xs-1 img-rtl" style="padding:0px;">
                    <img src="/wp-content/themes/fptheme/int/image-2020/ONE-website-home-page-new-2021/Star.png" alt="fpmarkets bullet point" />
                </div>
                <div class="col-xs-10" style="font-family: 'Helvetica Neue LT Pro';padding:0px;margin-left:10px;color:#2e3642;margin-top:5px;">
                    15 Years Trading Experience
                </div>
                <div style="clear:both;"></div>
            </div>
        </div>

    </div>
</div>


<div class="container-fluid hms1">
    <div id="forex-broker-you-can-section" class="container">
        <div class="text-center visible-xs">
            <span>
                <img src="/wp-content/themes/fptheme/int/images/home-Rectangle-new-19-mobile.png" style="max-width:100%;" />
            </span>
        </div>
        <div class="row">
            <div class="col-sm-6  pad-right-align-75 ar-content-hide">
			    <div class="ar-content-lt">
                    <div>
                        <p class="h2-left-grey-font-sen hidden-xs"><span style="font-weight: 100;font-family: 'Helvetica Neue TH Pro';">A forex broker</span> you can trust</p>
                        <p class="h2-left-grey-font-sen visible-xs"><span style="font-weight: 100;font-family: 'Helvetica Neue TH Pro';">A forex broker</span><br> you can trust</p>
                    </div>
                    <div class="padding-top-20">
                        <p class="normal-grey-parag-font">Established and regulated since 2005, FP Markets is a global Financial Technology services <a class="cust-link-a" href="/forex/" target="_blank"><b>Foreign Exchange</b></a> (Forex) and <a class="cust-link-a" href="/share-cfds/" target="_blank"><b>Contracts for Differences</b></a> (CFD) broker. We pride ourselves on delivering an exceptional trading experience and have been awarded as the <a class="cust-link-a" href="https://www.fpmarkets.com/blog/best-global-value-forex-broker-2020/#TRPLINKPROCESSED" target="_blank"><b>#1 Value Global Forex Broker*</b></a> on multiple occasions. Forex traders understand the importance of trading with a regulated universal broker in the Forex market as it means that FP Markets must adhere to some of the most stringent international regulations of the Australian Securities and Investment Commission (ASIC), the Cyprus Securities and Exchange Commission (CySEC), and the European Securities and Markets Authority (ESMA). </p>
                        <p class="normal-grey-parag-font padding-top-10">Our success is centred around miscellaneous core values. Values that include providing competitive brokerage fees through tight spreads, ensuring lightning-fast execution, access to advanced trading platforms with an extensive portfolio of financial products, and exceptional customer service.</p>
                    </div>
                </div>
			</div>
            <div class="col-sm-6 padg-left-100 ar-content-show" style="display:none;">
                <div>
                    <div>
                        <p class="h2-left-grey-font-sen hidden-xs"><span style="font-weight: 100;font-family: 'Helvetica Neue TH Pro';">A forex broker</span> you can trust</p>
                        <p class="h2-left-grey-font-sen visible-xs"><span style="font-weight: 100;font-family: 'Helvetica Neue TH Pro';">A forex broker</span><br> you can trust</p>
                    </div>
                    <div class="padding-top-20">
                        <p class="normal-grey-parag-font">Established and regulated since 2005, FP Markets is a global <a class="cust-link-a" href="/forex/" target="_blank"><b>Financial Technology services</b></a> Foreign Exchange (Forex) and Contracts for Differences (CFD) broker. We pride ourselves on delivering an exceptional trading experience and have been awarded as the <a class="cust-link-a" href="https://www.fpmarkets.com/blog/best-global-value-forex-broker-2020/#TRPLINKPROCESSED" target="_blank"><b>#1 Value Global Forex Broker*</b></a> on multiple occasions. Forex traders understand the importance of trading with a regulated universal broker in the Forex market as it means that FP Markets must adhere to some of the most stringent international regulations of the Australian Securities and Investment Commission (ASIC), the Cyprus Securities and Exchange Commission (CySEC), and the European Securities and Markets Authority (ESMA). </p>
                        <p class="normal-grey-parag-font padding-top-10">Our success is centred around miscellaneous core values. Values that include providing competitive brokerage fees through tight spreads, ensuring lightning-fast execution, access to advanced trading platforms with an extensive portfolio of financial products, and exceptional customer service.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid hms2">
    <div id="forex-trading-provider-austr-section" class="container">
        <div>
            <p class="h2-cent-white-font hidden-xs">Top Financial Technology<br> Company <span style="font-weight: 100;font-family: 'Helvetica Neue TH Pro';">in Australia</span></p>
            <p class="h2-cent-white-font visible-xs" style="margin-bottom: -15px;">Top Financial Technology<br> Company <span style="font-weight: 100;font-family: 'Helvetica Neue TH Pro';">in Australia</span></p>
        </div>
        <div class="row padding-top-40">
            <div class="col-sm-6 padg-right-40">
                <div>
					<p class="normal-white-parag-font padding-top-30-for-mobile">One of the primary goals of FP Markets is to provide the best product in the market. Our relationships with leading tier one financial institutions mean deep liquidity and tighter spreads for Forex traders. Combined with our <a class="cust-link-a" href="/ecn-trading/" target="_blank"><b>ECN Pricing</b></a> model, traders can consistently trade from 0.0 pips on major currency pairs such as the EUR/USD, USD/JPY and GBP/USD.</p>
					<p class="normal-white-parag-font padding-top-30 padding-top-20-new-for-mobile">FP Markets has developed a proud reputation as a Forex broker. In Australia, the company operates under an Australian Financial Services Licence (AFSL) and was awarded the '<a class="cust-link-a" href="https://www.fpmarkets.com/blog/fp-markets-best-fx-broker-australia/#TRPLINKPROCESSED" target="_blank"><b>Best Forex Broker Australia</b></a>' award. </p>
                    <div class="text-center padding-top-25 padding-top-20-new-for-mobile">
                        <span>
                            <img src="/wp-content/themes/fptheme/int/image-2020/fpmarkets-home-site-new/Layer-751.png" style="max-width:100%;" />
                        </span>
                    </div>
                    </div>
            </div>
            <div class="col-sm-6 padg-left-40 padding-top-20-new-for-mobile">
                <div>
                    <p class="normal-white-parag-font padding-top-20-for-mobile">A zero restrictions policy means that FP Markets provides the ideal conditions for scalping and those using Expert Advisors (EAs) to conduct their currency trading. Choice is another advantage that active traders can enjoy with FP Markets as fintech platforms, MetaTrader 4 and MetaTrader 5 are included in our trading platform offering. </p>
                    <p class="normal-white-parag-font padding-top-30 padding-top-20-new-for-mobile it-lang-conduct">Specifically designed for the foreign exchange markets, the trading platforms provide all the financial-tools necessary to conduct both fundamental and technical analysis. The <a class="cust-link-a" href="<?php echo $portalurl; ?>demo/register#TRPLINKPROCESSED/" target="_blank"><b>Demo Account</b></a> option allows traders to experience, get familiar with online trading and learn about Forex fundamentals such as base currency, FX pairs, charting tools, and volatility. You can develop your own trading strategies without making an initial deposit or being exposed to trading risks. Traders can then upgrade to a <a class="cust-link-a" href="<?php echo $portalurl; ?>register#TRPLINKPROCESSED/" target="_blank"><b>Live Account</b></a> with a low minimum deposit of $100.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid hms3 end-divider">
    <div id="cfd-trading-provider-austra-section" class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="text-center hidden-xs">
                    <span>
                        <img src="/wp-content/themes/fptheme/int/image-2020/fpmarkets-home-site-new/Layer-752.png" style="max-width:100%;margin-top: -40px;margin-left: -50px;" />
                    </span>
                </div>
            </div>
            <div class="col-sm-6 padg-left-40">
                <div>
                    <div>
                        
                        <div class="text-center visible-xs">
                            <span>
                                <img src="/wp-content/themes/fptheme/int/image-2020/fpmarkets-home-site-new/Layer-752.png" style="max-width:100%;margin-top: 20px;margin-bottom: -25px;" />
                            </span>
                        </div>
                    </div>
                    <div class="padding-top-20 hm-asx">
                        <p class="normal-grey-parag-font ">Although trading Forex is a key component of our business, FP Markets also offer CFD trading in <a class="cust-link-a" href="/share-cfds/" target="_blank"><b>Shares</b></a>, <a class="cust-link-a" href="/metals/" target="_blank"><b>Metals</b></a>, <a class="cust-link-a" href="/commodities/" target="_blank"><b>Commodities</b></a>, <a class="cust-link-a" href="/indices/" target="_blank"><b>Indices</b></a>, <a class="cust-link-a" href="/bonds/" target="_blank"><b>Bonds</b></a> &  <a class="cust-link-a" href="/crt-redir/" target="_blank"><b>Digital Currencies</b></a>. Traders can access more than 10,000+ tradable instruments across global financial markets using <a class="cust-link-a" href="/iress/" target="_blank"><b>Iress</b></a>, an advanced online trading software specifically designed for CFD trading.</p>
                        
                         
                        
                        <p class="normal-grey-parag-font padding-top-10 fr-brokesr">CFD trading with an online broker allows you to access the biggest global exchanges and indices, including the Standard & Poor’s, NASDAQ and the New York Stock Exchange (NYSE) in the United States, and the Australian Stock Exchange (ASX) . Trade some of the world's largest companies.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="container-fluid mta">
    <div id="fp-markets-app-align-section" class="container">
        <div class="row">
            <div class="col-sm-6 pad-right-40">
                <div>
                    <p class="h4-left-font hidden-xs"><span style="font-weight:100;    font-family: 'Helvetica Neue TH Pro';">FP Markets Trading App</span> </p>
                    <p class="h4-left-font visible-xs"><span style="font-weight:100;    font-family: 'Helvetica Neue TH Pro';">FP Markets Trading App</span> </p>
                    <p class="semi-head-font">Low-cost trading on the go!</p>
                    <div class="visible-xs">
                        <div class="row" style="display: inline-flex;margin: 0 auto;margin-top: 50px;">
                            <div class="col-sm-6" style="padding-left: 0px;">
                                <div>
                                    <span>
                                        <img src="/wp-content/themes/fptheme/int/image-2020/app-section-for-all-site-pages/iphone.png" style="max-width:100%;">
                                    </span>
                                </div>
                            </div>
                            <div class="col-sm-6" style="padding-left: 0px;">
                                <div>
                                    <span>
                                        <img src="/wp-content/themes/fptheme/int/image-2020/app-section-for-all-site-pages/android.png" style="max-width:100%;margin-top: -12px;">
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <p class="normal-white-para-font padding-top-30">Trade global markets from the palm of your hand.</p>
                    
                    
                    
                    <p class="normal-white-para-font padding-top-25  hidden-xs " style="font-size: 18px;font-weight: 300;line-height: 30px;color: #0b121c;"><span style="font-style: italic;">Forex</span> | <span style="font-style: italic;">Share CFDs</span> | <span style="font-style: italic;">Indices</span> | <span style="font-style: italic;">Commodities</span><br><span style="font-style: italic;">Metals</span> | <span style="font-style: italic;">Bonds</span> | <span style="font-style: italic;">Digital Currencies</span></p>
                    
                    
                    <p class="normal-white-para-font padding-top-20 visible-xs" style="font-size: 18px;font-weight: 300;line-height: 28px;color: #0b121c;font-style: italic;"><span style="font-style: italic;">Forex</span> | <span style="font-style: italic;">Share CFDs</span> | <span style="font-style: italic;">Indices</span> | <br><span style="font-style: italic;">Commodities</span></p>
                </div>
                <div class="row padding-top-35 padding-top-25-for-mobile dis-fle-for-mob-align">
                    <div class="col-sm-6">
                        <div>
                            <span>
                                <a href="https://apps.apple.com/au/app/fp-markets/id1549552932" target="_blank">                                   
                                        <img src="/wp-content/themes/fptheme/image-2020/app-section-for-all-site-pages/apple-store.png" style="max-width:100%;">                                    
                                </a>
                            </span>
                        </div>
                    </div>
                    <div class="col-sm-6 margin-left-90-align">
                        <div>
                            <span>
                                <a href="https://play.google.com/store/apps/details?id=com.fpmarkets.application&amp;hl=en_IN" target="_blank">
                                    <img src="/wp-content/themes/fptheme/image-2020/app-section-for-all-site-pages/google-store.png" style="max-width:100%;" />                                        
                                </a>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 pad-left-40 hidden-xs">
                <div class="row">
                    <div class="col-sm-6">
                        <div>
                            <span>
                                <img src="/wp-content/themes/fptheme/int/image-2020/app-section-for-all-site-pages/iphone.png" style="max-width:100%;transform: scale(1.1);margin-top: -10px;" />
                            </span>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div>
                            <span>
                                <img src="/wp-content/themes/fptheme/int/image-2020/app-section-for-all-site-pages/android.png" style="max-width:100%;margin-left: -25px;margin-top: -30px;transform: scale(1.1);" />
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<div class="section nomarginmobile banks-logos padding100 margin-top-align-for-lq-pro-mob end-divider" style="padding-top:70px;padding-bottom: 50px;">
    <div class="container">

        <div class="row">
            <div class="col-md-12">
                <h3 class="no-uppercase text-center margin-btm-align-for-mobile" style="font-size:44px;letter-spacing:0px;font-weight:700;margin-bottom: 0px;">Liquidity providers</h3>
                <div class="col-md-12">

                    
                        <div class="container">
                          <div id="ncCarousel" class="carousel slide hidden-xs" data-ride="carousel">
                            <!-- Wrapper for slides -->
                            <div class="carousel-inner">
                              <div class="item active">
                                <img src="https://fpmarkets.com/wp-content/themes/fptheme/int/images/liqu/Barclays.png" alt="Barclays Forex Trading">
                                <img src="https://fpmarkets.com/wp-content/themes/fptheme/int/images/liqu/BNP-Paribas.png" alt="BNP Paribas Banking Group">
                                <img src="https://fpmarkets.com/wp-content/themes/fptheme/int/images/liqu/Citibank.png" alt="Citibank Trading">
                                <img src="https://fpmarkets.com/wp-content/themes/fptheme/int/images/liqu/Commerzbank.png" alt="Commerzbank Forex Trading">
                                <img src="https://fpmarkets.com/wp-content/themes/fptheme/int/images/liqu/CS.png" alt="Credit Suisse - Switzerland">
                              </div>

                              <div class="item">

                                <img src="https://fpmarkets.com/wp-content/themes/fptheme/int/images/liqu/GS.png" alt="Goldman Sachs Bank">
                                <img src="https://fpmarkets.com/wp-content/themes/fptheme/int/images/liqu/HSBC.png" alt="HSBC Bank">
                                <img src="https://fpmarkets.com/wp-content/themes/fptheme/int/images/liqu/JP-Morgan.png" alt="JP Morgan Investor & Financier">
                                <img src="https://fpmarkets.com/wp-content/themes/fptheme/int/images/liqu/RBS.png" alt="Royal Bank of Scotland">
                                <img src="https://fpmarkets.com/wp-content/themes/fptheme/int/images/liqu/SC.png" alt="Standard Chartered Bank">
                              </div>

                              <div class="item">

                                <img src="https://fpmarkets.com/wp-content/themes/fptheme/int/images/liqu/SG.png" alt="Societe Generale">
                                <img src="https://fpmarkets.com/wp-content/themes/fptheme/int/images/liqu/State-Street.png" alt="Forex Trading State Street">
                                  <img src="https://fpmarkets.com/wp-content/themes/fptheme/int/images/liqu/Barclays.png" alt="Barclays Forex Trading">
                                <img src="https://fpmarkets.com/wp-content/themes/fptheme/int/images/liqu/BNP-Paribas.png" alt="BNP Paribas Banking Group">
                                <img src="https://fpmarkets.com/wp-content/themes/fptheme/int/images/liqu/Citibank.png" alt="Citibank Trading">
                              </div>

                            </div>

                            <!-- Left and right controls -->
                            <a class="left carousel-control" href="#ncCarousel" data-slide="prev">
                              <span class="glyphicon fa fa-chevron-left" style="color: #01bdff;"></span>
                              <span class="sr-only">Previous</span>
                            </a>
                            <a class="right carousel-control" href="#ncCarousel" data-slide="next">
                              <span class="glyphicon fa fa-chevron-right" style="color: #01bdff;"></span>
                              <span class="sr-only">Next</span>
                            </a>
                          </div>
                            
                            <div id="ncCarouselmobile" class="carousel slide visible-xs" data-ride="carousel">
                            <!-- Wrapper for slides -->
                            <div class="carousel-inner">
                              <div class="item active">
                                <img src="https://fpmarkets.com/wp-content/themes/fptheme/int/images/liqu/Barclays.png" alt="Barclays Forex Trading">
                                <img src="https://fpmarkets.com/wp-content/themes/fptheme/int/images/liqu/BNP-Paribas.png" alt="BNP Paribas Banking Group">
                                </div>
                            <div class="item">    
                                <img src="https://fpmarkets.com/wp-content/themes/fptheme/int/images/liqu/Citibank.png" alt="Citibank Trading">
                                <img src="https://fpmarkets.com/wp-content/themes/fptheme/int/images/liqu/Commerzbank.png" alt="Commerzbank Forex Trading">
                                
                              </div>

                              <div class="item">
                                <img src="https://fpmarkets.com/wp-content/themes/fptheme/int/images/liqu/CS.png" alt="Credit Suisse - Switzerland">
                                <img src="https://fpmarkets.com/wp-content/themes/fptheme/int/images/liqu/GS.png" alt="Goldman Sachs Bank">
                              </div>
                            <div class="item"> 
                                <img src="https://fpmarkets.com/wp-content/themes/fptheme/int/images/liqu/HSBC.png" alt="HSBC Bank">
                                <img src="https://fpmarkets.com/wp-content/themes/fptheme/int/images/liqu/JP-Morgan.png" alt="JP Morgan Investor & Financier">
                            </div>
                            <div class="item"> 
                                <img src="https://fpmarkets.com/wp-content/themes/fptheme/int/images/liqu/RBS.png" alt="Royal Bank of Scotland">
                                <img src="https://fpmarkets.com/wp-content/themes/fptheme/int/images/liqu/SC.png" alt="Standard Chartered Bank">
                              </div>

                              <div class="item">

                                <img src="https://fpmarkets.com/wp-content/themes/fptheme/int/images/liqu/SG.png" alt="Societe Generale">
                                <img src="https://fpmarkets.com/wp-content/themes/fptheme/int/images/liqu/State-Street.png" alt="Forex Trading State Street">
                                  
                              </div>

                            </div>

                            <!-- Left and right controls -->
                            <a class="left carousel-control" href="#ncCarouselmobile" data-slide="prev">
                              <span class="glyphicon fa fa-chevron-left" style="color: #01bdff;"></span>
                              <span class="sr-only">Previous</span>
                            </a>
                            <a class="right carousel-control" href="#ncCarouselmobile" data-slide="next">
                              <span class="glyphicon fa fa-chevron-right" style="color: #01bdff;"></span>
                              <span class="sr-only">Next</span>
                            </a>
                          </div>
                        </div>


                </div>
            </div>

        </div>
    </div>
</div>


<section class="steps-new-Bg">
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="hidden-xs" style="height:90px;"></div>
                <div class="visible-xs" style="height:65px;"></div>
                <p class="hidden-xs text-center" style="margin-bottom:5px;">

                    <span class="start-traind-font-new">Start trading with FP Markets</span>
                    <br>
					<p class="fast-acc-new-font hidden-xs" style="font-family: 'Helvetica Neue TH Pro';"><strong style="font-family: 'Helvetica Neue BD Pro';">Fast account opening</strong> in 3 simple steps</p>
                     
                </p>
                <p class="visible-xs text-center" style="margin-bottom:-7px;">
                   
                    <span class="start-traind-font-new">Start trading with FP Markets</span>
                    <br>
					<p class="fast-acc-new-font visible-xs"><strong style="font-family: 'Helvetica Neue BD Pro';">Fast account opening</strong><br> in 3 simple steps</p>
                </p>

                <div class="hidden-xs" style="height:45px;"></div>
                <div class="visible-xs" style="height:30px;"></div>

                <div class="cstm-3-step-sec padding-left-right-15-mobile-align">
                    <div class="cstm-3-step-inner">
                        <div class="cstm3-stp-numbr">1
                            <img class="arrow-imag-align visible-xs" src="/wp-content/themes/fptheme/int/images/arrow-copy-4.png" alt="" title="" style="">
                        </div>
                        <div class="cstm3-stp-cntnt font200 hidden-xs">
                            <div class="cstm3-stp-ttle">Register</div>
                            Choose account type <br>and complete our fast and <br>secure application form
                        </div>
						<div class="cstm3-stp-cntnt font200 visible-xs">
                            <div class="cstm3-stp-ttle">Register</div>
                            Choose account type and complete our fast and secure application form
                        </div>
                    </div>
                    <div class="cstm-3-step-inner mobile-bottom60">
                        <div class="cstm3-stp-numbr">2
                            <img class="arrow-imag-align visible-xs" src="/wp-content/themes/fptheme/int/images/arrow-copy-4.png" alt="" title="" style="">
                        </div>
                        <div class="cstm3-stp-cntnt font200 hidden-xs">
                            <div class="cstm3-stp-ttle">Fund</div>
                            Fund your trading account <br>using a wide range <br>of funding methods

                        </div>
						<div class="cstm3-stp-cntnt font200 visible-xs">
                            <div class="cstm3-stp-ttle">Fund</div>
                            Fund your trading account using a wide range of funding methods

                        </div>
                    </div>
                    <div class="cstm-3-step-inner mobile-bottom40">
                        <div class="cstm3-stp-numbr last-mobile-step">3</div>
                        <div class="cstm3-stp-cntnt font200 hidden-xs">
                            <div class="cstm3-stp-ttle">Trade</div>
                            Start trading and access over 10,000+ instruments

                        </div>
						<div class="cstm3-stp-cntnt font200 visible-xs margin-top-20-for-mobile-new">
                            <div class="cstm3-stp-ttle">Trade</div>
                            Start trading and access over 10,000+ instruments

                        </div>
                    </div>
                </div>

                <div class="text-center btn-for-str-for-align-mobile" style="margin-top:80px;margin-bottom:50px;">
                    <a href="<?php echo $portalurl; ?>register#TRPLINKPROCESSED" class="font-for-mobile txt-bold btn btn-lg btn-transparent-blue it-langs-letr-space" style="    font-family: 'Helvetica Neue LT Pro'!important;font-size: 17.5px;
  font-weight: 300!important;
  font-stretch: normal;
  font-style: normal;
  line-height: 1.49;
  letter-spacing: 2.63px;
  text-align: center;
  color: #0b121c;border-radius:0px 10px 10px 10px;">
                        Open an account Now
                    </a>
                </div>
                
                <div class="hidden-xs" style="height:50px;"></div>
                <div class="visible-xs" style="height:70px;"></div>
            </div>
        </div>
    </div>
</section>




<div class="section pad-align-for-mb-tp-bt pad-align-for-ar-lang" style="padding-bottom: 0px;padding-top: 30px;    margin-bottom: -125px;">

    <div class="container" style="margin-top:40px;margin-bottom:40px;">
        <div class="row">
            <div class="text-left col-md-12">
                <div class="hidden-xs text-left col-md-3 col-xs-12 paddingtop" style="font-size: 18px;color: #0b121c;font-weight: 100;font-family: 'Helvetica Neue TH Pro';">
                    <span class="payments-title">Easy funding  <br>& withdrawals:</span><br>
                    No deposit fees^
                </div>
                <div class="visible-xs text-center col-md-3 col-xs-12 paddingtop" style="color: #0b121c;font-weight: 100;font-family: 'Helvetica Neue TH Pro';">
                    <span class="payments-title">Easy funding & withdrawals:</span><br>
                    No deposit fees^
                </div>
                <div class="text-left col-md-9 paddingtop hidden-xs">
                    <img src="/wp-content/themes/fptheme/int/images/payment-methods-int-new.png" class="img-responsive" alt="payment">
                </div>
                <div class="text-center col-md-9 paddingtop visible-xs">
                    <img src="/wp-content/themes/fptheme/int/images/mobile-funds-int-new.png" class="img-responsive" alt="payment">
                </div>
            </div>
            <div class="clear"></div>
            <div class="col-md-12" style="margin-top:5px;">
                <p class="text-center padding-left-right-15-mobile-align " style="font-family: 'Helvetica Neue LT Pro';font-size: 18px;    font-weight: 300;    color: #0b121c;">
                <i>For more deposits, withdrawals and funding information please <a href="/funding" style="text-decoration:underline!important;color:#00bdff; font-weight: bold;">click here</a></i></p>
            </div>
            <div class="clear"></div>
        </div>
    </div>
</div>

<style>
    .light-grey-font {
    font-size: 17.5px;
    line-height: 1.1;
    padding-top: 6px;
}
.carousel-inner>.item>a>img, .carousel-inner>.item>img {
        width:20%!important;
        float:left;
        padding:20px;
        min-width: 20%!important;
    }
    .carousel-control {
        width: 0%;
        color: #000;
    }
    .glyphicon-chevron-left:before {
    content: "";
}
    .carousel-control {
    top: 35%;
    }
    @media only screen and (max-width: 600px) {
        .carousel-inner>.item>a>img, .carousel-inner>.item>img {
        width:50%!important;
        }
        .carousel-control.right {
    right: 10px;
        }
    }
.live-br-line-for-mobile{
	padding-top:40px;
	margin-top:35px;	
	background-size: auto;
    background-position: top center !important;
    background-image: url(/wp-content/themes/fptheme/int/image-2020/vertical_line-1x260-1-1.png);
    background-repeat: no-repeat;
}
.top-menu-align-css-bg{
	background:#fff;
}
.pad-right-align-75{
		padding-right:75px;
	}
#copy-trading-technology-section {
    padding-top: 100px;
    padding-bottom: 70px;
}
.normal-bullet-font-new{
	    font-family: 'Helvetica Neue LT Pro';
	  font-size: 18.5px;
  font-weight: 300;
  font-stretch: normal;
  font-style: normal;
  line-height: 1.51;
  letter-spacing: normal;
  text-align: left;
  color: #0b121c;
}
.bullet-point-sect{
	font-family: 'Helvetica Neue LT Pro';
	font-size: 23px;
  font-weight: 300;
  font-stretch: normal;
  font-style: normal;
    letter-spacing: normal;
  text-align: left;
  color: #0b121c;
}
.steps-new-Bg{
	background-color: #0b121c;
}
.fast-acc-new-font{
	font-family:'Helvetica Neue TH Pro';
	font-size: 32px;
  font-weight: 100;
  letter-spacing: normal;
  color: #fff;
   font-stretch: normal;
    font-style: normal;
	text-align: center;
}
.start-traind-font-new{
	font-family: 'Helvetica Neue LT Pro';
	font-size: 20px;
    font-weight: 300;
    font-stretch: normal;
    font-style: normal;
    line-height: 2;
    letter-spacing: 0.8px;
    text-align: center;
    color: #00bdff;
}
    #dashboard-wrap>div+div {
        margin-top: 12px;
    }

    .border.title-block-wrap {
        border: 1px solid #cdcdcd;
        padding: 0;
    }

    #dashboard-wrap {
        font-weight: 700;
        font-size: 16px;
        line-height: 1;
        position: relative;
    }

    #dashboard-wrap>div {}

    #dashboard-wrap>div:before {
        content: '';
        height: 15px;
        width: 1px;
        position: absolute;
        bottom: 0;
        left: 50%;
        border-left: 1px dashed #fff;
        z-index: 51;
        opacity: .8;
        filter: alpha(opacity=80);
    }

    #dashboard-wrap b {
        display: block;
        width: 82%;
        color: #152a4a;
        float: left;
        text-align: center;
        margin-bottom: 5px;
    }

    .main-site.hp-v17 #dashboard-wrap>div i.green-bar-nbr {
        color: #32aa43 !important;
    }

    .main-site.hp-v17 #dashboard-wrap>div i.green-bar-nbr {
        color: #32aa43 !important;
    }

    .main-site.hp-v17 #dashboard-wrap>div .green-bar {
        background-color: #32aa43 !important;
    }

    #dashboard-wrap>div .green-bar {
        background-color: #00bdff;
        float: left;
        position: relative;
        z-index: 50;
    }

    #dashboard-wrap>div .green-bar:after {
        content: '';
        width: 1px;
        height: 100%;
        display: block;
        position: absolute;
        right: -1px;
        bottom: 0;
        background-color: #fff;
    }

    .main-site.hp-v17 #dashboard-wrap>div i.red-bar-nbr {
        color: #f6344e !important;
    }

    #dashboard-wrap>div i.red-bar-nbr {
        right: 0;
        color: #424852;
        font-weight: 300;
    }

    .main-site.hp-v17 #dashboard-wrap>div .red-bar {
        background-color: #f6344e !important;
    }

    #dashboard-wrap>div .red-bar {
        background-color: #152a4a;
        float: right;
    }

    #dashboard-wrap>div:before,
    #dashboard-wrap>div:after {
        content: " ";
        display: table;
    }

    #dashboard-wrap>div:after {
        clear: both;
    }

    #dashboard-wrap>div span {
        height: 15px;
        display: block;
    }

    #dashboard-wrap>div .green-bar {
        background-color: #00bdff;
        float: left;
        position: relative;
        z-index: 50;
    }

    .main-site.hp-v17 #dashboard-wrap>div .green-bar {
        background-color: #32aa43 !important;
    }

    #dashboard-wrap>div i {
        top: auto;
        bottom: 0;

    }

    #dashboard-wrap>div i {
        height: 15px;
        line-height: 15px;
        font-style: normal;

        float: left;
        top: 0;
    }

    #dashboard-wrap>div i.red-bar-nbr {
        float: right;
        width: 9%;
    }

    #dashboard-wrap>div i:after {
        content: "%";
    }


    #dashboard-wrap>div i.green-bar-nbr {
        left: 0;
        color: #424852;
        font-weight: 300;
        width: 9%;

    }

    .twitter-timeline {}

    .fa {
        font-size: 25px;
        color: #FFFFFF;
    }

    .panel-title {
        font-size: 25px;
        color: #FFFFFF;
        font-family: 'Open Sans', sans-serif;
    }

    .panel-heading {
        background-color: #1da1f2 !important;
        ;
        color: #1da1f2 !important;
        ;
    }

    .panel {
        margin-top: 25px;
    }


    .twitter-timeline {}

    .fa {
        font-size: 25px;
        color: #FFFFFF;
    }

    .panel-title {
        font-size: 25px;
        color: #FFFFFF;
        font-family: 'Open Sans', sans-serif;
    }

    .panel-heading {
        background-color: #1da1f2 !important;
        ;
        color: #1da1f2 !important;
        ;
    }

    .panel {
        margin-top: 25px;
    }

    .mktoForm {
        width: 100% !important;
    }

    .cf_widget {
        display: none !important;
    }

    .mktoFormRow {
        width: 25% !important;
        float: left;
    }

    .mktoButtonRow {
        width: 25% !important;
        float: left;
    }

    .mktoForm label {
        display: none !important;
    }

    .mktoForm .mktoFormRow {
        clear: inherit !important;
    }

    .mktoButton {
        font-size: 16px;
        border-radius: 0px 10px 10px 10px;
        text-align: center;
        color: #ffffff;
        background-color: #00beff !important;
        border: none !important;
        font-weight: bold !important;
        padding: 13px 34px !important;
    }

    .mktoForm .mktoButtonWrap.mktoSimple .mktoButton {
        background-color: #00beff !important;
    }

    .mktoButtonWrap {
        margin-left: 0px !important;
    }

    .mktoButton {
        width: 100% !important;
        font-size: 20px !important;
    }

    .mktoForm input[type=text],
    .mktoForm input[type=url],
    .mktoForm input[type=email],
    .mktoForm input[type=tel],
    .mktoForm input[type=number],
    .mktoForm input[type=date],
    .mktoForm textarea.mktoField,
    .mktoForm select.mktoField {
        width: 250px !important;
        background: #ffffff;
        padding:  12px;
        color: #7c989f;
    }
	
	::placeholder{
		  font-size: 18px;
  font-weight: 300;
  font-stretch: normal;
  font-style: normal;
  line-height: 1.67;
  letter-spacing: normal;
  text-align: left;
  color: #7c989f!important;
	}
	.payments-title{
		font-family: 'Helvetica Neue BD Pro'!important;
		font-size: 23px;
  font-weight: bold;
  font-stretch: normal;
  font-style: normal;
  line-height: 1;
  letter-spacing: normal;
  text-align: left;
  color: #0b121c;
	}
</style>

<!-- sign up form-->
<!-- <div class="section hidden-xs hiddeninternational" style="background:#f5f7fa;padding:80px 0;">
    <div class="container-fluid">
        <div class="row">
            <div class="container">
                <div class="row">
                    <h3 class="text-center" style="font-family: 'Helvetica Neue BD Pro'!important;color:#0b121c;text-transform:none;font-size: 40px;font-weight:bold;letter-spacing: 1px;margin-bottom: 5px;">
                        Yes, keep me up to date
                    </h3>
                    <p class="text-center" style="font-family: 'Helvetica Neue LT Pro';color:#00bdff;text-transform:none;font-size:20px;font-weight:300;">
                        with free newsletter subscription & education materials
                    </p>
                    <div class="clear"></div>

                    <br>
                    <script src="//app-sn03.marketo.com/js/forms2/js/forms2.min.js"></script>
                    <form id="mktoForm_1125" onsubmit="return checkForm(this);"></form>
                    <script>
                        MktoForms2.loadForm("//app-sn03.marketo.com", "858-BYC-130", 1125);
                    </script>
                    <div class="clear"></div>
                    <p class="text-center padding-top-20" style="font-family: 'Helvetica Neue LT Pro';color:#0b121c;font-size: 16px;font-weight: 300;">By supplying your email you agree to FP Markets <u><a href="https://www.fpmarkets.com/privacy-policy/" target="_blank" style="color: #00bdff;font-weight: 900;">privacy policy</a></u> and receive future marketing materials from FP Markets. You can unsubscribe at any time.</p>


                </div>
            </div>
        </div>
    </div>
</div> -->
<hr class="hidden-xs" style="width: 86%; border-bottom: 1px solid transparent;border-image: linear-gradient(to bottom right,#eee 30%,rgba(0,189,255,.48),rgba(0,189,255,.48));border-image-slice: 1;">
<style>
.mktoForm .mktoButtonWrap.mktoSimple .mktoButton{
	  font-size: 17.5px !important;
  font-weight: 300 !important;
  font-stretch: normal;
  font-style: normal;
  line-height: 1.49;
  letter-spacing: normal;
  text-align: center;
  color: #0b121c !important;
}
input::-webkit-input-placeholder, textarea::-webkit-input-placeholder{
	font-family: 'Helvetica Neue LT Pro';
}
@media (max-width: 767px) {
    .trp-ls-shortcode-current-language {
        border:none!important;
        min-width: 35px;
    }
    
    .trp-language-switcher>div>a {
    color: #ffffff!important;
}
    .trp-language-switcher {
        padding-top: 10px!important;
    }
    .trp-ls-shortcode-language {
        overflow:auto!important;
        z-index: 999999;
        position: relative;
    }
    }
</style>

<!--
<div class="section flag-asic">
     <div class="container">
            <div class="row pip">
			<div class="hidden-xs">
				<br><br><br>
			</div>
                    <div class="col-md-5 text-right hidden-xs" style="height:455px;">
						
                    </div>
                    <div class="col-md-7 flag-asic-txt">
						<br><br>
                        <div class=" hidden-xs text-right ">
							<h2 class="lh60" style="font-size:56px;font-weight:700;">
								Corporate<br>Governance
							</h2>
						</div>
						<div class="visible-xs fp-font font40 text-center ">
							<h2 style="font-size:50px!important;font-weight:700;line-height: 46px;">
								Corporate Governance
							</h2>
						</div>
						<br><br>
						<div class="col-md-4"></div>
						<div class="hidden-xs col-md-3 text-center ">
							<p class="flag-asic-txt-p-title text-center"><b>Audited by</b></p>
							<img style="padding-top: 26px;" src="/wp-content/themes/fptheme/int/images/bdo-new.png"/>
						</div>
						<div class="hidden-xs col-md-5 text-right">
							<p class="flag-asic-txt-p-title text-right"><b>FP Markets banks with</b></p>
							<img src="/wp-content/themes/fptheme/int/images/common-bank.png"/>
						</div>
						<div class="visible-xs col-xs-6 text-center">
							<p class="flag-asic-txt-p-title text-center"><b>Audited by</b></p>
							<img style="padding: 20px;padding-top: 40px;" src="/wp-content/themes/fptheme/int/images/bdo-new.png"/>
						</div>
						<div class="visible-xs col-xs-6 text-center">
							<p class="flag-asic-txt-p-title text-center"><b>FP Markets banks with</b></p>
							<img style="padding:20px;" src="/wp-content/themes/fptheme/int/images/common-bank.png"/>
						</div>
						<div class="clear"></div>
						<div class="hidden-xs">
							<br><br><br> 
                        </div>
						<h3 class="hidden-xs text-right" style="font-size:38px!important;font-weight: 300!important;line-height: 48px;">
							Transfer your funds securely with<br>
                            <img src="/wp-content/uploads/2019/09/bullet-17.png" width="7" height="7" alt="bullet"> <span style="font-size:28px;">0% Deposit fees*</span><br>
							<img src="/wp-content/uploads/2019/09/bullet-17.png" width="7" height="7" alt="bullet"> <span style="font-size:28px;">Instant Deposits</span><br>
							<img src="/wp-content/uploads/2019/09/bullet-17.png" width="7" height="7" alt="bullet"> <span style="font-size:28px;">Fast Withdrawals</span>
						</h3>
                        <h3 class="visible-xs text-center" style="font-size:22px!important;font-weight: 500!important;line-height:26px;">
							Transfer your funds securely<br>with 0% Deposit fees*<br>
							Instant Deposits<br>
							Fast Withdrawals
						</h3>
						<br><br>
                        <div class="visible-xs"><br><br><br><br><br><br><br><br><br></div>
						
                    </div>
                    <div class="clear"></div>
				<div class="hidden-xs">
					<br><br><br><br>
				</div>
			</div>
     </div>
</div>

-->
<br><br><br>

<script>
    setTimeout(updateDiv, 4000);


    function updateDiv() {
        $("#here").load(window.location.href + " #here");
        updateDivAgain();
    }

    function updateDivAgain() {
        setTimeout(updateDiv, 4000);
    }


    $(document).ready(function() {
        console.log("Body content loading at - INT")
        $('#main-nav-oranges-XX2.).hover(function() {
                $('#navbar').addClass('blueBg');
            },
            function() {
                $('#navbar').removeClass('blueBg');
            });

        $('#navbarid').hover(function() {
                $('#navbaroranges-XX2.d').addClass('blueBg');
            },
            function() {
                $('#navbaroranges-XX2.d').removeClass('blueBg');
            });

    });
</script>

<link rel="stylesheet" href="/wp-content/themes/fptheme/int/extrastyles.css?v=2.1" type="text/css" />
<script type="text/javascript">
    // transform title of field into infield label    
    $(document).ready(function() {
        //
        setTimeout(
            function() {
                document.getElementsByName('FirstName')[0].placeholder = 'First Name*';
                document.getElementsByName('LastName')[0].placeholder = 'Last Name';
                document.getElementsByName('Email')[0].placeholder = 'Enter Email*';
            }, 3000);


    });


    // transform title of field into infield label    
    function myModalPopup() {
        //
        setTimeout(
            function() {
                $('#euModal').modal('show');
            }, 3000);

    };
</script>


<style>
.blueBg{
	    background: #00bdff;
}
    #fp-markets-app-align-section {
        padding-top: 85px;
        padding-bottom: 10px;
    }

    .mta {
        background:#00bdff;
		overflow:hidden;
    }

    .normal-white-para-font {
		    font-family: 'Helvetica Neue LT Pro';
        font-size: 18px;
        font-weight: 300;
        font-stretch: normal;
        font-style: normal;
        line-height: 1.56;
        letter-spacing: normal;
        text-align: left;
        color: #0b121c;
    }

    .semi-head-font {
		font-family: 'Helvetica Neue LT Pro';
        font-size: 20px;
        font-weight: 300;
        font-stretch: normal;
        font-style: normal;
        line-height: 1.22;
        letter-spacing: normal;
        text-align: left;
        color: #fefeff;
    }

    .h4-left-font {
		    font-family: 'Helvetica Neue BD Pro';
        font-size: 32px;
        font-weight: bold;
        font-stretch: normal;
        font-style: normal;
        line-height: 1.13;
        letter-spacing: normal;
        text-align: left;
        color: #0b121c;
        margin-bottom: 5px;
    }

    .pad-right-40 {
        padding-right: 40px
    }

    .pad-left-40 {
        padding-left: 40px
    }

    .padding-top-10 {
        padding-top: 10px;
    }

    .padding-top-20 {
        padding-top: 20px;
    }

    .padding-top-25 {
        padding-top: 25px;
    }

    .padding-top-30 {
        padding-top: 30px;
    }

    .padding-top-40 {
        padding-top: 40px;
    }

    .padding-top-25 {
        padding-top: 25px;
    }

    .padding-top-35 {
        padding-top: 35px;
    }

    .margin-left-90-align {
        margin-left: -90px;
    }

    @media only screen and (max-width: 600px) {
		.pad-right-align-75{
		    padding-right: 30px!important;
    padding-left: 30px;
	}
		.pad-align-for-mb-tp-bt{
			    padding-top: 25px;
    padding-bottom: 10px;
		}
		.top-menu-align-css-bg{
display:none;
visibility: hidden;
}
        .tog-menu-align-for-mobile {
            right: 10px;
    top: 4px;
    width: 80px;
            
        }

        .margin-left-90-align {
            margin-left: 0px !important;
        }

        .dis-fle-for-mob-align {
            display: inline-flex;
            margin: 0 auto;
        }

        .pad-right-40 {
            padding-right: 30px !important;
            padding-left: 30px;
        }

        .pad-left-40 {
            padding-left: 30px !important;
            padding-right: 30px;
        }

        .h4-left-font {
            text-align: center;
        }

        .semi-head-font {
            text-align: center;
        }

        .normal-white-para-font {
            text-align: center;
        }

        #fp-markets-app-align-section {
            padding-top: 75px;
            padding-bottom: 85px;
        }
    }
</style>
<style>
    .cust-link-a {
        color: #00bdff !important;
        cursor: pointer;
        text-decoration: underline !important;
        font-weight: 700;
    }

    #cfd-trading-provider-austra-section {
        padding-top: 95px;
		padding-bottom: 0px;
    }

    .end-divider {
        background-size: contain;
        background-position: bottom center;
        background-image: url(/wp-content/themes/fptheme/int/images/dotted-lines-icon-.png) !important;
        background-repeat: no-repeat;
    }

    #forex-trading-provider-austr-section {
        padding-top: 100px;
    padding-bottom: 95px;
    }

    .hms2 {
        background:#000000;
    }

    .normal-white-parag-font {
		    font-family: 'Helvetica Neue LT Pro';
        font-size: 18.5px;
        font-weight: 300;
        font-stretch: normal;
        font-style: normal;
        line-height: 1.51;
        letter-spacing: normal;
        text-align: left;
        color: #ffffff;
    }

    .h2-cent-white-font {
		    font-family: 'Helvetica Neue BD Pro';
        font-size: 32px;
        font-weight: bold;
        font-stretch: normal;
        font-style: normal;
        line-height: 40px;
        letter-spacing: normal;
        text-align: center;
        color: #ffffff;
    }

    #forex-broker-you-can-section {
        padding-top: 90px;
        padding-bottom: 80px;
    }

    .normal-grey-parag-font {
		font-family: 'Helvetica Neue LT Pro';
        font-size: 18.5px;
        font-weight: normal;
        font-stretch: normal;
        font-style: normal;
        line-height: 1.51;
        letter-spacing: normal;
        text-align: left;
        color: #0b121c;
    }

    .h2-left-grey-font-sen {
		font-family: 'Helvetica Neue BD Pro';
        font-size: 32px;
        font-weight: bold;
        font-stretch: normal;
        font-style: normal;
        line-height: 1;
        letter-spacing: normal;
        text-align: left;
        color: #0b121c;
    }

    .padg-left-100 {
        padding-left: 100px;
    }

    .padg-left-40 {
        padding-left: 40px;
    }

    .padg-right-40 {
        padding-right: 40px;
    }

    .hms1 {
        background: url(/wp-content/themes/fptheme/int/images/home-Rectangle-new-19-desktop.jpg);
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
    }

    .padding-top-10 {
        padding-top: 10px;
    }

    .padding-top-20 {
        padding-top: 20px;
    }

    .padding-top-25 {
        padding-top: 25px;
    }

    .padding-top-30 {
        padding-top: 30px;
    }

    .padding-top-40 {
        padding-top: 40px;
    }

    .padding-top-50 {
        padding-top: 50px;
    }

    .padding-top-60 {
        padding-top: 60px;
    }

    .padding-bottom-10 {
        padding-bottom: 10px;
    }

    .padding-bottom-15 {
        padding-bottom: 15px;
    }

    .padding-bottom-20 {
        padding-bottom: 20px;
    }

    .padding-bottom-25 {
        padding-bottom: 25px;
    }

    .padding-bottom-30 {
        padding-bottom: 30px;
    }

    .padding-bottom-35 {
        padding-bottom: 35px;
    }

    .padding-bottom-40 {
        padding-bottom: 40px;
    }

    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
        text-transform: none !important;
        letter-spacing: normal !important;
    }

    @media only screen and (max-width: 600px) {
        .section.feedsBg {
            padding-top: 65px;
            padding-bottom: 0px;
        }

        .section.fundsBg {
            padding-top: 15px;
            padding-bottom: 10px;
        }

        .col-md-6.col-xs-6.dropdown {
            padding-left: 24px !important;
        }

        .col-md-6.col-xs-6.pxmobilef.font12.text-right {
            padding-right: 25px !important;
        }

        .margin60.col-md-12.text-left.footer-intro.font12 {
            padding-left: 25px !important;
            padding-right: 25px !important;
        }

        .padding-left-right-10-mobile-align {
            padding-left: 10px;
            padding-right: 10px;
        }

        .padding-left-right-15-mobile-align {
            padding-left: 15px;
            padding-right: 20px;
        }

        #forex-broker-you-can-section {
            padding-top: 0px;
            padding-bottom: 60px;
        }

        .hms1 {
            background: none;
        }

        #forex-trading-provider-austr-section {
            padding-top: 85px;
            padding-bottom: 75px;
        }

        .hms2 {
                background:#000000;
        }

        #cfd-trading-provider-austra-section {
            padding-top: 75px;
            padding-bottom: 60px;
        }

        .h2-left-grey-font-sen {
            text-align: center;
        }

        .padg-left-100 {
            padding-left: 30px;
            padding-right: 30px;
        }

        .padg-right-40 {
            padding-right: 30px;
            padding-left: 30px;
        }

        .padg-left-40 {
            padding-left: 30px;
            padding-right: 30px;
        }

        .end-divider {
            background-size: auto;
        }

        body,
        html {
            overflow-x: hidden !important;
        }

        .padding-top-10-for-mobile {
            padding-top: 10px;
        }

        .padding-top-20-for-mobile {
            padding-top: 20px;
        }

        .padding-top-25-for-mobile {
            padding-top: 25px;
        }

        .padding-top-30-for-mobile {
            padding-top: 30px;
        }

        .padding-top-40-for-mobile {
            padding-top: 40px;
        }

        .padding-top-50-for-mobile {
            padding-top: 50px;
        }

        .padding-top-60-for-mobile {
            padding-top: 60px;
        }

        .container-fluid,
        .container {
            margin-left: 0px !important;
            margin-right: 0px !important;
            padding-left: 0px !important;
            padding-right: 0px !important;
        }
    }
</style>

<style>
    .iress-font-new-home {
       font-family: 'Helvetica Neue LT Pro';
    color: #0b121c!important;
    font-size: 13px;
    font-weight: 100;
    font-stretch: normal;
    font-style: normal;
    letter-spacing: normal;
    text-align: center;
    }

    .oranges-XX2.btns-demo {
        color: #ffffff;
        font-size: 14px;
        text-align: center;
    }

    .oranges-XX2.btns {
        font-weight: 600;
        color: #ffffff;
        font-size: 14px;
        text-align: center;       
        padding: 1px;      
    }
.oranges-XX2.btns {
border: none;
}
    .oranges-XX2.btns a {
	font-family: 'Helvetica Neue LT Pro';
    color: #0b121c;
    font-size: 13px;
    font-weight: 100;
    font-stretch: normal;
    font-style: normal;
    letter-spacing: normal;
    text-align: center;
    }

    .oranges-XX2.btns-new {
        font-weight: 600;
        color: #0b121c;
        font-size: 14px;
        background-color: #2e3642;
        text-align: center;
        border-radius: 0px 10px 10px 10px;
        padding: 3px;
        width: 95px;
        height: 29px;
    }

    .oranges-XX2.btns-new>a {
        color: #fff;
        font-size: 15px;
        font-weight: 600;
        font-stretch: normal;
        font-style: normal;
        line-height: 1.4;
        letter-spacing: 0.6px;
    }
	.oranges-XX2. .header-btns:hover {
    background: transparent;
    color: #ffffff;
}

    div.panel-heading[aria-expanded="true"]>h4.panel-title>a.oranges-XX2.h2-font:after {
		margin-top: 5px;
        font-family: 'FontAwesome';
        content: "\f107";
        float: right;
        height: 11px;
        color: #0b121c;
        font-size: 20px;
    }

    div.panel-heading[aria-expanded="false"]>h4.panel-title>a.oranges-XX2.h2-font:after {
		margin-top: 4px;
         font-family: 'FontAwesome';
        content: "\f105";
        float: right;
        height: 11px;
        color: #ffffff;
        font-size: 20px;
    }

    a.menu-hd-font.partner-btn:hover {
        color: #152a4a;
    }

    .oranges-XX2.left-button:hover {
        background: #00bdff;
    }

    .drop-posit-al>a:hover {
        color: #152a4a;
    }

    .cont-pad {
        padding-left: 0px;
        padding-right: 0px;
    }

    .sticky {
        background:#00bdff;
        padding-top: 0px !important;

    }
.semi-bg-for-drop-menu {
    background: rgba(20, 39, 67, 0.1);
    height: auto;
    background-size: cover;
    background-image: url(/wp-content/themes/fptheme/int/image-2020/ONE-website-home-page-new-2021/new-semi-oranges-XX2.menu-bg-desktop.png);
    background-repeat: round;
    width: 100vw;
    margin-left: calc((100% - 100vw) / 2);
}
    .hov-eff>a:hover {
        background: #2e3642;
    }

    .menu li a:hover {
        color: #fff;
    }
    .dropdown-h2-font {
		font-family: 'Helvetica Neue BD Pro';
        font-size: 17px;
        font-weight: bold;
        font-stretch: normal;
        font-style: normal;
        line-height: 1.76;
        letter-spacing: normal;
        text-align: left;
        color: #0b121c;
    }
	.app_menu_icon:after{
		margin-top: -26px;
		right: 90px;
	}
	.pro_menu_icon:after {
		margin-top: -27px;
	}
    .trade-both-btn-align {
        padding: 25px;
        padding-top: 50px;
    }
	.footer-links ul > li {
    padding: 5px 0 0 0;
	}

    .drop-demo-live-btn {
		font-family: 'Helvetica Neue LT Pro';
        background-color: #00bdff;
        border-radius: 0px 10px 10px 10px;
        border: none;
        font-size: 17px;
        font-weight: 300;
        font-stretch: normal;
        font-style: normal;
        letter-spacing: 0.68px;
        margin-left: -40px;
        color: #0b121c;
        padding:13px 15px 9px 15px;
    }

    .padding-top-20 {
        padding-top: 20px;
    }

    .drop-open-live-btn {
		    font-family: 'Helvetica Neue LT Pro';
        border-radius: 0px 10px 10px 10px;
        background: #0b121c;
        border: none;
        font-size: 16px;
        font-weight: 300;
        font-stretch: normal;
        font-style: normal;
        letter-spacing: 0.68px;
        text-align: center;
        color: #ffffff;
        padding:13px 15px 9px 15px;
    }

    .drop-menu-h1-font {
        font-size: 32px;
        font-weight: 600;
        font-stretch: normal;
        font-style: normal;
        line-height: 1;
        letter-spacing: normal;
        text-align: left;
        color: #ffffff;
    }

    .drop-posit-al {
        position: static;
    }

    .margin-top-for-men-itm {
        margin-top: 15px;
    }

    .open-live-buton {
        background-color:#0b121c;
        border-radius: 0px 10px 10px 10px;
        padding:13px 20px 10px 20px;
        height: 40px;
        z-index: 9;
        position: relative;
    }

    .ncsec {
        padding-top: 10px;
        padding-bottom: 0px;
    }

    .menu-hd-font {
		    font-family: 'Helvetica Neue LT Pro';
        font-size: 14px;
    font-weight: normal;
    font-stretch: normal;
    font-style: normal;
    line-height: 1.4;
    letter-spacing: 1.2px;
    text-align: right;
    color: #fff;
        text-transform: uppercase;
        padding: 17.5px;
		padding-right:30px;
    }

    .menu-ul {
        display: inline-flex;
		    margin-left: 20px;
        margin-top: 21px;
    }

    .logo-wid-align {
        width: 30%;
    }

    .head-logo {
        float: left;
        padding: 10px 15px 15px 15px;
        max-width: 90%;
    }

    .hr-line {
        background: -webkit-gradient(radial, 50% 50%, 0, 50% 50%, 600, from(rgba(255, 255, 255, 0.4)), to(rgba(0, 0, 0, -0.4)));
        display: block;
        border: none;
        margin-top: 5px;
        color: white;
        height: 1px;
    }

    .dropbox-button-font {
        margin-bottom: 0px;
        margin-top: 3px;
        font-size: 15px;
        font-weight: 600;
        font-stretch: normal;
        font-style: normal;
        text-align: center;
        color: #ffffff;
        cursor: pointer;
    }

    ul.ul-align-for-desktop>li {
        float: left;
        margin-right: 25px;
    }

    .ul-align-for-desktop {
        float: right;
    }

    .margin-top-5 {
        margin-top: 4px;
    }

    .client-button {
        padding-left: 15px;
        padding-right: 15px;
        background-color: #2e3642;
        border: none;
        border-radius: 0px 10px 10px 10px;
        font-size: 15px;
        font-weight: bold;
        font-stretch: normal;
        font-style: normal;
        line-height: 1.4;
        letter-spacing: normal;
        text-align: center;
        color: #ffffff;
        margin-top: 0px;
    }

    .font-nav {
        font-size: 15px;
        font-weight: 600;
        font-stretch: normal;
        font-style: normal;
        line-height: 1.4;
        letter-spacing: 0.6px;
        text-align: right;
        color: #ffffff;
    }

    .hdbg {
        padding-left: 0px;
        padding-right: 0px;
        z-index: 999;
        position: relative;
    }

    .oranges-XX2.left-button {
        width: 100%;
        height: 30px;
        border-radius: 10px;
        border: 1px solid rgba(255, 255, 255, 0.5);
        padding: 2px;
        font-size: 15px;
        font-weight: 600;
        font-stretch: normal;
        font-style: normal;
        text-align: center;
        color: #ffffff;
        cursor: pointer;
    }

    .mobile-visible-section {
        display: none;
    }


    @media only screen and (max-width: 600px) {
			.cstm3-stp-cntnt {
    padding-left: 35px;
}
        .remove-radius-mobile {
            border-top-right-radius: 0px !important;
            border-top-left-radius: 0px !important;
        }

        .oranges-XX2.btns a {
            font-size: 17px;
        }

        .oranges-XX2.btns {
            font-weight: 600;
            color: #ffffff;
            font-size: 14px;
            text-align: center;
            padding: 4px;
            width: auto;
            height: 38px !important;
        }

        .pad-zero-left-remove-mobile {
            padding-left: 15px !important;
        }

        .blueBg:before {
            background: none !important;
        }

        .mobile-il-oranges-XX2.{
            padding: 5px 0px;
            display: flex;
        }

        .cty-drop-li-align {
            position: absolute;
            z-index: 999999;
        }

        .pos-fix-for-mobile {
            position: fixed !important;
        }

        .mob-icon-align {
            
        }

        .margin-align-for-list {
            margin-top: -20px;
        }

        .oranges-XX2.lin-bg-for-btn-mob {
            background: url(/wp-content/themes/fptheme/int/image-2020/new-site-pages-oranges-XX2.new-group-364-mobile.jpg);
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
        }

        .padding-bottom-10 {
            padding-bottom: 10px;
        }

        .btn-for-blue-mob {
                border: none;
    border-radius: 0 10px 10px 10px !important;
    font-size: 24px !important;
    font-weight: 300 !important;
    font-stretch: normal !important;
    font-style: normal !important;
    letter-spacing: 4.75px !important;
    text-align: center !important;
    color: #ffffff !important;
    background-color: #0b121c;
    padding: 15px 60px 10px 60px;
    width: auto;
    font-family: 'Helvetica Neue LT Pro'!important;
        }

        .border-for-hd-drop {
            border: none; 
            border-right: 0px;
            border-bottom: 0px;
            border-left: 0px;
        }

        .posit-align {
            z-index: 9;
            position: relative;
        }

        #mobileLinks {
            overflow-x: hidden;
            overflow-y: auto;
            height: 650px;
        }

        .menu li {
            padding-left: 0px;
            padding-bottom: 3px;
        }

        .dropdown-h2-font {
            font-size: 21px;
        }

        .oranges-XX2.h2-font {
			font-family: 'Helvetica Neue LT Pro';
            font-size: 21px;
            font-weight: 300;
            font-stretch: normal;
            font-style: normal;
            letter-spacing: 0.68px;
            text-align: right;
            color: #ffffff;
            text-transform: uppercase;
        }

        .oranges-XX2.menu-for-mob {
            background-color: transparent !important;
            color: #ffffff !important;
            padding: 25px 0px !important;
        }

        .accordion .card-oranges-XX2.after {
            font-family: 'FontAwesome';
            content: "\f068";
            float: right;
        }

        .accordion .card-oranges-XX2.collapsed:after {
            /* symbol for "collapsed" panels */
            content: "\f067";
        }

        .client-button {
            font-size: 21px;
            width: -webkit-fill-available;
            padding: 15px;
        }

        .oranges-XX2.left-button {
            height: 40px;
            font-size: 21px;
        }

        .padding-top-10-for-mobile {
            padding-top: 10px;
        }

        .padding-top-15-for-mobile {
            padding-top: 10px;
        }

        .padding-top-20-for-mobile {
            padding-top: 10px;
        }

        .padding-top-30-for-mobile {
            padding-top: 10px;
        }

        .grid-for-mobile {
            display: grid;
            grid-template-columns: auto auto;
            padding-bottom: 15px;
            padding-top: 15px;
        }

        .mobile-visible-section {
            display: block !important;
        }

        .hdbg-mob {
            background: #00bdff;
        }

        .mob-head-logo {
            float: left;
            padding: 7px 10px 10px 15px;
            max-width: 220%;
            width: 80%;
        }

        .mobile-link-active {
            height: 54px;
            margin-right: 0.5px;
            background-image: url(/wp-content/themes/fptheme/int/images/dotted-lines-icon-.png);
            background-position: 50%;
            text-transform: uppercase;
        }

        .mob-topnav {
            
            position: relative;
        }

        .mob-nav-icon {
            margin: 1em;
			margin-right:20px;
        }

        .mob-nav-icon:after,
        .mob-nav-icon:before,
        .mob-nav-icon div {
            background: #fff;
            border-radius: 3px;
            content: '';
            display: block;
            height: 2px;
            margin: 11px 0px;
            transition: all .2s ease-in-out;
        }

        #mobileLinks {
            display: none;
        }

        #navbar {
            display: none;
        }

        .mob-menu-bg-align {
            width: 100%;
            z-index: 999;
            position: absolute;
            padding-top: 0px !important;
            padding-left: 0px;
            padding-right: 0px;
        }

        .oranges-XX2.lin-bg-for-mob {
            background: url(/wp-content/themes/fptheme/int/image-2020/new-site-pages-oranges-XX2.Rectangle-17-grid.png) center / cover, linear-gradient(90deg, #152a4a, #00bdff 100%);
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            opacity: .97;
        }

        .oranges-XX2.lins-bg-for-mob {
            background: url(/wp-content/themes/fptheme/int/image-2020/new-site-pages-oranges-XX2.Rectangle-17-grid.png) center / cover, linear-gradient(90deg, #152a4a 5%, #00bdff 100%);
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            opacity: .97;
        }

        .pad-left-right-15-for-mob {
            padding-left: 15px !important;
            padding-right: 15px !important;
        }

        .pad-left-right-remove {
            padding-left: 0px !important;
            padding-right: 0px !important;
        }

        .card-bg-for-mob {
            background: #00bdff;
            padding-top: 20px;
            padding-bottom: 25px;
        }

        .br-li-mob {
            background: url(/wp-content/themes/fptheme/int/image-2020/new-site-pages-oranges-XX2.white-right-border.png);
            background-repeat: no-repeat;
            background-size: 350px;
            background-position: top center;
        }

        .br-li-mob-sec {
            background: url(/wp-content/themes/fptheme/int/image-2020/new-site-pages-oranges-XX2.white-right-border.png);
            background-repeat: no-repeat;
            background-size: 350px;
            background-position: top center;
            padding-top: 15px;
        }

        .br-li-mob-drp-sec {
            background: url(/wp-content/themes/fptheme/int/image-2020/new-site-pages-oranges-XX2.white-right-border.png);
            background-repeat: no-repeat;
            background-size: 350px;
            background-position: top center;
            padding-top: 15px;
            margin-top: 20px;
        }

            /* {
            border: 1px solid transparent;
            border-image: linear-gradient(to left, rgba(0, 0, 0, 0.1) 0%, #fff 46%, rgba(0, 0, 0, 0.1)) 1 100%;
            border-image-slice: 1;
            border-right: none;
        } */
    }
</style>
<style>

    .oranges-XX2.g {
        height: 430px;
        background-repeat: no-repeat;
        background-size: cover;
        margin-top: -128px;
        background-position: center;
    }

    @media only screen and (max-width: 600px) {
        .oranges-XX2.g {
            height: 300px;
            background-repeat: no-repeat;
            background-size: cover;
            margin-top: 0px;
            background-position: center;
        }

    }
</style>

<style>
    @media only screen and (max-width: 600px) {
        .mobile-nav-up {
            position: fixed;
            background:#00bdff;
			top: 0px;
            width: 100%;
        }

        .mobile-nav-menu {
            top: 60px;
            height: 645px;
            position: fixed;
            overflow-y: scroll !important;
            white-space: nowrap;
            width: 100%;
            -webkit-overflow-scrolling: touch;
        }
    }

    .padding-bottom-15 {
        padding-bottom: 15px;
    }
</style>
<style>
    @media only screen and (max-width: 600px) {

        body,
        html {
            height: auto !important;
        }

        .new-mobile-bg {
            position: relative;
        }

        .new-mobile-bg::after {
            content: "";
            background: url(/wp-content/themes/fptheme/int/image-2020/ONE-website-home-page-new-2021/Rounded%20vertival%20copy%202.png);
            opacity: .97;
            top: 0;
            left: 0;
            bottom: 0;
            right: 0;
            position: absolute;
            z-index: -1;
        }

        .mobile-nav-sixseveneight {
            height: 550px !important;
        }
    }

    .add-bg-when-open-live {
        background-color: #2e3642 !important;
    }

    @media only screen and (-webkit-min-device-pixel-ratio: 2) and (max-device-width: 667px) and (min-device-width: 375px) {
        .cty-drop-li-align {
            top: 12px !important;
            left: 250px !important;
        }

        .mob-nav-icon {
            width: 35px !important;
        }
    }

    @media only screen and (max-width: 767px) and (min-width: 411px) {
        .cty-drop-li-align {
            top: 13px !important;
            left: 285px !important;
        }

        .mob-nav-icon {
            width: 35px !important;
        }
    }

    @media screen and (-webkit-device-pixel-ratio: 3) and (device-height: 640px) and (device-width: 360px) {
        .cty-drop-li-align {
            top: 12px !important;
            left: 240px !important;
        }

        .mob-nav-icon {
            width: 33px !important;
        }
    }

    @media only screen and (device-width: 320px) and (device-height: 568px) and (-webkit-device-pixel-ratio: 2) {
        .mob-nav-icon {
            width: 30px !important;
        }

        .cty-drop-li-align {
            left: 205px;
            top: 12px;
        }
    }

    @media only screen and (max-width: 600px) {
        .visibil-cls {
            visibility: visible !important;
        }
    }

    @media only screen and (min-device-width: 1024px) and (max-device-width: 1366px) and (-webkit-min-device-pixel-ratio: 2) {
        .menu-ul {
            display: inline-flex;
            margin-left: 95px !important;
            margin-top: 22px;
        }
    }

    @media only screen and (min-device-width: 810px) and (max-device-width: 1080px) and (-webkit-min-device-pixel-ratio: 2) {
        .left-margin-for-ipad {
            margin-right: 25px !important;
        }
    }

    a.white-for-hover-open:hover {
        color: #fff !important;
    }

    a.white-for-hover-open-grey:hover {
        color: #00aeef !important;
    }

    a.menu-hd-font.partner-btn:hover {
        color: #152a4a !important;
    }

    .margin-left-new-oranges-XX2.align-for-menu {
        margin-left: -30px;
    }

    .trp-language-switcher>div>a:hover {
        color: #fff !important;
    }


    .dropdown-menu li ul {
        padding-bottom: 10px !important;
    }

    .font-line-height-remove {
        font-size: 15px;
        line-height: 1.5;
    }

    .trade-2-new-oranges-XX2.align-padding {
        padding-top: 25px;
    }
	
	.oranges-XX2.btns>a.white-for-hover>div,.header-btns>a>div{
		padding-top: 7px;
	}
</style>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // console.log("ios");
        if ((navigator.userAgent.match(/iPad/i)) || (navigator.userAgent.match(/iPod/i)) || (navigator.platform === 'MacIntel' && navigator.maxTouchPoints > 0)) {
            const meta = document.createElement('meta');
            meta.name = 'viewport';
            meta.content = 'width=1400,user-scalable=0';
            const head = document.getElementsByTagName('head');
            if (head) {
                head[0].appendChild(meta);
            }
        } else {
            //console.log("not an ios");
        }
    });
</script>
<script type="text/javascript">
    function myConeoranges-XX2.) {
        var h = document.getElementById("mobileLinks");
        if (h.style.display === "block") {
            h.style.display = "none";
            document.getElementById("mobileLinks").classList.remove("mob-menu-bg-align");
            document.getElementById("main-nav").classList.remove("hdbg-mob");

        } else {
            h.style.display = "block";
            document.getElementById("mobileLinks").classList.add("mob-menu-bg-align");
            document.getElementById("main-nav").classList.add("hdbg-mob");
        }
    }
</script>

<script>
    function myFuonz(z) {
        if (z.matches) {
            $(function myFuonz(z) {
                var oranges-XX2.av = $("#header-mobile");
                var menunav = $("#mobileLinks");
                var cn = $(".cty-drop-li-align");
                var d = document.getElementById("mobileLinks");
                $(window).scroll(function() {
                    var scroll = $(window).scrollTop();
                    if ($(this).scrollTop() > 1) {
                        oranges-XX2.av.addClass("mobile-nav-up");
                        menunav.addClass("mobile-nav-menu");
                        cn.addClass("pos-fix-for-mobile");
                    } else {
                        oranges-XX2.av.removeClass("mobile-nav-up");
                        menunav.removeClass("mobile-nav-menu");
                        cn.removeClass("pos-fix-for-mobile");
                    }

                });
            });
        } else {

        }
    }

    var z = window.matchMedia("(max-width: 767px)")
    myFuonz(z)
    z.addListener(myFuonz)
</script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var iHeight = window.screen.height;
        var iWidth = window.screen.width;
        var oranges-XX2.avmob = $("#mobileLinks");
        if ((iWidth === 375 && iHeight === 667) || (iWidth === 414 && iHeight === 736)) {
            oranges-XX2.avmob.addClass("mobile-nav-sixseveneight");
        } else {

        }
    });
</script>
<script>
    function myFuons(s) {
        if (s.matches) {
            $(document).click(function(e) {
                if (($(e.target).closest("#oranges-XX2.mobile").attr("id") != "header-mobile") &&
                    $(e.target).closest("#mobileLinks").attr("id") != "mobileLinks") {
                    $('#mobileLinks').css("display", "none");
                    $('body, html').css("overflow-y", "auto");
                    $('.acc-remove-body-scroll').attr('aria-expanded', 'false').addClass('collapsed');
                    $('.accord-mobile-hide').removeClass('in');
                }
            });
        } else {

        }
    }

    var s = window.matchMedia("(max-width: 767px)")
    myFuons(s)
    s.addListener(myFuons)
</script>

<script>
    $('#hdaccordions').on('shown.bs.collapse', function() {
        //console.log("pass");
        $('body, html').css("overflow-y", "hidden");
    });
    $('#hdaccordions').on('hidden.bs.collapse', function() {
        //console.log("fail");
        $('body, html').css("overflow-y", "auto");
    });
</script>

<?php
include get_template_directory().'/int/footer-nocrypto.php';
?>
<style>
.cstm3-stp-ttle{
	color: #ffffff;
	font-family: 'Helvetica Neue BD Pro';
    margin-top: 20px;
    font-size: 28px;
    font-weight: bold;
    line-height: normal;
	    margin-bottom: 5px;
}
.cstm3-stp-cntnt{
	    font-family: 'Helvetica Neue LT Pro';
	  font-size: 18.5px;
  font-weight: 300;
  font-stretch: normal;
  font-style: normal;
  line-height: 1.22;
  letter-spacing: normal;
  text-align: center;
  color: #fff;
}
.cstm3-stp-numbr{
	font-family: 'Helvetica Neue TH Pro';
	    background: linear-gradient( #0b121c,#0b121c), linear-gradient(to bottom right,rgba(0,189,255,.48),#26CC68);
	    background-clip: padding-box, border-box;
    background-origin: padding-box, border-box;
    border: 3px solid transparent;
	    font-size: 32px;
    font-weight: 100;
    line-height: 80px;
}
.cstm3-stp-numbr:after{
	background: url(/wp-content/themes/fptheme/int/image-2020/ONE-website-home-page-new-2021/Arrow-img-desktop.png);
	        background-position: center right;
		width: 205px;
}
.h4-new-home-font {
	    font-family: 'Helvetica Neue BD Pro';
    font-size: 32px;
    font-weight: bold;
  font-stretch: normal;
  font-style: normal;
  line-height: 1.13;
  letter-spacing: 0.64px;
  text-align: center;
  color: #0b121c;
}
.nrml-new-parg-grey-font{
	    font-family: 'Helvetica Neue LT Pro';
	font-size: 17.5px;
    font-weight: 300;
    font-stretch: normal;
    font-style: normal;
    line-height: 1.61;
    letter-spacing: normal;
    text-align: left;
      color: #0b121c;
}
@media only screen and (max-width: 600px) {
	    
	.form-control-cus {
		font-family: 'Helvetica Neue BD Pro';
    width: 220px;
    margin-bottom: 0;
    font-weight: bold;
    font-size: 17.5px;
    padding: 3px 0px 5px 10px;
    box-shadow: none;
    color: #3e495c;
    height: 35px;
    margin-left: 15px;
    top: -2px;
    background-color: #fff!important;
    border-radius: 0px 10px 10px 10px;
    background: linear-gradient( white, white), linear-gradient(to bottom right,#fff -3%,rgba(0,189,255,.48),#26CC68)!important;
    background-clip: padding-box, border-box!important;
    background-origin: padding-box, border-box!important;
    border-left: 2px solid transparent!important;
    border-right: 2px solid transparent!important;
    border-bottom: 2px solid transparent!important;
    border-top: 2px solid transparent!important;
    -webkit-appearance: none!important;
}
.arr-down {
    pointer-events: none!important;
    z-index: 9;
    position: absolute;
    border: solid #01beff;
    border-width: 0 2px 2px 0;
    display: inline-block;
    padding: 4px;
    transform: rotate(45deg);
    -webkit-transform: rotate(45deg);
    float: right;
    margin-top: 8px;
    margin-left: 295px;
    cursor: pointer;
}
			.cstm3-stp-cntnt {
    padding-left: 35px;
	    text-align: left;
}
.cstm3-stp-ttle {
	text-align: left;
    margin-top: 5px;
}
.margin-top-20-for-mobile-new{
	margin-top:-20px;
}
.fast-acc-new-font{
	    line-height: 40px;
}
.btn-for-str-for-align-mobile{
	margin-top: -10px !important;
    margin-bottom: 10px !important;
}
.slider{
margin: 0px auto!important;
}
.margin-btm-align-for-mobile{
margin-bottom:0px;
}
.margin-top-align-for-lq-pro-mob{
padding-top: 55px!important;
padding-bottom: 45px!important;
}
.padding-top-20-new-for-mobile{
	padding-top:20px!important;
}
}
@media (max-width: 767px){
.slider-h {
    margin-top: 20px;
    margin-bottom: 150px;
}
}
 .menu li {
	     font-family: 'Helvetica Neue LT Pro';
         font-size: 18px;
    font-weight: 300!important;
    font-stretch: normal!important;
    font-style: normal!important;
    line-height: 1.76!important;
    letter-spacing: normal!important;
    text-align: left!important;
    color: #0b121c!important;
    }
	.menu li a {
    color:  #0b121c;
}
div.panel-heading[aria-expanded="true"]>h4.panel-title>a.oranges-XX2.h2-font {
    color: #0b121c;
}
.new-btn-bg-font-blue{
	padding-left: 15px;
    padding-right: 15px;
    background-color: #1c417a;
    font-weight: normal;
    border: none;
    padding-top: 7px;
    padding-bottom: 4px;
    font-family: 'Helvetica Neue LT Pro';
    font-size: 13px;
    font-weight: 300!important;
    font-stretch: normal;
    font-style: normal;
    line-height: 1.62;
    letter-spacing: 0.26px;
    text-align: right;
}

@media only screen and (max-width: 600px){
	.cstm-3-step-inner {
    margin-bottom: 85px;
}
.margin-tp-for-lst-cd{
    margin-top: -10px;
}
}

</style>



<!--nc slider starts from here -->


    <!-- REVOLUTION LAYERS STYLES -->
	<style>
		.tp-caption.NotGeneric-Title,
		.NotGeneric-Title {
			color: rgba(255, 255, 255, 1.00);
			font-size: 70px;
			line-height: 70px;
			font-weight: 800;
			font-style: normal;
			text-decoration: none;
			background-color: transparent;
			border-color: transparent;
			border-style: none;
			border-width: 0px;
			border-radius: 0 0 0 0px
		}

		.tp-caption.NotGeneric-SubTitle,
		.NotGeneric-SubTitle {
			color: rgba(255, 255, 255, 1.00);
			font-size: 13px;
			line-height: 20px;
			font-weight: 500;
			font-style: normal;
			text-decoration: none;
			background-color: transparent;
			border-color: transparent;
			border-style: none;
			border-width: 0px;
			border-radius: 0 0 0 0px;
			letter-spacing: 4px
		}

		.tp-caption.NotGeneric-Icon,
		.NotGeneric-Icon {
			color: rgba(255, 255, 255, 1.00);
			font-size: 30px;
			line-height: 30px;
			font-weight: 400;
			font-style: normal;
			text-decoration: none;
			background-color: rgba(0, 0, 0, 0);
			border-color: rgba(255, 255, 255, 0);
			border-style: solid;
			border-width: 0px;
			border-radius: 0px 0px 0px 0px;
			letter-spacing: 3px
		}

		.tp-caption.NotGeneric-Button,
		.NotGeneric-Button {
			color: rgba(255, 255, 255, 1.00);
			font-size: 14px;
			line-height: 14px;
			font-weight: 500;
			font-style: normal;
			text-decoration: none;
			background-color: rgba(0, 0, 0, 0);
			border-color: rgba(255, 255, 255, 0.50);
			border-style: solid;
			border-width: 1px;
			border-radius: 0px 0px 0px 0px;
			letter-spacing: 3px
		}

		.tp-caption.NotGeneric-Button:hover,
		.NotGeneric-Button:hover {
			color: rgba(255, 255, 255, 1.00);
			text-decoration: none;
			background-color: transparent;
			border-color: rgba(255, 255, 255, 1.00);
			border-style: solid;
			border-width: 1px;
			border-radius: 0px 0px 0px 0px;
			cursor: pointer
		}
        
        
img.head-logo{
	/*animation: changeBgmn 10s infinite;*/
    /*content:url("/wp-content/themes/fptheme/assets/logo-white.png");*/
}

@keyframes changeBgmn{
   0%,100%  {content:url("/wp-content/themes/fptheme/assets/logo-white.png");}
   25% {content: url("/wp-content/themes/fptheme/assets/logo-white.png");}
   50% {content: url("/wp-content/themes/fptheme/assets/logo-white.png");}
   75% {content: url("/wp-content/themes/fptheme/assets/logo-white.png");}
}        
	</style>


 <!-- SLIDER REVOLUTION SCRIPTS  -->
    <script src="/wp-content/themes/fptheme/assets/rev-slider/rev-slider-files/js/jquery.themepunch.tools.min.js"></script>
	<script src="/wp-content/themes/fptheme/assets/rev-slider/rev-slider-files/js/jquery.themepunch.revolution.min.js"></script>
	<script src="/wp-content/themes/fptheme/assets/rev-slider/rev-slider-files/js/extensions/revolution.extension.actions.min.js"></script>
	<script src="/wp-content/themes/fptheme/assets/rev-slider/rev-slider-files/js/extensions/revolution.extension.carousel.min.js"></script>
	<script src="/wp-content/themes/fptheme/assets/rev-slider/rev-slider-files/js/extensions/revolution.extension.kenburn.min.js"></script>
	<script src="/wp-content/themes/fptheme/assets/rev-slider/rev-slider-files/js/extensions/revolution.extension.layeranimation.min.js"></script>
	<script src="/wp-content/themes/fptheme/assets/rev-slider/rev-slider-files/js/extensions/revolution.extension.migration.min.js"></script>
	<script src="/wp-content/themes/fptheme/assets/rev-slider/rev-slider-files/js/extensions/revolution.extension.navigation.min.js"></script>
	<script src="/wp-content/themes/fptheme/assets/rev-slider/rev-slider-files/js/extensions/revolution.extension.parallax.min.js"></script>
	<script src="/wp-content/themes/fptheme/assets/rev-slider/rev-slider-files/js/extensions/revolution.extension.slideanims.min.js"></script>
	<script src="/wp-content/themes/fptheme/assets/rev-slider/rev-slider-files/js/extensions/revolution.extension.video.min.js"></script>
	<script>
		var tpj = jQuery;
		var revapi54;
		tpj(document).ready(function () {
			if (tpj("#rev_slider_54_1").revolution == undefined) {
				revslider_showDoubleJqueryError("#rev_slider_54_1");
			} else {
				revapi54 = tpj("#rev_slider_54_1").show().revolution({
					sliderType: "standard",
					jsFileLocation: "rev-slider-files/js/",
					sliderLayout: "fullwidth",
					dottedOverlay: "none",
					delay: 5000,
					navigation: {
							keyboardNavigation:"off",
							keyboard_direction: "horizontal",
							mouseScrollNavigation:"off",
                             mouseScrollReverse:"default",
							onHoverStop:"off",
							touch:{
								touchenabled:"on",
								touchOnDesktop:"off",
								swipe_threshold: 75,
								swipe_min_touches: 50,
								swipe_direction: "horizontal",
								drag_block_vertical: false
							}
							,
							arrows: {
								style:"uranus",
								enable:false,
								hide_onmobile:true,
								hide_under:778,
								hide_onleave:true,
								hide_delay:200,
								hide_delay_mobile:1200,
								tmp:'',
								left: {
									h_align:"left",
									v_align:"center",
									h_offset:20,
                                    v_offset:0
								},
								right: {
									h_align:"right",
									v_align:"center",
									h_offset:20,
                                    v_offset:0
								}
							}
						},
					responsiveLevels: [1240, 1240, 1240, 480],
					visibilityLevels: [1240, 1240, 1240, 1240],
					gridwidth: [1240, 1240, 1240, 480],
					gridheight: [750, 550, 860, 480],
					lazyType: "none",
					parallax: {
						type: "mouse",
						origo: "slidercenter",
						speed: 2000,
						levels: [2, 3, 4, 5, 6, 7, 12, 16, 10, 50, 47, 48, 49, 50, 51, 55],
						disable_onmobile: "on"
					},
					shadow: 0,
					stopLoop: "off",
                    stopAfterLoops: -1,
                    stopAtSlide: -1,
					shuffle: "off",
					autoHeight: "off",
					disableProgressBar: "off",
					hideThumbsOnMobile: "off",
					hideSliderAtLimit: 0,
					hideCaptionAtLimit: 0,
					hideAllCaptionAtLilmit: 0,
					debugMode: false,
					fallbacks: {
						simplifyAll: "off",
						nextSlideOnWindowFocus: "on",
						disableFocusListener: true,
					}
				});
			}
		}); /*ready*/
	</script>


<script>
$(window).scroll(function() {    
    var scroll = $(window).scrollTop();

    if (scroll >= 50) {
        $(".pclogoblack").removeClass("hidethis");
        $(".pclogowhite").addClass("hidethis");
    } else {
        $(".pclogoblack").addClass("hidethis");
        $(".pclogowhite").removeClass("hidethis");
    }
});
</script>