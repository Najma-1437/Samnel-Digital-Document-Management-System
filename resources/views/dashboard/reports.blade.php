@extends('layouts.app')

@section('content')
<h3>Reports & Analytics</h3>

<div class="row">
    <div class="col-md-4">
        <div class="card p-4 shadow text-center">
            <h4>150+</h4>
            <p>Total Documents</p>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card p-4 shadow text-center">
            <h4>30</h4>
            <p>Pending Approvals</p>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card p-4 shadow text-center">
            <h4>12</h4>
            <p>Active Collaborations</p>
        </div>
    </div>
</div>

<div class="card shadow p-3 mt-3">
    <p>Charts will be displayed here...</p>
</div>
@endsection
