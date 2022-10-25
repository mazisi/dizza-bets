<?php

namespace App\Http\Livewire;

use App\Models\Pool;
use Livewire\Component;

class Nav extends Component
{

    public function getPools()
    {
        
    }

    public function render()
    {
        $pools = Pool::get();
        return view('livewire.nav');
    }
}
