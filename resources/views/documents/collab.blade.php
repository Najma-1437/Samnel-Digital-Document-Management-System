@extends('layouts.app')

@section('content')
<h3>Document Collaboration</h3>

<div class="card shadow p-3 mb-3">
    <h5>Comments</h5>

    <div class="border p-2 mb-2 bg-white">
        <strong>Admin:</strong> Please update the intro section.
    </div>

    <form>
        <textarea class="form-control mb-2" placeholder="Enter your comment"></textarea>
        <button class="btn btn-primary">Send</button>
    </form>
</div>

<div class="card shadow p-3">
    <h5>Activity Log</h5>
    <ul>
        <li>Admin reviewed document</li>
        <li>Staff uploaded revision</li>
    </ul>
</div>
@endsection
