<div class="form-group col-md-{{$columna}}">
    <label for="{{$nombre}}">{{$texto}}</label>
    <input type="{{$type}}" class="form-control" id="{{$nombre}}" name="{{$nombre}}" value="{{old($nombre, $valor)}}">
</div>