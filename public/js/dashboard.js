function showIdentification() {
    const content = `
        <h2 class="h4">Identificación</h2>
        <form id="identification-form" method="POST" action="/identificaciones">
            <div class="form-group">
                <label for="facultad">Facultad</label>
                <input type="text" class="form-control" id="facultad" name="facultad" placeholder="Facultad">
            </div>
            <div class="form-group">
                <label for="programa">Programa</label>
                <input type="text" class="form-control" id="programa" name="programa" placeholder="Programa">
            </div>
            <div class="form-group">
                <label for="nombre-curso">Nombre del curso</label>
                <input type="text" class="form-control" id="nombre-curso" name="nombre_del_curso" placeholder="Nombre del curso">
            </div>
            <div class="form-group">
                <label for="elaborado-por">Elaborado por</label>
                <input type="text" class="form-control" id="elaborado-por" name="elaborado_por" placeholder="Elaborado por">
            </div>
            <div class="form-group">
                <label for="fecha-ultima-actualizacion">Fecha última actualización</label>
                <input type="date" class="form-control" id="fecha-ultima-actualizacion" name="fecha_ultima_actualizacion">
            </div>
            <div class="form-group">
                <label for="fecha-aprobacion">Fecha aprobación del Comité Curricular</label>
                <input type="date" class="form-control" id="fecha-aprobacion" name="fecha_aprobacion_comite_curricular">
            </div>
            <div class="form-group">
                <label for="idioma">Idioma</label>
                <input type="text" class="form-control" id="idioma" name="idioma" placeholder="Idioma">
            </div>
            <div class="form-group">
                <label for="codigo">Código</label>
                <input type="text" class="form-control" id="codigo" name="codigo" placeholder="Código">
            </div>
            <button type="button" class="btn btn-secondary" onclick="goBack()">Volver</button>
            <button type="button" class="btn btn-primary" onclick="showCreditType()">Siguiente</button>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
    `;
    document.getElementById('content-section').innerHTML = content;

    document.getElementById('identification-form').addEventListener('submit', function(event) {
        event.preventDefault();
        const form = event.target;

        fetch(form.action, {
            method: 'POST',
            body: new FormData(form),
            headers: {
                'Accept': 'application/json',
            }
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                alert('Identificación guardada exitosamente.');
                form.reset();
            } else {
                alert('Error al guardar la identificación.');
            }
        })
        .catch(error => console.error('Error:', error));
    });
}


function showManageIdentification() {
    fetch('/identificaciones')
        .then(response => response.json())
        .then(data => {
            const contentSection = document.getElementById('content-section');
            let content = '<h2 class="h4">Gestionar Identificación</h2>';
            
            if (data.length > 0) {
                content += '<table class="table table-striped">';
                content += '<thead><tr><th>Facultad</th><th>Programa</th><th>Nombre del Curso</th><th>Elaborado Por</th><th>Fecha Última Actualización</th><th>Fecha Aprobación</th><th>Idioma</th><th>Código</th></tr></thead>';
                content += '<tbody>';
                
                data.forEach(item => {
                    content += `<tr>
                        <td>${item.facultad}</td>
                        <td>${item.programa}</td>
                        <td>${item.nombre_del_curso}</td>
                        <td>${item.elaborado_por}</td>
                        <td>${item.fecha_ultima_actualizacion}</td>
                        <td>${item.fecha_aprobacion_comite_curricular}</td>
                        <td>${item.idioma}</td>
                        <td>${item.codigo}</td>
                    </tr>`;
                });

                content += '</tbody></table>';
            } else {
                content += '<p>No hay identificaciones registradas.</p>';
            }

            contentSection.innerHTML = content;
        })
        .catch(error => console.error('Error:', error));
}




