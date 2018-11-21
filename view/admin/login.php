<div class="row">
    <div class="col s12 m4">
    </div>
    <div class="col s12 m4 card">
        <form action="editlogin" method="post">
              <div class="row">
                 <center> <header>
                     <h4>Bienvenido</h4>
                     </header></center><hr>
                <div class="input-field col s12 m12">
                  <i class="material-icons prefix <?php echo $color; ?>-text darken-4">email</i>
                  <input id="icon_prefix" type="text" class="validate" name="user">
                  <label for="icon_prefix">Usuario</label>
                </div>
                <div class="input-field col s12 m12">
                  <i class="material-icons prefix <?php echo $color; ?>-text darken-4">https</i>
                  <input id="icon_telephone" type="password" class="validate" name="pass">
                  <label for="icon_telephone">Contraseña</label>
                </div>
              </div>
            <center><button class="btn <?php echo $color; ?> darken-3" type="submit">Ingresar</button></center><br>
            </form>
    </div>
    <div class="col s12 m4">
    </div>
</div>
