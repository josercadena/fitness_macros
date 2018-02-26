<body>  
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container">
        <a class="navbar-brand" href="#"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="index.php">Home
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-danger" href="#">(Logout)</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Main jumbotron for a primary marketing message or call to action -->
      <div class="jumbotron">
        <div class="container">
          <h1 class="display-3">¡Bienvenido, Carlos!</h1>
          <p>Aquí podrás gestionar crear, ver, actualizar y eliminar los usuarios registrados.</p>
        </div>
      </div>


    <div class="container">
    <div class="row-fluid">
        <h2>Usuarios</h2>
        <hr>
        <div class="col">
            <p>¿El usuario que buscas aún no está registrado?</p>
            <p><a class="btn btn-success" href="<?php echo site_url('dashboard/new_user'); ?>"> Nuevo Usuario &raquo;</a></p>
    </div>  
    </div>

    <div class="container">
    <div class="row-fluid">
    <div class="table-scroll">  
    <hr>
  
    <div class="table-responsive-sm"> 
        <table class="table table-bordered table-hover table-striped">  
        <thead>  
            <tr>  
                <th scope="col">Identificación</th>  
                <th scope="col">Nombres</th>  
                <th scope="col">Género</th>  
                <th scope="col">Acción</th>  
            </tr>  
        </thead>  
      
        <?php  
            foreach($all_users as $user) //while look to fetch the result and store in a array $row.  
            {   $id=$user->id_user;
                $type_identification=$user->type_identification;
                $user_identification=$user->identification;  
                $user_names=$user->names;  
                $user_last_names=$user->last_names;  
                $user_gender=$user->gender;
        ?>  
      
        <tr>  
            <!--here showing results in the table -->  
                <td><?php echo $type_identification . " " . $user_identification;  ?></td>  

                <td><?php echo ucwords( strtolower($user_names . " " . $user_last_names));?></td>  
                <td><?php echo ucwords( strtolower($user_gender));  ?></td>  
                <td>
                <a href="read_user.php?id=<?php echo $id ?>"><button class="btn btn-success">Ver</button></a> 
                <a href="update_user.php?id=<?php echo $id ?>"><button class="btn btn-dark">Editar</button></a>
                <a onClick="return confirm('¿Está completamente seguro que desea eliminar este elemento?')" href="delete_user.php?id=<?php echo $id ?>"><button class="btn btn-danger">Eliminar</button></a></td>
        </tr>  
      
        <?php } ?>  
      
        </table>  
    </div>  
    </div>  
    </div>
    </div>

</body>  
</html>  

<?php    
// include("resources/database/database_connect.php");  
// if(isset($_POST['nuevo_estudiante']))  
// {  
//     $usuario_id=$_POST['id'];
//     $usuario_nombres=$_POST['nombres']; 
//     $usuario_apellidos=$_POST['apellidos']; 
//     $usuario_genero=$_POST['genero']; 
  
//     // Already registered?
//     $check_username_query="select * from students WHERE identificacion='$usuario_id'";  
//     $run_query=mysqli_query($dbcon,$check_username_query);  
  
//     if(mysqli_num_rows($run_query)>0)  
//     {  
//         echo "<script>alert('Estudiante ya está registrado. Intente uno nuevo.')</script>";  
//         exit();  
//     }  

//     // Sino, insert to database  
//     $insert_user="insert into students (identificacion, nombres, apellidos, genero) VALUE ('$usuario_id', '$usuario_nombres','$usuario_apellidos','$usuario_genero')";  
//     if(mysqli_query($dbcon,$insert_user))  
//     {  
//         echo"<script>window.open('main.php','_self')</script>";  
//     }  
  
// }  
  
?>  