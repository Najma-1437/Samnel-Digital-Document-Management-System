@extends('layouts.app')

@section('content')
<div class="card shadow p-4">
    <h2>Guest Dashboard</h2>
    <p>You have limited access. You can view shared documents only.</p>

    <a href="/documents" class="btn btn-dark">View Documents</a>
</div>
@endsection
