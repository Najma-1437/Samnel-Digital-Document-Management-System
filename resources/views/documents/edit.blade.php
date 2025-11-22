@extends('layouts.app')

@section('content')
<div class="card shadow p-4">
    <h3>Edit Document</h3>

    <form>
        <div class="mb-3">
            <label class="form-label">Document Title</label>
            <input type="text" class="form-control" value="Sample document title">
        </div>

        <div class="mb-3">
            <label class="form-label">Description</label>
            <textarea class="form-control" rows="3">Sample description...</textarea>
        </div>

        <button class="btn btn-primary">Save Changes</button>
        <a href="/documents" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection
