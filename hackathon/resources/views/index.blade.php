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
                                <div class="col-md-6">
                                    <div class="card-img">
                                        <img src="./resources/img/jeux-de-des.jpeg" width="100%">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="row-cols-6">
                                        <div class="dropdown">
                                            <button class="btn btn-secondary dropdown-toggle show" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Dropdown
                                            </button>
                                            <ul class="dropdown-menu">
                                                <button class="dropdown-item">Collection Steel</button>
                                                <button class="dropdown-item">Golden Chic</button>

                                            </ul>
                                        </div>
                                    </div>
                                    <div class="row-cols-6">
                                        <div class="btn-group">
                                            <button class="btn btn-secondary btn-lg dropdown-toggle">
                                                Cadran
                                            </button>
                                        </div>
                                    </div>
                                    <div class="row-cols-6">
                                        <div class="btn-group">
                                            <button class="btn btn-secondary btn-lg dropdown-toggle">
                                                Matière
                                            </button>
                                        </div>
                                    </div>
                                    <div class="row-cols-6">
                                        <div class="btn-group">
                                            <button class="btn btn-secondary btn-lg dropdown-toggle">
                                                Longueur
                                            </button>
                                        </div>
                                    </div>
                                    <div class="row-cols-6">
                                        <div class="btn-group">
                                            <button class="btn btn-secondary btn-lg dropdown-toggle">
                                                Style
                                            </button>
                                        </div>
                                    </div>
                                    <div class="row-cols-6">
                                        <div class="btn-group">
                                            <button class="btn btn-secondary btn-lg dropdown-toggle">
                                                Couleur
                                            </button>
                                        </div>
                                    </div>
                                    <div class="row-cols-6">
                                        <div class="btn-group">
                                            <button class="btn btn-secondary btn-lg dropdown-toggle">
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
