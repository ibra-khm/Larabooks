@extends('master')
@section('content')
    <div class="container w-25 mt-3">
    <form action="/edit/{{$book->id}}" method="POST">
        @csrf
        <div class="mb-2">
            <label for="title" class="form-label">Title</label>
            <input name="title" type="text" class="form-control" id="title" value="{{ $book->title }}" aria-describedby="emailHelp">
            @error('title')
            <div id="emailHelp" class="form-text">
              {{$message}}
            </div>
            @enderror
          </div>
          
          <div class="mb-2">
            <label for="author" class="form-label">Author</label>
            <input name="author" type="text" class="form-control" id="author" value="{{ $book->author->name }}">
            @error('author')
            <div id="emailHelp" class="form-text">
              {{$message}}
            </div>
            @enderror
          </div>
          <div class="mb-2">
              <label for="country" class="form-label">Origin Country</label>
              <input name="country" type="text" class="form-control" id="country" aria-describedby="emailHelp" value="{{ $book->country }}">
              @error('country')
              <div id="emailHelp" class="form-text">
                {{$message}}
              </div>
              @enderror
            </div>
            <div class="mb-2">
              <label for="language" class="form-label">Language</label>
              <input name="language" type="text" class="form-control" id="language" aria-describedby="emailHelp" value="{{ $book->language }}">
              @error('language')
              <div id="emailHelp" class="form-text">
                {{$message}}
              </div>
              @enderror
            </div>
            <div class="mb-2">
              <label for="pages" class="form-label">Number of Pages</label>
              <input name="pages" type="text" class="form-control" id="pages" aria-describedby="emailHelp" value="{{ $book->pages }}">
              @error('pages')
              <div id="emailHelp" class="form-text">
                {{$message}}
              </div>
              @enderror
            </div>
            <div class="mb-2">
              <label for="year" class="form-label">Year Written</label>
              <input name="year" type="text" class="form-control" id="year" value="{{$book->year}}" aria-describedby="emailHelp">
              @error('year')
              <div id="emailHelp" class="form-text text-danger">
                {{$message}}
              </div>
              @enderror
          </div>
            <div class="mb-2">
              <label for="description" class="form-label">Description</label>
              <input name="description" type="text" class="form-control" id="description" aria-describedby="emailHelp" value="{{ $book->description }}">
              @error('description')
              <div id="emailHelp" class="form-text">
                {{$message}}
              </div>
              @enderror
            </div>
            <div class="mb-4">
              <label for="image" class="form-label">Book Cover</label>
              <input name="image" type="file" class="form-control" id="image" aria-describedby="emailHelp" value="{{ $book->image }}">
              @error('image')
              <div id="emailHelp" class="form-text">
                {{$message}}
              </div>
              @enderror
            </div>
            <div class="mb-2 text-center">
              <div class="mb-3">
                <button type="submit" class="btn btn-info btn-rounded w-50"><i class="fas fa-edit"></i> Edit Book</button>
              </div>
            </div>
      </form>
    </div>
@endsection
