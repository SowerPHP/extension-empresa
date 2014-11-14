<h1>Próximos cumpleaños</h1>
<?php
$hoy = date('Y-m-d');
foreach ($cumpleanios as &$c) {
    $cumpleanio = \sowerphp\general\Utility_Date::timestamp2string(
        $c['cumpleanio'], false
    );
    if ($c['cumpleanio'] == $hoy) {
        $c['cumpleanio'] = '<div style="color:red">'.$cumpleanio.'</div>';
        $c['nombre'] = '<div style="color:red">'.$c['nombre'].'</div>';
    } else {
        $c['cumpleanio'] = $cumpleanio;
    }
}
array_unshift($cumpleanios, ['Fecha', 'Nombre']);
new \sowerphp\general\View_Helper_Table($cumpleanios, 'cumpleanios', true);
