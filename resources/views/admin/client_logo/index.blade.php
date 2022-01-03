@include('admin.includes.header')
@include('admin.includes.nav')
  

<div class="main-panel">
  <div class="content-wrapper">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
            @if(session('success'))
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
              <strong>{{session('success')}}</strong>
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif


          <div class="card-header">Client Logo List
          <a class="btn btn-primary float-right btn-sm" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Add</a>
          </div>
        <table class="table">
          <thead>
            <tr>
              <th scope="col" width="70px">SL no.</th>
              <th scope="col">Title</th>
              <th scope="col">URL</th>
              <th scope="col">Logo</th>
              <th scope="col" width="200px">Actions</th>
            </tr>
          </thead>
          <tbody>
            @php($i=1)
            @foreach($client_logo as $value)
            <tr>
              <th scope="row">{{$i++}}</th>
              <td>{{$value->title}}</td>
              <td>{{$value->url}}</td>
              <td><img src="{{asset('assets/uploads/client_logo/'.$value->logo)}}" alt=""></td>
              
              <td>
                 <?php $id=encode5t($value->id)?>
                <a href="{{url('edit/client-logo/'.$id)}}" class="btn btn-primary btn-sm">Edit</a>
                <button class="btn btn-danger btn-sm delete-mem-btn" data-delete-link="{{url('delete/client-logo/'.$id)}}" data-bs-toggle="modal" data-bs-target="#DeleteClientLogo">Delete</button>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      
      <div class="modal-body p-0">
          <div class="card">
          <div class="card-header">Add Client Logo
            
          <button type="button" class="btn-close float-right" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="card-body">
          <form action="{{route('store-logo')}}" method="POST" enctype="multipart/form-data">
              @csrf

            <div class="mb-3">
              <label for="title" class="form-label">Title</label>
              <input type="text" name="title" class="form-control" id="url" value="{{ old('title') }}" aria-describedby="titleHelp">
              @error('title')
              <span class="text-danger">{{$message}}</span>
              @enderror
            </div>

            <div class="mb-3">
              <label for="url" class="form-label">URL</label>
              <input type="text" name="url" class="form-control" id="url" value="{{ old('url') }}" aria-describedby="urlHelp">
              @error('url')
              <span class="text-danger">{{$message}}</span>
              @enderror
            </div>
            
            <div class="mb-3">
              <label for="logo" class="form-label">Choose Logo</label>
              <input type="file" name="logo" class="form-control">
               @error('logo')
              <span class="text-danger">{{$message}}</span>
              @enderror
            </div>
            
          
            <button type="submit" class="btn btn-primary btn-sm">Add</button>
          </form>
          
        </div>
    </div>


</div>
      </div>
    </div>
  </div>



<div class="modal fade" id="DeleteClientLogo" >
  <div class="modal-dialog">
      <div class="modal-content">
      
      <div class="modal-body p-0">
          
      
          <div class="card">
          <div class="card-header">Delete Client Logo
          <button type="button" class="btn-close float-right" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="card-body">
          <form action="" id="delete-court-form" method="GET" enctype="multipart/form-data">
              @csrf
              <p>Are you sure you want to delete?</p> 
              <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-danger btn-sm">Delete</button>
          </form>
          </div>
          </div>


      
      </div>
  </div>
  </div>
</div>


</div>
</div>
</div>
@include('admin.includes.footer')
@if(count($errors)>0)
<script>
  $('#staticBackdrop').modal('show');
</script>
@endif

<script>
    $('.delete-mem-btn').on('click',function(){
        $('#delete-court-form').attr('action',$(this).data('delete-link'))
    })
</script>


