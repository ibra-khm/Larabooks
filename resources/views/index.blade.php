@section('title', 'Larabooks')
@extends('master')

@section('content')
@if(session()->has('message'))
<div class="toast align-items-center" role="alert" aria-live="assertive" aria-atomic="true">
    <div class="d-flex">
      <div class="toast-body">
        {{session()->get('message')}}
      </div>
      <button type="button" class="btn-close me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
    </div>
  </div>
@endif
<div class="container">
  <div class="my-4">
      <a href="add">
          <button type="button" class="btn btn-secondary btn-rounded"><i class="fas fa-plus"></i> Add New Book</button>
      </a>
  </div>
    <div class="row">
        @unless(count($books) == 0)

        @foreach ($books as $book)
        <div class="col-sm-6">
          <div class="card mb-3" style="max-width: 540px;">
              <a href="/show/{{ $book['id'] }}">
                  <div class="row g-0">
                      <div class="col-md-4  hover-overlay hover-zoom hover-shadow ripple ">
                          <img src="{{ asset('storage/'.$book['image']) }}" alt="..." class="img-fluid rounded-start" />
                      </div>
                      <div class="col-md-8">
                          <div class="card-body">
                              <h5 class="card-title text-black">{{ $book['title'] }}</h5>
                              <p class="card-text text-black">
                                  <small class="text-muted"> {{ $book['description'] }} </small>
                              </p>
                              <p class="card-text">
                                  <small
                                      class="text-muted"><a href="/author/{{$book->author->id}}">{{ $book->author->name }}</a></small>
                              </p>
                              <p class="card-text">
                                <small class="text-muted">
                                    {{ $book['year'] }}</small>
                            </p>
                              {{-- <div> --}}
                              {{-- <a href="books/{{ $book->id }}/edit" class="btn btn-info btn-floating"> --}}
                              {{-- <button type="button" class="btn btn-info btn-floating">
                                      <i class="fas fa-edit"></i>
                                  </button> --}}
                              {{-- </a> --}}
                              {{-- <button type="button" class="btn btn-danger btn-floating">
                                      <i class="fas fa-trash"></i>
                                  </button>
                              </div> --}}
                          </div>
                      </div>
                  </div>
          </div>
            </a>
      </div>
  @endforeach
  @else
  <h1>No Books Found</h1>
  @endunless
  <div class="container d-flex flex-row-reverse">
    <div class="alig p-2 text-center" style="margin-right: 5rem ;">
        {{$books->links()}}
      </div>

  </div>

</div>
@endsection