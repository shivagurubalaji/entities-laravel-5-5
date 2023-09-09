 /* SIGN UP FORM VALIDATION  */
 
var signupFormGlobal = "#form_signup_global";
var $ = jQuery.noConflict();
$(signupFormGlobal).validate({
    ignore: [],
    rules: {
        first_name: {
            required: true,
            minlength: 3,
        },
        last_name: {
            required: true,
        },
        email: {
            required: true,
            email: true
        },
        phone: {
            required: true,
        },
        country: {
            required: true,
        }
    },
    onfocusout: function(element) {
        $(element).valid();
    },
    errorClass: 'error',
    validClass: 'valid',
    errorElement: 'span',
    highlight: function(element, errorClass, validClass) {
        $(element).addClass(errorClass).removeClass(validClass);
    },
    unhighlight: function(element, errorClass, validClass) {
        $(element).removeClass(errorClass).addClass(validClass);
    },
    messages: {
        first_name: {
            required: "First name is required.",
        },
        last_name: {
            required: "Last name is required.",
        },
        email: {
            required: "Email is required.",
            email: "Please enter a valid email address",
        },
        phone: {
            required: "Phone is required."
        },
        country: {
            required: "Country is required."
        },
    },
    errorPlacement: function(error, element) {
        if ($(element).is("input")) {
           //error.insertAfter($(element));
        } else if ($(element).is("select")) {
            //error.insertAfter($(element).closest(".form-msg"));
        } else {
            //error.insertAfter(element)
        }
    },
    submitHandler: function(form) {

		var fpphone = $('#form_signup_global #phone').val();

		if( fpphone.match(/^[0-9]*$/) ){
			$('#form_signup_global #phone').removeClass('error').addClass('valid');
			$('.fp-demo-signup-global .form_signup_global_msg').html("");
		}
		else{
			$('#form_signup_global #phone').removeClass('valid').addClass('error');
			$('.fp-demo-signup-global .form_signup_global_msg').html("Please enter a valid phone number; only numeric value is expected.");
			return false;
		}
		
        $('.fp-demo-signup-global .form_signup_global_msg').html("");
        /* grecaptcha.execute();
        console.log("The captcha has been already solved"); */
        var honeypot = $('#form_signup_global #honeypot').val();
        if (honeypot != "") {
            alert('value is - >' + honeypot);
            return false;
        } else {
            function readCookie(name) {
                var cookiename = name + "=";
                var ca = document.cookie.split(';');
                for (var i = 0; i < ca.length; i++) {
                    var c = ca[i];
                    while (c.charAt(0) == ' ') c = c.substring(1, c.length);
                    if (c.indexOf(cookiename) == 0) return c.substring(cookiename.length, c.length);
                }
                return null;
            }
            var test_mydata = document.getElementById('_mkto_trk').value = readCookie('_mkto_trk');
            var chk_lang = GetURLParameter('language');
										   
            
            var fpm_affiliate_pcode = "fpm-affiliate-pcode";
            var fpm_affiliate_utm_source = "fpm-affiliate-utm-source";
            var fpm_affiliate_utm_campaign = "fpm-affiliate-utm-campaign";
            var fpm_affiliate_utm_content = "fpm-affiliate-utm-content";
            var fpm_affiliate_agt = "fpm-affiliate-agt";
            var bta_chk = $("#form_signup_global #track7_2").val();
            var bta_fianl_val = "";
            if (bta_chk === "") {
                bta_fianl_val = "0";
            } else {
                bta_fianl_val = $("#form_signup_global #track7_2").val();
            }
            var lang_chk = $("#form_signup_global #track_lang").val();
            var lang_fianl_val = "";
   
            if (lang_chk === "") {
	
										  
	 
                lang_fianl_val = "en";
															
	 
							   
            } else {
	
                lang_fianl_val = $("#form_signup_global #track_lang").val();
            }

            console.log("safdasfsd");
            console.log(lang_fianl_val);


			
            var request = $.ajax({
                url: "<?php echo $portalurl; ?>api/demoRegister",
                type: "POST",
                data: {
                    first_name: $("#form_signup_global #first_name").val().toString(),
                    last_name: $("#form_signup_global #last_name").val().toString(),
                    email: $("#form_signup_global #email").val().toString(),
                    phone: $("#form_signup_global #phone").val().toString(),
                    platform: $("#form_signup_global #platform").val().toString(),
                    country: $("#form_signup_global #country").val().toString(),
                    currency: $("#form_signup_global #currency").val().toString(),
                    "fpm-affiliate-pcode": $("#form_signup_global #track1_1").val().toString(),
                    "fpm-affiliate-utm-source": $("#form_signup_global #track2_1").val().toString(),
                    "fpm-affiliate-utm-campaign": $("#form_signup_global #track3_1").val().toString(),
                    "fpm-affiliate-utm-content": $("#form_signup_global #track4_1").val().toString(),
                    "fpm-affiliate-agt": $("#form_signup_global #track5_1").val().toString(),
                    "_mkto_trk": $("#form_signup_global #_mkto_trk").val().toString(),
                    "cxd": $("#form_signup_global #track7_1").val().toString(),
                    "bta": bta_fianl_val.toString(),
                    "language": lang_fianl_val.toString(),
                },
                dataType: 'json',
                beforeSend: function( xhr ) {
                    $('#form_signup_global .fp-demo-submit-global input[type=submit]').val('Processing..');
                    $('#form_signup_global .fp-demo-submit-global input[type=submit]').attr('disabled', 'disabled');
                },
                success: function(msg) {
                    $('.fp-demo-signup-global .form_signup_global_msg').html("");

                    if (msg.success == true) {
                        var first_name = encodeURIComponent($("#first_name").val().toString()),
                        last_name = encodeURIComponent($("#last_name").val().toString()),
                        email = encodeURIComponent($("#email").val().toString()),
                        phone = encodeURIComponent($("#phone").val().toString()),
                        country = encodeURIComponent($("#country").val().toString());
						var fpURLstructure = 'fname='+first_name+'&lname='+last_name+'&email='+email+'&phone='+phone+'&actype=1&countrycode='+country;
                        
                        //getting current URL segments
                        var pathName= window.location.pathname;
                        var url_segment2 = pathName.split( '/' );
                        // console.log('url-segment::'+segments2[1]);

                        var redirect_lang_short_code = "";
                        var lang_array =['en',    'ar','br','ca','cz','cn',  'de','es','fr','gr','id',    'ie','it','ke','ko','ms',   'pt','pl','ru','th','uk',   'vi','za','zh','zh_tw'];    

                        // Check if a value exists in the fruits array
                        if(lang_array.indexOf(url_segment2[1]) !== -1){
                            redirect_lang_short_code = "/" + url_segment2[1]; 
                        } else{
                            // console.log("Value does not exists!")
                            // console.log(url_segment2[1])
                        }

                        setTimeout(function() {
                            if (typeof(chk_lang) != "undefined" && chk_lang !== null) {

                                if (chk_lang == "es") {
                                    window.location = "/thank-you-application/?"+fpURLstructure;
                                } else if (chk_lang == "aus") {
                                    window.location = "/thank-you-application/?"+fpURLstructure;
                                } else if (chk_lang == "en") {
                                    window.location = "/thank-you-application/?"+fpURLstructure;
                                }
                            } else {
																	   
		 
                                window.location = redirect_lang_short_code + "/thank-you-application/?"+fpURLstructure;
																									
																											   
		 
																											   
                            }
                        })
                    } else {
                        $('.fp-demo-signup-global .form_signup_global_msg').html("This email address is already registered. Please enter a new email address.");
                        $('#form_signup_global .fp-demo-submit-global input[type=submit]').val('Register Now');
                        $('#form_signup_global .fp-demo-submit-global input[type=submit]').removeAttr('disabled');
                    }
                },
                error: function(msg, error) {
                    $('.fp-demo-signup-global .form_signup_global_msg').html("Please enter a valid phone number.");
                    $('#form_signup_global .fp-demo-submit-global input[type=submit]').val('Register Now');
                    $('#form_signup_global .fp-demo-submit-global input[type=submit]').removeAttr('disabled');
                        }
            }).done(function( data ) {
                /* $('#form_signup_global .fp-demo-submit-global input[type=submit]').val('Register Now');
                $('#form_signup_global .fp-demo-submit-global input[type=submit]').removeAttr('disabled'); */
            });
            return false;
        }
    }
});
$(signupFormGlobal + " button[type='submit']").click(function() {
    setTimeout(function() {
        $("input.error").first().focus();
    }, 50)
});
/* EO SIGN UP FORM VALIDATION */

