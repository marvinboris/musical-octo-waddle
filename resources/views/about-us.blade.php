@extends('layouts.app')

@section('content')
<section class="about-us">
    @component('components.banner', ['title' => $content['about-us']['title']])
    @endcomponent
    
    <div class="bg-white py-5">
        <div class="container">
            <div class="row mb-4">
                <div class="col-md-6 order-2">
                    <img src="{{ asset('images/NoPath - Copie (3)@2x.png') }}" alt="Under home page banner 1" class="img-fluid img-thumbnail">
                </div>
                <div class="col-md-6 order-1">
                    <h2 class="tet-montserrat-alt font-weight-bold text-montserrat-alt text-blue">{{ $content['about-us']['title'] }}</h2>
                    <p class="text-italic">
                        {!! $content['about-us']['text'] !!}
                    </p>
                </div>
                <div class="col-12 text-center order-3 pt-4 pb-4">
                    <a href="{{ asset('docs/CATALOGUE D’OFFRES.pdf') }}" class="btn btn-red btn-lg font-weight-bold"><i class="fas fa-download mr-2"></i>{{ $content['about-us']['catalog'] }}</a>
                </div>
            </div>
    
            <div class="row mb-4">
                <div class="col-md-6">
                    <h2 class="text-montserrat-alt text-blue font-weight-bold">{{ $content['about-us']['missions']['title'] }}</h2>
                    {!! $content['about-us']['missions']['text'] !!}
                </div>
                <div class="col-md-6">
                    <img src="{{ asset('images/NoPath - Copie (8)@2x.png') }}" alt="Under home page banner 1" class="img-fluid img-thumbnail">
                </div>
            </div>
        </div>
    </div>
    
    <div class="container-fluid bg-blue text-white py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-6 text-center">
                    <h1 class="font-weight-bold">+25</h1>
                    <span class="text-large">{{ $content['about-us']['information']['projects'] }}</span>
                </div>
                <div class="col-md-3 col-6 text-center">
                    <h1 class="font-weight-bold">+20</h1>
                    <span class="text-large">{{ $content['about-us']['information']['clients'] }}</span>
                </div>
                <div class="col-md-3 col-6 text-center">
                    <h1 class="font-weight-bold">+10</h1>
                    <span class="text-large">{{ $content['about-us']['information']['partners'] }}</span>
                </div>
                <div class="col-md-3 col-6 text-center">
                    <h1 class="font-weight-bold">0</h1>
                    <span class="text-large">{{ $content['about-us']['information']['awards'] }}</span>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection