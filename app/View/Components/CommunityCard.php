<?php 
namespace App\View\Components;
use Illuminate\View\Component;

class CommunityCard extends Component {
    public string $imagePath;
    public string $imageAlt;
    public string $title; 
    public string $linkHref; 
    public string $linkText; 
    public string $description;

    public function __construct(
        string $imagePath,
        string $imageAlt,
        string $title, 
        string $linkHref, 
        string $linkText, 
        string $description
    ) {
        $this->imagePath = $imagePath;
        $this->imageAlt = $imageAlt;
        $this->title = $title;
        $this->linkHref = $linkHref; 
        $this->linkText = $linkText;
        $this->description = $description;
    }

    public function render()
    {
        return view('components.community-card');
    }
}
?>