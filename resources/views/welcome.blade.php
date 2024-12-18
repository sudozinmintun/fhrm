@extends('layouts.app')
@section('content')
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


    <div class="fun-fact pt-1">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-sm-6">
                    <div class="single-box">
                        <div class="part-icon">
                            <img src="{{ asset('assets/images/f-fact-icn-1.png') }}" alt="icon">
                        </div>
                        <div class="part-txt">
                            <h2><span class="odometer" data-count="20">0</span> +</h2>
                            <p>Sending Employees</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-sm-6">
                    <div class="single-box">
                        <div class="part-icon">
                            <img src="{{ asset('assets/images/f-fact-icn-2.png') }}" alt="icon">
                        </div>
                        <div class="part-txt">
                            <h2><span class="odometer" data-count="2">0</span> +</h2>
                            <p>Our Experiences</p>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-3 col-sm-6">
                    <div class="single-box">
                        <div class="part-icon">
                            <img src="{{ asset('assets/images/f-fact-icn-3.png') }}" alt="icon">
                        </div>
                        <div class="part-txt">
                            <h2><span class="odometer" data-count="100">0</span> +</h2>
                            <p>Our Partners</p>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-3 col-sm-6">
                    <div class="single-box">
                        <div class="part-icon">
                            <img src="{{ asset('assets/images/f-fact-icn-4.png') }}" alt="icon">
                        </div>
                        <div class="part-txt">
                            <h2><span class="odometer" data-count="15">0</span> +</h2>
                            <p>Jobs Available</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="service py-5 pb-90">
        <div class="container">
            <div class="row no-gutters justify-content-center">
                <div class="col-xl-6 col-lg-6 col-md-8">
                    <div class="heading">
                        <h2 style="color:#125787;text-shadow:1px 3px 3px;">Our Services</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                @foreach ($countryies as $country)
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="single-box">
                            <div class="part-icon">
                                <span>
                                    <i class="fa fa-flag"></i>
                                </span>
                            </div>
                            <div class="part-txt">
                                <a href="{{ route('overseas_jobs.show', $country->id) }}">
                                    {{ $country->title ?? '' }}
                                </a>
                                <p>
                                    <a href="{{ route('overseas_jobs.show', $country->id) }}">
                                        <img src="{{ $country->photo }}" alt="LOGO" style="weight:50px; height:50px;">
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>


    <div class="guide-wrapper pt-80 py-3" style="background-color: white;">
        <div class="container">
            <div class="row">
                @foreach ($activities as $activitie)
                    <div class="col-md-12 col-sm-12 col-lg-12 py-3">
                        <h4 class="gallary-group-title text-black">
                            {{ $activitie->title ?? '' }}
                        </h4>
                        <p class="text-white">
                            {!! $activitie->description ?? '' !!}
                        </p>
                        <div class="row">
                            @php
                                $values = explode(',', $activitie->photo);
                            @endphp
                            @foreach ($values as $photo)
                                <div class="col-md-3 col-lg-3 col-sm-12">
                                    <div class="gallary-item" style="">
                                        <img src="{{ $photo }}"
                                            alt="FORERUNNER HUMAN RESOURCES MANAGEMENT COMPANY LIMITED"
                                            style="width: 100%; height: 260px; background-size: center; object-fit: cover; box-shadow: rgba(50, 50, 93, 0.25) 0px 2px 5px -1px, rgba(0, 0, 0, 0.3) 0px 1px 3px -1px;">
                                        <a href="{{ $photo }}" data-fancybox="gallery"
                                            data-caption="FORERUNNER HUMAN RESOURCES MANAGEMENT COMPANY LIMITED"
                                            class="gallary-item-overlay">
                                            <i class="bi bi-eye"></i>
                                        </a>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