/* SIGN UP FORM 2 VALIDATION - START TRADING IN MINUTES */
var signupFormGlobal_ST = "#form_signup_global_ST";
var $ = jQuery.noConflict();
$(signupFormGlobal_ST).validate({
    ignore: [],
    rules: {
        first_name: {
            required: true,
            minlength: 3,
        },
        last_name: {
            required: true,
        },
        email: {
            required: true,
            email: true
        },
        phone: {
            required: true,
        },
        country: {
            required: true,
        }
    },
    onfocusout: function(element) {
        $(element).valid();
    },
    errorClass: 'error',
    validClass: 'valid',
    errorElement: 'span',
    highlight: function(element, errorClass, validClass) {
        $(element).addClass(errorClass).removeClass(validClass);
    },
    unhighlight: function(element, errorClass, validClass) {
        $(element).removeClass(errorClass).addClass(validClass);
    },
    messages: {
        first_name: {
            required: "First name is required.",
        },
        last_name: {
            required: "Last name is required.",
        },
        email: {
            required: "Email is required.",
            email: "Please enter a valid email address",
        },
        phone: {
            required: "Phone is required."
        },
        country: {
            required: "Country is required."
        },
    },
    errorPlacement: function(error, element) {
        if ($(element).is("input")) {
           //error.insertAfter($(element));
        } else if ($(element).is("select")) {
            //error.insertAfter($(element).closest(".form-msg"));
        } else {
            //error.insertAfter(element)
        }
    },
    submitHandler: function(form) {
		var fpphone_ST = $('#form_signup_global_ST #phone_ST').val();

		/*if( fpphone_ST.match(/^[0-9]*$/) ){
			$('#form_signup_global_ST #phone_ST').removeClass('error').addClass('valid');
			$('.fp-demo-signup-global .form_signup_global_msg_ST').html("");
		}
		else{
			$('#form_signup_global_ST #phone_ST').removeClass('valid').addClass('error');
			$('.fp-demo-signup-global .form_signup_global_msg_ST').html("Please enter a valid phone number; only numeric value is expected.");
			return false;
		}*/
		
        $('.fp-demo-signup-global .form_signup_global_msg_ST').html("");
        /* grecaptcha.execute();
        console.log("The captcha has been already solved"); */
        var honeypot = $('#form_signup_global_ST #honeypot_ST').val();
        if (honeypot != "") {
            alert('value is - >' + honeypot);
            return false;
        } else {
            function readCookie(name) {
                var cookiename = name + "=";
                var ca = document.cookie.split(';');
                for (var i = 0; i < ca.length; i++) {
                    var c = ca[i];
                    while (c.charAt(0) == ' ') c = c.substring(1, c.length);
                    if (c.indexOf(cookiename) == 0) return c.substring(cookiename.length, c.length);
                }
                return null;
            }
            var test_mydata = document.getElementById('_mkto_trk_ST').value = readCookie('_mkto_trk');
            var chk_lang = GetURLParameter('language');
										   
            
            var fpm_affiliate_pcode = "fpm-affiliate-pcode";
            var fpm_affiliate_utm_source = "fpm-affiliate-utm-source";
            var fpm_affiliate_utm_campaign = "fpm-affiliate-utm-campaign";
            var fpm_affiliate_utm_content = "fpm-affiliate-utm-content";
            var fpm_affiliate_agt = "fpm-affiliate-agt";
            var bta_chk = $("#form_signup_global_ST #track7_2_ST").val();
            var bta_fianl_val = "";
            if (bta_chk === "") {
                bta_fianl_val = "0";
            } else {
                bta_fianl_val = $("#form_signup_global_ST #track7_2_ST").val();
            }
            var lang_chk = $("#form_signup_global_ST #track_lang_ST").val();
            var lang_fianl_val = "";
   
            if (lang_chk === "") {
	
										  
	 
                lang_fianl_val = "int-EN";
															
	 
							   
            } else {
	
                lang_fianl_val = $("#form_signup_global_ST #track_lang_ST").val();
            }
			//alert('submit');
			//alert(lang_fianl_val);
			
            var request = $.ajax({
                url: "<?php echo $portalurl; ?>api/demoRegister",
                type: "POST",
                data: {
                    first_name: $("#form_signup_global_ST #first_name_ST").val().toString(),
                    last_name: $("#form_signup_global_ST #last_name_ST").val().toString(),
                    email: $("#form_signup_global_ST #email_ST").val().toString(),
                    phone: $("#form_signup_global_ST #phone_ST").val().toString(),
                    platform: $("#form_signup_global_ST #platform_ST").val().toString(),
                    country: $("#form_signup_global_ST #country_ST").val().toString(),
                    currency: $("#form_signup_global_ST #currency_ST").val().toString(),
                    "fpm-affiliate-pcode": $("#form_signup_global_ST #track1_1_ST").val().toString(),
                    "fpm-affiliate-utm-source": $("#form_signup_global_ST #track2_1_ST").val().toString(),
                    "fpm-affiliate-utm-campaign": $("#form_signup_global_ST #track3_1_ST").val().toString(),
                    "fpm-affiliate-utm-content": $("#form_signup_global_ST #track4_1_ST").val().toString(),
                    "fpm-affiliate-agt": $("#form_signup_global_ST #track5_1_ST").val().toString(),
                    "_mkto_trk": $("#form_signup_global_ST #_mkto_trk_ST").val().toString(),
                    "cxd": $("#form_signup_global_ST #track7_1_ST").val().toString(),
                    "bta": bta_fianl_val.toString(),
                    "language": lang_fianl_val.toString(),
                },
                dataType: 'json',
                beforeSend: function( xhr ) {
                    $('#form_signup_global_ST .fp-demo-submit-global input[type=submit]').val('Processing..');
                    $('#form_signup_global_ST .fp-demo-submit-global input[type=submit]').attr('disabled', 'disabled');
                },
                success: function(msg) {
                    $('.fp-demo-signup-global .form_signup_global_msg_ST').html("");

                    if (msg.success == true) {
                        var first_name = encodeURIComponent($("#first_name_ST").val().toString()),
                        last_name = encodeURIComponent($("#last_name_ST").val().toString()),
                        email = encodeURIComponent($("#email_ST").val().toString()),
                        phone = encodeURIComponent($("#phone_ST").val().toString()),
                        country = encodeURIComponent($("#country_ST").val().toString());
						var fpURLstructure = 'fname='+first_name+'&lname='+last_name+'&email='+email+'&phone='+phone+'&actype=1&countrycode='+country;
                        
                        //getting current URL segments
                        var pathName= window.location.pathname;
                        var url_segment2 = pathName.split( '/' );
                        // console.log('url-segment::'+segments2[1]);

                        var redirect_lang_short_code = "";
                        var lang_array =['en',    'ar','br','ca','cz','cn',  'de','es','fr','gr','id',    'ie','it','ke','ko','ms',   'pt','pl','ru','th','uk',   'vi','za','zh','zh_tw'];    

                        // Check if a value exists in the fruits array
                        if(lang_array.indexOf(url_segment2[1]) !== -1){
                            redirect_lang_short_code = "/" + url_segment2[1]; 
                        } else{
                            // console.log("Value does not exists!")
                            // console.log(url_segment2[1])
                        }

                        setTimeout(function() {
                            if (typeof(chk_lang) != "undefined" && chk_lang !== null) {

                                if (chk_lang == "es") {
                                    window.location = "/thank-you-application/?"+fpURLstructure;
                                } else if (chk_lang == "aus") {
                                    window.location = "/thank-you-application/?"+fpURLstructure;
                                } else if (chk_lang == "en") {
                                    window.location = "/thank-you-application/?"+fpURLstructure;
                                }
                            } else {
											   
		 
																								
																									
																											   
		 
                                window.location = redirect_lang_short_code + "/thank-you-application/?"+fpURLstructure;
                            }
                        })
                    } else {
                        $('.fp-demo-signup-global .form_signup_global_msg_ST').html("This email address is already registered. Please enter a new email address.");
                        $('#form_signup_global_ST .fp-demo-submit-global input[type=submit]').val('Register Now');
                        $('#form_signup_global_ST .fp-demo-submit-global input[type=submit]').removeAttr('disabled');
                    }
                },
                error: function(msg, error) {
                    $('.fp-demo-signup-global .form_signup_global_msg_ST').html("Please enter a valid phone number");
                    $('#form_signup_global_ST .fp-demo-submit-global input[type=submit]').val('Register Now');
                    $('#form_signup_global_ST .fp-demo-submit-global input[type=submit]').removeAttr('disabled');
                        }
            }).done(function( data ) {
                /* $('#form_signup_global_ST .fp-demo-submit-global input[type=submit]').val('Register Now');
                $('#form_signup_global_ST .fp-demo-submit-global input[type=submit]').removeAttr('disabled'); */
            });
            return false;
        }
    }
});
$(signupFormGlobal_ST + " button[type='submit']").click(function() {
    setTimeout(function() {
        $("input.error").first().focus();
    }, 50)
});
/* EO SIGN UP FORM 2 VALIDATION - START TRADING IN MINUTES  */

