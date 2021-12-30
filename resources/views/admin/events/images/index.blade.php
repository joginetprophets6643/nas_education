@include('admin.includes.header')
@include('admin.includes.nav')
  

<div class="main-panel">
  <div class="content-wrapper">
      <div class="container">
          <a href="{{route('events')}}" class="btn btn-primary btn-sm" style="margin-bottom:20px;">Back</a>
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
                        <span>All Images</span>
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
                                    <div class="card-header">Choose Images
                                    <button type="button" class="btn-close float-right" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="card-body">
                                        <?php $id=encode5t($id)?>
                                    <form action="{{url('add/images/'.$id)}}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group">
                                            @if($errors->any())
                                            <div class="text-danger">
                                                <ul style="list-style:none;">
                                                    @foreach($errors->all() as $error)
                                                    <li>{{$error}}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                            @endif
                                        <input type="file" name="images[]" class="form-control" id="images" multiple="">
                                        </div>
                                    
                                        <button type="submit" class="btn btn-primary btn-sm">Add</button>
                                    </form>
                                    </div>
                                    </div>


                                </div>
                    
                                </div>
                            </div>
                            </div>


                    </div>
                    <div class="card-body">
                        @if($images)
                        <ul class="imageslist">
                        @foreach($images as $image)
                        <li>
                            <img src="{{asset('assets/uploads/'.$image)}}" class="w-100" alt="">
                            <?php $id=encode5t($id);
                            $image=encode5t($image)?>
                            <button class="btn btn-danger btn-sm delete-img-btn" data-delete-link="{{url('delete/image/'.$image.'/'.$id)}}" data-bs-toggle="modal" data-bs-target="#DeleteImage">Delete</button>
                        </li>
                        @endforeach
                        </ul>
                        @else
                        <p class="text-center">No Images Uploaded Yet!<p>
                        @endif


                        <div class="modal fade" id="DeleteImage" >
                            <div class="modal-dialog">
                                <div class="modal-content">
                                
                                <div class="modal-body p-0">
                                    
                                
                                    <div class="card">
                                    <div class="card-header">Delete Image
                                    <button type="button" class="btn-close float-right" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="card-body">
                                    <form action="" id="delete-court-form" method="GET" enctype="multipart/form-data">
                                        @csrf
                                        <p>Are you sure you want to delete this image?</p> 
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

@include('admin.includes.footer')
@if(count($errors)>0)
<script>
  $('#staticBackdrop').modal('show');
</script>
@endif
</div>

<script>
    $('.delete-img-btn').on('click',function(){
        $('#delete-court-form').attr('action',$(this).data('delete-link'))
    })
</script>
