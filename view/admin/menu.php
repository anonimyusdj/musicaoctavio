<?php
  session_start();
  if(isset($_SESSION['idSesion'])){
    header("location: login");
  }

?>
<nav>
   <div class="nav-wrapper <?php echo $color; ?> darken-3">
     <a href="#" class="brand-logo right">Logo</a>
     <a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons">menu</i></a>
   </div>
 </nav>

<ul id="slide-out" class="side-nav fixed" style="max-width:200px;">
  <li><div class="user-view">
      <div class="background">
        <img src="<?php echo $imagenes;?>fondoimg.png">
      </div>
      <a href="#!user"><img class="circle" src="<?php echo $imagenes;?>avatar.jpg"></a>
      <a href="#!name"><span class="white-text name"><?php echo $_SESSION['autor'];?></span></a>
      <a href="#!email"><span class="white-text email">jdandturk@gmail.com</span></a>
    </div></li>
  <li><a href="admin">Home</a></li>
  <li><a href="#!"><i class="material-icons left">headset</i>Musica</a></li>
</ul>
