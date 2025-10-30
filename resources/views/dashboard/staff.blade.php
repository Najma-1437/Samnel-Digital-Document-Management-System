@extends('layouts.app')

@section('content')
<div class="card shadow p-4">
    <h2>Staff Dashboard</h2>
    <p>Welcome Staff — You can upload & manage assigned documents</p>

    <div class="mt-3 d-flex gap-2">
        <a href="/documents/upload" class="btn btn-primary">Upload Document</a>
        <a href="/documents" class="btn btn-secondary">View Documents</a>
        <a href="/documents/approvals" class="btn btn-warning">Check Approvals</a>
    </div>
</div>
@endsection
