<!DOCTYPE html>
<html>
<head>
    <title>Green AP</title>
</head>
<body style="font-family: Arial, sans-serif;">

    <table cellpadding="0" cellspacing="0" width="100%" align="center" style="max-width: 600px; margin: auto;">
        <tr>
            <td style="padding: 20px; text-align: center; background-color: #2d2d2d;">
                <img src="cid:header.png" alt="Green AP Banner" style="max-width: 50%; height: auto;">
            </td>
        </tr>

        <tr>
            @yield('content')
        </tr>

        <tr>
            <td style="padding: 20px; text-align: center; background-color: #137497;">
                <p style="font-size: 12px; color: #ffffff;">
                    This is an automated email. Please do not reply directly to this message.
                </p>
            </td>
        </tr>
    </table>

</body>
</html>
