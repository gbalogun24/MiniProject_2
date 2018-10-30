@extends('layouts.default')
@section('content')
    <br><br><br>
    <div class="card mt-3 pl-2 pr-2">
        <div class="card-title"><h3>Contact Form</h3></div>
        <div class="card-body">
            <form action="{{route('info')}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="exampleFormControlInput1">First Name</label>
                    <input type="text" name="firstname" class="form-control" id="firstname" placeholder="John">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Last Name</label>
                    <input type="text" name="lastname" class="form-control" id="lastname" placeholder="Smith">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Email address</label>
                    <input type="email" name="email" class="form-control" id="email" placeholder="name@example.com">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Message</label>
                    <textarea name="body" class="form-control" id="body" rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection