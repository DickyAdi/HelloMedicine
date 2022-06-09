@extends('templates/struct/layouts')

@section('container')
@include('templates/components/navbar')
<div class="row" id="apotek">
    <div class="col d-flex justify-content-center">
        <h1 class="fw-bold" id="apotekTerdekat">DAFTAR APOTEK TERDEKAT</h1>
    </div>
</div>
<div class="row">
    <div class="col d-flex justify-content-center">
        <h4 class="fw-bold" id="apotekTerdekat">Temukan Apotek Terdekat Anda</h4>
        <hr style="height: 2px">
    </div>
</div>

{{-- START JUMBTRON --}}
<div class="p-5 mb-4 bg-light" id="jumbotronApotek" style="background-image: url('img/Apotek3.jpg')">
    <div class="container-fluid">
        <div class="row">
        </div>
    </div>
</div>
{{-- END JUMBOTRONNNN --}}
<div class="container" id="apotekInf">
    <div class="row">
        <div class="row">
            <div class="col d-flex justify-content-center">
                <h1 class="fw-bold" id="apotekTerdekat">JABODETABEK</h1>
            </div>
            <hr style="height: 2px">
        </div>
        <div class="row mt-5">
            <div class="col" id="apotekInf">
                <div class="row">
                    <div class="col-4 align-items-center" id="apotekInf">
                        <a href="#" style="text-decoration: none; color:black">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title text-center fw-bold" style="color: #1D3557">Apotek Kimia Farma Mutiara Taman Palem 550</h5>
                                    <p>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                                        <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                                        </svg> 
                                        City Resort Residence Rukan Miami C17E, Cengkareng Timur, Kecamatan Cengkareng, Kota Jakarta Barat
                                    </p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-4 align-items-center" id="apotekInf">
                        <a href="#" style="text-decoration: none; color:black">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title text-center fw-bold" style="color: #1D3557">Apotek K 24</h5>
                                    <p>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                                        <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                                        </svg> 
                                        Jl. Percetakan Negara II No.14, Johar Baru, Johar Baru,  Jakarta Pusat
                                    </p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-4 align-items-center" id="apotekInf">
                        <a href="#" style="text-decoration: none; color:black">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title text-center fw-bold" style="color: #1D3557">Apotek Johanes</h5>
                                    <p>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                                        <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                                        </svg> 
                                        Jl. Kapuk Raya No.52, Kapuk, Cengkareng, Jakarta Barat
                                    </p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-4 align-items-center" id="apotekInf">
                        <a href="#" style="text-decoration: none; color:black">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title text-center fw-bold" style="color: #1D3557">Guna Sehat Klinik & Apotek</h5>
                                    <p>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                                        <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                                        </svg> 
                                        Jl. Raya Pondok Gede. 50A / Kav. 4, Jatirahayu, Pd. Melati, Bekasi
                                    </p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-4 align-items-center" id="apotekInf">
                        <a href="#" style="text-decoration: none; color:black">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title text-center fw-bold" style="color: #1D3557">Apotek K-24 Raya Hankam</h5>
                                    <p>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                                        <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                                        </svg> 
                                        Jl. Raya Hankam No.380,  Jatimurni,  Pd. Melati, Bekasi
                                    </p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-4 align-items-center" id="apotekInf">
                        <a href="#" style="text-decoration: none; color:black">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title text-center fw-bold" style="color: #1D3557">Apotek k-24 Bintaro Permai</h5>
                                    <p>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                                        <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                                        </svg> 
                                        Jl. Bintaro Permai No.5, Pesanggrahan, Pesanggrahan, Jakarta Selatan
                                    </p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-4 align-items-center" id="apotekInf">
                        <a href="#" style="text-decoration: none; color:black">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title text-center fw-bold" style="color: #1D3557">Apotik Medicare</h5>
                                    <p>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                                        <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                                        </svg> 
                                        Jl. Kyai Caringin No.2, Cideng, Gambir, Jakarta Pusat
                                    </p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-4 align-items-center" id="apotekInf">
                        <a href="#" style="text-decoration: none; color:black">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title text-center fw-bold" style="color: #1D3557">Apotek Bintang Tujuh</h5>
                                    <p>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                                        <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                                        </svg> 
                                        Jl. Raya Hankam No.150, Jatiranggon, Jatisampurna, Bekasi
                                    </p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-4 align-items-center" id="apotekInf">
                        <a href="#" style="text-decoration: none; color:black">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title text-center fw-bold" style="color: #1D3557">Apotek Kimia Farma Utama Raya</h5>
                                    <p>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                                        <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                                        </svg> 
                                        Jl. Utama Raya No.44, Cengkareng Barat, Cengkareng, Jakarta Barat
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
