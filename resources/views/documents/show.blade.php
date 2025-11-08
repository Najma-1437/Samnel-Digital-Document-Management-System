@extends('layouts.app')

@section('header')
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ $document->title }}
    </h2>
@endsection

@section('content')
<div class="py-12 bg-gradient-to-br from-purple-50 via-pink-100 to-purple-50 min-h-screen">
    <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">

        <div class="bg-white shadow-xl sm:rounded-lg p-6 border-l-4 border-purple-400">
            <p class="text-gray-700 mb-4">{{ $document->description ?? 'No description provided.' }}</p>

            <div class="mb-6 text-sm text-gray-500">
                <p>
                    Uploaded by: <strong class="text-purple-700">{{ $document->user->name ?? 'Unknown' }}</strong><br>
                    On: <span class="text-blue-700">{{ $document->created_at ? $document->created_at->format('d M Y, h:i A') : 'N/A' }}</span>
                </p>
            </div>

            <div class="flex space-x-4 mb-6">
                <a href="{{ route('documents.view', $document->id) }}" 
                   target="_blank" 
                   class="px-4 py-2 bg-indigo-600 text-white rounded shadow hover:bg-indigo-700 transition">
                    View Document
                </a>
                <a href="{{ route('documents.download', $document->id) }}" 
                   class="px-4 py-2 bg-green-600 text-white rounded shadow hover:bg-green-700 transition">
                    Download Document
                </a>
            </div>

            <a href="{{ route('documents.index') }}" class="text-gray-600 hover:text-blue-600 underline">← Back to list</a>
        </div>
    </div>
</div>
@endsection
