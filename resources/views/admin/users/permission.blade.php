@include('admin.includes.header')
@include('admin.includes.nav')

<div class="main-panel">
  <div class="content-wrapper">
    <div class="card">
        <div class="card-header">Give Permission</div>
        <div class="card-body">
        
                <div class="row text-center">
                <div class="col-3">
                <strong>Module</strong>
                </div>
                <div class="col-2">
                <strong>View</strong>
                </div>
                <div class="col-2">
                <strong>Add</strong>
                </div>
                <div class="col-2">
                <strong>Edit</strong>
                </div>
                <div class="col-2">
                <strong>Delete</strong>
                </div>
                </div>
                <hr>
                <?php $id=encode5t($user->user_id)?>
                <form action="{{route('store-permission',$id)}}" method="POST">
                @csrf

                <?php $modules=['User','Media','Team','Content','Program','Master','Statistic','Data','Banner','Client-Logo','Registration','Setting'];?>
                @foreach($modules as $module)
                <div class="row text-center">
            
                <div class="col-3">
                <strong>{{$module}}</strong>
                </div>
                @if(in_array($module,$user->view))
                <div class="col-2">
                <input class="form-group" name="{{$module}}_view" type="checkbox" value='1' checked>
                </div>
                @else
                <div class="col-2">
                <input class="form-group" name="{{$module}}_view" type="checkbox" value='1'>
                </div>
                @endif

                @if(in_array($module,$user->add))
                <div class="col-2">
                <input class="form-group" name="{{$module}}_add" type="checkbox" value='1' checked>
                </div>
                @else
                <div class="col-2">
                <input class="form-group" name="{{$module}}_add" type="checkbox" value='1'>
                </div>
                @endif

                @if(in_array($module,$user->edit))
                <div class="col-2">
                <input class="form-group" name="{{$module}}_edit" type="checkbox" value='1' checked>
                </div>
                @else
                <div class="col-2">
                <input class="form-group" name="{{$module}}_edit" type="checkbox" value='1'>
                </div>
                @endif

                @if(in_array($module,$user->delete))
                <div class="col-2">
                <input class="form-group" name="{{$module}}_delete" type="checkbox" value='1' checked>
                </div>
                @else
                <div class="col-2">
                <input class="form-group" name="{{$module}}_delete" type="checkbox" value='1'>
                </div>
                @endif

                </div>
                <hr>
                @endforeach

                

                <div class="mb-3">
                <button type="submit" class="btn btn-primary btn-sm float-right User_edit">Permit</button>
                </div>
            </form>

        </div>
    </div>
    </div>
@include('admin.includes.footer')
</div>

<style>
.col-3,.col-2{
    margin-top:10px;
}
</style>