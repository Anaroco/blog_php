
        function compruebaEmails(evt) {
            console.log("== compruebaEmails ==")
            console.log(evt)

            const email1Input = document.getElementById("email1") //DOMNode
            const email2Input = document.getElementById("email2")

            console.log("email1 -> "+email1Input.value)  //string
            console.log("email2 -> "+email2Input.value)

            if(email1Input.value != email2Input.value) {
                email1Input.setCustomValidity("Los emails tienen que ser iguales!!")
                email2Input.setCustomValidity("Los emails tienen que ser iguales!!")
            } else {
                //cuando ponemos mensaje vacio es como indicar que no hay error
                email1Input.setCustomValidity("")
                email2Input.setCustomValidity("")
            }
        }
        //Esto sería equivalente a añadir el atributo onchange en el input
        document.getElementById("email1").addEventListener("change", compruebaEmails)

        //Establecemos a todos los input el manejador del evento invalid
        const inputs = document.querySelectorAll('input');
        inputs.forEach(function(input){
            input.addEventListener('invalid', invalidHandler);
        })
        function invalidHandler(e) {
            e.srcElement.parentElement.getElementsByTagName("label")[0].style.color="red"
        }

        