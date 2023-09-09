<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use App\Models\MainIndex;
use App\Models\ModxContent;

class PageLoadController extends Controller
{
    
    public function initiate(Request $request, $entity, $lang, $page_uri){

        try{

            $countryCode = @$_SERVER['HTTP_CF_IPCOUNTRY'];

            $int_countries = ['IN', 'RO'];
            $au_countries = ['AU'];
            $sc_countries = ['IT', 'UK', 'AE'];
            $ke_countries = ['KE'];
            $intmu_countries = ['MY', 'SG', 'IT'];
            $bhs_countries = ['US'];
    
            //if (in_array($value, $array)) {
            //    // Value is present in the array
            //    echo "Value is present";
            //} else {
            //    // Value is not present in the array
            //    echo "Value is not present";
            //}
    
            switch ($entity) {
                case "int":
                    // Code to execute if $value is 1
                    break;
                case "au":
                    // Code to execute if $value is 2
                    break;
                case "sc":
                    // Code to execute if $value is 3
                    if($lang == 'ae-en'){
    
                        $get_index_data = MainIndex::where('page_uri','=', $page_uri.'/')->first();
    
                        $get_content = ModxContent::where('uri','=', $page_uri.'/')->where('context_key','=', 'web')->first();
    
                        $get_breadcrumb = $this->create_breadcrumbs($page_uri);
    
                        $get_portalurl = $this->portalUrl();
    
                        $get_nationality = $this->getNationality();
    
                        $data_from_controller = [
                            'countryCode' => $countryCode,
                            'get_breadcrumb' => $get_breadcrumb,
                            'get_portalurl' => $get_portalurl,
                            'get_nationality' => $get_nationality
                        ];
    
                        if($get_index_data->template_id == 44){
                            /* */
                            return view('templates.empty_article_shares', compact('get_index_data', 'get_content', 'data_from_controller'));
                        }elseif($get_index_data->template_id == 5){
                            return view('templates.empty_html', compact('get_index_data', 'data_from_controller'));
                        }elseif($get_index_data->template_id == 33){
                            return view('templates.empty_blog', compact('get_index_data', 'get_content', 'data_from_controller'));
                        }elseif($get_index_data->template_id == 41){
                            return view('templates.empty_sharesEN', compact('get_index_data', 'get_content', 'data_from_controller'));
                        }elseif($get_index_data->template_id == 47){
                            return view('templates.empty_article_education', compact('get_index_data', 'get_content', 'data_from_controller'));
                        }elseif($get_index_data->template_id == 3){
                            /* */
                            return view('templates.empty_content', compact('get_index_data', 'get_content', 'data_from_controller'));
                        }elseif($get_index_data->template_id == 46){
                            /* */
                            return view('templates.empty_html_articles', compact('get_index_data', 'get_content', 'data_from_controller'));
                        }elseif($get_index_data->template_id == 0){
                            /* */
                        }elseif($get_index_data->template_id == 11){
                            /* */
                        }elseif($get_index_data->template_id == 6){
                            /* */
                        }elseif($get_index_data->template_id == 12){
                            /* */
                        }elseif($get_index_data->template_id == 13){
                            /* Education Webminar Pages */
                            return view('templates.upcoming_webinar', compact('get_index_data', 'get_content', 'data_from_controller'));
                        }elseif($get_index_data->template_id == 4){
                            /* */
                        }elseif($get_index_data->template_id == 8){
                            /* */
                            return view('templates.empty_landing_page', compact('get_index_data', 'get_content', 'data_from_controller'));
                        }elseif($get_index_data->template_id == 7){
                            /* Thank you page */
                            return view('templates.empty_no_hero', compact('get_index_data', 'data_from_controller'));
                        }elseif($get_index_data->template_id == 35){
                            /* Thank you page */
                            return view('templates.contact_us_temp', compact('get_index_data', 'data_from_controller'));
                        }elseif($get_index_data->template_id == 31){
                            /* Thank you page */
                            return view('templates.empty_landing_noFooter', compact('get_index_data', 'data_from_controller'));
                        }else{
    
                        }
    
                    }
                    break;
                case "ke":
                    //
                    break;
                case "intmu":
                    //
                    break;
                case "bhs":
                    //
                    break;           
                default:
                    // Code to execute if $value does not match any case
                    return view('pageloader');
            }
    
        }catch(Exception $e){

            return view('blocks.error.404');

        }

    }

