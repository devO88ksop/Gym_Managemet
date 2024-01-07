@extends('admin.layouts.master')
@section('content')
    <main>

        <!--? Services Area Start -->
        <section class="services-area pt-100 pb-150 section-bg" data-background="assets/img/gallery/section_bg01.png">
            <!--? Want To work -->
            <section class="wantToWork-area w-padding">
                <div class="container">
                    <div class="row align-items-end justify-content-between">
                        <div class="col-lg-6 col-md-10 col-sm-10">
                            <div class="section-tittle section-tittle2">
                                <span>oUR sERVICES FOR YOU</span>
                                <h2>" Unlock Your Success: Exclusive Promotion List Revealed! "</h2>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-2 col-md-3">
                            {{-- <a href="#" class="btn wantToWork-btn f-right">More Services</a> --}}
                        </div>
                    </div>
                </div>
            </section>
            <!-- Want To work End -->
            <!--? Services Content -->
            {{-- @foreach ($promos as $promo) --}}
                <div class="d-flex ">
                    <div class="w-25">
                        <div class="single-cat text-center mb-50">
                            <div class="cat-icon">
                                <i class="flaticon-fitness"></i>
                            </div>
                            <div class="cat-cap">
                                <h5>  </h5>
                                <p>The sea freight service has grown consider ably in recent years. We spend timetting to kn.</p>
                            </div>
                            <div class="img-cap">
                                <a href="services.html" class="">Discover More About Us <i
                                        class="ti-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- <div class="container d-inline">

                </div> --}}
            {{-- @endforeach --}}
        </section>
        <!-- Services Area End -->
    </main>
@endsection