function parseQueryString() {
    var parsedParameters = {},
        uriParameters = location.search.substr(1).split('&');
    for (var i = 0; i < uriParameters.length; i++) {
        var parameter = uriParameters[i].split('=');
        var value = typeof(parameter[1]) !== 'undefined' ? parameter[1] : '';
        parsedParameters[parameter[0]] = decodeURIComponent(value);
    }
    return parsedParameters;
}

function getCookie(cname) {
   var name = cname + "=";
   var ca = document.cookie.split(';');
   for(var i = 0; i < ca.length; i++) {
       var c = ca[i];
       while (c.charAt(0) == ' ') {
           c = c.substring(1);
       }
       if (c.indexOf(name) == 0) {
           return c.substring(name.length, c.length);
       }
   }
   return "";
}

function convertAffiliateQueryStringToCookies() {
    var params = parseQueryString();
    for (var i in params) {
        if (params.hasOwnProperty(i) && (i.match(/fpm-affiliate/) || i.match(/bta/) || i.match(/cxd/) || i.match(/affiliate-utm-content/) || i.match(/language/))) {
            if (i.match(/bta/) || i.match(/cxd/)) {
				if( getCookie('fpm-affiliate-' + i) === "" ){
					document.cookie = 'fpm-affiliate-' + i + '=' + params[i] + '; path=/; domain=.' + window.location.host.split('.').slice(1).join('.')+';max-age=7776000';
					document.cookie = i + '=' + params[i] + '; path=/; domain=.' + window.location.host.split('.').slice(1).join('.')+';max-age=7776000';
				}
            } else
				if( getCookie(i) === "" ){
					document.cookie = i + '=' + params[i] + '; path=/; domain=.' + window.location.host.split('.').slice(1).join('.')+';max-age=7776000';
				}
        }
    }
}

