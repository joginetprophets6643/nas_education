@include('admin.includes.header')
@include('admin.includes.nav')
  

<div class="main-panel">
    <div class="content-wrapper">
        <div class="container">
            <form action="/update/profile" method="POST">
                @csrf
                <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Name</label>
                <input class="form-control" name="name" value="{{$user->name}}" type="text">
                </div>
                @error('name')
                <span class="text-danger">{{$message}}</span>
                @enderror

                <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Email address</label>
                <input class="form-control" name="email" value="{{$user->email}}" type="text"  aria-label="input example" readonly>
                </div>

                <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Password</label>
                <input class="form-control" name="password"  type="text" placeholder="Enter Password">
                </div>
                @error('password')
                <span class="text-danger">{{$message}}</span>
                @enderror

                <div class="mb-3">
                <button type="submit" class="btn btn-primary btn-sm">Submit</button>
                </div>
            </form>
        </div>
    </div>

@include('admin.includes.footer')
