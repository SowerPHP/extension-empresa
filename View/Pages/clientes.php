<h1>Clientes</h1>
<?php
if (file_exists(DIR_PROJECT.'/data/clientes.php')) {
    include DIR_PROJECT.'/data/clientes.php';
    \sowerphp\general\View_Helper_HTML::boxAnimated (
        $clientes, $_base.'/img/pages/clientes', 'Solución entregada:'
    );
} else {
    echo '<p>No existen datos de clientes disponibles.</p>';
}
