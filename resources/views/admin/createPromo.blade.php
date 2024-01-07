@extends('admin.layouts.master')
@section('content')
    <main>
        <!--? Hero Start -->
        <div class="slider-area2">
            <div class="slider-height2 d-flex align-items-center h-50">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap hero-cap2 text-center pt-70">
                                <h2> Add New Promotion Plans </h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero End -->
        <!--? Contact form Start -->
        <div class="contact-form-main mt-100 mb-100">
            <div class="container">
                <div class="row justify-content-end">
                    <div class="col-xl-7 col-lg-7">
                        <div class="form-wrapper">
                            <!--Section Tittle  -->
                            <div class="form-tittle">
                                <div class="row ">
                                    <div class="col-lg-11 col-md-10 col-sm-10">
                                        <div class="section-tittle">
                                            <span>Promotion Plan Form</span>
                                            <h2>Adding Plan</h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--End Section Tittle  -->
                            <form id="contact-form" action="{{ url('/promo') }}" method="POST">
                                @csrf
                                {{-- @method('PUSH') --}}
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-box user-icon mb-30">
                                            <input type="text" name="name" placeholder="Name">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-box email-icon mb-30">
                                            <input type="text" name="description" placeholder="description...">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="submit-info">
                                            <button class="btn" type="submit">Add </button>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 mb-3">
                                        <div class="header-right-bCLIENT FEtn f-right d-none d-lg-block ml-30">
                                            <a href="/promolist" class="btn header-btn">Promotion List</a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- contact left Img-->
            <div class="from-left d-none d-lg-block ml-5">
                <img src="assets/img/gallery/contact_form.png" style="height: 580px; width:580px" alt="">
            </div>
        </div>
        <!-- Contact form End -->
    </main>
@endsection
