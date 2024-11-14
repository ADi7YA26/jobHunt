@extends('front.layouts.app')

@section('main')
<div class="container-xxl pt-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="mb-5">
            <a href="{{ route('jobs') }}"><i class="fa fa-arrow-left" aria-hidden="true"></i> &nbsp;Back to Jobs</a>
        </div>
        <div class="row mb-5 gy-5 gx-4">
            <div class="col-lg-8">
                <div class="d-flex align-items-center mb-5">
                    <img class="flex-shrink-0 img-fluid border rounded" src="{{ $job->company_website }}/favicon.ico"
                        onerror="this.onerror=null; this.src='{{ $job->company_website }}/favicon.png'" alt="job"
                        width="80" />
                    <div class="text-start ps-4">
                        <h3 class="mb-3">{{ $job->title }}</h3>
                        <span class="text-truncate me-3"><i class="fa fa-map-marker-alt text-primary me-2"></i>{{ $job->location }}</span>
                        <span class="text-truncate me-3"><i class="far fa-clock text-primary me-2"></i>{{ $job->jobType->name }}</span>
                        <span class="text-truncate me-0"><i class="far fa-money-bill-alt text-primary me-2"></i>{{ $job->salary }}</span>
                    </div>
                </div>

                <div class="mb-5">
                    <h4 class="mb-3">Job description</h4>
                    <p>{!! nl2br($job->description) !!}</p>
                    <h4 class="mb-3">Responsibility</h4>
                    <p>{!! nl2br($job->responsibility) !!}</p>
                    <h4 class="mb-3">Qualifications</h4>
                    <p>{!! nl2br($job->qualification) !!}</p </div>
                </div>

                <div>
                    <button class="btn btn-primary">Apply</button>
                </div>
            </div>
            
            <div class="col-lg-4">
                <div class="bg-light rounded p-5 mb-4 wow slideInUp" data-wow-delay="0.1s">
                    <h4 class="mb-4">Job Summary</h4>
                    <p><i class="fa fa-angle-right text-primary me-2"></i>Published On: {{ \Carbon\Carbon::parse($job->create_at)->format('d M, Y') }}</p>
                    <p><i class="fa fa-angle-right text-primary me-2"></i>Vacancy: {{ $job->vacancy }} Position</p>
                    <p><i class="fa fa-angle-right text-primary me-2"></i>Job Nature: {{ $job->jobType->name }}</p>
                    <p><i class="fa fa-angle-right text-primary me-2"></i>Salary: {{ $job->salary }}</p>
                    <p class="m-0"><i class="fa fa-angle-right text-primary me-2"></i>Location: {{ $job->location }}</p>
                </div>
                <div class="bg-light rounded p-5 wow slideInUp" data-wow-delay="0.1s">
                    <h4 class="mb-4">Company Details</h4>
                    <p><i class="fa fa-angle-right text-primary me-2"></i>Name: {{ $job->company_name }}</p>
                    <p><i class="fa fa-angle-right text-primary me-2"></i>Location: {{ $job->company_location }}</p>
                    <p><i class="fa fa-angle-right text-primary me-2"></i>Website: <a href="{{ $job->company_website }}" rel="noreferrer" target="_blank">{{ $job->company_website }}</a></p>
                </div>
            </div>
        </div>
    </div>
    @endsection