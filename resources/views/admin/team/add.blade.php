@include('admin.includes.header')
@include('admin.includes.nav')

<div class="main-panel">
  <div class="content-wrapper">
    <div class="card">
        <div class="card-header">Add Member</div>
        <div class="card-body">
        <form action="{{route('store-member')}}" method="POST" enctype="multipart/form-data">
              @csrf

            <div class="row">

            <div class="col-6">
              <label for="exampleInputEmail1" class="form-label">Name</label>
              <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              @error('name')
              <span class="text-danger">{{$message}}</span>
              @enderror
            </div>

            <div class="col-6">
              <label for="exampleInputEmail1" class="form-label">Designation</label>
              <input type="text" name="designation" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              @error('designation')
              <span class="text-danger">{{$message}}</span>
              @enderror
            </div>

            </div>
            <br>

            <div class="row">

            <div class="col-6">
              <label for="exampleInputEmail1" class="form-label">Address</label>
              <input type="text" name="address" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              @error('address')
              <span class="text-danger">{{$message}}</span>
              @enderror
            </div>

            <div class="col-6">
              <label for="exampleInputEmail1" class="form-label">Mobile No.</label>
              <input type="text" name="mobile" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
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
              <input type="text" name="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              @error('date')
              <span class="text-danger">{{$message}}</span>
              @enderror
            </div>

            </div>
            <br>

            

            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Section Title</label>
              <select name="description" class="form-control">
                  <option value="">Select Title</option>
                  <option value="NAS-2021 National Steering Committee">NAS-2021 National Steering Committee</option>
                  <option value="NAS Cell CBSE HQ">NAS Cell CBSE HQ</option>
              </select>
              @error('description')
              <span class="text-danger">{{$message}}</span>
              @enderror
            </div>
            
            
            
            
          
            <button type="submit" class="btn btn-primary btn-sm">Add</button>
          </form>
        </div>
    </div>
    </div>
@include('admin.includes.footer')
