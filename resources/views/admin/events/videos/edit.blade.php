@include('admin.includes.header')
@include('admin.includes.nav')
  

<div class="main-panel">
  <div class="content-wrapper">
      <div class="container">
          <a href="{{route('video-events')}}" class="btn btn-primary btn-sm" style="margin-bottom:20px;">Back</a>
        <div class="row">
    <div class="col-md-8">
        <div class="card">
          <div class="card-header">Edit Event</div>
          <div class="card-body">
            <?php $id=encode5t($event->id)?>
          <form action="{{url('/secure-admin/update/video_event/'.$id)}}" method="POST">
              @csrf
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Update Event Name</label>
              <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$event->name}}">
            </div>
            @error('name')
            <span class="text-danger">{{$message}}</span>
            @enderror
            <button type="submit" class="btn btn-primary btn-sm Media_edit">Update</button>
          </form>
          </div>
        </div>
    </div>
    </div>
  </div>
</div>

@include('admin.includes.footer')

