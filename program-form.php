<?php session_start();

    include("include/isAdmin.php");
    include("include/connect.php");

    if($isAdmin) {


        $userID = $_SESSION['userID']; //2

        $stmt = $pdo->prepare("SELECT * FROM `foodprograms` WHERE `userID` = '$userID' ");
        $stmt->execute();
        $programData = $stmt->fetch();
        $programID = $programData['programID'];

        if(!$programData) {
            header("Location:/campus-eats/home.php");
        }
    }
?>

<!DOCTYPE html>
    <html lang="en">
    <head>
        <title>Update Program</title>
        <?php include("include/head.php");?>
        <link rel="stylesheet" type="text/css" href="css/program-form.css">
    </head>

    <body>
        <?php include("include/header.php"); ?> 	
    	<main class="ce-container">
            <div class="wrapper">
            <h3 id="welcome">Program Register</h3>
            <form
                action=<?php echo"handlers/updateProgram.php?programID=$programID"?>
                method="POST"
                enctype="multipart/form-data"
            >  
                <div>
                    <label for="programName">Program Name: </label><br>
                    <input 
                        class="textfield" 
                        name="programName" 
                        type="text" 
                        required 
                        value="<?php echo($programData['programName']);?>"/>
                </div>
                <div>
                    <label for="description">Description: </label><br>
                    <textarea
                        class="textfield" 
                        name="description" 
                        type="text" 
                        required 
                    >
                    <?php echo($programData['description']);?>
                </textarea>
                </div>
                <div>
                    <label for="address">Street Address: </label><br>
                    <input 
                        class="textfield" 
                        name="address" 
                        type="text" 
                        required 
                        value="<?php echo($programData['address']);?>"/>
                </div>
                <div>
                    <label for="addressDetails">Location on campus: </label><br>
                    <textarea 
                        class="textfield" 
                        name="addressDetails" 
                        type="text" 
                        required 
                    >
                        <?php echo($programData['addressDetails']);?>
                    </textarea>
                </div>
                <div>
                    <label for="email">City: </label><br>
                    <input 
                        class="textfield" 
                        name="city" 
                        type="text" 
                        required 
                        value="<?php echo($programData['city']);?>"/>
                </div>
                <div>
                    <label for="phone">Phone: </label><br>
                    <input 
                        class="textfield" 
                        name="phone" 
                        type="text" 
                        required 
                        value="<?php echo($programData['phone']);?>"/>
                </div>
                <div>
                    <label for="hours">Hours: </label><br>
                    <input 
                        class="textfield" 
                        name="hours" 
                        type="text" 
                        required 
                        value="<?php echo($programData['hours']);?>"/>
                </div>
                <div>
                    <label for="image"><h3>Upload an image:</h3> </label>
                    <?php echo $programData['image'] ?>
                    <input id="image" name="image" type="file" /><br>
                </div>
                <input id="submitBtn" type="submit" name="upload_image" value="Submit">
            </form>
            </div>
		</main>
		<?php include("include/footer.php"); ?> 
    </body>
</html/>