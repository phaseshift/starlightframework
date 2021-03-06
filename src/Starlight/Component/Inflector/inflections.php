<?php
/*
 * This file is part of the Starlight framework.
 *
 * (c) Matthew Vince <matthew.vince@phaseshiftllc.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Starlight\Component\Inflector;


Inflector::plural('/$/', 's');
Inflector::plural('/s$/i', 's');
Inflector::plural('/(ax|test)is$/i', '\1es');
Inflector::plural('/(octop|vir)us$/i', '\1i');
Inflector::plural('/(alias|status)$/i', '\1es');
Inflector::plural('/(bu)s$/i', '\1ses');
Inflector::plural('/(buffal|tomat)o$/i', '\1oes');
Inflector::plural('/([ti])um$/i', '\1a');
Inflector::plural('/sis$/i', 'ses');
Inflector::plural('/(?:([^f])fe|([lr])f)$/i', '\1\2ves');
Inflector::plural('/(hive)$/i', '\1s');
Inflector::plural('/([^aeiouy]|qu)y$/i', '\1ies');
Inflector::plural('/(x|ch|ss|sh)$/i', '\1es');
Inflector::plural('/(matr|vert|ind)(?:ix|ex)$/i', '\1ices');
Inflector::plural('/([m|l])ouse$/i', '\1ice');
Inflector::plural('/^(ox)$/i', '\1en');
Inflector::plural('/(quiz)$/i', '\1zes');

Inflector::singular('/s$/i', '');
Inflector::singular('/(n)ews$/i', '\1ews');
Inflector::singular('/([ti])a$/i', '\1um');
Inflector::singular('/((a)naly|(b)a|(d)iagno|(p)arenthe|(p)rogno|(s)ynop|(t)he)ses$/i', '\1\2sis');
Inflector::singular('/(^analy)ses$/i', '\1sis');
Inflector::singular('/([^f])ves$/i', '\1fe');
Inflector::singular('/(hive)s$/i', '\1');
Inflector::singular('/(tive)s$/i', '\1');
Inflector::singular('/([lr])ves$/i', '\1f');
Inflector::singular('/([^aeiouy]|qu)ies$/i', '\1y');
Inflector::singular('/(s)eries$/i', '\1eries');
Inflector::singular('/(m)ovies$/i', '\1ovie');
Inflector::singular('/(x|ch|ss|sh)es$/i', '\1');
Inflector::singular('/([m|l])ice$/i', '\1ouse');
Inflector::singular('/(bus)es$/i', '\1');
Inflector::singular('/(o)es$/i', '\1');
Inflector::singular('/(shoe)s$/i', '\1');
Inflector::singular('/(cris|ax|test)es$/i', '\1is');
Inflector::singular('/(octop|vir)i$/i', '\1us');
Inflector::singular('/(alias|status)es$/i', '\1');
Inflector::singular('/^(ox)en/i', '\1');
Inflector::singular('/(vert|ind)ices$/i', '\1ex');
Inflector::singular('/(matr)ices$/i', '\1ix');
Inflector::singular('/(quiz)zes$/i', '\1');
Inflector::singular('/(database)s$/i', '\1');

Inflector::irregular('person', 'people');
Inflector::irregular('man', 'men');
Inflector::irregular('child', 'children');
Inflector::irregular('sex', 'sexes');
Inflector::irregular('move', 'moves');
Inflector::irregular('cow', 'cattle');

Inflector::uncountable(array('equipment', 'information', 'rice', 'money', 'species', 'series', 'fish', 'sheep', 'jeans'));
