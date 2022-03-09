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


          <div class="card-header">All Event
          <a class="btn btn-primary float-right btn-sm Media_add" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Add</a>
          </div>
          <div class="table-responsive">
        <table class="table">
          <thead>
            <tr>
              <th scope="col" width="70px">SL no.</th>
              <th scope="col">Event Name</th>
              <th scope="col" width="200px" class="action Media_action">Actions</th>
            </tr>
          </thead>
          <tbody>
            @php($i=1)
            @foreach($events as $event)
            <tr>
              <th scope="row">{{$i++}}</th>
              <td>{{$event->name}}</td>
              <td class="action Media_action">
                <?php $id=encode5t($event->id)?>
                <a href="{{url('/secure-admin/event/videos/'.$id)}}" class="btn btn-primary btn-sm Media_add">Add Videos</a>
                <a href="{{url('secure-admin/edit/video_event/'.$id)}}" class="btn btn-primary btn-sm Media_edit">Edit</a>
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
          <div class="card-header">Add Event
          <button type="button" class="btn-close float-right" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="card-body">
          <form action="{{route('store-video-event')}}" method="POST">
              @csrf

            <div class="mb-3">
              <label class="form-label">State Name</label>
              <select name="state_name" class="form-control">
                <option selected disabled>Select State</option>
                @foreach ($states as $key=>$value)
                <option value="{{$value->state_id}}" {{ old('state_id') == $value->state_id ? 'selected' : '' }}>{{$value->state_name}}</option>
                @endforeach
              </select>
              @error('state_name')
              <span class="text-danger">{{$message}}</span>
              @enderror
            </div>
            
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Event Name</label>
              <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              @error('name')
            <span class="text-danger">{{$message}}</span>
            @enderror
            </div>
            
            <button type="submit" class="btn btn-primary btn-sm Media_add">Add</button>
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

    
    </div>
  </div>
</div>

@include('admin.includes.footer')
@if(count($errors)>0)
<script>
  $('#staticBackdrop').modal({
    backdrop: 'static',
    keyboard: false
  });
  
  $('.btn-close').click(()=>{
    $('#staticBackdrop').removeClass('show')
    $('#staticBackdrop').css('display','none')
    $('.modal-backdrop').remove()
  })

</script>
@endif