jQuery(document).ready(function() {
    convertAffiliateQueryStringToCookies();
    //var track1 = GetURLParameter('fpm-affiliate-pcode');
    var track1 = typeof(GetURLParameter('fpm-affiliate-pcode')) !== 'undefined' ? GetURLParameter('fpm-affiliate-pcode') : '';
	track1 = getCookie('fpm-affiliate-pcode') !== "" ? getCookie('fpm-affiliate-pcode'): track1;
	
    //var track2 = GetURLParameter('fpm-affiliate-utm-source');
    var track2 = typeof(GetURLParameter('fpm-affiliate-utm-source')) !== 'undefined' ? GetURLParameter('fpm-affiliate-utm-source') : 'Website';
	track2 = getCookie('fpm-affiliate-utm-source') !== "" ? getCookie('fpm-affiliate-utm-source'): track2;
	
    var track3 = GetURLParameter('fpm-affiliate-utm-campaign');
	track3 = getCookie('fpm-affiliate-utm-campaign') !== "" ? getCookie('fpm-affiliate-utm-campaign'): track3;
	
    var track4 = GetURLParameter('fpm-affiliate-utm-content');
	track4 = getCookie('fpm-affiliate-utm-content') !== "" ? getCookie('fpm-affiliate-utm-content'): track4;
	
    var track5 = GetURLParameter('fpm-affiliate-agt');
	track5 = getCookie('fpm-affiliate-agt') !== "" ? getCookie('fpm-affiliate-agt'): track5;
	
    var track7_1 = GetURLParameter('cxd');
	track7_1 = getCookie('fpm-affiliate-cxd') !== "" ? getCookie('fpm-affiliate-cxd'): track7_1;
	
    var track7_2 = GetURLParameter('bta');
	track7_2 = getCookie('fpm-affiliate-bta') !== "" ? getCookie('fpm-affiliate-bta'): track7_2;
	
    var track8_1 = GetURLParameter('language');
	track8_1 = getCookie('language') !== "" ? getCookie('language'): track8_1;
	
    
										 

	$("#form_signup_global #track1_1").val(track1);
    $("#form_signup_global #track2_1").val(track2);
    $("#form_signup_global #track3_1").val(track3);
    $("#form_signup_global #track4_1").val(track4);
    $("#form_signup_global #track5_1").val(track5);
    $("#form_signup_global #track7_1").val(track7_1);
    $("#form_signup_global #track7_2").val(track7_2);
    $("#form_signup_global #track_lang").val(track8_1);
	
	$("#form_signup_global_ST #track1_1_ST").val(track1);
    $("#form_signup_global_ST #track2_1_ST").val(track2);
    $("#form_signup_global_ST #track3_1_ST").val(track3);
    $("#form_signup_global_ST #track4_1_ST").val(track4);
    $("#form_signup_global_ST #track5_1_ST").val(track5);
    $("#form_signup_global_ST #track7_1_ST").val(track7_1);
    $("#form_signup_global_ST #track7_2_ST").val(track7_2);
    $("#form_signup_global_ST #track_lang_ST").val(track8_1);
});
 

