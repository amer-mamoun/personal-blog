@extends('layouts.admin')

@section('title') Admin Users @endsection

@section('content')
    <div class="content">
        <div class="card">
            <div class="card-header bg-light">
                Admin Users
            </div>

            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>name</th>
                            <th>Email</th>
                            <th>Post</th>
                            <th>Comments</th>
                            <th>Created at</th>
                            <th>Updated at</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($users as $user)
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td class="text-nowrap">{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->posts->count() }}</td>
                                <td>{{ $user->comments->count() }}</td>
                                <td>{{ \Carbon\Carbon::parse($user->created_at)->diffForHumans() }}</td>
                                <td>{{ \Carbon\Carbon::parse($user->updated_at)->diffForHumans() }}</td>
                                <td>
                                    <a href="{{ route('adminEditUser', $user->id) }}" class="btn btn-warning"><i class="icon icon-pencil"></i></a>
                                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteUserModal-{{ $user->id }}">X</button>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    @foreach($users as $user)
        <div class="modal fade" id="deleteUserModal-{{ $user->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="myModalLabel">You are about to delete the user {{ $user->name }}.</h4>
                    </div>
                    <div class="modal-body">
                        Are you sure?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">No, keep the user</button>
                        <form id="deleteUser-{{ $user->id }}" method="POST" action="{{ route('adminDeleteUser', $user->id) }}">@csrf
                            <button type="submit" class="btn btn-primary">Yes, delete this user</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endsection