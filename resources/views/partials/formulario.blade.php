{{ csrf_field() }}
<div class="form__createUsers__inputContent">
	<label class="form__createUsers__label" for="">Nombres</label>
	<input name="name" class="form__createUsers__input shadow" type="text" placeholder="Miguel Bonifaz" value="{{$user->name ?? old('name')}}">
	@include('partials.errorValidation', ['name' => 'name'])
</div>
<div class="form__createUsers__inputContent">
	<label class="form__createUsers__label" for="">Correo</label>
	<input name="email" class="form__createUsers__input shadow" type="text" placeholder="miguelbonifaz126@gmail.com" value="{{$user->email ?? old('email')}}">
	@include('partials.errorValidation', ['name' => 'email'])
</div>
<div class="form__createUsers__inputContent gc-13">
	<label class="form__createUsers__label" for="">Escoje una profesión</label>
	<select name="profesiones" class="form__createUsers__input shadow">
		@foreach ($profesiones as $profesion)
			<option value="{{$profesion->id}}" @if($user != false){{$user->profesion_id == $profesion->id ? 'selected' : ''}}@endif>{{$profesion->profesion}}</option>
		@endforeach
	</select>
	@include('partials.errorValidation', ['name' => 'profesiones'])
</div>
<div class="form__createUsers__inputContent gc-13">
	<label class="form__createUsers__label" for="">Cuentanos... ¿Porque te apasiona esta carrera?</label>
	<textarea class="form__createUsers__input shadow" name="asunto" id="" cols="30" rows="10">{{$user->asunto ?? old('asunto')}}</textarea>
	@include('partials.errorValidation', ['name' => 'asunto'])
</div>
<div class="text-right gc-13">
	<button class="form__CreateUsers__submit" type="submit">{{$btn}}</button>
</div>