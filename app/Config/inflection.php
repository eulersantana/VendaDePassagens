<?php 
$_uninflected = array('atlas', 'lapis', 'onibus', 'pires', 'virus', '.*x', 'status');
 $_pluralIrregular = array();

Inflector::rules('singular', array(
'rules' => array(
'/^(.*)oes$/i' => '\1ao',
'/^(.*)s$/i' => '\1',
'/^(.*)ns$/i' => '\1m',
'/(.*)res$/i' => '\1r',
),
'uninflected' => $_uninflected,
'irregular' => $_pluralIrregular
));

Inflector::rules('plural', array(
'rules' => array(
'/^(.*)ao$/i' => '\1oes',
'/^(.*)(r|s|z)$/i' => '\1\2es',
'/^(.*)(a|e|o|u)l$/i' => '\1\2is',
'/^(.*)il$/i' => '\1is',
'/^(.*)(m|n)$/i' => '\1ns',
'/^(.*)$/i' => '\1s'
),
'uninflected' => $_uninflected,
'irregular' => $_pluralIrregular
));
