@extends('star-template')

@section('titre')
    Star Wars Planets
@endsection

@section('contenu')
    <div class="container">
        <div class="content">
            <div class="title ">
                Search for a Character
            </div>
        </div>


                    <form method="post" action="{{url('search')}}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">

                                <label for="exampleInputName">Character's name</label>
                                <input type="text" class="form-control" id="exampleInputName" aria-describedby="nameHelp" placeholder="Enter character's name" name="name" required>
                                <small id="nameHelp" class="form-text text-muted">enter the full name of the character</small>

                        </div>

                        <button type="submit" class="btn btn-outline-secondary">Submit</button>
                        <a class="btn btn-outline-secondary" href="{{url('/')}}">Return</a>
                    </form>


    </div>
@endsection
