@extends('layouts.app')

@section('title', 'Projects')

@section('content')
    <section class="hero__text">
        <h1>Projects</h1>
        <h2>Coming Soon</h2>
    </section>
    <picture class="hero__img">
        <source media="(max-width:769px)" srcset="{{ asset('/media/wizard-mobile.svg') }}" />
        <img src="{{ asset('/media/wizard.svg') }}" alt="Wizard graphic" />
    </picture> 
@endsection