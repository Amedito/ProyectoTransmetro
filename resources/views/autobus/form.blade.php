<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="id_piloto" class="form-label">Nombre del Piloto</label>
            <select name="id_piloto" class="form-control @error('id_piloto') is-invalid @enderror" id="id_piloto">
                <option value="">Seleccione Nombre del Piloto</option>
                @foreach($piloto as $id => $nombre)
                    <option value="{{ $id }}" {{ old('id_piloto', $autobus->id_piloto) == $id ? 'selected' : '' }}>
                        {{ $nombre }}
                    </option>
                @endforeach
            </select>
            {!! $errors->first('id_piloto', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="id_linea" class="form-label">Nombre de la Linea</label>
            <select name="id_linea" class="form-control @error('id_linea') is-invalid @enderror" id="id_linea">
                <option value="">Seleccione Numero de la Linea</option>
                @foreach($linea as $id => $nombre)
                    <option value="{{ $id }}" {{ old('id_linea', $autobus->id_linea) == $id ? 'selected' : '' }}>
                        {{ $nombre }}
                    </option>
                @endforeach
            </select>
            {!! $errors->first('id_linea', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        
        <div class="form-group mb-2 mb20">
            <label for="id_parqueo" class="form-label">Numero de Parqueo</label>
            <select name="id_parqueo" class="form-control @error('id_parqueo') is-invalid @enderror" id="id_parqueo">
                <option value="">Seleccione Numero de Parqueo</option>
                @foreach($parqueo as $id => $numero)
                    <option value="{{ $id }}" {{ old('id_parqueo', $autobus->id_parqueo) == $id ? 'selected' : '' }}>
                        {{ $numero }}
                    </option>
                @endforeach
            </select>
            {!! $errors->first('id_parqueo', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="marca" class="form-label">{{ __('Marca') }}</label>
            <input type="text" name="marca" class="form-control @error('marca') is-invalid @enderror" value="{{ old('marca', $autobus?->marca) }}" id="marca" placeholder="Marca">
            {!! $errors->first('marca', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="modelo" class="form-label">{{ __('Modelo') }}</label>
            <input type="text" name="modelo" class="form-control @error('modelo') is-invalid @enderror" value="{{ old('modelo', $autobus?->modelo) }}" id="modelo" placeholder="Modelo">
            {!! $errors->first('modelo', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="placa" class="form-label">{{ __('Placa') }}</label>
            <input type="text" name="placa" class="form-control @error('placa') is-invalid @enderror" value="{{ old('placa', $autobus?->placa) }}" id="placa" placeholder="Placa">
            {!! $errors->first('placa', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="capacidad_maxima" class="form-label">{{ __('Capacidad Maxima') }}</label>
            <input type="text" name="capacidad_maxima" class="form-control @error('capacidad_maxima') is-invalid @enderror" value="{{ old('capacidad_maxima', $autobus?->capacidad_maxima) }}" id="capacidad_maxima" placeholder="Capacidad Maxima">
            {!! $errors->first('capacidad_maxima', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="tiempo_espera_adicional_minutos" class="form-label">{{ __('Tiempo Espera Adicional Minutos') }}</label>
            <input type="text" name="tiempo_espera_adicional_minutos" class="form-control @error('tiempo_espera_adicional_minutos') is-invalid @enderror" value="{{ old('tiempo_espera_adicional_minutos', $autobus?->tiempo_espera_adicional_minutos) }}" id="tiempo_espera_adicional_minutos" placeholder="Tiempo Espera Adicional Minutos">
            {!! $errors->first('tiempo_espera_adicional_minutos', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">Guardar</button>
    </div>
</div>