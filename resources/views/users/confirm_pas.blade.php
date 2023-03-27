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
                <h1 class="display-4 fw-bold lh-1 mb-3">Change Your Password</h1>
                <p class="col-lg-10 fs-4 "> Change your password</p>
            </div>
            <div class="col-md-10 mx-auto col-lg-5">
              
               
                <form action="{{ route('forget.store') }}" method="POST" class="p-4 p-md-5 border rounded-3 bg-light">                
                    @csrf
                    <input type="hidden" name="token" value="{{ $request->route('token') }}">
                    <div class="form-floating mb-3">
                        <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com" value="{{ $request->email }}"required autofocus >
                        <label for="floatingInput">Email address</label>
                        @error('email')
                        <p class="text-danger mt-1">{{$message}}</p>
                        @enderror
                    </div>  
                    <div class="form-floating mb-3">
                        <input type="password" name="password" class="form-control" id="floatingInput" placeholder="name@example.com" value="">
                        <label for="floatingInput">Password</label>
                        @error('password')
                        <p class="text-danger mt-1">{{$message}}</p>
                        @enderror
                    </div>   
                    <div class="form-floating mb-3">
                        <input type="password" name="password_confirmation" class="form-control" id="floatingInput" placeholder="name@example.com" value="">
                        <label for="floatingInput">Confirm Password</label>
                        @error('password_confirmation')
                        <p class="text-danger mt-1">{{$message}}</p>
                        @enderror
                    </div>      
                    <button name="submit" class="w-100 btn btn-lg btn-primary" type="submit">Submit</button>
                    <hr class="my-4">
                  
                  
                </form>
            </div>
        </div>
    </div>
    </x-layout>