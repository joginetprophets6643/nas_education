@include('front.includes.header')
@include('front.includes.nav')

<section class="banner-wrap">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="heading-yellow">
                {{__('lang.Data Share')}}
                </h2>
                <div class="breadcrum-wrap">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{url('/')}}">{{ __('lang.Home') }}</a></li>
                        <li class="breadcrumb-item"><a href="{{url('/data-share')}}">{{__('lang.Data Share')}}</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Download Data</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="registration-wrap bg-grey ptb-60">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                    <div class="card-white">
                        <div class="registration-content">

                            <div class="d-flex justify-content-between align-items-center">
                                <h2 class="heading-blue">
                                Download CSV Data
                                </h2>
                                <div class="btn-wrap">
                                <a href="{{url('data-share/logout')}}" class="btn org-btn p-5-10">Logout</a>
                                </div>
                            </div>

                            <form>

                                <div class="row mt-4">
                                    <div class="form-group col-md-4">
                                        <label class="form-label">Academic Year <span class="text-danger">*</span></label>
                                        <select class="form-select form-control" id="acc_year" name="acc_year" required>
                                        <option value="">Select Academic Year</option> 
                                        <option value="2020-21">2020-21</option> 
                                        </select>
                                        <span class="text-danger" id="valid_acc_year"></span>
                                    </div>

                                    <div class="form-group col-md-4">
                                        <label class="form-label">State</label>
                                        <select class="form-select form-control" name="state" id="state">
                                            <option value="" class="example">State</option>
                                            @foreach($states as $state)
                                            <option value="{{$state->state_id}}" class="example">{{$state->state_name}}</option>
                                            @endforeach
                                        </select>
                                        @error('state')
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>

                                    <div class="form-group col-md-4 d-list" id="districts">
                                        <label class="form-label">District <span class="text-danger">*</span></label>
                                        <select class="form-select form-control" name="district" id="ajax_districts" disabled>
                                            <option value="">District</option> 
                                        </select>
                                        <span class="text-danger" id="valid_district"></span>
                                    </div>
                                </div>

                                <div class="form-group col-md-12 mt-4">
                                    <label class="form-label">Purpose <span class="text-danger">*</span></label><br>
                                    <textarea name="purpose" class="form-control w-100" id="purpose" rows="3" placeholder="Purpose of download data upto 50 characters..."></textarea>
                                    <span class="text-danger" id="valid_purpose"></span>
                                </div>
                                <div class="term-wrap">
                                <div class="col-md-12">

                                    <div class="form-group checkbox-wrap">
                                        <input type="checkbox" id="term-cons" class="mt-1 form-check-input">
                                        <span class="text-danger mx-2">*</span>
                                        <p class="term-text"> I have read and agreed to the Terms written below : </p>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="terms-content">
                                        <ul>
                                            <li>
                                            1. The data user undertakes to have read and understood the Data Sharing Policy and agrees to abide by all its existing content and intent, as amended from time to time.
                                            </li>
                                            <li>
                                            2. Data obtained herewith, will be solely used for the lawful purposes and the confidentiality and secrecy of the anonymised data will be maintained by the user.
                                            </li>
                                            <li>
                                            3. The data would be used after understanding the concepts, purpose and applicability of data along with a proper appreciation of the limitations and nature of the data and for obtaining meaningful estimates and legitimate results.
                                            </li>
                                            <li>
                                            4. The data obtained as above will not be passed on either wholly or partially with or without profit to any other data user or disseminator of data with or without commercial purpose.
                                            </li>
                                            <li>
                                            5. The data user shall acknowledge the data source for all intents and purposes.
                                            </li>
                                            <li>
                                            6. The data user shall not undertake re-identification or processing of de-identified/ anonymised personal data.
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                </div>  
                                
                            </form>

                            <div class="d-flex align-items-center justify-content-center">
                            <button type="button" id="get_files" class="btn org-btn p-5-10">Get Files</button>
                            </div>

                            <div class="file-section mt-4">

                                <div class="form-group my-4">
                                    <ul id="file-list" class="d-flex justify-content-center"></ul>
                                </div>


                                <div class="card my-4">
                                <div class="card-body">
                                    <ul id="description-list"></ul>
                                </div>
                                </div>

                                <div class="d-flex align-items-center justify-content-center">
                                <button type="button" class="btn p-5-10 org-btn" id="downloadSchema">Download Schema
                                    <i class="fa fa-download ms-1" aria-hidden="true"></i></button>
                                </div>
                            
                            </div>

                        </div>
                    </div>
            </div>   
        </div>
    </div>
</section>




<div class="modal fade" id="stateChange" >
  <div class="modal-dialog">
      <div class="modal-content">
      
      <div class="modal-body p-0">
          
      
          <div class="card">
          <div class="card-body">
              <p>Want to go for a district data?</p> 
              <div class="d-flex">
              <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal" id="n_btn">No</button>
              <button type="submit" class="btn org-btn btn-sm" data-bs-dismiss="modal" id="y_btn">Yes</button>
              </div>
          </div>
          </div>

      </div>
  </div>
  </div>
