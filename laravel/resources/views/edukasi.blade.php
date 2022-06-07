@extends('templates/struct/layouts')

@section('container')
@include('templates/components/navbar')

<div class="container-fluid mb-5">
    <div class="row mt-5 mb-5">
        <div class="row">
            <h1 class="fw-bold">ARTIKEL EDUKASI</h1>
        </div>
        <div class="row">
            <div class="container mt-4 mb-4" id="contEdu">
                <div class="row row-cols-3 g-3" id="cardEdu">
                    @if($dumbFuck!=null)
                        @foreach($dumbFuck as $df)
                        <a href="#" class="text-decoration-none">
                            <div class="card bg-transparent p-2">
                                <img src="{{ asset('img/dummyPhoto.jpg') }}" class="rounded">
                                <h1 class="card-title">{{ $df["title"] }}</h1>
                                <p class="card-text">{{ $df["exert"] }}</p>
                            </div>
                        </a>
                        @endforeach
                    @else
                    <h1 class="fw-bold">NO POST YET! FUCK</h1>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

@include('templates/components/footer')
@endsection