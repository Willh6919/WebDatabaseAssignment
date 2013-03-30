<?php
$title = "Add new";
require_once 'head.php';

echo <<<_END

</div>
<div class="row">
    <div class="span4 offset4">
<form name="Adminlogin" method="post" action="adminRegistration.php">
<fieldset> 
<legend> Admin Registration </legend>
    <ol>
        <li>
            
            <label for=fname>  First name </label>
                <input id=fname name=fname type=text min="3" max="24" require>
            <label for=sname>  Surname</label>
                <input id=sname name=sname type=text min="3" max="24" require>
            <label for=username>  Username </label>
                <input id=username name=username type=text min="6" max="14" require autofocus>
            <label for=email> Email </label> 
                <input id=email name=email type=text min="6" max="16" required>
            <p> Password will be assigned and sent via email </p
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
