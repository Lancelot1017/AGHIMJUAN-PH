@extends('admin-page.layout')
@section('title')
    Dashboard
@endsection
@section('current1')
    current
@endsection
@section('section')
    <div class="dashboard">
        <p class="text-uppercase">DASHBOARD</p>
        <div class="cards">
            <button type="button" data-toggle="modal" data-target="#exampleModalCenter" class="card-item">
                <p id="card-1" class="text-uppercase">Add New Project</p>
            </button>
            <a href="/admin/projects" class="card-item">
                <p id="card-2" class="text-uppercase">view Project</p>
            </a>
            <a href="/" class="card-item">
                <p id="card-3" class="text-uppercase">go to site</p>
            </a>
        </div>
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
                {{-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> --}}
                {{-- @yield('modal-submit-button') --}}
                <button type="submit" class="">Submit</button>
            </div>
        </form>
    @endsection
@endsection
