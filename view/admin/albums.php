<div ng-controller="albumsController">
    <div class="row">
        
        <div class="col s12 m2"></div>
        <div class="col s12 m10">
            <header>
                <h4>Nuevo Album</h4><hr>
            </header>
            <div class="row">
                <div class="col s12 m2"></div>
                <div class="col s12 m6 card">
                    <form action="saveAlbums" method="post" enctype="multipart/form-data">
                        <div class=" input-field col s12 m12">
                            <i class=" material-icons prefix">class</i>
                            <input type="text" id="nombreAlbums" name="nombreAlbum" ng-model="nombreAlbum">
                            <label for="nombreAlbums">Nombre del Albums</label>
                        </div>
                        <div class="input-field col s12 m12">
                            <i class="material-icons prefix">mode_edit</i>
                            <textarea id="inspiracion" class="materialize-textarea" name="inspiracion" ng-model="inspiracion"></textarea>
                            <label for="inspiracion">Inspiración</label>
                        </div>
                        <div class="file-field input-field col s12 m12">
                            <div class="btn <?php echo $color;?> darken-3">
                            <span> <i class=" material-icons left">add_a_photo</i> Foto</span>
                            <input name="imagen" type="file" ng-model="foto">
                            </div>
                            
                            <div class="file-path-wrapper">
                            <input class="file-path validate" type="text">
                            </div>
                        </div>
                        <div class="col s12 m12 center">
                            <div class="card-action">
                                <button class="btn <?php echo $color;?> darken-3">Guardar</button>
                                <br><br>
                                <?php 
                                    if(isset($_REQUEST['r'])){
                                        if($_REQUEST['r']==1){
                                ?>
                                <div class="chip green darken-2 white-text">
                                        Album Guardado con Exito
                                        <i class="close material-icons">close</i>
                                    </div>
                                <?php }} ?>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="row" ng-init="getAlbums()">
        
        <div class="col s12 m2"></div>
        <div class="col s12 m10">
            <header>
                <h4>Albums</h4><hr>
            </header>
            <div class="row">
                <div class="col s12 m2"></div>
                <div class="col s12 m8 card">
                        <table class="">
                        <thead>
                            <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Inspiracion</th>
                            <th>foto</th>
                            <th>fecha</th>
                            <th>Acciones</th>
                            </tr>
                        </thead>
                        
                        <tbody>
                            <tr ng-repeat="x in listAlbums">
                            <td>{{x.codigo}}</td>
                            <td>{{x.nombre}}</td>
                            <td>{{x.inspiracion}}</td>
                            <td><img class="materialboxed" width="60px" src="{{x.foto}}"></td>
                            <td>{{x.fecha}}</td>
                            <td><a href=""><i class="material-icons small green-text">edit</i></a> <a href=""><i class=" material-icons small red-text">delete</i></a></td>
                            </tr>
                        </tbody>
                        </table>
                </div>
            </div>
        </div>
    </div>
</div>