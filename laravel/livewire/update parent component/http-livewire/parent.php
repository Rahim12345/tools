<?php

namespace App\Http\Livewire;

use App\Models\Skill;
use Livewire\Component;

class Skills extends Component
{

    protected $listeners = ['refreshParent'=>'$refresh'];

    public function render()
    {
        return view('livewire.skills',[
            'skills'=>Skill::orderBy('id','desc')->get()
        ]);
    }
}
