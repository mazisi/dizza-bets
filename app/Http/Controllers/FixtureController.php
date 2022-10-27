<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class FixtureController extends Controller
{
    public function fixtures()
    {       
            // $response = Http::get('https://soccer.sportmonks.com/api/v2.0/countries/320/teams', [
            //     'api_token' => 'jvBQK8BXWGeFJ84Y4rod7HCIjKO9xr3S26ad6owdw72xQCKIhF1U1U2rDWlV'
            // ]);

            // $data = $response->json();
            // foreach ($data['data'] as $dt) {

            //     Team::create([
            //         'team_id' => $dt['id'],
            //         'name' => $dt['name'],
            //         'short_code' => $dt['short_code'],
            //         'country_id' => $dt['country_id'],
            //         'logo_path' => $dt['logo_path'],
            //         'current_season_id' => $dt['current_season_id'],
            //     ]);
            //     }
           
  

// $val = intval(65);
// $response = Http::get('https://soccer.sportmonks.com/api/v2.0/countries', [
//     'api_token' => 'jvBQK8BXWGeFJ84Y4rod7HCIjKO9xr3S26ad6owdw72xQCKIhF1U1U2rDWlV'
// ]);

// $data = $response->json();
// foreach ($data['data'] as $dt) {
//     Country::create([
//         'country_id' => $dt['id'],
//         'name' => $dt['name'],
//         'image_path' => $dt['image_path']
//   ]);
// }dd('done');
  
        // $response = Http::get('https://soccer.sportmonks.com/api/v2.0/countries/'.$val.'/teams', [
        //             'api_token' => 'jvBQK8BXWGeFJ84Y4rod7HCIjKO9xr3S26ad6owdw72xQCKIhF1U1U2rDWlV'
        //         ]);
        
        
        return view('all_fixture');
    }
}
