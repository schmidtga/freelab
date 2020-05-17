<?php

use Illuminate\Database\Seeder;
use App\Models\Project;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $project01 = Project::create([
            'title'         => 'Ambulante',
            'image'         => 'ambulante.jpg',
            'description'   => '
            <p>
                roubei, roubei, roubei
                esta roupa em uma varal
                na beira de alguma estrada
                estrada perdida, não
                esta é minha vida

                me despi de tudo e me mostrei nu ao mundo
                para me libertar ao olhos do povo
                segundo um lapso de fé num rumo
                seguindo um sonho que me acometeu
            
                perdido, sigo...
                pois do sonho já me esqueci
                agora tratado como louco
                rouco, um ronco de motor
                incompreensível dentro de minha própria existência, deficiência
            
                minha voz e palavras se deformam quando tocam o ar
                a roupa, esta que peguei <br>
                me leva de volta a me esconder dos olhos de outrem
                farrapos de pano que me tornam invisível
                sobras de tecidos gasto de uma vida risível
            
                já não sei meu caminho
                já não sei se paro ou se sigo
                as roupas tem os mesmos buracos
                dos tiros que me fizeram correr
                as balas quiseram me comer
            
                agora me alimento da vida nua
                o sangue da carne crua
                tem o mesmo gosto do sangue
                que me subia pela garganta
            
                as roupas me acharam ou eu as achei
                eu as perdi ou as ganhei de volta
                sigo em um loop eterno e constante
                me chamo ambulante
            </p>',
        ]);

        $project02 = Project::create([
            'title'         => 'Alivio',
            'image'         => 'alivio.jpg',
            'description'   => '
            <p>
                há dias que adias nossos encontros
                a ponto de apontar as pontas dos meus dedos
                e desapontar a mim mesmo em ondas ocasionais
                por acaso, ao ocaso, há casos mais honestos

                há portos para pousar
                ha livros para me livrar
                aporto nos olhares
                navego pelo ar

                há dias que adio tocar no que penso, pesa
                apontas a ponta do ponto mais precisodo que mais preciso, lesa
                há princípios que aprecio a principio
                pois precinto no recinto
                um movimento menos ruidoso
                que é causado por seu calcado

                chacinas o que digo
                vacinas meu inimigo
                junto a ti, ajunto as migalhas
                a qual me junto em fungos

                rígido
                rugido
                frente
                rente
                passou batido
                sem a perspectiva de vida
                sem a atenção devida

                de cara discara o numero
                descara o devoto sem qualquer voto
                candidato ao vazio lotado
                de cândidas vozes

                há lírios, há pios, alívio
                há obras de concreto de total controle
                sereno leve, serenidade
                serena a idade.
            </p>
            ',
        ]);

        $project03 = Project::create([
            'title'         => 'Deixa',
            'image'         => 'deixa.jpg',
            'description'   => '
            <p>
                Assim que escurece,
                meu pensamento esclarece.
                Anoitece
                e você logo me esquece.
                Será possivel,
                Que meu acorde te acorde?
                De perto
                aguardo te desperto.
                Assim que despertas
                meu coração se aquieta.
                Meu dedos se movem
                e de nota em nota me notas,
                tocando suas costas, costelas.
                De costas me esperas!
                lentamente meu sufoco se queixa
                de sua grave deixa.
                Deixa meu agudo queixo 
                perfurar sua nuca?
            </p>
            ',
        ]);
    }
}
