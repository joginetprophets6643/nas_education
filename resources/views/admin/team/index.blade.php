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


          <div class="card-header">All Members
          <a class="btn btn-primary float-right btn-sm" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Add</a>
          </div>
        <table class="table">
          <thead>
            <tr>
              <th scope="col" width="70px">SL no.</th>
              <th scope="col">Name</th>
              <th scope="col">Image</th>
              <th scope="col">Description</th>
              <th scope="col">Designation</th>
              <th scope="col" width="200px">Actions</th>
            </tr>
          </thead>
          <tbody>
            @php($i=1)
            @foreach($members as $member)
            <tr>
              <th scope="row">{{$i++}}</th>
              <td>{{$member->name}}</td>
              <td><img src="{{asset('assets/uploads/team/'.$member->image)}}" alt=""></td>
              <td>{{$member->description}}</td>
              <td>{{$member->designation}}</td>
              <td>
                <a href="{{url('edit/member/'.$member->id)}}" class="btn btn-primary btn-sm">Edit</a>
                <button class="btn btn-danger btn-sm delete-mem-btn" data-delete-link="{{url('delete/member/'.$member->image.'/'.$member->id)}}" data-bs-toggle="modal" data-bs-target="#DeleteMember">Delete</button>
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
          <div class="card-header">Add Member
            
          <button type="button" class="btn-close float-right" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="card-body">
          <form action="{{route('create-member')}}" method="POST" enctype="multipart/form-data">
              @csrf

              
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Name</label>
              <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              @error('name')
              <span class="text-danger">{{$message}}</span>
              @enderror
            </div>
            
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Choose Image</label>
              <input type="file" name="image" class="form-control">
               @error('image')
              <span class="text-danger">{{$message}}</span>
              @enderror
            </div>
           
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Description</label>
              <input type="text" name="description" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              @error('description')
              <span class="text-danger">{{$message}}</span>
              @enderror
            </div>
            
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Designation</label>
              <input type="text" name="designation" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              @error('designation')
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



<div class="modal fade" id="DeleteMember" >
  <div class="modal-dialog">
      <div class="modal-content">
      
      <div class="modal-body p-0">
          
      
          <div class="card">
          <div class="card-header">Delete Member
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


