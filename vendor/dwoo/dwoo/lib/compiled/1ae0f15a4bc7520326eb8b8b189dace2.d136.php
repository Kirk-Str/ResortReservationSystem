<?php
/* template head */
/* end template head */ ob_start(); /* template body */ ?><table width="100%" cellspacing="0" cellpadding="0" border="0" bgcolor="#ffffff">
    <tbody>
        <tr>
        <td   align="center" height="26">
                <div style="MARGIN-LEFT: 10px; MARGIN-RIGHT: 10px" ><b><font face="Verdana" color="#001F3E" size="4">Hi, <?php echo $this->scope["guest_name"];?>!</font></b>
            </div>
            </td>
        </tr>
        <tr>
        <td   align="center" height="26">
                <p style="MARGIN-LEFT: 10px; MARGIN-RIGHT: 10px"  ><font face="Verdana" color="#001F3E" size="1">Thanks for signing up!, We at Orca Beach Resort can't wait to serve you the best of what we've got.
                </font>
            </p>
            </td>
        </tr>
        <tr>
        <tr>
            <td align="center" height="200">
                <img src="http://orcabeach.ezyro.com/assets/images/logosicons/cake.png" height="200px" width="200px" border="0" alt="Orca Beach Resort Logo"/> 
            </td>
        </tr>
    </tbody>
</table><?php  /* end template body */
return $this->buffer . ob_get_clean();
?>