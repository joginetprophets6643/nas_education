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
                    <div class="card-header">
                        <span>All Videos</span>
                        <a class="btn btn-primary float-right btn-sm" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Add</a>



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
                                    <div class="card-header">Upload video
                                    <button type="button" class="btn-close float-right" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="card-body">
                                    <form action="{{url('/add/vedio')}}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group">
                                        <label for="images" class="form-label">Title</label>
                                        <input type="text" name="title" class="form-control" id="title">
                                        @error('title')
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
                                        </div>

                                        <div class="form-group">
                                        <!-- <label for="images" class="form-label">Event Images</label> -->
                                        <input type="file" name="vedio" class="form-control" id="vedio">
                                        @error('vedio')
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
                                        </div>
                                        
                                        <div class="form-group" style="line-height:0;">
                                        <!-- <label for="images" class="form-label">Event Images</label> -->
                                        <input type="checkbox" name="status" value=1>
                                        <label class="form-label">Status</label>
                                        </div>
                                        
                                        <button type="submit" class="btn btn-primary btn-sm">Upload</button>
                                    </form>
                                    </div>
                                    </div>


                                </div>
                                <!-- <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Understood</button>
                                </div> -->
                                </div>
                            </div>
                            </div>


                    </div>
                    <div class="card-body">

                        @if($vedios)
                        <ul class="imageslist">
                        @foreach($vedios as $vedio)
                        <li>
                        <video width="300" height="240" controls>
                            <source src="{{URL::asset('/assets/upload/vedios/'.$vedio->vedio)}}" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                        <?php $id=encode5t($vedio->id)?>
                        <button class="btn btn-danger btn-sm delete-vedio-btn" data-delete-link="{{url('delete/vedio/'.$id)}}" data-bs-toggle="modal" data-bs-target="#DeleteVedio">Delete</button>
                        </li>
                        @endforeach
                        </ul>
                        @else
                        <p class="text-center">No Video Uploaded Yet!<p>
                        @endif
                        


                        <div class="modal fade" id="DeleteVedio" >
                            <div class="modal-dialog">
                                <div class="modal-content">
                                
                                <div class="modal-body p-0">
                                    
                                
                                    <div class="card">
                                    <div class="card-header">Delete Video
                                    <button type="button" class="btn-close float-right" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="card-body">
                                    <form action="" id="delete-court-form" method="GET" enctype="multipart/form-data">
                                        @csrf
                                        <p>Are you sure you want to delete this video?</p> 
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
    $('.delete-vedio-btn').on('click',function(){
        $('#delete-court-form').attr('action',$(this).data('delete-link'))
    })
</script>

