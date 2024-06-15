<div class="card shadow items">
    <img src="{{ asset('images/laravel-img.jpg') }}" alt="laravel cource" class="card-img-top">
    <div class="card-body">
        <h2 class="card-title h4">{{ $title }}</h2>
        <div class="mb-2">
            <span class="text-primary me-2">{{ $chapters }} Chapters</span> with <span class="text-primary ms-2">{{ $lessons }} Lessons</span>
        </div>
        <p>
           Fee: <span class="text-primary">{{ $fee }}</span> MMK
        </p>
        <p class="text-primary">
            {{ $students }} Students Learned
        </p>

        <div>
            <span class="py-1 px-2 border border-danger rounded-pill">{{ $tags }}</span>
        </div>
    </div>
</div>