// New script start here
jQuery(document).ready(function($){
$("#form_signup_global #phone").on('keypress blur change keyup', function(e){
	var keyCode = (e.which)?e.which:e.keyCode
	return !(keyCode>31 && (keyCode<48 || keyCode>57)); 
});

$("#form_signup_global_ST #phone_ST").on('keypress blur change keyup', function(e){
	var keyCode = (e.which)?e.which:e.keyCode
	return !(keyCode>31 && (keyCode<48 || keyCode>57)); 
});

$("#form_signup_global_LP #phone_LP").on('keypress blur change keyup', function(e){
	var keyCode = (e.which)?e.which:e.keyCode
	return !(keyCode>31 && (keyCode<48 || keyCode>57)); 
});

$("#form_signup_global_LP2 #phone_LP2").on('keypress blur change keyup', function(e){
	var keyCode = (e.which)?e.which:e.keyCode
	return !(keyCode>31 && (keyCode<48 || keyCode>57)); 
});

$("#form_signup_global_LP #countrycode_LP").on('keypress blur change keyup', function(e){
	var keyCode = (e.which)?e.which:e.keyCode
	return !(keyCode>31 && (keyCode<48 || keyCode>57)); 
});

$("#form_signup_global_LP2 #countrycode_LP2").on('keypress blur change keyup', function(e){
	var keyCode = (e.which)?e.which:e.keyCode
	return !(keyCode>31 && (keyCode<48 || keyCode>57)); 
});

$("#form_signup_global #phone").attr("maxlength", "21");
$("#form_signup_global_ST #phone_ST").attr("maxlength", "21");
$("#form_signup_global_LP #phone_LP").attr("maxlength", "15");
$("#form_signup_global_LP2 #phone_LP2").attr("maxlength", "15");

$("#form_signup_global_LP #countrycode_LP").attr("maxlength", "6");
$("#form_signup_global_LP2 #countrycode_LP2").attr("maxlength", "6");

$("#form_new #countrycode").attr("maxlength", "6");
$("#form_new #phone").attr("maxlength", "15");
});


