<x-layout.app titulo="alumnos">
    <fieldset>
        <legend>Datos de alumnos</legend>

    <form class ="flex flex-col space-y-4 max-w-xl mx-10 justify-start items-start "action="">
        <div class="flex flex-row space-x-3 justify-center items-center "> <label for="nombre">Nombre</label> <input class="rounded-xl border-slate-400 shadow " type="text" name="nombre" id=""></div>
        <div class="flex flex-row space-x-3 justify-center items-center "><label for="direccion">Dirección</label> <input rounded-xl border-slate-400 shadow  type="text" name="direccion" id=""></div>
            <div class="flex flex-row space-x-3 justify-center items-center "><label for="dni">DNI</label> <input rounded-xl border-slate-400 shadow  type="text" name="dni" id=""></div>
                <div class="flex flex-row space-x-3 justify-center items-center "><label for="email">Email    </label> <input rounded-xl border-slate-400 shadow  type="text" name="email" id=""></div>
    <input rounded-xl border-slate-400 shadow  type="submit" name="Guardar" id="">
    </form>
    </fieldset>
</x-layout.app>
