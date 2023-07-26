<?php

namespace App\Http\Livewire;

use App\Models\Option;
use Livewire\Component;
use App\Models\Promotion;
use App\Models\Departement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class DepartementLivewire extends Component
{
    public $departements;
    public $options;
    public $promotions;

    public $checkPromotion = 1;

    public $selectDepartement = NULL;
    public $selectOption = NULL;
    public $selectPromotion = NULL;
    public $anneeAcademique = NULL;

    public function mount()
    {
        $this->promotions = Promotion::all();
        $this->departements = collect();
        $this->options = collect();
    }
    public function render()
    {
        return view('livewire.departement-livewire');
    }
    public function updatedSelectDepartement($id)
    {
        if (!empty($id))
        {
            $departements = Departement::find($id);
            $this->options = $departements->options;

        }
    }

    public function store(Request $request)
    {
        $request->session()->put('acad_year',$this->anneeAcademique);
        $request->session()->put('promotion',$this->selectPromotion);
        $request->session()->put('departement',$this->selectDepartement);
        $promo = Promotion::find($this->selectPromotion);
        $depart = Departement::find($this->selectDepartement);
        if($this->selectOption){
            $request->session()->put('option',$this->selectOption);
            $option = Option::find($this->selectOption);
            $opt = $option->content;
            $result = DB::table('promotion_option')->where('option_id', $this->selectOption)
                                                        ->where('promotion_id', $this->selectPromotion)
                                                        ->first();
            $request->session()->put('promo_option', $result->id);
        }
        else{
            $result1 = DB::table('promotion_departement')->where('departement_id', $this->selectDepartement)
                                                    ->where('promotion_id', $this->selectPromotion)
                                                    ->first();
            $opt = '';
            $request->session()->put('promo_departement', $result1->id);
        }
        $chaine = $promo->content." ".$depart->content." ".$opt."(".$this->anneeAcademique.")";
        $request->session()->put('concerne', $chaine);
        $request->session()->put('academique', $this->anneeAcademique);
        return Redirect::route('jury.start');

    }

    public function updatedSelectPromotion($id)
    {
        if (!empty($id))
        {
            if($id < 4)
            {
                $departements = Departement::all();
                $this->departements = $departements;
                $this->checkPromotion = 1;

            }
            elseif($id > 3 && $id < 6)
            {
                $departements = Departement::all();
                $this->departements = $departements;
                $this->checkPromotion = 2;
            }
        }
    }
}
