<?php


$dom = new DOMDocument('1.0','UTF-8');


$dom->formatOutput = true;

$idnodeValue = $dom->createTextNode(Aquário);
$idNode = $dom->createElement('signo');
$idNode->appendChild($idnodeValue);

$emailNodeValue = $dom->createTextNode('Um aquariano ou uma aquariana pode se identificar com características como o desejo de inovar e a independência. Sabe aquela galera diferentona? São eles. Aquário signo costuma ser bastante idealista e seus nativos prezam por experiências que trazem liberdade. Podem ter posturas consideradas radicais e é bem comum o aquariano ser o "do contra" da turma.');
$emailNode = $dom->createElement('Descrição');
$emailNode->appendChild($emailNodeValue);

$idnodeValue = $dom->createTextNode(Peixes);
$idNode = $dom->createElement('signo');
$idNode->appendChild($idnodeValue);

$emailNodeValue = $dom->createTextNode('Quem nasce com o sol no signo de Peixes pode se identificar com virtudes como a sensibilidade e a intuição. Piscianos e piscianas típicos costumam ser bastante solidários e muitas vezes têm uma forte conexão com a espiritualidade. Por serem bastante sonhadores, se iludir com certa facilidade também é uma característica de Peixes.');
$emailNode = $dom->createElement('Descrição');
$emailNode->appendChild($emailNodeValue);

$idnodeValue = $dom->createTextNode(Áries);
$idNode = $dom->createElement('signo');
$idNode->appendChild($idnodeValue);

$emailNodeValue = $dom->createTextNode('Quem tem Sol no signo de Áries pode se identificar com características como a impulsividade e a coragem.');
$emailNode = $dom->createElement('Descrição');
$emailNode->appendChild($emailNodeValue);

$idnodeValue = $dom->createTextNode(Touro);
$idNode = $dom->createElement('signo');
$idNode->appendChild($idnodeValue);
m

$emailNodeValue = $dom->createTextNode('Quem nasce com o sol no signo Touro pode se identificar com virtudes como a paciência, o bom gosto e a sensualidade. Afeto e valorização do prazer e conforto também podem ser características de Touro, mas sabe aquela galera meio teimosa? Pode ser que tenham o signo de Touro forte no Mapa também..');
$emailNode = $dom->createElement('Descrição');
$emailNode->appendChild($emailNodeValue);

$idnodeValue = $dom->createTextNode(Gêmeos);
$idNode = $dom->createElement('signo');
$idNode->appendChild($idnodeValue);

$emailNodeValue = $dom->createTextNode('Quem nasce com o sol no signo de Câncer pode se identificar com características como a sensibilidade e o carinho. Um canceriano ou canceriana típicos costumam ter uma ótima intuição, além de um forte vínculo com seus familiares. A busca constante por segurança também é uma característica do signo de câncer.');
$emailNode = $dom->createElement('Descrição');
$emailNode->appendChild($emailNodeValue);

$idnodeValue = $dom->createTextNode(Câncer);
$idNode = $dom->createElement('signo');
$idNode->appendChild($idnodeValue);

$emailNodeValue = $dom->createTextNode('Um aquariano ou uma aquariana pode se identificar com características como o desejo de inovar e a independência. Sabe aquela galera diferentona? São eles. Aquário signo costuma ser bastante idealista e seus nativos prezam por experiências que trazem liberdade. Podem ter posturas consideradas radicais e é bem comum o aquariano ser o "do contra" da turma.');
$emailNode = $dom->createElement('Descrição');
$emailNode->appendChild($emailNodeValue);

$idnodeValue = $dom->createTextNode(Leão);
$idNode = $dom->createElement('signo');
$idNode->appendChild($idnodeValue);

$emailNodeValue = $dom->createTextNode('Quem nasce com o sol no signo Leão pode se identificar com características como a criatividade e a coragem. Sabe aquela galera com a autoestima lá em cima? Provavelmente tem Leão signo forte no mapa. A generosidade e o otimismo também podem ser bem presentes.');
$emailNode = $dom->createElement('Descrição');
$emailNode->appendChild($emailNodeValue);

$idnodeValue = $dom->createTextNode(Virgem);
$idNode = $dom->createElement('signo');
$idNode->appendChild($idnodeValue);

$emailNodeValue = $dom->createTextNode('Quem nasce com o Sol no signo Virgem pode se identificar com características como a objetividade e a organização. Virginianas e virginianos típicos costumam buscar constantemente a perfeição e identificar facilmente detalhes que passam despercebidos por todos os outros, essa é uma das características de Virgem mais admiradas.');
$emailNode = $dom->createElement('Descrição');
$emailNode->appendChild($emailNodeValue);

$idnodeValue = $dom->createTextNode(Libra);
$idNode = $dom->createElement('signo');
$idNode->appendChild($idnodeValue);

$emailNodeValue = $dom->createTextNode('Quem nasce com o sol no signo Libra, em geral, se identifica com características como a cortesia, a delicadeza e a busca constante pelo equilíbrio. Librianas e librianos típicos adoram viver relacionamentos e tendem a ter um pouco de dificuldade para tomar decisões.');
$emailNode = $dom->createElement('Descrição');
$emailNode->appendChild($emailNodeValue);

$idnodeValue = $dom->createTextNode(Escorpião);
$idNode = $dom->createElement('signo');
$idNode->appendChild($idnodeValue);

$emailNodeValue = $dom->createTextNode('Quem nasce com o sol no signo Escorpião pode se identificar com características como a intensidade e o poder de transformação. Escorpianas e escorpianos típicos costumam ser bastante passionais e muito generosos. O espírito de detetive e o sexto sentido afiado também são bem marcantes em quem tem escorpião forte no mapa também.');
$emailNode = $dom->createElement('Descrição');
$emailNode->appendChild($emailNodeValue);

$idnodeValue = $dom->createTextNode(Sagitário);
$idNode = $dom->createElement('signo');
$idNode->appendChild($idnodeValue);

$emailNodeValue = $dom->createTextNode('Quem nasce com o sol no signo de Sagitário pode se identificar com características como o otimismo e o desejo de liberdade. Sagitarianas e sagitarianos típicos costumam ser viajantes e, geralmente, enxergam o mundo inteiro como sua casa. A jovialidade também é uma característica marcante de Sagitário.');
$emailNode = $dom->createElement('Descrição');
$emailNode->appendChild($emailNodeValue);
$idnodeValue = $dom->createTextNode(Capricornio);
$idNode = $dom->createElement('signo');
$idNode->appendChild($idnodeValue);

$emailNodeValue = $dom->createTextNode('Quem tem Sol em Capricórnio pode se identificar com virtudes como persistência e responsabilidade. Capricórnio signo costuma ter metas bem definidas e noção dos seus limites. A relação próxima com o trabalho também pode ser uma característica de capricórnio bem marcante.');
$emailNode = $dom->createElement('Descrição');
$emailNode->appendChild($emailNodeValue);

$dataNodeValue = $dom->createCDATASection('01/01 ; 12/12');
$dataNode = $dom->createElement('data_range');
$dataNode->appendChild($dataNodeValue);

$rootNode = $dom->createElement('root');
$rootNode->appendChild($userNode);
$dom->appendChild($rootNode);



$dom->save(__DIR__.'C:\Users\Gabriel\Downloads\Qual_e_seuSignoTrabalhoFaculdade\Signo.ler-xml.php');
