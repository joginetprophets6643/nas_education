@include('admin.includes.header')
@include('admin.includes.nav')

<div class="main-panel">
  <div class="content-wrapper">
    <div class="card">
        <div class="card-header">Add Member</div>
        <div class="card-body">
        <form action="{{route('store-member')}}" method="POST" enctype="multipart/form-data">
              @csrf

            <div class="row">

            <div class="col-6">
              <label for="exampleInputEmail1" class="form-label">Name</label>
              <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{old('name')}}">
              @error('name')
              <span class="text-danger">{{$message}}</span>
              @enderror
            </div>

            <div class="col-6">
              <label for="exampleInputEmail1" class="form-label">Designation</label>
              <input type="text" name="designation" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{old('designation')}}">
              @error('designation')
              <span class="text-danger">{{$message}}</span>
              @enderror
            </div>

            </div>
            <br>

            <div class="row">

            <div class="col-6">
              <label for="exampleInputEmail1" class="form-label">Address</label>
              <input type="text" name="address" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{old('address')}}">
              @error('address')
              <span class="text-danger">{{$message}}</span>
              @enderror
            </div>

            <div class="col-6">
              <label for="exampleInputEmail1" class="form-label">Date</label>
              <input type="text" name="mobile" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{old('mobile')}}">
              @error('mobile')
              <span class="text-danger">{{$message}}</span>
              @enderror
            </div>

            </div>
            <br>

            <div class="row">

            <div class="col-6">
              <label for="exampleInputEmail1" class="form-label">Choose Image</label>
              <input type="file" name="image" class="form-control">
               @error('image')
              <span class="text-danger">{{$message}}</span>
              @enderror
            </div>

            <div class="col-6">
              <label for="exampleInputEmail1" class="form-label">Joining Date</label>
              <input type="text" name="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{old('date')}}">
              @error('date')
              <span class="text-danger">{{$message}}</span>
              @enderror
            </div>

            </div>
            <br>


            <div class="row">

              <div class="col-md-6">
                <label for="exampleInputEmail1" class="form-label">Section Title</label>
                <select name="title" class="form-control">
                    <option value="">Select Title</option>
                    <option value="NAS-2021 National Steering Committee" {{ old('description') == "NAS-2021 National Steering Committee" ? 'selected' : '' }}>NAS-2021 National Steering Committee</option>
                    <option value="Sub-Committee : Data Analysis, Reporting  and Dissemination" {{ old('description') == "Sub-Committee : Data Analysis, Reporting  and Dissemination" ? 'selected' : '' }}>Sub-Committee : Data Analysis, Reporting  and Dissemination</option>
                    <option value="National Project Coordinators" {{ old('description') == "National Project Coordinators" ? 'selected' : '' }}>National Project Coordinators</option>
                    <option value="Project Team" {{ old('description') == "Project Team" ? 'selected' : '' }}>Project Team</option>
                </select>
                @error('title')
                <span class="text-danger">{{$message}}</span>
                @enderror
              </div>

              <div class="col-md-6">
                <label for="exampleInputEmail1" class="form-label">Section Sub-Title</label>
                <select name="sub_title" class="form-control" disabled>
                    <option value="">Select Sub Title</option>
                </select>
                <span class="text-danger" id="sub_title_error"></span>
              </div>

            </div>
            <br>
            

            <!-- <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Section Title</label>
              <select name="description" class="form-control">
                  <option value="">Select Title</option>
                  <option value="NAS-2021 National Steering Committee" {{ old('description') == "NAS-2021 National Steering Committee" ? 'selected' : '' }}>NAS-2021 National Steering Committee</option>
                  <option value="NAS Cell CBSE HQ" {{ old('description') == "NAS Cell CBSE HQ" ? 'selected' : '' }}>NAS Cell CBSE HQ</option>
              </select>
              @error('description')
              <span class="text-danger">{{$message}}</span>
              @enderror
            </div> -->
            
            
            
            
          
            <button type="submit" class="btn btn-primary btn-sm Team_add">Add</button>
          </form>
        </div>
    </div>
    </div>
@include('admin.includes.footer')
<script>
  $("select[name=title]").change((e)=>{
    if(e.target.value=='NAS-2021 National Steering Committee' || e.target.value=='Sub-Committee : Data Analysis, Reporting  and Dissemination'){
      $('select[name=sub_title]').empty()
      $('select[name=sub_title]').append('<option value="">Select Sub Title</option>')
      $('select[name=sub_title]').attr('disabled',true)
    }
    else if(e.target.value=='National Project Coordinators'){
      $('select[name=sub_title]').empty()
      $('select[name=sub_title]').append('<option value="">Select Sub Title</option>')
      $('select[name=sub_title]').append('<option value="CBSE">CBSE</option>')
      $('select[name=sub_title]').append('<option value="NCERT">NCERT</option>')
      $('select[name=sub_title]').attr('disabled',false)
    }
    else{
      $('select[name=sub_title]').empty()
      $('select[name=sub_title]').append('<option value="">Select Sub Title</option>')
      $('select[name=sub_title]').append('<option value="Ministry of Education">Ministry of Education</option>')
      $('select[name=sub_title]').append('<option value="Central Board of Secondary Education (CBSE)">Central Board of Secondary Education (CBSE)</option>')
      $('select[name=sub_title]').append('<option value="National Council of Educational Research & Training (NCERT)">National Council of Educational Research & Training (NCERT)</option>')
      $('select[name=sub_title]').append('<option value="National Informatics Centre (NIC)">National Informatics Centre (NIC)</option>')
      $('select[name=sub_title]').attr('disabled',false)
    }
  })

  $('form').on('submit', function (e) {
    let flag=Validation()
    if(!flag){
      e.preventDefault();
    }
    else{
      e.currentTarget.submit();
    }
    
  })

  function Validation(){
    if($("select[name=sub_title]").is(':disabled')){
      $('#sub_title_error').html('')
      return true
    }
    else{
      if($("select[name=sub_title]").val()==""){
        $('#sub_title_error').html('The sub-title field is required')
        return false
      }
      else{
        $('#sub_title_error').html('')
        return true
      }
    }
  }
</script>