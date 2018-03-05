<h2>Controles</h2>

<p><a class="btn btn-success btn-block" href="<?php echo site_url('dashboard/new_user'); ?>"> Nuevo Control &raquo;</a></p>

<?php if (!empty($controls)){?>
<table class="table table-hover table-bordered">
<thead>
    <tr>
    <th scope="col">Fecha</th>
    <th scope="col">Opciones</th>
    </tr>
</thead>
<tbody>
    <?php foreach($controls as $control){?>
        <tr>
        <th scope="row"><?php echo date("Y-M-d ", strtotime($control->date));  ?></th>
        <td>
        <a href="<?php echo site_url("dashboard/read_user/"  ); ?>"><button class="btn btn-success">Ver</button></a> 
        <a href="<?php echo site_url("dashboard/edit_user/" ); ?>"><button class="btn btn-dark">Editar</button></a>
        <a onClick="return confirm('¿Está completamente seguro que desea eliminar este elemento?')" href="delete_user.php?id=<?php echo "" ?>"><button class="btn btn-danger">Eliminar</button></a>
        </td>
        </tr>
    <?php }?>    
</tbody>
</table>
<?php } else {
        echo "<p> No se encontraron controles para este usuario. </p>"; 
}?>
    
</div> <!-- / col-md  -->
</div> <!-- / container  -->