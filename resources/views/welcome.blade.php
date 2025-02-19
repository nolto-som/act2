@extends('base')
@section('title', 'Welcome Page')

<div>
    <!-- @if('success')
    <div class="alert alert-success" role="alert">
        {{ session('success') }}
    </div>
    @endif -->
    
    <!-- Button trigger modal -->
    <!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addNewModal">
        Launch demo modal
    </button> -->

    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Age</th>
                <th scope="col">Gender</th>
                <th scope="col">Address</th>
            </tr>
        </thead>
        <tbody>
            @foreach($students as $std)
            <tr>
                <th scope="row">{{ $std -> id }}</th>
                <td>{{ $std -> name }}</td>
                <td>{{ $std -> age }}</td>
                <td>{{ $std -> gender }}</td>
                <td>{{ $std -> address }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <!-- Modal -->
    <!-- <div class="modal fade" id="addNewModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="{{ route('std.createNew') }}">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" placeholder="Enter your name">
                            @error('name')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="age" class="form-label">Age</label>
                            <input type="text" class="form-control" id="age" name="age" value="{{ old('age') }}" placeholder="Enter your age">
                            @error('age')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="gender" class="form-label">Gender</label>
                            <input type="text" class="form-control" id="gender" name="gender" value="{{ old('gender') }}" placeholder="Enter your gender">
                            @error('gender')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="address" class="form-label">Address</label>
                            <input type="text" class="form-control" id="address" name="address" value="{{ old('address') }}" placeholder="Enter your address">
                            @error('address')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-primary">Save changes</button> -->
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>