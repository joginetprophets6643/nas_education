@include('admin.includes.header')
@include('admin.includes.nav')

<div class="main-panel">
  <div class="content-wrapper">
     <form action="{{route('store-district')}}" method="POST">
            @csrf 
    <div class="card">
        <div class="card-header">District Details</div>
        <div class="card-body">
        

        <div class="row">
        <div class="col-6">
            <label class="form-label">District Id</label>
            <input type="text" name="district_id" class="form-control" placeholder="District Id" value="{{old('district_id')}}">
            @error('district_id')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        
        <div class="col-6">
            <label class="form-label">State Name</label>
            <select name="state_id" class="form-control">
                <option selected disabled>Select State</option>
                @foreach ($states as $key=>$value)
                <option value="{{$value->state_id}}" {{ old('state_id') == $value->state_id ? 'selected' : '' }}>{{$value->state_name}}</option>
                @endforeach
            </select>
            @error('state_id')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        </div>
        <br>

        <div class="mb-3">
            <label class="form-label">District Name</label>
            <input type="text" name="district_name" class="form-control" placeholder="District Name" value="{{old('district_name')}}">
            @error('district_name')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div class="mb-3" >
            <label class="form-label">District Description</label>
            <textarea class="form-control textarea-ckeditor" name="description" cols="30" rows="10" >{!!old('description')!!}</textarea>
            @error('description')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div class="row">
        <div class="col-6">
            <label class="form-label">District Code</label>
            <input type="text" name="district_code" class="form-control" placeholder="District Code" value="{{old('district_code')}}">
            @error('district_code')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        
        <div class="col-6">
            <label class="form-label">State Code</label>
            <input type="text" name="state_code" class="form-control" placeholder="State Code" value="{{old('state_code')}}">
            @error('state_code')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        </div>
        <br>

        <div class="row">
        <div class="col-6">
            <label class="form-label">Year</label>
            <input type="text" name="year" class="form-control" placeholder="Year" value="{{old('year')}}">
            @error('year')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        
        <div class="col-6">
            <label class="form-label">Year Id</label>
            <input type="text" name="year_id" class="form-control" placeholder="Year Id" value="{{old('year_id')}}">
            @error('year_id')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        </div>
        <br>

        <div class="row">
        <div class="col-6">
            <label class="form-label">LGD District Id</label>
            <input type="text" name="lgd_district_id" class="form-control" placeholder="District Id" value="{{old('lgd_district_id')}}">
            @error('lgd_district_id')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        
        <div class="col-6">
            <label class="form-label">LGD State Id</label>
            <input type="text" name="lgd_state_id" class="form-control" placeholder="State Id" value="{{old('lgd_state_id')}}">
            @error('lgd_state_id')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        </div>
        <br>

        <div class="form-group" style="line-height:0;">
        <!-- <label for="images" class="form-label">Event Images</label> -->
        <input type="checkbox" name="status">
        <label class="form-label">Active</label>
        </div>
        </div>
    </div>

        

        
        
<br>
    <div class="card">
        <div class="card-header">Demographics Details</div>
        <div class="card-body">
            <div class="row">
        <div class="form-group-sm col-md-4">
            <label class="form-label">Density of Population</label>
            <input type="text" name="density_of_population" class="form-control" placeholder="Density of Population" value="{{old('density_of_population')}}">
            @error('density_of_population')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div class="form-group-sm col-md-4">
            <label class="form-label">Literacy Rate</label>
            <input type="text" name="literacy_rate" class="form-control" placeholder="Literacy Rate" value="{{old('literacy_rate')}}">
            @error('literacy_rate')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        
        <div class="form-group-sm col-md-4">
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
            <label class="form-label">Total District Area</label>
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
        <div class="form-group-sm col-md-4">
            <label class="form-label">No. of Schools</label>
            <input type="text" name="no_of_schools" class="form-control" placeholder="No. of Schools" value="{{old('no_of_schools')}}">
            @error('no_of_schools')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div class="form-group-sm col-md-4">
            <label class="form-label">State Govt Schools</label>
            <input type="text" name="state_govt_schools" class="form-control" placeholder="State Govt Schools" value="{{old('state_govt_schools')}}">
            @error('state_govt_schools')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        
        <div class="form-group-sm col-md-4">
            <label class="form-label">Govt Aided Schools</label>
            <input type="text" name="govt_aided_schools" class="form-control" placeholder="Govt Aided Schools" value="{{old('govt_aided_schools')}}">
            @error('govt_aided_schools')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        </div>
        <br>

        <div class="row">
        <div class="form-group-sm col-md-6">
            <label class="form-label">Central Govt Schools</label>
            <input type="text" name="central_govt_schools" class="form-control" placeholder="Central Govt Schools" value="{{old('central_govt_schools')}}">
            @error('central_govt_schools')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        
        <div class="form-group-sm col-md-6">
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
        <div class="form-group-sm col-md-6">
            <label class="form-label">Teacher in Central Govt Schools</label>
            <input type="text" name="teacher_central_govt_schools" class="form-control" placeholder="Teacher in Central Govt Schools" value="{{old('teacher_central_govt_schools')}}">
            @error('teacher_central_govt_schools')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        
        <div class="form-group-sm col-md-6">
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
