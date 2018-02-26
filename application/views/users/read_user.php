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
        <h1 class="display-4">Editar Usuario</h1>
    </div>

    
    <h2>Datos Personales</h2>
      <div class="col-md-12">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                <table class="table">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">First</th>
                    <th scope="col">Last</th>
                    <th scope="col">Handle</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    </tr>
                    <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                    </tr>
                    <tr>
                    <th scope="row">3</th>
                    <td>Larry</td>
                    <td>the Bird</td>
                    <td>@twitter</td>
                    </tr>
                </tbody>
                </table>
                </div>
            </div>
            



            <div class="form-group">
                <label>Nombres:</label> <p><?php echo $user->names; ?></p>
            </div>
            <div class="form-group">
                <label>Apellidos*:</label>
                <input id="last_names" name="last_names" type="text" class="form-control" placeholder="Casas Redondo" required="required" value="<?php echo $user->last_names; ?>">
            </div>
            <div class="form-group">
                <label>Género:</label>
                <input id="last_names" name="last_names" type="text" class="form-control" placeholder="Casas Redondo" required="required" value="<?php echo $user->gender; ?>" readonly>
            </div>
      </div>

      <div class="col-md-12">
            <div class ="form-group">
                <label>Tipo de Documento*: </label>
                <select id="type_identification" name="type_identification" class ="form-control" required>
                    <option value="CC">Cédula de Ciudadanía</option>
                    <option value="TI">Tarjeta de Identidad</option>
                    <option value="Otro">Otro</option>
                </select>
            </div>
            <div class="form-group">
                <label>Número de Documento*:</label>
                <input id="identification" name="identification" type="text" class="form-control" placeholder="123456789" required="required" value="<?php echo $user->identification; ?>">
            </div>
            
            <div class="form-group">
                <label>Fecha de Nacimiento*:</label>
                <input id="date_birth" name="date_birth" type="text" class="form-control"  autocomplete="off" required="required" readonly value="<?php echo $user->date_birth; ?>">
            </div>
          
      </div>

      <div class="col-md-12">
            <div class="form-group">
                <label>Ocupación:</label>
                <input id="occupation" name="occupation" type="text" class="form-control" placeholder="Administrador" autocomplete="off" value="<?php echo $user->occupation; ?>">
            </div>

            <div class="form-group">
                <label>E-mail:</label>
                <input id="email" name="email" type="email" class="form-control" placeholder="yo@email.com" value="<?php echo $user->email; ?>">
            </div>

            <div class="form-group">
                <label>Teléfono:</label>
                <input id="phone" name="phone" type="text" class="form-control" placeholder="" value="<?php echo $user->phone; ?>">
            </div>
      </div>

      <div class="col-md-12">
          <div class="form-group">
                <label>Notas:</label>
                <textarea id="notes" name="notes" type="textarea" class="form-control" placeholder="- No puede esforzar las rodillas por lesión &#10;- Dieta vegana" value="<?php echo $user->notes; ?>"></textarea>
          </div>
      </div>

      <hr>

      <h2>Encuesta de Registro</h2>
        <div class="col-md-12">

        <div class="form-group">
            <label>1. ¿Qué tipo de ejercicio realizas actualmente?</label>
            <select id="fitness_index" name="fitness_index" class ="form-control" required>
                    <option value="1">Poco/ningún tipo de actividad física</option>
                    <option value="2">Ejercicio ligero (1 - 3 veces por semana)</option>
                    <option value="3">Ejercicio moderado (3 - 5 veces por semana)</option>
                    <option value="4">Ejercicio intenso (6 a 7 veces por semana)</option>
                    <option value="5">Ejercicio muy intenso (2 veces al día)</option>

            </select>
        </div>

        <div class="form-group">
            <label>2. ¿Cómo describirías mejor tus metas?</label>
            <select id="protein_index" name="protein_index" class ="form-control" required>
                    <option value="1">Adulto sedentario, poco/ningún ejercicio</option>
                    <option value="2">Realiza algún tipo de ejercicio o intenta mejorar su apariencia/salud</option>
                    <option value="3">Trata de tonificar, perder grasa, incrementar fuerza</option>
                    <option value="4">Trata de tonificar, perder grasa, incrementar fuerza y mejorar rendimiento deportivo</option>
            </select>
        </div>

        <div class="form-group">
            <label>3. ¿Con qué intensidad planeas trabajar?</label>
            <select id="fat_index" name="fat_index" class ="form-control" required>
                    <option value="1">Corto plazo: preparación para concurso o sesión fotográfica</option>
                    <option value="2">Mediano plazo, deficit moderado</option>
                    <option value="3">Largo plazo, moderado, cambio de estilo de vida</option>
            </select>
        </div>

        </div>

      <div class="col">
      </div>

    <?php echo form_close(); ?>
    </div> <!-- / col-md  -->
    </div> <!-- / container  -->
 
