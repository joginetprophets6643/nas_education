@include('admin.includes.header')
@include('admin.includes.nav')

<div class="main-panel">
  <div class="content-wrapper">
    <div class="card">
        <div class="card-header">Add User</div>
        <div class="card-body">
        <form action="{{route('store-user')}}" method="POST">
                @csrf
                <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Name</label>
                <input class="form-control" name="name" type="text" placeholder="Name">
                @error('name')
                <span class="text-danger">{{$message}}</span>
                @enderror
                </div>
                

                <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Email Address</label>
                <input class="form-control" name="email" type="email"  aria-label="input example" placeholder="Email Address">
                @error('email')
                <span class="text-danger">{{$message}}</span>
                @enderror
                </div>

                <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Password</label>
                <input class="form-control" name="password"  type="password" placeholder="Enter Password">
                @error('password')
                <span class="text-danger">{{$message}}</span>
                @enderror
                </div>

                <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">User Role</label>
              <select name="role" class="form-control">
                  <option value="">User Role</option>
                  <option value="2">Admin</option>
              </select>
              @error('role')
              <span class="text-danger">{{$message}}</span>
              @enderror
            </div>

                <div class="mb-3">
                <button type="submit" class="btn btn-primary btn-sm User_add">Add</button>
                </div>
            </form>

        </div>
    </div>
    </div>
@include('admin.includes.footer')
