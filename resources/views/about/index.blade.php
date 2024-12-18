@extends('layouts.app')
@section('content')
    <div class="def-breadcrumb">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-6">
                    <div class="part-txt">
                        <h1>ABOUT <span>US</span></h1>
                        <ul>
                            <li>HOME</li>
                            <li><i class="flaticon-right-arrow-1"></i></li>
                            <li>About us</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="about pt-60 pb-120">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-xl-5 col-lg-7">
                    <div class="part-txt">
                        <h2 style="color:#3854A5;">
                            FORERUNNER HUMAN RESOURCES MANAGEMENT COMPANY LIMITED
                        </h2>
                        <p style="font-size: 15.5px; text-align: justify;">
                            FORERUNNER HUMAN RESOURCES MANAGEMENT COMPANY LIMITED
                            is a Government-approved manpower recruiting agency in Myanmar established on 16th February
                            2023. It has expanded its services to meet the needs of clients and candidates.
                            <br><br>
                            The main objective of FORERUNNER HUMAN RESOURCES MANAGEMENT COMPANY LIMITED is to create global
                            job opportunities so that individuals can contribute to the national economy and become
                            self-reliant.
                            <br><br>
                            We are committed to working for skilled, semi-skilled, and unskilled job seekers while ensuring
                            that experienced employees are matched with roles that meet their skill sets and align with the
                            culture of our clients.
                            <br><br>
                            Our mission is to uplift the quality of life for the people we deploy, which can only be
                            achieved by connecting them with the best opportunity providers who value their services.
                        </p>
                        <div class="boxes d-md-flex">
                            <ul>
                                <li><span><i class="flaticon-check"></i></span>Capability</li>
                                <li><span><i class="flaticon-check"></i></span>Competency</li>
                                <li><span><i class="flaticon-check"></i></span>Knowledge</li>
                                <li><span><i class="flaticon-check"></i></span>Experience</li>
                            </ul>
                            <ul>
                                <li><span><i class="flaticon-check"></i></span> Innovation</li>
                                <li><span><i class="flaticon-check"></i></span>Organization and Culture</li>
                                <li><span><i class="flaticon-check"></i></span>Integrity</li>
                                <li><span><i class="flaticon-check"></i></span>Efficiency</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-xl-6 col-lg-5">
                    <div class="part-img">
                        <img src="{{ asset('assets/images/about.png') }}" alt="image">
                    </div>
                </div>

            </div>
        </div>

    </div>

    <div class="fun-fact-2 pt-60 pb-60" hidden>
        <div class="container">
            <div class="row no-gutters">
                <div class="col-xl-3 col-lg-3 col-sm-6">
                    <div class="single-box">
                        <div class="part-icon">
                            <img src="assets/images/f-fact-icn-1.png" alt="icon">
                        </div>
                        <div class="part-txt">
                            <h2><span class="odometer" data-count="1542">0</span>+</h2>
                            <p>Satisfied Clients</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-sm-6">
                    <div class="single-box">
                        <div class="part-icon">
                            <img src="assets/images/f-fact-icn-2.png" alt="icon">
                        </div>
                        <div class="part-txt">
                            <h2><span class="odometer" data-count="182">0</span>+</h2>
                            <p>Expert Team Member</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-sm-6">
                    <div class="single-box">
                        <div class="part-icon">
                            <img src="assets/images/f-fact-icn-3.png" alt="icon">
                        </div>
                        <div class="part-txt">
                            <h2><span class="odometer" data-count="878">0</span>+</h2>
                            <p>Activate Project</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-sm-6">
                    <div class="single-box">
                        <div class="part-icon">
                            <img src="assets/images/f-fact-icn-4.png" alt="icon">
                        </div>
                        <div class="part-txt">
                            <h2><span class="odometer" data-count="105">0</span>+</h2>
                            <p>Awards Winning</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="feature pb-60">
        <div class="container">
            <div class="bg">
                <div class="row no-gutters">
                    <div class="col-xl-3 col-lg-3 col-md-6">
                        <div class="single-box first">
                            <div class="part-icon">
                                <span><i class="flaticon-support"></i></span>
                            </div>
                            <div class="part-txt">
                                <h3>
                                    Search the country
                                </h3>
                                <p></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6">
                        <div class="single-box color">
                            <div class="part-icon">
                                <span><i class="flaticon-seo"></i></span>
                            </div>
                            <div class="part-txt">
                                <h3>Find The Right Job</h3>
                                <p></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6">
                        <div class="single-box">
                            <div class="part-icon">
                                <span><i class="flaticon-shuttle"></i></span>
                            </div>
                            <div class="part-txt">
                                <h3>Submit Resume</h3>
                                <p></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6">
                        <div class="single-box last color">
                            <div class="part-icon">
                                <span><i class="flaticon-network"></i></span>
                            </div>
                            <div class="part-txt">
                                <h3>Apply Jobs</h3>
                                <p></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="pricing pt-5">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-xl-12 col-lg-12 col-md-12">
                    <div class="title">
                        <h2 style="font-size:35px;">
                            Our Vision, Mission & Values
                        </h2>
                    </div>
                </div>

                <div class="col-xl-12 col-lg-12">
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
                                                <li style="font-size:16px; font-family:Times New Roman;">
                                                    To build better job opportunities for our people and make their life
                                                    easier.
                                                </li>
                                            </ul>
                                            <br><br><br>
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
                                        <br>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <br>
    </div>
@endsection
