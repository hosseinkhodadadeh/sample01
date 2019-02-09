<html>
<head>
    <title>Submit your cv</title>
    <style>
        span.required {
            color: red;
        }
    </style>
</head>
<body>
<form action="index.php?action=save" method="post"  enctype="multipart/form-data">
    <table>
        <tr>
            <td><label for="txtName">Name <span class="required">*</span></label></td>
            <td><input type="text" id="txtName" name="name"></td>
        </tr>

        <tr>
            <td><label for="txtEmail">Email<span class="required">*</span></label></td>
            <td><input type="text" id="txtEmail" name="email"></td>
        </tr>

        <tr>
            <td><label for="txtEducation">Education<span class="required">*</span></label></td>
            <td><input type="text" id="txtEducation" name="education"></td>
        </tr>

        <tr>
            <td><label for="txtExperience">Experience<span class="required">*</span></label></td>
            <td><input type="number" id="txtExperience" name="experience" min="0" max="100"></td>
        </tr>


        <tr>
            <td><label for="txtMobileNumber">Mobile<span class="required">*</span></label></td>
            <td><input type="text" id="txtMobileNumber" name="mobile" ></td>
        </tr>

        <tr>
            <td><label for="txtCity">City<span class="required">*</span></label></td>
            <td><input type="text" id="txtCity" name="city" ></td>
        </tr>

        <tr>
            <td><label for="txtState">State<span class="required">*</span></label></td>
            <td><input type="text" id="txtState" name="state"  ></td>
        </tr>
        <tr>
            <td><label for="txtcv">CV<span class="required">*</span></label></td>
            <td><input type="file" id="txtcv" name="cv" min="0" max="100"></td>
        </tr>

        <tr>

            <td colspan="2"><input type="submit"  value="Send Your CV"></td>
        </tr>
    </table>
</form>
</body>
</html>