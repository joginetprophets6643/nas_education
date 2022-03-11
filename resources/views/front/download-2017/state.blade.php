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
                          State Wise Data List
                        </h2>
                        
                      </div>
                      
                    </div>
                    <div class="col-md-12">
                      <div class="desc-black table-responsive" data-aos="fade-up">
                      <table id="example" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr class="text-center">
                                    <th>S.NO.</th>
                                    <th>State/UTs</th>
                                    <th>Download Grade(3-5-8)</th>
                                    <th>Download Grade(10)</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $i = 1;
                                ?>
                                @foreach($state_data as $state)
                                <tr>
                                    <td>{{$i++}}.</td>
                                    <td>{{$state->state_name}}</td>
                                    <td>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <a class="btn btn-primary my-2" href="{{url('download-data-file/'.$state->file_name)}}">English</a>
                                            </div>
                                            <div class="col-md-6">
                                                <a class="btn btn-secondary my-2" href="{{url('download-data-file/hi/'.$state->file_name)}}">Hindi</a>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="row justify-content-center">
                                            <div class="col-md-6">
                                                <a class="btn btn-success my-2" href="{{url('download-data-file/10/'.$state->file_name)}}">Download</a>
                                            </div>
                                        </div>
                                    </td>
                                    
                                </tr>
                                @endforeach
                               
                            </tbody>
                            <tfoot>
                                <tr class="text-center">
                                    <th>S.NO.</th>
                                    <th>State/UTs</th>
                                    <th>Download Grade(3-5-8)</th>
                                    <th>Download Grade(10)</th>
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
<script>
    $(document).ready(function() {
    $('#example').DataTable();
    });
</script>