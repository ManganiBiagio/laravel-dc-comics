@extends("layouts.app")
@section("content")
@section('content')
<div class="container">
    @if (session('status'))
    <div class="d-block toast align-items-center text-white bg-primary border-0" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="d-flex">
          <div class="toast-body">
            {{session('status')}}
          </div>
          <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
      </div>
    @endif
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">
                <img src="{{$comic["thumb"]}}" style="width: 30px" alt="">
                {{$comic["title"]}}
            </h5>
            <p class="card-text"><strong>Descrizione:</strong>{{$comic["description"]}}</p>
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><strong>Prezzo:</strong>{{$comic["price"]}}$</li>
                <li class="list-group-item"><strong>Serie:</strong>{{$comic["series"]}}</li>
                <li class="list-group-item"><strong>Tipologia:</strong>{{$comic["type"]}}</li>
              </ul>

            
           
            
            
        </div>
    </div>
    
</div>
  
  
@endsection
    
@endsection