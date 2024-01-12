@extends('layouts.app')
@section('content')
    <section class="container" id='projects_index'>
        <h1>Projects List</h1>
        <div class="row">
            @foreach ($projects as $project)
            <div class="col-12 col-md-4 col-lg-3 gy-3 d-flex align-items-stretch ">
                <div class="card">
                    <a href="{{route('admin.projects.show', $project->id)}}">
                        <img src="{{$project->image}}" alt="{{$project->title}}">
                    </a>
                    <div class="p-3">
                        <h2>{{$project->title}}</h2>
                        <p>{{$project->description}}</p>
                        <h6>{{$project->creation_date}}</h6>
                    </div>
                    
                </div>
            </div>
            @endforeach
            
        
        </div>
    </section>
@endsection