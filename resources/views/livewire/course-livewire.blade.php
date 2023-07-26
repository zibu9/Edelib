<div>
    <div class="row justify-content-center">
        <form class="col-md-8">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Cours</label>
                <input type="text" wire:model="state.course" class="form-control">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Ponderation</label>
                <input type="text" wire:model="state.ponderation" class="form-control">
            </div>
            <div class="mb-3" wire:ignore>
                <select wire:model="state.prof" class="form-select" required name="state.professor" value="">
                    <option selected value="">--Choisir Professeur--</option>
                    @foreach ($professors as $professor)
                        <option value="{{$professor->id}}">{{ $professor->first_name }} {{ $professor->name }} {{ $professor->surname }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" wire:click.prevent="store" class="btn btn-primary">{{__('Ajouter')}}</button>
        </form>
    </div>

    <script>
        document.addEventListener('livewire:load', function(){
            $('.form-select').select2();
            $('.form-select').on('change', function(){
             @this.set('state.prof', this.value);
            });
        })
    </script>
</div>
