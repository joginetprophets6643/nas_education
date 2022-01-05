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


          <div class="card-header">All Districts
          <a href="{{route('add-district')}}" class="btn btn-primary float-right btn-sm">Add</a>
          </div>
        <table class="table">
          <thead>
            <tr>
              <th scope="col" width="70px">SL no.</th>
              <th scope="col">District Id</th>
              <th scope="col">State Id</th>
              <th scope="col">District Name</th>
              <th scope="col">District Code</th>
              <th scope="col">State Code</th>
              <th scope="col" width="200px">Actions</th>
            </tr>
          </thead>
          <tbody>
            @php($i=1)
            @foreach($districts as $district)
            <tr>
              <th scope="row">{{$i++}}</th>
              <td>{{$district->district_id}}</td>
              <td>{{$district->state_name}}</td>
              <td>{{$district->district_name}}</td>
              <td>{{$district->udise_district_code}}</td>
              <td>{{$district->udise_state_code}}</td>
              <td>
                <?php $id=encode5t($district->id)?>
                <a href="{{url('edit/district/'.$id)}}" class="btn btn-primary btn-sm">Edit</a>
                <button class="btn btn-danger btn-sm delete-dis-btn" data-delete-link="{{url('delete/district/'.$id)}}" data-bs-toggle="modal" data-bs-target="#Deletedistrict">Delete</button>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
    </div>
</div>





<div class="modal fade" id="Deletedistrict" >
  <div class="modal-dialog">
      <div class="modal-content">
      
      <div class="modal-body p-0">
          
      
          <div class="card">
          <div class="card-header">Delete district
          <button type="button" class="btn-close float-right" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="card-body">
          <form action="" id="delete-dist-form" method="GET" >
              @csrf
              <p>Are you sure you want to delete?</p> 
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

@include('admin.includes.footer')
</div>

<script>
    $('.delete-dis-btn').on('click',function(){
        $('#delete-dist-form').attr('action',$(this).data('delete-link'))
    })
</script>


