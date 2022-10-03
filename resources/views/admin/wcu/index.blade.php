@extends('admin.layouts.index')

@section('contents')

<div class="pagetitle">
    <h1>Why Choose Us</h1>
    <nav style="display: flex; justify-content: space-between;">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Admin</a></li>
        <li class="breadcrumb-item active">WCU</li>
      </ol>
      <div>

        @cannot('Employee')
          <span class="btn btn-primary btn-sm">
            <a href="{{ route('admin.wcu.create') }}">
              <i class="bi bi-plus" style="font-size: 1.3em; color: white;"></i>
            </a>
          </span>
        @endcannot

      </div>
    </nav>
  </div>


  @include('common.alert')


<section class="section">
    <div class="row align-items-top">

    @foreach ($data as $item)
      <div class="col-lg-3">
        <!-- Card with an image on top -->
        <div class="card">
            <div style="display: flex; justify-content: space-around; padding-top: 0.4em;">
                <a href="{{ route('admin.wcu.edit', ['id' => $item->id]) }}">
                    <i class="bi bi-pencil" style="font-size: 1.3em; color: red;"></i>
                </a>
                <form action="{{ route('admin.wcu.delete', ['id' => $item->id]) }}" method="POST">
                    @csrf
                    @method('delete')
                    <button type="submit" style="border: none">
                        <i class="bi bi-trash" style="font-size: 1.3em; color: red;"></i>
                    </button>
                </form>
            </div>
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