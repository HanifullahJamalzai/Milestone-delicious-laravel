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
        
        <form action="{{ route('commentUpdate', ['comment' => $comment->id]) }}" method="post">
          @csrf
          @method('put')
          <input type="text" name="description" placeholder="comment" value="{{ $comment->description }}">
          <button>Submit</button>
        </form>
        
      </div>

      
    </div>
  </section>

@endsection