@extends('admin.layouts.index')

@section('contents')

<div class="pagetitle">
    {{-- <h1>Why Choose Us</h1> --}}
    <nav style="display: flex; justify-content: space-between;">
      
      <div class="search-bar">
        <form class="search-form d-flex align-items-center" method="GET" action="{{ route('food.search') }}">
          <input type="text" name="search" placeholder="Search" title="Enter search keyword">
          <button type="submit" title="Search"><i class="bi bi-search"></i></button>
        </form>
      </div><!-- End Search Bar -->


      <div>
        <span class="btn btn-primary btn-sm">
            <a href="{{ route('food.create') }}">
                <i class="bi bi-plus" style="font-size: 1.3em; color: white;"></i>
            </a>
        </span>
      </div>
      <div>
        <span class="btn btn-primary btn-sm">
            <a href="{{ route('food.trash') }}">
                <i class="bi bi-trash" style="font-size: 1.3em; color: white;"></i>
            </a>
        </span>
      </div>
    </nav>
  </div>


  @include('common.alert')


<section class="section">
   <h1>{{ $food->description }}</h1>
  </section>





@endsection