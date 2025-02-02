
@extends('master')
@section('body')

<div class="container">
<br><br><br><br>
<section id="home" class="hero-section layout-1 has-overlay overlay-gradient">
    <div class="container mt-5">

        <br />
        <br />
        <div class="row justify-content-center align-items-center">
            <h1 class="mb-4 text-white">Knowledge Base Articles</h1>



            <!-- Search Bar -->
            <div class="row mb-4">
                <div class="col-md-6 offset-md-3">
                    <h1>{{ $knowledgeBase->title }}</h1>
        {!! $knowledgeBase->content !!}
                </div>
            </div>
        </div></div></section>




</div>
@endsection
