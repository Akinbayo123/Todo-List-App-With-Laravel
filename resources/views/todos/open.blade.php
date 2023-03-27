<x-layout>
    @php
    function textLimit($string, $limit)
{
    if (strlen($string) > $limit) {
        return substr($string, 0, $limit) . "...";
    } else {
        return $string;
    }
}  
@endphp
   @include('partials._header')

   <div class="container">
    <h1 class="mb-4 text-center fw-bold">Your Todos</h1>
  
    <div class="row">
        @unless (count($todos)==0)
        @foreach ($todos as $item)
        <div class="col-lg-3 col-md-6 mb-4">
            <div class="card shadow-sm">
                <div class="card-body">
                   
                    <h4 class="card-title">{{ textLimit($item->title,28) }}</h4>
                    <p class="card-text">{!! textLimit($item->description,57)  !!} </p>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <a href="{{ route('show',$item->id) }}" class="btn btn-sm btn-outline-secondary">View</a>
                            <a href="{{ route("edit",$item->id) }}" class="btn btn-sm btn-outline-secondary">Edit</a>
                        </div>
                        <small class="text-muted">{{ $item->created_at->toDateString() }}</small>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        @else
        <h1 class='text-danger text-center fw-bold'>Todos are not available!</h1>
        @endunless
    </div>
</div>

    </x-layout>