@extends('layouts.app')

@section('content')
    <h1>Halaman About</h1>
    <div class="container mt-5">
    <div class="row">
        <div class="col-sm-12">
          <div class="shadow p-3 mb-5 bg-body rounded">
            <div class="row">
              <div class="col-md-6">
                <div class="row">
                  <div class="col-sm-6 col-md-5">
                    <div class="about-img">
                      <img src="assets/image/{{ $image }}" class="img-fluid rounded b-shadow-a" alt="{{ $image }}">
                    </div>
                  </div>
                  <div class="col-sm-6 col-md-7">
                    <div class="about-info">
                      <p class="lead"><span><strong>Name: </strong></span> <span>{{ $name }}</span></p>
                      <p class="lead"><span><strong>Profile: </strong></span> <span>backend developer</span></p>
                      <p class="lead"><span><strong>Email:  </strong></span> <span>{{ $email }}</span></p>
                    </div>
                  </div>
                </div>
                <div class="skill-mf">
                  <h3>Skill</h3>
                  <span>HTML</span> <span class="pull-right">20%</span>
                  <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 20%;" aria-valuenow="8205" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <span>CSS3</span> <span class="pull-right">10%</span>
                  <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <span>PHP</span> <span class="pull-right">25%</span>
                  <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <span>JAVASCRIPT</span> <span class="pull-right">10%</span>
                  <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="about-me pt-5 pt-md-0">
                  <div class="title-box-2">
                    <h5 class="title-left">
                      About me
                    </h5>
                  </div>
                  <p class="lead">
                    Saya sedang menjalani pendidikan D4 Sistem Informasi Bisnis di Politeknik Negeri Malang.
                    Beberapa kali saya mengambil job diluar perkuliahan, seperti design brand.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    {{-- <h3>{{ $name }}</h3>
    <p>{{ $email }}</p>
    <img src="assets/image/{{ $image }}" alt="{{ $image }}" width="200"> --}}
@endsection



