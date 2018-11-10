<?php
  class Cifrado{

    public function cifrador($action,$texto){
      $action=trim($action);
      $salida=false;

      $myKey='%&asdsi878*a@@|~aA€¬assdwwujki';
      $myIV='?¿)&$FdsEGYTXSD11*-+4QE·$';
      $encrypt_method='AES-256-CBC';

      $secret_key=hash('sha256',$myKey);
      $secret_iv=substr(hash('sha256',$myIV),0,16);

      if ($action && ($action=='cifrar' || $action=='descifrar') && $texto) {
        $texto=trim(strval($texto));
        switch ($action) {
          case 'cifrar':
            $salida=openssl_encrypt($texto,$encrypt_method,$secret_key,0,$secret_iv);
            break;
          case 'descifrar':
            $salida=openssl_decrypt($texto,$encrypt_method,$secret_key,0,$secret_iv);
            break;
          default:
            echo "Opcion No valida";
            break;
        }
      }
      return $salida;
    }
  }
 ?>
