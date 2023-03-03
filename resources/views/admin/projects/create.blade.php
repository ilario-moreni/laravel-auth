@extends('layouts.admin')

@section('content')
    <div class='m-3 text-white'>
        @if ($errors->any())
            @foreach ($errors->all() as $error)
                <div>{{ $error }}</div>
            @endforeach
        @endif
        <form action="{{ route('admin.projects.store') }}" method="POST">
            @csrf
            <label for="exampleFormControlInput1" class="form-label">Title</label>
            <input name="title" type="text" class="form-control" id="title" placeholder="title">
            <label for="" class="form-label">Members</label>
            <input name="members_num" id="members_num" type="number" class="form-control"
                placeholder="Amount of members partecipate at the project">
            <label for="" class="form-label">Budget</label>
            <input name="budget" id="budget" type="number" class="form-control"
                aria-label="Amount (to the nearest dollar)" placeholder='&euro;'>
            <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
            <textarea name="description" placeholder='Description of the project' class="form-control" id="description"
                rows="3"></textarea>
            <div class="mt-3 d-flex justify-content-end">
                <button type="submit" class="btn btn-success">Submit</button>
            </div>
        </form>
    </div>
@endsection
