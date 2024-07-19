@extends('layouts.app')

@section('title', 'Register - Bootstrap 5 Admin Dashboard Template')

@section('content')
<div class="d-flex align-items-center justify-content-center my-5">
    <div class="container-fluid">
        <div class="row row-cols-1 row-cols-lg-2 row-cols-xl-3">
            <div class="col mx-auto">
                <div class="card my-5 shadow-none border">
                    <div class="card-body">
                        <div class="p-4">
                            <div class="text-center mb-4">
                                <h5 class="">Create Account</h5>
                                <p class="mb-0">Please fill the below details to create your account</p>
                            </div>
                            <div class="form-body">
                                <form action="{{ route('register') }}" method="POST" class="row g-3">
                                    @csrf
                                    <div class="col-12">
                                        <label for="inputUsername" class="form-label">Username</label>
                                        <input type="text" class="form-control" id="inputUsername" name="name" placeholder="John">
                                    </div>
                                    <div class="col-12">
                                        <label for="inputEmailAddress" class="form-label">Email Address</label>
                                        <input type="email" class="form-control" id="inputEmailAddress" name="email" placeholder="example@user.com">
                                    </div>
                                    <div class="col-12">
                                        <label for="inputChoosePassword" class="form-label">Password</label>
                                        <div class="input-group" id="show_hide_password">
                                            <input type="password" class="form-control border-end-0" id="inputChoosePassword" name="password" placeholder="Enter Password">
                                            <a href="javascript:;" class="input-group-text"><i class='bx bx-hide'></i></a>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <label for="inputChoosePasswordConfirmation" class="form-label">Confirm Password</label>
                                        <input type="password" class="form-control" id="inputChoosePasswordConfirmation" name="password_confirmation" placeholder="Confirm Password">
                                    </div>
                                    <div class="col-12">
                                        <label for="inputSelectCountry" class="form-label">Country</label>
                                        <select class="form-select" id="inputSelectCountry" name="country" aria-label="Default select example">
                                            <option selected>India</option>
                                            <option value="1">United Kingdom</option>
                                            <option value="2">America</option>
                                            <option value="3">Dubai</option>
                                        </select>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" name="terms" required>
                                            <label class="form-check-label" for="flexSwitchCheckChecked">I read and agree to Terms & Conditions</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="d-grid">
                                            <button type="submit" class="btn btn-primary">Sign up</button>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="text-center ">
                                            <p class="mb-0">Already have an account? <a href="{{ route('login') }}">Sign in here</a></p>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="login-separater text-center mb-5"> <span class="">OR SIGN UP WITH EMAIL</span>
                                <hr/>
                            </div>
                            <div class="list-inline contacts-social text-center">
                                <a href="javascript:;" class="list-inline-item bg-facebook text-white border-0 rounded-3"><i class="bx bxl-facebook"></i></a>
                                <a href="javascript:;" class="list-inline-item bg-twitter text-white border-0 rounded-3"><i class="bx bxl-twitter"></i></a>
                                <a href="javascript:;" class="list-inline-item bg-google text-white border-0 rounded-3"><i class="bx bxl-google"></i></a>
                                <a href="javascript:;" class="list-inline-item bg-linkedin text-white border-0 rounded-3"><i class="bx bxl-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end row-->
    </div>
</div>
@endsection
