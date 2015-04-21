<div>
    Pour vous inscrire veuillez remplir ce formulaire :
</div>
<div>
    @if ($errors->count() > 0)
        <div>
            <div>
                @foreach($errors->all() as $message)
                    {{ $message }}<br />
                @endforeach
            </div>
        </div>
    @endif
    <div>
        {{ Form::open(array('url' => 'auth/inscription', 'method' => 'POST')) }}
        <div class="{{ $errors->has('username') ? 'error' : '' }}">
            {{ Form::label('username', 'Pseudo :', array('class' => 'col-md-4 control-label')) }}
            {{ Form::text('username', '', $attributes = array('class' => 'form-control')) }}
        </div>
        <div class=" {{ $errors->has('email') ? 'error' : '' }}">
            {{ Form::label('email', 'Mail :', array('class' => 'col-md-4 control-label')) }}
            {{ Form::text('email', '', $attributes = array('class' => 'form-control')) }}
        </div>
        <div class=" {{ $errors->has('password') ? 'error' : '' }}">
            {{ Form::label('password', 'Mot de passe :', array('class' => 'col-md-4 control-label')) }}
            <div>
                {{ Form::password('password', $attributes = array('class' => 'form-control')) }}
            </div>
        </div>
        <div>
            {{ Form::label('password_confirmation', 'Confirmation passe :', array('class' => 'col-md-4 control-label')) }}
            {{ Form::password('password_confirmation', $attributes = array('class' => 'form-control')) }}
        </div>
        <div>
            {{ Form::submit('Envoyer') }}
        </div>
        {{ Form::close()}}
    </div>
</div>