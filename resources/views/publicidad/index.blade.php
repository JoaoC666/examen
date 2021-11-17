<a href="/publicidad/create" >nuevo</a>
@if ($ms=Session::get('success'))

<div class="alert alert-success">
<strong>{{ $ms }}</strong>

</div>
@endif

@if ($msg=Session::get('borrado'))
<div class="alert alert-success">
<strong>{{ $msg }}</strong>
</div>
@endif


<div class="row">
    @foreach ($lista as $item )
      
    <div>        
      <span>  {{ $item ->titulo}}</span>
    </div>

    <div>        
        <span>  {{ $item ->anuncio }}</span>
      </div>

      <div>        
        <span>  {{ $item ->celular }}</span>
      </div>

      <div>        
        <span>  {{ $item ->autor }}</span>
      </div>
      
      <div>        
        <span>  publicidad valida hasta:{{ $item ->fechalmit }}</span>
      </div>
      <tr>
    <td>
      <form  action="{{route('publicidad.destroy',['id'=>$item->id])}} "method="post">
        @csrf
        @method('post')
        <button type="submit">Eliminar</button>
        </form>
    </td>
    </tr>
    <br>
        
    @endforeach

</div>