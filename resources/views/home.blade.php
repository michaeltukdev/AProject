@extends('layouts.app')

@section('content')

<div class="container mt-8">
    <h1 class="text-2xl text-text-primary font-medium">Project List</h1>
    <p class="mt-1 text-text-secondary font-light">You are viewing # of projects.</p>

    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-4 mt-8">
        <a href="">
            <div class="bg-container rounded-lg p-5 shadow-lg hover:shadow-2xl transition space-y-4">
                <h3 class="text-text-primary">Project Name</h3>
                <p class="text-text-secondary leading-6 font-light tracking-wide text-sm">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus doloremque saepe consequuntur saepe consequuntur.</p>
                <p class="text-text-secondary leading-6 font-light tracking-wide text-sm">Made by <span class="text-primary font-normal">Michael Tilley</span></p>
            </div>
        </a>
    </div>
</div>

@endsection