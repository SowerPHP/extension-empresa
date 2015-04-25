<h1><?=$accion?> <?=$model?></h1>
<script type="text/javascript">
$(function() {
    var url = document.location.toString();
    if (url.match('#')) {
        $('.nav-tabs a[href=#'+url.split('#')[1]+']').tab('show') ;
    }
});
</script>

<div class="row">
    <div class="col-md-10">

<?php
// crear formulario
$form = new \sowerphp\general\View_Helper_Form();
echo $form->begin(array('onsubmit'=>'Form.check()'));
?>

        <div role="tabpanel">
            <ul class="nav nav-tabs" role="tablist">
                <li role="presentation" class="active"><a href="#personales" aria-controls="personales" role="tab" data-toggle="tab">Datos personales</a></li>
                <li role="presentation"><a href="#empresariales" aria-controls="empresariales" role="tab" data-toggle="tab">Datos empresariales</a></li>
                <li role="presentation"><a href="#previsionales" aria-controls="previsionales" role="tab" data-toggle="tab">Datos previsionales</a></li>
            </ul>
            <div class="tab-content">

<!-- INICIO DATOS PERSONALES -->
<div role="tabpanel" class="tab-pane active" id="personales">
<?php
echo $form->input(['name'=>'run', 'label'=>'RUN', 'value'=>isset($Obj)?$Obj->run:'', 'check'=>'notempty', 'help'=>$columns['run']['comment']]);
echo $form->input(['name'=>'dv', 'label'=>'DV', 'value'=>isset($Obj)?$Obj->dv:'', 'check'=>'notempty', 'help'=>$columns['dv']['comment']]);
echo $form->input(['type'=>'select', 'name'=>'sexo', 'label'=>'Sexo', 'options'=>['m'=>'Masculino', 'f'=>'Femenino'], 'value'=>isset($Obj)?$Obj->sexo:'', 'check'=>'notempty']);
echo $form->input(['name'=>'nombres', 'label'=>'Nombres', 'value'=>isset($Obj)?$Obj->nombres:'', 'check'=>'notempty', 'help'=>$columns['nombres']['comment']]);
echo $form->input(['name'=>'apellidos', 'label'=>'Apellidos', 'value'=>isset($Obj)?$Obj->apellidos:'', 'check'=>'notempty', 'help'=>$columns['apellidos']['comment']]);
echo $form->input(['name'=>'telefono', 'label'=>'Teléfono', 'value'=>isset($Obj)?$Obj->telefono:'','check'=>'telephone', 'help'=>$columns['telefono']['comment']]);
echo $form->input(['type'=>'date', 'name'=>'fecha_nacimiento', 'label'=>'Fecha de nacimiento', 'value'=>isset($Obj)?$Obj->fecha_nacimiento:'', 'check'=>'date', 'help'=>$columns['fecha_nacimiento']['comment']]);
echo $form->input(['type'=>'file', 'name'=>'foto', 'label'=>'Fotografía', 'help'=>$columns['foto_name']['comment']]);
?>
</div>
<!-- FIN DATOS PERSONALES -->

