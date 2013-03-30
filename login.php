<?php
$title = "Login";
require_once 'head.php';
require_once 'connect/mysql_connect.php';



echo <<<_END
<div class="row">
    <div class="span4 offset4">
<form name="Adminlogin" method="post" action="processLogin.php">
<fieldset> 
<legend> Login </legend>
    <ol>
        <li>
            <label for=email> Email </label> 
                <input id=email name=email type=text min="6" max="16" required autofocus>
            <label for=pwd> Password </label> 
                <input id=password name=password type=password min="6" max="16" required> 
        </li>
   </ol>
</fieldset> 
<fieldset> 
    <button type=submit onclick="formhash(this.form, this.form.password);"> Enter</button> 
</fieldset>
</form> 
    </div>
<div class="span2">
    </div>
</div>
_END;

require_once 'footer.php';
?>

