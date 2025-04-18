@extends('home.layouts.main')
@section('content')
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img src="{{ asset('colorlib/images/register.jpg') }}" alt="Image" class="img-fluid">
                </div>
                <div class="col-md-6 contents">
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <div class="mb-4">
                                <h1>Masuk</h1>
                                <p class="mb-4">Masuk sebagai user agar kamu bisa menggunakan hak mu sebagai seorang relawan!</p>
                            </div>
                            <form action="{{ route('register') }}" method="post" autocomplete="off">
                                @csrf
                                <div class="form-group first">
                                    <label for="username">Username</label>
                                    <input type="text"
                                        class="form-control @error('username') is-invalid
                                    @enderror"
                                        id="username" value="{{ old('username') }}" name="username">
                                    @error('username')
                                        <small class="invalid-feedback">
                                            {{ $message }}
                                        </small>
                                    @enderror
                                </div>
                                <div class="form-group last mb-4">
                                    <label for="password">Password</label>
                                    <input type="password"
                                        class="form-control @error('password') is-invalid
                                    @enderror"
                                        id="password" name="password">
                                    @error('password')
                                        <small class="invalid-feedback">
                                            {{ $message }}
                                        </small>
                                    @enderror
                                </div>

                                <button type="submit" class="btn btn-register mb-3">Login</button>
                                <p>Belum punya akun? <a href="/register">daftar</a> disini.</p>
                                <span class="d-block text-left my-4 text-muted"> Atau Login Dengan </span>

                                <div class="social-login">
                                    <a href="#" class="icon">
                                        <span class="bx bxl-google icon-icon mr-3"></span>
                                    </a>
                                    <a href="#" class="icon">
                                        <span class="bx bxl-facebook icon-icon mr-3"></span>
                                    </a>
                                    <a href="#" class="icon">
                                        <span class="bx bxl-github icon-icon mr-3"></span>
                                    </a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
