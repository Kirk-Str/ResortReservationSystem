<?php
/* template head */
/* end template head */ ob_start(); /* template body */ ?><table width="500" cellspacing="0" cellpadding="0" border="0" bgcolor="#ffffff">
    <tbody>
        <tr>
            <td colspan="2" width="446" valign="top" height="18">
                <p style="MARGIN-LEFT: 6px; MARGIN-RIGHT: 6px"><b><font face="Verdana" color="#001F3E" size="1">OFFER REQUEST INFORMATION<br></font></b>
                </p>
            </td>
        </tr>
        <tr>
            <td width="180" valign="top" height="10">
                <p style="MARGIN-LEFT: 10px; MARGIN-RIGHT: 6px"><font face="Verdana" color="#001F3E" size="1">Request No.:</font></p>
            </td>
        <td width="291" valign="top" height="10"><font face="Verdana" color="#001F3E" size="1"><?php echo $this->scope["request_id"];?></font></td>
        </tr>
        <tr>
        <td width="180" valign="top" height="10">
            <p style="MARGIN-LEFT: 10px; MARGIN-RIGHT: 6px"><font face="Verdana" color="#001F3E" size="1">Guest Name:</font></p>
        </td>
        <td width="291" valign="top" height="10"><font face="Verdana" color="#001F3E" size="1"><?php echo $this->scope["guest_name"];?></font>
        </td>
        </tr>
        <tr>
        <td width="180" valign="top" height="10">
            <p style="MARGIN-LEFT: 10px; MARGIN-RIGHT: 6px"><font face="Verdana" color="#001F3E" size="1">Event Start Date:</font></p>
        </td>
        <td width="291" valign="top" height="10"><font face="Verdana" color="#001F3E" size="1"><?php echo $this->scope["start_date"];?></font>
        </td>
        </tr>
        <tr>
        <td width="180" valign="top" height="10">
            <p style="MARGIN-LEFT: 10px; MARGIN-RIGHT: 6px"><font face="Verdana" color="#001F3E" size="1">Event End Date:</font></p>
        </td>
        <td width="291" valign="top" height="10"><font face="Verdana" color="#001F3E" size="1"><?php echo $this->scope["end_date"];?></font>
        </td>
        </tr>
        <tr>
        <td width="180" valign="top" height="10">
            <p style="MARGIN-LEFT: 10px; MARGIN-RIGHT: 6px"><font face="Verdana" color="#001F3E" size="1">No. of Guests:</font></p>
        </td>
        <td width="291" valign="top" height="10"><font face="Verdana" color="#001F3E" size="1"><?php echo $this->scope["guests"];?></font></td>
        </tr>
        <tr>
            <td width="180" valign="top" height="10">
                <p style="MARGIN-LEFT: 10px; MARGIN-RIGHT: 6px"><font face="Verdana" color="#001F3E" size="1">Notes:</font></p>
            </td>
            <td width="291" valign="top" height="10"><font face="Verdana" color="#001F3E" size="1"><?php echo $this->scope["additional_request"];?></font></td>
        </tr>
    </tbody>
</table><?php  /* end template body */
return $this->buffer . ob_get_clean();
?>