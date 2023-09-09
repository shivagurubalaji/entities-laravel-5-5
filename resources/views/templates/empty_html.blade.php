<!doctype html>
<html lang="en">

<head>
    
    <title>{{ $get_index_data->page_title ?? 'N/A' }} | FP Markets English</title>
    
    <base href="{{env('APP_URL', 'https://uat.fpmarkets.com/sc/ae-en/')}}/sc/ae-en/" />
    <meta charset="UTF-8"/>
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Latest compiled and minified CSS -->
        <link href="{{ asset('assets/sc/css/bootstrap.min.css') }}" rel="stylesheet">
   
        <link href="{{ asset('assets/sc/css/all.min.css') }}" rel="stylesheet">
        <script src="https://use.fontawesome.com/44325f843e.js"></script>
        <link href="{{ asset('assets/sc/css/owl.carousel.min.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/sc/css/simplyScroll.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/sc/css/style.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/sc/css/style_v3.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/sc/css/responsive.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/sc/css/new.css') }}" rel="stylesheet">
    

        <link rel="alternate" hreflang="en" href="https://www.fpmarkets.com/[[*duplicateUri]]" />
        <link rel="alternate" hreflang="en-AU" href="https://www.fpmarkets.com/[[*duplicateUri]]" />
        <link rel="alternate" hreflang="en-GB" href="https://www.fpmarkets.com/uk/[[*duplicateUri]]" />
        <link rel="alternate" hreflang="en-ZA" href="https://www.fpmarkets.com/za/[[*duplicateUri]]" />
        <link rel="alternate" hreflang="en-IE" href="https://www.fpmarkets.com/ie/[[*duplicateUri]]" />
        <link rel="alternate" hreflang="pt-BR" href="https://www.fpmarkets.com/br/[[*duplicateUri]]" />
        <link rel="alternate" hreflang="pt" href="https://www.fpmarkets.com/br/[[*duplicateUri]]" />
        <link rel="alternate" hreflang="en-CA" href="https://www.fpmarkets.com/ca/[[*duplicateUri]]" />
        <link rel="alternate" hreflang="cs-CZ" href="https://www.fpmarkets.com/cz/[[*duplicateUri]]" />
        <link rel="alternate" hreflang="cs" href="https://www.fpmarkets.com/cz/[[*duplicateUri]]" />
        <link rel="alternate" hreflang="zh-CN" href="https://www.fpmarkets.com/cn/[[*duplicateUri]]" />
        <link rel="alternate" hreflang="zh" href="https://www.fpmarkets.com/cn/[[*duplicateUri]]" />
        <link rel="alternate" hreflang="de-DE" href="https://www.fpmarkets.com/de/[[*duplicateUri]]" />
        <link rel="alternate" hreflang="de" href="https://www.fpmarkets.com/de/[[*duplicateUri]]" />
        <link rel="alternate" hreflang="es-ES" href="https://www.fpmarkets.com/es/[[*duplicateUri]]" />
        <link rel="alternate" hreflang="fr-FR" href="https://www.fpmarkets.com/fr/[[*duplicateUri]]" />
        <link rel="alternate" hreflang="fr" href="https://www.fpmarkets.com/fr/[[*duplicateUri]]" />
        <link rel="alternate" hreflang="el" href="https://www.fpmarkets.com/gr/[[*duplicateUri]]" />
        <link rel="alternate" hreflang="id-ID" href="https://www.fpmarkets.com/id/[[*duplicateUri]]" />
        <link rel="alternate" hreflang="id" href="https://www.fpmarkets.com/id/[[*duplicateUri]]" />
        <link rel="alternate" hreflang="ar" href="https://www.fpmarkets.com/ar/[[*duplicateUri]]" />
        <link rel="alternate" hreflang="it-IT" href="https://www.fpmarkets.com/it/[[*duplicateUri]]" />
        <link rel="alternate" hreflang="it" href="https://www.fpmarkets.com/it/[[*duplicateUri]]" />
        <link rel="alternate" hreflang="sw-KE" href="https://www.fpmarkets.com/ke/[[*duplicateUri]]" />
        <link rel="alternate" hreflang="sw" href="https://www.fpmarkets.com/ke/[[*duplicateUri]]" />
        <link rel="alternate" hreflang="ko-KR" href="https://www.fpmarkets.com/ko/[[*duplicateUri]]" />
        <link rel="alternate" hreflang="ko" href="https://www.fpmarkets.com/ko/[[*duplicateUri]]" />
        <link rel="alternate" hreflang="ms-MY" href="https://www.fpmarkets.com/ms/[[*duplicateUri]]" />
        <link rel="alternate" hreflang="ms" href="https://www.fpmarkets.com/ms/[[*duplicateUri]]" />
        <link rel="alternate" hreflang="pt-PT" href="https://www.fpmarkets.com/pt/[[*duplicateUri]]" />
        <link rel="alternate" hreflang="pl-PL" href="https://www.fpmarkets.com/pl/[[*duplicateUri]]" />
        <link rel="alternate" hreflang="pl" href="https://www.fpmarkets.com/pl/[[*duplicateUri]]" />
        <link rel="alternate" hreflang="th" href="https://www.fpmarkets.com/th/[[*duplicateUri]]" />
        <link rel="alternate" hreflang="vi" href="https://www.fpmarkets.com/vi/[[*duplicateUri]]" />

        <link rel="canonical" href="https://www.fpmarkets.com/{{ $get_index_data->page_url ?? 'N/A' }}" />

    
    <!-- Favicon -->
	<link rel="icon" type="image/png" href="{{ asset('assets/images/favicon-32x32.png') }}" sizes="32x32" />
	<link rel="icon" type="image/png" href="{{ asset('assets/images/favicon-16x16.png') }}" sizes="16x16" />
    
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"
    integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>


    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-TJQ6RQ');</script>
    <!-- End Google Tag Manager -->

