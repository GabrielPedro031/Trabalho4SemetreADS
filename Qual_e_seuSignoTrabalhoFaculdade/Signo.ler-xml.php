<?php

$string = '<?xml version="1.0" encoding="UTF-8"?>
<root>
  <user>
    <Signo>Virgem</Signo>
    <Descricao>Quem nasce com o Sol no signo Virgem pode se identificar com características como a objetividade e a organização.</Descricao>
    <Data_range><![CDATA[02/09; 29/09]]></Data_range>
  </user>
</root>';

$xml = simplexml_load_string($string)


echo 'Signo: '.$xml->user->id."\n";
echo 'Descricao: '.$xml->user->name."\n";
echo 'Data_range: '.$xml->user->email."\n";

