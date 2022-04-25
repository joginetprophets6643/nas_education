@include('front.includes.header')
<link href="{{asset('assets/front/scss/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
@include('front.includes.nav')


<section class="banner-wrap">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="heading-yellow">
                        {{ __('lang.National Achievement Survey') }}
                    </h2>
                    <div class="breadcrum-wrap">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                              <li class="breadcrumb-item"><a href="{{url('/')}}">{{ __('lang.Home') }}</a></li>
                              <li class="breadcrumb-item active" aria-current="page">{{ __('lang.Report Card') }}</li>
                              <li class="breadcrumb-item active" aria-current="page">NAS-2017</li>
                            </ol>
                          </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="aboutpage-wrap bg-grey ptb-60" data-aos="fade-up">
        <div class="container">
            <div class="row">
              <div class="col-md-12">
                
                   <div class="card-white">
                    <div class="d-flex">
                      {{-- <div class="col-md-12 col-lg-6 aboutpage-img-wrap">
                        <img src="{{asset('assets/front/images/about.png')}}" alt="img" class="img-fluid" />
                      </div> --}}
                      <div class="col-md-12 aboutpage-content d-flex justify-content-between">
                        <h2 class="heading-blue">
                          District Wise Data List of NAS-2017
                        </h2>
                        <div class="">
                            <a class="btn btn-sm org-btn p-1 left-arrow" href="{{url('/report-card/2017')}}">
                                <img src="{{asset('assets/front/images/arrow-left-solid.svg')}}" class="px-1" alt="icon" />
                                <span class="px-1"> Back</span>
                            </a>
                        </div>
                      </div>
                      
                    </div>
                    <div class="col-md-12 mt-3">
                      <div class="desc-black table-responsive" data-aos="fade-up">
                      <table id="example" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th>S.NO.</th>
                                    <th>District</th>
                                    <th>Grade-3</th>
                                    <th>Grade-5</th>
                                    <th>Grade-8</th>
                                    <th>Grade-10</th>
                                    <th>All Grade</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $i = 1;
                                ?>
                                @foreach($district_data as $district)
                                <tr>
                                    <td>{{$i++}}.</td>
                                    <td>{{$district->district_name}}</td>
                                    <input type="hidden" id="state_{{$district->state_name}}" value="{{$district->state_name}}"/>
                                    <input type="hidden" id="all3_{{$district->file_name}}" value="all3"/>
                                    <input type="hidden" id="all5_{{$district->file_name}}" value="all5"/>
                                    <input type="hidden" id="all8_{{$district->file_name}}" value="all8"/>
                                    <input type="hidden" id="all_{{$district->file_name}}" value="all"/>

                                    <td>
                                        <input type="hidden" id="lang3_{{$district->file_name}}" value="{{$district->file_name}} Class - 3 (Language)  Report Card"/>
                                        <input type="hidden" id="math3_{{$district->file_name}}" value="{{$district->file_name}} Class - 3 (Mathematics)  Report Card"/>
                                        <input type="hidden" id="evs3_{{$district->file_name}}" value="{{$district->file_name}} Class - 3 (EVS)  Report Card"/>
                                        <a href="javascript:;" class="btn text-white card-blue mx-2 my-2" onclick = "this.href='{{url('download-data-district/'.$district->file_name)}}?name=' + document.getElementById('state_<?php echo $district->state_name; ?>').value + '/' + document.getElementById('lang3_<?php echo $district->file_name; ?>').value">Language</a>
                                        <a href="javascript:;" class="btn text-white card-pink mx-2 my-2" onclick = "this.href='{{url('download-data-district/'.$district->file_name)}}?name=' + document.getElementById('state_<?php echo $district->state_name; ?>').value + '/' + document.getElementById('math3_<?php echo $district->file_name; ?>').value">Mathematics</a>
                                        <a href="javascript:;" class="btn text-white card-yellow  mx-2 my-2" onclick = "this.href='{{url('download-data-district/'.$district->file_name)}}?name=' + document.getElementById('state_<?php echo $district->state_name; ?>').value + '/' + document.getElementById('evs3_<?php echo $district->file_name; ?>').value">EVS</a>
                                        <a href="javascript:;" class="btn text-white btn-success mx-2 my-2" onclick = "this.href='{{url('download-data-district/'.$district->file_name)}}?name=' + document.getElementById('state_<?php echo $district->state_name; ?>').value + '/' + document.getElementById('all3_<?php echo $district->file_name; ?>').value + '/' + document.getElementById('evs3_<?php echo $district->file_name; ?>').value + '/' + document.getElementById('lang3_<?php echo $district->file_name; ?>').value + '/' + document.getElementById('math3_<?php echo $district->file_name; ?>').value">All</a>
                                    </td>

                                    <td>
                                        <input type="hidden" id="lang5_{{$district->file_name}}" value="{{$district->file_name}} Class - 5 (Language)  Report Card"/>
                                        <input type="hidden" id="math5_{{$district->file_name}}" value="{{$district->file_name}} Class - 5 (Mathematics)  Report Card"/>
                                        <input type="hidden" id="evs5_{{$district->file_name}}" value="{{$district->file_name}} Class - 5 (EVS)  Report Card"/>
                                        <a href="javascript:;" class="btn text-white card-blue mx-2 my-2" onclick = "this.href='{{url('download-data-district/'.$district->file_name)}}?name=' + document.getElementById('state_<?php echo $district->state_name; ?>').value + '/' + document.getElementById('lang5_<?php echo $district->file_name; ?>').value">Language</a>
                                        <a href="javascript:;" class="btn text-white card-pink mx-2 my-2" onclick = "this.href='{{url('download-data-district/'.$district->file_name)}}?name=' + document.getElementById('state_<?php echo $district->state_name; ?>').value + '/' + document.getElementById('math5_<?php echo $district->file_name; ?>').value">Mathematics</a>
                                        <a href="javascript:;" class="btn card-yellow text-white mx-2 my-2" onclick = "this.href='{{url('download-data-district/'.$district->file_name)}}?name=' + document.getElementById('state_<?php echo $district->state_name; ?>').value + '/' + document.getElementById('evs5_<?php echo $district->file_name; ?>').value">EVS</a>
                                        <a href="javascript:;" class="btn text-white btn-success mx-2 my-2" onclick = "this.href='{{url('download-data-district/'.$district->file_name)}}?name=' + document.getElementById('state_<?php echo $district->state_name; ?>').value + '/' + document.getElementById('all5_<?php echo $district->file_name; ?>').value + '/' + document.getElementById('evs5_<?php echo $district->file_name; ?>').value + '/' + document.getElementById('lang5_<?php echo $district->file_name; ?>').value + '/' + document.getElementById('math5_<?php echo $district->file_name; ?>').value">All</a>

                                    </td>

                                    <td>
                                        <input type="hidden" id="lang8_{{$district->file_name}}" value="{{$district->file_name}} Class - 8 (Language)  Report Card"/>
                                        <input type="hidden" id="math8_{{$district->file_name}}" value="{{$district->file_name}} Class - 8 (Mathematics)  Report Card"/>
                                        <input type="hidden" id="science8_{{$district->file_name}}" value="{{$district->file_name}} Class - 8 (Science)  Report Card"/>
                                        <input type="hidden" id="sst8_{{$district->file_name}}" value="{{$district->file_name}} Class - 8 (SST)  Report Card"/>
                                        <a href="javascript:;" class="btn text-white card-blue mx-2 my-2" onclick = "this.href='{{url('download-data-district/'.$district->file_name)}}?name=' + document.getElementById('state_<?php echo $district->state_name; ?>').value + '/' + document.getElementById('lang8_<?php echo $district->file_name; ?>').value">Language</a> 
                                        <a href="javascript:;" class="btn text-white card-pink mx-2 my-2" onclick = "this.href='{{url('download-data-district/'.$district->file_name)}}?name=' + document.getElementById('state_<?php echo $district->state_name; ?>').value + '/' + document.getElementById('math8_<?php echo $district->file_name; ?>').value">Mathematics</a>
                                        <a href="javascript:;" class="btn text-white card-sagegreen mx-2 my-2" onclick = "this.href='{{url('download-data-district/'.$district->file_name)}}?name=' + document.getElementById('state_<?php echo $district->state_name; ?>').value + '/' + document.getElementById('science8_<?php echo $district->file_name; ?>').value">Science</a>
                                        <a href="javascript:;" class="btn text-white card-green mx-2 my-2" onclick = "this.href='{{url('download-data-district/'.$district->file_name)}}?name=' + document.getElementById('state_<?php echo $district->state_name; ?>').value + '/' + document.getElementById('sst8_<?php echo $district->file_name; ?>').value">Social Science</a>
                                        <a href="javascript:;" class="btn text-white btn-success mx-2 my-2" onclick = "this.href='{{url('download-data-district/'.$district->file_name)}}?name=' + document.getElementById('state_<?php echo $district->state_name; ?>').value + '/' + document.getElementById('all8_<?php echo $district->file_name; ?>').value + '/' + document.getElementById('lang8_<?php echo $district->file_name; ?>').value + '/' + document.getElementById('math8_<?php echo $district->file_name; ?>').value + '/' + document.getElementById('science8_<?php echo $district->file_name; ?>').value + '/' + document.getElementById('sst8_<?php echo $district->file_name; ?>').value">All</a>

                                    </td>

                                    <td>
                                        <?php
                                        $count_district = strlen($district->district_id);
                                        if($count_district == 3){
                                            $district->district_id = "0".$district->district_id;
                                        }
                                        ?>
                                        
                                        <input type="hidden" id="all10_{{$district->file_name}}" value="{{$district->file_name}}({{$district->district_id}}) Class X Cycle-2  DRC"/>
                                        <input type="hidden" id="grade10_{{$district->file_name}}" value="10"/>
                                        <a href="javascript:;" class="btn btn-success mx-2 my-2" onclick = "this.href='{{url('download-data-district/'.$district->file_name)}}?name=' + document.getElementById('state_<?php echo $district->state_name; ?>').value + '/' + document.getElementById('all10_<?php echo $district->file_name; ?>').value + '/' + document.getElementById('grade10_<?php echo $district->file_name; ?>').value">Download</a>
                                    </td>
                                    <td>
                                        <a href="javascript:;" class="btn btn-success mx-2 my-2" onclick = "this.href='{{url('download-data-district/'.$district->file_name)}}?name=' + document.getElementById('state_<?php echo $district->state_name; ?>').value + '/' + document.getElementById('all_<?php echo $district->file_name; ?>').value">Download</a>
                                    </td>
                                    
                                </tr>
                                @endforeach
                               
                            </tbody>
                            <!-- <tfoot>
                                <tr>
                                    <th>S.NO.</th>
                                    <th>State/UTs</th>
                                    <th>Grade-3</th>
                                    <th>Grade-5</th>
                                    <th>Grade-8</th>
                                    <th>Grade-10</th>
                                    <th>All<th>
                                </tr>
                            </tfoot> -->
                        </table>
                        </div>
                    </div>
                   </div>
                   
              </div>
                
                
            </div>
        </div>
    </section>
<!-- Modal Start -->
<div class="modal" id="not-found">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title" style="color:red;">File Not Exist!</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <!-- <div class="modal-body">
            <h4>File Not Found!</h4>
        </div> -->
        
      </div>
    </div>
  </div>
<!-- Modal End -->

@include('front.includes.footer')
<script src="{{ asset('assets/front/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('assets/front/js/dataTable-bootstrap.js')}}"></script>

    @if(session('not-found'))
        <script>
            $('#not-found').show()
            $('#not-found').css({
                    'display': 'flex',
                    'justify-content': 'center',
                    'align-items': 'center'
                })
            $('.close').click(()=>{
            $('#not-found').hide()
            
        })
        </script>       
    @endif

<script>
    $(document).ready(function() {
    $('#example').DataTable({
        "pageLength": 10,
    });
    });

</script>