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


          <div class="card-header">All Users
          </div>
        <table class="table">
          <thead>
            <tr>
              <th scope="col" width="70px">SL no.</th>
              <th scope="col">Name</th>
              <th scope="col">Email</th>
              <th scope="col">IP Address</th>
              <th scope="col">Identify Yourself</th>
            </tr>
          </thead>
          <tbody>
            @php($i=1)
            @foreach($users as $user)
            <tr>
              <th scope="row">{{$i++}}</th>
              <td>{{$user->name}}</td>
              <td>{{$user->email}}</td>
              <td>{{$user->ip_address}}</td>
              <td>{{$user->identity_yourself}}</td>
              
            </tr>
            @endforeach
          </tbody>
        </table>
    </div>
</div>



</div>
</div>
</div>
@include('admin.includes.footer')
@if(count($errors)>0)

@endif


