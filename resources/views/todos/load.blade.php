<x-layout>
 
    
@include("partials._header")

<div class="container">
    <div class="row">
      
                <main>
                    <h1>{{ $todos->title }}</h1>
                   
                    <p class="fs-5 col-md-8">{!! $todos->description !!}</p>

                    <div class="mb-5">
                        <div class="d-flex">
                        <a href="{{route('edit',$todos->id)}}" class="btn btn-primary btn-lg px-4 me-2 d-inline-block">Edit</a>
                        <form action="{{route('remove',$todos->id)  }}" method="POST" >
                            @csrf
                            @method("DELETE")
                        <button type="submit"  class="btn btn-danger d-inline btn-lg px-4">Delete</button>
                    </div>
                    </form>
                    </div>
                </main>
        
    </div>
</div>

    </x-layout>