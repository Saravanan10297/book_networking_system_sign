@extends('layouts.app')
@section('content')
@if(session()->has('message'))
<div class="alert alert-success">
    {{session()->get('message')}}
</div>
@endif
        <div class="card">
            <div class="card-body">
                <p style="font-size:20px; font-weight:bold;">Create New Employee</p>
                <form action="{{route('Books.store')}}" class="was-validated" method="POST" >
                    @csrf
                    <div class="form-group has-validation">
                        <label for="name">Book Name</label>
                        <input type="text" name="Bookname" id="Bookname" class="form-control" required>
                        <span class="invalid-feedback">
                            <strong>Error</strong>
                        </span>
                    </div>
                    <div class="form-group has-validation">
                        <label for="name">Category</label>
                        <input type="text" name="Category" id="Category" class="form-control" required>
                        <span class="invalid-feedback">
                            <strong>Error</strong>
                        </span>
                    </div>
                    <div class="form-group has-validation">
                        <label for="email">Release year</label>
                        <input type="year" name="year" id="year" class="form-control" required>
                        <span class="invalid-feedback">
                            <strong>Error</strong>
                        </span>
                    </div>
                    <div class="form-group has-validation">
                        <label for="Author">Author Name</label>
                        <input type="text" name="Author" id="Author" class="form-control" required>
                        <span class="invalid-feedback">
                            <strong class="invalid-feedback">Error</strong>
                        </span>
                    </div>
                    <div class="form-group has-validation">
                        <label for="joining_salary">ISBN</label>
                        <input type="number" name="ISBN" id="ISBN" class="form-control" required>
                        <span class="invalid-feedback">
                            <strong>Error</strong>
                        </span>
                    </div>

                    <button type="submit" class="btn btn-primary">Create Book</button>
                </form>
            </div>
        </div>
@endsection