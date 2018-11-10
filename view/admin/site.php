<div class="row">
      <div class="col s12 m4">
      </div>
      <div class="col s12 m4 card">
          <form action="?c=admin&a=editLogin" method="post">
                <div class="row">
                   <center> <header>
                       <h4>Cambio de Usuario y Contraseña</h4>
                       </header></center><hr>
                  <div class="input-field col s12 m12">
                    <i class="material-icons prefix <?php echo $color; ?>-text darken-4">email</i>
                    <input id="user" type="text" class="validate" name="user">
                    <label for="user">Usuario</label>
                  </div>
                  <div class="input-field col s12 m12">
                    <i class="material-icons prefix <?php echo $color; ?>-text darken-4">https</i>
                    <input id="pass" type="password" class="validate" name="pass">
                    <label for="pass">Contraseña</label>
                  </div>
                </div>
              <center><button class="btn <?php echo $color; ?> darken-3" type="submit">Ingresar</button></center><br>
              </form>
      </div>
      <div class="col s12 m4">
      </div>
  </div>
