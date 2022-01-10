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
                   <?php $id=encode5t($client_logo->id)?>
                <form action="{{route('update-logo',$id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                
                <div class="mb-3">
                  <label for="title" class="form-label">Title</label>
                  <input type="text" name="title" class="form-control" id="url" value="{{$client_logo->title}}" aria-describedby="titleHelp">
                  @error('title')
                  <span class="text-danger">{{$message}}</span>
                  @enderror
                </div>

                <div class="mb-3">
                    <label for="url" class="form-label">URL</label>
                    <input type="text" name="url" class="form-control" value="{{$client_logo->url}}">
                </div>
                @error('url')
                <span class="text-danger">{{$message}}</span>
                @enderror
                <div class="row">
                <div class="col-8">
                    <label for="logo" class="form-label">New Logo</label>
                    <input type="file" name="logo" class="form-control">
                </div>
                @error('logo')
                <span class="text-danger">{{$message}}</span>
                @enderror

                <div class="col-4">
                    <!-- <label for="logo" class="form-label">Logo</label> -->
                    <img src="{{asset('assets/uploads/client_logo/'.$client_logo->logo)}}" alt="" width="100px" height="50px" style="margin-top:20px">
                </div>
                </div>
                <br>
                <button type="submit" class="btn btn-primary btn-sm Client-Logo_edit">Update</button>
                </form>
                </div>
            </div>
            </div>
</div>
  </div>
</div>

@include('admin.includes.footer')
