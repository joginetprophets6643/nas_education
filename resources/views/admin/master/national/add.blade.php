@include('admin.includes.header')
@include('admin.includes.nav')

<div class="main-panel">
  <div class="content-wrapper">
    <div class="card">
        <div class="card-header">Add National Statistic</div>
        <div class="card-body">
        <form action="{{route('store-national')}}" method="POST">
            @csrf


        <div class="row">
        <div class="form-group-sm col-md-4">
            <label class="form-label">Density of Population</label>
            <input type="text" name="density_of_population" class="form-control" placeholder="Density of Population" value="{{ old('density_of_population') }}">
            @error('density_of_population')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div class="form-group-sm col-md-4">
            <label class="form-label">Literacy Rate</label>
            <input type="text" name="literacy_rate" class="form-control" placeholder="Literacy Rate" value="{{ old('literacy_rate') }}">
            @error('literacy_rate')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        
        <div class="form-group-sm col-md-4">
            <label class="form-label">Child Sex Ratio</label>
            <input type="text" name="child_sex_ratio" class="form-control" placeholder="Child Sex Ratio" value="{{ old('child_sex_ratio') }}">
            @error('child_sex_ratio')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        </div>
        <br>

        <div class="row">
        <div class="form-group-sm col-md-4">
            <label class="form-label">No. of Students</label>
            <input type="text" name="no_of_students" class="form-control" placeholder="No. of Students" value="{{ old('no_of_students') }}">
            @error('no_of_students')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div class="form-group-sm col-md-4">
            <label class="form-label">No. of Teachers</label>
            <input type="text" name="no_of_teachers" class="form-control" placeholder="No. of Teachers" value="{{ old('no_of_teachers') }}">
            @error('no_of_teachers')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        
        <div class="form-group-sm col-md-4">
            <label class="form-label">No. of Schools</label>
            <input type="text" name="no_of_schools" class="form-control" placeholder="No. of Schools" value="{{ old('no_of_schools') }}">
            @error('no_of_schools')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        </div>
        <br>

        <div class="row">
        <div class="col-6">
            <label class="form-label">Total Area</label>
            <input type="text" name="total_district_area" class="form-control" placeholder="Total Area" value="{{ old('total_district_area') }}">
            @error('total_district_area')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        
        <div class="col-6">
            <label class="form-label">Total Population</label>
            <input type="text" name="total_population" class="form-control" placeholder="Total Population" value="{{ old('total_population') }}">
            @error('total_population')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        </div>
        <br>


        

        <div class="row">
        <div class="col-6">
            <label class="form-label">Rural Population</label>
            <input type="text" name="rural_population" class="form-control" placeholder="Rural Population" value="{{ old('rural_population') }}">
            @error('rural_population')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        
        <div class="col-6">
            <label class="form-label">Urban Population</label>
            <input type="text" name="urban_population" class="form-control" placeholder="Urban Population" value="{{ old('urban_population') }}">
            @error('urban_population')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        </div>
        <br>

        
        
        <button type="submit" class="btn btn-primary btn-sm Statistic_add">Add</button>
        </form>
        </div>
    </div>
    </div>
@include('admin.includes.footer')
