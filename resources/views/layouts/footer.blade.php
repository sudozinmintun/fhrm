<div class="footer footer-2">
    <div class="main-footer py-5">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-sm-6">
                    <div class="footer-about">
                        <h3>Contact Now!</h3>

                        <ul>
                            <li>
                                <span>
                                    <i class="flaticon-placeholder"></i>
                                </span>
                                Room (01), Building (3), Kyee Pwar Yae Housing, Thingankyun Township, Yangon
                            </li>

                            <li>
                                <span>
                                    <i class="flaticon-phone-call"></i>
                                </span>
                                +959 255 488 745
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-sm-6">
                    <div class="links">
                        <h3>Important Links</h3>
                        <ul>
                            <li>
                                <a href="{{ route('welcome') }}">
                                    <i class="flaticon-enter"></i>
                                    Home
                                </a>
                            </li>

                            <li>
                                <a href="{{ route('about.index') }}">
                                    <i class="flaticon-enter"></i>
                                    About Us
                                </a>
                            </li>

                            <li>
                                <a href="{{ route('overview.index') }}">
                                    <i class="flaticon-enter"></i>
                                    Company Overview
                                </a>
                            </li>

                            <li>
                                <a href="{{ route('ceomessage.index') }}">
                                    <i class="flaticon-enter"></i>
                                    Message From CEO
                                </a>
                            </li>

                            <li>
                                <a href="{{ route('team.index') }}">
                                    <i class="flaticon-enter"></i>
                                    Our Team Members
                                </a>
                            </li>

                            <li>
                                <a href="{{ route('organization.index') }}">
                                    <i class="flaticon-enter"></i>
                                    Our Organization Chart
                                </a>
                            </li>

                        </ul>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-3 col-sm-6">
                    <div class="newsletter">
                        <h3>Social Media</h3>
                        <div class="social">
                            <a href="#" target="_blank" class="fb">
                                <i class="flaticon-facebook-app-symbol"></i>
                            </a>
                            <a href="#" class="tw"><i class="flaticon-twitter"></i></a>
                            <a href="#" class="ld"><i class="flaticon-linkedin"></i></a>
                            <a href="#" class="sp"><i class="flaticon-skype-logo"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-3 col-sm-6">
                    <h3>Our Services</h3>
                    <div class="links">
                        <ul>
                            @foreach ($countryies as $country)
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('overseas_jobs.show', $country->id) }}">
                                        <i class="flaticon-enter"></i>
                                        {{ $country->title ?? '' }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12">
                    <center>
                        <p>Copyright &copy; {{ date('Y') }}. All Rights Reserved</p>
                    </center>
                </div>
            </div>
        </div>
    </div>
</div>
