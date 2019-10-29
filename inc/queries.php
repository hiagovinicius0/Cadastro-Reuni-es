<?php
    function permissao($con, $funcao, $reuniao){
        if($funcao == 0){
            $QUERY1 = "SELECT * FROM `eventos` WHERE EvUId = ".$_COOKIE['reuniao']['IdUsuario']." AND EvId = ".$reuniao;
            $resultado = mysqli_query($con, $QUERY1);
            $num_rows = mysqli_num_rows($resultado);
            if($num_rows > 0){
                return true;
            }
            else{
                $QUERY2 = "SELECT * FROM `admin_eventos` where EvId = ".$reuniao." AND UId = ".$_COOKIE['reuniao']['IdUsuario'];
                $resultado2 = mysqli_query($con, $QUERY2);
                $num_rows2 = mysqli_num_rows($resultado2);
                if($num_rows2>0){
                    return true;
                }
                else{
                    return false;
                }
            }
        }
        elseif($funcao == 1){
            $QUERY1 = "SELECT * FROM `eventos` WHERE EvUId = ".$_COOKIE['reuniao']['IdUsuario']." AND EvId = ".$reuniao;
            $resultado = mysqli_query($con, $QUERY1);
            $num_rows = mysqli_num_rows($resultado);
            if($num_rows > 0){
                return true;
            }
            else{
                return false;
            }
        }
    }
    function permissaoPastas($con, $funcao, $reuniao){
        if($funcao == 0){
            $QUERY1 = "SELECT * FROM `poc` WHERE user = ".$_COOKIE['reuniao']['IdUsuario']." AND id = ".$reuniao;
            $resultado = mysqli_query($con, $QUERY1);
            $num_rows = mysqli_num_rows($resultado);
            if($num_rows > 0){
                return true;
            }
            else{
                $QUERY2 = "SELECT * FROM `participantes_poc` where pocid = ".$reuniao." AND uid = ".$_COOKIE['reuniao']['IdUsuario'];
                $resultado2 = mysqli_query($con, $QUERY2);
                $num_rows2 = mysqli_num_rows($resultado2);
                if($num_rows2>0){
                    return true;
                }
                else{
                    return false;
                }
            }
        }
        elseif($funcao == 1){
            $QUERY1 = "SELECT * FROM `eventos` WHERE EvUId = ".$_COOKIE['reuniao']['IdUsuario']." AND EvId = ".$reuniao;
            $resultado = mysqli_query($con, $QUERY1);
            $num_rows = mysqli_num_rows($resultado);
            if($num_rows > 0){
                return true;
            }
            else{
                return false;
            }
        }
    }
?>