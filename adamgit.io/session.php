<?php  session_start();
if(!isset($_SESSION['strColourBg']))  $_SESSION['strColourBg'] = "red";  
 
if(!isset($_SESSION['strColourFg'])) $_SESSION['strColourFg'] = "yellow";  

if(isset($_POST["submit"]) ) {
$strColourBg = $_POST["strNewBg"];
$strColourFg = $_POST["strNewFg"];
$_SESSION['strColourBg'] = $strColourBg;
$_SESSION['strColourFg'] = $strColourFg;  
}
else {
$strColourBg = $_SESSION['strColourBg'];
$strColourFg = $_SESSION['strColourFg'];

}
?>

<head>
    <style type="text/css">
    body {
        background-color: <?php echo $strColourBg ?>
    }

    p {
        color: <?php echo $strColourFg?>
    }

    h2 {
        color: <?php echo $strColourFg?>
    }
    </style>
    <link rel="stylesheet" type="text/css" href="css/stylePHPsesh.css">
</head>

<body>
    <h2>h2 colour</h2>
    <form action='<?php echo $SERVER["PHP_SELF"] ?>' method='post'>
        <label for="strNewBg"> Background colour: </label>
        <select name='strNewBg' id='strNewBg'>
            <option>red</option> ... <option>grey</option> ... <option>blue</option>
        </select>
        <label for="strNewFg"> Text colour: </label>
        <select name='strNewFg' id='strNewFg'>
            <option>yellow</option> ... <option>grey</option>
        </select>
        <input type='submit' name='submit' />
    </form>
    <?php include 'navMenu.php'; ?>
</body>