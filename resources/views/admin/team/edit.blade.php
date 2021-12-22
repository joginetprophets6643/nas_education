@include('admin.includes.header')
@include('admin.includes.nav')


<div class="main-panel">
  <div class="content-wrapper">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
                <div class="card-header">Update Member
                </div>
                <div class="card-body">
                <form action="{{route('update-member',$member->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Name</label>
                    <input type="text" name="name" class="form-control" value="{{$member->name}}">
                </div>
                @error('name')
                <span class="text-danger">{{$message}}</span>
                @enderror
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Image</label>
                    <input type="file" name="image" class="form-control">
                </div>
                @error('image')
                <span class="text-danger">{{$message}}</span>
                @enderror
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Description</label>
                    <input type="text" name="description" class="form-control" value="{{$member->description}}">
                </div>
                @error('description')
                <span class="text-danger">{{$message}}</span>
                @enderror
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Designation</label>
                    <input type="text" name="designation" class="form-control" value="{{$member->designation}}">
                </div>
                @error('designation')
                <span class="text-danger">{{$message}}</span>
                @enderror
                
                <button type="submit" class="btn btn-primary btn-sm">Update</button>
                </form>
                </div>
            </div>
            </div>
</div>
  </div>
</div>

@include('admin.includes.footer')