</div>

@include('front.includes.footer')


<script>
    
let districts = ''

function doValidation(){

    let flag1='';
    let flag2='';
    let flag3='';

    if($('#acc_year').val()==''){
        $('#valid_acc_year').html("The accademic year field is required.");
        flag1=false
    }
    else{
        $('#valid_acc_year').html("");
        flag1=true
    }

    if(!$('#ajax_districts').is(':disabled')){
        const value=$('#ajax_districts').val()
        if(value==''){
        $('#valid_district').html("The district field is required.");
        flag2 = false
        }
        else{
            $('#valid_district').html("");
            flag2= true
        }
    }
    else{
        flag2= true
    }

    const text=$('#purpose').val()
    const len=text.length
    const format= /[`!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?~]/;

    if(len<=50)
    {
        $('#valid_purpose').html("Must be equal to & greater than 50 characters.");
        flag3=false
    }
    else if(format.test(text)){
        $('#valid_purpose').html("Special characters not allowed.");
        flag3=false
    }
    else{
        $('#valid_purpose').html("");
        flag3=true
    }

    if(!$('#term-cons').is(":checked")){
        // $('#termsAlert').modal('show');
        alert('Please agree to the terms given below.')
    }

    return flag1 && flag2 && flag3
    
}


$('#state').change((e)=>{

    $('#ajax_districts').empty();
    $('#ajax_districts').append('<option value="">District</option>')
    let id = e.target.value;

    if(id==''){
        $('#districts').css('display','none')
        $('#ajax_districts').prop('disabled',true)
    }
    else{
        
        $('#stateChange').modal('show');


        $('#y_btn').click(()=>{
            $('#districts').css('display','block')
            $('#ajax_districts').prop('disabled',false)

            let dis = districts.filter(function(districts){
                return districts.state_id==id;
            })
            $('#ajax_districts').empty();
            $('#ajax_districts').append('<option value="">District</option>')


            dis=dis.sort((a, b) => a.district_name.localeCompare(b.district_name))
            dis.forEach((item)=>{
                $('#ajax_districts').append(`<option value="${item.district_id}">
                    ${item.district_name}
                </option>`);
            })
        })

        $('#n_btn').click(()=>{
            $('#districts').css('display','none')
            $('#ajax_districts').prop('disabled',true)
        })


    }

    $('.file-section').css('display','none');
    
})

$('#ajax_districts').change(()=>{
    
    $('.file-section').css('display','none');

})

$('#get_files').click(()=>{
    let data=$('form').serializeArray();
    let acc_year=''
    let purpose=''

    $('.file-section').css('display','none');
    


    let flag=doValidation()

    if($('#term-cons').is(":checked") && flag){

        $.ajax({
        type: "POST",
        data: data,
        headers: {'X-CSRF-TOKEN': "{{ csrf_token() }}"},
        url: base_url + 'data-share/get-files',
        success: function (data) {
            
            let list = document.getElementById("file-list");
            let desc_list=document.getElementById("description-list");

            $('#file-list').empty()
            $('#description-list').empty()

            if(data.length){

            data.forEach((item)=>{
            let li = document.createElement("li");
            let desc_li = document.createElement("li");
            const i = document.createElement('i');
            const a = document.createElement('a');
            const div1 = document.createElement('div');
            const div2 = document.createElement('div');
            const div3 = document.createElement('div');
            const div4 = document.createElement('div');
            i.className = "fa fa-download";

            div1.innerText = item.file_title + ' ';
            

            a.href= base_url + 'assets/uploads/data_share/' + item.file_name
            a.setAttribute('target','_blank')
            a.appendChild(i)

            li.appendChild(div1);
            div2.appendChild(a);
            li.appendChild(div2);
            list.appendChild(li);

            div3.innerText = item.file_title+' :'
            div3.className="col-md-1"
            div4.innerText=item.file_description
            desc_li.appendChild(div3)
            desc_li.appendChild(div4)
            desc_list.appendChild(desc_li);
            })

            $('.file-section').css('display','block');
            $('#downloadSchema').css('display','block');
            }
            else{

                let li = document.createElement("li");
                let span = document.createElement("span");

                li.className = "justify-content-center text-danger";
                span.innerText="No files Found!"
                li.appendChild(span);
                desc_list.appendChild(li);
                $('.file-section').css('display','block');
                $('#downloadSchema').css('display','none');
            }

        }

        })

    }
    
})


$(document).ready(()=> {
    $.ajax({
    type: "GET",
    url: api_url + 'district_masters?limit=-1',
    }).done(response => {
        districts=response.data;
    })
})

</script>