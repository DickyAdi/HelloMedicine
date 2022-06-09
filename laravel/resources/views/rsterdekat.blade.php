@extends('templates/struct/layouts')

@section('container')
@include('templates/components/navbar')
<div class="row" id="rs">
    <div class="col d-flex justify-content-center">
        <h1 class="fw-bold" id="rsTerdekat">DAFTAR RUMAH SAKIT TERDEKAT</h1>
    </div>
</div>
<div class="row">
    <div class="col d-flex justify-content-center">
        <h4 class="fw-bold" id="rsTerdekat">Temukan Rumah Sakit Terdekat Anda</h4>
        <hr style="height: 2px">
    </div>
</div>

{{-- START JUMBTRON --}}
<div class="p-5 mb-4 bg-light" id="jumbotronRS" style="background-image: url('img/hospital.png')">
    <div class="container-fluid">
        <div class="row">
        </div>
    </div>
</div>
{{-- END JUMBOTRONNNN --}}
<div class="container" id="rsInf">
    <div class="row">
        <div class="row">
            <div class="col d-flex justify-content-center">
                <h1 class="fw-bold" id="rsTerdekat">JABODETABEK</h1>
            </div>
            <hr style="height: 2px">
        </div>
        <div class="row mt-5">
            <div class="col" id="rsInf">
                <div class="row">
                    <div class="col-4 align-items-center" id="rsInf">
                        <a href="#" style="text-decoration: none; color:black">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title text-center fw-bold" style="color: #1D3557">Siloam Hospital Asri</h5>
                                    <p>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                                        <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                                        </svg> 
                                        Jl. Duren Tiga Raya No. 20, Duren Tiga, Jakarta Selatan
                                    </p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-4 align-items-center" id="rsInf">
                        <a href="#" style="text-decoration: none; color:black">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title text-center fw-bold" style="color: #1D3557">Rumah Sakit Pelni</h5>
                                    <p>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                                        <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                                        </svg> 
                                        Jl. K.S. Tubun No.92 - 94, Slipi, Palmerah, Jakarta Barat
                                    </p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-4 align-items-center" id="rsInf">
                        <a href="#" style="text-decoration: none; color:black">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title text-center fw-bold" style="color: #1D3557">RSUP Dr. Cipto Mangunkusumo</h5>
                                    <p>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                                        <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                                        </svg> 
                                        Jl. Salemba Raya No. 71, Jakarta Pusat, DKI Jakarta
                                    </p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-4 align-items-center" id="rsInf">
                        <a href="#" style="text-decoration: none; color:black">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title text-center fw-bold" style="color: #1D3557">Rumah Sakit Jakarta</h5>
                                    <p>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                                        <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                                        </svg> 
                                        Jl. Jend. Sudirman No.Kav 49, Karet Semanggi, Setiabudi, Jakarta Selatan
                                    </p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-4 align-items-center" id="rsInf">
                        <a href="#" style="text-decoration: none; color:black">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title text-center fw-bold" style="color: #1D3557">Rumah Sakit Antam Medika</h5>
                                    <p>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                                        <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                                        </svg> 
                                        Jl. Pemuda No.1A, Jatinegara Kaum, Pulo Gadung, Jakarta Timur
                                    </p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-4 align-items-center" id="rsInf">
                        <a href="#" style="text-decoration: none; color:black">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title text-center fw-bold" style="color: #1D3557">RSUP Fatmawati</h5>
                                    <p>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                                        <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                                        </svg> 
                                        Jl. RS. Fatmawati Raya No.4, Cilandak Barat, Cilandak, Jakarta Selatan
                                    </p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-4 align-items-center" id="rsInf">
                        <a href="#" style="text-decoration: none; color:black">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title text-center fw-bold" style="color: #1D3557">RS Hermina Daan Mogot</h5>
                                    <p>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                                        <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                                        </svg> 
                                        Jl. Kintamani Raya No.2, Kalideres, Kalideres, Jakarta Barat
                                    </p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-4 align-items-center" id="rsInf">
                        <a href="#" style="text-decoration: none; color:black">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title text-center fw-bold" style="color: #1D3557">RS Harapan Kita</h5>
                                    <p>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                                        <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                                        </svg> 
                                        Jl. Letjen S. Parman No.Kav.87, Bambu Utara, Palmerah, Jakarta Barat
                                    </p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-4 align-items-center" id="rsInf">
                        <a href="#" style="text-decoration: none; color:black">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title text-center fw-bold" style="color: #1D3557">RSIA Sepatan Mulia</h5>
                                    <p>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                                        <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                                        </svg> 
                                        Jl. Raya Pakuhaji No.3, Sepatan, Sepatan, Tangerang
                                    </p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('templates/components/footer')
@endsection
