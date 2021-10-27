export default {
    methods: {        
        //FUNCIONES DE VALIDACIÓN INDIVIDUALES
        i_soloNumeros(evt){
            var key = evt.keyCode || evt.which;
            var tecla = String.fromCharCode(key).toLowerCase();
            var letras = "1234567890";
            var especiales = "8-37-39-46";
            var tecla_especial = false
            for(var i in especiales){
                if(key == especiales[i]){
                    tecla_especial = true;
                    break;
                }
            }
            if(letras.indexOf(tecla)==-1 && !tecla_especial){
                evt.preventDefault();
            }
        },
        i_soloLetras(evt){
            var key = evt.keyCode || evt.which;
            var tecla = String.fromCharCode(key).toLowerCase();
            var letras = " áéíóúabcdefghijklmnñopqrstuvwxyz";
            var especiales = "8-37-39-46";
            var tecla_especial = false
            for(var i in especiales){
                if(key == especiales[i]){
                tecla_especial = true;
                break;
                }
            }        
            if(letras.indexOf(tecla)==-1 && !tecla_especial){
                evt.preventDefault();
            }
        },
        i_placaAuto(evt){
            var key = evt.keyCode || evt.which;
            var tecla = String.fromCharCode(key).toUpperCase();
            var letras = "ABCDEFGHIJKLMNOPQRSTUVWXYZÑ1234567890-_";
            var especiales = "8-37-39-46";        
            var tecla_especial = false
            for(var i in especiales){
                if(key == especiales[i]){
                    tecla_especial = true;
                    break;
                }
            }
        
            if(letras.indexOf(tecla)==-1 && !tecla_especial){
                evt.preventDefault();
            }
        },
        i_mayusculasPrimeraPalabra(texto){
            const capitalizeString = string => string.split(' ').map(item => item.replace(item.charAt(0), item.charAt(0).toUpperCase())).join(' ');
            return capitalizeString(texto);
        },
        i_mayusculasTodo(texto){
            const mayus = texto.toUpperCase();
            return mayus;
        },

        //FUNCIONES COLECTIVAS
        nombres(evt){
            this.i_soloLetras(evt);
            var valor = evt.target.value;
            valor = this.i_mayusculasPrimeraPalabra(valor);
            evt.target.value = valor;
        },
        numeros(evt){
            var valor = evt.target.value;
            this.i_soloNumeros(evt);
            //evt.target.value = valor;
        },
        matricula(evt){
            var valor = evt.target.value;
            this.i_placaAuto(evt);
            valor = this.i_mayusculasTodo(valor);
            evt.target.value = valor;
            //evt.target.value = valor;
        },
        //OTRAS FUNCIONES
        /*
        i_soloLetras(texto){
            let valor = texto;
            valor=valor.replace(/[^A-Z a-z ñ á-ú Ä-Ü]/ig, '');  
            return valor;
        },
        *//*
        i_soloNumeros(texto){
            let valor = texto;
            valor=valor.replace(/[^1-9]/ig, '');  
            return valor;
        },
        *//*
        isNumero(evt){
            evt = (evt) ? evt : window.event;
            var charCode = (evt.which) ? evt.which : evt.keyCode;
            if ((charCode > 31 && (charCode < 48 || charCode > 57)) && charCode !== 46) {
            //if ((charCode > 31 && (charCode < 48 || charCode > 57)) && charCode !== 46) {
                evt.preventDefault();;
            } else {
                return true;
            }
        },*/
    }
};