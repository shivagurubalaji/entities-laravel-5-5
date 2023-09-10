
<?php
$fname_de = base64_decode($_GET['fname']);
$lname_de = base64_decode($_GET['lname']);
$email_de = base64_decode($_GET['email']);
$phone_de = base64_decode($_GET['phone']);
$country_de = base64_decode($_GET['countrycode']);

$fname=encryptData($_GET['fname']);
$lname=encryptData($_GET['lname']);
$email=encryptData($_GET['email']);
$phone=encryptData($_GET['phone']);
$country=encryptData($_GET['countrycode']);

$bta=$_GET['bta'];
$cxd=$_GET['cxd'];

$postDataDec=[
    'email'=>$email_de,
    'countrycode'=>$country_de,
    'phone'=>$phone_de,    
    'fname'=>$fname_de,
    'lname'=>$lname_de,
];

$postData=[
    'email'=>$email,
    'countrycode'=>$countrycode,
    'phone'=>$phone,    
    'fname'=>$fname,
    'lname'=>$lname,
    'bta'=>$bta,
    'cxd'=>$cxd,
];

$form_query = http_build_query($postData);
	
$redirect = $form_query;
	

function encryptData($data)
{
 // set method and passkey
 $method = 'aes-256-ctr';
 $passkey = '020793260354781498472761734370';
$ivlen = openssl_cipher_iv_length($method);
 $iv = openssl_random_pseudo_bytes($ivlen);
 $data = openssl_encrypt($data, $method, $passkey, OPENSSL_RAW_DATA, $iv);
 return base64_encode($iv.$data);
}
function decryptData($data)
{
 // set method and passkey
 $method = 'aes-256-ctr';
 $passkey = '020793260354781498472761734370';
$message = base64_decode($data, true);
 $nonceSize = openssl_cipher_iv_length($method);
 $iv = mb_substr($message, 0, $nonceSize, '8bit');
 $data = mb_substr($message, $nonceSize, null, '8bit');
 $data = openssl_decrypt($data, $method, $passkey, OPENSSL_RAW_DATA, $iv);
 return $data;
}

 ?>

<div class="section nopaddingmobile" style="padding-top:0px;">
    <div class="container-fluid hidden-xs"
        style="background-image: url(/wp-content/themes/fptheme/images/fp-thankyou-application-bg.jpg);background-size:cover;height:700px;padding:100px;">
        <div class="row">
            <div class="col-md-12 any-content">
                <div style="max-width:700px;margin:auto;background: rgba(250, 250, 250, 0.6);padding: 70px;">

                    <h2 style="color:#3e495c;" class="fp-font text-center">
                        <b>Thank you for signing up,</b><br>
                        <span class="font22" style="font-weight: 500;    letter-spacing: 1px;">please click the button
                            below to continue with the completion process.</span>
                        <br><br>
                        <div type="submit" class="customBtnThanks">
                            <a style="color:#ffffff;" href="[[!portalUrl]]register">CLICK HERE TO CONTINUE </a>
                        </div>

                    </h2>
                </div>
            </div>

        </div>
    </div>
    <div class="container-fluid visible-xs"
        style="background-image: url(/wp-content/themes/fptheme/images/fp-thankyou-application-bg.jpg);background-size:cover;padding:20px;">
        <div class="row">
            <div class="col-md-12 any-content">
                <div style="width:100%;margin:auto;background: rgba(250, 250, 250, 0.6);padding: 10px;">

                    <h2 style="color:#3e495c;" class="fp-font text-center">
                        <b>Thank you for signing up,</b><br>
                        <span class="font22" style="font-weight: 500;    letter-spacing: 1px;">please click the button
                            below to continue with the completion process.</span>
                        <br><br>
                        <div type="submit" class="customBtnThanks" style="width:300px;">
                            <a style="color:#ffffff;" href="[[!portalUrl]]register">CLICK HERE TO CONTINUE</a>
                        </div>

                    </h2>
                </div>
            </div>

        </div>
    </div>

</div>

<style>
    .customBtnThanks {
        background: #00beff;
        width: 330px;
        margin: auto;
        color: #ffffff;
        font-size: 22px;
        font-weight: 700;
        font-family: "Titillium Web", sans-serif !important;
        border: none;
        border-bottom: solid 1px #828a8d;
        border-right: solid 1px #828a8d;
        padding: 1px;
        background-clip: content-box;
        height: 50px;
        line-height: 46px;
    }
</style>




<!-- Event snippet for Conversions 2019 conversion page -->
<script>
  gtag('event', 'conversion', {'send_to': 'AW-842614185/1yO1COvJz6kBEKmL5ZED'}); 
  gtag('event', 'conversion', {'send_to': 'AW-842614185/q0FxCLOs6aYBEKmL5ZED'});
</script>


<!-- Adform Tracking Code BEGIN -->

<script type="text/javascript">

    window._adftrack = Array.isArray(window._adftrack) ? window._adftrack : (window._adftrack ? [window._adftrack] : []);

    window._adftrack.push({

        pm: 1877267,

        divider: encodeURIComponent('|'),

        pagename: encodeURIComponent('Fpm Registration Thank You')

    });

    (function () { var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = 'https://track.adform.net/serving/scripts/trackpoint/async/'; var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x); })();

        var portalurl = "[[!portalUrl]]";
        var redirecturl = "<?php echo $redirect; ?>";       
        window.location.href = portalurl+'register?'+redirecturl;
</script>



<noscript>
    <p style="margin:0;padding:0;border:0;">
        <img src="https://track.adform.net/Serving/TrackPoint/?pm=1877267&ADFPageName=Fpm%20Registration%20Thank%20You&ADFdivider=|" width="1" height="1" alt="" />
    </p>
</noscript>
<!-- Adform Tracking Code END -->

<!-- Event snippet for Lead conversion page -->
<script>
  gtag('event', 'conversion', {'send_to': 'AW-669607333/xeOcCJuH8cIBEKXLpb8C'});
</script>



<!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window,document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '1990185054454200'); 
fbq('track', 'PageView');
fbq('track', 'CompleteRegistration');
</script>
<noscript>
 <img height="1" width="1" 
src="https://www.facebook.com/tr?id=1990185054454200&ev=PageView
&noscript=1"/>
</noscript>
<!-- End Facebook Pixel Code -->   

<!-- Twitter conversion tracking event code -->
<script type="text/javascript">
  // Insert Twitter Event ID
  twq('event', 'tw-oca26-oca6b', {
  });
</script>
<!-- End Twitter conversion tracking event code -->
