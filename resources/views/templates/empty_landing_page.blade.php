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

{!! html_entity_decode($htmlContent) !!}

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-TJQ6RQ');</script>
<!-- End Google Tag Manager -->

[[$footer]]
