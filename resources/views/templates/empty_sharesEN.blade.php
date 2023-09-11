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
        <section class="hero__area hero-2" style="background-image: url(/assets/sc/images/hero-bg-2.webp)">
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
                                    <a target="_blank" href="{{ $data_from_controller['get_portalurl'] }}register">Start Trading</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--------- Hero area end --------->
        
        <div class="container">
            <div class="row">
                <div class="page-navi">
                    <div class="container" id="breadcrumb">
                        {!! $data_from_controller['get_breadcrumb'] ?? 'N/A' !!}
                    </div>
                </div>        
            </div>
        </div>

            @php

                $string = $get_content->content;
                $pattern = '/\/(\d+)\.html/';
    
                $value = 0;
                
                preg_match($pattern, $string, $matches);
                
                if (!empty($matches[1])) {
                    $value = $matches[1];
                    // $value will contain the extracted value (313 in this case)
                } else {
                    // No match found
                }


                $htmlContent = file_get_contents(resource_path('views/sc-html-files/'.$value.'.html'));

                $replacementValues = [
                    'faqshares' => file_get_contents(resource_path('views/blocks/chunks/faqshares.html')),
                    'shares-search-box' => file_get_contents(resource_path('views/blocks/chunks/searchbox-shares.html')),
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


            @endphp

        
            {!! $htmlContent !!}

            <!-- News Content -->

            <!-- global footer -->
            <!--------- Why trade ShareName area start --------->
            <section class="basic__section__norm bg__dark">
                <div class="container">
                    <div class="text__align__center pb__50">
                        <span class="basic__section__title text__white fw__boldest">Why Trade
                            {{ $get_index_data->page_title ?? 'N/A' }} with FP
                            Markets?</span>
                        <span class="basic__section__subtitle text__white display__block">An
                            Australian-regulated
                            <span class="mob__display__block">forex & CFD broker</span>
                        </span>
                    </div>
                    <div class="row align__items__center">
                        <div class="col-md-4 text__align__center pb__20">
                            <div class="why__trade__img__block">
                                <img src="/assets/templates/v3/assets/img/vso-6.png"
                                    class="why__trade__img lazy" alt="go long or short">
                            </div>
                            <span class="basic__section__paragraph fw__bold text__white">Go Long or Short</span>
                            <p class="basic__section__paragraph fw__light text__white">
                                Increase your ability
                                to profit in <br>
                                all
                                market conditions <br>
                                Leverage options up to 20:1
                            </p>
            
                        </div>
                        <div class="col-md-4 text__align__center pb__20">
                            <div class="why__trade__img__block">
                                <img src="/assets/templates/v3/assets/img/vso-5.png"
                                    class="why__trade__img lazy" alt="direct market access">
                            </div>
                            <span class="basic__section__paragraph fw__bold text__white">Direct Market Access (DMA)
                                Execution </span>
                            <p class="basic__section__paragraph fw__light text__white"> Real-time, transparent
                                share prices <br>
                                Control, Functionality and deep liquidity <br>
                                Full Market depth & see your orders in the queue
                            </p>
                        </div>
                        <div class="col-md-4 text__align__center pb__20">
                            <div class="why__trade__img__block">
                                <img src="/assets/templates/v3/assets/img/vso-3.png"
                                    class="why__trade__img lazy" alt="advanced platforms">
                            </div>
                            <span class="basic__section__paragraph fw__bold text__white">
                                Advanced Platforms
                                <br>
                                & Technology
                            </span>
                            <p class="basic__section__paragraph fw__light text__white">
                                MT4, MT5, Webtrader & Iress with
                                <br>
                                superior client portal
                            </p>
                        </div>
                    </div>
                    <div class="row align-items-center">
                        <div class="col-md-4 text__align__center pb__20">
                            <div class="why__trade__img__block">
                                <img src="/assets/templates/v3/assets/img/vso-2.png"
                                    class="why__trade__img lazy" alt="24/5 Multilingual customer support">
                            </div>
                            <span class="basic__section__paragraph fw__bold text__white">24/5 Multilingual
                                <br>
                                Customer Support
                            </span>
                            <p class="basic__section__paragraph fw__light text__white">Award winning support & <br>
                                personal account managers
                            </p>
                        </div>
                        <div class="col-md-4 text__align__center pb__20">
                            <div class="why__trade__img__block">
                                <img src="/assets/templates/v3/assets/img/vso-1.png"
                                    class="why__trade__img lazy" alt="global exposure">
                            </div>
                            <span class="basic__section__paragraph fw__bold text__white">Global Exposure </span>
                            <p class="basic__section__paragraph fw__light text__white">
                                Low margins and competitive commission <br>
                                +10,000 products on global stocks <br>
                                across 4 continents
                            </p>
                        </div>
                        <div class="col-md-4 text__align__center pb__20">
                            <div class="why__trade__img__block">
                                <img src="/assets/templates/v3/assets/img/vso-4.png"
                                    class="why__trade__img lazy" alt="earn dividends">
                            </div>
                            <span class="basic__section__paragraph fw__bold text__white">
                                Earn Dividends
                            </span>
                            <p class="basic__section__paragraph fw__light text__white">
                                On long positions <br>
                                No ownership of physical <br>
                                shares necessary
                            </p>
                        </div>
                    </div>
                </div>
            </section>
            <!--------- Why trade ShareName area end --------->


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
    <script src="/assets/templates/v3/assets/js/main.js"></script>

    @include('blocks.footer.footer')
</body>

</html>