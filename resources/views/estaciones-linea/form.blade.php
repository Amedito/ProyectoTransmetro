<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="id_linea" class="form-label">Linea</label>
            <select name="id_linea" class="form-control @error('id_linea') is-invalid @enderror" id="id_linea">
                <option value="">Seleccione Linea</option>
                @foreach($linea as $id => $nombre)
                    <option value="{{ $id }}" {{ old('id_linea', $estacionesLinea->id_linea) == $id ? 'selected' : '' }}>
                        {{ $nombre }}
                    </option>
                @endforeach
            </select>
            {!! $errors->first('id_linea', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="id_estacion" class="form-label">Estacion de Bus</label>
            <select name="id_estacion" class="form-control @error('id_estacion') is-invalid @enderror" id="id_estacion">
                <option value="">Seleccione Estacion</option>
                @foreach($estacion as $id => $nombre)
                    <option value="{{ $id }}" {{ old('id_estacion', $estacionesLinea->id_estacion) == $id ? 'selected' : '' }}>
                        {{ $nombre }}
                    </option>
                @endforeach
            </select>
            {!! $errors->first('id_estacion', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="orden" class="form-label">{{ __('Orden') }}</label>
            <input type="text" name="orden" class="form-control @error('orden') is-invalid @enderror" value="{{ old('orden', $estacionesLinea?->orden) }}" id="orden" placeholder="Orden">
            {!! $errors->first('orden', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">Guardar</button>
    </div>
</div>