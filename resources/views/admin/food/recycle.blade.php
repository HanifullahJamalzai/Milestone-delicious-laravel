@extends('admin.layouts.index')

@section('contents')

<div class="pagetitle">
    <h1>Why Choose Us</h1>
    <nav style="display: flex; justify-content: space-between;">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Admin</a></li>
        <li class="breadcrumb-item active">Food</li>
      </ol>
      <div>
        <span class="btn btn-primary btn-sm">
            <a href="{{ route('food.create') }}">
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
                    <th scope="col">Photo</th>
                    <th scope="col">Name</th>
                    <th scope="col">Category</th>
                    <th scope="col">Price</th>
                    <th scope="col" colspan="2">Action</th>
                  </tr>
                </thead>
                <tbody>
                    @php
                        $x = 1;
                    @endphp
                    @foreach ($foods as $item)
                        <tr>
                            <th scope="row">{{ $x++ }}</th>
                            <td>
                                <img src="{{ $item->photo }}" alt="" width="50">
                            </td>
                            <td>{{ $item->name }}</td>
                            {{-- <td>{{ $item->category_id }}</td> --}}
                            <td>{{ $item->category->name ?? 'No Category' }}</td>
                            <td>{{ $item->price }}</td>
                            <td><a href="{{ route('food.edit', ['food' => $item->id]) }}">Edit</a></td>
                            <td>
                                <a  href="{{ route('food.restoreItem', ['food' => $item]) }}" class="btn btn-success" >restore</a>
                            </td>
                            <td>
                              <form action="{{ route('food.pdelete', ['food' => $item]) }}" method="post">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger" >PDelete</button>
                              </form>
                            </td>
                        </tr>
                    @endforeach
                  
                </tbody>
              </table>
              <!-- End Table with hoverable rows -->

              {{ $foods->links() }}

            </div>
          </div>

    </div>
  </section>





@endsection