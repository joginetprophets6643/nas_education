@include('admin.includes.header')
@include('admin.includes.nav')

<div class="main-panel">
  <div class="content-wrapper">
    <div class="card">
        <div class="card-header">Edit Program</div>
        <div class="card-body">
            <?php $id=encode5t($program->id)?>
        <form action="{{route('update-program',$id)}}" method="POST" enctype="multipart/form-data">
            @csrf

        <div class="row">
        <div class="col-6">
            <label class="form-label">Language</label>
            <select name="language" class="form-control">
                <option value="">Select Language</option>
             
                @if($program->language=="1")
                <option value="1" selected>Hindi</option>               
                <option value="2">English</option>
                @elseif($program->language=="2")
                <option value="1">Hindi</option>               
                <option value="2" selected>English</option>
                @else
                <option value="1">Hindi</option>               
                <option value="2">English</option>
                @endif
            </select>
            @error('language')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>       
        
        <div class="col-6">
            <label class="form-label">Title</label>
            <input type="text" name="title" class="form-control" placeholder="Page Title" value="{{$program->title}}">
            @error('title')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        </div>
        <br>
        <div class="mb-3">
            <label class="form-label">Image</label>
            <input type="file" name="image" class="form-control">
            @error('image')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        
        <div class="mb-3" >
            <label class="form-label">Content</label>
            <textarea class="form-control textarea-ckeditor" name="content" cols="30" rows="10" >{{$program->content}}</textarea>
            @error('content')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        
        
        <button type="submit" class="btn btn-primary btn-sm">Update</button>
        </form>
        </div>
    </div>
    </div>
@include('admin.includes.footer')
