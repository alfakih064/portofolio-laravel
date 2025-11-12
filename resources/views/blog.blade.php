@extends('layout')

@section('title', 'Blog')

@section('content')
<section class="blog">
  <h2>Articles & Insights</h2>
  <p>Sharing knowledge, inspiration, and lessons learned from my design journey.</p>

  <div class="blog-list">
    <article class="blog-card fade-in">
      <div class="blog-image">
        <img src="{{ asset('assets/img/4.jpeg') }}" alt="Microinteractions">
      </div>
      <div class="blog-info">
        <h3>The Power of Microinteractions</h3>
        <p>Small animations can create a big impact in user experience and delight users effortlessly.</p>
        <a href="#" class="btn secondary-btn">Read More</a>
      </div>
    </article>

    <article class="blog-card fade-in">
      <div class="blog-image">
        <img src="{{ asset('assets/img/5.jpeg') }}" alt="Design Systems">
      </div>
      <div class="blog-info">
        <h3>Design Systems 101</h3>
        <p>Learn how to build scalable, consistent, and efficient design systems for teams.</p>
        <a href="#" class="btn secondary-btn">Read More</a>
      </div>
    </article>

    <article class="blog-card fade-in">
      <div class="blog-image">
        <img src="{{ asset('assets/img/6.jpeg') }}" alt="UX Research">
      </div>
      <div class="blog-info">
        <h3>UX Research Simplified</h3>
        <p>Practical tips for conducting user research on a budget without losing quality insights.</p>
        <a href="#" class="btn secondary-btn">Read More</a>
      </div>
    </article>
  </div>
</section>
@endsection
