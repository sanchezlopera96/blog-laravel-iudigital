@csrf

<label for="name">Titulo</label>
<input class="form-control" type="text" name="name" id="name" value="{{ old('name', $post->name) }}">

<label for="slug">Slug</label>
<input class="form-control" type="text" name="slug" id="slug" value="{{ old('slug', $post->slug) }}">

<label for="category_id">Categoria</label>
<select class="form-control" name="category_id" id="category_id">
    <option value="">Seleccione una categoria</option>
    @foreach ($categories as $name => $id)
          <option {{ old('category_id', 'post->category_id') == $id 'selected' : '' }} value="{{ $id }}">
            {{ $name}}</option>
    @endforeach
</select>

<label for="posted">Estado</label>
<select name="posted" id="posted">
    <option {{ old('posted', $post->posted) == 'not' ? 'selected' : '' }} value='not'>No publicado</option>
    <option {{ old('posted', $post->posted) == 'yes' ? 'selected' : '' }} value='yes'>Publicado</option>
</select>

<label for="content">Contenido</label>
<textarea class="form-control" name="content" id="content" cols="30" rows="10">{{ old('content', $post->content) }}</textarea>

<label for="description">Descripción</label>
<textarea class="form-control" name="description" id="description" cols="30" rows="10">{{ old('description', $post->description) }}</textarea>
<input class="btn btn-primary" type="submit" value="Guardar">