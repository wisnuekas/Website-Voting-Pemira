@extends('layouts.public_master')

@section('title')
  Detail Calon Pemira {{ $pemira->nama_pres }} & {{ $pemira->nama_wapres}}
@endsection

@section('header')
  <header id="navigation">
    <div class="navbar navbar-inverse navbar-fixed-top" role="banner">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#"><h1><img src="/images/bem-logo.jpg" alt="logo"></h1></a>
          <a href="#"><h2><p>Badan Eksekutif Mahasiswa</p></h2></a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-right">
            <li class="scroll"><a href="/">Home</a></li>
            <li class="scroll"><a href="/#stats">Stats</a></li>
            <li class="scroll active"><a href="/#pemira">Calon Pemira</a></li>
            <li class="scroll"><a href="/#contact">Vote !</a></li>
          </ul>
        </div>
      </div>
    </div>
  </header>
@endsection

@section('content')
  <section id="details">
    <div class="container">
      <div class="row text-center clearfix">
        <br/><br/><br/>
        <h2 class="title-one">Detail Calon</h2>
      </div>
    </div>
    <form form id="contact-form" class="contact" name="contact-form" method="post" action="#">
      <div class="container">
        <div class="row text-center clearfix">
          <div class="col-sm-6">
            <div id="details-form-section">
              <div class="text-center">
                <h3>Data Calon Presiden</h3>
                <br/>
              </div>
              <div class="form-group row">
                <label for="nama" class="col-sm-2 col-form-label text-left">Nama</label>
                <div class="col-sm-10">
                  <input type="text" name="nama_pres" class="form-control" disabled value="{{ $pemira->nama_pres }}">
                </div>
              </div>
              <div class="form-group row">
                <label for="nim" class="col-sm-2 col-form-label text-left">NIM</label>
                <div class="col-sm-10">
                  <input type="text" name="nim_pres" class="form-control" disabled value="{{ $pemira->nim_pres }}" >
                </div>
              </div>
              <div class="form-group row">
                <label for="progdi" class="col-sm-2 col-form-label text-left">Progdi</label>
                <div class="col-sm-10">
                  <input type="text" name="progdi_pres" class="form-control" disabled value="{{ $pemira->progdi_pres }}">
                </div>
              </div>
              <div class="form-group row">
                <label for="fakultas" class="col-sm-2 col-form-label text-left">Fakultas</label>
                <div class="col-sm-10">
                  <input type="text" name="fakultas_pres" class="form-control" disabled value="{{ $pemira->fakultas_pres }}">
                </div>
              </div>
              <div class="form-group row">
                <label for="ipk" class="col-sm-2 col-form-label text-left">IPK</label>
                <div class="col-sm-10">
                  <input type="float" name="ipk_pres" class="form-control ipk-field" disabled value="{{ $pemira->ipk_pres}}">
                </div>
              </div>
              <div class="gambar-view-details">
                <img src="{{ '/uploads/'.$pemira->gbr_pres }}" alt="gambar_pres" height="300px"/>
              </div>
            </div>
          </div>
          <div class="col-sm-6">
            <div id="details-form-section">
              <div class="text-center">
                <h3>Data Calon Wakil Presiden</h3>
                <br/>
              </div>
              <div class="form-group row">
                <label for="nama" class="col-sm-2 col-form-label text-left">Nama</label>
                <div class="col-sm-10">
                  <input type="text" name="nama_wapres" class="form-control" disabled value="{{ $pemira->nama_wapres }}">
                </div>
              </div>
              <div class="form-group row">
                <label for="nim" class="col-sm-2 col-form-label text-left">NIM</label>
                <div class="col-sm-10">
                  <input type="text" name="nim_wapres" class="form-control" disabled value="{{ $pemira->nim_wapres }}">
                </div>
              </div>
              <div class="form-group row">
                <label for="progdi" class="col-sm-2 col-form-label text-left">Progdi</label>
                <div class="col-sm-10">
                  <input type="text" name="progdi_wapres" class="form-control" disabled value="{{ $pemira->progdi_wapres }}">
                </div>
              </div>
              <div class="form-group row">
                <label for="Fakultas" class="col-sm-2 col-form-label text-left">Fakultas</label>
                <div class="col-sm-10">
                  <input type="text" name="fakultas_wapres" class="form-control" disabled value="{{ $pemira->fakultas_wapres }}">
                </div>
              </div>
              <div class="form-group row">
                <label for="ipk" class="col-sm-2 col-form-label text-left">IPK</label>
                <div class="col-sm-10">
                  <input type="float" name="ipk_wapres" class="form-control ipk-field" disabled value="{{ $pemira->ipk_wapres }}">
                </div>
              </div>
              <div class="gambar-view-details">
                <img src="{{ '/uploads/'.$pemira->gbr_wapres }}" alt="gambar_wapres" height="300px"/>
              </div>
            </div>
          </div>
        </div>
        <div class="row text-center clearfix">
          <div class="col-sm-6 col-sm-offset-3">
            <br/>
            <div id="details-form-section">
              <div class="form-group row">
                <label for="visi" class="col-sm-2 col-form-label text-left">Visi</label>
                <div class="col-sm-10">
                  <input type="text" name="visi" class="form-control" disabled value="{{ $pemira->visi }}">
                </div>
              </div>
              <div class="form-group row">
                <label for="misi" class="col-sm-2 col-form-label text-left">Misi</label>
                <div class="col-sm-10">
                  <textarea name="misi" id="message" required="required" class="form-control" rows="8" disabled>{{ $pemira->misi }}</textarea>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </form>
  </section>
@endsection
