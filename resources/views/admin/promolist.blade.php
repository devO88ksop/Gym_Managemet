@extends('admin.layouts.master')
@section('content')
    <main>

        <!--? Services Area Start -->
        <section class="services-area pt-100 pb-150 section-bg" data-background="assets/img/gallery/section_bg01.png">
            <!--? Want To work -->
            <section class="wantToWork-area w-padding">
                <div class="container">
                    <div class=" align-items-end justify-content-between">
                        <div class="">
                            <div class="section-tittle section-tittle2">
                                <span>oUR sERVICES FOR YOU</span>
                                <h2>" Unlock Your Success: Exclusive Promotion List Revealed! "</h2>
                            </div>
                        </div>

                        <div class="d-flex justify-content-center">
                            @foreach ($promos as $promo)
                                <div class="card mx-2 p-5" style="width: 40rem;height: 50rem;">

                                    <h1 class="card-title "> Name : {{ $promo->name }} </h1>

                                    <h3 class="card-text font-weight-bold"> Description : {{ $promo->description }}</h3>
                                    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                                    <div class="col-lg-12 d-flex">

                                        <div class="submit-info">
                                            <i class="fa-solid fa-user-pen"></i>
                                            <a href="{{ url('promo/' . $promo->promotion_id . '/edit') }}"
                                                class="btn header-btn">Edit</a>
                                        </div>
                                        <div class="ml-4">
                                            <div class="header-right-bCLIENT FEtn f-right d-none d-lg-block ml-100">
                                                <form action="{{ url('promo/'. $promo->promotion_id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn header-btn">Delete</a>
                                                </form>

                                            </div>
                                        </div>
                                    </div>


                                </div>
                            @endforeach
                        </div>
                        <div class="d-flex justify-content-center">>

                            {{ $promos->links() }}
                        </div>
                    </div>
            </section>

            </div>
            </div>
        </section>

    </main>
@endsection
