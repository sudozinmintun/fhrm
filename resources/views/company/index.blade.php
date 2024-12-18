@extends('layouts.app')
@section('content')
    <div class="pricing p-120">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-xl-3 col-lg-8 col-md-8">
                    <div class="title">
                        <h2 style="font-size:35px;">Our Vision, Mission & Values</h2>
                    </div>
                </div>
                <div class="col-xl-9 col-lg-12">
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-month" role="tabpanel"
                            aria-labelledby="nav-month-tab">
                            <div class="row align-items-center justify-content-center">
                                <div class="col-xl-4 col-lg-4 col-md-6">
                                    <div class="single-box">
                                        <div class="top">
                                            <h3>Our Vision</h3>
                                            <div class="price">
                                                <img src="{{ asset('assets/images/f-fact-icn-2.png') }}" alt="icon"
                                                    style="height:50px;weight:50px; ">
                                            </div>
                                        </div>
                                        <div class="">
                                            <ul>
                                                <li style="font-size:16px; font-family:Times New Roman;">To build better job
                                                    opportunities for our people
                                                    and make their life
                                                    easier.</li>

                                            </ul>
                                            <br><br><br><br><br><br>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6">
                                    <div class="single-box center">
                                        <div class="top">
                                            <h3>Our Mission</h3>
                                            <div class="price">
                                                <img src="{{ asset('assets/images/f-fact-icn-3.png') }}" alt="icon"
                                                    style="height:50px;weight:50px;">
                                            </div>
                                        </div>
                                        <div class="">
                                            <ul>
                                                <li style="font-size:16px; font-family:Times New Roman;">To create
                                                    employment for skilled and unskilled
                                                    Myanmar workers in the
                                                    international market.


                                                </li>
                                                <li style="font-size:16px; font-family:Times New Roman;"> To reduce the
                                                    number of jobless workers in our
                                                    country.
                                                </li>
                                                <li style="font-size:16px; font-family:Times New Roman;"> To fulfill
                                                    workforce requirements for our
                                                    clients.
                                                </li>

                                            </ul>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6">
                                    <div class="single-box ">
                                        <div class="top">
                                            <h3>Our Values</h3>
                                            <div class="price">
                                                <img src="{{ asset('assets/images/f-fact-icn-4.png') }}" alt="icon"
                                                    style="height:50px;weight:50px;">
                                            </div>
                                        </div>
                                        <div class="">
                                            <ul>
                                                <li style="font-size:16px; font-family:Times New Roman;">Respect & Ethic
                                                </li>
                                                <li style="font-size:16px; font-family:Times New Roman;"> Responsibility &
                                                    Accountability
                                                </li>
                                                <li style="font-size:16px; font-family:Times New Roman;"> Professionalism
                                                </li>
                                                <li style="font-size:16px; font-family:Times New Roman;"> Long-term working
                                                    relationships
                                                </li>
                                            </ul>
                                        </div>
                                        <br><br><br>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
