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
                                <h1>Daftar Akun</h1>
                                <p class="mb-4">Daftarkan akunmu dan jadilah bagian dari relawan bersama GoodDeed!</p>
                            </div>
                            <form action="{{ route('register') }}" method="post" autocomplete="off">
                                @csrf
                                <div class="form-group first">
                                    <label for="name">Name</label>
                                    <input type="text"
                                        class="form-control @error('name') is-invalid
                                    @enderror"
                                        id="name" value="{{ old('name') }}" name="name">
                                    @error('name')
                                        <small class="invalid-feedback">
                                            {{ $message }}
                                        </small>
                                    @enderror
                                </div>
                                <div class="form-group">
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
                                
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email"
                                        class="form-control @error('email') is-invalid
                                    @enderror"
                                        id="email" value="{{ old('email') }}" name="email">
                                    @error('email')
                                        <small class="invalid-feedback">
                                            {{ $message }}
                                        </small>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="phone">Phone Number</label>
                                    <input type="number"
                                        class="form-control @error('phone') is-invalid
                                    @enderror no-spinner"
                                        id="phone" value="{{ old('phone') }}" name="phone">
                                    @error('phone')
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

                                <button type="submit" class="btn btn-register">Register</button>

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
