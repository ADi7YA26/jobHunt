@extends('front.layouts.app')

@section('main')
<div class="container my-4">
	<div class="row gutters">
		<div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
			@include('front.account.sidebar')
		</div>
		<div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
			@include('front.message')
            <div class="card border-0 mb-4 p-3">
                <div class="card-body card-form">
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <div>
                            <h3 class="fs-4 mb-0">My Jobs</h3>
                        </div>
                        <div>
                            <a href="{{ route("account.createJob") }}" class="btn btn-primary py-2">Post a Job</a>
                        </div>    
                    </div>
                    <div class="table-responsive">
                        <table class="table">
                            <thead class="bg-light text-primary">
                                <tr>
                                    <th scope="col">Title</th>
                                    <th scope="col">Job Created</th>
                                    <th scope="col">Applicants</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody class="border">
                                @if ($jobs->isNotEmpty())
                                    @foreach ($jobs as $job)
                                    <tr class="active">
                                        <td>
                                            <div class="job-name">{{ $job->title }}</div>
                                            <div class="info1">{{ $job->jobType->name }} | {{ $job->location }}</div>
                                        </td>
                                        <td>{{ \Carbon\Carbon::parse($job->created_at)->format('d M, Y') }}</td>
                                        <td>0 Applications</td>
                                        <td>
                                            @if ($job->status == 1)
                                            <div class="job-status text-capitalize">Active</div>
                                            @else
                                            <div class="job-status text-capitalize">Block</div>
                                            @endif                                    
                                        </td>
                                        <td>
                                            <div class="action-dots float-end">
                                                <div type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="fa fa-ellipsis-v text-primary px-2" aria-hidden="true"></i>
                                                </div>
                                                <ul class="dropdown-menu dropdown-menu-end">
                                                    <li><a class="dropdown-item" href="#"><i class="fa fa-eye" aria-hidden="true"></i> View</a></li>
                                                    <li><a class="dropdown-item" href="#"><i class="fa fa-edit" aria-hidden="true"></i> Edit</a></li>
                                                    <li><a class="dropdown-item" href="#"><i class="fa fa-trash" aria-hidden="true"></i> Delete</a></li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                @endif 
                            </tbody>                                
                        </table>
                    </div>
                    <div>
                        {{ $jobs->links() }}
                    </div>
                </div>
            </div>   
		</div>
	</div>
</div>
@endsection