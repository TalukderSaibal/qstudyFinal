<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IEedge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title></title>
        <style></style>
    </head>
    <body style="height: 100%;margin: 0;padding: 0;width: 100%;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;background:url(https://q-study.com/assets/images/mail_bg.png) no-repeat top center #c3c3c3;">
        <table border="0" cellpadding="0" cellspacing="0" height="100%" width="100%" id="bodyTable">
    <tr>
        <td align="center" valign="top">
            <table style="background: #fff; width: 100%; max-width: 600px;" border="0" cellpadding="20" cellspacing="0" width="600" id="emailContainer">
                <tr>
                    <td align="center" valign="top">
                        <table border="0" cellpadding="20" cellspacing="0" width="100%" id="emailHeader">
                            <tr>
                                <td align="center" valign="top">
                                    <img src="https://q-study.com/assets/images/logo.png" alt="logo" height="97">
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td align="center" valign="top">
                        <table border="0" cellpadding="20" cellspacing="0" width="100%" id="emailBody">
                            <tr>
                                <td align="center" valign="top">
                                   <h1 style="display: block;margin: 0;padding:0;color: #202020;font-family: Helvetica;font-size: 26px;font-style: normal;font-weight: bold;line-height: 125%;letter-spacing: normal;text-align: left ;">Hello, {{userName}}</h1>
                                   <p style="line-height: 125%;margin: 10px 0;padding: 0;mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;color:#202020;font-family: Helvetica;font-size: 16px;text-align: left;">Congratulations for registration with Q-Study.<br>Your registration has been successfully completed.<br>&nbsp;</p>

                                     <p style="line-height: 125%;margin: 10px 0;padding: 0;mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;color: #202020;font-family: Helvetica;font-size: 16px;text-align: left;"><strong>See your details below</strong></p>
                                     <p style="line-height: 125%;margin: 10px 0;padding: 0;mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;color: #202020;font-family: Helvetica;font-size: 16px;text-align: left;">Username <span style="float:right">Password</span></p>

<p style="line-height: 125%;margin: 10px 0;padding: 0;mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;color: #202020;font-family: Helvetica;font-size: 16px;text-align: left;">{{userEmail}} <span style="float:right">{{userPassword}}</span></p>
<br>
 <?php if (isset($childInfo)) : ?>
<p style="text-align: left;font-family: Helvetica;font-size: 16px;color: #202020"><strong>Child info:</strong></p>

<?php foreach ($childInfo as $child) : ?>
<p style="line-height: 125%;margin: 10px 0;padding: 0;mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;color: #202020;font-family: Helvetica;font-size: 16px;text-align: left;">Username <span style="float:right">Password</span></p>

<p style="line-height: 125%;margin: 10px 0;padding: 0;mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;color:#202020;font-family: Helvetica;font-size: 16px;text-align: left;"><?php echo $child['childName']; ?> <span style="float:right"><?php echo $child['childPass']; ?></span></p>

<p style="line-height: 125%;margin: 10px 0;padding: 0;mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;color:#202020;font-family: Helvetica;font-size: 16px;text-align: left;">Reference Link <span style="float:right"><?php echo $child['refLink']; ?></span></p>


 <?php endforeach ?>


 <?php endif; ?>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td align="center" valign="top">
                        <table border="0" cellpadding="0" cellspacing="0" width="100%" id="emailFooter">
                            <tr>
                                <td align="center" valign="top">
                                  <p style="line-height: 125%;margin: 10px 0;padding: 0;mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;color: #202020;font-family: Helvetica;font-size: 16px;text-align: left;">Thanks for using the <a href="http://qstudy.com" style="color: red;mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;font-weight: normal;text-decoration: underline;">&nbsp; Q-Study.com</a></p>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr> 
            </table>
        </td>
    </tr>
</table>
    </body>
</html>