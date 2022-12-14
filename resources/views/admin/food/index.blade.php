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
                            <td><a href="{{ route('food.show', ['food'=> $item->id]) }}"> {{Str::limit($item->name, 5, '...')  }}</a></td>
                            {{-- <td>{{ $item->category_id }}</td> --}}
                            <td>{{ $item->category->name ?? 'No Category' }}</td>
                            <td>{{ $item->price }}</td>
                            @can('view', $item)
                              <td><a href="{{ route('food.myedit', ['food' => $item->id, 'slug' => Str::slug($item->name, '-')]) }}">Edit</a></td>
                            @endcan
                            <td>
                              
                              @can('delete', $item)

                              {{-- @if(auth()->user()->role == 1) --}}

                              <x-delete-component action="food.destroy" routeId="food" :item="$item" />
                              
                                {{-- <form action="{{ route('food.destroy', ['food' => $item]) }}" method="post">
                                  @csrf
                                  @method('delete')
                                  <button type="submit" class="btn btn-danger" >Delete</button>
                                </form> --}}

                              {{-- @endif --}}
                              
                              @endcan

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