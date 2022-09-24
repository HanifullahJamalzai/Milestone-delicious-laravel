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
        {{-- <span class="btn btn-primary btn-sm">
            <i class="bi bi-plus" style="font-size: 1.3em;"></i>
        </span> --}}
      </div>
    </nav>
  </div>



    <section class="section">
        <div class="row align-items-top">

            <div class="col-lg-12">

                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title">General Form Elements</h5>
      
                    <!-- General Form Elements -->
                    <form action="{{ route('admin.wcu.store') }}" id="form" method="post">
                        @csrf

                      <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">Title</label>
                        <div class="col-sm-10">
                          <input type="text" name="title" class="form-control" value="{{ old('title')  }}">
                        </div>
                        @error('title') 
                            <span class="text text-danger">{{ $message }}</span>
                        @enderror
                      </div>
                      
                      <div class="row mb-3">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Description</label>
                        <div class="col-sm-10">
                          <textarea class="form-control" name="description" style="height: 100px">{{ old('description') }}</textarea>
                        </div>
                            @error('description') 
                                <span class="text text-danger">{{ $message }}</span>
                            @enderror
                      </div>
                      
                      <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">Submit Button</label>
                        <div class="col-sm-10">
                          <button type="submit" class="btn btn-primary" id="submit">Submit Form</button>
                        </div>
                      </div>
      
                    </form><!-- End General Form Elements -->
      
                  </div>
                </div>
      
              </div>

   

        </div>
    </section>




@endsection

