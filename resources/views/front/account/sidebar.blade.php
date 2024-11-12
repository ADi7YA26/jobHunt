<div class="card p-5">
    <div class="user-profile">
        <div class="user-avatar mb-2">
            <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Maxwell Admin">
        </div>
        <h5 class="user-name">{{ Auth::user()->name }} </h5>
        <h6 class="user-designation">Full Stack Developer</h6>
        <button class="btn btn-primary py-2 mt-4">Change profile</button>
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
