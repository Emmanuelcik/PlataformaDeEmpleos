<template>
    <button
        @click="eliminarVacante"
        class="text-red-600 hover:text-red-900  mr-5">Eliminar</button>
</template>

<script>
export default {
    props: ["vacanteId"],
    methods: {
        eliminarVacante(){
            // console.log("eliminando..." + this.vacanteId);

            this.$swal.fire({
                title: 'Estas Seguro de elimnar esta vacante?',
                text: "Una vez eliminada no se puede recuperar!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Eliminar!',
                cancelButtonText: "Cancelar "
            })
            .then((result) => {
                if (result.isConfirmed) {

                    const params = {
                        id: this.vacanteId,
                        _method: "delete",
                    };
                    //Enviar peticion a axios
                    axios.post(`/vacantes/${this.vacanteId}`, params)
                        .then(respuesta => {
                            this.$swal.fire(
                            'Eliminada!',
                            respuesta.data.mensaje,
                            'success'
                            )

                            //Eliminarla del DOM
                            this.$el.parentNode.parentNode.parentNode.removeChild(this.$el.parentNode.parentNode)
                        })
                        .catch(err => console.log(err));
                }
            })
        }
    }
}
</script>
