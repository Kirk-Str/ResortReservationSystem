<?php
/* template head */
/* end template head */ ob_start(); /* template body */ ?><html style="background: #DDD">
    <head>
       <title></title>
       <meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
    </head>
    <body data-gr-c-s-loaded="true" bgcolor="#ffffff">
       <br>
       <table style="border: 1px solid #EEE"  cellspacing="0" cellpadding="0" align="center">
          <tbody>
             <tr>
                <td>
                   <div align="center">
                      <table cellspacing="0" cellpadding="0" border="0" bgcolor="#ffffff">
                         <tbody>
                            <tr>
                               <td width="217" height="180">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
                                  <img src="http://orcabeach.ezyro.com/assets/images/logosicons/orcalogo.jpg" border="0"> 
                               </td>
                               <td width="400" height="180">
                                  <img src="" width="400" height="0" border="0"> 
                               </td>
                            </tr>
                         </tbody>
                      </table>
                      <center>
                      </center>
                      <table  cellspacing="0" cellpadding="0" border="0" bgcolor="#ffffff">
                         <tbody>
                            <tr>
                               <td bordercolor="#fefcf5" colspan="2" width="616" valign="top"align="left">
                                  <p style="MARGIN: 10px 6px 5px"><font size="1" face="Verdana" color="#001F3E"><?php echo $this->scope["summary"];?><br><br> 
                                     </font>
                                  </p>
                               </td>
                            </tr>
                            <tr>
                               <td rowspan="4" width="466" bgcolor="#ffffff">
                                  <div align="left">
                                     <?php echo $this->scope["main_content"];?>
                                  </div>
                                  <div align="left">
                                     <?php echo $this->scope["sub_content"];?>
                                  </div>
                               </td>
                               <td width="148" valign="center" height="100" align="right"></td>
                            </tr>
                            <tr>
                               <td width="148" valign="center" height="100" align="right"></td>
                            </tr>
                            <tr>
                               <td width="148" valign="center" height="100" align="right"></td>
                            </tr>
                            <tr>
                               <td width="148" valign="center" height="100" align="right"></td>
                            </tr>
                            <tr>
                               <td colspan="2" width="616" height="26" bgcolor="#435fbb">
                                  <p align="center"><font size="1" face="Verdana" color="#ffffff">
                                     Orca Beach Resort Ltd.&nbsp;|&nbsp;1400 E. Southern Ave.|&nbsp;Puttalam, Srilanka&nbsp; | <a href="http://orcabeach.ezyro.com" target="blank"><font color="#ffffff">www.orcabeach.ezyro.com</font></a></font>
                                  </p>
                                  <font size="1" face="Verdana" color="#ffffff">
                                  </font>
                               </td>
                            </tr>
                         </tbody>
                      </table>
                   </div>
                </td>
             </tr>
          </tbody>
       </table>
    </body>
 </html>
 
 <?php  /* end template body */
return $this->buffer . ob_get_clean();
?>