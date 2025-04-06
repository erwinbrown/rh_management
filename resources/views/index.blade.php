<div>
   {{ $valor }}
   <hr><br>
 
   <form action="{{ route('index-store') }}" method="post">
      @csrf

      <input type="hidden" name="pepe" value="s">
      <p>HOLA fORM</p>
      <button type="submit">DEFINIR SENHA</button>
   </form> 
</div>
