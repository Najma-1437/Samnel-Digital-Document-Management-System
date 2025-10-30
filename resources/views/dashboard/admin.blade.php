@extends('layouts.app')

@section('content')
<div class="card shadow p-4">
    <h2>Admin Dashboard</h2>
    <p>Welcome to the Document Management System</p>

    <a href="/documents/upload" class="btn btn-primary">Upload Document</a>
    <a href="/documents" class="btn btn-secondary">View Documents</a>
    <a href="/documents/approvals" class="btn btn-warning">Pending Approvals</a>
</div>
@endsection
