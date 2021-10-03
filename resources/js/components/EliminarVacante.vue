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
                    this.$swal.fire(
                    'Eliminada!',
                    'Tu vacante se eliminó exitosamente!.',
                    'success'
                    )
                }
            })
        }
    }
}
</script>