    public function home(Request $request, $lang){

        $countryCode = @$_SERVER['HTTP_CF_IPCOUNTRY'];

        //if (in_array($value, $array)) {
        //    // Value is present in the array
        //    echo "Value is present";
        //} else {
        //    // Value is not present in the array
        //    echo "Value is not present";
        //}

        $entity = "sc";

        $get_portalurl = $this->portalUrl();

        $get_nationality = $this->getNationality();

        $data_from_controller = [
            'countryCode' => $countryCode,
            'get_portalurl' => $get_portalurl,
            'get_nationality' => $get_nationality
        ];


        switch ($entity) {
            case "int":
                // Code to execute if $value is 1
                break;
            case "au":
                // Code to execute if $value is 2
                break;
            case "sc":
                // Code to execute if $value is 3
                if($lang == 'ae-en'){

                    $get_index_data = MainIndex::where('page_uri','=', 'index/')->first();

                    if($get_index_data->template_id == 32){
                        return view('templates.seychelles_home', compact('get_index_data', 'data_from_controller'));
                    }else{

                    }

                }
                break;
            case "ke":
                //
                break;
            case "intmu":
                //
                break;
            case "bhs":
                //
                break;           
            default:
                // Code to execute if $value does not match any case
                echo "error";
        }


    }

    public function decide(Request $request, $page_uri){

        echo "Sorry, you have reached 404";

    }

    public function create_breadcrumbs($page_uri){

        $url = $page_uri;
  
        // Remove the leading slash
        $url = ltrim($url, '/');
        
        // Split the URL by '/'
        $parts = explode('/', $url);
  
        $breadcrumb = "<li><a href=''>Home</a></li>";
        
        // Iterate through the $parts array using a foreach loop
        foreach ($parts as $key => $value) {
  
            $value_mod = str_replace('-', ' ', $value);
  
            $breadcrumb = $breadcrumb . "<li><a href='".$value."'>".ucfirst($value_mod)."</a>"."</li>";
        }

        return $breadcrumb;
  
    }

    public static function portalUrl(){

        $url = 'https://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
        $host = $_SERVER['HTTP_HOST'];
        preg_match("/[^\.\/]+\.[^\.\/]+$/", $host, $matches);
        $domain = $matches[0];
        $parsedUrl = parse_url($url);
        $uriParts = explode('/', $parsedUrl['path']);
        $entity = $uriParts[1];
        $lang = $uriParts[2];
        //$countryCode=@$_SERVER['HTTP_CF_IPCOUNTRY'];
        $countryCode = 'ae';
        
        $stvportal = 'https://portal.'.$domain.'/int-EN/';
        $asicportal = 'https://portal.'.$domain.'/';
        $scportal = 'https://portal.'.$domain.'/sc-EN/';
        $bhsportal = 'https://portal.'.$domain.'/int-EN/';
        
        if ($entity == 'sc') {
            switch ($lang) {
                //switch based on $lang value
                case "ae-ar":
                $scportal = 'https://portal.'.$domain.'/sc-AR/';  
                break;
                default:
                $scportal = 'https://portal.'.$domain.'/sc-EN/';  
            }
            return $scportal;


        } elseif ($entity == 'int'){
            // Add logic for International STV countries - default will be set to int-EN
            $stvportal = 'https://portal.'.$domain.'/int-EN/';
            return $stvportal;

        } elseif ($entity == 'au') {
            $asicportal = 'https://portal.'.$domain.'/';
            return $asicportal;

        } elseif ($entity == 'bhs') {
            $bhsportal = 'https://portal.'.$domain.'/int-EN/';
            return $bhsportal;
        }
        else {
            $intCountries = array('PK','TT'); // STV Country List (INT)
            $auCountries = array('AU'); // Asic Country List
            $scCountries = array('BG','AE'); // Seychelles Country List
            $bhsCountries = array('BS'); // Bahamas Country List
            if (in_array($countryCode, $intCountries)) { 
                return $stvportal;
            }
            elseif (in_array($countryCode, $scCountries)){
                return $scportal;
            }
            elseif (in_array($countryCode, $auCountries)){
                return $asicportal;
            }
            elseif (in_array($countryCode, $bhsCountries)){
                return $bhsportal;
            }

        }
        
    }

