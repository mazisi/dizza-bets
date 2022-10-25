<?php

namespace App\Http\Livewire;

use App\Models\Pool;
use Livewire\Component;

class Poool extends Component
{
    public function render()
    {
        $pools = Pool::get();
        return view('livewire.poool',['pools' => $pools]);
    }
}
