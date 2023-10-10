<ul class="rating">
    @for ($i = 1; $i <= 5; $i++)
        <li>
            @if ($i <= $rating)
                <i data-feather="star" class="fill"></i>
            @else
                <i data-feather="star"></i>
            @endif
        </li>
    @endfor
</ul>
