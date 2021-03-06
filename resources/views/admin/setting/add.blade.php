@include('admin.includes.header')
@include('admin.includes.nav')

<div class="main-panel">
  <div class="content-wrapper">
     <form action="{{route('store-setting')}}" method="POST" enctype="multipart/form-data">
            @csrf 
    <div class="card">
        <div class="card-header">Setting Details</div>
        <div class="card-body">
        

        <div class="row">
        <div class="col-6">
            <label class="form-label">Website Title(English)</label>
            <input type="text" name="website_title" class="form-control" placeholder="Website Title" >
            @error('website_title')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div class="col-6">
            <label class="form-label">Website Title(Hindi)</label>
            <input type="text" name="website_title_hindi" class="form-control" placeholder="Website Title">
            @error('website_title_hindi')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        </div>
        <br>

        <div class="row">
        <div class="col-6">
            <label class="form-label">Meta Title(English)</label>
            <input type="text" name="meta_title" class="form-control" placeholder="Meta Title">
            @error('meta_title')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div class="col-6">
            <label class="form-label">Meta Title(Hindi)</label>
            <input type="text" name="meta_title_hindi" class="form-control" placeholder="Meta Title">
            @error('meta_title_hindi')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        </div>
        <br>
        
        <div class="row">
        <div class="col-6" >
            <label class="form-label">Contact Us(English)</label>
            <textarea class="form-control textarea-ckeditor" name="contact_us" cols="30" rows="10"></textarea>
            @error('contact_us')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div class="col-6" >
            <label class="form-label">Contact Us(Hindi)</label>
            <textarea class="form-control textarea-ckeditor" name="contact_us_hindi" cols="30" rows="10"></textarea>
            @error('contact_us_hindi')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        </div>
        <br>
        
        <div class="row">
        <div class="col-6" >
            <label class="form-label">Meta Description(English)</label>
            <textarea class="form-control textarea-ckeditor" name="meta_description" cols="30" rows="10" ></textarea>
            @error('meta_description')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div class="col-6" >
            <label class="form-label">Meta Description(Hindi)</label>
            <textarea class="form-control textarea-ckeditor" name="meta_description_hindi" cols="30" rows="10" ></textarea>
            @error('meta_description_hindi')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        </div>
        <br>

        <div class="row">
        <div class="col-6">
            <label class="form-label">Logo 1</label>
            <input type="file" name="logo_1" class="form-control">
            @error('logo_1')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        
        <div class="col-6">
            <label class="form-label">Logo 2</label>
            <input type="file" name="logo_2" class="form-control">
            @error('logo_2')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        </div>
        <br>
        
    </div>
</div>
        

        
        
<br>
    
    <div class="card">
        <div class="card-header">Social Media Links</div>
        <div class="card-body">
            <div class="row">

        <div class="col-4">
            <label class="form-label">FB</label>
            <input type="text" name="fb" class="form-control" placeholder="FB">
            @error('fb')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        
        <div class="col-4">
            <label class="form-label">Twitter</label>
            <input type="text" name="twitter" class="form-control" placeholder="Twitter">
            @error('twitter')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div class="col-4">
            <label class="form-label">Instagram</label>
            <input type="text" name="insta" class="form-control" placeholder="Instagram">
            @error('insta')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        </div>
        <br>

        <button type="submit" class="btn btn-primary btn-sm float-right Setting_add">Add</button>
        </form>
        </div>
    </div>

        
</div>
@include('admin.includes.footer')
