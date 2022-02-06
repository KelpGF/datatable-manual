<?php

header("Access-Control-Allow-Origin: *");

function gerarDados() {
    $dados = [];
    $nomes = [
        "Kelvin",
        "Daniel",
        "Emílio",
        "Pedro",
        "Ramon",
        "Robson",
        "Hil",
        "Emerson",
        "Tadeu",
        "Shalom",
        "Jonathan",
        "Abymael",
        "Marcos",
        "Rita",
        "Emmely",
        "Larissa",
        "Sammyra",
        "Sarah",
        "José",
        "Júlia",
        "Mirael",
        "Enzo",
        "Valentina",
        "Telma",
        "Celma",
        "Estevita",
        "Mirtis",
        "Célia",
        "Camila",
        "Pandora",
        "Sofia",
    ];

    $sobrenomes = [
        "Gomes",
        "Fernandes",
        "Sousa",
        "Silva",
        "Vasconcelos",
        "Vieira",
        "Arruda",
        "Barbosa",
        "dos Santos",
        "da Cruz",
        "Gurjel",
        "Soares",
        "Araújo",
        "Alencar",
        "Brasil",
        "Júnior",
        "Josileudo",
        "Clementino",
        "Estevão",
        "Tavarez",
        "Oliveira",
        "Nunes",
        "Libório",
        "Paz",
        "Souza",
        "Paiva",
        "Rodrigues",
        "Ferreira",
        "Alvez",
        "Perreira",
        "Lima",
        "Ribeiro",
        "Martins",
        "Marinho",
        "Andrade",
        "Barros",
        "Batista",
    ];

    for ($i=0; $i<100; $i++) {
        $dados[] = [
            "dt_nasc" => date("Y-m-d", strtotime('-'.rand(7000, 10000).'days')),
            "nome" => $nomes[rand(0, count($nomes)-1)].' '.$sobrenomes[rand(0, count($sobrenomes)-1)].' '.$sobrenomes[rand(0, count($sobrenomes)-1)],
            "id" => $i+1,
            "vl_salario" => rand(2500, 5000),
        ];
    }

    echo "[";
    foreach ($dados as $arrayDados) {
        echo "<br>&nbsp;&nbsp;&nbsp;[";
        foreach ($arrayDados as $idx => $valor) {
            echo "<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'".$idx."' => '".$valor."',";
        }
        echo "<br>&nbsp;&nbsp;&nbsp;],";
    }
    echo "<br>]";
}

// gerarDados();

