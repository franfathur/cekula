@extends('dashboard.main')

@section('content')
<div class="header-schedule">
    <div class="d-flex align-items-center px-4">
        <a href="#" class="text-white "><i class="bi bi-arrow-left"></i></a>
        <span class="text-white mx-auto">Data Mutasi Murid</span>
    </div>
  </div>
  
  <main class="mb-4">
      <div id="content-jadwal">
        <div class="container py-4">
          <div class="row justify-content-center">
              <div class="col-md-10">
                  <form action="#" method="" enctype="multipart/form-data">
                    @csrf
                      @include('dashboard.administrasi.mutasi_murid._form.form')
                  </form>
              </div>
          </div>
      </div>
      </div>
  </main>
@endsection