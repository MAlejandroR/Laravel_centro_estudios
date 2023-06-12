# Tabla
1. overflow con scrolling
 ```html
 <div class="max-h-full overflow-auto">
    <table class="table-fixed">
....
```
Conseguir la cabecera fija

Algo he conseguido con esto:
```html
<div class="max-h-max block">
    <!--overflow-auto
            flex flex-row justify-center-->
    <table class=" w-full flex flex-col">
        <caption class="sticky top-0 text-6xl text-amber-400">{{ table_name }}</caption>
        <thead class="text-2xl bg-white border-b sc
flex flex-row justify-between w-full
">
        <tr>
            <th v-for="campo in campos">
                {{ campo }}
            </th>
        </tr>
        <br>
        </thead>

        <tbody class="overflow-y-auto h-72 top-60">

```

 La propiedad "position: sticky" es parte del modelo de posicionamiento de CSS y permite que un elemento se comporte como "relativo" hasta que se desplaza fuera de la ventana de visualización, momento en el cual se comporta como "fijo". Esto significa que el elemento se mantiene en su lugar relativo hasta que alcanza una posición específica en la ventana, y luego se "pega" en esa posición mientras se desplaza el contenido.

## Orden de devolución de campos de una tabla
 Problma
 Tengo una tabla que tiene unos campos, pero al consultarlo los retorna en un orden diferente a como los devuelven en una sentencia.
 
