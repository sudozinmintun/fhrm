@extends('layouts.app')
@section('content')
    <div class="contact p-120">
        <div class="container">
            <div class="row">

                <div class="col-xl-8 col-lg-8 col-sm-12" style="box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px; padding: 40px;">
                    <div class="contact-form">
                        <div class="title">
                            <h2>
                                Interested in <span>discussing?</span>
                            </h2>
                            <p>
                                Alternatively, you may contact us by filling up the contact form. Our team will response
                                you shortly.
                            </p>
                        </div>
                        <form autocomplete="off" action="{{ route('contact.store') }}" method="POST" id="create-form">
                            @csrf
                            <div class="contact-form-wrap">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="custom-input-group">
                                            <label for="name">Name</label>
                                            <input type="text" value="{{ old('name') }}" placeholder="Your Name*"
                                                name="name">
                                            @error('name')
                                                <div class="form-control-feedback" style="color: red;">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="custom-input-group">
                                            <label for="name">Phone</label>
                                            <input type="text" value="{{ old('phone') }}" placeholder="Your Phone*"
                                                name="phone">
                                            @error('phone')
                                                <div class="form-control-feedback" style="color: red;">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="custom-input-group">
                                            <label for="name">Email</label>
                                            <input name="email" type="text" value="{{ old('email') }}"
                                                placeholder="Email Address">
                                            @error('email')
                                                <div class="form-control-feedback" style="color: red;">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="custom-input-group">
                                            <label for="name">Subject</label>
                                            <input name="subject" type="text" value="{{ old('subject') }}"
                                                placeholder="Subject*">
                                            @error('subject')
                                                <div class="form-control-feedback" style="color: red;">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>

                                </div>
                                <div class="custom-input-group">
                                    <textarea cols="10" rows="2" placeholder="Your message" name="message">{{ old('message') }}</textarea>
                                    @error('message')
                                        <div class="form-control-feedback" style="color: red;">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="custom-input-group">
                                    <div class="part-btn">
                                        <button type="submit" class="def-btn def-btn-2">SUBMIT NOW</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-4 col-sm-12">
                    <div class="contact-info">
                        <div class="title">
                            <h2>Contact Info</h2>
                        </div>
                        <div class="row">
                            <div class="col-xl-12 col-lg-12">
                                <div class="single-box">
                                    <div class="icon">
                                        <span><i class="flaticon-placeholder"></i></span>
                                    </div>
                                    <div class="txt">
                                        <h3>Myanmar</h3>
                                        <p>
                                            Room (01), Building (3), Kyee Pwar Yae Housing, Thingankyun Township, Yangon
                                        </p>
                                    </div>
                                </div>

                                <div class="single-box">
                                    <div class="icon">
                                        <span><i class="flaticon-black-back-closed-envelope-shape"></i></span>
                                    </div>
                                    <div class="txt">
                                        <h3>Your Email</h3>
                                        <p>
                                            <span>
                                                <a href="mailto:info@forerunnerhrm.com">
                                                    info@forerunnerhrm.com
                                                </a>

                                                <a href="mailto:admin@forerunnerhrm.com">
                                                    admin@forerunnerhrm.com
                                                </a>
                                            </span>
                                        </p>
                                    </div>
                                </div>

                                <div class="single-box">
                                    <div class="icon">
                                        <span><i class="flaticon-phone-call"></i></span>
                                    </div>
                                    <div class="txt">
                                        <h3>Phone Number</h3>
                                        <p>
                                            <span>
                                                <a href="tel:+959 255 488 745">
                                                    +959 255 488 745
                                                </a>
                                            </span>
                                        </p>
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
@section('script')
    {!! JsValidator::formRequest('App\Http\Requests\StoreContact', '#create-form') !!}
@endsection
