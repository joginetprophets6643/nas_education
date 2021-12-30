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
          <a class="btn btn-primary float-right btn-sm" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Add</a>
          </div>
        <table class="table">
          <thead>
            <tr>
              <th scope="col" width="70px">SL no.</th>
              <th scope="col">Event Name</th>
              <th scope="col" width="200px">Actions</th>
            </tr>
          </thead>
          <tbody>
            @php($i=1)
            @foreach($events as $event)
            <tr>
              <th scope="row">{{$i++}}</th>
              <td>{{$event->name}}</td>
              <td>
                <?php $id=encode5t($event->id)?>
                <a href="{{url('event/images/'.$id)}}" class="btn btn-primary btn-sm">Add Images</a>
                <a href="{{url('edit/event/'.$id)}}" class="btn btn-primary btn-sm">Edit</a>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
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
          <form action="{{route('store-event')}}" method="POST">
              @csrf
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Event Name</label>
              <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            @error('name')
            <span class="text-danger">{{$message}}</span>
            @enderror
            <button type="submit" class="btn btn-primary btn-sm">Add</button>
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

