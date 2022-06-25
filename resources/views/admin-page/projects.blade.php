@extends('admin-page.layout')
@section('title')
    Projects
@endsection
@section('current9')
    current
@endsection
@section('section')
    <div class="project-header">
        <span class="text-uppercase">PROJECTS</span>
        <button type="button" data-toggle="modal" data-target="#exampleModalCenter" class="card-item">
            <span class="add-new-project text-uppercase">add new project</span>
        </button>
    </div>
    <div class="project-content">

        {{-- FOR DESKTOP --}}
        <table class="for-desktop">
            <thead>
                <tr>
                    <th scope="col">no</th>
                    <th scope="col">image</th>
                    <th scope="col">title</th>
                    <th scope="col">description</th>
                    <th scope="col">action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($projects as $project)
                    <tr>
                        <th scope="col" class="text-uppercase">{{ $loop->iteration }}</th>
                        <td><img src="{{ asset($project->photo) }}" alt="{{ $project->title }}"></td>
                        <td>{{ $project->title }}</td>
                        <td class="desc">{{ $project->description }}</td>
                        <td>
                            <button type="button" data-toggle="modal" data-target="#editProjectModal" class="btn-primary"><i class="fa-solid fa-pen-to-square"></i></button>
                            <a href="{{ 'delete/' . $project->id }}" onclick="return confirm(&quot;Confirm Delete?&quot;)"><button class="btn-danger"><i class="fa-solid fa-trash"></i></button></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        {{-- FOR MOBILE --}}
        @foreach ($projects as $project)
            <table class="for-mobile">
                <thead>
                    <tr>
                        <th>no</th>
                        <td>{{ $loop->iteration }}</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th>image</th>
                        <td><img src="{{ asset($project->photo) }}" alt="{{ $project->title }}"></td>
                    </tr>
                    <tr>
                        <th>title</th>
                        <td>{{ $project->title }}</td>
                    </tr>
                    <tr>
                        <th>description</th>
                        <td class="desc">{{ $project->description }}</td>
                    </tr>
                    <tr>
                        <th class="last-child-th">action</th>
                        <td>
                            <button type="button" data-toggle="modal" data-target="#editProjectModal" class="btn-primary"><i class="fa-solid fa-pen-to-square"></i></button>
                            <a href="{{ 'delete/' . $project->id }}" onclick="return confirm(&quot;Confirm Delete?&quot;)"><button class="btn-danger"><i class="fa-solid fa-trash"></i></button></a>
                        </td>
                    </tr>
                </tbody>
            </table>
        @endforeach

    </div>


    @section('modal-title')
        Add New Project
    @endsection
    @section('modal-body')
        <form action="{{ url('/admin/store') }}" method="POST" enctype="multipart/form-data" class="modal-project-body-container">
            @csrf
            <div>
                <div id="image">
                    <label for="img">Upload Background Image</label>
                    <input type="file" id="img" name="photo" accept="image/*" required>
                </div>
                <div id="title">
                    <label for="title">Project Name</label>
                    <input type="text" name="title" placeholder="input your project name here" required>
                </div>
            </div>
            <div>
                <div>
                    <label for="desc">Input Description</label>
                    <textarea name="description" id="" cols="50" rows="5" placeholder="input your description here"></textarea>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="">Submit</button>
            </div>
        </form>
    @endsection

    @section('modal-title-edit')
        Edit Project
    @endsection
    @section('modal-body-edit')
        <form action="{{ url('/admin/update') }}" method="POST" enctype="multipart/form-data" class="modal-project-body-container">
            @csrf
            <div>
                <div id="image">
                    <label for="img">Edit Background Image</label>
                    <input type="file" id="img" name="photo" accept="image/*">
                </div>
                <div id="title">
                    <label for="title">Edit Project Name</label>
                    <input type="text" name="title" placeholder="input your project name here">
                </div>
            </div>
            <div>
                <div>
                    <label for="desc">Edit Description</label>
                    <textarea name="description" id="" cols="50" rows="5" placeholder="input your description here"></textarea>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="">Submit</button>
            </div>
        </form>
    @endsection
@endsection
