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
        $documents = Document::latest()->paginate(10);
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
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'file' => 'required|file|mimes:pdf,doc,docx,xlsx,ppt,pptx,txt|max:2048',
        ]);

        $path = $request->file('file')->store('documents', 'public');

        Document::create([
            'title' => $validated['title'],
            'description' => $validated['description'] ?? '',
            'file_path' => $path,
            'created_by' => Auth::id(),
        ]);

        return redirect()->route('documents.index')->with('success', 'Document uploaded successfully!');
    }

    /**
     * Display the specified document.
     */
    public function show(Document $document)
    {
        return view('documents.show', compact('document'));
    }

    /**
     * Remove the specified document from storage.
     */
    public function destroy(Document $document)
    {
        // Only allow the uploader to delete
        if ($document->created_by !== Auth::id()) {
            return redirect()->route('documents.index')->with('error', 'You are not allowed to delete this document.');
        }

        Storage::disk('public')->delete($document->file_path);
        $document->delete();

        return redirect()->route('documents.index')->with('success', 'Document deleted successfully!');
    }

    /**
     * Open the document in the browser
     */
    public function view(Document $document)
    {
        return response()->file(storage_path('app/public/' . $document->file_path));
    }

    /**
     * Download the document
     */
    public function download(Document $document)
    {
        return response()->download(storage_path('app/public/' . $document->file_path));
    }
}
