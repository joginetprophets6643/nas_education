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


          <div class="card-header">All Users
          <a href="{{route('add-user')}}" class="btn btn-primary float-right btn-sm User_add">Add</a>
          </div>
          <div class="table-responsive">
        <table class="table">
          <thead>
            <tr>
              <th scope="col" width="70px">SL no.</th>
              <th scope="col">Name</th>
              <th scope="col">Email</th>
              <!-- <th scope="col">Mobile No.</th> -->
              <th scope="col" width="200px" class="action User_action">Actions</th>
            </tr>
          </thead>
          <tbody>
            @php($i=1)
            @foreach($users as $user)
            <tr>
              <th scope="row">{{$i++}}</th>
              <td>{{$user->name}}</td>
              <td>{{$user->email}}</td>
              <!-- <td>{{$user->mobile}}</td> -->
              <td class="action User_action">
                <?php $id=encode5t($user->id)?>
                <a href="{{url('/secure-admin/view/user/permission/'.$id)}}" class="btn btn-primary btn-sm User_edit">Permissions</a>
                <button class="btn btn-danger btn-sm delete-mem-btn User_delete" data-delete-link="{{url('secure-admin/delete/user/'.$id)}}" data-bs-toggle="modal" data-bs-target="#Deleteuser">Delete</button>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
        </div>
    </div>
</div>





<div class="modal fade" id="Deleteuser" >
  <div class="modal-dialog">
      <div class="modal-content">
      
      <div class="modal-body p-0">
          
      
          <div class="card">
          <div class="card-header">Delete user
          <button type="button" class="btn-close float-right" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="card-body">
          <form action="" id="delete-court-form" method="GET" enctype="multipart/form-data">
              @csrf
              <p>Are you sure you want to delete?</p> 
              <button type="button" class="btn btn-secondary btn-sm User_delete" data-bs-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-danger btn-sm User_delete">Delete</button>
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


