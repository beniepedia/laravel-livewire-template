<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;

class Muatan extends Component
{
    #[Title('Muatan')]
    public function render()
    {
        return view('livewire.muatan');
    }
}
