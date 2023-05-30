@extends('layout.app')
@section('content')
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-8 mx-auto">
                <div class="card rounded-0 shadow">
                    <div class="card-header">
                        <h3>LISTE DES EVENEMENTS</h3>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>

                                <tr>
                                    <th>IDENTIFIANT</th>
                                    <th>TITRE</th>
                                    <th> DESCRIPTION</th>
                                    <th>date de DEBUT</th>
                                    <th>date de FIN</th>
                                    <th> PRICE</th>

                                </tr>
                            </thead>
                            <tbody>
@foreach ( $events as  $event)
                                    <tr>
                                        <th> {{ $event->id }}</th>
                                        <th>{{ $event->tile }} </th>
                                        <th> {{ $event->description }} </th>
                                        <th>{{ $event->date_debut }} </th>
                                        <th>{{ $event->date_fin }} </th>
                                        <th>{{ $event->price }} </th>
                                        @endforeach

                                        <td>
                                            <a href="" class="btn btn-success btn-sm ">Modifier</a>
                                            <a href="" class="btn btn-danger btn-sm">suprimer</a>

                                        </td>
                                    </tr>

                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
