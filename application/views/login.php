<style>  
    .login-panel {  
        margin-top: 60%;
        min-width: 150px;
        max-width: 500px;
    }
  
</style>  
  
<body>  

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url(); ?>">Home
              </a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="<?php echo site_url('login'); ?>">WebApp<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo site_url('contact'); ?>">Contacto </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="container">  
        <div class="row">  
            <div class="col"> 
            </div>
            <div class="col"> 
                <div class="login-panel panel panel-success">  
                    <div class="panel-heading">  
                        <h1 class="panel-title">Iniciar Sesión</h3>  
                    </div>  
                    <div class="panel-body">  
                        <?php echo form_open("login/credentials_submitted",'class="form"', 'role="form"'); ?>
                            <fieldset>  
                                <div class="form-group"  >  
                                    <input class="form-control" placeholder="Nombre de usuario" name="admin_username" type="text" autofocu required>  
                                </div>  
                                <div class="form-group">  
                                    <input class="form-control" placeholder="Contraseña" name="admin_pass" type="password" value="" required>  
                                </div>  
      
                                <input class="btn btn-success btn-block" type="submit" value="Iniciar Sesión" name="admin_login" >  

                            </fieldset>  
                        <?php echo form_close(); ?>
                        <center><a href="javascript:window.history.go(-1);" class="text-danger font-weight-bold"> Atrás</a></center>  
                    </div>  
                </div>  
            </div>  
            <div class="col">
            </div>
        </div>  
    </div>  
