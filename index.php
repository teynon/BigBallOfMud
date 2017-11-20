<?php 
    session_start();
    include "includes/init.php";
    include "includes/header.php";
?>

<div class="header">
    <a href="checkin.php" class="btn pull-right btn-success">Check In</a>
</div>


<?php
    foreach ($_SESSION['customers'] as $customer) {
        ?>
<div class="bg-info customer">
    <div class="info">
        <div class="info-left">
            <div class="customer-id">
                <label>Customer ID:</label>
                <?php echo $customer['ID']; ?>
            </div>
            <div class="customer-name">
                <?php echo $customer['Name']; ?>
            </div>
        </div>
        
        <div class="vehicle">
            <?php echo $customer['Color']; ?> <?php echo $customer['Year']; ?> <?php echo $customer['Make']; ?> <?php echo $customer['Model']; ?>
        </div>
    </div>
    <div class="customer-reason">
        <span>Reason for Visit:</span> <?php echo $customer['VisitReason']; ?>
    </div>
    <div class="notes">
        <?php echo $customer['Notes']; ?>
    </div>
</div>
        <?php
    }
?>

<?php
    include "includes/footer.php";
?>