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
                <h1 class="display-4 fw-bold lh-1 mb-3">Login to store and see your todos</h1>
                <p class="col-lg-10 fs-4 ">Login to manage your todos.</p>
            </div>
            <div class="col-md-10 mx-auto col-lg-5">
               <!-- /todo_list_app/public/authenticate-->
                <form action="{{ route('authenticate') }}" method="POST" class="p-4 p-md-5 border rounded-3 bg-light">
                   @csrf
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
                    <div class=" mb-3">
                        <input type="checkbox" name="remember" class="" id="remember" placeholder="" >
                        <label for="floatingPassword">Remember Me</label>
                    </div>
                    <button name="submit" class="w-100 btn btn-lg btn-primary" type="submit">Continue</button>
                    <hr class="my-4">

                    <small class="text-muted">Don't have an account? <a href="{{ route('signup') }}">Sign Up</a></small>
                    <small class="text-muted mx-1"><a href="{{ route('confirm') }}">Forget Password? </a></small>
                </form>
            </div>
        </div>
    </div>
    </x-layout>