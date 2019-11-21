<?php include "view/header.php";?>
<form method="post" action="cliente">
<fieldset>

<!-- Form Name -->
<h2>LOGIN
SOU CLIENTE</h2>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Nome</label>  
  <div class="col-md-4">
  <input id="textinput" name="textinput" type="text" placeholder="Nome" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Password input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="passwordinput">Senha</label>
  <div class="col-md-4">
    <input id="passwordinput" name="passwordinput" type="password" placeholder="Senha" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="singlebutton">Login</label>
  <div class="col-md-4">
    <button id="singlebutton" name="singlebutton" class="btn btn-primary">Entrar</button>
  </div>
</div>

</fieldset>
</form>
<?php include "view/footer.php";?>
