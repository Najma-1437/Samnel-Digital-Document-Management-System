@extends('layouts.app')

@section('content')
<h3>Pending Document Approvals</h3>

<div class="card shadow p-3">
    <table class="table">
        <thead>
            <tr>
                <th>Document</th>
                <th>Uploaded By</th>
                <th>Date</th>
                <th>Action</th>
            </tr>
        </thead>

        <tbody>
            <tr>
                <td>Contract_01.pdf</td>
                <td>Staff A</td>
                <td>2025-01-12</td>
                <td>
                    <button class="btn btn-success btn-sm">Approve</button>
                    <button class="btn btn-danger btn-sm">Reject</button>
                </td>
            </tr>
        </tbody>
    </table>
</div>
@endsection
