@extends('theme.detailThem')
<!-- @section('content') -->

<section class="about section-padding" id="section_7">
        <div class="container">
            <div class="row">

                <div class="col-12">
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-intro" role="tabpanel" aria-labelledby="nav-intro-tab">
                            <div class="row">
                            <center>
                                <div class="col-lg-4 col-12 mb-lg-0 mb-4">
                                    
                                <img src="{{asset('storage/image/'.$service->image)}}" class="img-fluid" alt="">
                                <!-- </div> -->

                                <!-- <div class="col-lg-5 col-12 m-auto"> -->
                                    <h3 class="mb-3">{{$service->name}}</h3>

                                 <p>{{$service->description}}</p>
                                    
                                </div>
                                </center>
<!-- 
                                <div class="col-lg-6 col-12 mb-lg-0 mb-4">
                                 <h3 class="mb-3">{{$service->name}}</h3>
                            </div> -->
                            </div>
                        </div>

    
                      
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- @endsection -->