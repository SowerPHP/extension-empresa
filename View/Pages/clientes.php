<h1>Clientes</h1>
<?php
if (file_exists(DIR_PROJECT.'/data/clientes.php')) {
    include DIR_PROJECT.'/data/clientes.php';
    if (defined('CLIENTES_BOX_ANIMATED') and CLIENTES_BOX_ANIMATED) {
        \sowerphp\general\View_Helper_HTML::boxAnimated (
            $clientes, $_base.'/img/pages/clientes', 'Solución entregada:'
        );
    } else {
        if (!defined('CLIENTES_COLUMNAS'))
            define('CLIENTES_COLUMNAS', 4);
        $grid_cols = 12 / CLIENTES_COLUMNAS;
        $i = 0;
        echo '<div class="row">';
        foreach ($clientes as $cliente => &$info) {
            if ($i++%CLIENTES_COLUMNAS==0) {
                echo '</div><div class="row">';
            }
            echo '<div class="col-md-',$grid_cols,'">';
            echo '<div class="thumbnail">';
            echo '<img src="',$_base.'/img/pages/clientes/',$info['imag'],'" alt="Logo ',$cliente,'">';
            echo '<div class="caption">';
            echo '<p>',$info['desc'],'</p>';
            echo '<p><a href="#" tabindex="0" class="btn btn-primary" role="button" data-toggle="popover" data-trigger="focus" title="',$cliente,'" data-placement="top" data-content="',implode('. ', $info['info']),'" onclick="return false" onmouseover="$(this).popover(\'show\')" onmouseout="$(this).popover(\'hide\')">servicios prestados &raquo;</a></p>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
        }
        echo '</div>',"\n";
?>
<script type="text/javascript">
$(document).ready(function(){
    $('[data-toggle="popover"]').popover();
});
</script>
<?php
    }
} else {
    echo '<p>No existen datos de clientes disponibles.</p>';
}
