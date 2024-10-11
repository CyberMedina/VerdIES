@extends('Layouts.layouts')
@section('title', 'Privilegios')

@section('content')
    <div class="col-xl">
        <div class="card mb-4">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="mb-0">Asignar privilegios</h5>
                <small class="text-muted float-end">Campos requeridos *</small>
            </div>
            <div class="card-body">
                <form id="crear" name="crear" method="POST" action="{{ route('privilegios.store') }}" autocomplete="off">
                    @csrf
                    <div class="row">
                        <div class="form-group">
                            <div class="col-md-6">
                                <label for="rol" class="form-label">Rol:</label>
                                <select id="rol" name="rol" class="form-select buscador @error('rol') is-invalid @enderror"
                                    style="width: 100%">
                                    <option value="" selected>Seleccionar rol</option>
            
                                    @foreach ($Roles as $rol)
                                        <option value="{{ $rol->id }}" {{ old('rol') == $rol->id ? 'selected' : '' }}>
                                            {{ $rol->nombre }}</option>
                                    @endforeach
                                </select>
                                @error('rol')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                       
                    </div>
                    <div class="mt-4"></div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="form-group">
            
                                <div class="row">
                                    @foreach ($modulos as $modulo)
                                        <div class="col-md-4">
                                            <h5>{{ $modulo['nombre'] }}</h5>
                                            @foreach ($modulo['submodulos'] as $submodulo)
                                                <div style="margin-left: 20px; margin-bottom: 10px;">
                                                    <input type="checkbox" name="submodulos[{{ $modulo['id'] }}][]"
                                                        value="{{ $submodulo['id'] }}"
                                                        class="flat   @error("submodulos.$modulo[id]") is-invalid @enderror"
                                                        @if (old("submodulos.$modulo[id]") && in_array($submodulo['id'], old("submodulos.$modulo[id]"))) checked @endif>
                                                    <span>{{ $submodulo['nombre'] }}</span>
                                                </div>
                                            @endforeach
                                            @error("submodulos.$modulo[id]")
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                            <button type="button" class="btn btn-success seleccionar-todo"
                                                data-modulo="{{ $modulo['id'] }}">Seleccionar Todo</button>
                                        </div>
                                    @endforeach
            
            
                                </div>
                            </div>
            
                        </div>
                        <div class="col-md-12">
                            <div class="d-grid gap-2 d-md-flex justify-content-md-end mt-2">
                                <a href="{{ route('privilegios.index') }}" class="btn btn-danger mb-2 me-md-2">Cancelar</a>
                                <button type="submit" class="btn btn-primary mb-2">Asignar</button>
                            </div>
                        </div>
                    </div>
            
                </form>
              
            </div>
        </div>
    </div>
    <script>
        // Función que alterna la selección de todos los checkboxes dentro de un módulo
        function toggleSeleccionModulo(moduloId) {
            var checkboxes = document.querySelectorAll('input[type="checkbox"][name="submodulos[' + moduloId + '][]"]');
            var todosSeleccionados = Array.from(checkboxes).every(checkbox => checkbox.checked); // Verifica si todos están seleccionados
            
            checkboxes.forEach(checkbox => {
                checkbox.checked = !todosSeleccionados; // Cambia el estado de selección
            });
    
            actualizarBoton(moduloId); // Actualiza el texto y estilos del botón
        }
    
        // Función que actualiza el texto y estilo del botón según si todos los checkboxes están seleccionados o no
        function actualizarBoton(moduloId) {
            var boton = document.querySelector('button[data-modulo="' + moduloId + '"]');
            var todosSeleccionadosEnModulo = todosLosCheckboxesSeleccionadosEnModulo(moduloId);
    
            // Cambia el texto y las clases del botón según el estado de los checkboxes
            if (todosSeleccionadosEnModulo) {
                boton.textContent = 'Deseleccionar Todo';
                boton.classList.remove('btn-success');
                boton.classList.add('btn-danger');
            } else {
                boton.textContent = 'Seleccionar Todo';
                boton.classList.remove('btn-danger');
                boton.classList.add('btn-success');
            }
        }
    
        // Función que verifica si todos los checkboxes de un módulo están seleccionados
        function todosLosCheckboxesSeleccionadosEnModulo(moduloId) {
            var checkboxes = document.querySelectorAll('input[type="checkbox"][name="submodulos[' + moduloId + '][]"]');
            return Array.from(checkboxes).every(checkbox => checkbox.checked);
        }
    
        // Agrega los event listeners a los botones para que respondan a los clics
        document.querySelectorAll('.seleccionar-todo').forEach(function(boton) {
            boton.addEventListener('click', function() {
                var moduloId = this.getAttribute('data-modulo');
                toggleSeleccionModulo(moduloId);
            });
        });
    </script>
    
@endsection
