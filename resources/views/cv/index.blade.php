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
                                APPLY YOUR CV
                            </h2>
                            <p>
                                Fill your informations and upload your CV.
                            </p>
                        </div>
                        <form autocomplete="off" method="POST" action="{{ route('cv.store') }}" enctype="multipart/form-data"
                            id="create-form">
                            @csrf
                            <div class="row">

                                <div class="col-lg-6 col-md-6 col-sm-12 mb-3">
                                    <div class="form-group">
                                        <label>Name*</label>
                                        <input type="text" name="name"
                                            class="form-control @error('name') is-invalid @enderror"
                                            value="{{ old('name') }}">
                                        @error('name')
                                            <div class="help-block with-errors text-danger">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-12 mb-3">
                                    <div class="form-group">
                                        <label>Phone</label>
                                        <input type="text" name="phone"
                                            class="form-control @error('phone') is-invalid @enderror"
                                            value="{{ old('phone') }}">
                                        @error('phone')
                                            <div class="help-block with-errors text-danger">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-lg-12 mb-3">
                                    <div class="form-group">
                                        <label>Additional Note</label>
                                        <textarea class="form-control" rows="5" name="additional_note">{{ old('additional_note') }}</textarea>
                                    </div>
                                </div>

                                <div class="col-lg-12 mb-3">
                                    <div class="choose-img">
                                        <label for="img">Select your CV to upload</label>
                                        <input type="file" name="attachment_file" accept=".doc, .docx, .pdf"
                                            class="form-control-file" />
                                        @error('attachment_file')
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
    {!! JsValidator::formRequest('App\Http\Requests\StoreCv', '#create-form') !!}
@endsection
