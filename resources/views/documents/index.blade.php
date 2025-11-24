<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Documents') }}
        </h2>
    </x-slot>

    <div class="py-8 px-4 md:px-8 lg:px-12 bg-gradient-to-br from-slate-100 via-slate-50 to-blue-100 min-h-screen">
        <div class="max-w-7xl mx-auto">

            @if (session('success'))
                <div class="bg-green-50 border-l-4 border-green-500 text-green-700 p-4 rounded-xl mb-6 shadow-sm flex items-center gap-3">
                    <span class="text-2xl">✓</span>
                    <span>{{ session('success') }}</span>
                </div>
            @endif
            @if (session('error'))
                <div class="bg-red-50 border-l-4 border-red-500 text-red-700 p-4 rounded-xl mb-6 shadow-sm flex items-center gap-3">
                    <span class="text-2xl">⚠</span>
                    <span>{{ session('error') }}</span>
                </div>
            @endif

            <!-- Header Section -->
            <div class="mb-8">
                <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4">
                    <div>
                        <h1 class="text-3xl font-bold text-gray-800 mb-2">My Documents</h1>
                        <p class="text-gray-600">Manage and organize your insurance documents</p>
                    </div>
                    <a href="{{ route('documents.create') }}" 
                       class="inline-flex items-center gap-2 px-6 py-3 bg-gradient-to-r from-blue-600 to-indigo-600 text-white rounded-xl shadow-md hover:shadow-lg hover:from-blue-700 hover:to-indigo-700 transition-all duration-300 font-medium">
                        <span class="text-xl">+</span>
                        Upload New Document
                    </a>
                </div>
            </div>

            <!-- All Documents Table -->
            <div class="bg-slate-50 rounded-2xl shadow-sm p-6">
                <div class="flex items-center gap-3 mb-6">
                    <div class="w-10 h-10 bg-indigo-100 rounded-lg flex items-center justify-center">
                        <span class="text-xl">📁</span>
                    </div>
                    <h2 class="text-xl font-bold text-gray-800">All Documents</h2>
                </div>

                <div class="bg-white rounded-xl overflow-hidden border border-gray-200">
                    <div class="overflow-x-auto">
                        <table class="w-full">
                            <thead>
                                <tr class="bg-gradient-to-r from-blue-50 to-indigo-50 border-b border-gray-200">
                                    <th class="py-4 px-6 text-left text-sm font-semibold text-gray-700">#</th>
                                    <th class="py-4 px-6 text-left text-sm font-semibold text-gray-700">Title</th>
                                    <th class="py-4 px-6 text-left text-sm font-semibold text-gray-700">Uploaded By</th>
                                    <th class="py-4 px-6 text-left text-sm font-semibold text-gray-700">Date</th>
                                    <th class="py-4 px-6 text-right text-sm font-semibold text-gray-700">Actions</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-100">
                                @forelse ($documents as $doc)
                                    <tr class="hover:bg-blue-50 transition-colors duration-150">
                                        <td class="py-4 px-6 text-gray-600">{{ $doc->id }}</td>
                                        <td class="py-4 px-6">
                                            <div class="flex items-center gap-3">
                                                <div class="w-8 h-8 bg-blue-100 rounded-lg flex items-center justify-center flex-shrink-0">
                                                    <span class="text-sm">📄</span>
                                                </div>
                                                <span class="font-medium text-gray-800">{{ $doc->title }}</span>
                                            </div>
                                        </td>
                                        <td class="py-4 px-6 text-gray-600">{{ $doc->user->name ?? 'Unknown' }}</td>
                                        <td class="py-4 px-6 text-gray-600">
                                            <div class="flex flex-col">
                                                <span>{{ $doc->created_at?->format('d M Y') ?? 'N/A' }}</span>
                                                <span class="text-xs text-gray-400">{{ $doc->created_at?->format('h:i A') ?? '' }}</span>
                                            </div>
                                        </td>
                                        <td class="py-4 px-6">
                                            <div class="flex items-center justify-end gap-2">
                                                <a href="{{ route('documents.view', $doc) }}" 
                                                   target="_blank"
                                                   class="inline-flex items-center px-3 py-1.5 bg-blue-100 text-blue-700 rounded-lg hover:bg-blue-200 transition-colors text-sm font-medium">
                                                    <span>View</span>
                                                </a>
                                                <a href="{{ route('documents.download', $doc) }}" 
                                                   class="inline-flex items-center px-3 py-1.5 bg-green-100 text-green-700 rounded-lg hover:bg-green-200 transition-colors text-sm font-medium">
                                                    <span>Download</span>
                                                </a>
                                                @if ($doc->created_by === auth()->id())
                                                    <form action="{{ route('documents.destroy', $doc) }}" 
                                                          method="POST" 
                                                          class="inline-block" 
                                                          onsubmit="return confirm('Are you sure you want to delete this document?');">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" 
                                                                class="inline-flex items-center px-3 py-1.5 bg-red-100 text-red-700 rounded-lg hover:bg-red-200 transition-colors text-sm font-medium">
                                                            Delete
                                                        </button>
                                                    </form>
                                                @endif
                                            </div>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="5" class="py-12 text-center">
                                            <div class="flex flex-col items-center gap-3">
                                                <span class="text-5xl">📭</span>
                                                <p class="text-gray-500 font-medium">No documents found</p>
                                                <!-- Upload Your First Document button removed -->
                                            </div>
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>

                @if($documents->hasPages())
                    <div class="mt-6">
                        {{ $documents->links() }}
                    </div>
                @endif
            </div>

        </div>
    </div>
</x-app-layout>
