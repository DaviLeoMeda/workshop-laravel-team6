@extends('welcome')

@section('content')
    {{-- <div class="container">
        <h1>Form create pasta</h1>
        <form action="{{ route( '' ) }}" method="POST" >

            @csrf

            <div class="form-group">
                <label for="pasta-type" class="form-label">Type</label>
                <input type="text" id="pasta-type" name="type" class="form-control">
            </div>

            <div class="form-group">
                <label for="pasta-description" class="form-label">Description</label>
                <textarea class="form-control" name="description" id="pasta-description" cols="30" rows="10"></textarea>
            </div>



            <div class="form-group">
                <label for="pasta-image" class="form-label">image</label>
                <input type="text" id="pasta-image" name="image"  class="form-control">
            </div>

            <div class="form-group">
                <label for="pasta-cooking-time" class="form-label">cooking_time</label>
                <input type="text" id="pasta-cooking-time" name="cooking_time"  class="form-control">
            </div>

            <div class="form-group">
                <label for="pastas-title" class="form-label">Title</label>
                <input class="form-control" type="text" id="pastas-title" class="form-control" placeholder="Inserisci title" name="title">
            </div>

            <div class="form-group">
                <label for="pasta-weight" class="form-label">weight</label>
                <input type="text" id="pasta-weight" name="weight" class="form-control">
            </div>

            <button type="submit" class="btn btn-primary">Crea Pasta</button>

        </form>
    </div> --}}
<h1>ciao</h1>
@endsection
