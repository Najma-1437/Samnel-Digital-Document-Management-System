@extends('layouts.app')

@section('header')
    <h2 class="text-xl font-semibold text-gray-800">Dashboard</h2>
@endsection

@section('content')
<div style="text-align: center; padding: 3rem 1rem; max-width: 800px; margin: 0 auto;">
    

    <!-- Animated "Welcome to Samnel" -->
    <h1 class="welcome-text">
        Welcome to Samnel Insurance Brokers Limited
    </h1>

    <p style="font-size: 1.25rem; color: #374151; margin: 0 auto 2.5rem;">
        A Secure, organized, and intelligent document management for teams and individuals.
    </p>

    <!-- About Section -->
    <h2 class="about-title" style="font-size: 1.75rem; color: #1e3a8a; margin: 2.5rem 0 1.5rem;">About Samnel DMS</h2>
    <p style="font-size: 1.1rem; color: #4b5563; margin-bottom: 2rem;">
        Samnel is a modern document management system built for security, compliance, and ease of use.
        Whether you're a clinic, law firm, or university, Samnel ensures your files are always organized and accessible.
    </p>

    <h3 style="font-size: 1.75rem; color: #1e3a8a; margin: 2.5rem 0 1.5rem;">Key Benefits</h3>

    <ul class="animated-benefits">
        <li>End-to-end encryption for all uploaded documents.</li>
        <li>Role-based access control for team collaboration.</li>
        <li>Automatic versioning and audit trails.</li>
        <li>Searchable metadata and full-text indexing.</li>
    </ul>
</div>

<style>
    /* Welcome heading animation */
    .welcome-text {
        font-size: 2.8rem;
        font-weight: 700;
        color: #1e3a8a;
        margin: 1.5rem 0;
        opacity: 0;
        transform: scale(0.9) translateY(10px);
        animation: welcomePop 1s ease-out forwards;
    }

    @keyframes welcomePop {
        to {
            opacity: 1;
            transform: scale(1) translateY(0);
            text-shadow: 0 2px 8px rgba(30, 58, 138, 0.15);
        }
    }

    /* Benefits animation (unchanged) */
    .animated-benefits {
        list-style: none;
        padding-left: 0;
        max-width: 700px;
        margin: 2rem auto 0;
    }
    .animated-benefits li {
        background: white;
        margin: 0.7rem 0;
        padding: 1rem 1.5rem;
        border-radius: 10px;
        box-shadow: 0 2px 8px rgba(0,0,0,0.06);
        opacity: 0;
        transform: translateY(15px);
        animation: slideIn 0.6s ease-out forwards;
    }
    .animated-benefits li:nth-child(1) { animation-delay: 0.1s; }
    .animated-benefits li:nth-child(2) { animation-delay: 0.3s; }
    .animated-benefits li:nth-child(3) { animation-delay: 0.5s; }
    .animated-benefits li:nth-child(4) { animation-delay: 0.7s; }

    @keyframes slideIn {
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

</style>
@endsection