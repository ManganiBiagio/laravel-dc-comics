@extends("layouts.app")

@section('content')
<div class="container">
    <h1>Nuovo Fumetto</h1>

    <form action="{{ route('comics.store') }}" method="POST">
      @csrf
  
      <div class="mb-3">
        <label class="form-label">Titolo</label>
        <input type="text" class="form-control @error('title') is-invalid @elseif(old('title')) is-valid @enderror" name="title" value="{{old("title")}}">
        @error('title')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
      @enderror
      </div>
      <div class="mb-3">
        <label class="form-label">Descrizione</label>
        <input type="text" class="form-control @error('description') is-invalid @elseif(old('description')) is-valid @enderror" name="description" value="{{old("description")}}">
        @error('description')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
      @enderror
      </div>
      <div class="mb-3">
        <label class="form-label">Prezzo</label>
        <input type="text" class="form-control @error('price') is-invalid @elseif(old('price')) is-valid @enderror " name="price" value="{{old("price")}}">
        @error('price')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
      @enderror
      </div>
      <div class="mb-3">
        <label class="form-label">Serie</label>
        <input type="text" class="form-control @error('series') is-invalid @elseif(old('series')) is-valid @enderror" name="series" value="{{old("series")}}">
        @error('series')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
      @enderror
      </div>
      <div class="mb-3">
        <label class="form-label">Genere</label>
        <input type="text" class="form-control @error('type') is-invalid @elseif(old('type')) is-valid @enderror" name="type" value="{{old("type")}}">
        @error('type')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
      @enderror
      </div>
  
      <button class="btn btn-primary" type="submit">Salva prodotto</button>
    </form>
</div>
  
  
@endsection