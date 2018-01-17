<div id="sidebar" class="sidebar-offcanvas" style="margin-left: -78px;">
      <div class="col-md-12">
        <ul class="nav nav-pills nav-stacked" id="nav">
          <li><a href="/dashboard">Home</a></li>
          <li><a href="/job">Add Jobs</a></li>
          <li><a href="/show_jobs">Show Jobs</a></li>
          @if(Auth::check())
          <li><a href="/show_member_details/{{Auth::user()->id}}">Company Details</a></li>
          @endif
          <li><a href="#">Change Password</a></li>
    </ul>
  </div>
</div>