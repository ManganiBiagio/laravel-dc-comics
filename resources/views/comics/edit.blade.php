@extends("layouts.app")

@section('content')
<div class="container">
    <h1>ModificaFumetto</h1>

    <form action="{{ route('comics.update',$comic->id) }}" method="POST">
      @csrf
      @method('put')
  
      <div class="mb-3">
        <label class="form-label">Titolo</label>
        <input type="text" class="form-control" name="title" value="{{$comic->title}}">
      </div>
      <div class="mb-3">
        <label class="form-label">Descrizione</label>
        <textarea name="description" cols="30" rows="5" class="form-control">{{ $comic->description }}</textarea>
      </div>
      <div class="mb-3">
        <label class="form-label">Prezzo</label>
        <input type="number" class="form-control" name="price" value="{{ $comic->price }}">
      </div>
      <div class="mb-3">
        <label class="form-label">Serie</label>
        <input type="text" class="form-control" name="series" value="{{ $comic->series }}">
      </div>
      <div class="mb-3">
        <label class="form-label">Genere</label>
        <input type="text" class="form-control" name="type" value="{{ $comic->type }}">
      </div>
  
      <button class="btn btn-primary" type="submit">Salva modifica prodotto</button>
    </form>
</div>
  
  
@endsection