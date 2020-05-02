@extends('layouts.site')

@section('title', 'Projeto')

@section('content')

    <div class="body-container clearfix">

        <div class="img-container" style="
            background: url('./storage/projects/ambulantes.jpg') no-repeat fixed;
            background-size: cover;">

            <div class="text-container">
                <div class="title-text-container">
                    <h1>ambulante</h1>
                    <span class="arrow-up">
                        <i class="fas fa-angle-double-up"></i>
                    </span>
                </div>
                <p> 
                    roubei, roubei, roubei <br>
                    esta roupa em uma varal <br>
                    na beira de alguma estrada <br>
                    estrada perdida, não <br>
                    esta é minha vida
                </p>

                <p>
                    me despi de tudo e me mostrei nu ao mundo <br>
                    para me libertar ao olhos do povo <br>
                    segundo um lapso de fé num rumo <br>
                    seguindo um sonho que me acometeu
                </p>

                <p>
                    perdido, sigo... <br>
                    pois do sonho já me esqueci <br>
                    agora tratado como louco <br>
                    rouco, um ronco de motor <br>
                    incompreensível dentro de minha própria existência, deficiência
                </p>

                <p>
                    minha voz e palavras se deformam quando tocam o ar <br>
                    a roupa, esta que peguei <br>
                    me leva de volta a me esconder dos olhos de outrem <br>
                    farrapos de pano que me tornam invisível <br>
                    sobras de tecidos gasto de uma vida risível
                </p>

                <p>
                    já não sei meu caminho <br>
                    já não sei se paro ou se sigo <br>
                    as roupas tem os mesmos buracos <br>
                    dos tiros que me fizeram correr <br>
                    as balas quiseram me comer
                </p>

                <p>
                    agora me alimento da vida nua <br>
                    o sangue da carne crua <br>
                    tem o mesmo gosto do sangue <br>
                    que me subia pela garganta
                </p>

                <p>
                    as roupas me acharam ou eu as achei <br>
                    eu as perdi ou as ganhei de volta <br>
                    sigo em um loop eterno e constante <br>
                    me chamo ambulante
                </p>

                <div class="container clearfix py-5">
                    <img class="img-fluid" src="{{ asset('storage/projects/ambulantes.jpg') }}" alt="">
                </div>


            </div>
        </div>
    </div>

@endsection