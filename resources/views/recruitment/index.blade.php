@extends('layouts.app')
@section('content')
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
                                    <div class="gallary-item"
                                        style="">
                                        <img src="{{ $photo }}" alt="FORERUNNER HUMAN RESOURCES MANAGEMENT COMPANY LIMITED"
                                            style="width: 100%; height: 260px; background-size: center; object-fit: cover; box-shadow: rgba(50, 50, 93, 0.25) 0px 2px 5px -1px, rgba(0, 0, 0, 0.3) 0px 1px 3px -1px;">
                                        <a href="{{ $photo }}" data-fancybox="gallery"
                                            data-caption="FORERUNNER HUMAN RESOURCES MANAGEMENT COMPANY LIMITED" class="gallary-item-overlay">
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
