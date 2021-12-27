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
            <input type="text" name="state_code" class="form-control" placeholder="State Code">
            @error('state_code')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        
        <div class="col-6">
            <label class="form-label">State Id</label>
            <input type="text" name="state_id" class="form-control" placeholder="State Id">
            @error('state_id')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        </div>
        <br>
        
        <div class="row">
        <div class="col-6">
            <label class="form-label">State Name</label>
            <input type="text" name="state_name" class="form-control" placeholder="State Name">
            @error('state_name')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        
        <div class="col-6">
            <label class="form-label">Rank</label>
            <input type="text" name="rank" class="form-control" placeholder="State Rank">
            @error('rank')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        </div>
        <br>
        

        <div class="mb-3" >
            <label class="form-label">State Description</label>
            <textarea class="form-control" name="description" cols="30" rows="10" ></textarea>
            @error('description')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>


        <div class="row">
        <div class="col-6">
            <label class="form-label">LGD State Id</label>
            <input type="text" name="lgd_state_id" class="form-control" placeholder="State Id">
            @error('lgd_state_id')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        
        <div class="col-6">
            <label class="form-label">Status</label>
            <input type="text" name="status" class="form-control" placeholder="Status">
            @error('status')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        </div>
        <br>

        <div class="row">
        <div class="col-6">
            <label class="form-label">UT</label>
            <input type="text" name="ut" class="form-control" placeholder="UT">
            @error('ut')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        
        <div class="col-6">
            <label class="form-label">View Order</label>
            <input type="text" name="view_order" class="form-control" placeholder="View Oreder">
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
            <input type="text" name="density_of_population" class="form-control" placeholder="Density of Population">
            @error('density_of_population')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div class="col-4">
            <label class="form-label">Literacy Rate</label>
            <input type="text" name="literacy_rate" class="form-control" placeholder="Literacy Rate">
            @error('literacy_rate')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        
        <div class="col-4">
            <label class="form-label">Child Sex Ratio</label>
            <input type="text" name="child_sex_ratio" class="form-control" placeholder="Child Sex Ratio">
            @error('child_sex_ratio')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        </div>
        <br>

        <div class="row">
        <div class="col-6">
            <label class="form-label">Total District Area</label>
            <input type="text" name="total_district_area" class="form-control" placeholder="Total District Area">
            @error('total_district_area')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        
        <div class="col-6">
            <label class="form-label">Total Population</label>
            <input type="text" name="total_population" class="form-control" placeholder="Total Population">
            @error('total_population')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        </div>
        <br>


        

        <div class="row">
        <div class="col-6">
            <label class="form-label">Rural Population</label>
            <input type="text" name="rural_population" class="form-control" placeholder="Rural Population">
            @error('rural_population')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        
        <div class="col-6">
            <label class="form-label">Urban Population</label>
            <input type="text" name="urban_population" class="form-control" placeholder="Urban Population">
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
            <input type="text" name="no_of_schools" class="form-control" placeholder="No. of Schools">
            @error('no_of_schools')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div class="col-4">
            <label class="form-label">State Govt Schools</label>
            <input type="text" name="state_govt_schools" class="form-control" placeholder="State Govt Schools">
            @error('state_govt_schools')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        
        <div class="col-4">
            <label class="form-label">Govt Aided Schools</label>
            <input type="text" name="govt_aided_schools" class="form-control" placeholder="Govt Aided Schools">
            @error('govt_aided_schools')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        </div>
        <br>

        <div class="row">
        <div class="col-6">
            <label class="form-label">Central Govt Schools</label>
            <input type="text" name="central_govt_schools" class="form-control" placeholder="Central Govt Schools">
            @error('central_govt_schools')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        
        <div class="col-6">
            <label class="form-label">Private Un-aided Recognised Schools</label>
            <input type="text" name="private_unaided_reco_schools" class="form-control" placeholder="Private Un-aided Recognised Schools">
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
            <input type="text" name="teacher_state_govt_schools" class="form-control" placeholder="Teacher in State Govt Schools">
            @error('teacher_state_govt_schools')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        
        <div class="col-6">
            <label class="form-label">Teacher in Govt Aided Schools</label>
            <input type="text" name="teacher_govt_aided_schools" class="form-control" placeholder="Teacher in Govt Aided Schools">
            @error('teacher_govt_aided_schools')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        </div>
        <br>

        <div class="row">
        <div class="col-6">
            <label class="form-label">Teacher in Central Govt Schools</label>
            <input type="text" name="teacher_central_govt_schools" class="form-control" placeholder="Teacher in Central Govt Schools">
            @error('teacher_central_govt_schools')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        
        <div class="col-6">
            <label class="form-label">Teacher in Private Un-aided Recognised Schools</label>
            <input type="text" name="teacher_private_unaided_reco_schools" class="form-control" placeholder="Teacher in Private Un-aided Recognised Schools">
            @error('teacher_private_unaided_reco_schools')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        </div>
        <br>

        <button type="submit" class="btn btn-primary btn-sm float-right">Add</button>
        </form>
        </div>
    </div>


</div>
@include('admin.includes.footer')
