@extends('layouts.admin')

@section('content')
    <div class='m-3 text-white'>
        <label for="exampleFormControlInput1" class="form-label">Title</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
        <label for="" class="form-label">Members</label>
        <input type="number" class="form-control" placeholder="Amount of members partecipate at the project">
        <label for="" class="form-label">Budget</label>
        <input type="number" class="form-control" aria-label="Amount (to the nearest dollar)" placeholder='&euro;'>
        <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
    </div>
@endsection
