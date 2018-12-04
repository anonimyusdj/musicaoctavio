<?php
class AlbumsModel{
   private $conexion;
    public $nombre;
    public $inspiracion;
    public $foto;

    public function __construct()
    {
        $this->conexion = Database::conectar();
    }
    public function guardarAlbums(AlbumsModel $datos){
        try {
            
            $sql="INSERT INTO albums(name_albums,inspiracion,foto,fecha_creacion) VALUES(?,?,?,NOW())";
            $this->conexion->prepare($sql)->execute(array(
                $datos->nombre,
                $datos->inspiracion,
                $datos->foto
            ));

            //echo "Album Registrado con Exito";
        } catch (Exception $e) {
            echo($e->getMessage());
        }
    }

    public function getAlbums(){
        try{
            $sql="SELECT * FROM albums";
            $stm=$this->conexion->prepare($sql);
            $stm->execute();
            $resultado="";

            while($rs=$stm->fetch(PDO::FETCH_ASSOC)){
                if($resultado !=""){
                    $resultado.=",";
                }
                $resultado.='{"codigo":"'.$rs['idalbums'].'","nombre":"'.$rs['name_albums'].'","inspiracion":"'.$rs['inspiracion'].'","foto":"'.$rs['foto'].'","fecha":"'.$rs['fecha_creacion'].'"}';
            }
            $resultado = '{"resultado":[' . $resultado. ']}';
            echo ($resultado);
        }catch(Exception $e){
            echo($e->getMessage());
        }
    }
    public function subirImage($nombre){
        try {
          if($_FILES["imagen"]["error"]>0){
                  echo "Error al cargar archivo";	
                  } else {
                  $permitidos = array("image/gif", "image/png", "image/jpeg", "image/jpg");
                  $limite_kb = 2000;
                  if(in_array($_FILES["imagen"]["type"], $permitidos) && $_FILES["imagen"]["size"] <= $limite_kb * 1024){
                         // $ruta="assets/multimedia/";
                          //chmod($ruta,755);
                          $ruta ='assets/multimedia/imgAlbums/'.$nombre.'/';                         
                          if(!file_exists($ruta)){
                                  mkdir($ruta);
                          }
                          $archivo = $ruta.$_FILES["imagen"]["name"];
                          /*if(!file_exists($archivo)){*/
                                  $resultado = copy($_FILES["imagen"]["tmp_name"], $archivo);

                                  if($resultado){
                                      
                                      return $archivo;
                                  } else {
                                      echo "Error al guardar archivo";
                                  }
                              /*} else {
                                  echo "Archivo ya existe";
                             }*/
                      } else {
                       echo "Archivo no permitido o excede el tamaño";
                      }
          }
      } catch (Exception $ex) {
          echo $ex->getMessage();
      }
    }

}