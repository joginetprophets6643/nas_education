@include('admin.includes.header')
@include('admin.includes.nav')


<div class="main-panel">
  <div class="content-wrapper">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
                <div class="card-header">Update Member
                </div>
                <div class="card-body">
                  <?php $id=encode5t($member->id)?>
                <form action="{{route('update-member',$id)}}" method="POST" enctype="multipart/form-data">
                    @csrf

                <div class="row">

            <div class="col-6">
              <label for="exampleInputEmail1" class="form-label">Name</label>
              <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$member->name}}">
              @error('name')
              <span class="text-danger">{{$message}}</span>
              @enderror
            </div>

            <div class="col-6">
              <label for="exampleInputEmail1" class="form-label">Designation</label>
              <input type="text" name="designation" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$member->designation}}">
              @error('designation')
              <span class="text-danger">{{$message}}</span>
              @enderror
            </div>

            </div>
            <br>

            <div class="row">

            <div class="col-6">
              <label for="exampleInputEmail1" class="form-label">Address</label>
              <input type="text" name="address" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$member->address}}">
              @error('address')
              <span class="text-danger">{{$message}}</span>
              @enderror
            </div>

            <div class="col-6">
              <label for="exampleInputEmail1" class="form-label">Date</label>
              <input type="text" name="mobile" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$member->mobile}}">
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
              <input type="text" name="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$member->date}}">
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
              
                  @if($member->title=="NAS-2021 National Steering Committee")
                    <option value="NAS-2021 National Steering Committee" selected>NAS-2021 National Steering Committee</option>
                    <option value="Sub-Committee : Data Analysis, Reporting  and Dissemination" >Sub-Committee : Data Analysis, Reporting  and Dissemination</option>
                    <option value="National Project Coordinators" >National Project Coordinators</option>
                    <option value="Project Team" >Project Team</option>
                  @elseif($member->title=="Sub-Committee : Data Analysis, Reporting  and Dissemination")
                    <option value="NAS-2021 National Steering Committee">NAS-2021 National Steering Committee</option>
                    <option value="Sub-Committee : Data Analysis, Reporting  and Dissemination"selected>Sub-Committee : Data Analysis, Reporting  and Dissemination</option>
                    <option value="National Project Coordinators" >National Project Coordinators</option>
                    <option value="Project Team" >Project Team</option>
                  @elseif($member->title=="National Project Coordinators")
                    <option value="NAS-2021 National Steering Committee">NAS-2021 National Steering Committee</option>
                    <option value="Sub-Committee : Data Analysis, Reporting  and Dissemination" >Sub-Committee : Data Analysis, Reporting  and Dissemination</option>
                    <option value="National Project Coordinators" selected>National Project Coordinators</option>
                    <option value="Project Team" >Project Team</option>
                  @else
                    <option value="NAS-2021 National Steering Committee" selected>NAS-2021 National Steering Committee</option>
                    <option value="Sub-Committee : Data Analysis, Reporting  and Dissemination" >Sub-Committee : Data Analysis, Reporting  and Dissemination</option>
                    <option value="National Project Coordinators" >National Project Coordinators</option>
                    <option value="Project Team" selected>Project Team</option>
                  @endif
                </select>
                @error('title')
                <span class="text-danger">{{$message}}</span>
                @enderror
              </div>

              <div class="col-md-6">
                <label for="exampleInputEmail1" class="form-label">Section Sub-Title</label>
                <select name="sub_title" class="form-control" disabled>
                    <option value="">Select Sub Title</option>
                    @if($member->title=="National Project Coordinators")
                      @if($member->sub_title=="CBSE")
                        <option value="CBSE" selected>CBSE</option>
                        <option value="NCERT" >NCERT</option>
                      @else
                        <option value="CBSE">CBSE</option>
                        <option value="NCERT" selected>NCERT</option>
                      @endif
                    @elseif($member->title=="Project Team")
                      @if($member->sub_title=="Ministry of Education")
                        <option value="Ministry of Education" selected>Ministry of Education</option>
                        <option value="Central Board of Secondary Education (CBSE)" >Central Board of Secondary Education (CBSE)</option>
                        <option value="National Council of Educational Research & Training (NCERT)" >National Council of Educational Research & Training (NCERT)</option>
                        <option value="National Informatics Centre (NIC)">National Informatics Centre (NIC)</option>
                      @elseif($member->sub_title=="Central Board of Secondary Education (CBSE)")
                        <option value="Ministry of Education">Ministry of Education</option>
                        <option value="Central Board of Secondary Education (CBSE)" selected>Central Board of Secondary Education (CBSE)</option>
                        <option value="National Council of Educational Research & Training (NCERT)" >National Council of Educational Research & Training (NCERT)</option>
                        <option value="National Informatics Centre (NIC)">National Informatics Centre (NIC)</option>
                      @elseif($member->sub_title=="National Council of Educational Research & Training (NCERT)")
                        <option value="Ministry of Education">Ministry of Education</option>
                        <option value="Central Board of Secondary Education (CBSE)" >Central Board of Secondary Education (CBSE)</option>
                        <option value="National Council of Educational Research & Training (NCERT)" selected>National Council of Educational Research & Training (NCERT)</option>
                        <option value="National Informatics Centre (NIC)">National Informatics Centre (NIC)</option>
                      @else
                        <option value="Ministry of Education">Ministry of Education</option>
                        <option value="Central Board of Secondary Education (CBSE)" >Central Board of Secondary Education (CBSE)</option>
                        <option value="National Council of Educational Research & Training (NCERT)" >National Council of Educational Research & Training (NCERT)</option>
                        <option value="National Informatics Centre (NIC)" selected>National Informatics Centre (NIC)</option>
                      @endif
                    @endif
                </select>
                <span class="text-danger" id="sub_title_error"></span>
              </div>

            </div>
            <br>

            

            <!-- <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Section Title</label>
              <select name="description" class="form-control">
                <option value="">Select Language</option>
             
                @if($member->description=="NAS-2021 National Steering Committee")
                <option value="NAS-2021 National Steering Committee" selected>NAS-2021 National Steering Committee</option>               
                <option value="NAS Cell CBSE HQ">NAS Cell CBSE HQ</option>
                @elseif($member->description=="NAS Cell CBSE HQ")
                <option value="NAS-2021 National Steering Committee">NAS-2021 National Steering Committee</option>               
                <option value="NAS Cell CBSE HQ" selected>NAS Cell CBSE HQ</option>
                @else
                <option value="NAS-2021 National Steering Committee">NAS-2021 National Steering Committee</option>               
                <option value="NAS Cell CBSE HQ">NAS Cell CBSE HQ</option>
                @endif
            </select>
              @error('description')
              <span class="text-danger">{{$message}}</span>
              @enderror
            </div> -->
                
                <button type="submit" class="btn btn-primary btn-sm Team_edit">Update</button>
                </form>
                </div>
            </div>
            </div>
</div>
  </div>
</div>

@include('admin.includes.footer')
<script>
  if($("select[name=sub_title]").val()!=''){
    console.log()
    $("select[name=sub_title]").attr('disabled',false)
  }
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