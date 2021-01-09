<?php

namespace App\Http\Livewire;

use App\Models\Skill;
use Carbon\Carbon;
use Livewire\Component;

class Skillsform extends Component
{
    public $name;
    public $label;
    public $percent;
    public $ids;

    protected $rules = [
        'name' => 'required|max:20',
        'label' => 'required|max:20',
        'percent' => 'required|integer|between:1,100',
    ];

    public function skillAdd()
    {
        $this->validate();
        Skill::create(
            [
                'name'=>$this->name,
                'label'=>$this->label,
                'percent'=>$this->percent,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),
            ]
        );
        $this->dispatchBrowserEvent('closeModal');

        $this->emit('refreshParent');
    }



    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function render()
    {
        return view('livewire.skillsform');
    }
}
