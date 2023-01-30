@extends("layouts.app")
@section("content")
@section('content')
<div class="container">
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