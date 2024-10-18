@extends('Components.layout')

@section('title', 'Middleware Lab Activity')

@section('content')

<div class="middleware-image">
        <img src="{{ asset('Images/Middleware.png') }}" alt="Profile Image">
    </div>
<div class="container">
    <h1 class="text-center mb-4">Middleware Lab Activity</h1>
    
    <h2>Practical Applications:</h2>
    
    <p>
        Middleware is essentially a layer that sits between the request and the response in a web application. 
        It allows developers to filter incoming requests and outgoing responses, providing a way to manage functionalities
        like authentication, logging, and input validation. In Laravel, middleware can be created and applied to routes to handle
        various tasks, ensuring that the application remains secure and efficient.
    </p>
    
    <p>
        Throughout this learning process, I implemented middleware in my Laravel projects. For instance, 
        I created a <strong>CheckAge</strong> middleware to restrict access to certain pages based on the user’s age.
         This not only reinforced my understanding of middleware but also showcased its practical application in real-world scenarios.
    </p>
    
    <p>
        Additionally, I explored how middleware can enhance security through logging requests.
         By implementing a <strong>LogRequests</strong> middleware, I was able to track incoming requests, 
         which is essential for monitoring application behavior and diagnosing issues.
    </p>
</div>
@endsection
