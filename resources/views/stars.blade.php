@extends('star-template')

@section('titre')
    Star Wars Character
@endsection

@section('contenu')
    <div class="container">
        <div class="content">
            <div class="title ">
                Search Character Result
            </div>
        </div>
        <table class="table table-striped">
            <thead>
            <tr>
                <th>Name</th>
                <th>Height</th>
                <th>Mass</th>
                <th>Birth Year</th>
                <th>Gender</th>
            </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $character->name }}</td>
                    <td>{{ $character->height }} cm</td>
                    <td>{{ $character->mass }} kg</td>
                    <td>{{ $character->birth_year }}</td>
                    <td>{{ $character->gender }}</td>
                </tr>
            </tbody>
        </table>

    </div>
@endsection





