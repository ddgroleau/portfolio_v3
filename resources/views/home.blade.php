@extends('layouts.app', ['homePage' => true])

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
