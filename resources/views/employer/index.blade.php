@extends('layouts.app')
@section('title', ' - Submit CV')
@section('content')
    <div class="contact p-120">
        <div class="container">
            <div class="row justify-content-center">

                <div class="col-xl-10 col-lg-10 col-sm-12"
                    style="box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px; padding: 40px;">
                    <div class="contact-form">
                        <div class="title">
                            <h2>
                                Application Form
                            </h2>
                        </div>
                        <form autocomplete="off" method="POST" action="{{ route('employer.store') }}" id="create-form">
                            @csrf
                            <div class="row">
                                <div class="col-md-12 mb-3">
                                    <div class="form-group">
                                        <label for="nameInput" class="form-label text-black">Company Name</label>
                                        <input autocomplete="off" type="text"
                                            class="form-control @error('company_name') is-invalid @enderror"
                                            placeholder="Company Name" name="company_name"
                                            value="{{ old('company_name') }}">
                                        @error('company_name')
                                            <div class="help-block with-errors text-danger">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-xl-6 col-md-6 col-sm-12 col-lg-6 mb-3">
                                    <div class="form-group">
                                        <label for="nameInput" class="form-label text-black">Type of Company</label>
                                        <input autocomplete="off" type="text"
                                            class="form-control @error('company_type') is-invalid @enderror"
                                            placeholder="Type Of Company" name="company_type"
                                            value="{{ old('company_type') }}">
                                        @error('company_type')
                                            <div class="help-block with-errors text-danger">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-xl-6 col-md-6 col-sm-12 col-lg-6 mb-3">
                                    <div class="form-group">
                                        <label for="nameInput" class="form-label text-black">Company Email Address</label>
                                        <input type="email" class="form-control @error('email') is-invalid @enderror"
                                            placeholder="Company Email Address" name="email" value="{{ old('email') }}">
                                        @error('email')
                                            <div class="help-block with-errors text-danger">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-xl-6 col-md-6 col-sm-12 col-lg-6 mb-3">
                                    <div class="form-group">
                                        <label for="nameInput" class="form-label text-black">Company Phone Number</label>
                                        <input autocomplete="off" type="text"
                                            class="form-control @error('phone') is-invalid @enderror"
                                            placeholder="Company Phone Number" name="phone" value="{{ old('phone') }}">
                                        @error('phone')
                                            <div class="help-block with-errors text-danger">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-xl-6 col-md-6 col-sm-12 col-lg-6 mb-3">
                                    <div class="form-group">
                                        <label for="nameInput" class="form-label text-black">Company Website</label>
                                        <input autocomplete="off" type="text"
                                            class="form-control @error('website') is-invalid @enderror"
                                            placeholder="Company Website" name="website" value="{{ old('website') }}">
                                        @error('website')
                                            <div class="help-block with-errors text-danger">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-xl-12 col-md-12 col-sm-12 col-lg-12 mb-3">
                                    <div class="form-group">
                                        <label for="nameInput" class="form-label text-black">Company Location</label>
                                        <input autocomplete="off" type="text"
                                            class="form-control @error('location') is-invalid @enderror"
                                            placeholder="Company Location" name="location" value="{{ old('location') }}">
                                        @error('location')
                                            <div class="help-block with-errors text-danger">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-xl-6 col-md-6 col-sm-12 col-lg-6 mb-3">
                                    <div class="form-group">
                                        <label for="nameInput" class="form-label text-black">Job Category</label>
                                        <input autocomplete="off" type="text"
                                            class="form-control @error('job_category') is-invalid @enderror"
                                            placeholder="Job Category" name="job_category"
                                            value="{{ old('job_category') }}">
                                        @error('job_category')
                                            <div class="help-block with-errors text-danger">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-xl-6 col-md-6 col-sm-12 col-lg-6 mb-3">
                                    <div class="form-group">
                                        <label for="nameInput" class="form-label text-black">Age Limit: 20-40</label>
                                        <input autocomplete="off" type="text"
                                            class="form-control @error('age_limit') is-invalid @enderror"
                                            placeholder="Age Limit: 20-40" name="age_limit" value="{{ old('age_limit') }}">
                                        @error('age_limit')
                                            <div class="help-block with-errors text-danger">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>


                                <div class="col-xl-12 col-md-12 col-lg-12 col-sm-12 mb-3">
                                    <div class="form-group">
                                        <label for="nameInput" class="form-label text-black">Educational
                                            Requirement</label>
                                        <textarea class="form-control @error('educational_requirement') is-invalid @enderror" name="educational_requirement"
                                            placeholder="Educational Requirement">{{ old('educational_requirement') }}</textarea>
                                        @error('educational_requirement')
                                            <div class="help-block with-errors text-danger">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-xl-12 col-md-12 col-lg-12 col-sm-12 mb-3">
                                    <div class="form-group">
                                        <label for="nameInput" class="form-label text-black">
                                            Working Experience Requirement
                                        </label>
                                        <textarea class="form-control @error('working_experience_requirement') is-invalid @enderror"
                                            name="working_experience_requirement" placeholder="Working Experience Requirement">{{ old('working_experience_requirement') }}</textarea>
                                        @error('working_experience_requirement')
                                            <div class="help-block with-errors text-danger">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-xl-12 col-md-12 col-lg-12 col-sm-12 mb-3">
                                    <div class="form-group">
                                        <label for="nameInput" class="form-label text-black">Other Additional
                                            Requirement</label>
                                        <textarea class="form-control @error('other_additional_requirement') is-invalid @enderror"
                                            name="other_additional_requirement" placeholder="Other Additional Requirement">{{ old('other_additional_requirement') }}</textarea>
                                        @error('other_additional_requirement')
                                            <div class="help-block with-errors text-danger">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-xl-6 col-md-6 col-lg-6 col-sm-12 mb-3">
                                    <div class="form-group">
                                        <label for="nameInput" class="form-label text-black">Estimate Salary Offer</label>
                                        <input autocomplete="off" type="text"
                                            class="form-control @error('estimate_salary_offer') is-invalid @enderror"
                                            placeholder="Estimate Salary Offer" name="estimate_salary_offer"
                                            value="{{ old('estimate_salary_offer') }}">
                                        @error('estimate_salary_offer')
                                            <div class="help-block with-errors text-danger">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>


                                <div class="col-xl-6 col-md-6 col-lg-6 col-sm-12 mb-3">
                                    <div class="form-group">
                                        <label for="nameInput" class="form-label text-black">Other Allowance</label>
                                        <input autocomplete="off" type="text"
                                            class="form-control @error('other_allowance') is-invalid @enderror"
                                            placeholder="Other Allowance" name="other_allowance"
                                            value="{{ old('other_allowance') }}">
                                        @error('other_allowance')
                                            <div class="help-block with-errors text-danger">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>


                                <div class="col-xl-6 col-md-6 col-lg-6 col-sm-12 mb-3">
                                    <div class="form-group">
                                        <label for="nameInput" class="form-label text-black">Gender: Male = 10, Female =
                                            5</label>
                                        <input autocomplete="off" type="text"
                                            class="form-control @error('gender') is-invalid @enderror"
                                            placeholder="Gender: Male = 10, Female = 5" name="gender"
                                            value="{{ old('gender') }}">
                                        @error('gender')
                                            <div class="help-block with-errors text-danger">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>


                                <div class="col-xl-6 col-md-6 col-lg-6 col-sm-12 mb-3">
                                    <div class="form-group">
                                        <label for="nameInput" class="form-label text-black">Interview Type</label>
                                        <input autocomplete="off" type="text"
                                            class="form-control @error('interview_type') is-invalid @enderror"
                                            placeholder="Interview Type: Online" name="interview_type"
                                            value="{{ old('interview_type') }}">
                                        @error('interview_type')
                                            <div class="help-block with-errors text-danger">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="part-btn">
                                        <button type="submit" class="def-btn def-btn-2">
                                            Apply Now
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
@section('script')
    {!! JsValidator::formRequest('App\Http\Requests\StoreEmployer', '#create-form') !!}
@endsection
