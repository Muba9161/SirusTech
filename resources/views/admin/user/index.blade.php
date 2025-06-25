@extends('admin.layouts.main')

@section('website-main-section')

    <!--app-content open-->
    <div class="main-content app-content mt-0">
        @if (session('status') == 'success')
            <div class="card-body">
                <div class="btn-list">
                    <!-- Hide the button initially -->
                    <a href="javascript:void(0)" class="btn btn-success bg-success-gradient notice1" id="successBtn"
                        style="display: none;">Success</a>
                </div>
            </div>
        @elseif(session('status') == 'error')
            <div class="card-body">
                <div class="btn-list">
                    <!-- Button will be shown with the error notification -->
                    <a href="javascript:void(0)" class="btn btn-danger bg-danger-gradient error1" id="errorBtn">Danger</a>
                </div>
            </div>
        @endif
        <div class="side-app">
            <!-- CONTAINER -->
            <div class="main-container container-fluid">

                <!-- PAGE-HEADER -->
                <div class="page-header">
                    <h1 class="page-title">Welcome {{ Auth::user()->name }}!</h1>

                </div>
                <!-- PAGE-HEADER END -->

                <!-- ROW-4 -->
                <div class="row">
                    <div class="col-12 col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title mb-0">Total Messages</h3>
                            </div>
                            <div class="card-body pt-4">
                                <div class="table-responsive">
                                    <table id="data-table" class="table table-bordered text-nowrap mb-0">

                                        <thead class="border-top">
                                            <tr>
                                                <th class="bg-transparent border-bottom-0">Sr No.
                                                </th>
                                                <th class="bg-transparent border-bottom-0">
                                                    Name</th>
                                                <th class="bg-transparent border-bottom-0">
                                                    Registered On</th>
                                                <th class="bg-transparent border-bottom-0" style="width: 5%;">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($users as $user)
                                                <tr class="border-bottom">
                                                    <td class="text-center">
                                                        <div class="mt-0 mt-sm-2 d-block">
                                                            <h6 class="mb-0 fs-14 fw-semibold">
                                                                {{$user->id}}</h6>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex">
                                                            <div class="ms-3 mt-0 mt-sm-2 d-block">
                                                                <h6 class="mb-0 fs-14 fw-semibold">
                                                                    {{$user->name}}</h6>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex">
                                                            <div class="mt-0 mt-sm-3 d-block">
                                                                <h6 class="mb-0 fs-14 fw-semibold">
                                                                    {{$user->created_at}}</h6>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="g-2">
                                                            <a class="btn text-danger btn-sm" data-bs-toggle="tooltip"
                                                                data-bs-original-title="Delete"><span
                                                                    class="fe fe-trash-2 fs-14"></span></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ROW-4 END -->
            </div>
            <!-- CONTAINER END -->
        </div>
    </div>
    <!--app-content close-->

    </div>

@endsection
