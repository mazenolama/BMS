<?php 
    require_once("database/Database.php");
    require_once("Controllers/email/mail.php");
    $con = dbConnection();
    
    /****************         Get Invoices Status           ****************/
        if($path == 'Dashboard' || empty($path))
        {
            $status_array =array();
            $query = "SELECT 
                        sum(case when invoice_status LIKE 'Paid' then 1 end) as paid_count,
                        sum(case when invoice_status LIKE 'Unpaid' then 1 end) as unpaid_count,
                        sum(case when invoice_status LIKE 'Part-Paid' then 1 end) as part_paid_count
                      FROM invoices ";
            if( $execute = mysqli_query($con, $query))
            {
                if(mysqli_num_rows($execute) > 0){
                    while($fetch = $execute->fetch_assoc()){
                        $status_array = $fetch;
                    }
                }
            }
        }
    /****************         Get Invoices Status           ****************/

    /****************         Get Revenue Amount            ****************/
    if($path == 'Dashboard' || empty($path))
        {
            $query = "SELECT SUM(total) AS revenue FROM invoices WHERE invoice_status = 'Paid' ";
            if( $execute = mysqli_query($con, $query))
            {
                if(mysqli_num_rows($execute) > 0){
                    while($fetch = $execute->fetch_assoc()){
                        $revenue= $fetch;
                    }
                }
            }
        }
    /****************         Get Revenue Amount            ****************/

?>