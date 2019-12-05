<?php

    // include("includes/isAdmin.php");
    include("include/connect.php");

    // if($isAdmin) {
    //     // Add an article
    //     // initialize article form data 
    //     $programData = array(
    //         "programName" => "",
    //         "address" => "",
    //         "description" => "",
    //         "city" => "",
    //         "phone" => "",
    //         "hours" => "",
    //         "image" => ""
    //     );

    //     // fetch article by id if provided in URL and override article form data
    //     if(isset($_GET["programID"])) {

            // fetch article
            $id = $_GET["programID"];
            $stmt = $pdo->prepare("SELECT * FROM `foodprograms` WHERE `programID` = '$programID';");
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
            
            // change form action to call update article
            $programFormAction = "handlers/updateProgram.php?programID=$programID";
            // Edit Program details page header as a literal string; is changeable
            $pageHeader = "Edit Program Details";
        // }
//     } else {
//         header("Location:/campus-eats/search.php");
//     }
// ?>

<!DOCTYPE html>
    <html lang="en">
    <head>
        <?php include("includes/head.php");?>
        <title>Program Form</title>
    </head>

    <body>
        <?php include("includes/header.php"); ?> 	
    	<main>
            <h1><?php echo $pageHeader ?></h1>
            <form
                action="<?php echo $programFormAction?>"
                method="POST"
                enctype="multipart/form-data"
            >  
                <h1 id="welcome">Program Register</h1>
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
                <label for="image"><h3>Upload an image:</h3> </label>
                <input id="image" name="image" type="file" value="image"/> 
                <input type="submit" name="upload_image" value="Submit">
            </form>
		</main>
		<?php include("includes/footer.php"); ?> 
    </body>
</html/>