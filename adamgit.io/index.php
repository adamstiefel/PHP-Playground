<!DOCTYPE html>
<html>

<head>
    <style>
    #btnList {
        margin-top: 5%;
    }

    body {
        background-color: linen;
        margin-left: 30px;
    }

    #submitLabel,
    .btnStyle {
        padding: 5px;
        background-color: wheat;
        color: rgb(80, 25, 182);
        border-radius: 10px;
    }

    #submitLabel:hover,
    .btnStyle:hover {
        background-color: purple;
        color: cornsilk;
    }

    #nameInput {
        padding: 5px;

        color: rgb(80, 25, 182);
        border-radius: 10px;
        border-color: #511ab6;

    }

    #btnLeft {
        margin-right: 5%;
    }
    </style>
    <link rel="stylesheet" type="text/css" href="css/stylePHP.css">
    <script>
    function clearForm() {
        document.querySelector("#nameInput").value = "";
        return false;

    });
    </script>



</head>

<body>
    <h1>PHP Homepage</h1>
    <?php
    echo "Hello World!";
    ?>
    <p> <a href="session.php">Fun!</a></p>
    <form id="phpForm" action="server.php" method="post">
        <label id="nameLabel" for="name">Name</label><br><br>
        <input id="nameInput" type="text" name="name" placeholder="Name"><br><br>
        <input id="submitLabel" type="submit" name="submit" value="Submit" onclick=" return clearForm()">
    </form>

    <?php include 'navMenu.php'; ?>


    <form id="fileForm" action="upload.php" method="post" enctype="multipart/form-data">
        Select image to upload:
        <input type="file" name="fileToUpload" id="fileToUpload">
        <input class="btnStyle" type="submit" value="Upload Image" name="submit">
    </form>

    <div id="btnList">
        <button id="btnLeft" class="btnStyle" onclick="document.location='index2.php'">Try Me</button>
        <button class="btnStyle" onclick="document.location='login1.php'">Login</button>

    </div>






</body>

</html>