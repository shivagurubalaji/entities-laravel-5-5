<style>
    .lhnPreChatForm:before {
        background: url(assets/templates/images/logo-21.png) no-repeat 0 0 !important;
        display: inline-block !important;
        width: 220px !important;
        height: 45px !important;
        background-size: 100% !important;
    }

    .lhnPreChatForm:before {
        display: inline-block;
        width: 175px;
        height: 45px;
        content: "";
        background: url(assets/templates/images/logo-21.jpg) no-repeat 0 0;
        background-size: 100%;
    }
</style>
<script language="Javascript">
    window.onload = function () {

        window.lhnJsSdkInit = function () {
            lhnJsSdk.setup = {
                application_id: "76c11421-4893-4fc8-4a5e-2f2223aca995",
                application_secret: "fpvtzdcp0cbmajyxpknl5dxbtdmufewq9fnohyj4m67yri+cjo"
            };
            lhnJsSdk.controls = [{
                type: "hoc",
                id: "a8b697b0-3993-49f6-ad66-f7cc9a2b8b07"
            }];

            lhnJsSdk.dictionary = {

                chatTitle: "Live Support",
                email: "Email",
                endChat: "End Chat",
                livechat: "Live Support",
                newChatTitle: "Live Support",
                send: "Send",
                submit: "Submit",
                ticketMenu: "Ticket",
                ticketTitle: "Submit a ticket"
            };
        };


    }
</script>

<!-- TrustBox script -->
<script type="text/javascript" src="//widget.trustpilot.com/bootstrap/v5/tp.widget.bootstrap.min.js" async></script>
<!-- End TrustBox script -->

<!-- New Live Chat code -->
<script type="text/javascript">

    function lhnJsSdkPreChatShown() {
        if (lhnJsSdk.isOnline == false) {
            lhnJsSdk.dictionary = {
                agentConnecting: "Connecting to the chat bot"
            };
            lhnJsSdk.refresh_dictionary();
        }
    }

    function lhnJsSdkReady() {
        if (lhnJsSdk.isOnline == false) {
            lhnJsSdk.dictionary = {
                agentConnecting: "Connecting to the chat bot"
            };
            lhnJsSdk.refresh_dictionary();
        }

        var vars = {};
        var parts = window.location.href.replace(/[?&]+([^=&]+)=([^&]*)/gi, function (m, key, value) {
            vars[key] = value;

        });
        //var val = str.split(vars);
        lhnJsSdk.preChatData = {
            "full_name": vars['name'],
            "email": vars['email'],
            "inquiry": "English",
            "auto_submit": true
        };
        if (vars['Livechat'] == 'Open' || vars['open'] == 'chat') {
            lhnJsSdk.openHOC();
        }
    }

    (function (d, s) {
        var newjs, lhnjs = d.getElementsByTagName(s)[0];
        newjs = d.createElement(s);
        newjs.src = "https://developer.livehelpnow.net/js/sdk/lhn-jssdk-current.min.js";
        lhnjs.parentNode.insertBefore(newjs, lhnjs);

    }(document, "script"));

</script>
<!-- End of New Live Chat code -->




<!-- GLOBAL FORM SIGN UP -->
<!-- <script src="https://www.google.com/recaptcha/api.js" async ></script> -->
<script src="/assets/js/js.cookie.js"></script>
<script src="/assets/js/i1502958122408_jquery.validate.js"></script>

