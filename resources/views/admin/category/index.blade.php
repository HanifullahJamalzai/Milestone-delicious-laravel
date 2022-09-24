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
                            <td>Delete</td>
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