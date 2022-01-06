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


          <div class="card-header">National Statistic
          <a href="{{route('add-national')}}" class="btn btn-primary float-right btn-sm Statistic_add">Add</a>
          </div>
        <table class="table">
          <thead>
            <tr>
              <th scope="col">SL no.</th>
              <th scope="col">Total District Area</th>
              <th scope="col">Total Population</th>
              <th scope="col">Rural Population</th>
              <th scope="col">Urban Population</th>
              <th scope="col">Literacy Rate</th>
              <th scope="col" width="200px" class="action Statistic_action">Actions</th>
            </tr>
          </thead>
          <tbody>
            @php($i=1)
            @foreach($nationals as $national)
            <tr>
              <th scope="row">{{$i++}}</th>
              <td>{{$national->total_district_area}}</td>
              <td>{{$national->total_population}}</td>
              <td>{{$national->rural_population}}</td>
              <td>{{$national->urban_population}}</td>
              <td>{{$national->literacy_rate}}</td>
              <td class="action Statistic_action">
                <?php $id=encode5t($national->id)?>
                <a href="{{url('edit/national/'.$id)}}" class="btn btn-primary btn-sm Statistic_edit">Edit</a>
                <button class="btn btn-danger btn-sm delete-dis-btn Statistic_delete" data-delete-link="{{url('delete/national/'.$id)}}" data-bs-toggle="modal" data-bs-target="#Deletenational">Delete</button>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
    </div>
</div>





<div class="modal fade" id="Deletenational" >
  <div class="modal-dialog">
      <div class="modal-content">
      
      <div class="modal-body p-0">
          
      
          <div class="card">
          <div class="card-header">Delete national
          <button type="button" class="btn-close float-right" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="card-body">
          <form action="" id="delete-dist-form" method="GET" >
              @csrf
              <p>Are you sure you want to delete?</p> 
              <button type="button" class="btn btn-secondary btn-sm Statistic_delete" data-bs-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-danger btn-sm Statistic_delete">Delete</button>
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


