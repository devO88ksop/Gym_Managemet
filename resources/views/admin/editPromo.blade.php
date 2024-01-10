@extends('admin.layouts.master')
@section('content')
    <main>
        <div class="slider-area2">
            <div class="slider-height2 d-flex align-items-center h-50">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap hero-cap2 text-center pt-70">
                                <h2> Edit Promotion Plans </h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="contact-form-main mt-100 mb-100">
            <div class="container">
                <div class="row justify-content-end">
                    <div class="col-xl-7 col-lg-7">
                        <div class="form-wrapper">
                            <div class="row ">
                                <div class="col-lg-11 col-md-10 col-sm-10">
                                    <div class="section-tittle">
                                        <span>Promotion Plan Form</span>
                                        <h2>Edit Plan</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="from-left d-none d-lg-block ml-5">
                            <img src="{{ asset('assets/img/gallery/contact_form.png') }}" style="height: 580px; width:580px"
                                alt="">
                        </div>
                        <form id="contact-form" action="{{ url('promo/' . $promos->promotion_id) }}" method="POST">
                            @csrf
                            @method('put')
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-box user-icon mb-30">
                                        <input type="text" name="name" placeholder="Name"
                                            id="title" value="{{ $promos->name }}"
                                            class="@error('name') is-invalid @enderror">
                                    </div>
                                    @error('name')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-box email-icon mb-30">

                                        <input type="text" name="description" placeholder="description... "
                                            value="{{ $promos->description }}" class="@error('name') is-invalid @enderror">
                                    </div>
                                    @error('description')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-lg-12 d-flex ">
                                    <div class="submit-info">
                                        <button class="btn" type="submit"> Update </button>
                                    </div>

                                </div>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        </div>

    </main>
@endsection
