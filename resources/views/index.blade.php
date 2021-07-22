@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="container-fluid">
            <div class="row">
                {{-- Image --}}
                <div class="col-6">
                    <div class="card-img">
                        <img src= "{{asset('images/SiliconeFin/rubbergris')}}">
                    </div>
                </div>
                {{-- Liste de boutons collapsibles --}}
                <div class="col-6">
                    <div id="accordion">
                        {{-- Collection --}}
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <h5 class="mb-0">
                                    <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Collection
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                                <div class="card-body">
                                    <input type="radio" class="btn-check" name="options" id="option1" autocomplete="off" checked>
                                    <label class="btn btn-secondary" for="option1">Steel Cool</label>
                                    <input type="radio" class="btn-check" name="options" id="option2" autocomplete="off">
                                    <label class="btn btn-secondary" for="option2">Golden Chic</label>
                            </div>
                        </div>
                        {{-- Cadran --}}
                        <div class="card">
                            <div class="card-header" id="headingTwo">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Cadran
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                <div class="card-body">
                                    <input type="radio" class="btn-check" name="options" id="option1" autocomplete="off" checked>
                                    <label class="btn btn-secondary" for="option1">Noir</label>
                                    <input type="radio" class="btn-check" name="options" id="option2" autocomplete="off">
                                    <label class="btn btn-secondary" for="option2">Blanc</label>
                                    <input type="radio" class="btn-check" name="options" id="option1" autocomplete="off">
                                    <label class="btn btn-secondary" for="option3">Orange Sunray</label>
                                    <input type="radio" class="btn-check" name="options" id="option4" autocomplete="off">
                                    <label class="btn btn-secondary" for="option4">Rose Sunray</label>
                                    <input type="radio" class="btn-check" name="options" id="option5" autocomplete="off">
                                    <label class="btn btn-secondary" for="option5">Bleu ciel Sunray</label>
                                    <input type="radio" class="btn-check" name="options" id="option6" autocomplete="off">
                                    <label class="btn btn-secondary" for="option6">Vert Sunray</label>
                                    <input type="radio" class="btn-check" name="options" id="option7" autocomplete="off">
                                    <label class="btn btn-secondary" for="option7">Rouge foncé Sunray</label>
                                    <input type="radio" class="btn-check" name="options" id="option8" autocomplete="off">
                                    <label class="btn btn-secondary" for="option8">Kaki</label>
                                    <input type="radio" class="btn-check" name="options" id="option9" autocomplete="off">
                                    <label class="btn btn-secondary" for="option9">Violet Sunray</label>
                                    <input type="radio" class="btn-check" name="options" id="option10" autocomplete="off">
                                    <label class="btn btn-secondary" for="option10">Bleu foncé Sunray</label>
                                    <input type="radio" class="btn-check" name="options" id="option11" autocomplete="off">
                                    <label class="btn btn-secondary" for="option11">Taupe</label>
                                </div>
                            </div>
                        </div>
                        {{-- Matière --}}
                        <div class="card">
                            <div class="card-header" id="headingThree">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        Matière
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                                <div class="card-body">
                                    <input type="radio" class="btn-check" name="options" id="option1" autocomplete="off" checked>
                                    <label class="btn btn-secondary" for="option1">Bracelet Cuir</label>
                                    <input type="radio" class="btn-check" name="options" id="option2" autocomplete="off">
                                    <label class="btn btn-secondary" for="option2">Bracelet Silicone</label>
                                </div>
                            </div>
                        </div>
                        {{-- Longueur --}}
                        <div class="card">
                            <div class="card-header" id="headingFour">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                        Longueur
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
                                <div class="card-body">
                                    <input type="radio" class="btn-check" name="options" id="option1" autocomplete="off" checked>
                                    <label class="btn btn-secondary" for="option1">Bracelet S-M</label>
                                    <input type="radio" class="btn-check" name="options" id="option2" autocomplete="off">
                                    <label class="btn btn-secondary" for="option2">Golden L-XL</label>
                                </div>
                            </div>
                        </div>
                        {{-- Style --}}
                        <div class="card">
                            <div class="card-header" id="headingFive">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                        Style
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion">
                                <div class="card-body">
                                    <input type="radio" class="btn-check" name="options" id="option1" autocomplete="off" checked>
                                    <label class="btn btn-secondary" for="option1">Bracelet Large</label>
                                    <input type="radio" class="btn-check" name="options" id="option2" autocomplete="off">
                                    <label class="btn btn-secondary" for="option2">Bracelet Fin</label>
                                </div>
                            </div>
                        </div>
                        {{-- Couleur--}}
                        <div class="card">
                            <div class="card-header" id="headingSix">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                        Couleur
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordion">
                                <div class="card-body">
                                    <input type="radio" class="btn-check" name="options" id="option1" autocomplete="off" checked>
                                    <label class="btn btn-secondary" for="option1">Rouge</label>
                                    <input type="radio" class="btn-check" name="options" id="option2" autocomplete="off">
                                    <label class="btn btn-secondary" for="option2">Marron</label>
                                    <input type="radio" class="btn-check" name="options" id="option1" autocomplete="off">
                                    <label class="btn btn-secondary" for="option3">Orange</label>
                                    <input type="radio" class="btn-check" name="options" id="option4" autocomplete="off">
                                    <label class="btn btn-secondary" for="option4">Bleu foncé</label>
                                    <input type="radio" class="btn-check" name="options" id="option5" autocomplete="off">
                                    <label class="btn btn-secondary" for="option5">Noir</label>
                                    <input type="radio" class="btn-check" name="options" id="option6" autocomplete="off">
                                    <label class="btn btn-secondary" for="option6">Taupe</label>
                                    <input type="radio" class="btn-check" name="options" id="option7" autocomplete="off">
                                    <label class="btn btn-secondary" for="option7">Blanc</label>
                                </div>
                            </div>
                        </div>
                        {{-- Gravure --}}
                        <div class="card">
                            <div class="card-header" id="headingSeven">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                        Gravure
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordion">
                                <div class="card-body"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