</head>


<body>

    @include('blocks.header.header-inner-sc')

    <!--------- Main area start --------->
    <main class="main">
        <!--------- Hero area start --------->
        <section class="hero__area hero-2 lazy" loading="lazy" style="background-image: url(/assets/templates/v3/assets/img/hero-bg-2.webp)">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12 col-md-12">
                        <div class="common__content text-center">
                            <h1>
                                <span class="text-white basic__section__xl fw__boldest">
                                    {{ $get_index_data->page_title ?? 'N/A' }}
                                </span>
                            </h1>
                            
                            <div class="hidden-xs universal__header__description">
                                {{ $get_index_data->page_description ?? 'N/A' }}
                            </div>
                            
                            
                            
                            <div class="common__content__btn pt-4">
                                <div class="common-btn active ms-3 fw__boldest text__white">
                                    <a class="text__white"  href="{{ $data_from_controller['get_portalurl'] }}register">Start Trading</a>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--------- Hero area end --------->

        @php

                $htmlContent = file_get_contents(resource_path('views/sc-html-files/'.$get_index_data->page_id.'.html'));

                $replacementValues = [
                    'breadcrumb' => '<div class="container"><div class="row"><div class="page-navi"><div class="container" id="breadcrumb">'.$data_from_controller['get_breadcrumb'].'</div></div></div></div>',
                    'forexelementstable' => file_get_contents(resource_path('views/blocks/global-tables/forex-elements.html')),
                    'cfdelementstable' => file_get_contents(resource_path('views/blocks/global-tables/cfd-elements.html')),
                    'fpmbaserate' => file_get_contents(resource_path('views/blocks/global-tables/fpm-baserate.html')),
                    'metalselements' => file_get_contents(resource_path('views/blocks/global-tables/metals-elements.html')),
                    'indiceselements' => file_get_contents(resource_path('views/blocks/global-tables/indices-elements.html')),
                    'comelements1' => file_get_contents(resource_path('views/blocks/global-tables/com-elements-1.html')),
                    'comelements2' => file_get_contents(resource_path('views/blocks/global-tables/com-elements-2.html')),
                    'cryptoelements' => file_get_contents(resource_path('views/blocks/global-tables/crypto-elements.html')),
                    'bondselements' => file_get_contents(resource_path('views/blocks/global-tables/bonds-elements.html')),
                    'holidayhours' => file_get_contents(resource_path('views/blocks/global-tables/holiday-hours.html')),
                    'contractrollover' => file_get_contents(resource_path('views/blocks/global-tables/contract-rollover.html')),
                    'asx' => file_get_contents(resource_path('views/blocks/global-tables/margin-table/asx.html')),
                    'nasdaq' => file_get_contents(resource_path('views/blocks/global-tables/margin-table/nasdaq.html')),
                    'lse' => file_get_contents(resource_path('views/blocks/global-tables/margin-table/lse.html')),
                    'hke' => file_get_contents(resource_path('views/blocks/global-tables/margin-table/hke.html')),
                    'axw' => file_get_contents(resource_path('views/blocks/global-tables/margin-table/axw.html')),
                    'arc' => file_get_contents(resource_path('views/blocks/global-tables/margin-table/arc.html'))
                ];

                $pattern = '/\[\[\$(.*?)\]\]/';
                
                $htmlContent = preg_replace_callback($pattern, function ($matches) use ($replacementValues) {
                    $key = $matches[1];
                    if (isset($replacementValues[$key])) {
                        return $replacementValues[$key];
                    } else {
                        return $matches[0];
                    }
                }, $htmlContent);

                // Set 2 Replacement Values

                $replacementValues2 = [
                    'portalUrl' => $data_from_controller['get_portalurl'],
                    'getPortalURL' => $data_from_controller['get_portalurl'],
                    'swap_point' => file_get_contents(resource_path('views/blocks/global-tables/swap-points.blade.php'))
                ];

                $pattern2 = '/\[\[\!(.*?)\]\]/';
                
                $htmlContent = preg_replace_callback($pattern2, function ($matches) use ($replacementValues2) {
                    $key = $matches[1];
                    if (isset($replacementValues2[$key])) {
                        return $replacementValues2[$key];
                    } else {
                        return $matches[0];
                    }
                }, $htmlContent);


        @endphp

        {!! html_entity_decode($htmlContent) !!}



    </main>
    <!--------- Main area end --------->


    @include('blocks.footer.footer-form')

    <!--------- Footer area start --------->
    @include('blocks.footer.footer-entity-culture')
    <!--------- Footer area end --------->
    

    <script src="{{ asset('assets/sc/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/sc/js/popper.js') }}"></script>
    <script src="{{ asset('assets/sc/js/bootstrap.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous"></script> 
    <script src="{{ asset('assets/sc/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/sc/js/simplyScroll.js') }}"></script>
    <script src="{{ asset('assets/sc/js/main.js') }}"></script>

    <script>
        $("#scroller").simplyScroll();
    </script>
    <link href="{{ asset('assets/sc/css/footer-css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/sc/css/footer-css/style_v3.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/sc/css/footer-css/responsive.css') }}" rel="stylesheet">
   
    <!-- Footer Chunk Start -->

    @include('blocks.footer.footer')
</body>

</html>