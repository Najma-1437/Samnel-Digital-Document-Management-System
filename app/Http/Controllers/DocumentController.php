<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Document;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class DocumentController extends Controller
{
    /**
     * Display a listing of the documents.
     */
    public function index()
    {
        $documents = Document::where('created_by', Auth::id())
                             ->latest()
                             ->paginate(10);

        return view('documents.index', compact('documents'));
    }

    /**
     * Show the form for creating a new document.
     */
    public function create()
    {
        return view('documents.create');
    }

    /**
     * Store a newly created document in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title'       => 'required|string|max:255',
            'description' => 'nullable|string',
            'file'        => 'required|file|mimes:pdf,doc,docx,xlsx,ppt,pptx,txt|max:5120',
        ]);

        // Store file
        $path = $request->file('file')->store('documents', 'public');

        // Save DB record
        Document::create([
            'title'       => $validated['title'],
            'description' => $validated['description'] ?? '',
            'file_path'   => $path,
            'created_by'  => Auth::id(),
        ]);

        return redirect()->route('documents.index')
                         ->with('success', 'Document uploaded successfully!');
    }

    /**
     * Display a single document details.
     */
    public function show(Document $document)
    {
        if ($document->created_by !== Auth::id()) {
            abort(403);
        }

        return view('documents.show', compact('document'));
    }

    /**
     * View document in browser.
     */
    public function view(Document $document)
    {
        if ($document->created_by !== Auth::id()) {
            abort(403);
        }

        return response()->file(storage_path('app/public/' . $document->file_path));
    }

    /**
     * Download document.
     */
    public function download(Document $document)
    {
        if ($document->created_by !== Auth::id()) {
            abort(403);
        }

        return response()->download(storage_path('app/public/' . $document->file_path));
    }

    /**
     * Delete a document.
     */
    public function destroy(Document $document)
    {
        if ($document->created_by !== Auth::id()) {
            return redirect()->route('documents.index')->with('error', 'You are not allowed to delete this document.');
        }

        // Delete file
        Storage::disk('public')->delete($document->file_path);

        // Delete DB entry
        $document->delete();

        return redirect()->route('documents.index')->with('success', 'Document deleted successfully!');
    }
}
