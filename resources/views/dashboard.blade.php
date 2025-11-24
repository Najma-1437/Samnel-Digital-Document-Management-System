<x-app-layout>
    
    <div class="py-10 px-6 md:px-12 bg-gray-100 min-h-screen">

        <!-- Welcome Section -->
        <div class="bg-gradient-to-r from-blue-600 to-indigo-600 text-white p-8 rounded-xl shadow-md mb-10">
            <h1 class="text-3xl font-bold mb-2">Welcome to Your Insurance Portal 👋</h1>
            <p class="text-lg opacity-90">
                Here’s how to manage your insurance documents and understand the claim process.
            </p>
        </div>

        <!-- What is Offered -->
        <div class="bg-white rounded-xl shadow p-6 mb-10">
            <h2 class="text-2xl font-semibold text-gray-800 mb-4">What We Offer</h2>

            <ul class="space-y-4 text-gray-700">
                <li class="flex items-start gap-3">
                    <span class="text-blue-600 text-xl">✔</span>
                    <p><strong>Secure document storage</strong> for all your insurance-related files.</p>
                </li>

                <li class="flex items-start gap-3">
                    <span class="text-blue-600 text-xl">✔</span>
                    <p><strong>Easy claim guidance</strong> with clear steps on what to prepare.</p>
                </li>

                <li class="flex items-start gap-3">
                    <span class="text-blue-600 text-xl">✔</span>
                    <p><strong>Fast processing updates</strong> so you always know your claim status.</p>
                </li>
            </ul>
        </div>

        <!-- How to File a Claim -->
        <div class="bg-white rounded-xl shadow p-6 mb-10">
            <h2 class="text-2xl font-semibold text-gray-800 mb-4">How to File a Claim</h2>

            <ol class="space-y-4 text-gray-700 list-decimal ml-6">
                <li>
                    Go to the <strong>Documents</strong> section and upload the required documents  
                    (National ID, receipts, police abstract, photos, etc.).
                </li>
                <li>
                    After uploading your documents, follow the instructions given by your insurance provider
                    to submit the claim.
                </li>
                <li>
                    Keep your documents updated to ensure a smooth claim approval process.
                </li>
            </ol>
        </div>

        <!-- Quick Actions (File Claim removed) -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

            <!-- My Documents -->
            <a href="{{ route('documents.index') }}"
               class="bg-white p-6 rounded-xl shadow hover:shadow-lg transition border-l-4 border-blue-600">
                <h3 class="text-xl font-semibold text-gray-800 mb-2">My Documents</h3>
                <p class="text-gray-600">Upload and manage all required insurance documents.</p>
            </a>

            <!-- Support -->
            <a href="#"
               class="bg-white p-6 rounded-xl shadow hover:shadow-lg transition border-l-4 border-indigo-600">
                <h3 class="text-xl font-semibold text-gray-800 mb-2">Need Help?</h3>
                <p class="text-gray-600">Contact support for assistance 24/7.</p>
            </a>

        </div>

    </div>
</x-app-layout>
