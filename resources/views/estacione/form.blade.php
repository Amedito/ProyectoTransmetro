<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="id_municipalidad" class="form-label">Municipio</label>
            <select name="id_municipalidad" class="form-control @error('id_municipalidad') is-invalid @enderror" id="id_municipalidad">
                <option value="">Seleccione Municipio</option>
                @foreach($municipalidad as $id => $municipio)
                    <option value="{{ $id }}" {{ old('id_municipalidad', $estacione->id_municipalidad) == $id ? 'selected' : '' }}>
                        {{ $municipio }}
                    </option>
                @endforeach
            </select>
            {!! $errors->first('id_municipalidad', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="id_operador" class="form-label">Nombre del Operador</label>
            <select name="id_operador" class="form-control @error('id_operador') is-invalid @enderror" id="id_operador">
                <option value="">Seleccione Nombre del Operador</option>
                @foreach($operador as $id => $nombre)
                    <option value="{{ $id }}" {{ old('id_operador', $estacione->id_operador) == $id ? 'selected' : '' }}>
                        {{ $nombre }}
                    </option>
                @endforeach
            </select>
            {!! $errors->first('id_operador', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="id_guardia" class="form-label">Nombre de Guardia</label>
            <select name="id_guardia" class="form-control @error('id_guardia') is-invalid @enderror" id="id_guardia">
                <option value="">Seleccione Nombre del Operador</option>
                @foreach($guardia as $id => $nombre)
                    <option value="{{ $id }}" {{ old('id_guardia', $estacione->id_guardia) == $id ? 'selected' : '' }}>
                        {{ $nombre }}
                    </option>
                @endforeach
            </select>
            {!! $errors->first('id_guardia', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="nombre" class="form-label">{{ __('Nombre') }}</label>
            <input type="text" name="nombre" class="form-control @error('nombre') is-invalid @enderror" value="{{ old('nombre', $estacione?->nombre) }}" id="nombre" placeholder="Nombre">
            {!! $errors->first('nombre', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="direccion" class="form-label">{{ __('Direccion') }}</label>
            <input type="text" name="direccion" class="form-control @error('direccion') is-invalid @enderror" value="{{ old('direccion', $estacione?->direccion) }}" id="direccion" placeholder="Direccion">
            {!! $errors->first('direccion', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="capacidad_actual" class="form-label">{{ __('Capacidad Actual') }}</label>
            <input type="text" name="capacidad_actual" class="form-control @error('capacidad_actual') is-invalid @enderror" value="{{ old('capacidad_actual', $estacione?->capacidad_actual) }}" id="capacidad_actual" placeholder="Capacidad Actual">
            {!! $errors->first('capacidad_actual', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="alerta" class="form-label">{{ __('Alerta') }}</label>
            <input type="text" name="alerta" class="form-control @error('alerta') is-invalid @enderror" value="{{ old('alerta', $estacione?->alerta) }}" id="alerta" placeholder="Alerta">
            {!! $errors->first('alerta', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">Guardar</button>
    </div>
</div>