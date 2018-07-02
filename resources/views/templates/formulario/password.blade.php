<label class="{{$class ?? null}}">
    <span>{{$label ?? $input ?? "Erro (safado)"}}</span>
    {!!Form::password($input,$attributes)!!}
    
</label>