<script>
    function GetURLParameter(sParam) {
        var sPageURL = decodeURIComponent(window.location.search.substring(1));

        var sURLVariables = sPageURL.split('&');
        for (var i = 0; i < sURLVariables.length; i++) {
            var sParameterName = sURLVariables[i].split('=');
            if (sParameterName[0] == sParam) {
                return sParameterName[1];
            }
        }
    }
    function getUrlParameter(sParam) {
        var sPageURL = decodeURIComponent(window.location.search.substring(1)),
            sURLVariables = sPageURL.split('&'),
            sParameterName,
            i;

        for (i = 0; i < sURLVariables.length; i++) {
            sParameterName = sURLVariables[i].split('=');

            if (sParameterName[0] === sParam) {
                return sParameterName[1] === undefined ? true : sParameterName[1];
            }
        }
    }

    jQuery(document).ready(function ($) {

        var track1 = GetURLParameter('fpm-affiliate-url');
        var track2 = GetURLParameter('fpm-affiliate-pcode');
        var track3 = GetURLParameter('fpm-affiliate-utm-source');
        var track4 = GetURLParameter('fpm-affiliate-utm-campaign');
        var track5 = GetURLParameter('affiliate-utm-content');
        var track6 = GetURLParameter('pcode');


        var url1 = 'https://portal.fpmarkets.com/register';

        if (GetURLParameter('language') === 'es') {
            url1 = 'https://portal.fpmarkets.com/es/register';
        }

        var newUrl = url1 + "?fpm-affiliate-url=" + track1 + "&fpm-affiliate-pcode=" + track2 + "&fpm-affiliate-utm-source=" + track3 + "&fpm-affiliate-utm-campaign=" + track4 + "&affiliate-utm-content=" + track5 + "&pcode=" + track6;
        jQuery("a.directions-link1").attr("href", newUrl);
        jQuery("a.directions-link1").attr("onclick", 'goog_report_conversion("' + newUrl + '")');

        var lang = jQuery('html').attr('lang');

        var langParam = getUrlParameter('language');

        // language from ulr parameters has priority
        if (langParam) {
            lang = langParam;
        }

        $("#form_signup_global #country").val("AU");

        var countryCodes_global = { "AD": "+376", "AE": "+971", "AF": "+93", "AG": "+1268", "AI": "+1264", "AL": "+355", "AM": "+374", "AN": "+599", "AO": "+244", "AR": "+54", "AS": "+685", "AT": "+43", "AU": "+61", "AW": "+297", "AZ": "+994", "BA": "+387", "BB": "+1246", "BD": "+880", "BE": "+32", "BF": "+226", "BG": "+359", "BH": "+973", "BI": "+257", "BJ": "+229", "BL": "+590", "BM": "+1441", "BN": "+673", "BO": "+591", "BR": "+55", "BS": "+1242", "BT": "+975", "BW": "+267", "BY": "+375", "BZ": "+501", "CA": "+1", "CC": "+6189162", "CD": "+243", "CF": "+236", "CG": "+242", "CH": "+41", "CI": "+225", "CK": "+682", "CL": "+56", "CM": "+237", "CN": "+86", "CO": "+57", "CR": "+506", "CU": "+53", "CV": "+238", "CY": "+357", "CZ": "+420", "DE": "+49", "DJ": "+253", "DK": "+45", "DM": "+1767", "DO": "+18", "DZ": "+213", "EC": "+593", "EE": "+372", "EG": "+20", "EH": "+212528", "ER": "+291", "ES": "+34", "ET": "+251", "FI": "+358", "FJ": "+679", "FK": "+500", "FM": "+691", "FO": "+298", "FR": "+33", "GA": "+241", "GB": "+44", "GD": "+1473", "GE": "+995", "GF": "+594", "GG": "+44", "GH": "+233", "GI": "+350", "GL": "+299", "GM": "+220", "GN": "+224", "GP": "+590", "GQ": "+240", "GR": "+30", "GS": "+500", "GT": "+502", "GU": "+1671", "GW": "+245", "GY": "+592", "HK": "+852", "HN": "+504", "HR": "+385", "HT": "+509", "HU": "+36", "ID": "+62", "IE": "+353", "IL": "+972", "IM": "+44", "IN": "+91", "IO": "+246", "IQ": "+964", "IR": "+98", "IS": "+354", "IT": "+39", "JE": "+441534", "JM": "+1876", "JO": "+962", "JP": "+81", "KE": "+254", "KG": "+996", "KH": "+855", "KI": "+686", "KM": "+269", "KN": "+1869", "KP": "+850", "KR": "+82", "KW": "+965", "KY": "+1345", "KZ": "+7", "LA": "+856", "LB": "+961", "LC": "+1758", "LI": "+423", "LK": "+94", "LR": "+231", "LS": "+266", "LT": "+370", "LU": "+352", "LV": "+371", "LY": "+218", "MA": "+212", "MC": "+377", "MD": "+373", "ME": "+382", "MF": "+590", "MG": "+261", "MH": "+692", "MK": "+389", "ML": "+223", "MM": "+95", "MN": "+976", "MO": "+853", "MP": "+1670", "MQ": "+596", "MR": "+222", "MS": "+1664", "MT": "+356", "MU": "+230", "MV": "+960", "MW": "+265", "MX": "+52", "MY": "+60", "MZ": "+258", "NA": "+264", "NC": "+687", "NE": "+227", "NF": "+672", "NG": "+234", "NI": "+505", "NL": "+31", "NO": "+47", "NP": "+977", "NR": "+674", "NU": "+683", "NZ": "+64", "OM": "+968", "PA": "+507", "PE": "+51", "PF": "+689", "PG": "+675", "PH": "+63", "PK": "+92", "PL": "+48", "PM": "+508", "PN": "+64", "PR": "+1", "PS": "+970", "PT": "+351", "PW": "+680", "PY": "+595", "QA": "+974", "RE": "+262", "RO": "+40", "RS": "+381", "RU": "+7", "RW": "+250", "SA": "+966", "SB": "+677", "SC": "+248", "SD": "+249", "SE": "+46", "SG": "+65", "SH": "+290", "SI": "+386", "SJ": "+47", "SK": "+421", "SL": "+232", "SM": "+378", "SN": "+221", "SO": "+252", "SR": "+597", "ST": "+239", "SV": "+503", "SY": "+963", "SZ": "+268", "TC": "+1649", "TD": "+235", "TF": "+689", "TG": "+228", "TH": "+66", "TJ": "+992", "TK": "+690", "TL": "+670", "TM": "+993", "TN": "+216", "TO": "+676", "TR": "+90", "TT": "+1868", "TV": "+688", "TW": "+886", "TZ": "+255", "UA": "+380", "UG": "+256", "UY": "+598", "UZ": "+998", "VA": "+39066", "VC": "+1784", "VE": "+58", "VG": "+1284", "VI": "+1340", "VN": "+84", "VU": "+678", "WF": "+681", "WS": "+685", "YE": "+967", "YT": "+262", "ZA": "+27", "ZM": "+260", "ZW": "+263" };

        $.get("https://ipinfo.io?token=8113c8e7b3e768", function (response) {
            $("#form_signup_global #country").val(response.country);
            $("#form_signup_global #phone").val(countryCodes_global[response.country]);
        }, "jsonp");

        $("#form_signup_global #country").change(function () {
            $("#form_signup_global #phone").val(countryCodes_global[$("#form_signup_global #country").val()]);
        });


        /* SIGN UP FORM 2 - START TRADING IN MINUTES */
        $("#form_signup_global_ST #country_ST").val("AU");

        $.get("https://ipinfo.io?token=8113c8e7b3e768", function (response) {
            $("#form_signup_global_ST #country_ST").val(response.country);
            $("#form_signup_global_ST #phone_ST").val(countryCodes_global[response.country]);
        }, "jsonp");

        $("#form_signup_global_ST #country_ST").change(function () {
            $("#form_signup_global_ST #phone_ST").val(countryCodes_global[$("#form_signup_global_ST #country_ST").val()]);
        });
        /* EO SIGN UP FORM 2 - START TRADING IN MINUTES */

        var translations = {
            'es': {
                'disclaimer': 'El Trading de  es riesgoso. Lee PDS en fpmarkets.com AFSL286354',
                '1': 'PRACTICA TU TRADING',
                '2': 'CON UNA CUENTA DEMO DE FP MARKETS',
                '3': 'No te conformes con menos. Experimenta la emoción de operar en forex. Haz que FP Markets sea tu primera opción.',
                '4': 'ABRIR CUENTA DEMO',
                '5': 'Por que probar una cuenta DEMO con FP Markets?',
                '6': 'Afina tus habilidades de Trading',
                '7': 'Prueba y mejora tus habilidades. Descubre lo que funciona y lo que no; descarta cualquier error y aprende qué estrategias comerciales son rentables para ti. Sin costos, todo lo que necesitas es esfuerzo.',
                '8': 'Entiende la Plataforma',
                '9': 'Conoce tu plataforma de Trading completamente. Prueba cada función y botón para aprender a controlar y conocer todas las técnicas antes de dar el paso para abrir una cuenta real y depositar fondos.',
                '10': 'Aprende a manejar tus emociones',
                '11': 'Aprende a controlar tus emociones cuando realices operaciones de Trading. Ya sea por una pérdida o una ganancia, una cuenta demo es la manera perfecta de descubrir cómo puedes manejar tus emociones antes de embarcarte en tu experiencia de Trading real.',
                '12': 'Preguntas frecuentes',
                '13': 'Cual es el saldo mínimo para abrir una cuenta real?',
                '14': 'Para las cuentas  IRESS, el saldo mínimo de apertura es de $ 1,000 AUD o $ 1,000 en la moneda base. Para MT4, el saldo mínimo de apertura es de $ 100 AUD o $ 100 en la moneda base.',
                '15': 'Quien regula a FP Markets?',
                '16': 'FP Markets está regulada por la Comisión Australiana de Valores e Inversiones (ASIC) y opera bajo una Licencia de Servicios Financieros de Australia (AFSL) - número 286354. Los titulares de AFSL, como FP Markets, deben cumplir con muchas obligaciones permanentemente.',
                '17': 'Que tipos de cuentas puedo abrir?',
                '18': 'Apoyamos los siguientes tipos de cuentas: Individual, Joint, Sole Trader, Company, Trustee Individual y Corporate Trustee.',
                '19': 'Cuales son los horarios de soporte al cliente?',
                '20': 'Nuestro equipo de soporte a clientes está disponible las 24 horas del día.',
                '21': 'COMIENZA TU VIAJE HOY',

                's4-h-1': 'Llámanos',
                's4-h-2': 'Chat en vivo',
                's4-p-1': 'Chat con ventas y soporte aquí',
                's4-a-1': 'Chat en vivo ya',
                's4-h-3': 'Email',
                's4-p-2': 'Puedes escribirnos por email aquí',
                's4-h-4': 'Siguenos',
                's4-p-3': 'Únete a nuestra comunidad',
                's4-a-2': 'Escribenos',
                's5-p': 'Mayor satisfacción general del cliente. Tendencias de Inversión 2016 Informe  de Australia. ' +
                    'DESCARGO DE RESPONSABILIDAD: Este material en este sitio web está destinado a fines ilustrativos e ' +
                    'información general solamente. No constituye asesoramiento financiero ni toma en cuenta sus objetivos ' +
                    'de inversión, situación financiera o necesidades particulares. Comisiones, intereses, tarifas de plataforma, ' +
                    'dividendos, margen de variación y otras tarifas y cargos pueden aplicarse a los productos o servicios ' +
                    'financieros disponibles en FP Markets. La información en este sitio web se ha preparado sin tener en cuenta ' +
                    'sus objetivos personales, su situación financiera o sus necesidades. Debe considerar la información a la luz ' +
                    'de sus objetivos, situación financiera y necesidades antes de tomar una decisión acerca de si adquirir o ' +
                    ' de cualquier producto financiero. Los contratos por diferencia () son derivados y pueden ser riesgosos; ' +
                    'las pérdidas pueden exceder su pago inicial y debe ser capaz de cumplir con todas los gastos derivados tan ' +
                    'pronto como se realicen. Al operar con , usted no posee ni tiene ningún derecho sobre los activos ' +
                    'subyacentes de los . FP Markets recomienda que busque asesoramiento independiente de una persona ' +
                    'debidamente calificada antes de decidir invertir o disponer de un derivado. Se puede obtener una ' +
                    'Declaración de divulgación de productos para cada uno de los productos financieros disponibles de FP ' +
                    'Markets ya sea desde este sitio web o a pedido en nuestras oficinas, y debe tenerse en cuenta antes de ' +
                    'realizar transacciones con nosotros. First Prudential Markets Pty Ltd (ABN 16 112 600 281, AFS License ' +
                    'No. 286354).',
                's5-p-2': 'FP Markets no acepta solicitudes de residentes de EE. UU., Japón o Nueva Zelanda o residentes de cualquier ' +
                    '   otro país o jurisdicción donde dicha distribución o uso sea contrario a esas leyes o regulaciones locales.'
            }
        };

        if (translations[lang]) {
            for (var index in translations[lang]) {
                var element = jQuery('.trans-' + index);

                if (!element.length) {
                    //console.log('Trans missing: ' + index);
                    continue;
                }

                element.html(translations[lang][index]);
            }
        }


        $("#form_signup_global_ST #country_ST").change(function () {
            $("#form_signup_global_ST #phone_ST").val(countryCodes_global[$("#form_signup_global_ST #country_ST").val()]);
        });
        /* EO SIGN UP FORM 2 - START TRADING IN MINUTES */
    });
