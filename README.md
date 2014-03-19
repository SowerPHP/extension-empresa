Extensión: empresa (Chile)
==========================

Extensión con funcionalidades para empresas (diseñada para empresas chilenas).

La extensión requiere que previamente se haya cargado la extensión app y
general, ya que son utilizadas por esta. Por lo cual verificar que el archivo
*webroot/index.php* al menos contenga en la definición de extensiones:

	$_EXTENSIONS = array(
            'SowerPHP/empresa', 'SowerPHP/app', 'SowerPHP/general'
        );
