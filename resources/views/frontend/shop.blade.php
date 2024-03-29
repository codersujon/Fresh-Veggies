@extends('frontend.master')

@section('main-content')

    {{-- SECTION START --}}
    @include('frontend.layouts.header')
    <!--vegetables  section start -->
    <div class="vegetables_section layout_padding">
        <div class="container">
            <div class="image_2"><img src="{{ asset('frontend') }}/images/img-2.png"></div>
            <h1 class="about_taital">Our Vegetables</h1>
            <p class="lorem_text">Reader will be distracted by the readable content of a</p>
            <div class="vegetables_section_2 layout_padding">
                <div class="row">
                    <div class="col">
                        <div class="box_section">
                            <div class="image_4"><img src="{{ asset('frontend') }}/images/img-4.png"></div>
                            <h2 class="dolor_text">$<span style="color: #ebc30a;">10</span></h2>
                            <h2 class="dolor_text">Tomato</h2>
                            <h2 class="dolor_text_1">1 kg</h2>
                            <p class="tempor_text">adipiscing elit, sed do eiusmod tempor </p>
                            <div class="buy_bt_1 active"><a href="#">Buy Now</a></div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="box_section">
                            <div class="image_4"><img src="{{ asset('frontend') }}/images/img-5.png"></div>
                            <h2 class="dolor_text">$<span style="color: #ebc30a;">10</span></h2>
                            <h2 class="dolor_text">Cabbage</h2>
                            <h2 class="dolor_text_1">1 kg</h2>
                            <p class="tempor_text">adipiscing elit, sed do eiusmod tempor </p>
                            <div class="buy_bt_1"><a href="#">Buy Now</a></div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="box_section">
                            <div class="image_4"><img src="{{ asset('frontend') }}/images/img-6.png"></div>
                            <h2 class="dolor_text">$<span style="color: #ebc30a;">10</span></h2>
                            <h2 class="dolor_text">Eggplant</h2>
                            <h2 class="dolor_text_1">1 kg</h2>
                            <p class="tempor_text">adipiscing elit, sed do eiusmod tempor </p>
                            <div class="buy_bt_1"><a href="#">Buy Now</a></div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="box_section">
                            <div class="image_4"><img src="{{ asset('frontend') }}/images/img-7.png"></div>
                            <h2 class="dolor_text">$<span style="color: #ebc30a;">10</span></h2>
                            <h2 class="dolor_text">Lady-finger</h2>
                            <h2 class="dolor_text_1">1 kg</h2>
                            <p class="tempor_text">adipiscing elit, sed do eiusmod tempor </p>
                            <div class="buy_bt_1"><a href="#">Buy Now</a></div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="box_section">
                            <div class="image_4"><img src="{{ asset('frontend') }}/images/img-8.png"></div>
                            <h2 class="dolor_text">$<span style="color: #ebc30a;">10</span></h2>
                            <h2 class="dolor_text">Bottle-Gourd</h2>
                            <h2 class="dolor_text_1">1 kg</h2>
                            <p class="tempor_text">adipiscing elit, sed do eiusmod tempor </p>
                            <div class="buy_bt_1"><a href="#">Buy Now</a></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="box_section">
                            <div class="image_4"><img src="{{ asset('frontend') }}/images/img-9.png"></div>
                            <h2 class="dolor_text">$<span style="color: #ebc30a;">10</span></h2>
                            <h2 class="dolor_text">Potato</h2>
                            <h2 class="dolor_text_1">1 kg</h2>
                            <p class="tempor_text">adipiscing elit, sed do eiusmod tempor </p>
                            <div class="buy_bt_1"><a href="#">Buy Now</a></div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="box_section">
                            <div class="image_4"><img src="{{ asset('frontend') }}/images/img-10.png"></div>
                            <h2 class="dolor_text">$<span style="color: #ebc30a;">10</span></h2>
                            <h2 class="dolor_text">Capsicum</h2>
                            <h2 class="dolor_text_1">1 kg</h2>
                            <p class="tempor_text">adipiscing elit, sed do eiusmod tempor </p>
                            <div class="buy_bt_1"><a href="#">Buy Now</a></div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="box_section">
                            <div class="image_4"><img src="{{ asset('frontend') }}/images/img-11.png"></div>
                            <h2 class="dolor_text">$<span style="color: #ebc30a;">10</span></h2>
                            <h2 class="dolor_text">Pumpkin-Patch</h2>
                            <h2 class="dolor_text_1">1 kg</h2>
                            <p class="tempor_text">adipiscing elit, sed do eiusmod tempor </p>
                            <div class="buy_bt_1"><a href="#">Buy Now</a></div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="box_section">
                            <div class="image_4"><img src="{{ asset('frontend') }}/images/img-12.png"></div>
                            <h2 class="dolor_text">$<span style="color: #ebc30a;">10</span></h2>
                            <h2 class="dolor_text">Green chilli</h2>
                            <h2 class="dolor_text_1">1 kg</h2>
                            <p class="tempor_text">adipiscing elit, sed do eiusmod tempor </p>
                            <div class="buy_bt_1"><a href="#">Buy Now</a></div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="box_section">
                            <div class="image_4"><img src="{{ asset('frontend') }}/images/img-13.png"></div>
                            <h2 class="dolor_text">$<span style="color: #ebc30a;">10</span></h2>
                            <h2 class="dolor_text">Kof-Radish</h2>
                            <h2 class="dolor_text_1">1 kg</h2>
                            <p class="tempor_text">adipiscing elit, sed do eiusmod tempor </p>
                            <div class="buy_bt_1"><a href="#">Buy Now</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="read_bt_1"><a href="#">Read More</a></div>
        </div>
    </div>
    <!--vegetables section end -->
    @include('frontend.layouts.footer')
    {{-- END SECTION --}}

@endsection
