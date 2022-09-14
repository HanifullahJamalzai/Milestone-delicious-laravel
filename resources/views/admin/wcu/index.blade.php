@extends('admin.layouts.index')

@section('contents')
{{-- 
@php
    dd($data);
@endphp --}}

<div class="pagetitle">
    <h1>Why Choose Us</h1>
    <nav style="display: flex; justify-content: space-between;">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Admin</a></li>
        <li class="breadcrumb-item active">WCU</li>
      </ol>
      <div>
        <span class="btn btn-primary btn-sm">
            <i class="bi bi-plus" style="font-size: 1.3em;"></i>
        </span>
      </div>
    </nav>
  </div>



<section class="section">
    <div class="row align-items-top">

    @foreach ($data as $item)
      <div class="col-lg-3">
        <!-- Card with an image on top -->
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">{{ $item->title }}</h5>
            <p class="card-text">{{ $item->description }}</p>
          </div>
        </div><!-- End Card with an image on top -->
      </div>
    @endforeach

    </div>
  </section>





@endsection