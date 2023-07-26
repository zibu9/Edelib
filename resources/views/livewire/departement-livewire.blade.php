<div>
    <form class="row justify-content-center">
        <div class="col-md-8">
            @csrf
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Année academique</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="2020-2021" wire:model="anneeAcademique" name="academique" value="{{ old('name', '') }}">
                @error('academique')
                    <p class="text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-3">
                <select  wire:model="selectPromotion" class="form-select" aria-label="Default select example" name="promotion">
                    <option selected>Choisir la promotion</option>
                    @foreach ($promotions as $promotion)
                        <option value="{{$promotion->id}}">{{$promotion->content}}</option>
                    @endforeach
                </select>
                @error('promotion')
                    <p class="text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
            @if (!is_null($selectPromotion))
                <div class="mb-3">
                    <select wire:model="selectDepartement" name="departement" class="form-select" aria-label="Default select example">
                        <option selected>Choisir le Departement</option>
                        @foreach ($departements as $departement)
                        <option value="{{$departement->id}}">{{$departement->content}}</option>
                        @endforeach
                    </select>
                    @error('departement')
                        <p class="text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
            @endif
            @if (!is_null($selectDepartement))
                @if ($checkPromotion == 2)
                    <div class="mb-3">
                        <select wire:model="selectOption" name="option" class="form-select" aria-label="Default select example">
                            <option selected>Choix de l'Option</option>
                            @foreach ($options as $option)
                            <option value="{{$option->id}}">{{$option->content}}</option>
                            @endforeach
                        </select>
                        @error('option')
                            <p class="text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                @endif
                <button type="submit" wire:click.prevent="store" class="btn btn-primary">{{__('Suivant')}}</button>
            @endif
        </div>
    </form>
</div>
