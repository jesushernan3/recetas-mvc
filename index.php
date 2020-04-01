<?php
  require_once "./core/configuraciones_generales.php";
  require_once "./controladores/vistasControlador.php";

  $plantilla = new vistasControlador();
  $plantilla->obtener_plantilla_controlador();
  