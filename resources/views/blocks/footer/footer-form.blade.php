<div class="section trading-bg2"
     style="padding-bottom: 0px;background-image: url(/wp-content/themes/fptheme/images/bottom-bg-1.webp);"
     id="register-now">
    <div class="container">
        <div class="row">
            <div class="col-md-5 padding60 col-md-offset-1">
				<div class="trading_header_title_inner" style="padding-top:10px;">Start Trading <br>in Minutes</div>
				<br>
				<div class="trading_bullets_new">
					<img src="/wp-content/themes/fptheme/images/bullet-17.png" class="lazy" alt="bullet"> Access 10,000+ financial instruments<br>
					<img src="/wp-content/themes/fptheme/images/bullet-17.png" class="lazy" alt="bullet"> Auto open & close positions<br>
					<img src="/wp-content/themes/fptheme/images/bullet-17.png" class="lazy" alt="bullet"> News & economic calendar<br>
					<img src="/wp-content/themes/fptheme/images/bullet-17.png" class="lazy" alt="bullet"> Technical indicators & charts<br>
					<img src="/wp-content/themes/fptheme/images/bullet-17.png" class="lazy" alt="bullet"> Many more tools included
				</div>						
            </div>
            <div class="col-md-4 col-md-offset-1 margin60">
                <div class="registration">

                    <div class="fp-demo-signup-global">
					<div class="form_signup_global_msg_ST text-center text-danger"></div>
					<form id="form_signup_global_ST" method="post" target="_blank">
					<input id="first_name_ST" name="first_name" value="" type="text" placeholder="First name" class="ncform"/>
					<input id="last_name_ST" name="last_name" value="" type="text" placeholder="Last name" class="ncform"/>
					<input id="email_ST" name="email" value="" type="text" placeholder="Email" class="ncform"/>
					<input id="phone_ST" name="phone" value="" type="text" placeholder="Phone" class="ncform"/>
					<input id="platform_ST" name="platform" value="mt4" type="hidden"/>
					<input id="country_ST" name="country" value="{{ $data_from_controller['countryCode'] ?? '' }}" type="hidden"/>
					<input id="track_lang_ST" name="language" value="sc" type="hidden"/>
					<input id="fpm-affiliate-pcode_ST" name="fpm-affiliate-pcode" value="Website/WLK" type="hidden"/>
					<input id="fpm-affiliate-utm-source_ST" name="fpm-affiliate-utm-source" value="Website" type="hidden"/>
					<input id="currency_ST" name="currency" value="USD" type="hidden"/>
					<input id="honeypot_ST" type="hidden" name="honeypot" value=""/>
					<input id="_mkto_trk_ST" type="hidden" value="" name="_mkto_trk"/>
					<input id="track1_1_ST" name="fpm-affiliate-pcode" value="Website/WLK" type="hidden"/>
					<input id="track2_1_ST" name="fpm-affiliate-utm-source" value="Website" type="hidden"/>
					<input id="track7_1_ST" name="cxd" value="" type="hidden"/>
					<input id="track7_2_ST" name="bta" value="" type="hidden"/>
					<!--<input id="track_lang_ST" name="language" value="formEntity" type="hidden"/>-->
					<input id="track3_1_ST" name="fpm-affiliate-utm-campaign" value="" type="hidden"/>
					<input id="track4_1_ST" name="fpm-affiliate-utm-content" value="" type="hidden"/>
					<input id="track5_1_ST" name="fpm-affiliate-agt" value="" type="hidden"/>
                    <input id="track6_1_ST" name="fpm-affiliate-utm-term" value="" type="hidden"/>
                    <input id="nationality" name="nationality" value="{{ $data_from_controller['get_nationality'] ?? '' }}" type="hidden"/>
                    <input id="demo_preferred_Language" name="demo_preferred_Language" value="English" type="hidden"/>
                    <input id="landing_page" name="landing_page" value="{{ request()->fullUrl() }}" type="hidden" />
					<input id="btn_name_get_ST" type="hidden" value="GET STARTED NOW" name="btn_name_get"/>
					<div class="fp-demo-submit-global"><input style="border-radius: 0 10px 10px 10px!important;" class="customBtnRed" type="submit" value="Register Now"/></div>
					</form>
					</div>
					
					<p style="color:#ffffff!important;font-size: 15px!important;line-height: 18px!important;">
					    By supplying your email you agree to FP Markets <a class="p-policy" style="" href="privacy-policy/" target="_blank">privacy policy</a> and receive future marketing materials from FP Markets. You can unsubscribe at any time.
                    </p>
                </div>
            </div>
            <div class="clear"></div>
            <br>
			<div class="col-md-12">
			
				<hr style="border-color:#676869;">
				<div class="clearfix"></div>
				<br><br>
				
				<div class="trustpilot-widget" data-locale="en-GB" data-template-id="53aa8912dec7e10d38f59f36" data-businessunit-id="5866c4f90000ff000599f216" data-style-height="130px" data-style-width="100%" data-theme="dark" data-stars="5"> <a href="https://uk.trustpilot.com/review/fpmarkets.com" target="_blank" rel="noopener">Trustpilot</a> </div> <!-- End TrustBox widget -->
			</div>
			<div class="clearfix"></div>	
			<br><br>
        </div>
    </div>
</div>