<!-- INICIO DATOS EMPRESARIALES -->
<div role="tabpanel" class="tab-pane" id="empresariales">
<?php
$contrato_tipos = [''=>'Sin contrato'] + (new \sowerphp\empresa\Rrhh\Admin\Model_ContratoTipos())->getList();
$sucursales = [''=>'Sin sucursal asignada'] + (new \sowerphp\empresa\Sistema\Empresa\Model_Sucursales())->getList();
$cargos = [''=>'Sin cargo asignado'] + (new \sowerphp\empresa\Rrhh\Admin\Model_Cargos())->getList();
$usuarios = [''=>'Sin usuario en el sistema'] + (new \sowerphp\app\Sistema\Usuarios\Model_Usuarios())->getList();
echo $form->input(['type'=>'select', 'name'=>'activo', 'label'=>'Activo', 'options'=>[1=>'Si', 0=>'No'], 'value'=>isset($Obj)?$Obj->activo:'', 'help'=>$columns['activo']['comment']]);
echo $form->input(['name'=>'sueldo', 'label'=>'Sueldo', 'value'=>isset($Obj)?$Obj->sueldo:'', 'check'=>'integer', 'help'=>$columns['sueldo']['comment']]);
echo $form->input(['type'=>'select', 'name'=>'contrato_tipo', 'label'=>'Tipo contrato', 'options'=>$contrato_tipos, 'value'=>isset($Obj)?$Obj->contrato_tipo:'', 'help'=>$columns['contrato_tipo']['comment']]);
echo $form->input(['type'=>'date', 'name'=>'fecha_ingreso', 'label'=>'Fecha de ingreso', 'value'=>isset($Obj)?$Obj->fecha_ingreso:'', 'check'=>'date', 'help'=>$columns['fecha_ingreso']['comment']]);
echo $form->input(['type'=>'date', 'name'=>'fecha_egreso', 'label'=>'Fecha de egreso', 'value'=>isset($Obj)?$Obj->fecha_egreso:'', 'check'=>'date', 'help'=>$columns['fecha_egreso']['comment']]);
echo $form->input(['type'=>'select', 'name'=>'sucursal', 'label'=>'Sucursal', 'options'=>$sucursales, 'value'=>isset($Obj)?$Obj->sucursal:'', 'help'=>$columns['sucursal']['comment']]);
echo $form->input(['type'=>'select', 'name'=>'cargo', 'label'=>'Cargo', 'options'=>$cargos, 'value'=>isset($Obj)?$Obj->cargo:'', 'help'=>$columns['cargo']['comment']]);
echo $form->input(['type'=>'select', 'name'=>'usuario', 'label'=>'Usuario', 'options'=>$usuarios, 'value'=>isset($Obj)?$Obj->usuario:'', 'help'=>$columns['usuario']['comment']]);
?>
</div>
<!-- FIN DATOS EMPRESARIALES -->

<!-- INICIO DATOS EMPRESARIALES -->
<div role="tabpanel" class="tab-pane" id="previsionales">
<?php
$afps = [''=>'Sin afiliación a AFP'] + (new \sowerphp\empresa\Rrhh\Admin\Model_Afps())->getList();
$saludes = [''=>'Sin previsión de salud'] + (new \sowerphp\empresa\Rrhh\Admin\Model_Saludes())->getList();
echo $form->input(['type'=>'select', 'name'=>'afp', 'label'=>'AFP', 'options'=>$afps, 'value'=>isset($Obj)?$Obj->afp:'', 'help'=>$columns['afp']['comment']]);
echo $form->input(['type'=>'select', 'name'=>'salud', 'label'=>'Salud', 'options'=>$saludes, 'value'=>isset($Obj)?$Obj->salud:'', 'help'=>$columns['salud']['comment']]);
?>
</div>
<!-- FIN DATOS EMPRESARIALES -->

            </div>
        </div>
        <?=$form->end('Guardar')?>
    </div>
    <div class="col-md-2" style="text-align: center">
<?php if (isset($Obj)) : ?>
        <img src="<?=$_base?>/rrhh/empleados/d/foto/<?=$Obj->run?>" alt="" />
        <br /><br /><br />
        <a href="<?=$_base?>/rrhh/empleados/credencial/<?=$Obj->run?>" target="_blank">Credencial del empleado</a>
        <br /><br /><br />
        <a href="<?=$_base?>/rrhh/empleados/ficha/<?=$Obj->run?>" target="_blank">Ficha del empleado</a>
<?php else : ?>
        <img src="<?=$_base?>/rrhh/img/icons/100x100/empleado.png" alt="" />
<?php endif; ?>
    </div>
</div>

<div style="float:left;color:red">* campo es obligatorio</div>
<div style="float:right;margin-bottom:1em;font-size:0.8em">
    <a href="<?=$_base.$listarUrl?>">Volver al listado de registros</a>
</div>
