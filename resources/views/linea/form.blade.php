<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="id_municipalidad" class="form-label">Nombre del Municipio</label>
            <select name="id_municipalidad" class="form-control @error('id_municipalidad') is-invalid @enderror" id="id_municipalidad">
                <option value="">Seleccione una Municipalidad</option>
                @foreach($municipalidad as $id => $municipio)
                    <option value="{{ $id }}" {{ old('id_municipalidad', $linea->id_municipalidad) == $id ? 'selected' : '' }}>
                        {{ $municipio }}
                    </option>
                @endforeach
            </select>
            {!! $errors->first('id_municipalidad', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="nombre" class="form-label">{{ __('Nombre') }}</label>
            <input type="text" name="nombre" class="form-control @error('nombre') is-invalid @enderror" value="{{ old('nombre', $linea?->nombre) }}" id="nombre" placeholder="Nombre">
            {!! $errors->first('nombre', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="zona" class="form-label">{{ __('Zona') }}</label>
            <input type="number" name="zona" class="form-control @error('zona') is-invalid @enderror" value="{{ old('zona', $linea?->zona) }}" id="zona" placeholder="Zona">
            {!! $errors->first('zona', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="distancia_total_km" class="form-label">Distancia Total en KM</label>
            <input type="number" name="distancia_total_km" class="form-control @error('distancia_total_km') is-invalid @enderror" value="{{ old('distancia_total_km', $linea?->distancia_total_km) }}" id="distancia_total_km" placeholder="Distancia Total Km">
            {!! $errors->first('distancia_total_km', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">Guardar</button>
    </div>
</div>