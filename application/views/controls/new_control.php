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
    <div class ="col-md-8 offset-md-2">

    <div class="py-3">
        <p><a href="javascript:window.history.go(-1); "> <button class="btn ">Atrás</button></a></p>
        <h1 class="display-4">Nuevo Control</h1>
    </div>

    
    <?php echo form_open("controls/new_control/".$id_user."",'class="form"', 'name="form"'); ?>
    <h2>Medidas</h2>
    <div class="row form-group">
            <div class="col-md-3">
                <label>Peso (kg)*:</label>
                <input id="peso" name="peso" type="text" class="form-control form-control-sm" placeholder=" 75 ">
            </div>

            <div class="col-md-3">
                <label>Altura (cms)*:</label>
                <input id="altura" name="altura" type="text" class="form-control form-control-sm" placeholder="175" >
            </div>

            <div class="col-md-3">
                <label>Biceps (cms)*:</label>
                <input id="m_biceps" name="m_biceps" type="text" class="form-control form-control-sm" placeholder="30">
            </div>

            <div class="col-md-3">
                <label>Pecho (cms)*:</label>
                <input id="m_pecho" name="m_pecho" type="text" class="form-control form-control-sm" placeholder="110">
            </div>
    </div>
    <div class="row form-group">
            <div class="col-md-3">
                <label>Cintura (cms)*:</label>
                <input id="m_cintura" name="m_cintura" type="text" class="form-control form-control-sm" placeholder="95">
            </div>

            <div class="col-md-3">
                <label>Cadera (cms)*:</label>
                <input id="m_cadera" name="m_cadera" type="text" class="form-control form-control-sm" placeholder="100">
            </div>

            <div class="col-md-3">
                <label>Cuadriceps (cms)*:</label>
                <input id="m_cuadriceps" name="m_cuadriceps" type="text" class="form-control form-control-sm" placeholder="70">
            </div>

            <div class="col-md-3">
                <label>Pantorrilla (cms)*:</label>
                <input id="m_pantorrilla" name="m_pantorrilla" type="text" class="form-control form-control-sm" placeholder="50">
            </div>
    </div>

    <hr>

    <h2>Pliegues</h2>
    <div class="row form-group">
            <div class="col-md-3">
                <label>Biceps:</label>
                <input id="p_biceps" name="p_biceps" type="text" class="form-control form-control-sm" placeholder="">
            </div>

            <div class="col-md-3">
                <label>Triceps:</label>
                <input id="p_triceps" name="p_triceps" type="text" class="form-control form-control-sm" placeholder="">
            </div>

            <div class="col-md-3">
                <label>Subescapular:</label>
                <input id="p_subescapular" name="p_subescapular" type="text" class="form-control form-control-sm" placeholder="">
            </div>

            <div class="col-md-3">
                <label>Suprailiaco:</label>
                <input id="p_suprailiaco" name="p_suprailiaco" type="text" class="form-control form-control-sm" placeholder="">
            </div>
           
            <input id="p_pantorrilla" name="p_pantorrilla" type="text" class="form-control form-control-sm" value="0" hidden>
            
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
        <button type="submit" name="new_control" class="btn btn-success mb-2 btn-block">Agregar Nuevo Control</button>
    </div>

    <?php echo form_close(); ?>
    </div> <!-- / col-md  -->
    </div> <!-- / container  -->
 
