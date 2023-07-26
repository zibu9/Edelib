@extends('layouts.app')

@section('nav')
@include('partials.navbar')
@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            @if (Session::has('promotion'))
                <div class="card">
                    <div class="card-header">{{ __('Ajouter les cours pour') }} {{ Session::get('concerne') }}</div>

                    <div class="card-body">
                        <div class="row">
                            <livewire:course-livewire />
                        </div>
                    </div>
                </div>
                <br>
                <div class="card">
                    <div class="card-header">{{ __('cours pour') }} {{ Session::get('concerne') }}</div>

                    <div class="card-body">
                        <div class="row">
                            <livewire:view-livewire/>
                        </div>
                    </div>
                </div>
            @else
                <div class="card">
                    <div class="card-header">{{ __('Lancer l\'année academique') }}</div>

                    <div class="card-body">
                        <div class="row">
                            <livewire:departement-livewire />
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </div>
</div>
@endsection
