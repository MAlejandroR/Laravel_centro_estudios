import {createApp} from "vue/dist/vue.esm-bundler";

import tabla from "./components/tabla.vue";
import tabla_pruebas from "./components/tabla_pruebas.vue";

createApp({
components:{
    tabla,
    tabla_pruebas
}
}).mount ("#app");
