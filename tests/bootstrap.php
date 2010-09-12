<?php
/*
 * This file is part of the Starlight framework.
 *
 * (c) Matthew Vince <matthew.vince@phaseshiftllc.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */
 
if (file_exists($file = __DIR__ . '/../autoload.php')) {
   require_once $file;
} elseif (file_exists($file = __DIR__ . '/../autoload.php.dist')) {
   require_once $file;
}