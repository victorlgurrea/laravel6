
    <div class="row mt-2">
        <div class="col-12 text-right">
            <a type="button" href="{{ route('post.index') }}" class="btn bt-sm btn-outline-info">Volver</a>
        </div>
        <div class="col-12 mt-2">
                @csrf
                <div class="form-group">
                    <label for="title">Titulo</label>
                    <input type="text" class="form-control" id="title" aria-describedby="titleHelp" placeholder="Titulo..." name="title" value="{{ old('title', $post->title) }}">
                </div>
                <div class="form-group">
                    <label for="url_clean">Url limpia</label>
                    <input type="text" class="form-control" id="url_clean" aria-describedby="url_cleanHelp" placeholder="Url..." name="url_clean" value="{{ old('url_clean', $post->url_clean) }}">
                </div>
                <div class="form-group">
                    <label for="category_id">Categoria</label>
                    <select class="form-control" name="category_id" id="category_id">
                        @foreach ($categories as $title => $id)
                            <option value="{{ $id }}" {{ old('category_id', $post->category_id) == $id ? 'selected' : '' }} >{{$title}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="posted">Posteado</label>
                    <select class="form-control" name="posted" id="posted">
                        @include('dashboard.partials.option-yes-no', ['posted' => old('posted', $post->posted)])
                    </select>
                </div>
                <div class="form-group">
                    <label for="contenido">Contenido</label>
                    <textarea class="form-control" id="content" name="content" rows="3">{{ old('content', $post->content) }}</textarea>
                </div>
                <button type="submit" class="btn btn-outline-primary">Enviar</button>
        </div>
    </div>
                <script>
                        ClassicEditor
                                .create( document.querySelector( '#content' ) )
                                .then( editor => {
                                        console.log( editor );
                                } )
                                .catch( error => {
                                        console.error( error );
                                } );
                </script>