</script>
<script>
    /* SIGN UP FORM VALIDATION */
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
        errorPlacement: function (error, element) {
            if ($(element).is("input")) {
                //error.insertAfter($(element));
            } else if ($(element).is("select")) {
                //error.insertAfter($(element).closest(".form-msg"));
            } else {
                //error.insertAfter(element)
            }
        },
        submitHandler: function (form) {

            var fpphone = $('#form_signup_global #phone').val();

            if (fpphone.match(/^[0-9]*$/)) {
                $('#form_signup_global #phone').removeClass('error').addClass('valid');
                $('.fp-demo-signup-global .form_signup_global_msg').html("");
            }
            else {
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

                var request = $.ajax({
                    url: "[[!portalUrl]]api/demoRegister",
                    type: "POST",
                    data: {
                        first_name: $("#form_signup_global #first_name").val().toString(),
                        last_name: $("#form_signup_global #last_name").val().toString(),
                        email: $("#form_signup_global #email").val().toString(),
                        phone: $("#form_signup_global #phone").val().toString(),
                        platform: $("#form_signup_global #platform").val().toString(),
                        country: $("#form_signup_global #country").val().toString(),
                        nationality: $("#form_signup_global_ST #nationality").val().toString(),
                        demo_preferred_Language: $("#form_signup_global_ST #demo_preferred_Language").val().toString(),
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
                    beforeSend: function (xhr) {
                        $('#form_signup_global .fp-demo-submit-global input[type=submit]').val('Processing..');
                        $('#form_signup_global .fp-demo-submit-global input[type=submit]').attr('disabled', 'disabled');
                    },
                    success: function (msg) {
                        $('.fp-demo-signup-global .form_signup_global_msg').html("");
                        console.log("Success");
                        if (msg.success == true) {
                            console.log("Success if");
                            var first_name = encodeURIComponent($("#first_name").val().toString()),
                                last_name = encodeURIComponent($("#last_name").val().toString()),
                                email = encodeURIComponent($("#email").val().toString()),
                                phone = encodeURIComponent($("#phone").val().toString()),
                                country = encodeURIComponent($("#country").val().toString());
                            var fpURLstructure = 'fname=' + first_name + '&lname=' + last_name + '&email=' + email + '&phone=' + phone + '&actype=1&countrycode=' + country;

                            //getting current URL segments
                            var pathName = window.location.pathname;
                            var url_segment2 = pathName.split('/');
                            // console.log('url-segment::'+segments2[1]);

                            var redirect_lang_short_code = "";
                            var lang_array = ['en', 'ar', 'br', 'ca', 'cz', 'cn', 'de', 'es', 'fr', 'gr', 'id', 'ie', 'it', 'ke', 'ko', 'ms', 'pt', 'pl', 'ru', 'th', 'uk', 'vi', 'za', 'zh', 'zh_tw'];

                            // Check if a value exists in the fruits array
                            if (lang_array.indexOf(url_segment2[1]) !== -1) {
                                redirect_lang_short_code = "/" + url_segment2[1];
                            } else {
                                // console.log("Value does not exists!")
                                // console.log(url_segment2[1])
                            }

                            setTimeout(function () {
                                if (typeof (chk_lang) != "undefined" && chk_lang !== null) {

                                    if (chk_lang == "es") {
                                        window.location = "thank-you-application/?" + fpURLstructure;
                                    } else if (chk_lang == "aus") {
                                        window.location = "thank-you-application/?" + fpURLstructure;
                                    } else if (chk_lang == "en") {
                                        window.location = "thank-you-application/?" + fpURLstructure;
                                    }
                                } else {


                                    window.location = redirect_lang_short_code + "thank-you-application/?" + fpURLstructure;




                                }
                            })
                        } else {
                            console.log("Success else");
                            $('.fp-demo-signup-global .form_signup_global_msg').html("This email address is already registered. Please enter a new email address.");
                            $('#form_signup_global .fp-demo-submit-global input[type=submit]').val('Register Now');
                            $('#form_signup_global .fp-demo-submit-global input[type=submit]').removeAttr('disabled');
                        }
                    },
                    error: function (msg, error) {
                        $('.fp-demo-signup-global .form_signup_global_msg').html("Please enter a valid phone number.");
                        $('#form_signup_global .fp-demo-submit-global input[type=submit]').val('Register Now');
                        $('#form_signup_global .fp-demo-submit-global input[type=submit]').removeAttr('disabled');
                    }
                }).done(function (data) {
                    /* $('#form_signup_global .fp-demo-submit-global input[type=submit]').val('Register Now');
                    $('#form_signup_global .fp-demo-submit-global input[type=submit]').removeAttr('disabled'); */
                });
                return false;
            }
        }
    });
    $(signupFormGlobal + " button[type='submit']").click(function () {
        setTimeout(function () {
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
        errorPlacement: function (error, element) {
            if ($(element).is("input")) {
                //error.insertAfter($(element));
            } else if ($(element).is("select")) {
                //error.insertAfter($(element).closest(".form-msg"));
            } else {
                //error.insertAfter(element)
            }
        },
        submitHandler: function (form) {
            var fpphone_ST = $('#form_signup_global_ST #phone_ST').val();
            console.log("test1Dec");
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
                var fpm_affiliate_utm_term = "fpm-affiliate-utm-term";
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
                console.log(fpm_affiliate_utm_term);
                if (lang_chk === "") {

                    lang_fianl_val = "en";

                } else {

                    lang_fianl_val = $("#form_signup_global_ST #track_lang_ST").val();
                }

                var request = $.ajax({
                    url: "https://portal.firstprudentialmarkets.com/api/demoRegister",
                    type: "POST",
                    data: {
                        first_name: $("#form_signup_global_ST #first_name_ST").val().toString(),
                        last_name: $("#form_signup_global_ST #last_name_ST").val().toString(),
                        email: $("#form_signup_global_ST #email_ST").val().toString(),
                        phone: $("#form_signup_global_ST #phone_ST").val().toString(),
                        platform: $("#form_signup_global_ST #platform_ST").val().toString(),
                        country: $("#form_signup_global_ST #country_ST").val().toString(),
                        nationality: $("#form_signup_global_ST #nationality").val().toString(),
                        demo_preferred_Language: $("#form_signup_global_ST #demo_preferred_Language").val().toString(),
                        currency: $("#form_signup_global_ST #currency_ST").val().toString(),
                        "fpm-affiliate-pcode": $("#form_signup_global_ST #track1_1_ST").val().toString(),
                        "fpm-affiliate-utm-source": $("#form_signup_global_ST #track2_1_ST").val().toString(),
                        "fpm-affiliate-utm-campaign": $("#form_signup_global_ST #track3_1_ST").val().toString(),
                        "fpm-affiliate-utm-content": $("#form_signup_global_ST #track4_1_ST").val().toString(),
                        "fpm-affiliate-agt": $("#form_signup_global_ST #track5_1_ST").val().toString(),
                        "fpm-affiliate-utm-term": $("#form_signup_global_ST #track6_1_ST").val().toString(),
                        "_mkto_trk": $("#form_signup_global_ST #_mkto_trk_ST").val().toString(),
                        "cxd": $("#form_signup_global_ST #track7_1_ST").val().toString(),
                        "bta": bta_fianl_val.toString(),
                        "language": lang_fianl_val.toString(),
                    },
                    dataType: 'json',
                    beforeSend: function (xhr) {
                        $('#form_signup_global_ST .fp-demo-submit-global input[type=submit]').val('Processing..');
                        $('#form_signup_global_ST .fp-demo-submit-global input[type=submit]').attr('disabled', 'disabled');
                    },
                    success: function (msg) {
                        $('.fp-demo-signup-global .form_signup_global_msg_ST').html("");

                        if (msg.success == true) {
                            var first_name = encodeURIComponent($("#first_name_ST").val().toString()),
                                last_name = encodeURIComponent($("#last_name_ST").val().toString()),
                                email = encodeURIComponent($("#email_ST").val().toString()),
                                phone = encodeURIComponent($("#phone_ST").val().toString()),
                                country = encodeURIComponent($("#country_ST").val().toString());
                            var fpURLstructure = 'fname=' + first_name + '&lname=' + last_name + '&email=' + email + '&phone=' + phone + '&actype=1&countrycode=' + country;

                            //getting current URL segments
                            var pathName = window.location.pathname;
                            var url_segment2 = pathName.split('/');
                            // console.log('url-segment::'+segments2[1]);

                            var redirect_lang_short_code = "";
                            var lang_array = ['en', 'ar', 'br', 'ca', 'cz', 'cn', 'de', 'es', 'fr', 'gr', 'id', 'ie', 'it', 'ke', 'ko', 'ms', 'pt', 'pl', 'ru', 'th', 'uk', 'vi', 'za', 'zh', 'zh_tw'];

                            // Check if a value exists in the fruits array
                            if (lang_array.indexOf(url_segment2[1]) !== -1) {
                                redirect_lang_short_code = "/" + url_segment2[1];
                            } else {
                                // console.log("Value does not exists!")
                                // console.log(url_segment2[1])
                            }

                            setTimeout(function () {
                                if (typeof (chk_lang) != "undefined" && chk_lang !== null) {

                                    if (chk_lang == "es") {
                                        window.location = "thank-you-application/?" + fpURLstructure;
                                    } else if (chk_lang == "aus") {
                                        window.location = "thank-you-application/?" + fpURLstructure;
                                    } else if (chk_lang == "en") {
                                        window.location = "thank-you-application/?" + fpURLstructure;
                                    }
                                } else {






                                    window.location = redirect_lang_short_code + "thank-you-application/?" + fpURLstructure;
                                }
                            })
                        } else {
                            $('.fp-demo-signup-global .form_signup_global_msg_ST').html("This email address is already registered. Please enter a new email address.");
                            $('#form_signup_global_ST .fp-demo-submit-global input[type=submit]').val('Register Now');
                            $('#form_signup_global_ST .fp-demo-submit-global input[type=submit]').removeAttr('disabled');
                        }
                    },
                    error: function (msg, error) {
                        $('.fp-demo-signup-global .form_signup_global_msg_ST').html("Please enter a valid phone number");
                        $('#form_signup_global_ST .fp-demo-submit-global input[type=submit]').val('Register Now');
                        $('#form_signup_global_ST .fp-demo-submit-global input[type=submit]').removeAttr('disabled');
                    }
                }).done(function (data) {
                    /* $('#form_signup_global_ST .fp-demo-submit-global input[type=submit]').val('Register Now');
                    $('#form_signup_global_ST .fp-demo-submit-global input[type=submit]').removeAttr('disabled'); */
                });
                return false;
            }
            console.log("finish");
        }
    });
    $(signupFormGlobal_ST + " button[type='submit']").click(function () {
        setTimeout(function () {
            $("input.error").first().focus();
        }, 50)
    });
    /* EO SIGN UP FORM 2 VALIDATION - START TRADING IN MINUTES  */

    function parseQueryString() {
        var parsedParameters = {},
            uriParameters = location.search.substr(1).split('&');
        for (var i = 0; i < uriParameters.length; i++) {
            var parameter = uriParameters[i].split('=');
            var value = typeof (parameter[1]) !== 'undefined' ? parameter[1] : '';
            parsedParameters[parameter[0]] = decodeURIComponent(value);
        }
        return parsedParameters;
    }

    function getCookie(cname) {
        var name = cname + "=";
        var ca = document.cookie.split(';');
        for (var i = 0; i < ca.length; i++) {
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
        console.log("1");
        var params = parseQueryString();
        for (var i in params) {
            if (params.hasOwnProperty(i) && (i.match(/fpm-affiliate/) || i.match(/bta/) || i.match(/cxd/) || i.match(/affiliate-utm-content/) || i.match(/language/))) {
                if (i.match(/bta/) || i.match(/cxd/)) {
                    if (getCookie('fpm-affiliate-' + i) === "") {
                        document.cookie = 'fpm-affiliate-' + i + '=' + params[i] + '; path=/; domain=.' + window.location.host.split('.').slice(1).join('.') + ';max-age=7776000';
                        document.cookie = i + '=' + params[i] + '; path=/; domain=.' + window.location.host.split('.').slice(1).join('.') + ';max-age=7776000';
                    }
                } else
                    if (getCookie(i) === "") {
                        document.cookie = i + '=' + params[i] + '; path=/; domain=.' + window.location.host.split('.').slice(1).join('.') + ';max-age=7776000';
                    }
            }
        }
    }



    jQuery(document).ready(function () {
        convertAffiliateQueryStringToCookies();
        console.log("2");

        //var track1 = GetURLParameter('fpm-affiliate-pcode');
        var track1 = typeof (GetURLParameter('fpm-affiliate-pcode')) !== 'undefined' ? GetURLParameter('fpm-affiliate-pcode') : '';
        track1 = getCookie('fpm-affiliate-pcode') !== "" ? getCookie('fpm-affiliate-pcode') : track1;

        //var track2 = GetURLParameter('fpm-affiliate-utm-source');
        var track2 = typeof (GetURLParameter('fpm-affiliate-utm-source')) !== 'undefined' ? GetURLParameter('fpm-affiliate-utm-source') : 'Website';
        track2 = getCookie('fpm-affiliate-utm-source') !== "" ? getCookie('fpm-affiliate-utm-source') : track2;

        var track3 = GetURLParameter('fpm-affiliate-utm-campaign');
        track3 = getCookie('fpm-affiliate-utm-campaign') !== "" ? getCookie('fpm-affiliate-utm-campaign') : track3;

        var track4 = GetURLParameter('fpm-affiliate-utm-content');
        track4 = getCookie('fpm-affiliate-utm-content') !== "" ? getCookie('fpm-affiliate-utm-content') : track4;

        var track5 = GetURLParameter('fpm-affiliate-agt');
        track5 = getCookie('fpm-affiliate-agt') !== "" ? getCookie('fpm-affiliate-agt') : track5;

        var trackterm = GetURLParameter('fpm-affiliate-utm-term');
        trackterm = getCookie('fpm-affiliate-utm-term') !== "" ? getCookie('fpm-affiliate-utm-term') : trackterm;

        var track7_1 = GetURLParameter('cxd');
        track7_1 = getCookie('fpm-affiliate-cxd') !== "" ? getCookie('fpm-affiliate-cxd') : track7_1;

        var track7_2 = GetURLParameter('bta');
        track7_2 = getCookie('fpm-affiliate-bta') !== "" ? getCookie('fpm-affiliate-bta') : track7_2;

        var track8_1 = GetURLParameter('language');
        track8_1 = getCookie('language') !== "" ? getCookie('language') : track8_1;

        console.log(trackterm);

        $("#form_signup_global #track1_1").val(track1);
        $("#form_signup_global #track2_1").val(track2);
        $("#form_signup_global #track3_1").val(track3);
        $("#form_signup_global #track4_1").val(track4);
        $("#form_signup_global #track5_1").val(track5);
        $("#form_signup_global #track6_1").val(trackterm);
        $("#form_signup_global #track7_1").val(track7_1);
        $("#form_signup_global #track7_2").val(track7_2);
        $("#form_signup_global #track_lang").val(track8_1);

        $("#form_signup_global_ST #track1_1_ST").val(track1);
        $("#form_signup_global_ST #track2_1_ST").val(track2);
        $("#form_signup_global_ST #track3_1_ST").val(track3);
        $("#form_signup_global_ST #track4_1_ST").val(track4);
        $("#form_signup_global_ST #track5_1_ST").val(track5);
        $("#form_signup_global_ST #track6_1_ST").val(trackterm);
        $("#form_signup_global_ST #track7_1_ST").val(track7_1);
        $("#form_signup_global_ST #track7_2_ST").val(track7_2);
        //$("#form_signup_global_ST #track_lang_ST").val(track8_1);
    });
</script>


<script>
    jQuery(document).ready(function ($) {
        $("#form_signup_global #phone").on('keypress blur change keyup', function (e) {
            var keyCode = (e.which) ? e.which : e.keyCode
            return !(keyCode > 31 && (keyCode < 48 || keyCode > 57));
        });

        $("#form_signup_global_ST #phone_ST").on('keypress blur change keyup', function (e) {
            var keyCode = (e.which) ? e.which : e.keyCode
            return !(keyCode > 31 && (keyCode < 48 || keyCode > 57));
        });

        $("#form_signup_global_LP #phone_LP").on('keypress blur change keyup', function (e) {
            var keyCode = (e.which) ? e.which : e.keyCode
            return !(keyCode > 31 && (keyCode < 48 || keyCode > 57));
        });

        $("#form_signup_global_LP2 #phone_LP2").on('keypress blur change keyup', function (e) {
            var keyCode = (e.which) ? e.which : e.keyCode
            return !(keyCode > 31 && (keyCode < 48 || keyCode > 57));
        });

        $("#form_signup_global_LP #countrycode_LP").on('keypress blur change keyup', function (e) {
            var keyCode = (e.which) ? e.which : e.keyCode
            return !(keyCode > 31 && (keyCode < 48 || keyCode > 57));
        });

        $("#form_signup_global_LP2 #countrycode_LP2").on('keypress blur change keyup', function (e) {
            var keyCode = (e.which) ? e.which : e.keyCode
            return !(keyCode > 31 && (keyCode < 48 || keyCode > 57));
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
</script>





<!--scripts starts here-->
<script type="text/javascript" src="/wp-content/themes/fptheme/js/browser_selector.js"></script>
<script type="text/javascript" src="/wp-content/themes/fptheme/js/scripts.js"></script>
<!--scripts ends here-->
<script>
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
            last_name: {
                required: true,
            },
            email: {
                required: true,
                //******This option for the email address
                email: true
            },
            phone: {
                required: true,
                //******it will allow users to enter number only
                minlength: 3,
            },
            entityTypeId: {
                required: true,
            },
            country: {
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
            first_name: { required: "This field is required.", },
            last_name: { required: "This field is required.", },
            email: {
                required: "This field is required.",
                email: "Please enter a valid email address",
            },
            phone: { required: "This field is required." },
            entityTypeId: { required: "This field is required." },
            country: { required: "This field is required." },
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

            if (honeypot != "") {
                alert('value is - >' + honeypot);
                return false;
            } else {
                /*cookie*/
                console.log("test");
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

                var bta_chk = $("#track7_2").val();
                var bta_fianl_val = "";
                if (bta_chk === "") {
                    bta_fianl_val = "0";
                } else {
                    bta_fianl_val = $("#track7_2").val();
                }

                var lang_chk = $("#track_lang").val();
                var lang_fianl_val = "";
                if (lang_chk === "") {
                    lang_fianl_val = "en";
                } else {
                    lang_fianl_val = $("#track_lang").val();
                }

                var request = $.ajax({
                    url: "[[!portalUrl]]api/register",
                    type: "POST",
                    data: {
                        first_name: $("#first_name").val().toString(),
                        last_name: $("#last_name").val().toString(),
                        email: $("#email").val().toString(),
                        phone: $("#phone").val().toString(),
                        platform: $("#platform").val().toString(),
                        country: $("#user_country").val().toString(),
                        entityTypeId: $("#entity_type_id").val().toString(),
                        currency: $("#currency").val().toString(),
                        "fpm-affiliate-pcode": $("#track1_1").val().toString(),
                        "fpm-affiliate-utm-source": $("#track2_1").val().toString(),
                        "fpm-affiliate-utm-campaign": $("#track3_1").val().toString(),
                        "fpm-affiliate-utm-content": $("#track4_1").val().toString(),
                        "fpm-affiliate-agt": $("#track5_1").val().toString(),
                        "_mkto_trk": $("#_mkto_trk").val().toString(),
                        "cxd": $("#track7_1").val().toString(),
                        "bta": bta_fianl_val.toString(),
                        "language": lang_fianl_val.toString(),
                    },
                    dataType: 'json',
                    success: function (response) {
                        $('.email_msg').html("");
                        $('.loader').css('display', 'none');

                        //Now let's check if it was success?
                        if (response.success == true) {

                            //If it's a page redirection?
                            if (response.redirectToUrl != '') {
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
                            if (messagesLength > 0) {

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
                    error: function (response) {
                        $('.email_msg').html("");
                        $('.loader').css('display', 'none');

                        var btn_name_get = $('#btn_name_get').val();
                        $("#thebutton span").text(btn_name_get);
                        $("#thebutton span").removeClass("loaderimg");
                        $("#thebutton").prop('disabled', false).removeClass('btn-disable');

                        // Add margin bottom to email_msg div.
                        $(".email_msg").css('margin-bottom', errorMessageContainerHeight);

                        //Response.
                        var data = response.responseJSON;

                        // Check if we have an object here?
                        if (response.status == 422 && data !== null && typeof data === 'object') {

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
    function GetURLParameter(sParam) {
        var sPageURL = window.location.search.substring(1);
        var sURLVariables = sPageURL.split('&');
        for (var i = 0; i < sURLVariables.length; i++) {
            var sParameterName = sURLVariables[i].split('=');
            if (sParameterName[0] == sParam) {
                return sParameterName[1];
            }
        }
    }

    function parseQueryString() {
        var parsedParameters = {}, uriParameters = location.search.substr(1).split('&');
        for (var i = 0; i < uriParameters.length; i++) {
            var parameter = uriParameters[i].split('=');
            var value = typeof (parameter[1]) !== 'undefined' ? parameter[1] : '';
            parsedParameters[parameter[0]] = decodeURIComponent(value);
        }
        return parsedParameters;
    }/** Convert query params into cookie params */



    function convertAffiliateQueryStringToCookies() {
        console.log("3");

        var params = parseQueryString();

        for (var i in params) {
            if (params.hasOwnProperty(i) && (i.match(/fpm-affiliate/) || i.match(/bta/) || i.match(/cxd/) || i.match(/affiliate-utm-content/) || i.match(/language/))) {
                if (i.match(/bta/) || i.match(/cxd/)) {
                    if (getCookie('fpm-affiliate-' + i) === "") {
                        console.log("3a");
                        document.cookie = 'fpm-affiliate-' + i + '=' + params[i] + '; path=/; domain=.' + window.location.host.split('.').slice(1).join('.') + ';max-age=7776000';
                        document.cookie = i + '=' + params[i] + '; path=/; domain=.' + window.location.host.split('.').slice(1).join('.') + ';max-age=7776000';
                    }
                } else
                    console.log("3b");
                if (getCookie(i) === "") {
                    console.log("3c");
                    document.cookie = i + '=' + params[i] + '; path=/; domain=.' + window.location.host.split('.').slice(1).join('.') + ';max-age=7776000';
                }
            }
        }
    }



    $(document).ready(function () {
        console.log("4");
        convertAffiliateQueryStringToCookies();


        //set default country as AU 
        $("#user_country").val('AU');

        // Get country from IP.
        $.get("https://ipinfo.io?token=8113c8e7b3e768", function (response) {
            $("#user_country").val(response.country);
        }, "jsonp");

        //set default country as AU 
        $("#user_country2").val('AU');

        // Get country from IP.
        $.get("https://ipinfo.io?token=8113c8e7b3e768", function (response) {
            $("#user_country2").val(response.country);
        }, "jsonp");

        var track1 = GetURLParameter('fpm-affiliate-pcode');
        var track2 = GetURLParameter('fpm-affiliate-utm-source');
        var track3 = GetURLParameter('fpm-affiliate-utm-campaign');
        var track4 = GetURLParameter('fpm-affiliate-utm-content');
        var track5 = GetURLParameter('fpm-affiliate-agt');
        var trackterm = GetURLParameter('fpm-affiliate-utm-term');

        var track7_1 = GetURLParameter('cxd');
        var track7_2 = GetURLParameter('bta');
        var track8_1 = GetURLParameter('language');

        $("#track1_1").val(track1);
        $("#track2_1").val(track2);
        $("#track3_1").val(track3);
        $("#track4_1").val(track4);
        $("#track5_1").val(track5);
        $("#track6_1").val(trackterm);
        $("#track7_1").val(track7_1);
        $("#track7_2").val(track7_2);
        $("#track_lang").val(track8_1);
    });

    $(document).ready(function () {
        $(".anchor").click(function (e) {
            $('html, body').animate({
                scrollTop: $($(this).attr('href')).offset().top
            }, 1000);
        });
    });

</script>



<!-- TR  Survery get currency code -->
<script type="text/javascript">

    var curObj = [{ 'cur_id': 'AUD', 'cur_code': 36 }, { 'cur_id': 'CAD', 'cur_code': 124 }, { 'cur_id': 'EUR', 'cur_code': 978 }, { 'cur_id': 'GBP', 'cur_code': 826 }, { 'cur_id': 'HKD', 'cur_code': 344 }, { 'cur_id': 'JPY', 'cur_code': 392 }, { 'cur_id': 'NZD', 'cur_code': 554 }, { 'cur_id': 'SGD', 'cur_code': 702 }, { 'cur_id': 'USD', 'cur_code': 840 }, { 'cur_id': 'IDR', 'cur_code': 360 }, { 'cur_id': 'MYR', 'cur_code': 458 }, { 'cur_id': 'VND', 'cur_code': 704 }, { 'cur_id': 'THB', 'cur_code': 764 }];
    function getCurrency(curId) {
        return $.grep(curObj, function (obj) {
            return obj.cur_id === curId;
        });
    }

</script>




<style>
    .chat-with-telegram {
        display: inline-flex;
        padding-top: 10px;
        padding-left: 5px;
        position: fixed;
        left: 30px;
        bottom: 30px;
        z-index: 99;
        align-items: center;
        height: 46px;
        width: 46px;
        overflow: hidden;
        background-color: #00bdff;
        border-radius: 84px;
        color: white;
        text-decoration: none;
        box-shadow: rgba(0, 0, 0, 0.24) 0 0 18px;
        transition: all 0.1s ease;
    }

    .chat-with-telegram .label {
        padding-right: 20px;
        font-weight: 600;
        text-transform: uppercase;
        font-size: 13px;
        line-height: 14px;
        transition: all 0.1s ease;
        opacity: 0;
        visibility: hidden;
        float: left;
    }

    .chat-with-telegram .icon-wrap {
        float: left;
        position: absolute;
        top: 10px;
    }

    .chat-with-telegram .label span {
        font-size: 11px;
        text-transform: none;
        display: block;
    }

    .chat-with-telegram:hover .label {
        visibility: visible;
        opacity: 1;
        padding-left: 35px;
    }

    .chat-with-telegram:hover {
        width: 185px;
        padding-top: 6px;
        justify-content: space-between;
    }

    .containerrr iframe {
        height: 41px !important;
    }


    .fa-2x {
        font-size: 2em !important;
    }

    .containerrr {

        display: flex;
        display: -webkit-flex;
        -webkit-justify-content: center;
        justify-content: center;
        align-items: left;


    }

    .button {
        z-index: 99;
        position: fixed;
        display: flex;
        justify-content: center;
        align-items: center;
        width: 55px;
        height: 55px;
        background: #01bdff;
        border-radius: 50px;
        color: #fff;
        bottom: 25px;
        box-shadow: 0 0 30px rgb(116 116 116 / 33%);
    }

    .social {
        opacity: 0;
        position: fixed;
        margin: 8px;
        width: 140px;
        height: 40px;
        display: inline-block;
        color: #fff;
        font-size: 20px;
        text-align: center;
        border-radius: 20px;
        margin-bottom: 4px;

    }


    .social a {
        color: #fff;
    }

    .twitter {
        background: #00aced;
        bottom: 280px;
        border: 1px solid rgb(255 255 255 / 60%);
    }

    .instagram {
        background: #00aced;
        bottom: 235px;
    }

    .facebook {
        background: #3b5998;
        bottom: 190px;
    }

    .whatsapp {
        background: #dd4b39;
        bottom: 145px;
    }

    .clicked {
        opacity: 1;
        transition: 1.2s all ease;
        transform: translateY(56px);
    }

    #myAnim {
        animation: pulse-green 3s infinite;
    }

    @keyframes pulse-green {
        0% {
            transform: scale(0.95);
            box-shadow: 0 0 0 0 rgba(0, 189, 255, 0.7);
        }

        70% {
            transform: scale(1);
            box-shadow: 0 0 0 10px rgba(51, 217, 178, 0);
        }

        100% {
            transform: scale(0.95);
            box-shadow: 0 0 0 0 rgba(51, 217, 178, 0);
        }
    }
</style>

<script>
    $(".button").click(function () {
        $(".social.instagram").toggleClass("clicked");
        $(".social.facebook").toggleClass("clicked");
        $(".social.whatsapp").toggleClass("clicked");
        $(".social.twitter").toggleClass("clicked");
    })
</script>

<a href="https://t.me/fpmarketsroom" target="_blank" class="chat-with-telegram">
    <div class="icon-wrap">
        <img src="/wp-content/themes/fptheme/images/tele-icon.jpg">
    </div>
    <div class="label" style="text-align:center;">
        <span style="font-size:12px">Get instant Updates in</span>
        Telegram
    </div>

</a>


<!-- Modal EU Clients SC Entity -->
<div class="container">
    <div class="modal fade" id="scModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true" style="z-index:999999; opacity: 1;" data-keyboard="false" data-backdrop="static">
        <div class="modal-dialog" role="document" style="z-index: 99999;">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title text-center" id="exampleModalLabel"
                        style="font-size:26px;text-transform:none;">Thank you for visiting FP Markets</h3>
                </div>
                <div class="modal-body text-center">
                    <p style="font-size:16px;">The website <a>[[!echoUrl]]</a> is operated by <b>FP Markets LLC</b> an
                        entity that is not established in the EU or regulated by an EU
                        National Competent Authority. The entity falls outside the EU regulatory framework i.e. <a
                            target="_blank" href="https://www.esma.europa.eu/policy-rules/mifid-ii-and-mifir">MiFID
                            II</a> and there is no provision for an Investor Compensation Scheme. <a
                            href="/legal-documents/" target="_blank">Read T & Cs</a></p>
                    <p style="font-size:16px;"><b><u>Please confirm</u></b>, that the decision was made independently at
                        your own exclusive initiative and that no solicitation or recommendation has been made by FP
                        Markets or any other entity within the group.</p>
                </div>
                <div class="modal-footer text-center">
                    <div class="col-md-6">
                        <button type="button" onclick="cookieFunction()" class="btn" data-dismiss="modal"
                            style="border-radius:0px 10px 10px 10px;width: 100%;min-height: 60px;background: #00aeef;font-size: 16px;">CONFIRM<br>
                            <span
                                style="font-size:12px;color:#ffffff!important;text-transform: none;font-style: italic;">(proceed
                                to fpmarkets.com/sc/)</span></button>
                    </div>
                    <div class="col-md-6">
                        <button type="button" class="btn"
                            style="border-radius:0px 10px 10px 10px;width: 100%;min-height: 60px;border:1px solid #00aeef; background:#ffffff;color: #00aeef!important;font-size: 14px;color:#00aeef!important;"><a
                                style="color:#00aeef!important;"
                                href="https://www.fpmarkets.eu?fpm-affiliate-utm-source=Web/Int&fpm-affiliate-pcode=W128-0520-fpmarkets.eu-B019-1">I
                                DO NOT CONFIRM<br>
                                <span
                                    style="font-size:12px;color:#00aeef!important;text-transform: none;font-style: italic;">(recommended
                                    for EU residents)</span></a></button>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- End of Modal EU Clients SC Entity -->




<script>
    /* modal script from EU */
    $(document).ready(function () {

        var entity = document.cookie.indexOf('fpm-entity-pass=');
        var country = "[[!userIP]]";
        if (["DE", "AT", "BE", "BG", "HR", "CZ", "DK", "EE", "FI", "FR", "GR", "HU", "IE", "IT", "LV", "LT", "LU", "MT", "NL", "PL", "PT", "RO", "SK", "SI", "ES", "SE"].includes(country)) {
            if (entity < 0) {
                $('#scModal').modal("show");
            }
        }
        console.log("Footer content loading at - SC");

    });

    function cookieFunction() {
        var today = new Date();
        var date = today.getFullYear() + '-' + (today.getMonth() + 1) + '-' + today.getDate();
        var time = today.getHours() + ":" + today.getMinutes() + ":" + today.getSeconds();
        var dateTime = date + ' ' + time;
        //alert(dateTime);

        document.cookie = "fpm-affiliate-utm-term=" + dateTime + "; path=/; max-age=6592000; domain=fpmarkets.com/sc/;";
        document.cookie = "fpm-entity-pass=" + dateTime + "; path=/; max-age=6592000; domain=fpmarkets.com/sc/;";
    }
</script>