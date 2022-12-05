@extends('layouts.master')

@section('editemp_noti_dot')
noti-dot
@endsection



@section('content')

<div class="page-wrapper">
    <!-- Page Content -->
    <div class="content container-fluid">
        <!-- Page Header -->
        <div class="page-header">
            <div class="row">
                <div class="col-sm-12">
                    <h3 class="page-title">Profile</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></li>
                        <li class="breadcrumb-item active">Profile</li>
                    </ul>
                </div>
            </div>
        </div>
        {{-- message --}}
        {!! Toastr::message() !!}
        <!-- /Page Header -->
        <div class="card mb-0">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="profile-view">
                            <div class="profile-img-wrap">
                                <div class="profile-img">
                                    <a href="#">
                                        <img alt="" src="{{ URL::to('/assets/employee_image/'. Auth::user()->avatar) }}" alt="images/default.png">
                                    </a>
                                </div>
                                <div class="pro-edit"><a data-target="#profile_pic_change" data-toggle="modal" class="edit-icon" href="#"><i class="fa fa-pencil"></i></a></div>
                            </div>

                            <div class="profile-basic">
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="profile-info-left">
                                            <h3 class="user-name m-t-0 mb-0">{{ Auth::user()->name }}</h3>
                                            <small class="text-muted">{{ $design_name[0]->design_name }}</small>
                                            <div class="staff-id">Employee ID : {{ Auth::user()->rec_id }}</div>
                                            <div class="small doj text-muted">Date of Join : {{ Auth::user()->join_date }}</div>
                                        </div>
                                    </div>
                                    <div class="col-md-7">
                                        <ul class="personal-info">
                                            <li>
                                                <div class="title">Email:</div>
                                                <div class="text"><a href="">{{ Auth::user()->email }}</a></div>
                                            </li>
                                            @if(!empty($information))
                                            <li>
                                                @if(!empty($information->dob))
                                                <div class="title">Birthday:</div>
                                                <div class="text">{{date('d F, Y',strtotime($information->dob)) }}</div>
                                                @else
                                                <div class="title">Birthday:</div>
                                                <div class="text">N/A</div>
                                                @endif
                                            </li>
                                            <li>
                                                @if(!empty($information->present_city))
                                                <div class="title">City:</div>
                                                <div class="text">{{ $information->present_city }}</div>
                                                @else
                                                <div class="title">City:</div>
                                                <div class="text">N/A</div>
                                                @endif
                                            </li>
                                            <li>
                                                @if(!empty($information->present_state))
                                                <div class="title">State:</div>
                                                <div class="text">{{ $state_name[0]->state_name }}</div>
                                                @else
                                                <div class="title">State:</div>
                                                <div class="text">N/A</div>
                                                @endif
                                            </li>
                                            @else
                                            <li>
                                                <div class="title">Email:</div>
                                                <div class="text">N/A</div>
                                            </li>
                                            <li>
                                                <div class="title">Birthday:</div>
                                                <div class="text">N/A</div>
                                            </li>
                                            <li>
                                                <div class="title">City:</div>
                                                <div class="text">N/A</div>
                                            </li>
                                            <li>
                                                <div class="title">State:</div>
                                                <div class="text">N/A</div>
                                            </li>
                                            @endif
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="pro-edit"><a data-target="#profile_info" data-toggle="modal" class="edit-icon" href="#"><i class="fa fa-pencil"></i></a></div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card tab-box">
            <div class="row user-tabs">
                <div class="col-lg-12 col-md-12 col-sm-12 line-tabs">
                    <ul class="nav nav-tabs nav-tabs-bottom">
                        <li class="nav-item"><a href="#emp_profile" data-toggle="tab" class="nav-link active">Profile</a></li>
                        <li class="nav-item"><a href="#emp_projects" data-toggle="tab" class="nav-link">Projects</a></li>
                        <li class="nav-item"><a href="#bank_statutory" data-toggle="tab" class="nav-link">Bank & Statutory <small class="text-danger">(Admin Only)</small></a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="tab-content">
            <!-- Profile Info Tab -->
            <div id="emp_profile" class="pro-overview tab-pane fade show active">
                <div class="row">
                    <div class="col-md-6 d-flex">
                        <div class="card profile-box flex-fill">
                            <div class="card-body">
                                <h3 class="card-title">
                                    Personal Informations
                                    <!-- <a href="#" class="edit-icon" data-toggle="modal" data-target="#personal_info_modal"><i class="fa fa-pencil"></i></a> -->
                                </h3>
                                <ul class="personal-info">
                                    @if(!empty($information))
                                    <li>
                                        @if(!empty($information->personal_contact))
                                        <div class="title">Personal Contact</div>
                                        <div class="text">{{ $information->personal_contact }}</div>
                                        @else
                                        <div class="title">Personal Contact</div>
                                        <div class="text">N/A</div>
                                        @endif
                                    </li>
                                    <li>
                                        @if(!empty($information->personal_contact))
                                        <div class="title">Alternative Contact</div>
                                        <div class="text">{{ $information->alternative_contact }}</div>
                                        @else
                                        <div class="title">Alternative Contact</div>
                                        <div class="text">N/A</div>
                                        @endif
                                    </li>
                                    <li>
                                        @if(!empty($information->aadhar_no))
                                        <div class="title">Aadhar Number</div>
                                        <div class="text">{{ $information->aadhar_no }}</div>
                                        @else
                                        <div class="title">Aadhar Number</div>
                                        <div class="text">N/A</div>
                                        @endif
                                    </li>
                                    @else
                                    <li>
                                        <div class="title">Personal Contact</div>
                                        <div class="text">N/A</div>
                                    </li>
                                    <li>
                                        <div class="title">Alternative Contact</div>
                                        <div class="text">N/A</div>
                                    </li>
                                    <li>
                                        <div class="title">Aadhar Number</div>
                                        <div class="text">N/A</div>
                                    </li>
                                    @endif
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 d-flex">
                        <div class="card profile-box flex-fill">
                            <div class="card-body">
                                <h3 class="card-title">Emergency Contact
                                    <!-- <a href="#" class="edit-icon" data-toggle="modal" data-target="#emergency_contact_modal"><i class="fa fa-pencil"></i></a> -->
                                </h3>
                                <h5 class="section-title">Primary</h5>
                                <hr>
                                <ul class="personal-info">
                                    @if(!empty($information))
                                    <li>
                                        @if(!empty($information->emerg_con_per_name))
                                        <div class="title">Name</div>
                                        <div class="text">{{ $information->emerg_con_per_name }}</div>
                                        @else
                                        <div class="title">Name</div>
                                        <div class="text">N/A</div>
                                        @endif
                                    </li>
                                    <li>
                                        @if(!empty($information->emerg_con_per_rel))
                                        <div class="title">Relationship</div>
                                        <div class="text">{{ $information->emerg_con_per_rel }}</div>
                                        @else
                                        <div class="title">Relationship</div>
                                        <div class="text">N/A</div>
                                        @endif
                                    </li>
                                    <li>
                                        @if(!empty($information->emerg_con_per_add))
                                        <div class="title">Address </div>
                                        <div class="text">{{ $information->emerg_con_per_add }}</div>
                                        @else
                                        <div class="title">Address</div>
                                        <div class="text">N/A</div>
                                        @endif
                                    </li>
                                    @else
                                    <li>
                                        <div class="title">Name</div>
                                        <div class="text">N/A</div>
                                    </li>
                                    <li>
                                        <div class="title">Relationship</div>
                                        <div class="text">N/A</div>
                                    </li>
                                    <li>
                                        <div class="title">Address </div>
                                        <div class="text">N/A</div>
                                    </li>
                                    @endif
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 d-flex">
                        <div class="card profile-box flex-fill">
                            <div class="card-body">
                                <h3 class="card-title">Bank information</h3>
                                <ul class="personal-info">
                                    <li>
                                        <div class="title">Bank name</div>
                                        <div class="text">N/A</div>
                                    </li>
                                    <li>
                                        <div class="title">Bank account No.</div>
                                        <div class="text">N/A</div>
                                    </li>
                                    <li>
                                        <div class="title">IFSC Code</div>
                                        <div class="text">N/A</div>
                                    </li>
                                    <li>
                                        @if(!empty($information->pan_no))
                                        <div class="title">PAN No</div>
                                        <div class="text">{{ $information->pan_no }}</div>
                                        @else
                                        <div class="title">PAN No</div>
                                        <div class="text">N/A</div>
                                        @endif
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 d-flex">
                        <div class="card profile-box flex-fill">
                            <div class="card-body">
                                <h3 class="card-title">Family Informations
                                    <!-- <a href="#" class="edit-icon" data-toggle="modal" data-target="#family_info_modal"><i class="fa fa-pencil"></i></a> -->
                                </h3>
                                <div class="table-responsive">
                                    <table class="table table-nowrap">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Relationship</th>
                                                <th>Date of Birth</th>
                                                <th>Phone</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>N/A</td>
                                                <td>N/A</td>
                                                <td>N/A</td>
                                                <td>N/A</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 d-flex">
                        <div class="card profile-box flex-fill">
                            <div class="card-body">
                                <h3 class="card-title">Education Informations
                                    <!-- <a href="#" class="edit-icon" data-toggle="modal" data-target="#education_info"><i class="fa fa-pencil"></i></a> -->
                                </h3>
                                <div class="experience-box">
                                    <ul class="experience-list">
                                        <li>
                                            <div class="experience-user">
                                                <div class="before-circle"></div>
                                            </div>
                                            <div class="experience-content">
                                                <div class="timeline-content">
                                                    <a href="#/" class="name">International College of Arts and Science (UG)</a>
                                                    <div>Bsc Computer Science</div>
                                                    <span class="time">2020 - 2022</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="experience-user">
                                                <div class="before-circle"></div>
                                            </div>
                                            <div class="experience-content">
                                                <div class="timeline-content">
                                                    <a href="#/" class="name">International College of Arts and Science (PG)</a>
                                                    <div>Msc Computer Science</div>
                                                    <span class="time">2020 - 2022</span>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 d-flex">
                        <div class="card profile-box flex-fill">
                            <div class="card-body">
                                <h3 class="card-title">Experience
                                    <!-- <a href="#" class="edit-icon" data-toggle="modal" data-target="#experience_info"><i class="fa fa-pencil"></i></a> -->
                                </h3>
                                <div class="experience-box">
                                    <ul class="experience-list">
                                        <li>
                                            <div class="experience-user">
                                                <div class="before-circle"></div>
                                            </div>
                                            <div class="experience-content">
                                                <div class="timeline-content">
                                                    <a href="#/" class="name">Web Designer at Nath Corporation</a>
                                                    <span class="time">Jan 2017 - Present (5 years 2 months)</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="experience-user">
                                                <div class="before-circle"></div>
                                            </div>
                                            <div class="experience-content">
                                                <div class="timeline-content">
                                                    <a href="#/" class="name">Web Designer at Hi-tech</a>
                                                    <span class="time">Jan 2017 - Present (5 years 2 months)</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="experience-user">
                                                <div class="before-circle"></div>
                                            </div>
                                            <div class="experience-content">
                                                <div class="timeline-content">
                                                    <a href="#/" class="name">Web Designer at Amrit Technology</a>
                                                    <span class="time">Jan 2017 - Present (5 years 2 months)</span>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Profile Info Tab -->

            <!-- Projects Tab -->
            <div class="tab-pane fade" id="emp_projects">
                <div class="row">

                </div>
            </div>
            <!-- /Projects Tab -->

            <!-- Bank Statutory Tab -->
            <div class="tab-pane fade" id="bank_statutory">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title"> Basic Salary Information</h3>
                        <form>
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label class="col-form-label">Salary basis <span class="text-danger">*</span></label>
                                        <select class="select">
                                            <option>Select salary basis type</option>
                                            <option>Hourly</option>
                                            <option>Daily</option>
                                            <option>Weekly</option>
                                            <option>Monthly</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label class="col-form-label">Salary amount <small class="text-muted">per month</small></label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">₹</span>
                                            </div>
                                            <input type="text" class="form-control" placeholder="Type your salary amount" value="0.00">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label class="col-form-label">Payment type</label>
                                        <select class="select">
                                            <option>Select payment type</option>
                                            <option>Bank transfer</option>
                                            <option>Check</option>
                                            <option>Cash</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <h3 class="card-title"> PF Information</h3>
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label class="col-form-label">PF contribution</label>
                                        <select class="select">
                                            <option>Select PF contribution</option>
                                            <option>Yes</option>
                                            <option>No</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label class="col-form-label">PF No. <span class="text-danger">*</span></label>
                                        <select class="select">
                                            <option>Select PF contribution</option>
                                            <option>Yes</option>
                                            <option>No</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label class="col-form-label">Employee PF rate</label>
                                        <select class="select">
                                            <option>Select PF contribution</option>
                                            <option>Yes</option>
                                            <option>No</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label class="col-form-label">Additional rate <span class="text-danger">*</span></label>
                                        <select class="select">
                                            <option>Select additional rate</option>
                                            <option>0%</option>
                                            <option>1%</option>
                                            <option>2%</option>
                                            <option>3%</option>
                                            <option>4%</option>
                                            <option>5%</option>
                                            <option>6%</option>
                                            <option>7%</option>
                                            <option>8%</option>
                                            <option>9%</option>
                                            <option>10%</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label class="col-form-label">Total rate</label>
                                        <input type="text" class="form-control" placeholder="N/A" value="11%">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label class="col-form-label">Employee PF rate</label>
                                        <select class="select">
                                            <option>Select PF contribution</option>
                                            <option>Yes</option>
                                            <option>No</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label class="col-form-label">Additional rate <span class="text-danger">*</span></label>
                                        <select class="select">
                                            <option>Select additional rate</option>
                                            <option>0%</option>
                                            <option>1%</option>
                                            <option>2%</option>
                                            <option>3%</option>
                                            <option>4%</option>
                                            <option>5%</option>
                                            <option>6%</option>
                                            <option>7%</option>
                                            <option>8%</option>
                                            <option>9%</option>
                                            <option>10%</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label class="col-form-label">Total rate</label>
                                        <input type="text" class="form-control" placeholder="N/A" value="11%">
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="submit-section">
                                <button class="btn btn-primary submit-btn" type="submit">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- /Bank Statutory Tab -->
        </div>
    </div>
    <!-- /Page Content -->
    @if(!empty($information))
    <!-- Profile Modal -->
    <div id="profile_info" class="modal custom-modal fade" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Profile Information</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('profile/information/save') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="profile-img-wrap edit-img">
                                    <img class="inline-block" src="{{ URL::to('/assets/employee_image/'. Auth::user()->avatar) }}" alt="images/default.png">
                                    <div class="fileupload btn">
                                        <span class="btn-text">edit</span>
                                        <input class="upload" type="file" id="image" name="images">
                                        <input type="hidden" name="hidden_image" id="e_image" value="{{ Auth::user()->avatar }}">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Full Name</label>
                                            <input type="text" class="form-control" id="name" name="name" value="{{ Auth::user()->name }}">
                                            <input type="hidden" class="form-control" id="id" name="id" value="{{ Auth::user()->id }}">
                                            <input type="hidden" class="form-control" id="email" name="email" value="{{ Auth::user()->email }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Birth Date</label>
                                            <div class="cal-icon">
                                                <input class="form-control datetimepicker" type="text" id="dob" name="dob" value="{{ $information->dob }}">
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>City</label>
                                    <input type="text" class="form-control" id="address" name="present_city" value="{{ $information->present_city }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>State</label>
                                    <input type="text" class="form-control" id="state" name="present_state" value="{{ $information->present_state }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Pin Code</label>
                                    <input type="text" class="form-control" id="present_pin" name="present_pin" value="{{ $information->present_pin }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Phone Number</label>
                                    <input type="text" class="form-control" id="phone_number" name="phone_number" value="{{ $information->cug_no }}">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Department <span class="text-danger">*</span></label>
                                    <select class="select" id="department" name="department">
                                        <option value="{{ $information->department }}" {{ ( $information->department == $information->department) ? 'selected' : '' }}>{{ $information->department }} </option>
                                        <option value="Web Development">Web Development</option>
                                        <option value="IT Management">IT Management</option>
                                        <option value="Marketing">Marketing</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Designation <span class="text-danger">*</span></label>
                                    <select class="select" id="" name="designation">
                                        <option value="{{ $information->designation }}" {{ ( $information->designation == $information->designation) ? 'selected' : '' }}>{{ $information->designation }} </option>
                                        <option value="Web Designer">Web Designer</option>
                                        <option value="Web Developer">Web Developer</option>
                                        <option value="Android Developer">Android Developer</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="submit-section">
                            <button type="submit" class="btn btn-primary submit-btn">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /Profile Modal -->
    @else
    <!-- Profile Modal -->
    <div id="profile_info" class="modal custom-modal fade" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Profile Information</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('profile/information/save') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="profile-img-wrap edit-img">
                                    <img class="inline-block" src="{{ URL::to('/assets/employee_image/'. Auth::user()->avatar) }}" alt="images/default.png">
                                    <div class="fileupload btn">
                                        <span class="btn-text">edit</span>
                                        <input class="upload" type="file" id="upload" name="upload">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Full Name</label>
                                            <input type="text" class="form-control" id="name" name="name" value="{{ Auth::user()->name }}">
                                            <input type="hidden" class="form-control" id="id" name="id" value="{{ Auth::user()->id }}">
                                            <input type="hidden" class="form-control" id="email" name="email" value="{{ Auth::user()->email }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Birth Date</label>
                                            <div class="cal-icon">
                                                <input class="form-control datetimepicker" type="text" id="birthDate" name="birthDate">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Gender</label>
                                            <select class="select form-control" id="gender" name="gender">
                                                <option value="Male">Male</option>
                                                <option value="Female">Female</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Address</label>
                                    <input type="text" class="form-control" id="address" name="address">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>State</label>
                                    <input type="text" class="form-control" id="state" name="state">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Country</label>
                                    <input type="text" class="form-control" id="" name="country">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Pin Code</label>
                                    <input type="text" class="form-control" id="pin_code" name="pin_code">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Phone Number</label>
                                    <input type="text" class="form-control" id="phoneNumber" name="phone_number">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Department <span class="text-danger">*</span></label>
                                    <select class="select" id="department" name="department">
                                        <option selected disabled>Select Department</option>
                                        <option value="Web Development">Web Development</option>
                                        <option value="IT Management">IT Management</option>
                                        <option value="Marketing">Marketing</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Designation <span class="text-danger">*</span></label>

                                    <select class="select" id="" name="designation">
                                        <option selected disabled>Select Designation</option>
                                        <option value="Web Designer">Web Designer</option>
                                        <option value="Web Developer">Web Developer</option>
                                        <option value="Android Developer">Android Developer</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Reports To <span class="text-danger">*</span></label>
                                    <select class="select" id="" name="reports_to">
                                        <option selected disabled>-- select --</option>
                                        @foreach ($user as $users )
                                        <option value="{{ $users->name }}">{{ $users->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="submit-section">
                            <button type="submit" class="btn btn-primary submit-btn">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /Profile Modal -->
    @endif

    <!-- Change Profile Pic Modal -->
    <div id="profile_pic_change" class="modal custom-modal fade" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Change Profile Picture</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="/profile/change-pic" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="profile-img-wrap edit-img">
                                    <img class="inline-block" src="{{ URL::to('/assets/employee_image/'. Auth::user()->avatar) }}" alt="images/default.png">
                                    <div class="fileupload btn">
                                        <span class="btn-text">edit</span>
                                        <input class="upload" type="file" id="upload" name="upload">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div hidden class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="hidden" class="form-control" id="id" name="id" value="{{ Auth::user()->id }}">
                                </div>
                            </div>
                        </div>
                        <div class="submit-section">
                            <button type="submit" class="btn btn-primary submit-btn">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /Change Profile Pic Modal -->


    <!-- Personal Info Modal -->
    <div id="personal_info_modal" class="modal custom-modal fade" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Personal Information</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Passport No</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Passport Expiry Date</label>
                                    <div class="cal-icon">
                                        <input class="form-control datetimepicker" type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Tel</label>
                                    <input class="form-control" type="text">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Nationality <span class="text-danger">*</span></label>
                                    <input class="form-control" type="text">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Religion</label>
                                    <div class="cal-icon">
                                        <input class="form-control" type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Marital status <span class="text-danger">*</span></label>
                                    <select class="select form-control">
                                        <option>-</option>
                                        <option>Single</option>
                                        <option>Married</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Employment of spouse</label>
                                    <input class="form-control" type="text">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>No. of children </label>
                                    <input class="form-control" type="text">
                                </div>
                            </div>
                        </div>
                        <div class="submit-section">
                            <button class="btn btn-primary submit-btn">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /Personal Info Modal -->

    <!-- Family Info Modal -->
    <div id="family_info_modal" class="modal custom-modal fade" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"> Family Informations</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-scroll">
                            <div class="card">
                                <div class="card-body">
                                    <h3 class="card-title">Family Member <a href="javascript:void(0);" class="delete-icon"><i class="fa fa-trash-o"></i></a></h3>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Name <span class="text-danger">*</span></label>
                                                <input class="form-control" type="text">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Relationship <span class="text-danger">*</span></label>
                                                <input class="form-control" type="text">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Date of birth <span class="text-danger">*</span></label>
                                                <input class="form-control" type="text">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Phone <span class="text-danger">*</span></label>
                                                <input class="form-control" type="text">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-body">
                                    <h3 class="card-title">Education Informations <a href="javascript:void(0);" class="delete-icon"><i class="fa fa-trash-o"></i></a></h3>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Name <span class="text-danger">*</span></label>
                                                <input class="form-control" type="text">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Relationship <span class="text-danger">*</span></label>
                                                <input class="form-control" type="text">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Date of birth <span class="text-danger">*</span></label>
                                                <input class="form-control" type="text">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Phone <span class="text-danger">*</span></label>
                                                <input class="form-control" type="text">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="add-more">
                                        <a href="javascript:void(0);"><i class="fa fa-plus-circle"></i> Add More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="submit-section">
                            <button class="btn btn-primary submit-btn">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /Family Info Modal -->

    <!-- Emergency Contact Modal -->
    <div id="emergency_contact_modal" class="modal custom-modal fade" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Personal Information</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="card">
                            <div class="card-body">
                                <h3 class="card-title">Primary Contact</h3>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Name <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Relationship <span class="text-danger">*</span></label>
                                            <input class="form-control" type="text">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Phone <span class="text-danger">*</span></label>
                                            <input class="form-control" type="text">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Phone 2</label>
                                            <input class="form-control" type="text">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-body">
                                <h3 class="card-title">Primary Contact</h3>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Name <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Relationship <span class="text-danger">*</span></label>
                                            <input class="form-control" type="text">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Phone <span class="text-danger">*</span></label>
                                            <input class="form-control" type="text">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Phone 2</label>
                                            <input class="form-control" type="text">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="submit-section">
                            <button class="btn btn-primary submit-btn">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /Emergency Contact Modal -->

    <!-- Education Modal -->
    <div id="education_info" class="modal custom-modal fade" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"> Education Informations</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-scroll">
                            <div class="card">
                                <div class="card-body">
                                    <h3 class="card-title">Education Informations <a href="javascript:void(0);" class="delete-icon"><i class="fa fa-trash-o"></i></a></h3>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group form-focus focused">
                                                <input type="text" value="Ranchi University" class="form-control floating">
                                                <label class="focus-label">Institution</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-focus focused">
                                                <input type="text" value="Computer Science" class="form-control floating">
                                                <label class="focus-label">Subject</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-focus focused">
                                                <div class="cal-icon">
                                                    <input type="text" value="01/06/2020" class="form-control floating datetimepicker">
                                                </div>
                                                <label class="focus-label">Starting Date</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-focus focused">
                                                <div class="cal-icon">
                                                    <input type="text" value="31/06/2022" class="form-control floating datetimepicker">
                                                </div>
                                                <label class="focus-label">Complete Date</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-focus focused">
                                                <input type="text" value="BE Computer Science" class="form-control floating">
                                                <label class="focus-label">Degree</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-focus focused">
                                                <input type="text" value="Grade A" class="form-control floating">
                                                <label class="focus-label">Grade</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-body">
                                    <h3 class="card-title">Education Informations <a href="javascript:void(0);" class="delete-icon"><i class="fa fa-trash-o"></i></a></h3>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group form-focus focused">
                                                <input type="text" value="Ranchi University" class="form-control floating">
                                                <label class="focus-label">Institution</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-focus focused">
                                                <input type="text" value="Computer Science" class="form-control floating">
                                                <label class="focus-label">Subject</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-focus focused">
                                                <div class="cal-icon">
                                                    <input type="text" value="01/06/2020" class="form-control floating datetimepicker">
                                                </div>
                                                <label class="focus-label">Starting Date</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-focus focused">
                                                <div class="cal-icon">
                                                    <input type="text" value="31/09/2022" class="form-control floating datetimepicker">
                                                </div>
                                                <label class="focus-label">Complete Date</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-focus focused">
                                                <input type="text" value="BE Computer Science" class="form-control floating">
                                                <label class="focus-label">Degree</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-focus focused">
                                                <input type="text" value="Grade A" class="form-control floating">
                                                <label class="focus-label">Grade</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="add-more">
                                        <a href="javascript:void(0);"><i class="fa fa-plus-circle"></i> Add More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="submit-section">
                            <button class="btn btn-primary submit-btn">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /Education Modal -->

    <!-- Experience Modal -->
    <div id="experience_info" class="modal custom-modal fade" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Experience Informations</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-scroll">
                            <div class="card">
                                <div class="card-body">
                                    <h3 class="card-title">Experience Informations <a href="javascript:void(0);" class="delete-icon"><i class="fa fa-trash-o"></i></a></h3>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group form-focus">
                                                <input type="text" class="form-control floating" value="Digital Devlopment Inc">
                                                <label class="focus-label">Company Name</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-focus">
                                                <input type="text" class="form-control floating" value="India">
                                                <label class="focus-label">Location</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-focus">
                                                <input type="text" class="form-control floating" value="Web Developer">
                                                <label class="focus-label">Job Position</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-focus">
                                                <div class="cal-icon">
                                                    <input type="text" class="form-control floating datetimepicker" value="01/07/2020">
                                                </div>
                                                <label class="focus-label">Period From</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-focus">
                                                <div class="cal-icon">
                                                    <input type="text" class="form-control floating datetimepicker" value="08/09/2022">
                                                </div>
                                                <label class="focus-label">Period To</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-body">
                                    <h3 class="card-title">Experience Informations <a href="javascript:void(0);" class="delete-icon"><i class="fa fa-trash-o"></i></a></h3>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group form-focus">
                                                <input type="text" class="form-control floating" value="Digital Devlopment Inc">
                                                <label class="focus-label">Company Name</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-focus">
                                                <input type="text" class="form-control floating" value="India">
                                                <label class="focus-label">Location</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-focus">
                                                <input type="text" class="form-control floating" value="Web Developer">
                                                <label class="focus-label">Job Position</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-focus">
                                                <div class="cal-icon">
                                                    <input type="text" class="form-control floating datetimepicker" value="01/07/2020">
                                                </div>
                                                <label class="focus-label">Period From</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-focus">
                                                <div class="cal-icon">
                                                    <input type="text" class="form-control floating datetimepicker" value="08/09/2022">
                                                </div>
                                                <label class="focus-label">Period To</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="add-more">
                                        <a href="javascript:void(0);"><i class="fa fa-plus-circle"></i> Add More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="submit-section">
                            <button class="btn btn-primary submit-btn">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /Experience Modal -->

    <!-- /Page Content -->
</div>
@endsection