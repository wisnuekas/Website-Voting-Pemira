@extends('layouts.panitia_master')

@section('title')
  Daftar Calon Pemira
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

            <li class=""><a href="#">Daftar Calon</a></li>
            <li class="active logout"><a href="/logout">Logout</a></li>
          </ul>
        </div>
    </div>
  </header>
@endsection

@section('content')
  <section id="calon">
    <div class="list-pemira">
        <div class="col-sm-6 col-sm-offset-3 text-center clearfix ">
          <br><br>
          <div class="title-one">
            DAFTAR CALON
          </div>
          <br><br>
        </div>
        @foreach ($pemiras as $pemira)
          <div class="container">
              <div class="calon col-sm-8 col-sm-offset-2">
                <div class="calon-images col-sm-4">
                  <img src="{{ 'uploads/'.$pemira->gbr_pres_wapres }}" alt="calon" />
                </div>
                <div class="col-sm-8">
                  <div class="row nama">
                    <h3>{{ $pemira->nama_pres }} &amp; {{ $pemira->nama_wapres }}</h3>
                  </div>
                  <div class="row">
                    <div class="col-sm-6 tombol">
                      <div class="text-left">
                        <a href="/pemira/{{ $pemira->id}}/view">
                          <btn type="button" class="btn btn-warning" name="edit">
                            <span class="glyphicon glyphicon-user"></span> View
                          </btn>
                        </a>
                        <a href="/pemira/{{ $pemira->id}}/edit">
                          <btn type="button" class="btn btn-success" name="edit">
                            <span class="glyphicon glyphicon-edit"></span> Edit
                          </btn>
                        </a>
                        {{-- <input type="button" class="btn btn-warning" name="edit" value="Edit" onclick="location.href = 'edit.html';"/> --}}
                      </div>
                    </div>


                    <div class="col-sm-6 tombol">
                      <div class="text-right">
                        <form action="/pemira/{{ $pemira->id }}" method="post">
                          <button type="submit" class="btn btn-danger" name="delete"> <span class="glyphicon glyphicon-trash"></span></button>
                          {{ csrf_field() }}
                          <input type="hidden" name="_method" value="DELETE">
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
          </div>
        @endforeach

    </div>
  </section>
@endsection
