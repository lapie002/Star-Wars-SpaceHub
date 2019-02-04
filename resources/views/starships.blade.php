@extends('star-template')

@section('titre')
    Star Wars Starships
@endsection

@section('contenu')
    <div class="container">
        <div class="content">
            <div class="title ">
                Starships List - Page {{ $paginate }}
            </div>
        </div>
        <table class="table table-striped">
            <thead>
            <tr>
                <th>Name</th>
                <th>Model</th>
                <th>Length</th>
                <th>max speed</th>
                <th>crew capacity</th>
                <th>passengers</th>
                <th>consumables</th>
            </tr>
            </thead>
            <tbody>
            @foreach($starships as $starship)
                <tr>
                    <td>{{ $starship->name }}</td>
                    <td>{{ $starship->model }}</td>
                    <td>{{ $starship->length }} meters</td>
                    <td>{{ $starship->max_atmosphering_speed }}</td>
                    <td>{{ $starship->crew }} prs</td>
                    <td>{{ $starship->passengers }} prs</td>
                    <td>{{ $starship->consumables }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>

            <div class="content">
                <nav aria-label="Page navigation">
                    <ul class="pagination">
                        <li class="page-item"><a class="page-link" href="{{ url('/previousstarshipspaginate/' . $paginate) }}">Previous</a></li>

                        @for ($i = 1; $i <= $max_starships_per_page; $i++)
                            <li class="page-item"><a class="page-link" href="{{ url('/starships/' . $i) }}">{{$i}}</a></li>
                        @endfor

                        <li class="page-item"><a class="page-link" href="{{ url('/nextstarshipspaginate/' . $paginate) }}">Next</a></li>
                    </ul>
                </nav>
            </div>
    </div>
@endsection
