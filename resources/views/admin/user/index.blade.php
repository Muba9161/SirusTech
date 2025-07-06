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
                                <h3 class="card-title mb-0">Total Users</h3>
                                <button class="btn btn-danger off-canvas mx-3" type="button" data-bs-toggle="offcanvas"
                                    data-bs-target="#offcanvasRight" aria-controls="offcanvasRight"><i
                                        class="fas fa-plus"></i> Add</button>
                            </div>
                            <div class="card-body pt-4">
                                <div class="table-responsive">
                                    <table id="data-table" class="table table-bordered text-nowrap mb-0">
                                        <thead class="border-top">
                                            <tr>
                                                <th class="bg-transparent border-bottom-0 text-center" style="width: 5%;">Sr
                                                    No.</th>
                                                <th class="bg-transparent border-bottom-0" style="width: 25%;">Name</th>
                                                <th class="bg-transparent border-bottom-0" style="width: 25%;">Email</th>
                                                <th class="bg-transparent border-bottom-0" style="width: 20%;">Registered On
                                                </th>
                                                <th class="bg-transparent border-bottom-0" style="width: 15%;">Updated On
                                                </th>
                                                <th class="bg-transparent border-bottom-0 text-center" style="width: 10%;">
                                                    Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($users as $user)
                                                <tr class="border-bottom">
                                                    <td class="text-center align-middle">
                                                        <h6 class="mb-0 fs-14 fw-semibold">{{ $user->id }}</h6>
                                                    </td>
                                                    <td class="align-middle">
                                                        <h6 class="mb-0 fs-14 fw-semibold">{{ $user->name }}</h6>
                                                    </td>
                                                    <td class="align-middle">
                                                        <h6 class="mb-0 fs-14 fw-semibold">{{ $user->email }}</h6>
                                                    </td>
                                                    <td class="align-middle">
                                                        <h6 class="mb-0 fs-14 fw-semibold">
                                                            {{ $user->created_at->format('Y-m-d H:i') }}</h6>
                                                    </td>
                                                    <td class="align-middle">
                                                        <h6 class="mb-0 fs-14 fw-semibold">
                                                            {{ $user->updated_at->format('Y-m-d H:i') }}</h6>
                                                    </td>
                                                    <td class="text-center align-middle">
                                                        <form action="{{ route('user.destroy', $user->id) }}" method="POST"
                                                            onsubmit="return confirm('Are you sure you want to delete this user?');"
                                                            style="display:inline;">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn text-danger btn-sm"
                                                                data-bs-toggle="tooltip" data-bs-original-title="Delete">
                                                                <span class="fe fe-trash-2 fs-14"></span>
                                                            </button>
                                                        </form>
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

    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
        <div class="offcanvas-header">
            <h5 id="offcanvasRightLabel">Register User</h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close">
                <i class="fe fe-x fs-18"></i>
            </button>
        </div>
        <div class="offcanvas-body">
            <form class="user-form" method="POST" action="{{ route('user.store') }}">
                @csrf

                <div class="mb-3">
                    <label for="user-name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="user-name" name="name" required>
                </div>

                <div class="mb-3">
                    <label for="user-email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="user-email" name="email" required>
                </div>

                <div class="mb-3 position-relative">
                    <label for="user-password" class="form-label">Password</label>
                    <input type="password" class="form-control pe-5" id="user-password" name="password" required>

                    <button type="button" class="btn btn-sm position-absolute top-5 end-0" id="togglePassword"
                        tabindex="-1" aria-label="Toggle password visibility">
                        <i class="bi bi-eye fs-5"></i>
                    </button>
                </div>

                <button type="submit" class="btn btn-primary">Register</button>
            </form>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const toggleBtn = document.getElementById('togglePassword');
            const passwordInput = document.getElementById('user-password');
            const icon = toggleBtn.querySelector('i');

            toggleBtn.addEventListener('click', () => {
                if (passwordInput.type === 'password') {
                    passwordInput.type = 'text';
                    icon.classList.replace('bi-eye', 'bi-eye-slash');
                } else {
                    passwordInput.type = 'password';
                    icon.classList.replace('bi-eye-slash', 'bi-eye');
                }
            });
        });
    </script>
@endsection
