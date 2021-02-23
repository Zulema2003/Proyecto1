{include file="Cabeceras/Header.tpl"}

<div>
    <h1 align="center">INGRESO</h1>
</div align="center">

    <div class="row">
    <form  method="post" action="?controller=User&method=BuscarUsuario" class="col s12">

    <div class="row">
        <div class="input-field col s8" >
          <input id="email" type="email" class="validate" required="" name="email"/>
          <label for="email">Email</label>
        </div>
    </div>

      <div class="row">
         <div class="input-field col s8">
             <input id="password" type="password" class="validate" required="" name="pass"/>
             <label for="password">Password</label>
            </div>
      </div>

      <div class="row">
            <div class="input-field col s12">
                <input class="btn waves-effect waves-light" type="submit" name="action"/>
            </div>
      </div>

    </form>
</div>
{include file="Cabeceras/Footer.tpl"}