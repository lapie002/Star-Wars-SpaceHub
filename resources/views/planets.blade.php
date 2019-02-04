@extends('star-template')

@section('titre')
    Star Wars Planets
@endsection

@section('contenu')
    <div class="container">
        <div class="content">
            <div class="title ">
                Planets List - Page {{ $paginate }}
            </div>
        </div>
        <table class="table table-striped">
            <thead>
            <tr>
                <th>Name</th>
                <th>Rotation Period</th>
                <th>Orbital Period</th>
                <th>diameter</th>
                <th>climate</th>
                <th>gravity</th>
                <th>terrain</th>
                <th>population</th>
            </tr>
            </thead>
            <tbody>
            @foreach($planets as $planet)
                <tr>
                    <td>{{ $planet->name }}</td>
                    <td>{{ $planet->rotation_period }}</td>
                    <td>{{ $planet->orbital_period }}</td>
                    <td>{{ $planet->diameter }}</td>
                    <td>{{ $planet->climate }}</td>
                    <td>{{ $planet->gravity }}</td>
                    <td>{{ $planet->terrain }}</td>
                    <td>{{ $planet->population }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>

        <nav aria-label="Page navigation example">
            <ul class="pagination">
                <li class="page-item"><a class="page-link" href="{{ url('/previousplanetspaginate/' . $paginate) }}">Previous</a></li>

                @for ($i = 1; $i <= $max_planet_per_page; $i++)
                    <li class="page-item"><a class="page-link" href="{{ url('/planets/' . $i) }}">{{$i}}</a></li>
                @endfor

                <li class="page-item"><a class="page-link" href="{{ url('/nextplanetspaginate/' . $paginate) }}">Next</a></li>
            </ul>
        </nav>
    </div>
@endsection
