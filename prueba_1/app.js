
function showNumbers(){
    for (let index = 0; index <= 100; index++) {
        validateMultiple(index);
    }

    function validateMultiple(index){
        var message;
        if (index> 1) {
            if (getMultiples(index,3))                 
                message = "Hola"; 
            
            if (getMultiples(index,5)) 
                message = "mundo";           
            
            if ((getMultiples(index,3) && getMultiples(index,5))) 
                message ="Hola mundo";           
            
        }

        return console.log(index, message)
    }

    function getMultiples(valor, multiplo){
        diferencia = valor % multiplo;

        if (diferencia ==0) {
            return true;
        }else{
            return false;
        }

    }
}

showNumbers();