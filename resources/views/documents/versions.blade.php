@extends('layouts.app')

@section('content')
<h3>Document Version History</h3>

<div class="card shadow p-3">
    <table class="table">
        <thead>
            <tr>
                <th>Version</th>
                <th>Date</th>
                <th>Changed By</th>
                <th>Action</th>
            </tr>
        </thead>

        <tbody>
            <tr>
                <td>v1.2</td>
                <td>2025-01-10</td>
                <td>Admin</td>
                <td>
                    <button class="btn btn-info btn-sm">View</button>
                    <button class="btn btn-secondary btn-sm">Restore</button>
                </td>
            </tr>
        </tbody>
    </table>
</div>
@endsection
