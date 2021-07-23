@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card w-200">
                    <div class="card-header">{{ __('Montre') }}</div>
                    <div class="card-body">
                        <div class="container">
                            <div class="row align-items-start">
                                <div class="col-md-8">
                                    <div class="card-img">
                                        <div id="conteneur" style="position:relative;">
                                            <img id="img1" class="img1" src='{{ asset("images/Cadran Blanc et Noir/Augarde_0032_cadran-blanc-chrome.png") }}' width="600" height="700" alt="">
                                            <img id="img2" class="img2" style="position:absolute;top:0;left:0px;" src='{{ asset('images/Cuir Fin/Augarde_0020_cuir-bracelet-violet.png') }}' width="600" height="700" alt="">
                                            <img id="img3" class="img3" style="position:absolute;top:0;left:0px;" src='{{ asset('images/Boitiers et Aiguilles Gold et Acier/Augarde_0030_aiguilles-or.png') }}' width="600" height="700" alt="">
                                            <img id="img4" class="img4" style="position:absolute;top:0;left:0px;" src='{{ asset('images/Boitiers et Aiguilles Gold et Acier/Augarde_0047_montre-boitier-chrome.png') }}' width="600" height="700" alt="">

                                        </div>



                                    </div>
                                </div>
                                <div class="col-md-4">
                                    @foreach($menus as $menu)
                                    <div class="card">
                                        <div class="card-header" id="headingOne">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">{{ $menu['name']}}</button>

                                            </h5>
                                        </div>
                                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                                            <div class="card-body">
                                                    <div id="{{ $menu["name"] }}"></div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
@section('script')
            <script type="text/javascript">
                $(document).ready(function(){
                    $.ajax({
                        url: 'api/all',
                        type: 'get',
                        dataType: 'json',

                        success: function (data) {


                            menus=data["menu"];
                            items=data["items"];
                            styles=data["items"][""]
                            function generateImage(){
                                    $.each(items, function (i, item) {
                                        if(item.default){
                                            switch (item.type){
                                                case "collection": $("#img1").attr("src",'{{ URL::asset('') }}' +item.image);
                                                case "cadran" :$("#img3").attr("src",'{{ URL::asset('') }}' +item.image);
                                                case "couleur": if(item.categorie=="silicone Fin silicone") $("#img2").attr("src",'{{ URL::asset('') }}' +item.image);
                                            }
                                        }
                                    });
                            }
                            generateImage();
                            function generate(var1,var2){
                                if(var2.default){
                                    return '<input type="radio" class="btn-check" name="'+var1.type+'" value="'+var1.type+' '+var2.name+'" id="'+var1.type+' '+var2.name+'" autocomplete="off" checked>'
                                        +'<label class="btn btn-secondary" for="'+var1.type+' '+var2.name+'">'+var2.name+'</label>'
                                }else{
                                    return '<input type="radio" class="btn-check" name="'+var1.type+'" value="'+var1.type+' '+var2.name+'" id="'+var1.type+' '+var2.name+'" autocomplete="off">'
                                        +'<label class="btn btn-secondary" for="'+var1.type+' '+var2.name+'">'+var2.name+'</label>'
                                }
                            }
                            $.each(menus, function(i, menu) {
                                html="";
                                $.each(items, function(i, item) {
                                    if(menu.type==item.type){
                                        if(menu.type=="style"){
                                            if(item.categorie=="bracelet cuir"){
                                                html=html+generate(menu,item);
                                            }
                                        }else{
                                            if(menu.type=="couleur"){
                                                if(item.categorie=="bracelet Fin cuir"){
                                                    html=html+generate(menu,item);
                                                }
                                            }else{
                                                html=html+generate(menu,item);
                                            }

                                        }
                                    }

                                });
                                $("#"+menu.name+"").html(html);
                            });




                        },
                        complete: function (data) {
                            generateImage();
                        }
                    });
                });
            </script>
@endsection
