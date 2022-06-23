@extends('templates/struct/layouts')

@section('container')

<div class="row justify-content-center" style="background-image: url('img/jumbotronKonsultasi.webp')" id="jumbotronGetStarted">
    <div class="col-lg-4">
        <div class="nav-bar mt-5">
            <img src="{{url('img/group 30.png')}}">
        </div>
        <div class="col">
            <h1 class="h1 fw-bold text-nowrap">Solusi kesehatan terlengkap, Hello Medicine!</h1>
        </div>
        <img src="{{url('img/4799082.png')}}" id="photoGet">
        <a href="/login">
            <button class="w-100 btn btn-lg btn-primary mt-5" type="submit" style="background-color:#023E8A; border: none;" id="button"><b>Get Started 
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                   <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
                </svg></b>
            </button>
        </a>
    </div>
</div>
@endsection