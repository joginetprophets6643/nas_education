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


          <div class="card-header">All States
          <a href="{{route('add-state')}}" class="btn btn-primary float-right btn-sm Master_add">Add</a>
          </div>
        <table class="table">
          <thead>
            <tr>
              <th scope="col" width="70px">SL no.</th>
              <!-- <th scope="col">State Id</th> -->
              <th scope="col">State Name</th>
              <!-- <th scope="col">State Code</th> -->
              <th scope="col" width="200px" class="action Master_action">Actions</th>
            </tr>
          </thead>
          <tbody>
            @php($i=1)
            @foreach($states as $state)
            <tr>
              <th scope="row">{{$i++}}</th>
              <!-- <td>{{$state->state_id}}</td> -->
              <td>{{$state->state_name}}</td>
              <!-- <td>{{$state->udise_state_code}}</td> -->
              <td class="action Master_action">
                <?php $id=encode5t($state->id)?>
                <a href="{{url('secure-admin/edit/state/'.$id)}}" class="btn btn-primary btn-sm Master_edit">Edit</a>
                <button class="btn btn-danger btn-sm delete-dis-btn Master_delete" data-delete-link="{{url('secure-admin/delete/state/'.$id)}}" data-bs-toggle="modal" data-bs-target="#Deletestate">Delete</button>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
    </div>
</div>





<div class="modal fade" id="Deletestate" >
  <div class="modal-dialog">
      <div class="modal-content">
      
      <div class="modal-body p-0">
          
      
          <div class="card">
          <div class="card-header">Delete State
          <button type="button" class="btn-close float-right" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="card-body">
          <form action="" id="delete-dist-form" method="GET" >
              @csrf
              <p>Are you sure you want to delete?</p> 
              <button type="button" class="btn btn-secondary btn-sm Master_delete" data-bs-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-danger btn-sm Master_delete">Delete</button>
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
</div>

<script>
    $('.delete-dis-btn').on('click',function(){
        $('#delete-dist-form').attr('action',$(this).data('delete-link'))
    })
</script>


