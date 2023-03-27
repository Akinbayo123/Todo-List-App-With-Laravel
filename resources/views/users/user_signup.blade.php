<x-layout>
    <div class="text-center">
        @if (session()->has('message'))
        <h5 class="alert alert-success">
        {{ session('message') }}
        </h5> 
            @endif
    </div>
<div class="container col-xl-10 col-xxl-8 px-4 py-5">
    <div class="row align-items-center g-lg-5 py-5">
        <div class="col-lg-7 text-center text-lg-start">
            <h1 class="display-4 fw-bold lh-1 mb-3">Sign up to store your todos</h1>
            <p class="col-lg-10 fs-4 ">Create your free account to manage your todos.</p>
        </div>
        <div class="col-md-10 mx-auto col-lg-5">
          
            <form action="{{ route('user_signup') }}" method="POST" class="p-4 p-md-5 border rounded-3 bg-light">
               @csrf
               <div class="form-floating mb-3">
                <input type="text" name="name" class="form-control" id="floatingInput" placeholder="Input Your Name" value="{{ old('name') }}">
                <label for="floatingInput">Name</label>
                @error('name')
                <p class="text-danger mt-1">{{$message}}</p>
                @enderror
            </div>
                <div class="form-floating mb-3">
                    <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com" value="{{ old('email') }}">
                    <label for="floatingInput">Email address</label>
                    @error('email')
                    <p class="text-danger mt-1">{{$message}}</p>
                    @enderror
                </div>
                <div class="form-floating mb-3">
                    <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password" value="{{ old('password') }}">
                    <label for="floatingPassword">Password</label>
                    @error('password')
                    <p class="text-danger mt-1">{{$message}}</p>
                    @enderror
                </div>
                <div class="form-floating mb-3">
                    <input type="password" name="password_confirmation" class="form-control" id="floatingPassword" placeholder="Password" value="{{ old('password_confirmation') }}">
                    <label for="floatingPassword">Confirm Password</label>
                    @error('password_confirmation')
                    <p class="text-danger mt-1">{{$message}}</p>
                    @enderror
                </div>
                <button name="submit" class="w-100 btn btn-lg btn-primary" type="submit">Continue</button>
                <hr class="my-4">
                <small class="text-muted">You already have an account? <a href="/todo_list_app/public/">Sign In</a></small>
            </form>
        </div>
    </div>
</div>
</x-layout>