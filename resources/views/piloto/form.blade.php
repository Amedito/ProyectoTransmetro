<div class="row padding-1 p-1">
    <div class="col-md-6">
        <div class="form-group mb-2 mb20">
            <label for="nombre" class="form-label">Nombres</label>
            <input type="text" name="nombre" class="form-control @error('nombre') is-invalid @enderror" value="{{ old('nombre', $piloto?->nombre) }}" id="nombre" placeholder="Nombre">
            {!! $errors->first('nombre', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="fecha_nacimiento" class="form-label">Fecha de Nacimiento</label>
            <input type="date" name="fecha_nacimiento" class="form-control @error('fecha_nacimiento') is-invalid @enderror" value="{{ old('fecha_nacimiento', $piloto?->fecha_nacimiento) }}" id="fecha_nacimiento" placeholder="Fecha Nacimiento">
            {!! $errors->first('fecha_nacimiento', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

        <div class="form-group mb-2 mb20">
            <label for="id_municipalidad" class="form-label">Municipalidad</label>
            <select name="id_municipalidad" class="form-control @error('id_municipalidad') is-invalid @enderror" id="id_municipalidad">
                <option value="">Seleccione una Municipalidad</option>
                @foreach($municipalidad as $id => $municipio)
                    <option value="{{ $id }}" {{ old('id_municipalidad', $piloto->id_municipalidad) == $id ? 'selected' : '' }}>
                        {{ $municipio }}
                    </option>
                @endforeach
            </select>
            {!! $errors->first('id_municipalidad', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="col-md-12 mt20 mt-2">
            <button type="submit" class="btn btn-primary">Guardar</button>
        </div>
        
    </div>
    <div class="col-md-6">
        <div class="form-group mb-2 mb20">
            <label for="apellido" class="form-label">Apellidos</label>
            <input type="text" name="apellido" class="form-control @error('apellido') is-invalid @enderror" value="{{ old('apellido', $piloto?->apellido) }}" id="apellido" placeholder="Apellido">
            {!! $errors->first('apellido', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        
        <div class="form-group mb-2 mb20">
            <label for="genero" class="form-label">Género</label>
            <select name="genero" class="form-control @error('genero') is-invalid @enderror" id="genero">
                <option value="">Seleccione</option>
                <option value="M" {{ old('genero', $piloto?->genero) == 'M' ? 'selected' : '' }}>Masculino</option>
                <option value="F" {{ old('genero', $piloto?->genero) == 'F' ? 'selected' : '' }}>Femenino</option>
            </select>
            {!! $errors->first('genero', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        
    </div>
</div>
