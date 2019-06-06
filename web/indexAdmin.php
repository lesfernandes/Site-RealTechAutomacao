<?php
	include "headerAdmin.php";
?>
<div class="contact" id="contact">
         <div class="container">
            <h3 class="title clr title-fale">Inserir Fotos</h3>
            <div class=" contact-form col-lg-12 col-md-12 col-sm-12">
               <form action="php/logar.php" method="post">
                  <div class="row contact-bothside-agileinfo">
                     <div class="col-md-6 col-sm-6 col-xs-6 form-right form-left">
                        <input type="email" name="email" placeholder="E-mail" required="">
                     </div>
                     <div class="col-md-6 col-sm-6 col-xs-6 form-right ">
                        <input type="password" name="senha" placeholder="Senha" required="">
                     </div>
                     <input type="submit" value="ENTRAR">
                  </div>
               </form>
            </div>
         </div>
      </div>
<?php
	include "footerAdmin.php";
?>