// **************************************************


//Form Validator
/*Validation For The Planner Step 1*/
//you can create your own Regular expression like we have done for the mobile number and make it true its name.
// allow user to enter number of Austrelia format [ if client have this requirement ]
//******** Add your form id here********
var formDefualt = "#form_new";
$(formDefualt).validate({
    
	//Ignore Field is for the Ignoring display None inputs validation
	ignore: [],
    rules: {
        first_name: {
            //******this is for the required field
			required: true,
			//******This option is for the minimum number of character
			minlength: 3,
		},
		last_name:{
            required: true,
		},
		email:{
            required: true,
			//******This option for the email address
			 email: true
		},
		phone:{
            required: true,
            //******it will allow users to enter number only
			minlength: 3,
        },
        entityTypeId:{
            required: true,
        },
        country:{
            required: true,
        }
    },
    onfocusout: function (element) {
        $(element).valid();
    },
    errorClass: 'error',
    validClass: 'valid',
    errorElement: 'span',
    highlight: function (element, errorClass, validClass) { 
	    $(element).addClass(errorClass).removeClass(validClass);
    }, 
    unhighlight: function (element, errorClass, validClass) { 
	    $(element).removeClass(errorClass).addClass(validClass);
    },
    /*comment this code if you dont want messages*/
    messages: {
        first_name: {required: "This field is required.",},
		last_name:{required: "This field is required.",},
		email:{
			required: "This field is required.",
			email: "Please enter a valid email address",
		},
		phone:{required: "This field is required."},
        entityTypeId:{required: "This field is required."},
        country:{required: "This field is required."},
    },
    //***********comment this code if you dont want messages*/
	
	//Add your class instead of .form-msg (after that class error message will show)
	
	errorPlacement: function (error, element) {
        if ($(element).is("input")) {
            error.insertAfter($(element));
        } 
		else if ($(element).is("select")) {
            error.insertAfter($(element).closest(".form-msg"));
        }
		else {
            error.insertAfter(element)
        }
	},
	//*******In windows.location you can put your link where you want to redirect your form.

  	submitHandler: function (form) {

        //Empty out error messages.
		$('.email_msg').html("");

		
		//Basics.
		var honeypot = $('#honeypot').val();
        var errorMessageContainerHeight = '10px';
        var remoteErrorMessage = 'Unable to process request at the time. Please try again later.';
        var messagesSeparator = '<br>';

		if(honeypot !="") {
			alert('value is - >'+honeypot);
			return false;
		} else {
			/*cookie*/
			function readCookie(name) {
                var cookiename = name + "=";
                var ca = document.cookie.split(';');
                for (var i=0; i<ca.length; i++) {
                    var c = ca[i];
                    while (c.charAt(0)==' ') c = c.substring(1,c.length);
                    if (c.indexOf(cookiename) == 0) return c.substring(cookiename.length,c.length);
                }
                return null;
			}
			var test_mydata = document.getElementById('_mkto_trk').value = readCookie('_mkto_trk');
			/* cookie */

			// Get language.
			var chk_lang = GetURLParameter('language');

			// $('.loader').css('display','block');

			// Change submit button UI.
			$("#thebutton span").text("Please wait...");
			$("#thebutton span").addClass("loaderimg");
			$("#thebutton").prop('disabled', true).addClass('btn-disable');

			var fpm_affiliate_pcode = "fpm-affiliate-pcode";
			var fpm_affiliate_utm_source = "fpm-affiliate-utm-source";
			var fpm_affiliate_utm_campaign = "fpm-affiliate-utm-campaign";
			var fpm_affiliate_utm_content = "fpm-affiliate-utm-content";
			var fpm_affiliate_agt = "fpm-affiliate-agt";

			var bta_chk =  $("#track7_2").val();
			var bta_fianl_val = "";
			if(bta_chk === "") {
				bta_fianl_val = "0";
			} else {
				bta_fianl_val =  $("#track7_2").val();
			}

			var lang_chk = $("#track_lang").val();
			var lang_fianl_val = "";
            if(lang_chk === "") {
                lang_fianl_val = "en";
            } else {
                lang_fianl_val =  $("#track_lang").val();
            }
            
			var request = $.ajax({
				  url: "<?php echo $portalurl; ?>api/register",
				  type: "POST",
				  data: {
						first_name:$("#first_name").val().toString(),
						last_name:$("#last_name").val().toString(),
						email:$("#email").val().toString(),
						phone:$("#phone").val().toString(),
						platform:$("#platform").val().toString(),
                        country: $("#user_country").val().toString(),
                        entityTypeId: $("#entity_type_id").val().toString(),
						currency:$("#currency").val().toString(),
						"fpm-affiliate-pcode":$("#track1_1").val().toString(),
						"fpm-affiliate-utm-source":$("#track2_1").val().toString(),
						"fpm-affiliate-utm-campaign":$("#track3_1").val().toString(),
						"fpm-affiliate-utm-content":$("#track4_1").val().toString(),
						"fpm-affiliate-agt":$("#track5_1").val().toString(),
						"_mkto_trk":$("#_mkto_trk").val().toString(),
						"cxd":$("#track7_1").val().toString(),
						"bta":bta_fianl_val.toString(),
						"language":lang_fianl_val.toString(),
					},
				 dataType:'json',
				 success: function(response){
					 $('.email_msg').html("");
					 $('.loader').css('display','none');

                     //Now let's check if it was success?
                     if ( response.success == true ) {

                         //If it's a page redirection?
                         if ( response.redirectToUrl != '' ) {
                             window.location = response.redirectTo;

                         } else {
                             //Change form action url and submit it.
                             $(formDefualt).attr('action', response.redirectTo);
                             form.submit();
                         }

                     } else {
                         //Remove processing from submit button.
                         var btn_name_get = $('#btn_name_get').val();
                         $("#thebutton span").text(btn_name_get);
                         $("#thebutton span").removeClass("loaderimg");
                         $("#thebutton").prop('disabled', false).removeClass('btn-disable');

                         //If we have messages?
                         var messages = response.messages;
                         var messagesLength = messages.length;
                         if ( messagesLength > 0 ) {

                             //Add margin bottom to email_msg div.
                             $(".email_msg").css('margin-bottom', errorMessageContainerHeight);

                             //Iteration.
                             for (var i = 0; i < messagesLength; i++) {
                                 $('.email_msg').append(messages[i] + messagesSeparator);
                             }
                         } else {
                             $('.email_msg').append(remoteErrorMessage + messagesSeparator);
                         }
                     }
						
				},
				error: function(response){
                    $('.email_msg').html("");
					$('.loader').css('display','none');

					var btn_name_get = $('#btn_name_get').val();
					$("#thebutton span").text(btn_name_get);
					$("#thebutton span").removeClass("loaderimg");
					$("#thebutton").prop('disabled', false).removeClass('btn-disable');

					// Add margin bottom to email_msg div.
                    $(".email_msg").css('margin-bottom', errorMessageContainerHeight);

					//Response.
                    var data = response.responseJSON;

					// Check if we have an object here?
                    if ( response.status == 422 && data !== null && typeof data === 'object' ) {

                        //Iterate all and append to html errors.
                        for (var key in data) {
                            if (data.hasOwnProperty(key)) {
                                $('.email_msg').append(data[key][0] + messagesSeparator);
                            };
                        }
                    } else {
                        $('.email_msg').append(remoteErrorMessage + messagesSeparator);
                    }
				}
			});

			return false;
		}
    }
});
    
