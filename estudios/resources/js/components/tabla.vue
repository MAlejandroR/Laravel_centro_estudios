<template>

    <div class="max-h-max block">
        <!--overflow-auto
                flex flex-row justify-center-->
        <table class=" w-full flex flex-col">
            <caption class="sticky top-0
                  text-6xl text-amber-400">{{ table_name }}</caption>
            <thead class="text-2xl bg-white border-b sticky top-20
flex flex-row justify-between w-full sticky top-20 px-10 mx-10
">
            <tr>
                <th v-for="campo in campos" class ="mx-10 px-10">
                    {{ campo }}
                </th>
            </tr>
            <br>
            </thead>

            <tbody class="overflow-y-auto h-72 top-60">
            <tr v-for="fila in filas">
                <td v-for="valor in fila">{{ valor }}</td>
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

</style>
