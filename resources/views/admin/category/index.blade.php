@extends('admin.layouts.index')

@section('contents')

<div class="pagetitle">
    <h1>Why Choose Us</h1>
    <nav style="display: flex; justify-content: space-between;">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Admin</a></li>
        <li class="breadcrumb-item active">Category</li>
      </ol>
      <div>
        <span class="btn btn-primary btn-sm">
            <a href="{{ route('category.create') }}">
                <i class="bi bi-plus" style="font-size: 1.3em; color: white;"></i>
            </a>
        </span>
      </div>
    </nav>
  </div>


  @include('common.alert')

  <div class="card">
    <div class="card-body">
      <h5 class="card-title">Horizontal Form</h5>

      <!-- Horizontal Form -->
      <form action="{{ (isset($category)) ? route('category.update',['category' => $category]) : route('category.store') }}" method="Post">
        @csrf
        @if(isset($category))
          @method('put')
        @endif

        <div class="row mb-3">
          <label for="inputEmail3" class="col-sm-2 col-form-label">Your Name</label>
          <div class="col-sm-10">
            <input type="text" name="name" class="form-control" id="inputText" value="{{ (isset($category)) ? $category->name : Null}}" >
          </div>
        </div>
        </div>
        
        <div class="text-center">
          <button type="submit" class="btn {{ isset($category) ? 'btn-success' : 'btn-primary' }} ">{{ isset($category) ? 'Update Category' : 'Store Category' }}</button>
        </div>
      </form><!-- End Horizontal Form -->

    </div>
  </div>



<section class="section">
    <div class="row align-items-top">

        <div class="card">
            <div class="card-body">
              <h5 class="card-title">Table with hoverable rows</h5>

              <!-- Table with hoverable rows -->
              <table class="table table-hover text-center">
                <thead>
                  <tr >
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col" colspan="2">Action</th>
                  </tr>
                </thead>
                <tbody>
                    @php
                        $x = 1;
                    @endphp
                    @foreach ($categories as $item)
                        <tr>
                            <th scope="row">{{ $x++ }}</th>
                            <td>{{ $item->name }}</td>
                            <td><a href="{{ route('category.edit', ['category' => $item->id]) }}">Edit</a></td>
                            <td>
                              <x-delete-component action="category.destroy" routeId="category" :item="$item" />
                            </td>
                        </tr>
                    @endforeach
                  
                </tbody>
              </table>
              <!-- End Table with hoverable rows -->

            </div>
          </div>

    </div>
  </section>





@endsection