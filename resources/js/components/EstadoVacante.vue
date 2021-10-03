<template>
    <span
        @click="cambiarEstado"
        :key="estadoVacanteData"
        class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full "
        :class="claseEstado()"
        >
        {{estadoVacante}}
    </span>
</template>

<script>
export default {
    props:["estado", "vacanteId"],
    mounted() {
        // console.log(this.estado)
        // console.log(Number(this.vacanteId))
        this.estadoVacanteData = Number(this.estado)
    },
    data: function () {
        return{
            estadoVacanteData: null
        }
    },
    methods: {
        cambiarEstado(){
            if(this.estadoVacanteData === 1){
                this.estadoVacanteData = 0;
            }else{
                this.estadoVacanteData = 1;
            }

            //Enviar peticion a axios
            const params = {
                estado: this.estadoVacanteData
            }
            axios
                .post("/vacantes/" + this.vacanteId, params)
                .then(res => console.log(res))
                .catch(err => console.log(err))
        },
        claseEstado(){
            return this.estadoVacanteData === 1 ? "bg-green-100 text-green-800" : "bg-red-100 text-red-800"
        }
    },
    computed: {
        estadoVacante () {
            return this.estadoVacanteData === 1 ? "Activa" : "Inactiva";
        }
    }
}
</script>
