<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests;
use App\Http\Controllers\Controller;


class SimpleFunctionsController extends Controller {
   
    public function create_breadcrumbs(){

        $url = "/education/platform-guides/metatrader-4-how-to-fix-common-error-on-mt4-app/";
  
        // Remove the leading slash
        $url = ltrim($url, '/');
        
        // Split the URL by '/'
        $parts = explode('/', $url);
  
        echo "<a href=''>Home</a> / ";
        
        foreach ($parts as $key => $value) {
  
            $value_mod = str_replace('-', ' ', $value);
  
            echo "<a href='".$value."'>".ucfirst($value_mod)."</a>"." / ";
        }
  
      }

}