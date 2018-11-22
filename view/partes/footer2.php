
    <footer class="page-footer <?php echo $color; ?> darken-2">
      <div class="container">
        <div class="row">
          <div class="col s12 m3">

          </div>
          <div class="col s12 m9">
            <h5 class="white-text titulo">CONTÁCTENOS</h5>
            <div class="row">
              <form class="col s12 m6 card">
                <div class="row">
                  <div class="input-field col s11">
                    <i class="material-icons prefix <?php echo $color; ?>-text darken-4">email</i>
                    <input id="email" type="email" class="validate">
                    <label for="email">Correo</label>
                  </div>
                  <div class="input-field col s11">
                    <i class="material-icons prefix <?php echo $color; ?>-text darken-4">chat</i>
                    <textarea id="textarea2" class="materialize-textarea" data-length="120"></textarea>
                    <label for="textarea2">Mensaje</label>
                  </div>
                </div>
                <center><button type="button" name="button" class="btn <?php echo $color; ?> darken-1" style="margin-bottom:10px;">Enviar</button></center>
              </form>
              <center>
              <div class="col s12 m6">
                <h5 class="white-text">REDES SOCIALES</h5>
                  <a href="" target="_blank"><img src="<?php echo $imagenes;?>f.png" class="responsive-img circle"width="30px"></a>
                  <a href="" target="_blank"><img src="<?php echo $imagenes;?>t.png" class="responsive-img circle"width="30px"></a>
                  <a href="" target="_blank"><img src="<?php echo $imagenes;?>g.png" class="responsive-img circle"width="30px"></a>
                  <a href="" target="_blank"><img src="<?php echo $imagenes;?>y.png" class="responsive-img circle"width="30px"></a>
                  <a href="" target="_blank"><img src="<?php echo $imagenes;?>w.png" class="responsive-img circle"width="30px"></a>
              </div>
              <div class="col s12 m6">
                <h5 class="white-text">Patrocinadores</h5>
                <a href="https://www.facebook.com/EventosEspecialesSM/" target="_blank"><img src="<?php echo $imagenes;?>patrocinador1.jpg" class="responsive-img circle" width="50px"></a>
                <img src="<?php echo $imagenes;?>patrocinador2.png" class="responsive-img circle"  width="50px">
              </div>
            </center>
            </div>
          </div>
        </div>
      </div>
      <div class="footer-copyright">
                <a class="grey-text text-lighten-4 right" href="#!">© 2018 Copyright Octavio Vasquez<a>
      </div>
    </footer>
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.7.4/angular.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
<script src="<?php echo $js;?>css.js"></script>
<script src="<?php echo $js;?>angular-soundmanager2.min.js"></script>
<script src="<?php echo $js;?>audio.js"></script>
<script src="<?php echo $js;?>app.js"></script>
</body>
</html>
