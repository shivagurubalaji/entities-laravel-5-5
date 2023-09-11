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
        <section class="hero__area hero-2" style="background-image: url(/assets/templates/v3/assets/img/hero-bg-2.png)">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12 col-md-12">
                        <div class="common__content text-center">
                            <h1>
                                <span class="text-white basic__section__xl fw__boldest">
                                    {{ $get_index_data->page_title ?? 'N/A' }}
                                </span>
                            </h1>

                            <div class="common__content__btn pt-4">
                                <div class="common-btn active ms-3 fw__boldest text__white">
                                    <a class="text__white" target="_blank" href="[[!portalUrl]]">Start Trading</a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--------- Hero area end --------->
        
        <!--div class="container">
            <div class="row">
                <div class="page-navi">
                    [[BreadCrumb? &currentCrumbTpl=`currentCrumbTpl` &showUnPub=`0` &showHidden=`0` &containerTpl=`breadCrumbTpl`]]
                </div>        
            </div>
        </div-->

        @php

                $htmlContent = file_get_contents(resource_path('views/sc-html-files/'.$get_index_data->page_id.'.html'));

                $replacementValues = [
                    'breadcrumb' => '<div class="container"><div class="row"><div class="page-navi"><div class="container" id="breadcrumb">'.$data_from_controller['get_breadcrumb'].'</div></div></div></div>'
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
                    'getPortalURL' => $data_from_controller['get_portalurl']
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

        {!! $htmlContent !!}


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

    @include('blocks.footer.footer')
    
</body>

</html>