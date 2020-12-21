<form action="{{ route('post.store')}}" method="post">
    @csrf
    <div class="form-group">
        <label for="title">Titulo</label>
        <input type="text" class="form-control" id="title" aria-describedby="titleHelp" placeholder="Titulo..." name="title">
    </div>
    <div class="form-group">
        <label for="url_clean">Url limpia</label>
        <input type="text" class="form-control" id="url_clean" aria-describedby="url_cleanHelp" placeholder="Url..." name="url_clean">
    </div>
    <div class="form-group">
        <label for="contenido">Contenido</label>
        <textarea class="form-control" id="content" name="content" rows="3"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Enviar</button>
</form>