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


          <div class="card-header">All Feedback Data
          </div>
          <div class="table-responsive">
        <table class="table">
          <thead>
            <tr>
              <th scope="col" width="70px">SL no.</th>
              <th scope="col">Name</th>
              <th scope="col">Email</th>
              <th scope="col">Content</th>
              <th scope="col">Feedback</th>
              <th scope="col">Date</th>
              <!-- <th scope="col" width="200px" class="action Program_action">Actions</th> -->
            </tr>
          </thead>
          <tbody>
            @php($i=1)
            @foreach($feedbackdata as $data)
            <tr>
              <th scope="row">{{$i++}}</th>
              <td >{{$data->name}}</td>
              <td >{{$data->email}}</td>
              <td >{{$data->content}}</td>
              <td >{{$data->feedback}}</td>
              <td >{{$data->created_at}}</td>
              
            </tr>
            @endforeach
          </tbody>
        </table>
        </div>
    </div>
</div>





<div class="modal fade" id="Deleteprogram" >
  <div class="modal-dialog">
      <div class="modal-program">
      
      <div class="modal-body p-0">
          
      
          <div class="card">
          <div class="card-header">Delete program
          <button type="button" class="btn-close float-right" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="card-body">
          <form action="" id="delete-court-form" method="GET" enctype="multipart/form-data">
              @csrf
              <p>Are you sure you want to delete?</p> 
              <button type="button" class="btn btn-secondary btn-sm Program_delete" data-bs-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-danger btn-sm Program_delete">Delete</button>
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
    $('.delete-mem-btn').on('click',function(){
        $('#delete-court-form').attr('action',$(this).data('delete-link'))
    })
</script>


