@extends('layouts.app')

@section('content')
<div class="card shadow p-4">
    <h3>Upload Document</h3>

    <form>
        <div class="mb-3">
            <label class="form-label">Document Title</label>
            <input type="text" class="form-control" placeholder="Enter title">
        </div>

        <div class="mb-3">
            <label class="form-label">Document File</label>
            <input type="file" class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label">Description (Optional)</label>
            <textarea class="form-control" rows="3" placeholder="Enter description"></textarea>
        </div>

        <button type="submit" class="btn btn-success">Upload</button>
    </form>
</div>
@endsection
