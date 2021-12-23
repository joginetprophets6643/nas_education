@include('admin.includes.header')
@include('admin.includes.nav')
  

<div class="main-panel" >
  <div class="content-wrapper">
      <div class="container">
          <a href="{{route('manage-banner')}}" class="btn btn-primary btn-sm" style="margin-bottom:20px;">Back</a>
        <div class="row">
    <div class="col-md-8">
        <div class="card">
          <div class="card-header">Edit Banner</div>
          <div class="card-body">
          <form action="{{url('/update/banner/'.$banner->id)}}" method="POST" enctype="multipart/form-data">
              @csrf
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Banner Description</label>
              <input type="text" name="description" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$banner->description}}">
            @error('description')
            <span class="text-danger">{{$message}}</span>
            @enderror
            </div>
            
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Banner Image</label>
              <input type="file" name="image" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$banner->image}}">
            @error('image')
            <span class="text-danger">{{$message}}</span>
            @enderror
            </div>
            <button type="submit" class="btn btn-primary btn-sm">Update</button>
          </form>
          </div>
        </div>
    </div>
    </div>
  </div>
</div>

@include('admin.includes.footer')

