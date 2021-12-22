@include('admin.includes.header')
@include('admin.includes.nav')


<div class="main-panel">
  <div class="content-wrapper">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
                <div class="card-header"> Update Client Logo
                </div>
                <div class="card-body">
                <form action="{{route('update-logo',$client_logo->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    
                <div class="mb-3">
                    <label for="url" class="form-label">URL</label>
                    <input type="text" name="url" class="form-control" value="{{$client_logo->url}}">
                </div>
                @error('url')
                <span class="text-danger">{{$message}}</span>
                @enderror
                <div class="mb-3">
                    <label for="logo" class="form-label">Logo</label>
                    <input type="file" name="logo" class="form-control">
                </div>
                @error('logo')
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
