<h1 class="page-header">Tabla mascota</h1>


<div class="well well-sm text-right">
    <a class="btn btn-primary" href="?c=mascota&a=Crud">Agregar mascota</a>
</div>

<table class="table table-striped">
    <thead>
        <tr>
            <th >idmascota</th>
            <th>nombre</th>
            <th>especie</th>
            <th >raza</th>
            <th >fecha_de_nacimiento</th>
            <th >color</th>
            <th >tamaño</th>
            <th ></th>
            <th ></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach($this->model->Listar() as $r): ?>
        <tr>
            <td><?php echo $r->idmascota; ?></td>
            <td><?php echo $r->nombre; ?></td>
            <td><?php echo $r->especie; ?></td>
            <td><?php echo $r->raza; ?></td>
            <td><?php echo $r->fecha_de_nacimiento; ?></td>
            <td><?php echo $r->color; ?></td>
            <td><?php echo $r->tamaño; ?></td>
            <td>
                <i class="glyphicon glyphicon-edit"><a href="?c=mascota&a=Crud&idmascota=<?php echo $r->idmascota; ?>"> Editar</a></i>
            </td>
            <td>
                <i class="glyphicon glyphicon-remove"><a href="?c=mascota&a=Eliminar&idmascota=<?php echo $r->idmascota; ?>"> Eliminar</a></i>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table> 
