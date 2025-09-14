<?php

namespace App\Livewire\Production;

use App\Models\Production;
use Livewire\Component;

class Index extends Component
{
    public $data = [];
    public function render()
    {
        $this->data = Production::orderBy('created_at', 'desc')->get();
        return view('livewire.production.index');
    }
}
