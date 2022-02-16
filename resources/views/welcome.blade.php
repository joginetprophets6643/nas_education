@include('admin.includes.header')
@include('admin.includes.nav')
  

<div class="main-panel">
  <div class="content-wrapper">
      <div class="container">
          
        <div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
          <div class="card-header">Upload File</div>
          <div class="card-body">
          @if(session('success'))
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
              <strong>{{session('success')}}</strong>
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
          @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form class="was-validated" method="POST" action="{{ route('upload.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                <select class="form-select" aria-label="Default select example" name="selected" required>
                    <option >Please Select Option</option>
                     <option value="1">SQ</option>
                     <option value="2">TQ</option>
                     <option value="3">PQ</option>
                     <option value="4">AT3</option>
                     <option value="5">AT5</option>
                     <option value="8">AT8</option>
                     <option value="10">AT10</option>
                  
                   
                </select>
                </div>
                <div class="mb-3">
                    <input type="file" class="form-control" name="file" aria-label="file example" required>
                    <div class="invalid-feedback">Please Choose CSV file for upload</div>
                </div>

                <div class="mb-3 text-center">
                    <button class="btn btn-primary Data_add" type="submit">Upload </button>
                </div>
            </form>
          </div>
        </div>
    </div>
    </div>
  </div>
</div>

@include('admin.includes.footer')


    