//**********On Submit form will be submit 
$(formDefualt + " button[type='submit']").click(function () {
    setTimeout(function () {
        $("input.error").first().focus();
    }, 50)
});


//**********GetURLParameter
function GetURLParameter(sParam)
{
    var sPageURL = window.location.search.substring(1);
    var sURLVariables = sPageURL.split('&');
    for (var i = 0; i < sURLVariables.length; i++) {
        var sParameterName = sURLVariables[i].split('=');
        if (sParameterName[0] == sParam) {
            return sParameterName[1];
        }
    }
}

function parseQueryString() 
{ 
  var parsedParameters = {}, uriParameters = location.search.substr(1).split('&');
  for (var i = 0; i < uriParameters.length; i++)
  { 
   var parameter = uriParameters[i].split('='); 
   var value = typeof(parameter[1]) !== 'undefined' ? parameter[1] : ''; 
   parsedParameters[parameter[0]] = decodeURIComponent(value); 
  } 
  return parsedParameters;
 }/** Convert query params into cookie params */
    
    
function convertAffiliateQueryStringToCookies() {
    var params = parseQueryString();
    for (var i in params) {
        if (params.hasOwnProperty(i) && (i.match(/fpm-affiliate/) || i.match(/bta/) || i.match(/cxd/) || i.match(/affiliate-utm-content/) || i.match(/language/))) {
            if (i.match(/bta/) || i.match(/cxd/)) {
				if( getCookie('fpm-affiliate-' + i) === "" ){
					document.cookie = 'fpm-affiliate-' + i + '=' + params[i] + '; path=/; domain=.' + window.location.host.split('.').slice(1).join('.')+';max-age=7776000';
					document.cookie = i + '=' + params[i] + '; path=/; domain=.' + window.location.host.split('.').slice(1).join('.')+';max-age=7776000';
				}
            } else
				if( getCookie(i) === "" ){
					document.cookie = i + '=' + params[i] + '; path=/; domain=.' + window.location.host.split('.').slice(1).join('.')+';max-age=7776000';
				}
        }
    }
}

   
$(document).ready(function () {

   convertAffiliateQueryStringToCookies();   	
  
    //set default country as AU 
     $("#user_country").val('AU'); 	
  
    // Get country from IP.
    $.get("https://ipinfo.io?token=8113c8e7b3e768", function(response) {
        $("#user_country").val(response.country);
    }, "jsonp");
    
    //set default country as AU 
     $("#user_country2").val('AU'); 	
  
    // Get country from IP.
    $.get("https://ipinfo.io?token=8113c8e7b3e768", function(response) {
        $("#user_country2").val(response.country);
    }, "jsonp");


    var track1 = GetURLParameter('fpm-affiliate-pcode');
    var track2 = GetURLParameter('fpm-affiliate-utm-source');
    var track3 = GetURLParameter('fpm-affiliate-utm-campaign');
    var track4 = GetURLParameter('fpm-affiliate-utm-content');
    var track5 = GetURLParameter('fpm-affiliate-agt');

    var track7_1 = GetURLParameter('cxd');
    var track7_2 = GetURLParameter('bta');
    var track8_1 = GetURLParameter('language');

    $("#track1_1").val(track1);
    $("#track2_1").val(track2);
    $("#track3_1").val(track3);
    $("#track4_1").val(track4);
    $("#track5_1").val(track5);
    $("#track7_1").val(track7_1);
    $("#track7_2").val(track7_2);
    $("#track_lang").val(track8_1);
}); 
    

  

