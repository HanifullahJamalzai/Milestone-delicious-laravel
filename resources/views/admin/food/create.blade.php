@extends('admin.layouts.index')

@section('contents')


  @include('common.alert')
{{-- 
@php
    dd($categories)
@endphp --}}
<section class="section">
    <div class="row align-items-top">

        <div class="card">

            <div class="card-body">
                <h5 class="card-title">Floating labels Form</h5>
                
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
  
                <!-- Floating Labels Form -->
                <form class="row g-3" action="{{ route('food.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('post')

                  <div class="col-md-12">
                    <div class="form-floating">
                      <input type="text" name="name" class="form-control" id="floatingName" placeholder="Your Name" value="{{ old('name') }}">
                      <label for="floatingName">Food Name</label>
                    </div>
                  </div>

                  <div class="col-12">
                    <div class="form-floating">
                      <textarea class="form-control" placeholder="description" name="description" id="floatingTextarea" style="height: 100px;">{{ old('description') }}</textarea>
                      <label for="floatingTextarea">Description</label>
                    </div>
                  </div>

                  <div class="col-md-4">
                    <div class="form-floating">
                      <input type="text" name="price" class="form-control" id="floatingPassword" placeholder="Password" value="{{ old('price') }}">
                      <label for="floatingPassword">Price</label>
                    </div>
                  </div>

                  <div class="col-md-4">
                    <div class="col-md-12">
                      <div class="form-floating">
                        <input type="file" name="photo" class="form-control" id="floatingCity">
                      </div>
                    </div>
                  </div>

                  <div class="col-md-4">
                    <div class="form-floating mb-3">
                      <select class="form-select" id="floatingSelect" name="category_id">
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                      </select>
                      <label for="floatingSelect">Category</label>
                    </div>
                  </div>

                  <div class="text-center">
                    <button type="submit" class="btn btn-primary w-100">Submit</button>
                  </div>
                </form>
  
              </div>

              
    </div>
  </section>





@endsection