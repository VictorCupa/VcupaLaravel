<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FirtsControlller extends Controller
{
    public function index(Request $request){
        $curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://www.google.com/search?q=sportline&rlz=1C1VDKB_esCO1051CO1051&oq=sportline&gs_lcrp=EgZjaHJvbWUyDwgAEEUYORiDARixAxiABDIHCAEQABiABDINCAIQABiDARixAxiABDIHCAMQABiABDINCAQQLhivARjHARiABDIPCAUQLhgKGMcBGNEDGIAEMgcIBhAAGIAEMgcIBxAAGIAEMgcICBAAGIAEMg0ICRAAGIMBGLEDGIAE0gEIMjgwN2owajeoAgCwAgA&sourceid=chrome&ie=UTF-8',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'GET',
  CURLOPT_HTTPHEADER => array(
    'Upgrade-Insecure-Requests: 1',
    'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/117.0.0.0 Safari/537.36',
    'sec-ch-ua: "Google Chrome";v="117", "Not;A=Brand";v="8", "Chromium";v="117"',
    'sec-ch-ua-arch: "x86"',
    'sec-ch-ua-bitness: "64"',
    'sec-ch-ua-full-version: "117.0.5938.92"',
    'sec-ch-ua-full-version-list: "Google Chrome";v="117.0.5938.92", "Not;A=Brand";v="8.0.0.0", "Chromium";v="117.0.5938.92"',
    'sec-ch-ua-mobile: ?0',
    'sec-ch-ua-model: ""',
    'sec-ch-ua-platform: "Windows"',
    'sec-ch-ua-platform-version: "15.0.0"',
    'sec-ch-ua-wow64: ?0',
    'Cookie: 1P_JAR=2023-09-25-03; AEC=Ad49MVGwSdXSZYVo8AOn62dLO-jAqQFWR0-TtMn-TilMeMEQJiYhONxQxFI; NID=511=FwFlbu_kDrzf7tuOSSFvCzvJk7PWouK3qmOmZ_ZpC31-pthq3GGilUS7Bjtg_q-KqNUGxUP3moYJgJzYUS7v8ahYOoMAOkww8vUyLRW54dFOF7-DNWO3Me2_wv1HTuxjli9wBXIC-CgvG5btm9bZNRqSO4ngLBvbApcjlKurd9o'
  ),
));

$response = curl_exec($curl);

curl_close($curl);
return view('google',['result'=>$response]);
    }
}
