@extends('front.layouts.app')

@section('main')
<div class="container my-4">
	<div class="row gutters">
		<div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
			@include('front.account.sidebar')
		</div>
		<div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
			<div class="card p-5">
				<div class="row gutters">
					<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
						<h6 class="mb-2 text-primary">Personal Details</h6>
					</div>
					<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
						<div class="form-group my-2">
							<label class="form-label" for="fullName">Full Name</label>
							<input type="text" class="form-control" id="fullName" placeholder="Enter full name">
						</div>
					</div>
					<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
						<div class="form-group my-2">
							<label class="form-label" for="eMail">Email</label>
							<input type="email" class="form-control" id="eMail" placeholder="Enter email id">
						</div>
					</div>
					<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
						<div class="form-group my-2">
							<label class="form-label" for="phone">Phone</label>
							<input type="text" class="form-control" id="phone" placeholder="Enter phone number">
						</div>
					</div>
					<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
						<div class="form-group my-2">
							<label class="form-label" for="designation">Designation</label>
							<input type="text" class="form-control" id="designation" placeholder="Designation">
						</div>
					</div>
				</div>
				<div class="row gutters">
					<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
						<div class="text-right mt-4">
							<button type="button" id="submit" name="submit" class="btn btn-primary">Update</button>
						</div>
					</div>
				</div>
			</div>

			<div class="card p-5">
				<div class="row gutters">
					<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
						<h6 class="mb-2 text-primary">Change Password</h6>
					</div>
					<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
						<div class="form-group my-2">
							<label class="form-label" for="old_password">Old Password*</label>
							<input type="password" class="form-control" id="old_password" placeholder="Old password">
						</div>
					</div>
					<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
						<div class="form-group my-2">
							<label class="form-label" for="new_password">New Password</label>
							<input type="password" class="form-control" id="new_password" placeholder="New password">
						</div>
					</div>
					<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
						<div class="form-group my-2">
							<label class="form-label" for="confirm_password">Confirm Password</label>
							<input type="password" class="form-control" id="confirm_password"
								placeholder="Confirm password">
						</div>
					</div>
				</div>
				<div class="row gutters">
					<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
						<div class="text-right mt-4">
							<button type="button" id="submit" name="submit" class="btn btn-primary">Update</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection