<article class="community__card reveal">
    <div class="community__image">
        <img src="{{ $imagePath }}" height="172" width="141" alt="{{ $imageAlt }}"/>
    </div>
    <div class="community__body">
        <h3 class="community__body-title">{{ $title }}</h3>
        <p>{{ $description }}</p>
        <a class="styled__link" href="{{ $linkHref }}" target="_blank">{{ $linkText }}</a>
    </div>
</article>