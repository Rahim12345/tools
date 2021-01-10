<?php

namespace App\Http\Livewire;

use App\Models\Education;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithPagination;

class Educations extends Component
{
    use WithPagination;

    public $rowID;
    public $specialty;
    public $university;
    public $interval;

    // Exist Ruses
    protected $rules = [
        'specialty' => 'required|max:50',
        'university' => 'required|max:50',
        'interval' => 'required|max:12',
    ];

    //realtime validation
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    // to reset inputs
    public function resetInputFields()
    {
        $this->specialty     = '';
        $this->university    = '';
        $this->interval      = '';
    }

    // Education Add
    public function educationAdd()
    {
        $this->validate();

        Education::create(
            [
                'specialty'     => $this->specialty,
                'university'    => $this->university,
                'interval'      => $this->interval,
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now(),
            ]
        );
        $this->dispatchBrowserEvent('closeAddModal',['type' => 'success',  'title'=> 'Adding','message' => 'finished successfully']);

        $this->resetInputFields();
    }

    // Education Remove
    public function remove($id)
    {
        Education::destroy($id);

        $this->resetPage();
    }

    public function read($id)
    {
        $this->rowID         = $id;

        $edu                 = Education::find($id);

        $this->specialty     = $edu->specialty;
        $this->university    = $edu->university;
        $this->interval      = $edu->interval;
    }

    public function educationUpdate()
    {
        Education::whereId($this->rowID)
            ->update([
                'specialty' =>$this->specialty,
                'university'=>$this->university,
                'interval'  =>$this->interval,
            ]);
        $this->dispatchBrowserEvent('educationUpdate', ['type' => 'success',  'title'=> 'Updating','message' => 'finished successfully']);

        $this->resetInputFields();
    }
    
    public function render()
    {
        return view('livewire.educations',[
            'educations'=>Education::orderBy('id','desc')
                            ->paginate(2)
                            ->onEachSide(0)
        ]);
    }
}
