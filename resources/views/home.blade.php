@extends('layouts.app')

@section('content')

<div class="container mt-8">
    <h1 class="text-2xl text-text-primary font-medium">Project List</h1>
    <p class="mt-1 text-text-secondary font-light">You are viewing # of projects.</p>

    @livewire('project-list')
</div>

@endsection