@extends('admin.layouts.index')
@section('contents')

<div class="pagetitle">
    <h1>Blank Page</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item">Pages</li>
        <li class="breadcrumb-item active">Blank</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section">
    <div class="row">
      <div class="col-lg-6">
        @foreach ($food as $item)
            
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">{{ $item->name }}</h5>
            <p>{{ $item->description }}</p>
          </div>
        </div>
        
        @endforeach
      </div>

      
    </div>
  </section>

@endsection