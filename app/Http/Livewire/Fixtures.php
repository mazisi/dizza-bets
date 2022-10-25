<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class Fixtures extends Component
{
    public $query = '';

    public function render()
    {
         // jvBQK8BXWGeFJ84Y4rod7HCIjKO9xr3S26ad6owdw72xQCKIhF1U1U2rDWlV
         if(!empty($this->query)){
            $response = Http::get('https://soccer.sportmonks.com/api/v2.0/fixtures/'.$this->query, [
                'api_token' => 'jvBQK8BXWGeFJ84Y4rod7HCIjKO9xr3S26ad6owdw72xQCKIhF1U1U2rDWlV'
            ]);
            dd($response->json());
         }
         
        return view('livewire.fixtures');
    }
}
