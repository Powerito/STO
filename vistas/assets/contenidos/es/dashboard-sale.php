<?php
    include "./vistas/inc/admin_security.php";
?>

<div class="full-box page-header">
    <h3 class="text-start roboto-condensed-regular text-uppercase">
        <i class="fas fa-check-circle fa-fw"></i> &nbsp; Nueva Venta Realizada
    </h3>
</div>

<div class="container-fluid">
    <ul class="nav nav-tabs nav-justified mb-4" role="tablist">
        <li class="nav-item" role="presentation">
            <a class="nav-link active" href="<?php echo SERVERURL.DASHBOARD; ?>/sale-new/" >
                <i class="fas fa-check-circle fa-fw"></i> &nbsp; Nueva Venta Realizada
            </a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link" href="<?php echo SERVERURL.DASHBOARD; ?>/sale-list/" >
                <i class="fas fa-clipboard-list fa-fw"></i> &nbsp; Lista de Ventas Realizadas
            </a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link" href="<?php echo SERVERURL.DASHBOARD; ?>/sale-search/" >
                <i class="fas fa-search fa-fw"></i> &nbsp; Buscar Ventas
            </a>
        </li>
    </ul>
</div>

<div class="container-fluid">
    <form class="dashboard-container FormularioAjax" method="POST" data-form="save" data-lang="<?php echo LANG; ?>" autocomplete="off" action="<?php echo SERVERURL;?>ajax/ventaAjax.php">
        <input type="hidden" name="modulo_venta" value="registro">
        <fieldset class="mb-4">
            <legend><i class="fas fa-dollar-sign fa-fw"></i> &nbsp; Información de la Venta Realizada</legend>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 col-md-6">
                        <div class="form-outline mb-4">
                            <input type="text" pattern="[a-zA-Z0-9áéíóúÁÉÍÓÚñÑ ]{4,49}" class="form-control" name="venta_cliente" id="venta_cliente" maxlength="49">
                            <label for="venta_cliente" class="form-label">Nombre del Cliente <?php echo FIELD_OBLIGATORY; ?></label>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="form-outline mb-4">
                            <input type="text" pattern="[0-9]+" class="form-control" name="venta_monto" id="venta_monto">
                            <label for="venta_monto" class="form-label">Monto de la Venta <?php echo FIELD_OBLIGATORY; ?></label>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-outline mb-4">
                            <textarea pattern="[a-zA-Z0-9áéíóúÁÉÍÓÚñÑ().,#\s ]{4,700}" class="form-control" name="venta_descripcion" id="venta_descripcion" maxlength="700" rows="7"></textarea>
                            <label for="venta_descripcion" class="form-label">Descripción de la Venta</label>
                        </div>
                    </div>
                </div>
            </div>
        </fieldset>
        <p class="text-center" style="margin-top: 40px;">
            <button type="submit" class="btn btn-primary"><i class="far fa-save"></i> &nbsp; GUARDAR VENTA</button>
        </p>
        <p class="text-center">
            <small>Los campos marcados con <?php echo FIELD_OBLIGATORY; ?> son obligatorios</small>
        </p>
    </form>
</div>
