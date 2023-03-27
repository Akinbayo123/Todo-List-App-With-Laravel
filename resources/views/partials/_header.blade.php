<header class="py-3 mb-4 border-bottom bg-white">
    <div class="d-flex flex-wrap justify-content-center container">
        <a href="todo.php" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
            <span class="fs-4">Todo List</span>
        </a>

        <ul class="nav nav-pills">
            <li class="nav-item"><a href="{{ route('home') }}" class="nav-link ms-4 " aria-current="page">{{ auth()->user()->name }}</a></li>
            <li class="nav-item"><a href="{{ route('home') }}" class="nav-link active" aria-current="page">Home</a></li>
            <li class="nav-item"><a href="{{ route('new') }}" class="nav-link text-dark">Add Todo</a></li>
           
          <li class="nav-item">
            <form action="{{ route('logout') }}" method="POST">
                @csrf
            <button type="submit" class="nav-link bg-danger text-white">Logout</button>
        </form>
        </li>
        
        </ul>
    </div>
</header>
<div class="text-center">
    @if (session()->has('message'))
    <h6 class="alert alert-success">
    {{ session('message') }}
    </h6> 
        @endif
</div>
 