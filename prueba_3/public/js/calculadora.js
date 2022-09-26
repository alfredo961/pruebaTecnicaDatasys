class Calculadora {
    async sumar(num1, num2) {
        let total = 0;
        await fetch('http://127.0.0.1:8000/api/addition', {
   
                method: 'post',
                   headers: {
                       'Content-type': 'application/json; charset=UTF-8'
                   },
                   body: {
                    "num1": num1,
                    "num2":num2
                }
                    })
  .then((response) => response.json())
  .then((data) => total = data.response
   ).catch((error) => {
    console.error('Error:', error);
  });

  return total

    }

    restar(num1, num2) {
        return num1 - num2;
    }

    dividir(num1, num2) {
        return num1 / num2;
    }

    multiplicar(num1, num2) {
        return num1 * num2;
    }
} 