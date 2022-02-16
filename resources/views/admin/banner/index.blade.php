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


          <div class="card-header">All Banner
          <a class="btn btn-primary float-right btn-sm Banner_add" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Add</a>
          </div>
          <div class="table-responsive">
        <table class="table">
          <thead>
            <tr>
              <th scope="col" >SL no.</th>
              <th scope="col">Banner Description</th>
              <th scope="col">Banner Image</th>
              <th scope="col" width="200px" class="action Banner_action">Actions</th>
            </tr>
          </thead>
          <tbody>
            @php($i=1)
            @foreach($banners as $banner)
            <tr>
              <th scope="row">{{$i++}}</th>
              <td style="max-width:500px; overflow:hidden;">{{$banner->description}}</td>
              <td class="text-center"><img src="{{asset('assets/uploads/banner/'.$banner->image)}}" alt=""></td>
              <td class="action Banner_action">
                <?php $id=encode5t($banner->id)?>
                <a href="{{url('secure-admin/edit/banner/'.$id)}}" class="btn btn-primary btn-sm Banner_edit">Edit</a>
                <button class="btn btn-danger btn-sm delete-mem-btn Banner_delete" data-delete-link="{{url('secure-admin/delete/banner/'.$banner->image.'/'.$id)}}" data-bs-toggle="modal" data-bs-target="#Deletebanner">Delete</button>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <!-- <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div> -->
      <div class="modal-body p-0">
        

      <div class="">
        <div class="card">
          <div class="card-header">Add Banner
          <button type="button" class="btn-close float-right" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="card-body">
          <form action="{{route('store-banner')}}" method="POST" enctype="multipart/form-data">
              @csrf
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Banner Description</label>
              <input type="text" name="description" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ old('description') }}">
              @error('description')
            <span class="text-danger">{{$message}}</span>
            @enderror
            </div>
            
            <div class="mb-3">
              <label  class="form-label">Banner Image</label>
              <input type="file" name="image" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              @error('image')
            <span class="text-danger">{{$message}}</span>
            @enderror
            </div>
            
            <button type="submit" class="btn btn-primary btn-sm Banner_add">Add</button>
          </form>
          </div>
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

    

<div class="modal fade" id="Deletebanner" >
  <div class="modal-dialog">
      <div class="modal-content">
      
      <div class="modal-body p-0">
          
      
          <div class="card">
          <div class="card-header">Delete Banner
          <button type="button" class="btn-close float-right" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="card-body">
          <form action="" id="delete-court-form" method="GET" enctype="multipart/form-data">
              @csrf
              <p>Are you sure you want to delete?</p> 
              <button type="button" class="btn btn-secondary btn-sm Banner_delete" data-bs-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-danger btn-sm Banner_delete">Delete</button>
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
  $("[data-dismiss=modal]").trigger({ type: "click" });
</script>
@endif
</div>

<script>
    $('.delete-mem-btn').on('click',function(){
        $('#delete-court-form').attr('action',$(this).data('delete-link'))
    })
</script>

