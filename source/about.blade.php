@extends('_layouts.master')

@push('meta')
    <meta property="og:title" content="About {{ $page->siteName }}" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ $page->getUrl() }}"/>
    <meta property="og:description" content="A little bit about {{ $page->siteName }}" />
@endpush

@section('body')
    <h1>About</h1>

    <img src="/assets/img/about.png"
        alt="About image"
        class="flex rounded-full h-64 w-64 bg-contain mx-auto md:float-right my-6 md:ml-10">

    <p class="mb-6">Hi, nice to meet you!</code></p>

    <p class="mb-6">My name is Linus Juhlin, and I live in Sweden. </p>

    <p class="mb-6">I currently work as web-developer here in Sweden, where I utilize the power of Laravel as much as possible.</p>

    <p class="mb-6">This blog is a way for me to jot down my thoughts and ideas regarding the web development world.</p>

    <p class="mb-6">Thanks for stopping by!</p>
@endsection
