@extends('layouts.app')

@section('content')
    <!DOCTYPE html>
    <html lang="it">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Il Tuo Ristorante</title>
    </head>

    <body>

        {{-- Struttura Tabellare --}}
        <div class="container py-5">
            <h1 class="pb-4 ps-3">Il Tuo/I Tuoi Ristorante/i</h1> <!-- da gestire il numero di ristoranti di un singolo proprietario e di conseguenza la scritta -->
            <div class="row">
                <div class="col-12 d-flex justify-content-center">

                    @if (!$restaurants)
                        <p>Non hai registrato alcun ristorante.</p>
                    @else
                        <table class="table w-lg-75">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Nome</th>
                                    <th scope="col" class="text-sm-end">Azioni</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($restaurants as $restaurant)
                                    <tr>
                                        <th scope="row">{{ $restaurant->id }}</th>
                                        <td>{{ $restaurant->name }}</td>
                                        <td>
                                            <!-- mobile actions -->
                                            <div class="dropstart d-sm-none">
                                                <button type="button" class="btn btn-sm btn-light border"
                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="bi bi-three-dots-vertical"></i>
                                                </button>
                                                <ul class="dropdown-menu p-2">
                                                    <!-- Dropdown menu links -->
                                                    <li>
                                                        <div class="d-flex justify-content-between">
                                                            <span>Visualizza</span><button type="button" class="btn btn-sm btn-primary"><i class="bi bi-eye-fill"></i></i></button>
                                                        </div>
                                                    </li>
                                                    <li class="my-2">
                                                        <div class="d-flex justify-content-between">
                                                            <span>Modifica</span><button type="button" class="btn btn-sm btn-warning mx-lg-1"><i class="bi bi-pencil-square"></i></button>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="d-flex justify-content-between">
                                                            <span>Elimina</span><button type="button" class="btn btn-sm btn-danger"><i class="bi bi-trash3"></i></button>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>

                                            <!-- tablet/desktop actions -->
                                            <div class="d-none d-sm-block text-end">
                                                <button type="button" class="btn btn-sm btn-primary"><i class="bi bi-eye-fill"></i></i></button>
                                                <button type="button" class="btn btn-sm btn-warning mx-lg-1"><i class="bi bi-pencil-square"></i></button>
                                                <button type="button" class="btn btn-sm btn-danger"><i class="bi bi-trash3"></i></button>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @endif
                </div>
            </div>
        </div>

        {{-- Struttura Cards --}}
        {{-- <div class="container py-5">
            <h1 class="pb-3">Il Tuo/I Tuoi Ristorante/i</h1> <!-- da gestire il numero di ristoranti di un singolo proprietario e di conseguenza la scritta -->
            <div class="row p-3">
                @foreach ($restaurants as $restaurant)
                    <div class="col-12 col-sm-6 col-md-6 d-flex justify-content-center py-2">
                        <div class="card d-flex justify-content-center align-items-center p-3" style="max-width: 500px;">
                            <div class="row align-items-center g-0">
                                <div class="col-md-4">
                                    <div class="box_image">
                                        <img src="{{ asset('img/test-ristorante.jpg') }}" alt="copertina-ristorante">
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body p-0 ps-4">
                                        <h4 class="card-title">{{ $restaurant->name }}</h4>

                                        <!-- mobile btns -->
                                        <div class="d-md-none float-end">
                                            <button type="button" class="btn btn-sm btn-warning"><i class="bi bi-pencil-square"></i></button>
                                            <button type="button" class="btn btn-sm btn-danger"><i class="bi bi-trash3"></i></button>
                                        </div>

                                        <!-- desktop btns -->
                                        <div class="d-none d-md-block float-end pt-3">
                                            <button type="button" class="btn btn-sm btn-warning">Edit</button>
                                            <button type="button" class="btn btn-sm btn-danger">Delete</button>
                                        </div>

                                        <!-- <p class="card-text"> {{ $restaurant->address}}{{ $restaurant->phone}} </p> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div> --}}
    </body>

    </html>
@endsection
