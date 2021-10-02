<template>
    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
        Activa
    </span>
</template>

<script>
export default {
    props:["estado"],
    mounted() {
        console.log(this.estado)
    }
}
</script>
