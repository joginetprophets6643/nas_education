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
                  <?php $id=encode5t($member->id)?>
                <form action="{{route('update-member',$id)}}" method="POST" enctype="multipart/form-data">
                    @csrf

                <div class="row">

            <div class="col-6">
              <label for="exampleInputEmail1" class="form-label">Name</label>
              <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$member->name}}">
              @error('name')
              <span class="text-danger">{{$message}}</span>
              @enderror
            </div>

            <div class="col-6">
              <label for="exampleInputEmail1" class="form-label">Designation</label>
              <input type="text" name="designation" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$member->designation}}">
              @error('designation')
              <span class="text-danger">{{$message}}</span>
              @enderror
            </div>

            </div>
            <br>

            <div class="row">

            <div class="col-6">
              <label for="exampleInputEmail1" class="form-label">Address</label>
              <input type="text" name="address" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$member->address}}">
              @error('address')
              <span class="text-danger">{{$message}}</span>
              @enderror
            </div>

            <div class="col-6">
              <label for="exampleInputEmail1" class="form-label">Mobile No.</label>
              <input type="text" name="mobile" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$member->mobile}}">
              @error('mobile')
              <span class="text-danger">{{$message}}</span>
              @enderror
            </div>

            </div>
            <br>

            <div class="row">

            <div class="col-6">
              <label for="exampleInputEmail1" class="form-label">Choose Image</label>
              <input type="file" name="image" class="form-control">
               @error('image')
              <span class="text-danger">{{$message}}</span>
              @enderror
            </div>

            <div class="col-6">
              <label for="exampleInputEmail1" class="form-label">Joining Date</label>
              <input type="text" name="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$member->date}}">
              @error('date')
              <span class="text-danger">{{$message}}</span>
              @enderror
            </div>

            </div>
            <br>

            

            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Section Title</label>
              <select name="description" class="form-control">
                <option value="">Select Language</option>
             
                @if($member->description=="NAS-2021 National Steering Committee")
                <option value="NAS-2021 National Steering Committee" selected>NAS-2021 National Steering Committee</option>               
                <option value="NAS Cell CBSE HQ">NAS Cell CBSE HQ</option>
                @elseif($member->description=="NAS Cell CBSE HQ")
                <option value="NAS-2021 National Steering Committee">NAS-2021 National Steering Committee</option>               
                <option value="NAS Cell CBSE HQ" selected>NAS Cell CBSE HQ</option>
                @else
                <option value="NAS-2021 National Steering Committee">NAS-2021 National Steering Committee</option>               
                <option value="NAS Cell CBSE HQ">NAS Cell CBSE HQ</option>
                @endif
            </select>
              @error('description')
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
