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
                                    <div class="card-header">Upload video
                                    <button type="button" class="btn-close float-right" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="card-body">
                                    <form action="{{url('/secure-admin/add/video')}}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group">
                                        <label for="images" class="form-label">Title</label>
                                        <input type="text" name="title" class="form-control" id="title" value="{{ old('title') }}">
                                        @error('title')
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
                                        </div>

                                        <div class="form-group">
                                        <label for="images" class="form-label">URL</label>
                                        <input type="text" name="url" class="form-control" id="url" value="{{ old('url') }}">
                                        @error('url')
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
                                        </div>

                                        <div class="form-group">
                                        <!-- <label for="images" class="form-label">Event Images</label> -->
                                        <input type="file" name="vedio" class="form-control" id="video">
                                        @error('vedio')
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
                                        </div>
                                        
                                        <div class="form-group" style="line-height:0;">
                                        <!-- <label for="images" class="form-label">Event Images</label> -->
                                        <input type="checkbox" name="status" value=1>
                                        <label class="form-label">Status</label>
                                        </div>
                                        
                                        <button type="submit" class="btn btn-primary btn-sm Media_add">Upload</button>
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
                        @if($videos)
                        <div class="row">                       
                        @foreach($videos as $video)
                        @if($video->url)
                        <div class="col-md-4">
                            <div class="video-wrap">
                            <iframe width="300" height="240" src="https://www.youtube.com/embed/{{ $video->url}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                <?php $id=encode5t($video->id)?>
                            <button class="btn btn-danger btn-sm delete-video-btn Media_delete" style="margin-bottom:20px;" data-delete-link="{{url('secure-admin/delete/video/'.$id)}}" data-bs-toggle="modal" data-bs-target="#Deletevideo">Delete</button>
                            </div>
                        </div>
                        @endif
                        @if($video->vedio)
                        <div class="col-md-4">
                            <div class="video-wrap">
                            <video width="300" height="240" controls>
                                <source src="{{URL::asset('/assets/uploads/vedios/'.$video->vedio)}}" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                            <?php $id=encode5t($video->id)?>
                            <button class="btn btn-danger btn-sm delete-video-btn Media_delete" style="margin-bottom:20px;" data-delete-link="{{url('secure-admin/delete/video/'.$id)}}" data-bs-toggle="modal" data-bs-target="#Deletevideo">Delete</button>
                            </div>
                        </div>
                        @endif
                        @endforeach
                        </div>
                        @else
                        <p class="text-center">No Video Uploaded Yet!<p>
                        @endif
                        </div>


                        <div class="modal fade" id="Deletevideo" >
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

@include('admin.includes.footer')
@if(count($errors)>0)
<script>
  $('#staticBackdrop').modal('show');
</script>
@endif

<script>
    $('.delete-video-btn').on('click',function(){
        $('#delete-court-form').attr('action',$(this).data('delete-link'))
    })
</script>

