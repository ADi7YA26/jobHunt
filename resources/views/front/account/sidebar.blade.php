<div class="card p-5">
    <div class="user-profile">
        <div class="user-avatar mb-2">
            @if (Auth::user()->image != '')
                <img src="{{ asset('profile_pic/thumb/'.Auth::user()->image) }}" alt="avatar">
            @else
                <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="avatar">
            @endif
        </div>
        <h5 class="user-name">{{ Auth::user()->name }} </h5>
        <h6 class="user-designation">{{ Auth::user()->designation }}</h6>
        <button data-bs-toggle="modal" data-bs-target="#exampleModal" type="button" class="btn btn-primary py-2 mt-4">Change profile</button>
    </div>
</div>
<div class="card p-1">
    <a class="nav-item">Account Setting</a>
    <a class="nav-item">Post a job</a>
    <a class="nav-item">My jobs</a>
    <a class="nav-item">Jobs Applied</a>
    <a class="nav-item">Saved Jobs</a>
    <a class="nav-item text-primary" href="{{ route('account.logout') }}"><i class="bi bi-box-arrow-right me-2 fs-5"></i>Logout</a>
</div>

<!-- Profile input form  -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title pb-0" id="exampleModalLabel">Change Profile Picture</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="profilePicForm" name="profilePicForm" action="" method="post">
            <div class="mb-3">
                <label for="image" class="form-label">Profile Image</label>
                <input type="file" class="form-control" id="image" name="image">
                <p class="text-danger" id="image-error"></p>
            </div>
            <div class="d-flex justify-content-end">
                <button type="submit" class="btn btn-primary py-2 mx-3">Update</button>
                <button type="button" class="btn btn-secondary py-2" data-bs-dismiss="modal">Close</button>
            </div>            
        </form>
      </div>
    </div>
  </div>
</div>