<div class="form-group">
    <label for="nombre" class="col-lg-3 control-label requerido">Nombre</label>

    <div class="col-lg-8">
      <input type="text" class="form-control" name="nombre" id="nombre" value="{{old('nombre', $data->nombre ?? '')}}" required>
    </div>
</div>
<div class="form-group">
    <label for="slug" class="col-lg-3 control-label requerido">Slug</label>

    <div class="col-lg-8">
      <input type="text" class="form-control" name="slug" id="slug" value="{{old('slug', $data->slug ?? '')}}" required>
    </div>
</div>
