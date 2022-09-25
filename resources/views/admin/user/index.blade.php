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
                <li class="breadcrumb-item active" aria-current="page">Users</li>
              </ol>
            </nav>
          </div>
          <div class="ms-auto">
           
          </div>
        </div>
        <!--end breadcrumb-->
        <div class="container">
          <div class="row">
            <h2 class="mb-4">Users</h2>
            <div class="col mb-4">
              <a href="{{ route('admin.user.create') }}" type="button" class="btn btn-primary px-5">Create user</a>
            </div>
          <div class="card">
          <div class="card-body">
            <table class="table mb-0 table-hover">
              <thead>
                <tr>
                  <th scope="col">Id</th>
                  <th scope="col">Name of user</th>
                  <th scope="col">See user</th>
                  <th scope="col">Edit user</th>
                  <th scope="col">Delete user</th>
                </tr>
              </thead>
              <tbody>
                @foreach($users as $user)
                <tr>
                  <th scope="row">{{$user->id}}</th>
                  <td>{{$user->name}}</td>
                  <td>
                    <div class="font-22">	
                      <a href="{{route('admin.user.show', $user->id)}}">
                        <i class="lni lni-eye"></i></td>
                      </a>
                      
                    </div>
                  <td>
                      <div class="font-22">	
                        <a href="{{route('admin.user.edit', $user->id)}}">
                          <i class="lni lni-pencil"></i>
                        </a>
                      </div>
                  </td>
                  <td>
                    <form action="{{route('admin.user.delete', $user->id)}}" method="post">
                    
                      @csrf
                      @method('delete')
                      <div class="font-22">	
                      <button type="submit" class="bg-transparent border-0">
                          <i class="lni lni-trash"></i>
                      </button>
                      </div>
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
      <!-- end page content-->
    </div>
    <!--end page content wrapper-->
    @endsection