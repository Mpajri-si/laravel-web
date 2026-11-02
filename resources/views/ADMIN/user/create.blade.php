@extends('layout.admin.app')

@section('content')
<div class="py-4">
    <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
        <ol class="breadcrumb breadcrumb-dark breadcrumb-transparent">
            <li class="breadcrumb-item">
                <a href="#"><svg class="icon icon-xxs" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 00-1-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg></a>
            </li>
            <li class="breadcrumb-item"><a href="{{ route('user.index') }}">User</a></li>
            <li class="breadcrumb-item active" aria-current="page">Tambah User</li>
        </ol>
    </nav>
    <div class="d-flex justify-content-between w-100 flex-wrap">
        <div class="mb-3 mb-lg-0">
            <h1 class="h4">Tambah User</h1>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-12 col-xl-8">
        <div class="card card-body border-0 shadow mb-4">
            <form action="{{ route('user.store') }}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="name">Name</label>
                        <input class="form-control @error('name') is-invalid @enderror" id="name" name="name" type="text" value="{{ old('name') }}" placeholder="Masukkan nama" required>
                        @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="email">Email</label>
                        <input class="form-control @error('email') is-invalid @enderror" id="email" name="email" type="email" value="{{ old('email') }}" placeholder="name@company.com" required>
                        @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="password">Password</label>
                        <input class="form-control @error('password') is-invalid @enderror" id="password" name="password" type="password" placeholder="Password" required>
                        @error('password')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="password_confirmation">Confirm Password</label>
                        <input class="form-control" id="password_confirmation" name="password_confirmation" type="password" placeholder="Ulangi Password" required>
                    </div>
                </div>
                <div class="mt-3">
                    <button class="btn btn-gray-800 mt-2 animate-up-2" type="submit">Simpan</button>
                    <a href="{{ route('user.index') }}" class="btn btn-light mt-2 ms-2">Batal</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
