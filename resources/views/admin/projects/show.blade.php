@extends('layouts.app')
@section('content')
    <section class="container" id='projects_index'>
        <h1>{{$project->title}}</h1>
                <div class="card">
                    <img src="{{asset('storage/' . $project->image)}}" alt="{{$project->title}}">
                    <div class="p-3">
                        <p>{{$project->description}}</p>
                        <h6>{{$project->creation_date}}</h6>
                    </div>
                </div>
    </section>
@endsection