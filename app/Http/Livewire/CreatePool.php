<?php

namespace App\Http\Livewire;

use App\Models\Pool;
use Livewire\Component;

class CreatePool extends Component
{
    public $poolName = '';

    public function submitPool()
    {
        $this->validate(['poolName' => 'required']);
        Pool::create(['name' => $this->poolName]);
    }

    public function render()
    {
        
        return view('livewire.create-pool');
    }
}
