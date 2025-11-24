<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Document;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class DocumentController extends Controller
{
    /**
     * Display a listing of the documents belonging to the logged-in user.
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

        // Store the uploaded file in 'public/documents'
        $path = $request->file('file')->store('documents', 'public');

        // Save record in database
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
     * Display a single document.
     */
    public function show(Document $document)
    {
        $this->authorizeDocument($document);

        return view('documents.show', compact('document'));
    }

    /**
     * View the document in the browser.
     */
    public function view(Document $document)
    {
        $this->authorizeDocument($document);

        return response()->file(storage_path('app/public/' . $document->file_path));
    }

    /**
     * Download the document.
     */
    public function download(Document $document)
    {
        $this->authorizeDocument($document);

        return response()->download(storage_path('app/public/' . $document->file_path));
    }

    /**
     * Delete the document.
     */
    public function destroy(Document $document)
    {
        $this->authorizeDocument($document);

        // Delete file
        Storage::disk('public')->delete($document->file_path);

        // Delete DB record
        $document->delete();

        return redirect()->route('documents.index')
                         ->with('success', 'Document deleted successfully!');
    }

    /**
     * Helper: check if the logged-in user owns the document.
     */
    private function authorizeDocument(Document $document)
    {
        if ($document->created_by !== Auth::id()) {
            abort(403, 'You are not authorized to access this document.');
        }
    }
}

