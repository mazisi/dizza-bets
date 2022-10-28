<?php

namespace App\Http\Livewire;

use App\Models\Fixture;
use App\Models\Pool;
use Illuminate\Http\Request;
use Livewire\Component;

class Poool extends Component
{
    public $pool_id = '';
    public $pool_name = '';
    public $fixture_id = '';
    public $m_series = '';

    public function getPoolId($pool_id){
       $getPool = Pool::find($pool_id)->first();
        $this->pool_id = $getPool->id;
        $this->pool_name = $getPool->name;
    }

    public function submitFixtureId(){
        Fixture::create([
            'pool_id' => $this->pool_id,
            'fixture_id' => $this->fixture_id,
            'm_series' => $this->m_series
        ]);
    }

    public function render(){
        $pools = Pool::get();
        return view('livewire.poool',['pools' => $pools]);
    }
}
