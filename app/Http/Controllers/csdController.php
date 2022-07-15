<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\unep_projects;

class csdController extends Controller
{
    public function csd(){
        $results = DB::select("SELECT * FROM unep_projects order by ProjectID ASC");
           $array = json_decode(json_encode($results), true);
           return response()->json($results);           
          //echo '<pre>',print_r($array),'</pre>'; 
        }
public function api(){
        $url ="http://127.0.0.1:8000/csd/";
        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

        $headers = array(
        "Accept: application/json",
        );
        curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
        //for debug only!
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

        $resp = curl_exec($curl);
        curl_close($curl);
      $api = json_decode(json_encode($resp), true);
      return response()->json($api);

}

}
