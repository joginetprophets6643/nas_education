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
                        <span class="media-title">All Images</span>
                        <a class="btn btn-primary float-right btn-sm Media_add" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Add</a>



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
                                       
                                    <form action="{{url('secure-admin/add/images')}}" method="POST" enctype="multipart/form-data">
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
                                    
                                        <button type="submit" class="btn btn-primary btn-sm Media_add">Add</button>
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
                            <img src="{{asset('assets/uploads/images/'.$image)}}" class="w-100" alt="">
                            <?php
                            $image=encode5t($image)?>
                            <button class="btn btn-danger btn-sm delete-img-btn Media_delete" style="margin-top:5px;margin-bottom:10px" data-delete-link="{{url('secure-admin/delete/image/'.$image)}}" data-bs-toggle="modal" data-bs-target="#DeleteImage">Delete</button>
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
                                        <button type="button" class="btn btn-secondary btn-sm Media_delete" data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-danger btn-sm Media_delete">Delete</button>
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
  $(window).on('load', function() {
    $('#staticBackdrop').modal('show');
  });
</script>
<script>
//   $('#staticBackdrop').modal({
//     backdrop: 'static',
//     keyboard: false
//   });
  
  $('.btn-close').click(()=>{
    $('#staticBackdrop').removeClass('show')
    $('#staticBackdrop').css('display','none')
    $('.modal-backdrop').remove()
  })

</script>
@endif
<!-- </div> -->

<script>
    $('.delete-img-btn').on('click',function(){
        $('#delete-court-form').attr('action',$(this).data('delete-link'))
    })
</script>
