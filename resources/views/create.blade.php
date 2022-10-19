@extends('master')
@section('content')
    <div class="container w-25 mt-3">
    <form action="/createbook" class="container" method="POST" enctype="multipart/form-data">
        @csrf
        

        <div class="mb-1">
          <label for="title" class="form-label">Title</label>
          <input name="title" type="text" class="form-control" id="title" value="{{ old('title') }}" aria-describedby="emailHelp"/>
          
          @error('title')
            <div id="emailHelp" class="form-text text-danger">
              {{$message}}
            </div>
          @enderror
        </div>
        
        {{-- <div class="mb-1">
          <label for="author" class="form-label">Author</label>
          <input name="author" type="text" class="form-control" id="author" value="{{old('author')}}">

          @error('author')
            <div id="emailHelp" class="form-text text-danger">
              {{$message}}
            </div>
          @enderror
        </div> --}}
        
        <div class="mb-1">
          <label for="author_id" class="form-label">Author</label>
          <select name="author_id" id="author" class="form-control">
            <option selected="true" disabled="disabled">Click to select Author</option>
            @foreach ($authors as $author)
            <option value="{{ $author['id']}}">{{ $author['name']}}</option>
            @endforeach
          </select>
          @error('author_id')
            <div id="emailHelp" class="form-text text-danger">
              {{$message}}
            </div>
          @enderror
        </div>

        <div class="mb-1">
            <label for="country" class="form-label">Origin Country</label>
            <input name="country" type="text" class="form-control" id="country" value="{{old('country')}}" aria-describedby="emailHelp">
            @error('country')
              <div id="emailHelp" class="form-text text-danger">
                {{$message}}
              </div>
            @enderror
        </div>
          
        <div class="mb-1">
            <label for="language" class="form-label">Language</label>
            <input name="language" type="text" class="form-control" id="language" value="{{old('language')}}"  aria-describedby="emailHelp" >
            
            @error('language')
            <div id="emailHelp" class="form-text text-danger">
              {{$message}}
            </div>
            @enderror

        </div>
          
        <div class="mb-1">
            <label for="pages" class="form-label">Number of Pages</label>
            <input name="pages" type="number" class="form-control" id="pages" value="{{old('pages')}}" aria-describedby="emailHelp">
            
            @error('pages')
            <div id="emailHelp" class="form-text text-danger">
              {{$message}}
            </div>
            @enderror
        </div>
          
        <div class="mb-1">
            <label for="year" class="form-label">Year Written</label>
            <input name="year" type="text" class="form-control" id="year" value="{{old('year')}}" aria-describedby="emailHelp">
            @error('year')
            <div id="emailHelp" class="form-text text-danger">
              {{$message}}
            </div>
            @enderror
        </div>
          
        <div class="mb-1">
            <label for="description" class="form-label">Description</label>
            <input name="description" type="text" class="form-control" id="description" value="{{old('description')}}" aria-describedby="emailHelp">
            @error('description')
            <div id="emailHelp" class="form-text text-danger">
              {{$message}}
            </div>
            @enderror
        </div>
          
        <div class="mb-4">
            <label for="image" class="form-label">Book Cover</label>
            <input name="image" type="file" class="form-control" id="image" value="{{old('image')}}" aria-describedby="emailHelp">
            @error('Image')
            <div id="emailHelp" class="form-text text-danger">
              {{$message}}
            </div>
            @enderror
        </div>
        <div class="mb-2 text-center">
          <div class="mb-3">
              <button type="submit" class="btn btn-primary btn-rounded"><i class="fas fa-plus"></i> Add New Book</button>
        </div>
        <div class="my-3">
          <a href="/">
              <button type="button" class="btn btn-dark btn-rounded"><i class="fas fa-arrow-left"></i> Back to Homepage</button>
          </a>
        </div>
      </div>
      </form>
    </div>
@endsection