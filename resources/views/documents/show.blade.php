<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $document->title }}
        </h2>
    </x-slot>

    <div class="py-12 bg-gradient-to-br from-purple-50 via-pink-100 to-purple-50 min-h-screen">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow-xl sm:rounded-lg p-6 border-l-4 border-purple-400">
                <p class="text-gray-700 mb-4">{{ $document->description ?? 'No description provided.' }}</p>

                <div class="mb-6 text-sm text-gray-500">
                    <p>
                        Uploaded by: <strong class="text-purple-700">{{ $document->user->name ?? 'Unknown' }}</strong><br>
                        On: <span class="text-blue-700">{{ $document->created_at?->format('d M Y, h:i A') ?? 'N/A' }}</span>
                    </p>
                </div>

                <div class="flex flex-wrap gap-3 mb-6">
                    <a href="{{ route('documents.view', $document) }}" 
                       target="_blank" 
                       class="px-4 py-2 bg-indigo-600 text-white rounded shadow hover:bg-indigo-700 transition focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                        View Document
                    </a>
                    <a href="{{ route('documents.download', $document) }}" 
                       class="px-4 py-2 bg-green-600 text-white rounded shadow hover:bg-green-700 transition focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2">
                        Download Document
                    </a>
                </div>

                <div class="flex space-x-3">
                    <a href="{{ route('documents.index') }}" 
                       class="text-gray-600 hover:text-blue-600 underline font-medium">
                        ← Back to Documents
                    </a>
                    @if ($document->created_by === auth()->id())
                        <form action="{{ route('documents.destroy', $document) }}" method="POST" class="inline-block" onsubmit="return confirm('Are you sure you want to delete this document?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-600 hover:text-red-800 font-medium underline ml-2">
                                Delete
                            </button>
                        </form>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>