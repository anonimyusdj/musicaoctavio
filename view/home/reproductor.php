
<div class="row" ng-controller="musicaList">
  <div class="col s12m1"></div>
  <div class="col s12 m3 card">
    <header>
      <h4>ALBUMS</h4><hr>
    </header>
  </div>
  <div class="col s12m1"></div>


  <div class="col s12 m6">
    <div class="row">
        <div class="col s12 m12 card">
          <header>
            <h5>REPRODUCTOR</h5<hr>
          </header>
        <hr/>
        <div class="row">
            <div class="col s12 md12">
                  <!-- init soundManager2 player -->
                  <sound-manager></sound-manager>
                  <!--Nombre de la musica sonando-->
                  <header>
                    <h6 style="margin-left:20px;">  <b>Musica Sonando:</b> {{ currentPlaying.title }} ({{ currentPostion }} / {{ currentDuration }})</h6><hr>
                  </header>
                  <!---->
                  <!--Reproductor-->
                  <!--Fondo Tiempo-->
                  <div class="fondoprog" seek-track>
                      <div class="progress progre" ng-style="{width : ( progress + '%' ) }"><i class="material-icons left white-text small">play_circle_filled</i></div>
                  </div>
                  <!---->

                  <!--Opciones play, pause, etc-->
                  <div class="row card">
                    <div class="col s1 m1"></div>
                      <div class="col s1 m1">
                          <a href="" play-music><i class="material-icons left small">play_circle_filled</i></a>
                      </div>

                      <div class="col s1 m1">
                        <a href="" pause-music><i class="material-icons left small">pause_circle_filled</i></a>
                      </div>

                      <div class="col s1 m1">
                        <a href="" stop-music><i class="material-icons left small">adjust</i></a>
                      </div>

                      <div class="col s1 m1">
                        <a repeat-music class="hidden"></a>
                        <a ng-if="repeat==false" href="" repeat-music><i class="material-icons left small">sync_disabled</i></a>
                        <a ng-if="repeat==true" href=""  repeat-music><i class="material-icons left small">sync</i></a>
                      </div>

                      <div class="col s1 m1">
                        <a href="" prev-track><i class="material-icons left small">skip_previous</i></a>
                      </div>

                      <div class="col s1 m1">
                        <a href=""next-track><i class="material-icons left small">skip_next</i></a>
                      </div>
                      <div class="col s1 m1">
                         <a href="" music-volume data-type="increase"><i class="material-icons left small">local_hospital</i></a>
                      </div>
                      <div class="col s1 m1">
                         <a href="" music-volume data-type="decrease"><i class="material-icons left small">do_not_disturb_on</i></a>
                      </div>
                     <div class="col s1 m1">
                        <a class="hidden" mute-music></a>
                          <a ng-if="mute==false" href="" mute-music><i class="material-icons left small">volume_off</i></a>
                          <a ng-if="mute==true" href=""  mute-music><i class="material-icons left small">volume_up</i></a>
                      </div>
                    <div class="col s1 m1">
                          <a><b>{{ volume }}</b></a>  
                    </div>
                     <div class="col s1 m1"></div>
                  </div>
                  <!---->

                  <!--Lista de Reproduccion-->
                  <div class="col s12 m12">
                      <header>
                        <h5>Lista de Reproducción</h5><hr>
                      </header>
                      <div class="col s12 m12">
                        <div class="row">
                          <div class="col-md-12">
                              <ul class="collection">
                                  <li class="collection-item" ng-repeat="song in playlist">
                                      <div play-from-playlist="song">{{ song.title }}<a ng-if="currentPlaying.id == song.id" href="" pause-music><i class="material-icons right blue-text">play_arrow</i></a></span> <a class="secondary-content" remove-from-playlist="song" data-index="{{$index}}" href=""><i music-player add-song="song" class="material-icons red-text">delete_forever</i></a></div>
                                  </li>
                              </ul>
                          </div>
                        </div>
                      </div>

                  </div>
                  <!---->
            </div>
        </div>
        </div>




        <div class="col s12 m12 card">
            <header>
              <h5>LISTADO DE CANCIONES</h5><hr>
            </header>

              <div class="col s12 m12">
                <div class="row">
                  <div class="col-md-12">
                      <ul class="collection">
                          <li class="collection-item" ng-repeat="song in songs">
                            <div music-player="play" add-song="song"><a href="">{{ song.title }}</a><a href="" class="secondary-content"><i music-player add-song="song" class="material-icons blue-text">play_circle_filled</i></a></div>
                          </li>
                      </ul>
                        <a href="" class="tooltipped" data-position="bottom" data-tooltip="Play Todo" play-all="songs"><i class="material-icons left medium">shop_two</i></a>
                        <a href="" class="tooltipped" data-position="bottom" data-tooltip="Play Todo" play-all="songs" data-play="false"><i class="material-icons left medium">library_add</i></a>
                  </div>
                </div>
              </div>
        </div>

        <div class="col s12 m12 card">
          COMENTARIOS
        </div>
    </div>
  </div>


  <div class="col s12m1"></div>
  <div class="col s12 m2">
    <div class="row">
      <div class="col s12 m12">
          <header>
            <h5><i class="material-icons left small">card_membership</i>Cupones</h5><hr>
          </header>
        <a class="waves-effect waves-light btn modal-trigger  blue darken-3" href="#modal1">Canjear</a>
      </div>
       <div class="col s12 m12">
          <header>
            <h5>INSPIRACION</h5><hr>
          </header>
           <a class="btn tooltipped blue darken-3" data-position="bottom" data-tooltip="I am a tooltip">Hover me!</a>
      </div>
    </div>
  </div>
</div>

<!--Modal para cupones-->
  <div id="modal1" class="modal">
    <div class="modal-content">
      <h4>Canjear Cupon</h4>
      <p>Ingrese el Numero del Cupon</p>
                  <div class="row">
                <form class="col s12">
                  <div class="row">
                    <div class="input-field col s12 m12">
                      <i class="material-icons prefix">card_giftcard</i>
                      <input id="icon_prefix" type="text" class="validate">
                      <label for="icon_prefix">Numero de Cupón</label>
                    </div>
                  </div>
                </form>
              </div>
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Canjear</a>
    </div>
  </div>
