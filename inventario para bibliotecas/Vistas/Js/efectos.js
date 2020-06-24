new Vue({
    el:".container",
    data:{
        option:0,
        tiempo: new Date().getHours(),
        mostrar: false,
        alert:false,
        input1:"",
        input2:"",
        input3:"",
        input4:"",
        style_button:"cursor: not-allowed",
        url:"#",
        id: 0,
        tabla: ["Nombre del libro","Categoria","Seccion","Descripcion"]
    },
    methods:{ 
        opt(){
           this.option++
           if (this.option>1) {
               this.option=0
           }
        }
    },
    computed:{
        saludo(){
            if (this.tiempo>=6 && this.tiempo<12) {
                return "Buenos dias"
            }else if (this.tiempo>=12 && this.tiempo<18) {
                return "Buenas tardes"
            }else if (this.tiempo>=18 && this.tiempo<24) {
                return "Buenas noches"
            }
        },

        progress(){
    
            if (this.input1=="" && this.input2=="" && this.input3=="" && this.input4=="") {
                return 0
            } else if (this.input4!="") {
                this.style_button="cursor: pointer"
                return 100 
            } else if (this.input3!="") {
                this.style_button="cursor: not-allowed"
                return 75
            } else if (this.input2!="") {
                this.style_button="cursor: not-allowed"
                return 50
            } else if (this.input1!="") {
                this.style_button="cursor: not-allowed"
                return 25
            }
        }
    }
});