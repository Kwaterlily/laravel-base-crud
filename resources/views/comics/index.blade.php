@extends('layout.main')

@section('title', 'Comics')
    <div class="card-title">
        <h1>Fumetti disponibili</h1>
    </div>
    <div class="card-body">
        @dump($comics)
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Titolo</th>
                        <th scope="col">Autore</th>
                        <th scope="col">Editore</th>
                        <th scope="col">Edizione</th>
                        <th scope="col">Traduzione</th>
                    </tr>
                    <thead>
                        <tbody>
                            @forelse ($comics as $comic)
                                <tr>
                                    <td scope="row">
                                    @if($comic->icon)
                                    <img class="img-fluid" width="20" src="{{ $comic->icon }}" alt="{{ $team->title }}" />
                                    @endif
                                    <td>{{ $comic->editor }}</td>
                                    <td>{{ $comic->description }}</td>
                                    <td>{{ $comic->translator }}</td>
                                    <td>{{ $comic->edition }}</td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5">
                                        <h3>Nessun fumetto disponibile</h3> 
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </thead>
                </thead>
            </table>
    </div>
@endsection