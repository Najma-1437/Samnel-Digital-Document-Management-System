@extends('layouts.app')

@section('content')
<h3>User Access & Roles</h3>

<div class="card shadow p-3">
    <table class="table">
        <thead>
            <tr>
                <th>User</th>
                <th>Role</th>
                <th>Change Role</th>
            </tr>
        </thead>

        <tbody>
            <tr>
                <td>User A</td>
                <td>Staff</td>
                <td>
                    <button class="btn btn-sm btn-warning">Promote</button>
                    <button class="btn btn-sm btn-danger">Revoke</button>
                </td>
            </tr>
        </tbody>
    </table>
</div>
@endsection
