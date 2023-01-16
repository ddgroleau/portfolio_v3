@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <section class="hero__text">
        <h1>Dan Groleau</h1>
        <h2>Software Engineer</h2>
        <p>
            I am a full-stack software engineer specializing in web development. 
            I enjoy developing websites and applications for businesses of any size.
        </p>
    </section>
    <ul class="home__ul">
        <li class="home__li"><a href="#">Projects</a></li>
        <li class="home__li"><a href="#">Blog</a></li>
        <li class="home__li"><a href="{{ asset('/media/Dan_Groleau_Resume.pdf') }}">Resume</a></li>
        <li class="home__li"><a href="mailto:ddgroleau@gmail.com">Contact</a></li>
    </ul>
    <img
        srcset="{{ asset('/media/wizard.svg') }} 400w, {{ asset('/media/wizard-mobile.svg') }} 350w"
        sizes="(max-width: 769px) 350px, 400px"
        src="{{ asset('/media/wizard.svg') }}"
        alt="Wizard graphic" 
        class="hero__img"
    />
@endsection
