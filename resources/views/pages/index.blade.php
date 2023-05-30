@extends('layout.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="card bg-light">
                    <div class="card-body">
                        <form action="{{ route('Ajout') }}" method="post">
                            @csrf
                            <div class="form-group md-3">

                                <label for=""> ID</label>
                                <input type="text" value="" name="id" id="" value="" class="form-control">
                                <label for=""> DESCRIPTION</label>
                                <input type="text" value="" name="description" id="" value="" class="form-control">
                                <label for=""> DATE ENTREZ</label>
                                <input type="text" value="" name="date sortie" id="" value="" class="form-control">
                                <label for=""> DATE SORTIE</label>
                                <input type="text" value="" name="date entrer" id="" value="" class="form-control">
                                <label for=""> PRICE</label>
                                <input type="text" value="" name="price" id="" value="" class="form-control">
                                @error('name')
                                    <span class="text-danger"></span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <button class="btn btn-dark w-100">validez</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
