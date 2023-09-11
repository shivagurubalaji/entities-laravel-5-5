<!doctype html>
<html lang="en">

<head>
    
    @include('blocks.header.global-header')

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
    
    <script src="/assets/templates/v3/assets/js/jquery.min.js"></script>
    <script src="/assets/templates/v3/assets/js/popper.js"></script>
    <script src="/assets/templates/v3/assets/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous"></script> 
    <script src="/assets/templates/v3/assets/js/owl.carousel.min.js"></script>
    <script src="/assets/templates/v3/assets/js/simplyScroll.js"></script>
    <script src="/assets/templates/v3/assets/js/main.js?v=2.6"></script>

    <link href="/assets/templates/v3/assets/css/style.css?v=3.1.4" rel="stylesheet">
    <link href="/assets/templates/v3/assets/css/style_v3.css?v=2.4" rel="stylesheet">
    <link href="/assets/templates/v3/assets/css/responsive.css?v=1.6" rel="stylesheet">
   
    <!-- Footer Chunk Start -->

    @include('blocks.footer.footer')
</body>

</html>