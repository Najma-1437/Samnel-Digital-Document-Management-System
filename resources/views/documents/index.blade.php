@section('header')
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Documents
    </h2>
@endsection

    <div class="py-12 bg-gradient-to-br from-indigo-50 via-blue-100 to-indigo-50 min-h-screen">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            @if (session('success'))
                <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-3 rounded mb-4 shadow-md">
                    {{ session('success') }}
                </div>
            @endif
            @if (session('error'))
                <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-3 rounded mb-4 shadow-md">
                    {{ session('error') }}
                </div>
            @endif

            <div class="flex justify-between items-center mb-6">
                <h3 class="text-lg font-medium text-gray-800">All Documents</h3>
                <a href="{{ route('documents.create') }}" 
                   class="px-4 py-2 bg-blue-600 text-white rounded shadow hover:bg-blue-700 transition">
                    + Upload New
                </a>
            </div>

            <div class="bg-white shadow-xl sm:rounded-lg p-6 border-l-4 border-blue-400">
                <div class="overflow-x-auto">
                    <table class="w-full text-left border-collapse">
                        <thead>
                            <tr class="border-b bg-blue-50">
                                <th class="py-3 px-4 text-blue-800">#</th>
                                <th class="py-3 px-4 text-blue-800">Title</th>
                                <th class="py-3 px-4 text-blue-800">Uploaded By</th>
                                <th class="py-3 px-4 text-blue-800">Date</th>
                                <th class="py-3 px-4 text-right text-blue-800">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($documents as $doc)
                                <tr class="border-b hover:bg-blue-100 transition">
                                    <td class="py-3 px-4">{{ $doc->id }}</td>
                                    <td class="py-3 px-4 font-medium text-gray-800">{{ $doc->title }}</td>
                                    <td class="py-3 px-4">{{ $doc->user->name ?? 'Unknown' }}</td>
                                    <td class="py-3 px-4">{{ $doc->created_at?->format('d M Y') ?? 'N/A' }}</td>
                                    <td class="py-3 px-4 text-right space-x-2">
                                        <a href="{{ route('documents.view', $doc) }}" 
                                           target="_blank"
                                           class="text-indigo-600 hover:text-indigo-800 font-medium">
                                            View
                                        </a>
                                        <a href="{{ route('documents.download', $doc) }}" 
                                           class="text-green-600 hover:text-green-800 font-medium">
                                            Download
                                        </a>
                                        @if ($doc->created_by === auth()->id() || auth()->user()->role === 'admin' )
                                            <form action="{{ route('documents.destroy', $doc) }}" method="POST" class="inline-block" onsubmit="return confirm('Are you sure you want to delete this document?');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="text-red-600 hover:text-red-800 font-medium ml-1">Delete</button>
                                            </form>
                                        @endif
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5" class="py-4 text-center text-gray-500">No documents found.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>

                <div class="mt-4">
                    {{ $documents->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
