<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show do Bilhão</title>
</head>
<body>
    <?php
        $enunciados = array(
            "Qual o sentido da vida, do universo e tudo o mais?",
            "De onde viemos?",
            "Para onde vamos?",
            "Deus existe?",
            "Formigas têm pênis?"
            );

        $alternativas = array(
            0 => array(
                    "O da minha são você e esses seus olhos lindos *encara seus olhos lindos",
                    "Desenvolvimento de Aplicacoes Web!",
                    "Uai sei lá, cara, pergunta estranha",
                    "42",
                    "A vida é tão vazia de sentido quanto nós somos de compreensão acerca do universo"
                ),
            1 => array(
                    "De um útero cara, ce é burro?",
                    "Do nada para onde retornaremos após a chegada inevitável da morte",
                    "Eu pessoalmente voltei do médico agora",
                    "Você certamente veio direto do céu pra cair nos meus braços *morde o lábio de ladinho",
                    "Mas tem resposta isso daí?"
                ),
            2 => array(
                    "Pra casa logo, se Deus quiser",
                    "Pra onde você quiser, gato *piscadela sexy",
                    "Fazer uma pergunta normal ce não quer né?",
                    "Ah aqui tá bom eu acho, eu vou ficar por aqui mesmo",
                    "Retornaremos todos ao seio eterno do infinito que aguarda pacientemente o fim da nossa existência breve e insignificante"
                ),
            3 => array(
                "Sei lá porra, nada do que ce pergunta tem resposta!",
                "Se existir, sim, se não, não, ora bolas...",
                "Deus está morto, ele foi apenas uma criação das nossas mentes em desespero para tentar achar algum sentido no caos da existência",
                "Claro que existe, olha ele aqui na sua frente! *sensualiza mostrando o tanquinho",
                "Será que ainda tem daquele pudim na geladeira lá de casa?"
            ),
            4 => array(
                "Tá repreendido",
                "Sim! As fêmeas possuem um órgão protuberante e os machos têm uma cavidade!",
                "To com medo de pesquisar no google pra descobrir",
                "As formigas, como nós, têm a solidão e o desassossego como companheiros na jornada da vida, a diferença entre nós é a consciência que nós temos da nossa própria finitude",
                "As formiga têm mais é que se fuder, eu desisto..."
            )
        );

        $respostas = array(
            4,
            3,
            2,
            5,
            1
        );

        $i = 0;
        while($i < 5){
            echo "Pergunta: ".$enunciados[$i]."\n\n";
            
            echo "1) ".$alternativas[$i][0]."\n";
            echo "2) ".$alternativas[$i][1]."\n";
            echo "3) ".$alternativas[$i][2]."\n";
            echo "4) ".$alternativas[$i][3]."\n";
            echo "5) ".$alternativas[$i][4]."\n";
            
            echo "\nResposta: ".$respostas[$i]."\n";
            
            $i = $i + 1;
            echo "\n";
        }
    ?>
</body>
</html>