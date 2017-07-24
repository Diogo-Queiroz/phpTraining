<?php

$temperatura = (empty($_GET['temp'])) ? 0 : $_GET['temp'];
$tipo = (empty($_GET['tipo'])) ? "" : $_GET['tipo'];

switch($tipo)
{
  case "CpF":
    $resultado = CelsiusParaFarenheit($temperatura);
    break;
  case "CpK":
    $resultado = CelsiusParaKelvin($temperatura);
    break;
  case "KpF":
    $resultado = KelvinParaFarenheit($temperatura);
    break;
  case "KpC":
    $resultado = KelvinParaCelsius($temperatura);
    break;
  case "FpK":
    $resultado = FarenheitParaKelvin($temperatura);
    break;
  case "FpC":
    $resultado = FarenheitParaCelsius($temperatura);
    break;
  default:
    $resultado = 0;
    break;
}

function FarenheitParaCelsius($temperatura)
{
  return ($temperatura - 32) / 1.8;
}

function FarenheitParaKelvin($temperatura)
{
  return (($temperatura - 32)/9)*5 + 273;
}
function CelsiusParaFarenheit($temperatura)
{
  return ($temperatura * 1.8) + 32;
}
function CelsiusParaKelvin($temperatura)
{
  return $temperatura + 273;
}
function KelvinParaCelsius($temperatura)
{
  return $temperatura - 273;
}
function KelvinParaFarenheit($temperatura)
{
  return (((($temperatura - 273) / 5) * 9) + 32);
}