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
        <h1 class="display-4">Nuevo Usuario</h1>
    </div>

    
    <?php echo form_open("dashboard/new_user",'class="form"', 'name="form"'); ?>
    <h2>Datos Personales</h2>
      <div class="col-md-12">
            <div class="form-group">
                <label>Nombres*:</label>
                <input id="names" name="names" type="text" class="form-control" placeholder="Armando Jr. " required="required">
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput">Apellidos*:</label>
                <input id="last_names" name="last_names" type="text" class="form-control" placeholder="Casas Redondo" required="required">
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput">Género:</label>
                
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="gender" id="gridRadios1" value="masculino" checked>
                  <label class="form-check-label" for="gridRadios1">
                    Masculino
                  </label>
                </div>

                <div class="form-check">
                  <input class="form-check-input" type="radio" name="gender" id="gridRadios2" value="femenino">
                  <label class="form-check-label" for="gridRadios2">
                    Femenino
                  </label>
                </div>

            
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
                <input id="identification" name="identification" type="text" class="form-control" placeholder="123456789" required="required">
            </div>
            
            <div class="form-group">
                <label>Fecha de Nacimiento*:</label>
                <input id="date_birth" name="date_birth" type="text" class="form-control"  autocomplete="off" required="required" readonly>
            </div>
          
      </div>

      <div class="col-md-12">
            <div class="form-group">
                <label>Ocupación:</label>
                <input id="occupation" name="occupation" type="text" class="form-control" placeholder="Administrador" autocomplete="off" >
            </div>

            <div class="form-group">
                <label>E-mail:</label>
                <input id="email" name="email" type="email" class="form-control" placeholder="yo@email.com">
            </div>

            <div class="form-group">
                <label>Teléfono:</label>
                <input id="phone" name="phone" type="text" class="form-control" placeholder="">
            </div>
      </div>

      <div class="col-md-12">
          <div class="form-group">
                <label>Notas:</label>
                <textarea id="notes" name="notes" type="textarea" class="form-control" placeholder="- No puede esforzar las rodillas por lesión &#10;- Dieta vegana"></textarea>
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
        <button type="submit" name="new_user" class="btn btn-success mb-2 btn-block">Agregar Nuevo Usuario</button>
      </div>

    <?php echo form_close(); ?>
    </div> <!-- / col-md  -->
    </div> <!-- / container  -->
 
