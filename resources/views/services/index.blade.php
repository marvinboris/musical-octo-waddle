@extends('layouts.app')

@section('content')
<section class="services">
    @component('components.banner', ['title' => $content['services']['title']])
    @endcomponent
    
    <div class="bg-white py-5">
        <div class="container">
            <div>
                <p class="text-center">
                    {{ $content['services']['subtitle'] }}
                </p>
                
                <div class="row">
                    @foreach ($content['services']['content'] as $service)
                        @component('components.home.service', $service)
                        @endcomponent
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
@endsection