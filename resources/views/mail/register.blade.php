<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Souq Gold Market</title>
</head>
<body>
<div bgcolor="#efefef" style="background-color: rgb(239, 239, 239); font-family: Arial,Arial,Arial,Tahoma,Helvetica,sans-serif; font-size: 16px;">
    <table style="background-color:#efefef" width="100%" cellspacing="0" cellpadding="0" border="0" bgcolor="#efefef" align="center">
        <tbody><tr>
            <td style="background-color:#efefef" width="1.5%">&nbsp;</td>
            <td style="background-color:#efefef" width="97%" bgcolor="#efefef" align="center">
                <table style="background-color:#efefef" width="97%" cellspacing="0" cellpadding="0" border="0">
                    <tbody><tr>
                        <td valign="top" align="center">
                            <table width="640" cellspacing="0" cellpadding="0" border="0" align="center">
                                <tbody><tr><td style="height:15px" valign="top"></td></tr></tbody></table>
                        </td>
                    </tr>
                    <tr>
                        <td valign="top" align="center">
                            <table  style="background-color:#ffffff" width="640" cellspacing="0" cellpadding="0" border="0" align="center">
                                <tbody><tr>
                                    <td valign="top">
                                        <table style="margin-bottom:0px" width="560" cellspacing="0" cellpadding="0" border="0" align="center">
                                            <tbody><tr>
                                                <td valign="top" height="20">
                                                    <table style="background-color:#ffffff" width="600" height="11" cellspacing="0" cellpadding="0" border="0" bgcolor="#ffffff" align="center">
                                                        <tbody><tr>
                                                            <td valign="top" height="11">&nbsp;</td>
                                                        </tr>
                                                        </tbody></table>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td valign="bottom" align="center">
                                                    <table cellspacing="0" cellpadding="0" border="0" align="center" style="font-family:Arial,Tahoma,Helvetica,sans-serif; color:#4c505d;">
                                                        <tbody><tr>
                                                            <td valign="bottom" align="center"><a href="">

                                                                    <img style="height:auto; width:350px" alt="equasio" src="{{ asset('public/assets/logo/favicon.png')}}" style="margin-bottom:0px" title="equasio" vspace="0" hspace="0" border="0"></a></td>
                                                        </tr>
                                                        </tbody></table>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td valign="top" height="20">&nbsp;</td>
                                            </tr>
                                            </tbody></table>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td align="top" align="center">&nbsp;</td>
                    </tr>
                    <tr>
                        <td  valign="top" align="center">
                            <table  style="background-color:#ffffff" width="640" cellspacing="0" cellpadding="0" border="0" align="center">
                                <tbody><tr>
                                    <td valign="top" height="30" align="center">&nbsp;</td>
                                </tr>
                                <tr>
                                    <td valign="top" align="center">
                                        <table style="background-color:#ffffff" width="550" cellspacing="0" cellpadding="0" border="0" bgcolor="#ffffff" align="center">
                                            <tbody><tr>
                                                <td valign="top" align="center">
                                                    <table width="100%" cellspacing="0" cellpadding="0" border="0" align="center" style="font-family:Arial,Tahoma,Helvetica,sans-serif; color:#4c505d;">
                                                        <tbody><tr>
                                                            <td style="font-size:16px;line-height:22px;font-family:Arial,Tahoma,Helvetica,sans-serif;color:#4c505d;font-weight:300;text-align:left;letter-spacing:-0.1px;" align="center">
                                                                <p>
                                                                    Hi {{ isset( $user['first_name'] ) ? $user['first_name'] : '' }},
                                                                </p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td height="10">&nbsp;</td>
                                                        </tr>
                                                        <tr>
                                                            <td style="text-align:left;font-size:16px;color:#4c505d;line-height:20px" >
                                                                <p style="color:#4c505d;margin-top:0px;color:#4c505d; font-family:Arial,Tahoma,Helvetica,sans-serif;">
                                                                    You are now registered at MateFinder.
                                                                    <br>
                                                                    Details:
                                                                </p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td height="10">&nbsp;</td>
                                                        </tr>
                                                        <tr>
                                                            <td style="text-align:left;font-size:16px;color:#4c505d;line-height:20px" >
                                                                <p style="color:#4c505d;margin-top:0px;color:#4c505d; font-family:Arial,Tahoma,Helvetica,sans-serif;">
                                                                    <strong>
                                                                        Name:
                                                                    </strong>
                                                                    {{ isset( $user['first_name'] ) ? $user['first_name'] : '' }}
                                                                </p>
                                                                <p style="color:#4c505d;margin-top:0px;color:#4c505d; font-family:Arial,Tahoma,Helvetica,sans-serif;">
                                                                    <strong>
                                                                        Email:
                                                                    </strong>
                                                                    {{ isset( $user['email'] ) ? $user['email'] : '' }}
                                                                </p>
                                                                <p style="color:#4c505d;margin-top:0px;color:#4c505d; font-family:Arial,Tahoma,Helvetica,sans-serif;">
                                                                    <strong>
                                                                        <a href="{{ route( 'verified_user', $user['id'] ) }}">
                                                                            <button>
                                                                                CLick Here To Verified
                                                                            </button>
                                                                        </a>
                                                                    </strong>
                                                                </p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td height="15">&nbsp;</td>
                                                        </tr>
                                                        <tr>
                                                            <td style="text-align:left;font-size:16px;color:#4c505d;line-height:20px" >
                                                                <p style="color:#4c505d;margin-top:0px;color:#4c505d; font-family:Arial,Tahoma,Helvetica,sans-serif;">
                                                                    We hope you enjoy your stay on Souq Gold Market.
                                                                </p>
                                                                <br>
                                                                <p style="color:#4c505d;margin-top:0px;color:#4c505d; font-family:Arial,Tahoma,Helvetica,sans-serif;">
                                                                    Regards,
                                                                </p>
                                                                <p style="color:#4c505d;margin-top:0px;color:#4c505d; font-family:Arial,Tahoma,Helvetica,sans-serif;">
                                                                    The Souq Gold Market Team.
                                                                </p>
                                                            </td>
                                                        </tr>


                                                        </tbody>
                                                    </table>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td height="40">&nbsp;</td>
                                            </tr>
                                            </tbody></table>
                                    </td>
                                </tr>
                                <tr>
                                    <td  style="background:#efefef" valign="top" height="15" align="center">&nbsp;</td>
                                </tr>
                                <tr>
                                    <td align="center">
                                        <table  style="background-color:#c3c3c3; color:#4c505d; font-family:Arial,Tahoma,Helvetica,sans-serif;" width="640" cellspacing="0" cellpadding="0" border="0" align="center">
                                            <tbody><tr>
                                                <td align="center">
                                                    <table width="100%" cellspacing="0" cellpadding="0" border="0" bgcolor="#efefef" align="center">
                                                        <tbody>
                                                        <tr>
                                                            <td align="center">
                                                                <table width="110" cellspacing="0" cellpadding="0" border="0" align="center">
                                                                    <tbody><tr>
                                                                        <td style="border-top:0px solid #b7b7b7;margin:0;font-size:14px" width="110" align="center">&nbsp;</td>
                                                                    </tr>
                                                                    </tbody></table>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="font-size:11px;line-height:18px;font-family:Arial,Tahoma,Helvetica,sans-serif;color:#8a8c93;font-weight:300;text-align:center" height="45">
                                                                © {{ date('Y') }} Souq Gold Market. Copyrights</td>
                                                        </tr>
                                                        </tbody></table>
                                                </td>
                                            </tr>
                                            </tbody></table>
                                    </td>
                                </tr>
                                </tbody></table>
                        </td>
                        <td style="background-color:#efefef" width="1.5%">&nbsp;</td>
                    </tr>
                    </tbody></table>
            </td>
        </tr>
        </tbody></table>
</div>
</body>
</html>
