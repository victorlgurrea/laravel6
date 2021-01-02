

    <div class="row mt-2">
        <div class="col-12 text-right">
            <a type="button" href="{{ route('user.index') }}" class="btn bt-sm btn-outline-info">Volver</a>
        </div>
        <div class="col-12 mt-2">
                @csrf
                <div class="form-group">
                    <label for="name">Nombre</label>
                    <input type="text" class="form-control" id="name" aria-describedby="nameHelp" placeholder="Nombre..." name="name" value="{{ old('name', $user->name) }}">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Email..." name="email" value="{{ old('email', $user->email) }}">
                </div>
                @if ($pass)
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" aria-describedby="passwordHelp" placeholder="Password..." name="password" value="{{ old('password', $user->password) }}">
                    </div>
                @endif

                <button type="submit" class="btn btn-outline-primary">Enviar</button>
        </div>
    </div>
