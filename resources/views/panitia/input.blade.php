@extends('layouts.panitia_master')

@section('title')
  Input Calon Pemira
@endsection

@section('header')
  <header id="navigation">
    <div class="navbar navbar-inverse navbar-fixed-top" role="banner">
      <nav class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#"><h1><img src="images/bem-logo.jpg" alt="logo"></h1></a>
          <a href="#"><h2><p>Badan Eksekutif Mahasiswa</p></h2></a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-right">
            @if (count($pemiras) == 3)
              <li class=""><a href="javascript:alertMaks();">Input Calon</a></li>
            @else
              <li class=""><a href="/input">Input Calon</a></li>
            @endif
            <li class=""><a href="/list">Daftar Calon</a></li>
            <li class="active logout"><a href="/logout">Logout</a></li>
          </ul>
        </div>
    </div>
  </header>
@endsection

@section('content')
  <section id="contact">
    <div class="container">
      <div class="row text-center clearfix">
        <br><br><br>
        <h2 class="title-one">Input Calon</h2>
        <br>
      </div>
    </div>
    <form form id="contact-form" class="contact" name="input-pemira-form" method="post" action="{{ action('PemiraController@store') }}" enctype="multipart/form-data">
      <div class="container">
        <div class="row text-center clearfix">
          <div class="col-sm-6">
            <div id="details-form-section">
              <div class="text-center">
                <h3>Data Calon Presiden</h3>
                <br/>
              </div>
              <div class="form-group row">
                <label for="inputNama" class="col-sm-2 col-form-label text-left">Nama</label>
                <div class="col-sm-10">
                  <input type="text" name="nama_pres" class="form-control" required="required" placeholder="Nama">
                </div>
              </div>
              <div class="form-group row">
                <label for="inputNim" class="col-sm-2 col-form-label text-left">NIM</label>
                <div class="col-sm-10">
                  <input type="text" name="nim_pres" class="form-control" required="required" placeholder="NIM">
                </div>

              </div>
              <div class="form-group row">
                <label for="inputNim" class="col-sm-2 col-form-label text-left">Progdi</label>
                <div class="col-sm-10">
                  <input type="text" name="progdi_pres" class="form-control" required="required" placeholder="Progdi">
                </div>

              </div>
              <div class="form-group row">
                <label for="inputNama" class="col-sm-2 col-form-label text-left">Fakultas</label>
                <div class="col-sm-10">
                  <input type="text" name="fakultas_pres" class="form-control" required="required" placeholder="Fakultas">
                </div>

              </div>
              <div class="form-group row">
                <label for="inputIPK" class="col-sm-2 col-form-label text-left">IPK</label>
                <div class="col-sm-10">
                  <input type="float" name="ipk_pres" class="form-control ipk-field" required="required" placeholder="IPK">
                </div>
              </div>
              <div class="form-group row">
                <label class="col-sm-2 col-form-label text-left">Foto Pres</label>
                <div class="col-sm-10">
                  <input type="file" name="gbr_pres" >
                </div>
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
                <label for="inputNama" class="col-sm-2 col-form-label text-left">Nama</label>
                <div class="col-sm-10">
                  <input type="text" name="nama_wapres" class="form-control" required="required" placeholder="Nama">
                </div>
              </div>
              <div class="form-group row">
                <label for="inputNim" class="col-sm-2 col-form-label text-left">NIM</label>
                <div class="col-sm-10">
                  <input type="text" name="nim_wapres" class="form-control" required="required" placeholder="NIM">
                </div>

              </div>
              <div class="form-group row">
                <label for="inputNim" class="col-sm-2 col-form-label text-left">Progdi</label>
                <div class="col-sm-10">
                  <input type="text" name="progdi_wapres" class="form-control" required="required" placeholder="Progdi">
                </div>

              </div>
              <div class="form-group row">
                <label for="inputNama" class="col-sm-2 col-form-label text-left">Fakultas</label>
                <div class="col-sm-10">
                  <input type="text" name="fakultas_wapres" class="form-control" required="required" placeholder="Fakultas">
                </div>

              </div>
              <div class="form-group row">
                <label for="inputIPK" class="col-sm-2 col-form-label text-left">IPK</label>
                <div class="col-sm-10">
                  <input type="float" name="ipk_wapres" class="form-control ipk-field" required="required" placeholder="IPK">
                </div>
              </div>
              <div class="form-group row">
                <label class="col-sm-2 col-form-label text-left">Foto Wapres</label>
                <div class="col-sm-10">
                  <input type="file" name="gbr_wapres">
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row text-center clearfix">
          <div class="col-sm-6 col-sm-offset-3">
            <br/>
            <div id="details-form-section">
              <div class="form-group">
                <input type="text" name="visi" class="form-control" required="required" placeholder="Visi">
              </div>
              <div class="form-group">
                <textarea name="misi" id="message" required="required" class="form-control" rows="8" placeholder="Misi"></textarea>
              </div>
              <div class="form-group row">
                <label class="col-sm-2 col-form-label text-left">Foto Pres & Wapres</label>
                <div class="col-sm-10">
                  <input type="file" name="gbr_pres_wapres" >
                </div>
              </div>
              <div class="form-group">
                @if (count($pemiras) == 3)
                  <button type="button" class="btn btn-primary" onclick="alertMaks();">Input</button>
                @else
                  <button type="submit" class="btn btn-primary">Input</button>
                @endif
              </div>
            </div>
          </div>
        </div>
      </div>
      {{ csrf_field() }}
    </form>
  </section>
@endsection
