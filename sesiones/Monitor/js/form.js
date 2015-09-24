/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function verificar(){
    var r = confirm("¿Esta seguro si desea continuar con esta accion?");
    if (r == true) {
        document.formulario.submit();
    }
    else{
        alert('Entró al no');
        parent.location.href='#'; 
    }
}