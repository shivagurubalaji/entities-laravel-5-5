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

      public function Github_WebHook(Request $request){

        // Extract the necessary information from the webhook payload
        $payload = $request->all();
        //$repository = $payload['repository']['name'];
        //$branch = $payload['ref'];
  
        // Perform any additional validation or filtering if needed
  
        // Execute the post-receive hook or trigger the deployment process
        //if ($branch === 'refs/heads/master') {
            $output = shell_exec('bash /var/www/eu/deploy_uat.sh');
            // Optionally, handle the output or perform other actions based on the deployment result
        //}
  
        // Return a response to acknowledge the webhook request
        return response()->json(['message' => 'Webhook received'], 200);
  
      }

}