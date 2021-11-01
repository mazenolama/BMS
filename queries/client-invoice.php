<?php 


$query = "SELECT clients.*, invoices.amount, invoices.invoice_status 
          FROM clients 
          INNER JOIN invoices ON clients.id=invoices.clientID";





?>