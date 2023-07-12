@extends('layouts.admin')
@section('body')
    <div class="nk-content-body">
        <div class="nk-block">
            <div class="card">
                <div class="card-aside-wrap">
                    <div class="card-inner card-inner-lg">
                        <div class="nk-block-head nk-block-head-lg">
                            <div class="nk-block-between">
                                <div class="nk-block-head-content">
                                    <h4 class="nk-block-title">Personal Information</h4>
                                    <div class="nk-block-des">
                                        <p>Basic info, like your name and address, that you use on Nio Platform.</p>
                                    </div>
                                </div>
                                <div class="nk-block-head-content align-self-start d-lg-none">
                                    <a href="#" class="toggle btn btn-icon btn-trigger mt-n1"
                                        data-target="userAside"><em class="icon ni ni-menu-alt-r"></em></a>
                                </div>
                            </div>
                        </div><!-- .nk-block-head -->
                        <div class="nk-block">
                            <div class="nk-data data-list">
                                <div class="data-head">
                                    <h6 class="overline-title">Basics</h6>
                                </div>
                                <div class="data-item" data-bs-toggle="modal" data-bs-target="#profile-edit">
                                    <div class="data-col">
                                        <span class="data-label">First Name</span>
                                        <span class="data-value">{{ Auth::user()->first_name }}</span>
                                    </div>
                                    <div class="data-col data-col-end"><span class="data-more"><em
                                                class="icon ni ni-forward-ios"></em></span></div>
                                </div><!-- data-item -->
                                <div class="data-item" data-bs-toggle="modal" data-bs-target="#profile-edit">
                                    <div class="data-col">
                                        <span class="data-label">Last Name</span>
                                        <span class="data-value">{{ Auth::user()->last_name }}</span>
                                    </div>
                                    <div class="data-col data-col-end"><span class="data-more"><em
                                                class="icon ni ni-forward-ios"></em></span></div>
                                </div><!-- data-item -->
                                <div class="data-item">
                                    <div class="data-col">
                                        <span class="data-label">Email</span>
                                        <span class="data-value">{{ Auth::user()->email }}</span>
                                    </div>
                                    <div class="data-col data-col-end"><span class="data-more disable"><em
                                                class="icon ni ni-lock-alt"></em></span></div>
                                </div><!-- data-item -->
                                <div class="data-item" data-bs-toggle="modal" data-bs-target="#profile-edit">
                                    <div class="data-col">
                                        <span class="data-label">Phone Number</span>
                                        <span class="data-value text-soft">{{ Auth::user()->phone }}</span>
                                    </div>
                                    <div class="data-col data-col-end"><span class="data-more"><em
                                                class="icon ni ni-forward-ios"></em></span></div>
                                </div><!-- data-item -->

                            </div><!-- data-list -->
                            <div class="nk-data data-list">
                                <div class="data-head">
                                    <h6 class="overline-title">Security</h6>
                                </div>
                                <div class="data-item" data-bs-toggle="modal" data-bs-target="#password-edit">
                                    <div class="data-col">
                                        <span class="data-label">Password</span>
                                        <span class="data-value">XXXXXXXXXXXXX</span>
                                    </div>
                                    <div class="data-col data-col-end"><span class="data-more"><em
                                                class="icon ni ni-forward-ios"></em></span></div>
                                </div><!-- data-item -->

                            </div><!-- data-list -->

                        </div><!-- .nk-block -->
                    </div>

                </div><!-- .card-aside-wrap -->
            </div><!-- .card -->
        </div><!-- .nk-block -->
    </div>

    <!-- @@ Profile Edit Modal @e -->
    <div class="modal fade" role="dialog" id="profile-edit">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-bs-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
                <div class="modal-body modal-body-lg">
                    <h5 class="title">Update Profile</h5>
                    <ul class="nk-nav nav nav-tabs">
                        <li class="nav-item">
                            <a class="nav-link active" data-bs-toggle="tab" href="#personal">Personal</a>
                        </li>

                    </ul><!-- .nav-tabs -->
                    <div class="tab-content">
                        <div class="tab-pane active" id="personal">
                            <form action="{{ route('admin.profile.update') }}" method="POST">
                                @csrf
                                <div class="row gy-4">

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label" for="full-name">First Name</label>
                                            <input type="text" class="form-control form-control-lg" name="first_name"
                                                id="full-name" value="{{ Auth::user()->first_name }}"
                                                placeholder="Enter Full name">
                                            @error('first_name')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label" for="display-name">Last Name</label>
                                            <input type="text" class="form-control form-control-lg" name="last_name"
                                                id="display-name" value="{{ Auth::user()->last_name }}"
                                                placeholder="Enter display name">
                                            @error('last_name')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label" for="phone-no">Phone Number</label>
                                            <input type="text" class="form-control form-control-lg" name="phone"
                                                id="phone-no" value="{{ Auth::user()->phone }}"
                                                placeholder="Phone Number">
                                            @error('phone')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                                            <li>
                                                <button type="submit" data-bs-dismiss="modal"
                                                    class="btn btn-lg btn-primary">Update Profile</button>
                                            </li>
                                            <li>
                                                <a href="#" data-bs-dismiss="modal"
                                                    class="link link-light">Cancel</a>
                                            </li>
                                        </ul>
                                    </div>

                                </div>
                            </form>
                        </div><!-- .tab-pane -->

                    </div><!-- .tab-content -->
                </div><!-- .modal-body -->
            </div><!-- .modal-content -->
        </div><!-- .modal-dialog -->
    </div><!-- .modal -->

    <!-- @@ Password Update Modal @e -->
    <div class="modal fade" role="dialog" id="password-edit">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-bs-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
                <div class="modal-body modal-body-lg">
                    <h5 class="title">Change Password</h5>

                    <div class="tab-content">
                        <div class="tab-pane active" id="personal">
                            <form action="{{ route('admin.profile.update') }}" method="POST">
                                @csrf
                                <div class="row gy-4">

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label" for="full-name">Current Password</label>
                                            <input type="password" class="form-control form-control-lg"
                                                name="current_password" id="full-name">
                                        </div>
                                    </div>
                                    <div class="row mt-2">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label" for="display-name">New Password</label>
                                                <input type="password" class="form-control form-control-lg"
                                                    name="password" id="display-name">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label" for="phone-no">Confirm Password</label>
                                                <input type="password" class="form-control form-control-lg"
                                                    name="confirm_password" id="phone-no">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                                            <li>
                                                <button type="submit" data-bs-dismiss="modal"
                                                    class="btn btn-lg btn-primary">Save</button>
                                            </li>
                                            <li>
                                                <a href="#" data-bs-dismiss="modal"
                                                    class="link link-light">Cancel</a>
                                            </li>
                                        </ul>
                                    </div>

                                </div>
                            </form>
                        </div><!-- .tab-pane -->

                    </div><!-- .tab-content -->
                </div><!-- .modal-body -->
            </div><!-- .modal-content -->
        </div><!-- .modal-dialog -->
    </div><!-- .modal -->
@endsection
