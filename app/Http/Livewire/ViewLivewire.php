<?php

namespace App\Http\Livewire;

use App\Models\Professor;
use Livewire\Component;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ViewLivewire extends Component
{
    public $professors;
    public $courses;

    public function mount(Request $request)
    {
        $this->courses = DB::table('course_promotion')->where('annee_academique', $request->session()->get('academique'))
                                                ->where('promotionDepartement_id', $request->session()->get('promo_departement'))
                                                ->orWhere('promotionOption_id', $request->session()->get('promo_option'))
                                                ->get();
        $this->professors = new Professor();
    }

    public function render()
    {
        return view('livewire.view-livewire');
    }
}
