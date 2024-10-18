@extends('Components.layout')

@section('title', 'Routes Lab Activity')

@section('content')
<div class="content-wrapper">
    <div class="routes-section">
        <div class="routes-description">
            <h1 class="title">Routes Lab Activity</h1>
            <div class="description">
                <p><strong>Description of the routes lab activity:</strong></p>
                <ul>
                    <li><strong>App Directory:</strong> This directory holds the core application code, which is crucial for understanding how Laravel structures its logic and functionality.</li>
                    <li><strong>Config Directory:</strong> Stores configuration settings, allowing you to manage various system settings, such as database connections and mail configurations.</li>
                    <li><strong>Database Directory:</strong> Contains the factories used to seed the database, which is essential for testing and creating mock data.</li>
                    <li><strong>Public Directory:</strong> Serves as the root for the web server, hosting the frontend assets like CSS, JavaScript, and images.</li>
                    <li><strong>Root Directory and .env File:</strong> The .env file is used for environment configuration, like setting up the database, application key, and mail settings.</li>
                    <li><strong>Resources Directory:</strong> Contains views and Blade templates, which are central to Laravel’s front-end display logic.</li>
                    <li><strong>Routes Directory:</strong> Defines all the web routes, making it clear how requests are directed in the application.</li>
                    <li><strong>Artisan Command-Line Tool:</strong> This tool is used to manage and automate common tasks in the Laravel project, such as starting the development server or running migrations.</li>
                </ul>
            </div>
        </div>
        <div class="routes-image">
            <img src="{{ asset('Images/Routes.png') }}" alt="Routes Lab Image" class="small-image"> <!-- Added class for styling -->
        </div>
    </div>
</div>
@endsection
