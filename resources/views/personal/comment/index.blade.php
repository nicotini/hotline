@extends('personal.layouts.main')
@section('content')
<!-- start page content wrapper-->
<div class="page-content-wrapper">
      <!-- start page content-->
      <div class="page-content">

        <!--start breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
          <div class="breadcrumb-title pe-3">Blog</div>
          <div class="ps-3">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb mb-0 p-0 align-items-center">
                <li class="breadcrumb-item"><a href="">
                    <ion-icon name="home-outline"></ion-icon>
                  </a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Comments</li>
              </ol>
            </nav>
          </div>
          <div class="ms-auto">
           
          </div>
        </div>
        <!--end breadcrumb-->
        <div class="container">
          <div class="row">
            <h2 class="mb-4">Comments</h2>
            
            <div class="card">
              <div class="card-body">
                <table class="table mb-0 table-hover">
                  <thead>
                    <tr>
                      <th scope="col">Id</th>
                      <th scope="col">Comment</th>
                      <th scope="col">See comment</th>
                      <th scope="col">Edit comment</th>
                      <th scope="col">Delete</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($comments as $comment)
                    <tr>
                      <th scope="row">{{$comment->id}}</th>
                      <td>{{$comment->message}}</td>
                      <td>
                        <div class="font-22">	
                          <a href="">
                            <i class="lni lni-eye"></i>
                          </a>
                        </div>
                      </td>
                      <td>
                        <div class="font-22">	
                          <a href="{{ route('personal.comment.edit', $comment->id) }}">
                          <i class="lni lni-pencil"></i>
                          </a>
                        </div>
                      </td>
                      <td>
                        <form action="{{ route('personal.comment.delete', $comment->id) }}" method="post">
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
      <!-- end page content-->
    </div>
    <!--end page content wrapper-->
    @endsection