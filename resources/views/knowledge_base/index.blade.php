@extends('master')
@section('body')
    <section id="home" class="hero-section layout-1 has-overlay overlay-gradient">
        <div class="container mt-5">

            <br />
            <br />
            <div class="row justify-content-center align-items-center">
                <h1 class="mb-4 text-white">Knowledge Base Articles</h1>



                <!-- Search Bar -->
                <div class="row mb-4">
                    <div class="col-md-6 offset-md-3">
                        <form action="{{ route('knowledge_base.index') }}" method="GET">
                            <div class="input-group">
                                <input type="text" name="search" class="form-control" placeholder="Search article title..." value="{{ request('search') }}" oninput="filterArticles()" id="searchInput">
                                <button class="btn btn-primary" type="submit">Search</button>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="row g-4" id="articlesContainer"> <!-- Added spacing between cards -->
                    @foreach ($articles as $article)
                        <div class="col-md-4 article-card" data-title="{{ strtolower($article->title) }}">
                            <div class="card h-100 bg-white">
                                <div class="d-flex justify-content-center">
                                    <img src="{{ asset('assets/img/logo/item1.jpg') }}" class="card-img-top" alt="{{ $article->title }}" style="max-width: 100%; height: auto;">
                                </div>

                                <div class="card-body bg-white">
                                    <h5 class="card-title">{{ $article->category }}</h5>
                                    <h4 class="card-text">{{ $article->title }}</h4>
                                </div>
                                <div class="card-footer bg-white border-0 text-end">
                                    <a href="{{ route('knowledge_base.show', $article->id) }}" class="btn btn-primary">Read More</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <script>
        function filterArticles() {
            let input = document.getElementById('searchInput').value.toLowerCase();
            let cards = document.querySelectorAll('.article-card');

            cards.forEach(card => {
                let title = card.getAttribute('data-title');
                if (title.includes(input)) {
                    card.style.display = 'block';
                } else {
                    card.style.display = 'none';
                }
            });
        }
    </script>
@endsection
