<?php 
namespace App\View\Components;
use Illuminate\View\Component;

class ProjectCard extends Component {
    public string $imagePath;
    public string $imageAlt;
    public string $title; 
    public string $siteHref; 
    public string $repoHref; 
    public array  $technologies; 
    public string $description;

    public function __construct(
        string $imagePath,
        string $imageAlt,
        string $title,
        string $siteHref, 
        string $repoHref, 
        array  $technologies, 
        string $description
    ) {
        $this->imagePath = $imagePath;
        $this->imageAlt = $imageAlt;
        $this->title = $title;
        $this->siteHref = $siteHref;
        $this->repoHref = $repoHref;
        $this->technologies = $technologies; 
        $this->description = $description;
    }

    public function render()
    {
        return view('components.project-card');
    }
}
