@extends('layout')

@section('title', 'Case Studies')

@section('content')
<section class="case-studies">
    <h2>Case Studies</h2>
    <p>In-depth look into my design process and UX problem-solving approach.</p>

    <div class="case-grid">
        <div class="case-card">
            <div class="case-image">
                <img src="{{ asset('assets/img/1.jpeg') }}" alt="Case 1">
                <div class="overlay">
                    <a href="#" class="btn primary-btn">View Details</a>
                </div>
            </div>
            <div class="case-info">
                <h3>Mobile Banking Redesign</h3>
                <p>Improved usability and accessibility through design thinking.</p>
            </div>
        </div>

        <div class="case-card">
            <div class="case-image">
                <img src="{{ asset('assets/img/2.jpeg') }}" alt="Case 2">
                <div class="overlay">
                    <a href="#" class="btn primary-btn">View Details</a>
                </div>
            </div>
            <div class="case-info">
                <h3>Checkout Flow Optimization</h3>
                <p>Reduced user friction and boosted conversion rates by 30%.</p>
            </div>
        </div>

        <div class="case-card">
            <div class="case-image">
                <img src="{{ asset('assets/img/3.jpeg') }}" alt="Case 3">
                <div class="overlay">
                    <a href="#" class="btn primary-btn">View Details</a>
                </div>
            </div>
            <div class="case-info">
                <h3>Travel App UI</h3>
                <p>Created an intuitive and visually accessible analytics dashboard.</p>
            </div>
        </div>
    </div>
</section>
@endsection
