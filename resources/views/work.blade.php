<?php 
use App\View\Components\ProjectCard;
use App\View\Components\CommunityCard;

$projects = [
    new ProjectCard(
        "/media/healthcare.svg",
        "Healthcare Workers SVG",
        "Health & Wellness Discount Storefront",
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
        "Enterprise Marketing Website",
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
];

$communityContributions = [
    new CommunityCard(
        "/media/react-key-concepts.png",
        "React Key Concepts Book Cover",
        "\"React Key Concepts\" (Maximilian Schwarzm??ller; Packt Publishing 2022)",
        "https://www.packtpub.com/product/react-key-concepts/9781803234502",
        "SEE BOOK",
        "I reviewed the book as part of the Packt Reviewer's Club before the official book release and provided feedback to Packt Publishing."
    ),
    new CommunityCard(
        "/media/csharp-workshop.png",
        "C# Workshop Book Cover",
        "\"The C# Workshop\" (Jason Hales, Almantas Karpavicius & Mateus Viegas; Packt Publishing 2022)",
        "https://www.packtpub.com/product/the-c-workshop/9781800566491",
        "SEE BOOK",
        "I reviewed the book as part of the Packt Reviewer's Club before the official book release and provided feedback to Packt Publishing."
    ),
    new CommunityCard(
        "/media/docker-for-devs.png",
        "Docker for Developers Book Cover",
        "\"Docker for Developers\" (Richard Bullington-McGuire, Andrew K. Dennis & Michael Schwartz; Packt Publishing 2020)",
        "https://www.packtpub.com/product/react-key-concepts/9781803234502",
        "SEE BOOK",
        "I contributed to the GitHub repository for the book (github.com/PacktPublishing/Docker-for-Developers)."
    ),

];
?>
@extends('layouts.app')

@section('title', 'Work')

@section('content')
    <section class="work__component">
        <h1>Work</h1>
        <menu class="work__btns">
            <button onClick="scrollElementIntoView('projects')" class="styled__link">Go to Projects</button>
            <button onClick="scrollElementIntoView('community')" class="styled__link">Go to Community Involvement</button>
        </menu>
        <h2 id="projects" class="work__heading">Software Projects</h2>
        <section class="work__cards">
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
        <h2 id="community" class="work__heading">Community Involvement</h2>
        <section class="work__cards">
            @foreach ($communityContributions as $contribution)
                <x-community-card 
                    :image-path="$contribution->imagePath" 
                    :image-alt="$contribution->imageAlt" 
                    :title="$contribution->title" 
                    :description="$contribution->description" 
                    :link-href="$contribution->linkHref" 
                    :link-text="$contribution->linkText" 
                />
            @endforeach
        </section>
    </section>
@endsection