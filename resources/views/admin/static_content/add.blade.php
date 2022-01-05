@include('admin.includes.header')
@include('admin.includes.nav')

<div class="main-panel">
  <div class="content-wrapper">
    <div class="card">
        <div class="card-header">Add Content</div>
        <div class="card-body">
        <form action="{{route('store-content')}}" method="POST">
            @csrf

        <div class="row">
        <div class="col-6">
            <label class="form-label">Language</label>
            <select name="language" class="form-control">
                <option value="">Select Language</option>
                <option value="1">Hindi</option>
                <option value="2">English</option>
            </select>
            @error('language')
        <span class="text-danger">{{$message}}</span>
        @enderror
        </div>
           
        <div class="col-6">
            <label class="form-label">Page Title</label>
            <input type="text" name="title" class="form-control" placeholder="Page Title">
            @error('title')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        </div>
        <br>
        <div class="mb-3" >
            <label class="form-label">Home Page Content</label>
            <textarea class="form-control textarea-ckeditor" name="home_content" cols="30" rows="10"></textarea>
            @error('home_content')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Inner Page Content</label>
            <textarea class="form-control textarea-ckeditor" name="inner_content" cols="30" rows="10"></textarea>
            @error('inner_content')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        
        <div class="mb-3">
            <label class="form-label">Page Meta Title</label>
            <input type="text" name="meta_title" class="form-control" placeholder="Page Meta Title">
            @error('meta_title')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        
        <div class="mb-3">
            <label class="form-label">Page Meta Description</label>
            <input type="text" name="meta_description" class="form-control" placeholder="Page Meta Description">
            @error('meta_description')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        
        <button type="submit" class="btn btn-primary btn-sm">Add</button>
        </form>
        </div>
    </div>
    </div>
@include('admin.includes.footer')
