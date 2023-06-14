<template>

    <div class="flex flex-row justify-center ">
        <!--overflow-auto
                flex flex-row justify-center-->
        <table class="flex flex-col w-fit">
            <caption class="text-4xl text-amber-400">{{ table_name }}</caption>
            <thead class="text-xl uppercase text-fuchsia-600 bg-white
                          flex flex-row justify-evenly
                          max-w-full">
            <tr>
                <th v-for="campo in campos" class ="text-xl text-fuchsia-900 ">
                    {{ campo }}
                </th>
            </tr>

            </thead>

            <tbody class="overflow-auto h-72">
            <tr v-for="fila in filas">
                <td  class=" text8gray-500 px-4" v-for="valor in fila">{{ valor }}</td>
            </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
export default {
    name: "tabla",
    props: {
        campos_serializados: String,
        filas_serializadas: String,
        table_name: String
    },
    data() {
        return {
            campos: Array,
            filas: Object,
        }
    },
    mounted() {
        this.campos = JSON.parse(this.campos_serializados);
        this.filas = JSON.parse(this.filas_serializadas);
    }

}

</script>


<style scoped>
.cabecera_tabla {
    @apply text-xl uppercase text-fuchsia-600 bg-white flex flex-row justify-between max-w-full
}
</style>
