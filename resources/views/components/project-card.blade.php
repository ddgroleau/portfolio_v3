<article class="project__card">
    <div class="project__image">
        <img src="{{ $imagePath }}" height="180" width="200" alt="{{ $imageAlt }}"/>
    </div>
    <div class="project__body">
        <h3 class="project__body-title">{{ $title }}</h3>
        <p><u>Technologies:</u>&nbsp;{{ implode(", ",$technologies) }}</p>
        <p>{{ $description }}</p>
        <menu class="project__body-links">
            @if(!empty($repoHref))
                <a class="styled__link" href="{{ $repoHref }}" target="_blank">VIEW CODE</a>
            @endif
            @if(!empty($siteHref))
                <a class="styled__link" href="{{ $siteHref }}" target="_blank">GO TO SITE</a>
            @endif
        </menu>
    </div>
</article>