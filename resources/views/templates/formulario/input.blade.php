<label class="{{$class ?? null}}">
    <span>{{$label ?? $input ?? "Erro (safado)"}}</span>
    {!!Form::text($input,$value ?? null,$attributes)!!}
</label>