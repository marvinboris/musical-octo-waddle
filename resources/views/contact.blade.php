@extends('layouts.app')

@section('content')
<section class="contact">
    @component('components.banner', ['title' => 'Contact'])
    @endcomponent
    
    <div class="bg-white py-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <iframe width="100%" height="300" src="https://maps.google.com/maps?q=746%20Rue%20Bou%C3%A9%20De%20Lapeyr%C3%A8re%2C%20Douala&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>

                    <div class="row pt-4">
                        <div class="col-lg-4 pb-lg-0 pb-4">
                            <h3 class="text-blue font-weight-bold text-montserrat-alt">{{ $content['contact']['coordinates'] }}</h3>
                            <div>
                                <div class="d-flex mb-3 align-items-center">
                                    <div class="pr-3 text-center" style="width: 3rem;">
                                        <i class="far fa-map fa-2x text-red"></i>
                                    </div>
                                    <div>
                                        746 Rue Boué de Lapeypère,<br>
                                        Douala<br>
                                        Cameroun
                                    </div>
                                </div>
                                <div class="d-flex mb-3 align-items-center">
                                    <div class="pr-3 text-center" style="width: 3rem;">
                                        <i class="fas fa-mobile-alt fa-2x text-red"></i>
                                    </div>
                                    <div>
                                        <a class="text-dark" href="tel:+237 699 970 543">(+237) 699 970 543</a>  
                                    </div>
                                </div>
                                <div class="d-flex">
                                    <div class="pr-3 text-center" style="width: 3rem;">
                                        <i class="far fa-envelope fa-2x text-red"></i>
                                    </div>
                                    <div>
                                        <a class="text-dark" href="mailto:info@domotecs.com">infos@domotecs.cm</a>
                                    </div>
                                </div>
                            </div>
                        </div>
            
                        <div class="col-lg-8">
                            <h3 class="text-blue font-weight-bold text-montserrat-alt">{{ $content['contact']['message']['title'] }}</h3>
                            <form action="{{ url('contact') }}" method="post">
                                @csrf
                                <div class="row">
                                    <div class="form-group col-md-4">
                                        <input type="text" name="name" class="form-control" required placeholder="{{ $content['contact']['message']['form']['name'] }}">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <input type="email" name="email" class="form-control" required placeholder="{{ $content['contact']['message']['form']['email'] }}">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <input type="text" name="object" class="form-control" required placeholder="{{ $content['contact']['message']['form']['object'] }}">
                                    </div>
                                    <div class="form-group col-12">
                                        <textarea name="message" class="form-control" required placeholder="{{ $content['contact']['message']['form']['message'] }}"></textarea>
                                    </div>
                                    <div class="form-group col-12">
                                        <button class="btn btn-red">{{ $content['contact']['message']['form']['submit'] }}</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection