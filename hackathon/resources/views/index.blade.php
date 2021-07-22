@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">

                <div class="panel panel-default">
                    <div class="panel-heading">Generateur de montres</div>
                    <div class="panel-content">
                        <div class="container">
                            <div class="row">
                                <div class="col-6">
                                    <div class="card-img">
                                        <img src="./resources/img/jeux-de-des.jpeg" width="100%" height="50%">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="row-cols-6">
                                        <div class="dropdown show">
                                            <button class="btn btn-secondary btn-lg dropdown-toggle show" type="button"
                                                    id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                                    style="background-color: #cbd5e0">
                                                Collection
                                            </button>
                                            <div class="dropdown-menu">
                                                <button class="dropdown-item">Collection Steel</button>
                                                <button class="dropdown-item">Golden Chic</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row-cols-6">
                                        <div class="dropdown show">
                                            <button class="btn btn-secondary btn-lg dropdown-toggle show" type="button"
                                                    id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                                    style="background-color: #cbd5e0">
                                                Cadran
                                            </button>
                                            <div class="dropdown-menu">
                                                <button class="dropdown-item">Noir</button>
                                                <button class="dropdown-item">Blanc</button>
                                                <button class="dropdown-item">Orange Sunray</button>
                                                <button class="dropdown-item">Rose Sunray</button>
                                                <button class="dropdown-item">Bleu Sunray</button>
                                                <button class="dropdown-item">Vert Sunray</button>
                                                <button class="dropdown-item">Rouge foncé Sunray</button>
                                                <button class="dropdown-item">Kaki mat</button>
                                                <button class="dropdown-item">Violet Sunray</button>
                                                <button class="dropdown-item">Bleu foncé Sunray</button>
                                                <button class="dropdown-item">Taupe</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row-cols-6">
                                        <div class="dropdown show">
                                            <button class="btn btn-secondary btn-lg dropdown-toggle show" type="button"
                                                    id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                                    style="background-color: #cbd5e0">
                                                Matière
                                            </button>
                                            <div class="dropdown-menu">
                                                <button class="dropdown-item">Bracelet cuir</button>
                                                <button class="dropdown-item">Bracelet silicone</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row-cols-6">
                                        <div class="dropdown show">
                                            <button class="btn btn-secondary btn-lg dropdown-toggle show" type="button"
                                                    id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                                    style="background-color: #cbd5e0">
                                                Longueur
                                            </button>
                                            <div class="dropdown-menu">
                                                <button class="dropdown-item">Bracelet S-M</button>
                                                <button class="dropdown-item">Bracelet L-XL</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row-cols-6">
                                        <div class="dropdown show">
                                            <button class="btn btn-secondary btn-lg dropdown-toggle show" type="button"
                                                    id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                                    style="background-color: #cbd5e0">
                                                Style
                                            </button>
                                            <div class="dropdown-menu">
                                                <button class="dropdown-item">Bracelet large</button>
                                                <button class="dropdown-item">Bracelet Fin</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row-cols-6">
                                        <div class="dropdown show">
                                            <button class="btn btn-secondary btn-lg dropdown-toggle show" type="button"
                                                    id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                                    style="background-color: #cbd5e0">
                                                Couleur
                                            </button>
                                            <div class="dropdown-menu">
                                                <button class="dropdown-item">Rouge</button>
                                                <button class="dropdown-item">Orange</button>
                                                <button class="dropdown-item">Bleu foncé</button>
                                                <button class="dropdown-item">Noir</button>
                                                <button class="dropdown-item">Taupe</button>
                                                <button class="dropdown-item">Blanc</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row-cols-6">
                                        <div class="dropdown show">
                                            <button class="btn btn-secondary btn-lg dropdown-toggle show" type="button"
                                                    id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                                    style="background-color: #cbd5e0">
                                                Gravure
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

