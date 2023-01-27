@extends("layouts.app")

@section('content')
<section class="comics">
    <div class="container">
        <h1 class="title-main">Lista Fumetti</h1>
        <div class="row row-cols-6  g-4 py-5">
            @foreach ($comics as $comic)
            <div class="col" >
                <div class="card">
                    <img src={{$comic["thumb"]}} class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{$comic["title"]}}</h5>
                        <a href="{{route("comics.show",$comic->id)}}" class="btn btn-primary">Info</a>
                        <a href="{{ route('comics.edit', $comic->id) }}" class="btn btn-link">
                            modifica 
                        </a>
                        <form action="{{ route('comics.destroy', $comic->id) }}" method="POST" class="delete-comic" >
                            @csrf()
                            @method('delete')
              
                            <button class="btn btn-danger">
                              elimina
                            </button>
                          </form>
                        
                    </div>
                </div>
                    
                
            </div>
            @endforeach
    
        </div>
        
    </div>

</section>

<script>
    
    const forms = document.querySelectorAll(".delete-comic");
    forms.forEach((form) => {
      
      form.addEventListener("submit", function(event) {
        
        event.preventDefault();
        
        const conferma = confirm("Sei sicuro di voler cancellare il fumetto?");
        // Se conferma, inviamo il form
        if (conferma === true) {
          form.submit();
        }
      })
    })
  </script>
  
  
@endsection
    