$dadosTable = [
    [
        'dt_nasc' => '1996-03-11',
        'nome' => 'Mirtis Vieira Ribeiro',
        'id' => '1',
        'vl_salario' => '4758',
    ],
    [
        'dt_nasc' => '2002-10-30',
        'nome' => 'Larissa Brasil Brasil',
        'id' => '2',
        'vl_salario' => '3751',
    ],
    [
        'dt_nasc' => '1996-08-31',
        'nome' => 'Pandora Batista da Cruz',
        'id' => '3',
        'vl_salario' => '4384',
    ],
    [
        'dt_nasc' => '1997-11-27',
        'nome' => 'Larissa Ribeiro Gurjel',
        'id' => '4',
        'vl_salario' => '3571',
    ],
    [
        'dt_nasc' => '1994-12-11',
        'nome' => 'Enzo Sousa Libório',
        'id' => '5',
        'vl_salario' => '4486',
    ],
    [
        'dt_nasc' => '1997-05-16',
        'nome' => 'Jonathan Batista Josileudo',
        'id' => '6',
        'vl_salario' => '4922',
    ],
    [
        'dt_nasc' => '2002-08-06',
        'nome' => 'Camila Alencar Souza',
        'id' => '7',
        'vl_salario' => '3998',
    ],
    [
        'dt_nasc' => '2000-06-10',
        'nome' => 'Emerson Gurjel Sousa',
        'id' => '8',
        'vl_salario' => '2633',
    ],
    [
        'dt_nasc' => '2001-06-23',
        'nome' => 'Kelvin Oliveira Marinho',
        'id' => '9',
        'vl_salario' => '3705',
    ],
    [
        'dt_nasc' => '1998-10-27',
        'nome' => 'Pedro Oliveira Andrade',
        'id' => '10',
        'vl_salario' => '3775',
    ],
    [
        'dt_nasc' => '2002-06-01',
        'nome' => 'Valentina Barros Júnior',
        'id' => '11',
        'vl_salario' => '4016',
    ],
    [
        'dt_nasc' => '1996-11-04',
        'nome' => 'Hil Araújo Tavarez',
        'id' => '12',
        'vl_salario' => '4311',
    ],
    [
        'dt_nasc' => '2001-01-12',
        'nome' => 'Kelvin Araújo Fernandes',
        'id' => '13',
        'vl_salario' => '3754',
    ],
    [
        'dt_nasc' => '2001-03-01',
        'nome' => 'Estevita Oliveira Gurjel',
        'id' => '14',
        'vl_salario' => '4421',
    ],
    [
        'dt_nasc' => '1995-01-31',
        'nome' => 'Emmely Batrista Cavalcante',
        'id' => '15',
        'vl_salario' => '2544',
    ],
    [
        'dt_nasc' => '1999-05-30',
        'nome' => 'Tadeu Paiva Perreira',
        'id' => '16',
        'vl_salario' => '3289',
    ],
    [
        'dt_nasc' => '1994-10-26',
        'nome' => 'Larissa Fernandes dos Santos',
        'id' => '17',
        'vl_salario' => '3582',
    ],
    [
        'dt_nasc' => '1997-05-03',
        'nome' => 'Sofia Marinho Andrade',
        'id' => '18',
        'vl_salario' => '3221',
    ],
    [
        'dt_nasc' => '2002-10-20',
        'nome' => 'Jonathan Arruda Andrade',
        'id' => '19',
        'vl_salario' => '3295',
    ],
    [
        'dt_nasc' => '1999-12-11',
        'nome' => 'Kelvin Rodrigues Silva',
        'id' => '20',
        'vl_salario' => '3544',
    ],
    [
        'dt_nasc' => '1996-06-02',
        'nome' => 'Celma Vasconcelos Alencar',
        'id' => '21',
        'vl_salario' => '3225',
    ],
    [
        'dt_nasc' => '1999-07-17',
        'nome' => 'José Paz Júnior',
        'id' => '22',
        'vl_salario' => '2749',
    ],
    [
        'dt_nasc' => '1998-08-06',
        'nome' => 'Pandora Júnior Gurjel',
        'id' => '23',
        'vl_salario' => '2989',
    ],
    [
        'dt_nasc' => '1999-01-01',
        'nome' => 'Daniel Fernandes Josileudo',
        'id' => '24',
        'vl_salario' => '4656',
    ],
    [
        'dt_nasc' => '1998-11-26',
        'nome' => 'Emerson Martins Andrade',
        'id' => '25',
        'vl_salario' => '4956',
    ],
    [
        'dt_nasc' => '1999-03-19',
        'nome' => 'Robson Perreira Gurjel',
        'id' => '26',
        'vl_salario' => '3065',
    ],
    [
        'dt_nasc' => '1995-10-05',
        'nome' => 'Shalom Batista Oliveira',
        'id' => '27',
        'vl_salario' => '3755',
    ],
    [
        'dt_nasc' => '1998-07-03',
        'nome' => 'Célia Souza da Cruz',
        'id' => '28',
        'vl_salario' => '3475',
    ],
    [
        'dt_nasc' => '1998-07-06',
        'nome' => 'Kelvin dos Santos Paz',
        'id' => '29',
        'vl_salario' => '4577',
    ],
    [
        'dt_nasc' => '2000-05-01',
        'nome' => 'Estevita Nunes Arruda',
        'id' => '30',
        'vl_salario' => '4537',
    ],
    [
        'dt_nasc' => '2000-06-13',
        'nome' => 'Pedro Martins Gomes',
        'id' => '31',
        'vl_salario' => '4603',
    ],
    [
        'dt_nasc' => '1999-05-18',
        'nome' => 'Emmely Ferreira Paz',
        'id' => '32',
        'vl_salario' => '4548',
    ],
    [
        'dt_nasc' => '1996-12-08',
        'nome' => 'Daniel Gurjel Paiva',
        'id' => '33',
        'vl_salario' => '3243',
    ],
    [
        'dt_nasc' => '1994-11-04',
        'nome' => 'Sofia Lima Gurjel',
        'id' => '34',
        'vl_salario' => '3927',
    ],
    [
        'dt_nasc' => '2002-07-15',
        'nome' => 'Sammyra Ribeiro Libório',
        'id' => '35',
        'vl_salario' => '2920',
    ],
    [
        'dt_nasc' => '2001-04-05',
        'nome' => 'Valentina Andrade Araújo',
        'id' => '36',
        'vl_salario' => '4293',
    ],
    [
        'dt_nasc' => '1995-04-22',
        'nome' => 'Mirael dos Santos Alencar',
        'id' => '37',
        'vl_salario' => '3657',
    ],
    [
        'dt_nasc' => '2002-04-29',
        'nome' => 'Mirael Paz Nunes',
        'id' => '38',
        'vl_salario' => '4000',
    ],
    [
        'dt_nasc' => '1996-02-08',
        'nome' => 'Pandora Sousa Barros',
        'id' => '39',
        'vl_salario' => '3852',
    ],
    [
        'dt_nasc' => '1997-07-14',
        'nome' => 'Pedro Alvez Alencar',
        'id' => '40',
        'vl_salario' => '2681',
    ],
    [
        'dt_nasc' => '1995-11-19',
        'nome' => 'Celma Libório Arruda',
        'id' => '41',
        'vl_salario' => '3375',
    ],
    [
        'dt_nasc' => '1996-02-27',
        'nome' => 'Daniel Vasconcelos Sousa',
        'id' => '42',
        'vl_salario' => '4349',
    ],
    [
        'dt_nasc' => '2000-09-28',
        'nome' => 'Daniel Josileudo Tavarez',
        'id' => '43',
        'vl_salario' => '3806',
    ],
    [
        'dt_nasc' => '2001-07-22',
        'nome' => 'Pedro Fernandes Gomes',
        'id' => '44',
        'vl_salario' => '2565',
    ],
    [
        'dt_nasc' => '2001-11-05',
        'nome' => 'Robson Fernandes Júnior',
        'id' => '45',
        'vl_salario' => '4879',
    ],
    [
        'dt_nasc' => '1995-07-29',
        'nome' => 'Mirtis Souza Clementino',
        'id' => '46',
        'vl_salario' => '2604',
    ],
    [
        'dt_nasc' => '1998-01-09',
        'nome' => 'Emerson Silva Alvez',
        'id' => '47',
        'vl_salario' => '3317',
    ],
    [
        'dt_nasc' => '1999-06-26',
        'nome' => 'Sarah Fernandes Sousa',
        'id' => '48',
        'vl_salario' => '4681',
    ],
    [
        'dt_nasc' => '1995-04-29',
        'nome' => 'Pandora Rodrigues Perreira',
        'id' => '49',
        'vl_salario' => '4943',
    ],
    [
        'dt_nasc' => '1997-02-22',
        'nome' => 'Sofia Barros dos Santos',
        'id' => '50',
        'vl_salario' => '3271',
    ],
    [
        'dt_nasc' => '1996-01-23',
        'nome' => 'Camila Estevão Martins',
        'id' => '51',
        'vl_salario' => '3339',
    ],
    [
        'dt_nasc' => '1999-04-08',
        'nome' => 'Tadeu Batista Gurjel',
        'id' => '52',
        'vl_salario' => '3113',
    ],
    [
        'dt_nasc' => '1995-02-22',
        'nome' => 'José Lima Libório',
        'id' => '53',
        'vl_salario' => '4245',
    ],
    [
        'dt_nasc' => '1995-11-09',
        'nome' => 'Larissa Tavarez Batista',
        'id' => '54',
        'vl_salario' => '2559',
    ],
    [
        'dt_nasc' => '1994-09-13',
        'nome' => 'Emílio Batista Araújo',
        'id' => '55',
        'vl_salario' => '3970',
    ],
    [
        'dt_nasc' => '1999-11-12',
        'nome' => 'Júlia Alvez Vasconcelos',
        'id' => '56',
        'vl_salario' => '3867',
    ],
    [
        'dt_nasc' => '1998-04-23',
        'nome' => 'Kelvin Ferreira Gurjel',
        'id' => '57',
        'vl_salario' => '2773',
    ],
    [
        'dt_nasc' => '1994-11-06',
        'nome' => 'Camila da Cruz Arruda',
        'id' => '58',
        'vl_salario' => '3268',
    ],
    [
        'dt_nasc' => '2002-03-23',
        'nome' => 'Shalom Brasil Andrade',
        'id' => '59',
        'vl_salario' => '3078',
    ],
    [
        'dt_nasc' => '1999-05-29',
        'nome' => 'Robson Barros Fernandes',
        'id' => '60',
        'vl_salario' => '2603',
    ],
    [
        'dt_nasc' => '1995-01-18',
        'nome' => 'Abymael Estevão Júnior',
        'id' => '61',
        'vl_salario' => '3374',
    ],
    [
        'dt_nasc' => '1994-09-28',
        'nome' => 'Estevita Arruda Andrade',
        'id' => '62',
        'vl_salario' => '2735',
    ],
    [
        'dt_nasc' => '2000-01-03',
        'nome' => 'Kelvin Sousa Júnior',
        'id' => '63',
        'vl_salario' => '3449',
    ],
    [
        'dt_nasc' => '1999-09-18',
        'nome' => 'Marcos Barros Paiva',
        'id' => '64',
        'vl_salario' => '2573',
    ],
    [
        'dt_nasc' => '2002-03-10',
        'nome' => 'Pedro Andrade Tavarez',
        'id' => '65',
        'vl_salario' => '3967',
    ],
    [
        'dt_nasc' => '1995-04-30',
        'nome' => 'José Batista Sousa',
        'id' => '66',
        'vl_salario' => '3881',
    ],
    [
        'dt_nasc' => '2002-02-13',
        'nome' => 'Pedro Fernandes dos Santos',
        'id' => '67',
        'vl_salario' => '2797',
    ],
    [
        'dt_nasc' => '2002-03-14',
        'nome' => 'Emílio Júnior Alencar',
        'id' => '68',
        'vl_salario' => '4682',
    ],
    [
        'dt_nasc' => '1998-10-03',
        'nome' => 'Marcos Rodrigues Júnior',
        'id' => '69',
        'vl_salario' => '3131',
    ],
    [
        'dt_nasc' => '2000-08-04',
        'nome' => 'Ramon Brasil Barbosa',
        'id' => '70',
        'vl_salario' => '3841',
    ],
    [
        'dt_nasc' => '1995-10-24',
        'nome' => 'Emílio Ferreira Alvez',
        'id' => '71',
        'vl_salario' => '4746',
    ],
    [
        'dt_nasc' => '1996-10-27',
        'nome' => 'Valentina Libório Perreira',
        'id' => '72',
        'vl_salario' => '4506',
    ],
    [
        'dt_nasc' => '1998-09-25',
        'nome' => 'Pandora Sousa Vasconcelos',
        'id' => '73',
        'vl_salario' => '4009',
    ],
    [
        'dt_nasc' => '1995-02-13',
        'nome' => 'Tadeu Marinho Ferreira',
        'id' => '74',
        'vl_salario' => '4037',
    ],
    [
        'dt_nasc' => '2002-10-04',
        'nome' => 'Shalom Perreira Fernandes',
        'id' => '75',
        'vl_salario' => '3044',
    ],
    [
        'dt_nasc' => '1997-01-28',
        'nome' => 'Mirael Silva Soares',
        'id' => '76',
        'vl_salario' => '3946',
    ],
    [
        'dt_nasc' => '1999-04-22',
        'nome' => 'Telma Andrade Araújo',
        'id' => '77',
        'vl_salario' => '3896',
    ],
    [
        'dt_nasc' => '2001-09-20',
        'nome' => 'Sarah Ribeiro Vasconcelos',
        'id' => '78',
        'vl_salario' => '3088',
    ],
    [
        'dt_nasc' => '1995-12-25',
        'nome' => 'Telma Estevão Ribeiro',
        'id' => '79',
        'vl_salario' => '4440',
    ],
    [
        'dt_nasc' => '2002-01-03',
        'nome' => 'Mirael Soares Ribeiro',
        'id' => '80',
        'vl_salario' => '3945',
    ],
    [
        'dt_nasc' => '2002-09-14',
        'nome' => 'Daniel da Cruz Oliveira',
        'id' => '81',
        'vl_salario' => '4200',
    ],
    [
        'dt_nasc' => '1998-12-10',
        'nome' => 'Estevita da Cruz Fernandes',
        'id' => '82',
        'vl_salario' => '3260',
    ],
    [
        'dt_nasc' => '1995-01-20',
        'nome' => 'Tadeu Arruda Alvez',
        'id' => '83',
        'vl_salario' => '2658',
    ],
    [
        'dt_nasc' => '1998-06-21',
        'nome' => 'Larissa Martins dos Santos',
        'id' => '84',
        'vl_salario' => '2878',
    ],
    [
        'dt_nasc' => '2001-10-24',
        'nome' => 'Sammyra Oliveira Josileudo',
        'id' => '85',
        'vl_salario' => '4980',
    ],
    [
        'dt_nasc' => '1999-01-12',
        'nome' => 'Emmely Vieira Brasil',
        'id' => '86',
        'vl_salario' => '2846',
    ],
    [
        'dt_nasc' => '2000-03-18',
        'nome' => 'Shalom Ribeiro Josileudo',
        'id' => '87',
        'vl_salario' => '4592',
    ],
    [
        'dt_nasc' => '1996-04-29',
        'nome' => 'Célia Estevão Júnior',
        'id' => '88',
        'vl_salario' => '2768',
    ],
    [
        'dt_nasc' => '2002-03-13',
        'nome' => 'Enzo Vasconcelos Barros',
        'id' => '89',
        'vl_salario' => '3905',
    ],
    [
        'dt_nasc' => '2000-01-27',
        'nome' => 'Enzo Vasconcelos Júnior',
        'id' => '90',
        'vl_salario' => '4588',
    ],
    [
        'dt_nasc' => '2001-11-02',
        'nome' => 'José Barros Gurjel',
        'id' => '91',
        'vl_salario' => '3741',
    ],
    [
        'dt_nasc' => '1999-06-05',
        'nome' => 'Daniel Arruda Martins',
        'id' => '92',
        'vl_salario' => '3408',
    ],
    [
        'dt_nasc' => '1996-05-02',
        'nome' => 'Daniel Ribeiro Ferreira',
        'id' => '93',
        'vl_salario' => '2768',
    ],
    [
        'dt_nasc' => '1999-04-16',
        'nome' => 'José Soares Paz',
        'id' => '94',
        'vl_salario' => '3075',
    ],
    [
        'dt_nasc' => '1997-05-27',
        'nome' => 'Hil Gomes Perreira',
        'id' => '95',
        'vl_salario' => '4037',
    ],
    [
        'dt_nasc' => '1996-03-20',
        'nome' => 'Emmely Souza Clementino',
        'id' => '96',
        'vl_salario' => '3145',
    ],
    [
        'dt_nasc' => '1996-10-29',
        'nome' => 'Marcos Oliveira Souza',
        'id' => '97',
        'vl_salario' => '3148',
    ],
    [
        'dt_nasc' => '2002-06-08',
        'nome' => 'Rita Alvez Araújo',
        'id' => '98',
        'vl_salario' => '4717',
    ],
    [
        'dt_nasc' => '1996-01-25',
        'nome' => 'Emílio Vasconcelos Vieira',
        'id' => '99',
        'vl_salario' => '4982',
    ],
    [
        'dt_nasc' => '1994-10-27',
        'nome' => 'Júlia Rodrigues Gomes',
        'id' => '100',
        'vl_salario' => '2882',
    ],
];

$pagina_atual = (isset($_GET['pagina_atual'])) ? $_GET['pagina_atual'] : 0;
$qtd_registros_pagina = (isset($_GET['qtd_registros_pagina'])) ? $_GET['qtd_registros_pagina'] : 10;

// echo '<pre>'; var_dump(array_slice($dadosTable, ($pagina_atual-1)*$qtd_registros_pagina, $qtd_registros_pagina));

echo json_encode([
    "qtd_registros" => count($dadosTable),
    "dados" => array_slice($dadosTable, ($pagina_atual-1)*$qtd_registros_pagina, $qtd_registros_pagina)
]);

?>