@include('admin.includes.header')
@include('admin.includes.nav')
  

<div class="main-panel">
  <div class="content-wrapper">
      <div class="container">
          <a href="{{route('manage-rti')}}" class="btn btn-primary btn-sm" style="margin-bottom:20px;">Back</a>
        <div class="row">
    <div class="col-md-8">
        <div class="card">
          <div class="card-header">Edit RTI</div>
          <div class="card-body">
            <?php $id=encode5t($file->id)?>
            <form action="{{url('secure-admin/update/rti/'.$id)}}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Title</label>
                <input type="text" name="title" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$file->title}}">
                @error('title')
                <span class="text-danger">{{$message}}</span>
                @enderror
                </div>

                <?php $files=json_decode($file->file)?>
                
                <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Old Files</label>
                <br>
                @foreach($files as $file)
                <p>{{$file}}</p>
                <?php $file=encode5t($file)?>
                <a href="{{url('/secure-admin/delete/file-rti/'.$id.'/'.$file)}}" class="btn btn-danger btn-sm RTI_delete">Delete</a>
                @endforeach
                </div>
                <br>
                <div class="form-group">
                <label for="exampleInputEmail1" class="form-label">Add new Images</label>
                <input type="file" name="files[]" class="form-control" id="files" multiple="">
                @error('files.*')
                <span class="text-danger">{{$message}}</span>
                @enderror
                
                </div>
            
                <button type="submit" class="btn btn-primary btn-sm RTI_edit">Update</button>
            </form>
          </div>
        </div>
    </div>
    </div>
  </div>
</div>


@include('admin.includes.footer')

