<?php 

 
  require_once "controladores/plantilla.controlador.php";
  require_once "controladores/usuarios.controlador.php";
  require_once "controladores/solicitudes.controlador.php";
  require_once "controladores/horarios.controlador.php";
  require_once "controladores/reportes.controlador.php";
  require_once "controladores/tiposIngreso.controlador.php";
  require_once "controladores/atributosCargo.controlador.php";

  require_once "modelos/usuarios.modelo.php";
  require_once "modelos/solicitudes.modelo.php";
  require_once "modelos/horarios.modelo.php";
  require_once "modelos/reportes.modelo.php";
  require_once "modelos/tiposIngreso.modelo.php";
  require_once "modelos/atributosCargo.modelo.php";

  $plantilla =new ControladorPlantilla();
  $plantilla -> ctrPlantilla();

  ?>