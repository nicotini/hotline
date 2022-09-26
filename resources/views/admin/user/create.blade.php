@extends('admin.layouts.main')
@section('content')
<!-- start page content wrapper-->
<div class="page-content-wrapper">
      <!-- start page content-->
      <div class="page-content">

        <!--start breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
          <div class="breadcrumb-title pe-3">Dashboard</div>
          <div class="ps-3">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb mb-0 p-0 align-items-center">
                <li class="breadcrumb-item"><a href="javascript:;">
                    <ion-icon name="home-outline"></ion-icon>
                  </a>
                </li>
                <li class="breadcrumb-item active" aria-current="page"> Create User</li>
              </ol>
            </nav>
          </div>
          <div class="ms-auto">
           
          </div>
        </div>
        <!--end breadcrumb-->
        <div class="container">
          <div class="row">
            <div class="col-8">
            <div class="card">
                <div class="card-body">
                  <div class="border p-3 rounded">
                  <h6 class="mb-0 text-uppercase">Create user</h6>
                  <hr>
                  <form class="row g-3" method="post" action="{{route('admin.user.store')}}">
                    @csrf
                    <div class="col-12">
                      <label class="form-label">Name</label>
                      <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                    </div>
                    @error('name')
                    {{ $message }}
                    @enderror
                    <div class="col-12">
                      <label class="form-label">Email</label>
                      <input type="email" class="form-control" name="email" value="{{ old('email') }}">
                    </div>
                    @error('email')
                    {{ $message }}
                    @enderror
                    <div class="col-12">
                      <label class="form-label">Password</label>
                      <input type="text" class="form-control" name="password">
                    </div>
                    @error('password')
                    {{ $message }}
                    @enderror
                    <div class="mb-3">
                      <label class="form-label">Choose a user's role</label>
                      <select name="role" class="form-select mb-3">
                        @foreach($roles as $id => $role)
                        <option value="{{ $id }}" 
                        {{ $id == old('role') ? ' selected' : ''}} >{{ $role }}</option>
                        @endforeach
                      </select>
                    </div>
                    @error('password')
                    {{ $message }}
                    @enderror
                    <div class="col-12">
                      <div class="d-grid">
                        <button type="submit" class="btn btn-primary">Create</button>
                      </div>
                    </div>
                  </form>
                </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      <!-- end page content-->
    </div>
    <!--end page content wrapper-->
    @endsection