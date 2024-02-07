@extends('layouts.app')
@section('content')
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


@endsection