@extends('layouts.admin')
@section('body')
    <div class="nk-content-body">
        <div class="nk-block">
            <div class="card">
                <div class="card-aside-wrap">

                    <div class="card-inner">
                        <table class="datatable-init nk-tb-list nk-tb-ulist" data-auto-responsive="false">
                            <thead>
                                <tr class="nk-tb-item nk-tb-head">
                                    <th class="nk-tb-col nk-tb-col-check">
                                        <div class="custom-control custom-control-sm custom-checkbox notext">
                                            <input type="checkbox" class="custom-control-input" id="uid">
                                            <label class="custom-control-label" for="uid"></label>
                                        </div>
                                    </th>
                                    <th class="nk-tb-col"><span class="sub-text">User</span></th>
                                    <th class="nk-tb-col tb-col-md"><span class="sub-text">Phone</span></th>
                                    <th class="nk-tb-col tb-col-lg"><span class="sub-text">Verified</span></th>
                                    <th class="nk-tb-col tb-col-lg"><span class="sub-text">Last Login</span></th>
                                    <th class="nk-tb-col tb-col-md"><span class="sub-text">Status</span></th>
                                    <th class="nk-tb-col nk-tb-col-tools text-end">
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($admins as $admin)
                                    <tr class="nk-tb-item">
                                        <td class="nk-tb-col nk-tb-col-check">
                                            <div class="custom-control custom-control-sm custom-checkbox notext">
                                                <input type="checkbox" class="custom-control-input" id="uid1">
                                                <label class="custom-control-label" for="uid1"></label>
                                            </div>
                                        </td>
                                        <td class="nk-tb-col">
                                            <div class="user-card">
                                                <div class="user-avatar bg-dim-primary d-none d-sm-flex">
                                                    <span>AB</span>
                                                </div>
                                                <div class="user-info">
                                                    <span class="tb-lead">{{ $admin->first_name }} {{ $admin->last_name }}
                                                        <span class="dot dot-success d-md-none ms-1"></span></span>
                                                    <span>{{ $admin->email }}</span>
                                                </div>
                                            </div>
                                        </td>

                                        <td class="nk-tb-col tb-col-md">
                                            <span>{{ $admin->phone }}</span>
                                        </td>
                                        <td class="nk-tb-col tb-col-lg" data-order="Email Verified - Kyc Unverified">
                                            <ul class="list-status">
                                                <li><em class="icon text-success ni ni-check-circle"></em>
                                                    <span>Email</span>
                                                </li>
                                                <li><em class="icon ni ni-alert-circle"></em> <span>KYC</span></li>
                                            </ul>
                                        </td>
                                        <td class="nk-tb-col tb-col-lg">
                                            <span>05 Oct 2019</span>
                                        </td>
                                        <td class="nk-tb-col tb-col-md">
                                            @if ($admin->status == true)
                                                <span class="tb-status text-success">Active</span>
                                            @else
                                                <span class="tb-status text-danger">Suspended</span>
                                            @endif
                                        </td>
                                        <td class="nk-tb-col nk-tb-col-tools">
                                            <ul class="nk-tb-actions gx-1">

                                                <li>
                                                    <div class="drodown">
                                                        <a href="#" class="dropdown-toggle btn btn-icon btn-trigger"
                                                            data-bs-toggle="dropdown"><em
                                                                class="icon ni ni-more-h"></em></a>
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <ul class="link-list-opt no-bdr">

                                                                <li><a href="#"><em
                                                                            class="icon ni ni-eye"></em><span>View
                                                                            Details</span></a></li>

                                                                <li><a href="#"><em
                                                                            class="icon ni ni-activity-round"></em><span>Activities</span></a>
                                                                </li>
                                                                <li class="divider"></li>
                                                                <li><a href="#"><em
                                                                            class="icon ni ni-na"></em><span>Suspend
                                                                            User</span></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </td>

                                    </tr><!-- .nk-tb-item  -->
                                @empty
                                @endforelse

                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
