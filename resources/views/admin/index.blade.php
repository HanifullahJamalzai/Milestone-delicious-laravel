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
        
        <form action="{{ route('commentStore', ['food' => $item->id]) }}" method="post">
          @csrf
          <input type="text" name="description" placeholder="comment">
          <button>Submit</button>
        </form>
        @foreach ($item->comments as $item)
            <p>
              {{ $item->description }} 
              @if(auth()->user()->id == $item->user_id)
                <a href="{{ route('editComment', ['comment' => $item->id]) }}">Edit</a> <a href="{{ route('deleteComment', ['comment'=> $item->id]) }}">Delete</a> 
              @endif
            </p>
            <hr>
        @endforeach
        
        @endforeach
      </div>

      
    </div>
  </section>

@endsection