<?php session_start();

    // include("include/isAdmin.php");
    include("include/connect.php");

    // if($isAdmin) {
        // initialize program form data 
        $programData = array(
            "programName" => "",
            "password" => "",
            "email" => "",
            "description" => "",
            "address" => "",
            "addressDetails" => "",
            "city" => "",
            "phone" => "",
            "hours" => "",
            "image" => ""
        );

        // fetch program by id if provided in URL and override program form data
        if(isset($_GET["programID"])) {

            // fetch program via programID
            $id = $_GET["programID"];
            // $stmt = $pdo->prepare("SELECT * FROM `foodprograms` WHERE `programID` = '$programID';");
            // hard-coded atm
            $stmt = $pdo->prepare("SELECT * FROM `foodprograms` WHERE `programID`='11'");
            $stmt->execute();
            $row = $stmt->fetch();

            // overridering default with the fetched program details data
            $programData['programName'] = $row['programName'];
            $programData['address'] = $row['address'];
            $programData['description'] = $row['description'];
            $programData['city'] = $row['city'];
            $programData['phone'] = $row['phone'];
            $programData['hours'] = $row['hours'];
            $programData['image'] = $row['image'];
            
            // program form/ dashboard is handled by updateProgram.php and is
            // assigned to $programFormAction
            $programFormAction = "handlers/updateProgram.php?programID=$programID";
            // Edit Program details page header as a literal string; is changeable
            $pageHeader = "Edit Program Details";
        }
    // } else {
    //     header("Location:/campus-eats/search.php");
    // }
?>

<!DOCTYPE html>
    <html lang="en">
    <head>
        <title>Program Form</title>
        <?php include("include/head.php");?>
        <link rel="stylesheet" type="text/css" href="css/program-form.css">
    </head>

    <body>
        <?php include("include/header.php"); ?> 	
    <main>
            <div class="ce-container">
            <h3 id="welcome">Program Register</h3>
                <form
                    class="form__container"
                    action="<?php echo $programFormAction?>"
                    method="POST"
                    enctype="multipart/form-data"
                >  
                    
                    <br>
                    <label for="programName">Program Name: </label>
                    <input 
                        class="textfield" 
                        name="programName" 
                        type="text" 
                        required 
                        value="<?php echo($programData['programName']);?>"/>
                    <label for="email">Email: </label>
                    <input 
                        class="textfield" 
                        name="email" 
                        type="text" 
                        required 
                        value="<?php echo($programData['email']);?>"/>
                    <label for="password">Password: </label>
                    <input 
                        class="textfield" 
                        name="password" 
                        type="text" 
                        required 
                        value="<?php echo($programData['password']);?>"/>
                    <label for="description">Description: </label>
                    <input 
                        class="textfield" 
                        name="description" 
                        type="text" 
                        required 
                        value="<?php echo($programData['description']);?>"/>
                    <label for="address">Street Address: </label>
                    <input 
                        class="textfield" 
                        name="address" 
                        type="text" 
                        required 
                        value="<?php echo($programData['address']);?>"/>
                    <label for="addressDetails">Location on campus: </label>
                    <input 
                        class="textfield" 
                        name="description" 
                        type="text" 
                        required 
                        value="<?php echo($programData['addressDetails']);?>"/>
                    <label for="email">City: </label>
                    <input 
                        class="textfield" 
                        name="city" 
                        type="text" 
                        required 
                        value="<?php echo($programData['city']);?>"/>
                    <label for="phone">Phone: </label>
                    <input 
                        class="textfield" 
                        name="phone" 
                        type="text" 
                        required 
                        value="<?php echo($programData['phone']);?>"/>
                    <label for="hours">Hours: </label>
                    <input 
                        class="textfield" 
                        name="email" 
                        type="text" 
                        required 
                        value="<?php echo($programData['hours']);?>"/>
                    <label for="image"><h4>Upload an image:</h4> </label>
                    <input id="image" name="image" type="file" value="image"/> 
                    <input type="submit" name="upload_image" value="Submit" class="ce-button ce-button-primary">
                </form>
            </div>
		</main>
		<?php include("include/footer.php"); ?> 
    </body>
</html/>