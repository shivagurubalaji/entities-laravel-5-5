<!doctype html>
<html lang="en">
<head>

    @include('blocks.header.global-header')

</head>

<body>

<!-- parent check -->



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
                                    <a target="_blank" href="[[!portalUrl]]register">Start Trading</a>
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
                <div class="page-navi p__10">
                    <div class="container" id="breadcrumb">
                        {!! $data_from_controller['get_breadcrumb'] !!}
                    </div>
                </div>        
            </div>
        </div>


        <div class="container">
            <div class="row basic__section__paragraph p__10 text__dark ln-height-1-4">
                {!! $get_content->content ?? 'N/A'!!}
            </div>
        </div>


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

    <script>$(document).ready(function(){$("img").click(function(){this.requestFullscreen()})});</script>

    @include('blocks.footer.footer')

</body>
<style>
    ul {
    list-style: disc;
}
</style>

</html>