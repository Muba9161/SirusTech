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
                                <h3 class="card-title mb-0">Total Feedbacks</h3>
                                <button class="btn btn-danger off-canvas mx-3" type="button" data-bs-toggle="offcanvas"
                                    data-bs-target="#offcanvasRight" aria-controls="offcanvasRight"><i
                                        class="fas fa-plus"></i> Add</button>
                            </div>

                            <div class="card-body pt-4">
                                <div class="table-responsive">
                                    <table id="data-table" class="table table-bordered text-nowrap mb-0">

                                        <thead class="border-top">
                                            <tr>
                                                <th class="bg-transparent border-bottom-0" style="width: 5%;">Sr No.</th>
                                                <th class="bg-transparent border-bottom-0">
                                                    Name</th>
                                                <th class="bg-transparent border-bottom-0" style="width: 50%;">
                                                    Message</th>
                                                <th class="bg-transparent border-bottom-0" style="width: 15%;">
                                                    Registered On</th>
                                                <th class="bg-transparent border-bottom-0" style="width: 10%;">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($feedbacks as $feedback)
                                                <tr class="border-bottom">
                                                    <td class="text-center">
                                                        <h6 class="mb-0 fs-14 fw-semibold">{{ $feedback->id }}</h6>
                                                    </td>
                                                    <td>
                                                        <div class="ms-3 mt-0 mt-sm-2">
                                                            <h6 class="mb-0 fs-14 fw-semibold">{{ $feedback->name }}</h6>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="mt-0 mt-sm-3">
                                                            <h6 class="mb-0 fs-14 fw-semibold">{{ $feedback->message }}</h6>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="mt-0 mt-sm-3">
                                                            <h6 class="mb-0 fs-14 fw-semibold">{{ $feedback->created_at }}
                                                            </h6>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="g-2">
                                                            <form action="{{ route('feedback.destroy', $feedback->id) }}"
                                                                method="POST"
                                                                onsubmit="return confirm('Are you sure you want to delete this feedback?');">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit" class="btn text-danger btn-sm"
                                                                    data-bs-toggle="tooltip" title="Delete">
                                                                    <span class="fe fe-trash-2 fs-14"></span>
                                                                </button>
                                                            </form>
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


    <!--Right Offcanvas-->
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
        <div class="offcanvas-header">
            <h5 id="offcanvasRightLabel">Add Feedback</h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"><i
                    class="fe fe-x fs-18"></i></button>
        </div>
        <div class="offcanvas-body">
            <form class="feedback-form" method="POST" action="{{ route('feedback.store') }}">
                @csrf

                <div class="mb-3">
                    <label for="feedback-name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="feedback-name" name="name" required>
                </div>

                <div class="mb-3">
                    <label for="feedback-message" class="form-label">Feedback</label>
                    <textarea class="form-control" id="feedback-message" name="message" rows="5" required></textarea>
                </div>

                <button type="submit" class="btn btn-primary">Submit Feedback</button>
            </form>
        </div>

    </div>
    <!--/Right Offcanvas-->
@endsection
