<html>
<head>
    <title>We git your  CV</title>
    <style>
        span.required {
            color: red;
        }
    </style>
</head>
<body>
<table>
    <tr>
        <td>Email:</td>
        <td><?php echo htmlspecialchars($email , ENT_QUOTES)?></td>
    </tr>

    <tr>
        <td>Mobile:</td>
        <td><?php echo htmlspecialchars($mobile , ENT_QUOTES)?></td>
    </tr>

    <tr>
        <td>City:</td>
        <td><?php echo htmlspecialchars($city , ENT_QUOTES)?></td>
    </tr>

    <tr>
        <td>State:</td>
        <td><?php echo htmlspecialchars($state , ENT_QUOTES)?></td>
    </tr>



</table>
</body>
</html>