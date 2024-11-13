@extends('front.layouts.app')

@section('main')
<div class="container my-4">
	<div class="row gutters">
		<div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
			@include('front.account.sidebar')
		</div>
		<div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
			@include('front.message')

			<form action="" method="post" id="createJobForm" name="createJobForm" class="card p-5">
				<div class="row gutters">
					<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
						<h6 class="mb-2 text-primary">Job Details</h6>
					</div>
					<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
						<div class="form-group my-2">
							<label class="form-label required" for="title">Title</label>
							<input type="text" name="title" class="form-control" id="title" placeholder="Title">
							<p></p>
						</div>
                    </div>
					<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
						<div class="form-group my-2">
							<label class="form-label required" for="category">Category</label>
							<select name="category" id="category" class="form-control bg-white">
                                <option value="">Select a Category</option>
                                @if($categories->isNotEmpty())
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                @endif
                            </select>
							<p></p>
						</div>
					</div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
						<div class="form-group my-2">
							<label class="form-label required" for="job_type">Job Type</label>
							<select name="job_type" id="job_type" class="form-control bg-white">
                                <option value="">Select job type</option>
                                @if($jobTypes->isNotEmpty())
                                    @foreach ($jobTypes as $type)
                                        <option value="{{ $type->id }}">{{ $type->name }}</option>
                                    @endforeach
                                @endif
                            </select>
							<p></p>
						</div>
					</div>
					<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
						<div class="form-group my-2">
							<label class="form-label" for="vacancy">Vacancy</label>
							<input type="text" name="vacancy" class="form-control" id="vacancy" placeholder="Vacancy">
							<p></p>
						</div>
					</div>
					<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
						<div class="form-group my-2">
							<label class="form-label" for="salary">Salary</label>
							<input type="text" name="salary" class="form-control" id="salary" placeholder="Salary">
						</div>
					</div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
						<div class="form-group my-2">
							<label class="form-label required" for="location">Location</label>
							<input type="text" name="location" class="form-control" id="location" placeholder="Job Location">
							<p></p>
						</div>
					</div>
					<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
						<div class="form-group my-2">
							<label class="form-label required" for="description">Description</label>
							<textarea name="description" class="form-control" id="description" rows="5" placeholder="Job description"></textarea>
							<p></p>
						</div>
					</div>
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
						<div class="form-group my-2">
							<label class="form-label" for="benefits">Benefits</label>
							<textarea name="benefits" class="form-control" id="benefits" rows="5" placeholder="Job benefits"></textarea>
						</div>
					</div>
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
						<div class="form-group my-2">
							<label class="form-label" for="responsibility">Responsibility</label>
							<textarea name="responsibility" class="form-control" id="responsibility" rows="5" placeholder="Job responsibility"></textarea>
						</div>
					</div>
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
						<div class="form-group my-2">
							<label class="form-label" for="qualification">Qualification</label>
							<textarea name="qualification" class="form-control" id="qualification" rows="5" placeholder="Qualifications required"></textarea>
						</div>
						<p></p>
					</div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
						<div class="form-group my-2">
							<label class="form-label" for="keywords">Keywords</label>
							<input name="keywords" class="form-control" id="keywords" rows="5" placeholder="Keywords">
						</div>
					</div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
						<div class="form-group my-2">
							<label class="form-label" for="experience">Experience</label>
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

                <div class="row gutters mt-5">
					<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
						<h6 class="mb-2 text-primary">Company Details</h6>
					</div>
					<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
						<div class="form-group my-2">
							<label class="form-label required" for="company_name">Name</label>
							<input type="text" name="company_name" class="form-control" id="company_name" placeholder="Company Name">
							<p></p>
						</div>
					</div>
					<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
						<div class="form-group my-2">
							<label class="form-label" for="company_location">Location</label>
							<input type="text" name="company_location" class="form-control" id="company_location" placeholder="Location">
						</div>
					</div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
						<div class="form-group my-2">
							<label class="form-label" for="company_website">Website</label>
							<input type="text" name="company_website" class="form-control" id="company_website" placeholder="Website link">
						</div>
					</div>
				</div>
				<div class="row gutters">
					<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
						<div class="text-right mt-4">
							<button type="submit" class="btn btn-primary py-2">Post Job</button>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
@endsection


@section('customJs')
	<script type="text/javascript">
		$("#createJobForm").submit(function(e){
			e.preventDefault();

			$.ajax({
				url: '{{ route("account.saveJob") }}',
				type: 'post',
				dataType: 'json',
				data: $("#createJobForm").serializeArray(),
				success: function(response){
					if(response.status == true){
						["title", "category", "jobType", "vacancy", "location", "description", "company_name"].forEach(field => {
							toggleValidation(field, null); // Use toggleValidation function here
						});

						window.location.href="{{ route('account.myJobs') }}";
					}else{
						let errors = response.errors;                    
						toggleValidation("title", errors.title);
						toggleValidation("category", errors.category);
						toggleValidation("jobType", errors.jobType);
						toggleValidation("vacancy", errors.vacancy);
						toggleValidation("location", errors.location);
						toggleValidation("description", errors.description);
						toggleValidation("company_name", errors.company_name);
					}
				}
			})
		})
	</script>
@endsection