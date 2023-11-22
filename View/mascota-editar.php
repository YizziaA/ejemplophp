<h1 class="page-header">
    <?php echo $alm->idmascota != null ? $alm->nombre : 'Nuevo Registro'; ?>
</h1>

<ol class="breadcrumb">
  <li><a href="?c=mascota">Mascota</a></li>
  <li class="active"><?php echo $alm->idmascota != null ? $alm->nombre : 'Nuevo Registro'; ?></li>
</ol>

<form action="?c=mascota&a=Guardar" method="post" enctype="multipart/form-data">
    <input type="hidden" name="idmascota" value="<?php echo $alm->idmascota; ?>" />
    
    
    <div class="form-group">
        <label>nombre</label>
        <input type="text" name="nombre" value="<?php echo $alm->nombre; ?>" class="form-control" placeholder="Ingrese su nombre" data-validacion-tipo="requerido|min:7" />
    </div>
    

    <div class="form-group">
        <label>fecha_de_nacimiento</label>
        <input type="date" name="fecha_de_nacimiento" value="<?php echo $alm->fecha_de_nacimiento; ?>" class="form-control" placeholder="Ingrese la fecha de nacimiento" data-validacion-tipo="requerido|date" />
    </div>
    
    <div class="form-group">
        <label>raza</label>
        <input type="text" name="raza" value="<?php echo $alm->raza; ?>" class="form-control" placeholder="Ingrese su raza" data-validacion-tipo="requerido|min:8" />
    </div>
    
    <div class="form-group">
        <label>especie</label>
        <input type="text" name="especie" value="<?php echo $alm->especie; ?>" class="form-control" placeholder="Ingrese la especie" data-validacion-tipo="requerido|email" />
    </div>

    <div class="form-group">
        <label>color</label>
        <input type="text" name="color" value="<?php echo $alm->color; ?>" class="form-control" placeholder="Ingrese su color" data-validacion-tipo="requerido|min:8" />
    </div>

    <div class="form-group">
        <label>tamaño</label>
        <input type="text" name="tamaño" value="<?php echo $alm->tamaño; ?>" class="form-control" placeholder="Ingrese su tamaño" data-validacion-tipo="requerido|min:8" />
    </div>
    
    <hr />
    
    <div class="text-right">
        <button class="btn btn-success">Guardar datos</button>
    </div>
</form>

<script>
    $(document).ready(function(){
        $("#frm-alumno").submit(function(){
            return $(this).validate();
        });
    })
</script>
