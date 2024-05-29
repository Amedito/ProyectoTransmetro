<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="id_piloto" class="form-label">Nombre de Piloto</label>
            <select name="id_piloto" class="form-control @error('id_piloto') is-invalid @enderror" id="id_piloto">
                <option value="">Seleccione Nombre de Piloto</option>
                @foreach($pilotos as $id => $nombre)
                    <option value="{{ $id }}" {{ old('id_piloto', $historialEducativo->id_piloto) == $id ? 'selected' : '' }}>
                        {{ $nombre }}
                    </option>
                @endforeach
            </select>
            {!! $errors->first('id_piloto', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="nivel_educativo" class="form-label">Nivel Educativo</label>
            <input type="text" name="nivel_educativo" class="form-control @error('nivel_educativo') is-invalid @enderror" value="{{ old('nivel_educativo', $historialEducativo?->nivel_educativo) }}" id="nivel_educativo" placeholder="Nivel Educativo">
            {!! $errors->first('nivel_educativo', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="institucion" class="form-label">Institucion</label>
            <input type="text" name="institucion" class="form-control @error('institucion') is-invalid @enderror" value="{{ old('institucion', $historialEducativo?->institucion) }}" id="institucion" placeholder="Institucion">
            {!! $errors->first('institucion', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="año_graduacion" class="form-label">Año de Graduacion</label>
            <input type="date" name="año_graduacion" class="form-control @error('año_graduacion') is-invalid @enderror" value="{{ old('año_graduacion', $historialEducativo?->año_graduacion) }}" id="año_graduacion" placeholder="Año Graduacion">
            {!! $errors->first('año_graduacion', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">Guardar</button>
    </div>
</div>