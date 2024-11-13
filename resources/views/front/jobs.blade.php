@extends('front.layouts.app')

@section('main')
<section class="section-3 py-5 bg-2 ">
    <div class="container">
        <div class="row">
            <div class="col-6 col-md-10 ">
                <h2>Find Jobs</h2>
            </div>
            <div class="col-6 col-md-2">
                <div class="align-end">
                    <select name="sort" id="sort" class="form-control">
                        <option value="">Latest</option>
                        <option value="">Oldest</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="row pt-5">
            <div class="col-md-4 col-lg-3 sidebar mb-4">
                <div class="card border-0 shadow p-4">
                    <div class="mb-4">
                        <h6>Keywords</h6>
                        <input type="text" placeholder="Keywords" class="form-control">
                    </div>

                    <div class="mb-4">
                        <h6>Location</h6>
                        <input type="text" placeholder="Location" class="form-control">
                    </div>

                    <div class="mb-4">
                        <h6>Category</h6>
                        <select name="category" id="category" class="form-control bg-white">
                            <option value="">Select a Category</option>
                            @if($categories->isNotEmpty())
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            @endif
                        </select>
                    </div>

                    <div class="mb-4">
                        <h6>Job Type</h6>
                        @if($jobTypes->isNotEmpty())
                            @foreach ($jobTypes as $type)
                                <div class="form-check mb-2">
                                    <input class="form-check-input" name="job_type" type="checkbox" value="{{ $type->id }}"
                                        id="job-type-{{ $type->id }}">
                                    <label class="form-check-label" for="job-type-{{ $type->id }}">{{ $type->name }}</label>
                                </div>
                            @endforeach
                        @endif
                    </div>

                    <div class="mb-4">
                        <h6>Experience</h6>
                        <select name="experience" id="experience" class="form-control bg-white">
                            <option value="0">Fresher</option>
                            <option value="2">0-2 Years</option>
                            <option value="4">2-4 Years</option>
                            <option value="6">4-6 Years</option>
                            <option value="8">6-8 Years</option>
                            <option value="10">8-10 Years</option>
                            <option value="10_plus">10+ Years</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="col-md-8 col-lg-9 ">
                @if ($jobs->isNotEmpty())
                    @foreach ($jobs as $job)
                        <div class="job-card  bg-white shadow mb-3 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="job-card-header">
                                <img src="{{ $job->company_website }}/favicon.ico"
                                    onerror="this.onerror=null; this.src='{{ $job->company_website }}/favicon.png'"
                                    alt="job" />
                                <div>
                                    <h4 class="my-0">{{ $job->company_name }}</h4>
                                    <span>{{ $job->location }}</span>
                                </div>
                            </div>
                            <h4>{{ $job->title }}</h4>
                            <p>{{ Str::words(strip_tags($job->description), 35) }}</p>
                            <div class="job-card-footer">
                                @if ($job->vacancy)
                                    <span>{{ $job->vacancy }} Vacancy</span>
                                @endif
                                <span>{{ $job->jobType->name }}</span>
                                @if ($job->salary)
                                    <span>{{ $job->salary }}</span> 
                                @endif
                            </div>
                        </div>
                    @endforeach
                @else
                    <p class="text-center">No jobs found</p>
                @endif
            </div>
        </div>
</section>
@endsection