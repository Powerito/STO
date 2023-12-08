<?php
    include "./vistas/inc/admin_security.php";
?>

<div class="full-box page-header">
    <h3 class="text-start roboto-condensed-regular text-uppercase">
        <i class="fas fa-exclamation-circle fa-fw"></i> &nbsp; Nuevo Pedido Pendiente
    </h3>
</div>

<div class="container-fluid">
    <ul class="nav nav-tabs nav-justified mb-4" role="tablist">
        <li class="nav-item" role="presentation">
            <a class="nav-link active" href="<?php echo SERVERURL.DASHBOARD; ?>/order-new/" >
                <i class="fas fa-exclamation-circle fa-fw"></i> &nbsp; Nuevo Pedido Pendiente
            </a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link" href="<?php echo SERVERURL.DASHBOARD; ?>/order-list/" >
                <i class="fas fa-clipboard-list fa-fw"></i> &nbsp; Lista de Pedidos Pendientes
            </a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link" href="<?php echo SERVERURL.DASHBOARD; ?>/order-search/" >
                <i class="fas fa-search fa-fw"></i> &nbsp; Buscar Pedidos
            </a>
        </li>
    </ul>
</div>

<div class="container-fluid">
    <form class="dashboard-container FormularioAjax" method="POST" data-form="save" data-lang="<?php echo LANG; ?>" autocomplete="off" action="<?php echo SERVERURL;?>ajax/pedidoAjax.php">
        <input type="hidden" name="modulo_pedido" value="registro">
        <fieldset class="mb-4">
            <legend><i class="fas fa-shopping-cart fa-fw"></i> &nbsp; Información del Pedido Pendiente</legend>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 col-md-6">
                        <div class="form-outline mb-4">
                            <input type="text" pattern="[a-zA-Z0-9áéíóúÁÉÍÓÚñÑ ]{4,49}" class="form-control" name="pedido_cliente" id="pedido_cliente" maxlength="49">
                            <label for="pedido_cliente" class="form-label">Nombre del Cliente <?php echo FIELD_OBLIGATORY; ?></label>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="form-outline mb-4">
                            <input type="text" pattern="[0-9]+" class="form-control" name="pedido_monto" id="pedido_monto">
                            <label for="pedido_monto" class="form-label">Monto del Pedido <?php echo FIELD_OBLIGATORY; ?></label>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-outline mb-4">
                            <textarea pattern="[a-zA-Z0-9áéíóúÁÉÍÓÚñÑ().,#\s ]{4,700}" class="form-control" name="pedido_descripcion" id="pedido_descripcion" maxlength="700" rows="7"></textarea>
                            <label for="pedido_descripcion" class="form-label">Descripción del Pedido</label>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="">
                            <select class="form-control" name="pedido_estado" id="pedido_estado">
                                <option value="" selected="" >Estado del Pedido</option>
                                <option value="Pendiente" >Pendiente</option>
                                <option value="En Proceso" >En Proceso</option>
                                <option value="Entregado" >Entregado</option>
                            </select>
                            <label for="pedido_estado" class="form-label"></label>
                        </div>
                    </div>
                </div>
            </div>
        </fieldset>
        <p class="text-center" style="margin-top: 40px;">
            <button type="submit" class="btn btn-primary"><i class="far fa-save"></i> &nbsp; GUARDAR PEDIDO</button>
        </p>
        <p class="text-center">
            <small>Los campos marcados con <?php echo FIELD_OBLIGATORY; ?> son obligatorios</small>
        </p>
    </form>
</div>
