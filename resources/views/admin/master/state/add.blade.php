@include('admin.includes.header')
@include('admin.includes.nav')

<div class="main-panel">
  <div class="content-wrapper">
      <form action="{{route('store-state')}}" method="POST">
            @csrf
    <div class="card">
        <div class="card-header">Add State</div>
        <div class="card-body">
        

        <div class="row">
        <div class="col-6">
            <label class="form-label">State Code</label>
            <input type="text" name="state_code" class="form-control" placeholder="State Code" value="{{old('state_code')}}">
            @error('state_code')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        
        <div class="col-6">
            <label class="form-label">State Id</label>
            <input type="text" name="state_id" class="form-control" placeholder="State Id" value="{{old('state_id')}}">
            @error('state_id')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        </div>
        <br>
        
        <div class="row">
        <div class="col-6">
            <label class="form-label">State Name</label>
            <input type="text" name="state_name" class="form-control" placeholder="State Name" value="{{old('state_name')}}">
            @error('state_name')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        
        <div class="col-6">
            <label class="form-label">Rank</label>
            <input type="text" name="rank" class="form-control" placeholder="State Rank" value="{{old('rank')}}">
            @error('rank')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        </div>
        <br>
        

        <div class="mb-3" >
            <label class="form-label">State Description</label>
            <textarea class="form-control textarea-ckeditor" name="description" cols="30" rows="10" >{!!old('description')!!}</textarea>
            @error('description')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>


        <div class="row">
        <div class="col-6">
            <label class="form-label">LGD State Id</label>
            <input type="text" name="lgd_state_id" class="form-control" placeholder="State Id" value="{{old('lgd_state_id')}}">
            @error('lgd_state_id')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        
        <div class="col-6">
            <label class="form-label">Status</label>
            <input type="text" name="status" class="form-control" placeholder="Status" value="{{old('status')}}">
            @error('status')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        </div>
        <br>

        <div class="row">
        <div class="col-6">
            <label class="form-label">UT</label>
            <input type="text" name="ut" class="form-control" placeholder="UT" value="{{old('ut')}}">
            @error('ut')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        
        <div class="col-6">
            <label class="form-label">View Order</label>
            <input type="text" name="view_order" class="form-control" placeholder="View Order" value="{{old('view_order')}}">
            @error('view_order')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        </div>
        <br>
        
        <div class="form-group" style="line-height:0;">
        <!-- <label for="images" class="form-label">Event Images</label> -->
        <input type="checkbox" name="status" value=1>
        <label class="form-label">Active</label>
        </div>
        
        </div>
    </div>


    <br>
    <div class="card">
        <div class="card-header">Demographics Details</div>
        <div class="card-body">
            <div class="row">
        <div class="col-4">
            <label class="form-label">Density of Population</label>
            <input type="text" name="density_of_population" class="form-control" placeholder="Density of Population" value="{{old('density_of_population')}}">
            @error('density_of_population')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div class="col-4">
            <label class="form-label">Literacy Rate</label>
            <input type="text" name="literacy_rate" class="form-control" placeholder="Literacy Rate" value="{{old('literacy_rate')}}">
            @error('literacy_rate')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        
        <div class="col-4">
            <label class="form-label">Child Sex Ratio</label>
            <input type="text" name="child_sex_ratio" class="form-control" placeholder="Child Sex Ratio" value="{{old('child_sex_ratio')}}">
            @error('child_sex_ratio')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        </div>
        <br>

        <div class="row">
        <div class="col-6">
            <label class="form-label">Total Area</label>
            <input type="text" name="total_district_area" class="form-control" placeholder="Total District Area" value="{{old('total_district_area')}}">
            @error('total_district_area')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        
        <div class="col-6">
            <label class="form-label">Total Population</label>
            <input type="text" name="total_population" class="form-control" placeholder="Total Population" value="{{old('total_population')}}">
            @error('total_population')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        </div>
        <br>


        

        <div class="row">
        <div class="col-6">
            <label class="form-label">Rural Population</label>
            <input type="text" name="rural_population" class="form-control" placeholder="Rural Population" value="{{old('rural_population')}}">
            @error('rural_population')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        
        <div class="col-6">
            <label class="form-label">Urban Population</label>
            <input type="text" name="urban_population" class="form-control" placeholder="Urban Population" value="{{old('urban_population')}}">
            @error('urban_population')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        </div>
        <br>
        
        
        </div>
    </div>

    <br>
    <div class="card">
        <div class="card-header">School Details</div>
        <div class="card-body">
            <div class="row">
        <div class="col-4">
            <label class="form-label">No. of Schools</label>
            <input type="text" name="no_of_schools" class="form-control" placeholder="No. of Schools" value="{{old('no_of_schools')}}">
            @error('no_of_schools')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div class="col-4">
            <label class="form-label">State Govt Schools</label>
            <input type="text" name="state_govt_schools" class="form-control" placeholder="State Govt Schools" value="{{old('state_govt_schools')}}">
            @error('state_govt_schools')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        
        <div class="col-4">
            <label class="form-label">Govt Aided Schools</label>
            <input type="text" name="govt_aided_schools" class="form-control" placeholder="Govt Aided Schools" value="{{old('govt_aided_schools')}}">
            @error('govt_aided_schools')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        </div>
        <br>

        <div class="row">
        <div class="col-6">
            <label class="form-label">Central Govt Schools</label>
            <input type="text" name="central_govt_schools" class="form-control" placeholder="Central Govt Schools" value="{{old('central_govt_schools')}}">
            @error('central_govt_schools')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        
        <div class="col-6">
            <label class="form-label">Private Un-aided Recognised Schools</label>
            <input type="text" name="private_unaided_reco_schools" class="form-control" placeholder="Private Un-aided Recognised Schools" value="{{old('private_unaided_reco_schools')}}">
            @error('private_unaided_reco_schools')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        </div>
        <br>
        </div>
    </div>

    <br>
    <div class="card">
        <div class="card-header">Teacher Details</div>
        <div class="card-body">
            <div class="row">

        <div class="col-6">
            <label class="form-label">Teacher in State Govt Schools</label>
            <input type="text" name="teacher_state_govt_schools" class="form-control" placeholder="Teacher in State Govt Schools" value="{{old('teacher_state_govt_schools')}}">
            @error('teacher_state_govt_schools')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        
        <div class="col-6">
            <label class="form-label">Teacher in Govt Aided Schools</label>
            <input type="text" name="teacher_govt_aided_schools" class="form-control" placeholder="Teacher in Govt Aided Schools" value="{{old('teacher_govt_aided_schools')}}">
            @error('teacher_govt_aided_schools')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        </div>
        <br>

        <div class="row">
        <div class="col-6">
            <label class="form-label">Teacher in Central Govt Schools</label>
            <input type="text" name="teacher_central_govt_schools" class="form-control" placeholder="Teacher in Central Govt Schools" value="{{old('teacher_central_govt_schools')}}">
            @error('teacher_central_govt_schools')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        
        <div class="col-6">
            <label class="form-label">Teacher in Private Un-aided Recognised Schools</label>
            <input type="text" name="teacher_private_unaided_reco_schools" class="form-control" placeholder="Teacher in Private Un-aided Recognised Schools" value="{{old('teacher_private_unaided_reco_schools')}}">
            @error('teacher_private_unaided_reco_schools')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        </div>
        <br>

        <button type="submit" class="btn btn-primary btn-sm float-right Master_add">Add</button>
        </form>
        </div>
    </div>


</div>
@include('admin.includes.footer')
