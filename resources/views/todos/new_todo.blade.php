<x-layout>
@include("partials._header")

<div class="container py-5">
    <div class="row">
        <div class="col-md-5 mx-auto">
            <div class="card bg-white rounded border shadow">
                <div class="card-header px-4 py-3">
                    <h4 class="card-title">Add Todo</h4>
                </div>
                <div class="card-body p-4">
                  
                    <form action="{{ route('save_new') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" class="form-control" id="title" name="title" placeholder="e.g. Create a PHP program" value="{{ old("title") }}">
                            @error('title')
                            <p class="text-danger mt-1">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="desc" class="form-label">Description</label>
                            <textarea class="form-control" id="desc" name="description" rows="3" required>
                                {{ old('description') }}
                            </textarea>
                            @error('description')
                            <p class="text-danger mt-1">{{$message}}</p>
                            @enderror
                        </div>
                        <div>
                            <button type="submit" name="addTodo" class="btn btn-primary me-2">Add Todo</button>
                            <button type="reset" class="btn btn-danger">Reset</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


</x-layout>