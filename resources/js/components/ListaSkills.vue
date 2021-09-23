<template>
<div>
  <ul class="flex flex-wrap justify-content">
   <li
   class="border border-gray-500 px-10 py-3 mb-3 rounded mr-4"
    v-for="( skill, i ) in this.skills"
    v-bind:key="i"
    v-on:click="activo"
   >{{skill}}</li>
   </ul>
    <input type="hidden" name="skills" id="skills">
</div>

</template>

<script>
    export default{
        props: ["skills"],
        mounted(){
            // console.log(this.skills);
        },data: function(){
            return {
                habilidades: new Set(),
            }
        }
        ,methods: {
            activo(e) {
                if(e.target.classList.contains("bg-teal-400")){
                    e.target.classList.remove("bg-teal-400");
                    this.habilidades.delete(e.target.textContent);
                }else{
                    e.target.classList.add("bg-teal-400");
                    this.habilidades.add(e.target.textContent);
                }
                //Agregar las habilidades al tipo hidden
                const habilitiesToString = [...this.habilidades];
                document.querySelector("#skills").value = habilitiesToString;
            }
        }
    }
</script>
