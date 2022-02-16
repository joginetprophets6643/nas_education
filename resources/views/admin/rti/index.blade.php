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


          <div class="card-header">All RTI
          <a class="btn btn-primary float-right btn-sm RTI_add" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Add</a>
          </div>
          <div class="table-responsive">
        <table class="table">
          <thead>
            <tr>
              <th scope="col" width="70px">SL no.</th>
              <th scope="col">Title</th>
              <th scope="col" width="200px" class="action RTI_action">Actions</th>
            </tr>
          </thead>
          <tbody>
            @php($i=1)
            @foreach($files as $file)
            <tr>
              <th scope="row">{{$i++}}</th>
              <td>{{$file->title}}</td>
              <td class="action RTI_action">
                <?php $id=encode5t($file->id)?>
                <a href="{{url('/secure-admin/edit/rti/'.$id)}}" class="btn btn-primary btn-sm RTI_edit">Edit</a>
                <button class="btn btn-danger btn-sm delete-mem-btn RTI_delete" data-delete-link="{{url('secure-admin/delete/rti/'.$id)}}" data-bs-toggle="modal" data-bs-target="#Deletefile">Delete</button>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
        </div>
    </div>
</div>


<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                <!-- <div class="modal-header">
                                    <h5 class="modal-title" id="staticBackdropLabel">Choose Images</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div> -->
                                <div class="modal-body p-0">
                                    
                                <div class="">
                                    <div class="card">
                                    <div class="card-header">Add RTI
                                    <button type="button" class="btn-close float-right" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="card-body">
                                    <form action="{{url('secure-admin/add/rti')}}" method="POST" enctype="multipart/form-data">
                                        @csrf

                                        <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Title</label>
                                        <input type="text" name="title" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{old('title')}}">
                                        @error('title')
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
                                        </div>
                                        
                                    
                                        <div class="form-group">
                                        <input type="file" name="files[]" class="form-control" id="files" multiple="">
                                        @error('files')
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
                                        @error('files.*')
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
                                        
                                        </div>
                                    
                                        <button type="submit" class="btn btn-primary btn-sm RTI_add">Add</button>
                                    </form>
                                    </div>
                                    </div>


                                </div>
                    
                                </div>
                            </div>
                            </div>


                    </div>




<div class="modal fade" id="Deletefile" >
  <div class="modal-dialog">
      <div class="modal-content">
      
      <div class="modal-body p-0">
          
      
          <div class="card">
          <div class="card-header">Delete RTI
          <button type="button" class="btn-close float-right" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="card-body">
          <form action="" id="delete-court-form" method="GET" enctype="multipart/form-data">
              @csrf
              <p>Are you sure you want to delete?</p> 
              <button type="button" class="btn btn-secondary btn-sm RTI_delete" data-bs-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-danger btn-sm RTI_delete">Delete</button>
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
