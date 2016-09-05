<?php

/**
 * @file
 * Configuration file for Drupal's multi-site directory aliasing feature.
 *
 * This file allows you to define a set of aliases that map hostnames, ports, and
 * pathnames to configuration directories in the sites directory. These aliases
 * are loaded prior to scanning for directories, and they are exempt from the
 * normal discovery rules. See default.settings.php to view how Drupal discovers
 * the configuration directory when no alias is found.
 *
 * Aliases are useful on development servers, where the domain name may not be
 * the same as the domain of the live server. Since Drupal stores file paths in
 * the database (files, system table, etc.) this will ensure the paths are
 * correct when the site is deployed to a live server.
 *
 * To use this file, copy and rename it such that its path plus filename is
 * 'sites/sites.php'. If you don't need to use multi-site directory aliasing,
 * then you can safely ignore this file, and Drupal will ignore it too.
 *
 * Aliases are defined in an associative array named $sites. The array is
 * written in the format: '<port>.<domain>.<path>' => 'directory'. As an
 * example, to map http://www.drupal.org:8080/mysite/test to the configuration
 * directory sites/example.com, the array should be defined as:
 * @code
 * $sites = array(
 *   '8080.www.drupal.org.mysite.test' => 'example.com',
 * );
 * @endcode
 * The URL, http://www.drupal.org:8080/mysite/test/, could be a symbolic link or
 * an Apache Alias directive that points to the Drupal root containing
 * index.php. An alias could also be created for a subdomain. See the
 * @link http://drupal.org/documentation/install online Drupal installation guide @endlink
 * for more information on setting up domains, subdomains, and subdirectories.
 *
 * The following examples look for a site configuration in sites/example.com:
 * @code
 * URL: http://dev.drupal.org
 * $sites['dev.drupal.org'] = 'example.com';
 *
 * URL: http://localhost/example
 * $sites['localhost.example'] = 'example.com';
 *
 * URL: http://localhost:8080/example
 * $sites['8080.localhost.example'] = 'example.com';
 *
 * URL: http://www.drupal.org:8080/mysite/test/
 * $sites['8080.www.drupal.org.mysite.test'] = 'example.com';
 * @endcode
 *
 * @see default.settings.php
 * @see conf_path()
 * @see http://drupal.org/documentation/install/multi-site
 */


<div class="row">
<div class="col-sm-6 col-md-3">
<h3>Asistencia<br />
Legal</h3>

<p>Ofrecemos un sistema de asistencia legal siempre que usted lo necesite.</p>

<p><a class="btn btn-action" href="">Leer Más</a></p>
</div>

<div class="col-sm-6 col-md-3">
<h3>Formación<br />
Profesional</h3>

<p>A nivel de formación estudiantil, el Escritorio Jurídico RM &amp; Asociados ofrece cursos para profesionales del derecho. Tales como:</p>

<ul>
  <li>Asistente jurídico</li>
  <li>Asistente tributario</li>
  <li>Administración aduanera</li>
  <li>Oratoria</li>
  <li>Ortografía y redacción</li>
</ul>

<p>&nbsp;</p>

<p><a class="btn btn-action" href="">Leer Más</a></p>
</div>

<div class="col-sm-6 col-md-3">
<h3>Áreas de<br />
Especialización</h3>

<p>Los abogados que integran el despacho RM &amp; Asociados se especializan en derecho Civil, Mercantil y Lopnna.</p>

<p><a class="btn btn-action" href="">Leer Más</a></p>
</div>

<div class="col-sm-6 col-md-3">
<h3>Asesoramiento<br />
Online</h3>

<p>Si por motivos personales no puede dirigirse a nuestro lugar de trabajo, le brindamos asesoramiento en línea de forma rápida y eficaz.</p>

<p><a class="btn btn-action" href="">Contácto</a></p>
</div>
</div>
