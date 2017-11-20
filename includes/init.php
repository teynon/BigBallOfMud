<?php
    if (!isset($_SESSION['customers'])) {
        $_SESSION['customers'] = [];
    }
    
    if (!isset($_SESSION['customer_id']))
        $_SESSION['customer_id'] = 1;