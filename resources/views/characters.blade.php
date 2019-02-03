@extends('star-template')

@section('titre')
    Les personnages
@endsection

@section('contenu')
    <div class="container">
        <div class="content">
            <div class="title ">
                Liste des Personnages : pagination {{ $paginate }}
            </div>
        </div>
        <table class="table table-striped">
            <thead>
            <tr>
                <th>User</th>
                <th>Nom</th>
                <th>Description</th>
                <th>Prix</th>
                <th>Photo</th>
            </tr>
            </thead>
            <tbody>
            @foreach($characters as $character)
                <tr>
                    <td>{{ $character->name }}</td>
                    <td>User Nom</td>
                    <td>Description</td>
                    <td>Prix</td>
                    <td>Photo</td>
                </tr>
            @endforeach
            </tbody>
        </table>

        <nav aria-label="Page navigation example">
            <ul class="pagination">
                <li class="page-item"><a class="page-link" href="{{ url('/previouspaginate/' . $paginate) }}">Previous</a></li>
                <li class="page-item"><a class="page-link" href="{{ url('/characters/1') }}">1</a></li>
                <li class="page-item"><a class="page-link" href="{{ url('/characters/2') }}">2</a></li>
                <li class="page-item"><a class="page-link" href="{{ url('/characters/3') }}">3</a></li>
                <li class="page-item"><a class="page-link" href="#">4</a></li>
                <li class="page-item"><a class="page-link" href="#">5</a></li>
                <li class="page-item"><a class="page-link" href="#">6</a></li>
                <li class="page-item"><a class="page-link" href="#">7</a></li>
                <li class="page-item"><a class="page-link" href="#">8</a></li>
                <li class="page-item"><a class="page-link" href="#">9</a></li>
                <li class="page-item"><a class="page-link" href="{{ url('/nextpaginate/' . $paginate) }}">Previous</a></li>
            </ul>
        </nav>

    </div>
@endsection





