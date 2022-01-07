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


          <div class="card-header">All Contents
          <a href="{{route('add-content')}}" class="btn btn-primary float-right btn-sm Content_add">Add</a>
          </div>
        <table class="table">
          <thead>
            <tr>
              <th scope="col" width="70px">SL no.</th>
              <th scope="col">Language</th>
              <th scope="col">Page Title</th>
              <th scope="col">Home Page Content</th>
              <th scope="col" width="200px" class="action Content_action">Actions</th>
            </tr>
          </thead>
          <tbody>
            @php($i=1)
            @foreach($contents as $content)
            <tr>
              <th scope="row">{{$i++}}</th>
              @if($content->language=="1")
              <td>Hindi</td>
              @else
              <td>English</td>
              @endif
              <td >{{$content->page_title}}</td>
              <td style="max-width:290px; overflow:hidden;" id="content">{!!$content->home_page_content!!}</td>
              <td class="action Content_action">
                <?php $id=encode5t($content->id)?>
                <a href="{{url('secure-admin/edit/content/'.$id)}}" class="btn btn-primary btn-sm Content_edit">Edit</a>
                <button class="btn btn-danger btn-sm delete-mem-btn Content_delete" data-delete-link="{{url('secure-admin/delete/content/'.$id)}}" data-bs-toggle="modal" data-bs-target="#Deletecontent">Delete</button>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
    </div>
</div>





<div class="modal fade" id="Deletecontent" >
  <div class="modal-dialog">
      <div class="modal-content">
      
      <div class="modal-body p-0">
          
      
          <div class="card">
          <div class="card-header">Delete content
          <button type="button" class="btn-close float-right" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="card-body">
          <form action="" id="delete-court-form" method="GET" enctype="multipart/form-data">
              @csrf
              <p>Are you sure you want to delete?</p> 
              <button type="button" class="btn btn-secondary btn-sm Content_delete" data-bs-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-danger btn-sm Content_delete">Delete</button>
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
    $('.delete-mem-btn').on('click',function(){
        $('#delete-court-form').attr('action',$(this).data('delete-link'))
    })
</script>


