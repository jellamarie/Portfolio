@extends('Components.layout')

@section('title', 'Layout Lab Activity')

@section('content')

    <div class="layout-image">
        <img src="{{ asset('Images/Layout.png') }}" alt="Profile Image">
    </div>
    <div class="container">
        <h1 class="page-title">Layout Lab Activity</h1>
        <p class="description">Description of layout and using a master layout in Laravel.</p>
        <p class="summary">Summary: Purpose of the Layout File and How It is Used:</p>
        <p>
            The layout file (Layout.blade.php) serves as a reusable template for different views in the Laravel application,<br>
             centralizing common elements like the <code>&lt;head&gt;</code>, <code>&lt;header&gt;</code>, and <code>&lt;footer&gt;</code>.
        </p><br>
        <p class="responsibilities-title">Main Responsibilities:</p>
        <ul class="responsibilities-list">
            <li>Defines the common structure for web pages, including the navigation bar and footer.</li>
            <li>Links stylesheets and fonts globally, ensuring consistent access across views.</li>
            <li>Example: The navigation bar is defined once in the layout file, shared across all views,
                while the @yield('content') directive serves as a placeholder for individual view content.</li>
        </ul>
    </div>
@endsection
