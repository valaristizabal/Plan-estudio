function showIdentification() {
    const content = `
        <h2 class="h4">Identificación</h2>
        <form>
            <div class="row">
                <!-- Columna 1 -->
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="facultad">Facultad</label>
                        <input type="text" class="form-control" id="facultad" placeholder="Facultad">
                    </div>
                    <div class="form-group">
                        <label for="programa">Programa</label>
                        <input type="text" class="form-control" id="programa" placeholder="Programa">
                    </div>
                    <div class="form-group">
                        <label for="nombre-curso">Nombre del curso</label>
                        <input type="text" class="form-control" id="nombre-curso" placeholder="Nombre del curso">
                    </div>
                    <div class="form-group">
                        <label for="elaborado-por">Elaborado por</label>
                        <input type="text" class="form-control" id="elaborado-por" placeholder="Elaborado por">
                    </div>
                </div>

                <!-- Columna 2 -->
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="fecha-ultima-actualizacion">Fecha última actualización</label>
                        <input type="date" class="form-control" id="fecha-ultima-actualizacion">
                    </div>
                    <div class="form-group">
                        <label for="fecha-aprobacion">Fecha aprobación del Comité Curricular</label>
                        <input type="date" class="form-control" id="fecha-aprobacion">
                    </div>
                    <div class="form-group">
                        <label for="idioma">Idioma</label>
                        <input type="text" class="form-control" id="idioma" placeholder="Idioma">
                    </div>
                    <div class="form-group">
                        <label for="codigo">Código</label>
                        <input type="text" class="form-control" id="codigo" placeholder="Código">
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
    `;
    document.getElementById('content-section').innerHTML = content;
}
