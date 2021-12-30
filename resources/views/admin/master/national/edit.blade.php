@include('admin.includes.header')
@include('admin.includes.nav')

<div class="main-panel">
  <div class="content-wrapper">
    <div class="card">
        <div class="card-header">Edit National Statistic</div>
        <div class="card-body">
            <?php $id=encode5t($national->id)?>
        <form action="{{route('update-national',$id)}}" method="POST">
            @csrf


        <div class="row">
        <div class="col-4">
            <label class="form-label">Density of Population</label>
            <input type="text" name="density_of_population" class="form-control" placeholder="Density of Population" value="{{$national->density_of_population}}">
            @error('density_of_population')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div class="col-4">
            <label class="form-label">Literacy Rate</label>
            <input type="text" name="literacy_rate" class="form-control" placeholder="Literacy Rate" value="{{$national->literacy_rate}}">
            @error('literacy_rate')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        
        <div class="col-4">
            <label class="form-label">Child Sex Ratio</label>
            <input type="text" name="child_sex_ratio" class="form-control" placeholder="Child Sex Ratio" value="{{$national->child_sex_ratio}}">
            @error('child_sex_ratio')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        </div>
        <br>

        <div class="row">
        <div class="col-6">
            <label class="form-label">Total District Area</label>
            <input type="text" name="total_district_area" class="form-control" placeholder="Total District Area" value="{{$national->total_district_area}}">
            @error('total_district_area')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        
        <div class="col-6">
            <label class="form-label">Total Population</label>
            <input type="text" name="total_population" class="form-control" placeholder="Total Population" value="{{$national->total_population}}">
            @error('total_population')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        </div>
        <br>


        

        <div class="row">
        <div class="col-6">
            <label class="form-label">Rural Population</label>
            <input type="text" name="rural_population" class="form-control" placeholder="Rural Population" value="{{$national->rural_population}}">
            @error('rural_population')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        
        <div class="col-6">
            <label class="form-label">Urban Population</label>
            <input type="text" name="urban_population" class="form-control" placeholder="Urban Population" value="{{$national->urban_population}}">
            @error('urban_population')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        </div>
        <br>

        
        
        <button type="submit" class="btn btn-primary btn-sm">Update</button>
        </form>
        </div>
    </div>
    </div>
@include('admin.includes.footer')
