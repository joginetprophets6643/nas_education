@include('front.includes.header')
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap4.min.css" >
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
                      <div class="col-md-12 col-lg-6 aboutpage-content">
                        <h2 class="heading-blue">
                          District Wise Data List
                        </h2>
                        
                      </div>
                      
                    </div>
                    <div class="col-md-12">
                      <div class="desc-black" data-aos="fade-up">
                      <table id="example" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th>S.NO.</th>
                                    <th>District</th>
                                    <th>Grade-3</th>
                                    <th>Grade-5</th>
                                    <th>Grade-8</th>
                                    <th>Grade-10</th>
                                    <th>All</th>
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
                                    <input type="hidden" id="state" value="{{$district->state_name}}"/>
                                    <input type="hidden" id="all3" value="all3"/>
                                    <input type="hidden" id="all5" value="all5"/>
                                    <input type="hidden" id="all8" value="all8"/>
                                    <input type="hidden" id="all" value="all"/>

                                    <td>
                                        <input type="hidden" id="evs3" value="{{$district->file_name}} Class - 3 (EVS)  Report Card"/>
                                        <input type="hidden" id="lang3" value="{{$district->file_name}} Class - 3 (Language)  Report Card"/>
                                        <input type="hidden" id="math3" value="{{$district->file_name}} Class - 3 (Mathematics)  Report Card"/>
                                        <a href="javascript:;" class="btn btn-primary mx-2 my-2" onclick = "this.href='{{url('download-data-district/'.$district->file_name)}}?name=' + document.getElementById('state').value + '/' + document.getElementById('evs3').value">EVS</a>
                                        <a href="javascript:;" class="btn btn-dark mx-2 my-2" onclick = "this.href='{{url('download-data-district/'.$district->file_name)}}?name=' + document.getElementById('state').value + '/' + document.getElementById('lang3').value">Language</a>
                                        <a href="javascript:;" class="btn btn-secondary mx-2 my-2" onclick = "this.href='{{url('download-data-district/'.$district->file_name)}}?name=' + document.getElementById('state').value + '/' + document.getElementById('math3').value">Math</a>
                                        <a href="javascript:;" class="btn btn-success mx-2 my-2" onclick = "this.href='{{url('download-data-district/'.$district->file_name)}}?name=' + document.getElementById('state').value + '/' + document.getElementById('all3').value + '/' + document.getElementById('evs3').value + '/' + document.getElementById('lang3').value + '/' + document.getElementById('math3').value">All</a>
                                    </td>

                                    <td>
                                        <input type="hidden" id="evs5" value="{{$district->file_name}} Class - 5 (EVS)  Report Card"/>
                                        <input type="hidden" id="lang5" value="{{$district->file_name}} Class - 5 (Language)  Report Card"/>
                                        <input type="hidden" id="math5" value="{{$district->file_name}} Class - 5 (Mathematics)  Report Card"/>
                                        <a href="javascript:;" class="btn btn-primary mx-2 my-2" onclick = "this.href='{{url('download-data-district/'.$district->file_name)}}?name=' + document.getElementById('state').value + '/' + document.getElementById('evs5').value">EVS</a>
                                        <a href="javascript:;" class="btn btn-dark mx-2 my-2" onclick = "this.href='{{url('download-data-district/'.$district->file_name)}}?name=' + document.getElementById('state').value + '/' + document.getElementById('lang5').value">Language</a>
                                        <a href="javascript:;" class="btn btn-secondary mx-2 my-2" onclick = "this.href='{{url('download-data-district/'.$district->file_name)}}?name=' + document.getElementById('state').value + '/' + document.getElementById('math5').value">Math</a>
                                        <a href="javascript:;" class="btn btn-success mx-2 my-2" onclick = "this.href='{{url('download-data-district/'.$district->file_name)}}?name=' + document.getElementById('state').value + '/' + document.getElementById('all5').value + '/' + document.getElementById('evs5').value + '/' + document.getElementById('lang5').value + '/' + document.getElementById('math5').value">All</a>

                                    </td>

                                    <td>
                                        <input type="hidden" id="lang8" value="{{$district->file_name}} Class - 8 (Language)  Report Card"/>
                                        <input type="hidden" id="math8" value="{{$district->file_name}} Class - 8 (Mathematics)  Report Card"/>
                                        <input type="hidden" id="science8" value="{{$district->file_name}} Class - 8 (Science)  Report Card"/>
                                        <input type="hidden" id="sst8" value="{{$district->file_name}} Class - 8 (SST)  Report Card"/>
                                        <a href="javascript:;" class="btn btn-primary mx-2 my-2" onclick = "this.href='{{url('download-data-district/'.$district->file_name)}}?name=' + document.getElementById('state').value + '/' + document.getElementById('lang8').value">Language</a>
                                        <a href="javascript:;" class="btn btn-dark mx-2 my-2" onclick = "this.href='{{url('download-data-district/'.$district->file_name)}}?name=' + document.getElementById('state').value + '/' + document.getElementById('math8').value">Math</a>
                                        <a href="javascript:;" class="btn btn-secondary mx-2 my-2" onclick = "this.href='{{url('download-data-district/'.$district->file_name)}}?name=' + document.getElementById('state').value + '/' + document.getElementById('science8').value">Science</a>
                                        <a href="javascript:;" class="btn btn-info mx-2 my-2" onclick = "this.href='{{url('download-data-district/'.$district->file_name)}}?name=' + document.getElementById('state').value + '/' + document.getElementById('sst8').value">SST</a>
                                        <a href="javascript:;" class="btn btn-success mx-2 my-2" onclick = "this.href='{{url('download-data-district/'.$district->file_name)}}?name=' + document.getElementById('state').value + '/' + document.getElementById('all8').value + '/' + document.getElementById('lang8').value + '/' + document.getElementById('math8').value + '/' + document.getElementById('science8').value + '/' + document.getElementById('sst8').value">All</a>

                                    </td>

                                    <td>
                                        <input type="hidden" id="all10" value="{{$district->file_name}}({{$district->district_id}}) Class X Cycle-2  DRC"/>
                                        <input type="hidden" id="grade10" value="10"/>
                                        <a href="javascript:;" class="btn btn-success mx-2 my-2" onclick = "this.href='{{url('download-data-district/'.$district->file_name)}}?name=' + document.getElementById('state').value + '/' + document.getElementById('all10').value + '/' + document.getElementById('grade10').value">Download</a>
                                    </td>
                                    <td>
                                        <a href="javascript:;" class="btn btn-success mx-2 my-2" onclick = "this.href='{{url('download-data-district/'.$district->file_name)}}?name=' + document.getElementById('state').value + '/' + document.getElementById('all').value">Download</a>
                                    </td>
                                    
                                </tr>
                                @endforeach
                               
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>S.NO.</th>
                                    <th>State/UTs</th>
                                    <th>Grade-3</th>
                                    <th>Grade-5</th>
                                    <th>Grade-8</th>
                                    <th>Grade-10</th>
                                    <th>All<th>
                                </tr>
                            </tfoot>
                        </table>
                        </div>
                    </div>
                   </div>
                   
              </div>
                
                
            </div>
        </div>
    </section>
@include('front.includes.footer')
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap4.min.js"></script>
<script>
    $(document).ready(function() {
    $('#example').DataTable();
    });
</script>