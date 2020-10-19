@section('login_content')
    <div class="container">
        <div class="row">
    <div class="col-md-8 offset-md-2">
    <form method="POST" action="{{ route('login') }}">
        <div class="form-group">
            <label for="email" style="color: white">Email address:</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
        </div>
        <div class="form-group">
            <label for="pwd" style="color: white">Password:</label>
            <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
        </div>
    </form>
    </div>
    </div>
    </div>
@endsection
