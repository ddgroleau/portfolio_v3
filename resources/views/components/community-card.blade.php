<article class="community__card">
    <div class="community__image">
        <img src="{{ $imagePath }}" height="115" width="auto" alt="{{ $imageAlt }}"/>
    </div>
    <div class="community__body">
        <h3>{{ $title }}</h3>
        <p>{{ $description }}</p>
        <a href="{{ $linkHref }}">{{ $linkText }}</a>
    </div>
</article>