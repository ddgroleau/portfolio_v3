<?php 
use App\View\Components\ProjectCard;
use App\View\Components\CommunityCard;

$projects = [
    new ProjectCard(
        "/media/map.svg",
        "Map SVG",
        "Vendor Geolocator",
        "https://portlandfinder.fullstackdan.com/",
        "https://github.com/ddgroleau/PortlandFinder",
        ["C#", ".NET 7", "React", "Next.js", "Material UI"],
        "Decoupled .NET backend and React frontend that displays vendor locations relative to the location of the user's device.",
    ),
    new ProjectCard(
        "/media/auth.svg",
        "Secure Laptop",
        "OAuth 2 Authorization Server",
        "",
        "https://github.com/ddgroleau/id-assert",
        ["Java", "SQL", "PostgreSQL", "Spring Boot", "Spring Security"],
        "Spring Authorization Server implementing the OAuth 2.1 and OpenID Connect 1.0 specifications.",
    ),
    new ProjectCard(
        "/media/portfolio.svg",
        "Man sitting on desk",
        "This Portfolio Website",
        "https://fullstackdan.com/",
        "https://github.com/ddgroleau/portfolio_v3",
        ["PHP", "Laravel", "HTML/CSS"],
        "This portfolio website, built with Laravel/PHP.",
    ),
    new ProjectCard(
        "/media/yoga.svg",
        "Yoga instructor",
        "Single-Page App for Yoga Instructor",
        "https://rachelaronneyoga.com/",
        "https://github.com/ddgroleau/ra-yoga",
        ["JavaScript", "React", "Next.js", "SCSS"],
        "Next.js React App. SCSS-Modules for styling. Video Library coming soon.",
    ),
    new ProjectCard(
        "/media/server.svg",
        "Server SVG",
        "Linode Compute Instance",
        "",
        "",
        ["Bash","NGINX","Docker","Virtualization","Linux"],
        "An Ubuntu virtual machine. I host websites, applications, and datastores using Docker and an NGINX reverse-proxy web server.",
    )
]
?>
@extends('layouts.app')

@section('title', 'Projects')

@section('content')
    <section>
        <h1>Work</h1>
        <h2 class="work__heading">Software Projects</h2><br>
        <section class="work__projects">
            @foreach ($projects as $project)
                <x-project-card 
                    :image-path="$project->imagePath" 
                    :image-alt="$project->imageAlt" 
                    :title="$project->title" 
                    :description="$project->description" 
                    :technologies="$project->technologies" 
                    :site-href="$project->siteHref" 
                    :repo-href="$project->repoHref" 
                />
            @endforeach
        </section>
        <h2 class="work__heading">Community Involvement</h2><br>
        <section>

        </section>
    </section>
@endsection