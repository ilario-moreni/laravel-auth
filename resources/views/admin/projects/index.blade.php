@extends('layouts.admin')

@section('content')
    <div class='m-3'>
        <table class="table table-dark table-striped">
            <thead>
                <tr>
                    <th>Projects id</th>
                    <th>Projects name</th>
                    <th>Projects members</th>
                    <th>Projects budget</th>
                    <th>Manage</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($projects as $key => $project)
                    <tr>
                        <td>
                            {{ $project->id }}
                        </td>
                        <td>
                            {{-- <a href="{{ route('admin.projects.show', ['project' => $project['title']]) }}"> --}}
                            {{ $project->title }}
                            {{--  </a> --}}
                            <div class="d-none">
                                {{ $project->description }}

                            </div>
                        </td>
                        <td>
                            {{ $project->members_num }}
                        </td>
                        <td>
                            {{ $project->budget }}&euro;
                        </td>
                        <td>
                            <a href="{{ route('admin.projects.edit', $project) }}">
                                <button class='btn btn-success'><i class="fa-solid fa-pen"></i></button>
                            </a>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>

        <div class="container">
            <div class="row justify-content-end">
                <div class="col-auto">
                    <a href="{{ route('admin.projects.create') }}">
                        <button type="button" class='btn btn-success'>Add project</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
