<body>  
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
      <div class="container">
        <a class="navbar-brand" href="#"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="<?php echo site_url('dashboard'); ?>">Home
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

    <div class="container">
    <div class ="col-md-6 offset-md-3">

    <div class="py-3">
        <p><a href="javascript:window.history.go(-1); "> <button class="btn ">Atrás</button></a></p>
        <h1 class="display-4">Ver Usuario</h1>
    </div>

    
    <h2>Datos Personales</h2>
      <div class="">
            <div class="" >
                <div class="">
                <table class="table table-hover table-bordered">
                <tbody>
                    <tr>
                    <th scope="row">Nombre</th>
                    <td><?php echo $user->names . " " . $user->last_names; ?></td>
                    </tr>
                    <tr>
                    <th scope="row">Identificación</th>
                    <td><?php echo $user->type_identification . ". " . $user->identification; ?></td>
                    </tr>
                    <tr>
                    <th scope="row">Genero</th>
                    <td><?php echo $user->gender; ?></td>
                    </tr>
                    <tr>
                    <th scope="row">Fecha de Nacimiento</th>
                    <td><?php echo $user->date_birth; ?></td>
                    </tr>
                    <tr>
                    <th scope="row">Email</th>
                    <td><?php echo $user->email; ?></td>
                    </tr>
                    <tr>
                    <th scope="row">Teléfono</th>
                    <td><?php echo $user->phone; ?></td>
                    </tr>
                    <tr>
                    <th scope="row">Ocupación</th>
                    <td><?php echo $user->occupation; ?></td>
                    </tr>
                    <tr>
                    <th scope="row">Notas</th>
                    <td><?php echo $user->notes; ?></td>
                    </tr>
                </tbody>
                </table>
                </div>
            </div>
        </div>
        
<!-- Continues in read_user_controls.php -->
 