    public static function getNationality(){

        $countryCode = null;
        $CountryFullName = null;
        $countryCode=@$_SERVER['HTTP_CF_IPCOUNTRY'];
    
        if($countryCode){
            $json_contents = '{"BD":"Bangladesh","BE":"Belgium","BF":"Burkina Faso","BG":"Bulgaria","BA":"Bosnia and Herzegovina","BB":"Barbados","WF":"Wallis and Futuna","BL":"Saint Barthelemy","BM":"Bermuda","BN":"Brunei","BO":"Bolivia","BH":"Bahrain","BI":"Burundi","BJ":"Benin","BT":"Bhutan","JM":"Jamaica","BV":"Bouvet Island","BW":"Botswana","WS":"Samoa","BQ":"Bonaire, Saint Eustatius and Saba ","BR":"Brazil","BS":"Bahamas","JE":"Jersey","BY":"Belarus","BZ":"Belize","RU":"Russia","RW":"Rwanda","RS":"Serbia","TL":"East Timor","RE":"Reunion","TM":"Turkmenistan","TJ":"Tajikistan","RO":"Romania","TK":"Tokelau","GW":"Guinea-Bissau","GU":"Guam","GT":"Guatemala","GS":"South Georgia and the South Sandwich Islands","GR":"Greece","GQ":"Equatorial Guinea","GP":"Guadeloupe","JP":"Japan","GY":"Guyana","GG":"Guernsey","GF":"French Guiana","GE":"Georgia","GD":"Grenada","GB":"United Kingdom","GA":"Gabon","SV":"El Salvador","GN":"Guinea","GM":"Gambia","GL":"Greenland","GI":"Gibraltar","GH":"Ghana","OM":"Oman","TN":"Tunisia","JO":"Jordan","HR":"Croatia","HT":"Haiti","HU":"Hungary","HK":"Hong Kong","HN":"Honduras","HM":"Heard Island and McDonald Islands","VE":"Venezuela","PR":"Puerto Rico","PS":"Palestinian Territory","PW":"Palau","PT":"Portugal","SJ":"Svalbard and Jan Mayen","PY":"Paraguay","IQ":"Iraq","PA":"Panama","PF":"French Polynesia","PG":"Papua New Guinea","PE":"Peru","PK":"Pakistan","PH":"Philippines","PN":"Pitcairn","PL":"Poland","PM":"Saint Pierre and Miquelon","ZM":"Zambia","EH":"Western Sahara","EE":"Estonia","EG":"Egypt","ZA":"South Africa","EC":"Ecuador","IT":"Italy","VN":"Vietnam","SB":"Solomon Islands","ET":"Ethiopia","SO":"Somalia","ZW":"Zimbabwe","SA":"Saudi Arabia","ES":"Spain","ER":"Eritrea","ME":"Montenegro","MD":"Moldova","MG":"Madagascar","MF":"Saint Martin","MA":"Morocco","MC":"Monaco","UZ":"Uzbekistan","MM":"Myanmar","ML":"Mali","MO":"Macao","MN":"Mongolia","MH":"Marshall Islands","MK":"Macedonia","MU":"Mauritius","MT":"Malta","MW":"Malawi","MV":"Maldives","MQ":"Martinique","MP":"Northern Mariana Islands","MS":"Montserrat","MR":"Mauritania","IM":"Isle of Man","UG":"Uganda","TZ":"Tanzania","MY":"Malaysia","MX":"Mexico","IL":"Israel","FR":"France","IO":"British Indian Ocean Territory","SH":"Saint Helena","FI":"Finland","FJ":"Fiji","FK":"Falkland Islands","FM":"Micronesia","FO":"Faroe Islands","NI":"Nicaragua","NL":"Netherlands","NO":"Norway","NA":"Namibia","VU":"Vanuatu","NC":"New Caledonia","NE":"Niger","NF":"Norfolk Island","NG":"Nigeria","NZ":"New Zealand","NP":"Nepal","NR":"Nauru","NU":"Niue","CK":"Cook Islands","XK":"Kosovo","CI":"Ivory Coast","CH":"Switzerland","CO":"Colombia","CN":"China","CM":"Cameroon","CL":"Chile","CC":"Cocos Islands","CA":"Canada","CG":"Republic of the Congo","CF":"Central African Republic","CD":"Democratic Republic of the Congo","CZ":"Czech Republic","CY":"Cyprus","CX":"Christmas Island","CR":"Costa Rica","CW":"Curacao","CV":"Cape Verde","CU":"Cuba","SZ":"Swaziland","SY":"Syria","SX":"Sint Maarten","KG":"Kyrgyzstan","KE":"Kenya","SS":"South Sudan","SR":"Suriname","KI":"Kiribati","KH":"Cambodia","KN":"Saint Kitts and Nevis","KM":"Comoros","ST":"Sao Tome and Principe","SK":"Slovakia","KR":"South Korea","SI":"Slovenia","KP":"North Korea","KW":"Kuwait","SN":"Senegal","SM":"San Marino","SL":"Sierra Leone","SC":"Seychelles","KZ":"Kazakhstan","KY":"Cayman Islands","SG":"Singapore","SE":"Sweden","SD":"Sudan","DO":"Dominican Republic","DM":"Dominica","DJ":"Djibouti","DK":"Denmark","VG":"British Virgin Islands","DE":"Germany","YE":"Yemen","DZ":"Algeria","US":"United States","UY":"Uruguay","YT":"Mayotte","UM":"United States Minor Outlying Islands","LB":"Lebanon","LC":"Saint Lucia","LA":"Laos","TV":"Tuvalu","TW":"Taiwan","TT":"Trinidad and Tobago","TR":"Turkey","LK":"Sri Lanka","LI":"Liechtenstein","LV":"Latvia","TO":"Tonga","LT":"Lithuania","LU":"Luxembourg","LR":"Liberia","LS":"Lesotho","TH":"Thailand","TF":"French Southern Territories","TG":"Togo","TD":"Chad","TC":"Turks and Caicos Islands","LY":"Libya","VA":"Vatican","VC":"Saint Vincent and the Grenadines","AE":"United Arab Emirates","AD":"Andorra","AG":"Antigua and Barbuda","AF":"Afghanistan","AI":"Anguilla","VI":"U.S. Virgin Islands","IS":"Iceland","IR":"Iran","AM":"Armenia","AL":"Albania","AO":"Angola","AQ":"Antarctica","AS":"American Samoa","AR":"Argentina","AU":"Australia","AT":"Austria","AW":"Aruba","IN":"India","AX":"Aland Islands","AZ":"Azerbaijan","IE":"Ireland","ID":"Indonesia","UA":"Ukraine","QA":"Qatar","MZ":"Mozambique"}';
            $key = $countryCode;
            $jsonObj = json_decode($json_contents);
            $CountryFullName = $jsonObj->$key;
        }else{
            $CountryFullName = "Missing_Country_Name";
        }

        return $CountryFullName;

    }

    public static function test(Request $request){

        $get_index_data = MainIndex::where('page_uri','=', 'index/')->first();

        $get_content = ModxContent::where('uri','=', $page_uri.'/')->where('context_key','=', 'web')->first();

        var_dump($get_content);

    }

}
