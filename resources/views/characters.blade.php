@extends('star-template')

@section('titre')
    Star Wars Characters
@endsection

@section('contenu')
    <div class="container">
        <div class="content">
            <div class="title ">
                Characters List - Page {{ $paginate }}
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
            @foreach($characters as $character)
                <tr>
                    <td>{{ $character->name }}</td>
                    <td>{{ $character->height }} cm</td>
                    <td>{{ $character->mass }} kg</td>
                    <td>{{ $character->birth_year }}</td>
                    <td>{{ $character->gender }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>

        <nav aria-label="Page navigation example">
            <ul class="pagination">
                <li class="page-item"><a class="page-link" href="{{ url('/previouspaginate/' . $paginate) }}">Previous</a></li>

                @for ($i = 1; $i <= $max_per_page; $i++)
                    <li class="page-item"><a class="page-link" href="{{ url('/characters/' . $i) }}">{{$i}}</a></li>
                @endfor

                <li class="page-item"><a class="page-link" href="{{ url('/nextpaginate/' . $paginate) }}">Next</a></li>
            </ul>
        </nav>

    </div>
@endsection