function showCreditType() {
    const content = `
        <h2 class="h4">Tipo de Crédito</h2>
        <form>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="teorico">Teórico</label>
                        <input type="text" class="form-control" id="teorico" placeholder="Teórico">
                    </div>
                    <div class="form-group">
                        <label for="teorico-practico">Teórico-Práctico</label>
                        <input type="text" class="form-control" id="teorico-practico" placeholder="Teórico-Práctico">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="practico">Práctico</label>
                        <input type="text" class="form-control" id="practico" placeholder="Práctico">
                    </div>
                    <div class="form-group">
                        <label for="numero-creditos">Número de Créditos</label>
                        <input type="number" class="form-control" id="numero-creditos" placeholder="Número de Créditos">
                    </div>
                </div>
            </div>
            <button type="button" class="btn btn-secondary" onclick="goBack()">Volver</button>
            <button type="button" class="btn btn-primary" onclick="showCurricularStructure()">Siguiente</button>
        </form>
    `;
    document.getElementById('content-section').innerHTML = content;
}

function showCurricularStructure() {
    const content = `
        <h2 class="h4">Estructura Curricular</h2>
        <form>
            <div class="form-group">
                <label for="semestre">Semestre</label>
                <input type="text" class="form-control" id="semestre" placeholder="Ingrese Semestre">
            </div>
            <div class="form-group">
                <label for="prerrequisitos">Prerrequisitos</label>
                <input type="text" class="form-control" id="prerrequisitos" placeholder="Ingrese Prerrequisitos">
            </div>
            <div class="form-group">
                <label for="saberes-competencias">Saberes y Competencias Previas</label>
                <textarea class="form-control" id="saberes-competencias" rows="3" placeholder="Ingrese Saberes y Competencias Previas"></textarea>
            </div>
            <button type="button" class="btn btn-secondary" onclick="goBack()">Volver</button>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
    `;
    document.getElementById('content-section').innerHTML = content;
}


// js/dashboard.js

function showEducationalPurposes() {
    const content = `
        <h2 class="h4">Propósitos Formativos</h2>
        <form>
            <div class="form-group">
                <label for="competencias-graduado">Competencias del graduado asociadas al curso</label>
                <textarea class="form-control" id="competencias-graduado" rows="3" placeholder="Ingrese competencias"></textarea>
            </div>
            <div class="form-group">
                <label for="resultados-aprendizaje">Resultados de Aprendizaje del Graduado que se relacionan con el curso</label>
                <textarea class="form-control" id="resultados-aprendizaje" rows="3" placeholder="Ingrese resultados de aprendizaje"></textarea>
            </div>
            <div class="form-group">
                <label for="aporte-curso">¿De qué manera el curso aportará al Perfil del Graduado?</label>
                <textarea class="form-control" id="aporte-curso" rows="3" placeholder="Ingrese aportes del curso"></textarea>
            </div>
            <div class="form-group">
                <label for="competencia-principal">Competencia Principal del curso</label>
                <textarea class="form-control" id="competencia-principal" rows="3" placeholder="Ingrese competencia principal"></textarea>
            </div>
            <div class="form-group">
                <label for="resultados-competencia">Resultados de aprendizaje asociados a la competencia principal del curso</label>
                <textarea class="form-control" id="resultados-competencia" rows="3" placeholder="Ingrese resultados de competencia"></textarea>
            </div>
            <button type="button" class="btn btn-secondary" onclick="showPreviousSection()">Volver</button>
            <button type="button" class="btn btn-primary" onclick="showNextSection()">Siguiente</button>
        </form>
    `;
    document.getElementById('content-section').innerHTML = content;
}


function goBack() {
    document.getElementById('content-section').innerHTML = '';
    // Aquí podrías mostrar el contenido inicial o el dashboard principal
    // Por ejemplo, puedes recargar el dashboard con:
    showDashboard();
}

function showDashboard() {
    const content = `<h2 class="h4">Bienvenido al Dashboard</h2>
                     <p>Seleccione una opción del menú para comenzar.</p>`;
    document.getElementById('content-section').innerHTML = content;
}

function showAlert() {
    alert("Guardado correctamente");
}
