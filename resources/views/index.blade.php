@extends('layouts.app')
@section('content')
<nav class="navbar bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand"> <strong>BOOKS NETWORK SYSTEM</strong></a>
    <form class="d-flex" role="search" method="GET" action="{{url('/search')}}" type="get">
      <input class="form-control me-2" type="search" name="query" id="query" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success"  type="submit">Search</button>
    </form>
  </div>
</nav>
        <div class="row">
            <div class="col-2"></div>
            <div class="col-8">
                <div class="card">
                    <div class="card-body">
                       
                        <a href="{{route('Books.create')}}" class="btn btn-primary btn-xs float-end py-0">Add books</a>
                        <!--  -->
                        <table class="table table-responsive table-bordered table-stripped" style="margin-top:10px;">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>BookName</th>
                                    <th>ISBN</th>
                                    <th>Category</th>
                                    <th>release year</th>
                                    <th>Book Author</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($data as $key => $Books)
                                <tr>
                                    <td>{{$key+1}}</td>
                                    <td>{{$Books->Bookname}}</td>
                                    <td>{{$Books->ISBN}}</td>
                                    <td>{{$Books->Category}}</td>
                                    <td>{{$Books->year}}</td>
                                    <td>{{$Books->Author}}</td>

                                </tr>
                                @endforeach
                        </table>
                        {{$data->links()}}
                    </div>
                </div>
            </div>
        </div>
@endsection
