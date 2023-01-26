<?php 
use App\View\Components\ProjectCard;
use App\View\Components\CommunityCard;

$projects = [
    new ProjectCard(
        "/media/healthcare.svg",
        "Healthcare Workers SVG",
        "Health & Wellness Discount Application",
        "https://www.whlchoices.com",
        "",
        ["React", ".NET 6", "SCSS", "SQL/SQL Server", "Jest", "React Testing Library", "Cypress"],
        ".NET REST API and React frontend for an Enterprise Business. Professional Project.",
    ),
    new ProjectCard(
        "/media/auth.svg",
        "Secure Laptop",
        "OAuth 2 Authorization Server",
        "",
        "https://github.com/ddgroleau/id-assert",
        ["Java", "SQL", "PostgreSQL", "Spring Boot", "Spring Security"],
        "Spring Authorization Server implementing the OAuth 2.1 and OpenID Connect 1.0 specifications. Personal Project.",
    ),
    new ProjectCard(
        "/media/map.svg",
        "Map SVG",
        "Vendor Geolocator",
        "https://portlandfinder.fullstackdan.com/",
        "https://github.com/ddgroleau/PortlandFinder",
        ["C#", ".NET 7", "React", "Next.js", "Material UI"],
        ".NET REST API and React frontend that displays vendor locations relative to the location of the user's device. Personal Project.",
    ),
    new ProjectCard(
        "/media/wordpress.svg",
        "Website with WordPress Logo SVG",
        "Business Enterprise Marketing Website",
        "https://www.wholehealthliving.com",
        "",
        ["WordPress","PHP", ".NET 6", "SCSS", "SQL", "MySQL & SQL Server", "JavaScript"],
        ".NET REST API and WordPress frontend with custom theme/templates and dynamic healthcare provider search feature. Professional Project.",
    ),
    new ProjectCard(
        "/media/ecomm.svg",
        "Shopping Bags SVG",
        "Business Storefront",
        "",
        "https://github.com/ddgroleau/root-to-rise-api",
        ["Java", "Spring Boot", "SQL", "PostgreSQL", "React", "Next.js"],
        "Java REST API and React frontend for a business marketing website and e-commerce storefront. Personal Project.",
    ),
    new ProjectCard(
        "/media/portfolio.svg",
        "Man sitting on desk",
        "This Portfolio Website",
        "https://fullstackdan.com/",
        "https://github.com/ddgroleau/portfolio_v3",
        ["PHP", "Laravel", "HTML/CSS"],
        "This portfolio website, built with Laravel/PHP. Personal Project.",
    ),
    new ProjectCard(
        "/media/yoga.svg",
        "Yoga instructor",
        "Single-Page App for Yoga Instructor",
        "https://rachelaronneyoga.com/",
        "https://github.com/ddgroleau/ra-yoga",
        ["JavaScript", "React", "Next.js", "SCSS"],
        "Next.js React App. SCSS-Modules for styling. Video Library coming soon. Personal Project.",
    ),
    new ProjectCard(
        "/media/server.svg",
        "Server SVG",
        "Linode Compute Instance",
        "",
        "",
        ["Bash","NGINX","Docker","Virtualization","Linux"],
        "An Ubuntu virtual machine. I host websites, applications, and datastores using Docker and an NGINX reverse-proxy web server. Personal Project.",
    )
]
?>
@extends('layouts.app')

@section('title', 'Work')

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