@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
<div class="col-md-4">

<div class="card shadow p-4">
    <h3 class="text-center mb-3">Login</h3>

    <form>
        <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="email" class="form-control" placeholder="Enter email">
        </div>

        <div class="mb-3">
            <label class="form-label">Password</label>
            <input type="password" class="form-control" placeholder="Enter password">
        </div>

        <button class="btn btn-primary w-100">Login</button>
    </form>
</div>

</div>
</div>
@endsection
