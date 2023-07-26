<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Professor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class CourseLivewire extends Component
{
    public $state = [];
    public $courses;
    public $ponderation;
    public $professors;
    public $prof;
    public function mount(Request $request)
    {
        $this->professors = Professor::all();
    }


    public function store(Request $request)
    {
        DB::table('course_promotion')->insert([
            ['promotionDepartement_id' => $request->session()->get('promo_departement'), 'promotionOption_id' => $request->session()->get('promo_option'), 'annee_academique' => $request->session()->get('academique'),
            'course' => $this->state['course'], 'professor_id' => $this->state['prof'], 'ponderation' => $this->state['ponderation']]
        ]);
        $this->reset('state');
        return Redirect::route('jury.start');
    }

    public function render()
    {
        return view('livewire.course-livewire');
    }
}
