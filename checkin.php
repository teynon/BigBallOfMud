<?php 
    session_start();
    $title = "Check In - Joe's Car Shop";
    include "includes/init.php";
    include "includes/header.php";
    
    $errors = [];
    if (isset($_POST['check_in'])) {
        // Validation
        if (empty($_POST['name']))
            $errors[] = "Please enter a name.";
        
        if (empty($_POST['model']))
            $errors[] = "Please enter a model.";
        
        if (empty($_POST['year']))
            $errors[] = "Please enter a year.";
        
        if (empty($_POST['color']))
            $errors[] = "Please enter a color.";
        
        if (empty($errors)) {
            // Add a new user.
            $user = [
                "ID" => $_SESSION['customer_id']++,
                "Name" => $_POST['name'],
                "Make" => $_POST['make'],
                "Model" => $_POST['model'],
                "Year" => $_POST['year'],
                "Color" => $_POST['color'],
                "VisitReason" => $_POST['reason'],
                "Notes" => $_POST['notes']
            ];
            
            $_SESSION['customers'][] = $user;
            
            header("Location: index.php");
        }
    }
?>

<form class="form-horizontal" method="POST">
    <div class="header">
        <a href="index.php" class="btn pull-left btn-default">Home</a>
        <button type="submit" class="btn btn-success pull-right">Check In</button>
    </div>
    <br />
    <?php 
    if (!empty($errors)) {
        echo "<div class=\"alert alert-warning\">";
        foreach ($errors as $error) {
            echo $error . "<br />";
        }    
        echo "</div>";
    }
    ?>

    <div class="form-group">
        <label for="name" class="control-label">Name</label>
        <input type="text" class="form-control" id="name" name="name" />
    </div>
    <br />
    <div class="form-group">
        <div class="input-group">
            <div class="input-group-addon">Make</div>
            <select name="make" class="form-control">
                <option value="Alfa Romeo">Alfa Romeo</option>
                <option value="Aston Martin">Aston Martin</option>
                <option value="Audi">Audi</option>
                <option value="Bentley">Bentley</option>
                <option value="Benz">Benz</option>
                <option value="BMW">BMW</option>
                <option value="Bugatti">Bugatti</option>
                <option value="Cadillac">Cadillac</option>
                <option value="Chevrolet">Chevrolet</option>
                <option value="Chrysler">Chrysler</option>
                <option value="Citroen">Citroen</option>
                <option value="Corvette">Corvette</option>
                <option value="DAF">DAF</option>
                <option value="Dacia">Dacia</option>
                <option value="Daewoo">Daewoo</option>
                <option value="Daihatsu">Daihatsu</option>
                <option value="Datsun">Datsun</option>
                <option value="De Lorean">De Lorean</option>
                <option value="Dino">Dino</option>
                <option value="Dodge">Dodge</option>
                <option value="Farboud">Farboud</option>
                <option value="Ferrari">Ferrari</option>
                <option value="Fiat">Fiat</option>
                <option value="Ford">Ford</option>
                <option value="Honda">Honda</option>
                <option value="Hummer">Hummer</option>
                <option value="Hyundai">Hyundai</option>
                <option value="Jaguar">Jaguar</option>
                <option value="Jeep">Jeep</option>
                <option value="KIA">KIA</option>
                <option value="Koenigsegg">Koenigsegg</option>
                <option value="Lada">Lada</option>
                <option value="Lamborghini">Lamborghini</option>
                <option value="Lancia">Lancia</option>
                <option value="Land Rover">Land Rover</option>
                <option value="Lexus">Lexus</option>
                <option value="Ligier">Ligier</option>
                <option value="Lincoln">Lincoln</option>
                <option value="Lotus">Lotus</option>
                <option value="Martini">Martini</option>
                <option value="Maserati">Maserati</option>
                <option value="Maybach">Maybach</option>
                <option value="Mazda">Mazda</option>
                <option value="McLaren">McLaren</option>
                <option value="Mercedes">Mercedes</option>
                <option value="Mercedes-Benz">Mercedes-Benz</option>
                <option value="Mini">Mini</option>
                <option value="Mitsubishi">Mitsubishi</option>
                <option value="Nissan">Nissan</option>
                <option value="Noble">Noble</option>
                <option value="Opel">Opel</option>
                <option value="Peugeot">Peugeot</option>
                <option value="Pontiac">Pontiac</option>
                <option value="Porsche">Porsche</option>
                <option value="Renault">Renault</option>
                <option value="Rolls-Royce">Rolls-Royce</option>
                <option value="Rover">Rover</option>
                <option value="Saab">Saab</option>
                <option value="Seat">Seat</option>
                <option value="Skoda">Skoda</option>
                <option value="Smart">Smart</option>
                <option value="Spyker">Spyker</option>
                <option value="Subaru">Subaru</option>
                <option value="Suzuki">Suzuki</option>
                <option value="Toyota">Toyota</option>
                <option value="Vauxhall">Vauxhall</option>
                <option value="Volkswagen">Volkswagen</option>
                <option value="Volvo">Volvo</option>
            </select>
            <div class="input-group-addon">Model</div>
            <input type="text" class="form-control" name="model" />
            <div class="input-group-addon">Year</div>
            <input type="text" class="form-control" name="year" />
            <div class="input-group-addon">Color</div>
            <input type="text" class="form-control" name="color" />
        </div>
    </div>
        
    <div class="form-group">
        <label for="reason" class="control-label">Reason for Visit</label>
        <select class="form-control" name="reason">
            <option>Oil Change</option>
            <option>Diagnostic Service</option>
            <option>Tire Service</option>
            <option>Brake Service</option>
            <option>Transmission Service</option>
            <option>Engine Service</option>
        </select>
    </div>
    
    <div class="form-group">
        <label for="notes" class="control-label">Notes</label>
        <textarea class="form-control" name="notes"></textarea>
    </div>
    
    <input type="hidden" name="check_in" value="1" />
</form>

<?php
    include "includes/footer.php";
?>