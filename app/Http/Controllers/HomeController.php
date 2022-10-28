<?php

namespace App\Http\Controllers;

use App\Models\Fixture;
use App\Models\Pool;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{

    public function index(){
       
        $pools = Pool::get(); 
        
        return view('welcome',['pools' => $pools]);
    }

    public function view_pool_data($id){
        $pool = Pool::whereId($id)->first();
        $fixtures = array();
        foreach($pool->fixtures as $fixture) {
        $response = Http::get('https://soccer.sportmonks.com/api/v2.0/fixtures/'.$fixture->fixture_id.'?api_token=jvBQK8BXWGeFJ84Y4rod7HCIjKO9xr3S26ad6owdw72xQCKIhF1U1U2rDWlV&include=localTeam,visitorTeam,events')->json();
           $fixtures[] = $response;
        }

        
       return view('view_pool_fixture',['fixtures' => $fixtures, 'pool' => $pool]);
    }

    public static function getMSeries($fixture_id){
        $fix = Fixture::where('fixture_id',$fixture_id)->first();
        return $fix->m_series;
    }
}
