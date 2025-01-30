<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Knowledge Base</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .container {
            max-width: 55%;
            margin: 20px auto;
            padding: 50px;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .article {
            margin-bottom: 20px;
            padding-bottom: 10px;
            border-bottom: 1px solid #ddd;
        }
        .article h2 {
            margin: 0 0 10px;
        }
        .article p {
            margin: 0;
            color: #000000;
            font-size: 20px;  /* Ukuran teks paragraf diperbesar */
            line-height: 1.6; /* Spasi antar baris agar lebih nyaman dibaca */
        }
        .article li {
            margin: 0;
            color: #000000;
            font-size: 20px;  /* Ukuran teks paragraf diperbesar */
            line-height: 1.6; /* Spasi antar baris agar lebih nyaman dibaca */
        }
        .actions {
            margin-top: 10px;
        }
        .actions a {
            margin-right: 10px;
            text-decoration: none;
            color: #007BFF;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Knowledge Base Articles</h1>

        @if(session('success'))
            <p style="color: green; font-size: 18px;">{{ session('success') }}</p>
        @endif
        <a href="{{ route('knowledge_base.create') }}">+ Add New Article</a>
        @foreach ($articles as $article)
            <div class="article">
                <h1>{{ $article->title }}</h1>
                {!! $article->content !!}
                <div class="actions">

                </div>
            </div>
        @endforeach


    </div>
</body>
</html>
