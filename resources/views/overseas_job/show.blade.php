@extends('layouts.app')
@section('content')
    <div class="faq py-3 pt-5">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-xl-10 col-lg-10 col-md-10"
                    style="box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px; padding: 30px;">
                    <div class="part-txt">
                        <div class="top-txt">
                            <h2>
                                Overseas Jobs
                            </h2>
                            <p>
                                Apart from urgent vacancies large corporations growing companies have an eternal demand for
                                talented manpower to take their business to the higher level. In such cases we keep a
                                continuous lookout for talented individuals who can add value to your organization. We
                                handle these requirements across multiple global locations and with a previously agreed
                                pricing structure.
                            </p>
                        </div>
                        <div class="accordion" id="accordion">
                            @foreach ($jobs as $key => $job)
                                <div class="card">
                                    <div class="card-header" id="heading_{{ $key + 1 }}">
                                        <h2 class="mb-0">
                                            <button
                                                class="btn btn-block text-left collapsed d-flex justify-content-between align-items-center"
                                                type="button" data-toggle="collapse"
                                                data-target="#collapse_{{ $key + 1 }}" aria-expanded="false"
                                                aria-controls="collapse_{{ $key + 1 }}">
                                                {{ $job->title ?? '' }}
                                                <i class="flaticon-arrow-down-sign-to-navigate"></i>
                                            </button>
                                        </h2>
                                    </div>

                                    <div id="collapse_{{ $key + 1 }}" class="collapse"
                                        aria-labelledby="heading_{{ $key + 1 }}" data-parent="#accordion">
                                        <div class="card-body">
                                            <p>
                                                {!! $job->description ?? '' !!}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
