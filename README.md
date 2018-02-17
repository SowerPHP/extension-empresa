SowerPHP: extensión empresa (Chile)
===================================

[![Dependency Status](https://www.versioneye.com/user/projects/56b439c60a0ff5003b9750ab/badge.svg)](https://www.versioneye.com/user/projects/56b439c60a0ff5003b9750ab)
[![License](https://poser.pugx.org/sowerphp/empresa/license)](https://packagist.org/packages/sowerphp/empresa)

**Módulo obsoleto**: existe sólo por compatibilidad con aplicaciones antiguas
que lo usan. No debiese ser usado en la actualidad.

Extensión con funcionalidades para empresas chilenas.

La extensión requiere que previamente se haya cargado la extensión app y
general, ya que son utilizadas por esta. Por lo cual verificar que el archivo
*webroot/index.php* al menos contenga en la definición de extensiones:

        $_EXTENSIONS = [
            'sowerphp/empresa', 'sowerphp/app', 'sowerphp/general'
        ];

Puedes ver la documentación de la extensión en el
[Wiki de SowerPHP](http://wiki.sowerphp.org/doku.php/extensions/empresa)
