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
                                                    <div id="menu{{ $menu["name"] }}"></div>
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
                            styles=data["items"];
                           /* function generateImage(){
                                    $.each(items, function (i, item) {
                                        if(item.default){
                                            switch (item.type){
                                                case "collection": $("#img4").attr("src",'{{ URL::asset('') }}' +item.image);
                                                case "cadran" :$("#img1").attr("src",'{{ URL::asset('') }}' +item.image);
                                                case "couleur": if(item.categorie=="silicone Fin silicone") $("#img2").attr("src",'{{ URL::asset('') }}' +item.image);
                                            }
                                        }
                                    });
                            }
                            generateImage();*/
                            function generate(var1,var2){
                                form='<form name="'+var1.type+'">';
                                if(var2.default){
                                    return '<input type="radio" class="btn-check"  name="'+var1.type+'" value="'+var2.image+'" id="'+var2.categorie+''+var2.name+'" autocomplete="off" checked>'
                                        +'<label class="btn btn-secondary" for="'+var2.categorie+''+var2.name+'">'+var2.name+'</label></form>'
                                }else{
                                    return '<input type="radio" class="btn-check" name="'+var1.type+'" value="'+var2.image+'" id="'+var2.categorie+''+var2.name+'" autocomplete="off">'
                                        +'<label class="btn btn-secondary"  for="'+var2.categorie+''+var2.name+'">'+var2.name+'</label>'
                                }
                            }
                            $.each(menus, function(i, menu) {
                                html="";
                                $.each(items, function(i, item) {
                                    if(menu.type==item.type){

                                        html=html+generate(menu,item);
                                    }

                                });
                                $("#menu"+menu.name+"").html(html);
                            });
                        },
                        complete: function (data) {

                        }
                    });

                });
                $( window ).on("load",function() {
                    //$("#cadrankaki").hide();
                    function generateImage(){
                        $("#img1").attr("src",'{{ URL::asset('') }}' +$( "input[name='cadran']" ).val());
                        $("#img2").attr("src",'{{ URL::asset('') }}' +$( "input[name='couleur']" ).val());
                        $("#img4").attr("src",'{{ URL::asset('') }}' +$( "input[name='collection']" ).val());
                    }
                    loadPage();
                    function loadPage () {
                        return new Promise(function (resolve, reject) {
                            setTimeout(function () {
                                resolve("anything");
                            }, 100);
                        });
                    }
                    loadPage()
                        .then(
                            function (result) {
                                id=$( "input[name='matiere']" ).attr("id");
                                name=$( "input[name='matiere']" ).attr("name");
                                $.ajax({
                                    url: 'api/items',
                                    type: 'get',
                                    dataType: 'json',

                                    success: function (data) {
                                        $.each(data, function(i, item) {
                                            if(item.parent==name){
                                                if(id==item.categorie){
                                                    $("#"+item.categorie+item.name).show();
                                                    $( "label[for='"+item.categorie+item.name+"']" ).show();
                                                    $("#"+item.categorie+item.name).prop('checked', true);
                                                }else{
                                                    $("#"+item.categorie+item.name).hide();
                                                    $( "label[for='"+item.categorie+item.name+"']" ).hide();
                                                }
                                            }
                                        });
                                    },
                                    complete: function(data){
                                        id=$( "input[name='style']" ).attr("id");
                                        name=$( "input[name='style']" ).attr("name");
                                        $.ajax({
                                            url: 'api/items',
                                            type: 'get',
                                            dataType: 'json',

                                            success: function (data) {
                                                j=0;
                                                $.each(data, function(i, item) {
                                                    if(item.parent==name){
                                                        if(id==item.categorie){
                                                            j++;
                                                            $("#"+item.categorie+item.name).show();
                                                            $( "label[for='"+item.categorie+item.name+"']" ).show();
                                                            if(j==1){
                                                                $("#"+item.categorie+item.name).prop('checked', true);
                                                            }
                                                        }else{
                                                            $("#"+item.categorie+item.name).hide();
                                                            $( "label[for='"+item.categorie+item.name+"']" ).hide();
                                                        }
                                                    }
                                                });
                                            }
                                        });
                                    }
                                });

                                generateImage();
                            }
                        );



                    $( "input[name='collection']" ).change(function(){
                        $("#img4").attr("src",'{{ URL::asset('') }}' +$( this ).val());
                    });
                    $( "input[name='cadran']" ).change(function(){
                        $("#img1").attr("src",'{{ URL::asset('') }}' +$( this ).val());
                    });
                    $( "input[name='matiere']" ).change(function(){
                        id=this.id;
                        name=this.name;
                        $.ajax({
                            url: 'api/items',
                            type: 'get',
                            dataType: 'json',

                            success: function (data) {
                                j=0;
                                $.each(data, function(i, item) {

                                    if(item.parent==name){
                                        if(id==item.categorie){
                                            j++;
                                            $("#"+item.categorie+item.name).show();
                                            $( "label[for='"+item.categorie+item.name+"']" ).show();
                                            if(j==1){
                                                $("#"+item.categorie+item.name).prop('checked', true);
                                            }
                                        }else{
                                            $("#"+item.categorie+item.name).hide();
                                            $( "label[for='"+item.categorie+item.name+"']" ).hide();
                                        }
                                    }
                                });
                            },
                            complete: function(data){
                                id=$( "input[name='style']" ).attr("id");
                                name=$( "input[name='style']" ).attr("name");
                                $.ajax({
                                    url: 'api/items',
                                    type: 'get',
                                    dataType: 'json',

                                    success: function (data) {
                                        j=0;
                                        $.each(data, function(i, item) {
                                            if(item.parent==name){
                                                if(id==item.categorie){
                                                    j++;
                                                    $("#"+item.categorie+item.name).show();
                                                    $( "label[for='"+item.categorie+item.name+"']" ).show();
                                                    if(j==1){

                                                        $("#"+item.categorie+item.name).prop('checked', true);
                                                    }
                                                }else{
                                                    $("#"+item.categorie+item.name).hide();
                                                    $( "label[for='"+item.categorie+item.name+"']" ).hide();
                                                }
                                            }
                                        });
                                    }
                                });
                            }
                        });

                        generateImage();

                    });
                    $( "input[name='style']" ).click(function(){
                        id=this.id;
                        name=this.name;
                        $.ajax({
                            url: 'api/items',
                            type: 'get',
                            dataType: 'json',

                            success: function (data) {
                                j=0;
                                $.each(data, function(i, item) {
                                    if(item.parent==name){
                                        if(id==item.categorie){
                                            j++;
                                            $("#"+item.categorie+item.name).show();
                                            $( "label[for='"+item.categorie+item.name+"']" ).show();
                                            if(j==1){
                                                $("#"+item.categorie+item.name).prop('checked', true);
                                            }
                                        }else{
                                            $("#"+item.categorie+item.name).hide();
                                            $( "label[for='"+item.categorie+item.name+"']" ).hide();
                                        }
                                    }
                                });
                            }
                        });

                    });
                    $( "input[name='couleur']" ).click(function(){
                        $("#img2").attr("src",'{{ URL::asset('') }}' +$( this ).val());
                    });
                })


            </script>
@endsection
