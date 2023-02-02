@extends('layouts.app', ['homePage' => true])

@section('title', 'Home')

@section('content')
    <section class="hero__text">
        <h1>Dan Groleau</h1>
        <h2>Software Engineer</h2>
        <p>
            I am a senior full-stack software engineer with an extensive background in web development, and an 
            Army Veteran with experience driving large projects from concept to production, both on time and on budget.
        </p>
        <p>
            In my current role as a senior software developer at Tivity Health, Inc., I am building front and back-end applications
            with React and C#/.NET. In my free time I enjoy working with different JavaScript frameworks and other languages and 
            their associated framework(s), such as Java (Spring) and PHP (Laravel).
        </p>
    </section>
    <ul class="home__ul">
        <li class="home__li"><a href="/work">Work</a></li>
        <li class="home__li"><a target = "_blank" href="https://dev.to/ddgroleau">Blog</a></li>
        <li class="home__li"><a target = "_blank" href="{{ asset('/media/Dan_Groleau_Resume.pdf') }}">Resume</a></li>
        <li class="home__li"><a href="mailto:ddgroleau@gmail.com">Contact</a></li>
    </ul>
    <picture class="hero__img">
        <source media="(max-width:769px)" srcset="{{ asset('/media/wizard-mobile.svg') }}" />
        <img src="{{ asset('/media/wizard.svg') }}" alt="Wizard graphic" />
    </picture> 
@endsection
