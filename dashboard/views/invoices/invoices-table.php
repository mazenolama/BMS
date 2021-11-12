<script>
    var invoices =[];
    <?php 
    if(count($fetch_invoices) > 0):
        foreach($fetch_invoices as $invoice): ?>
            invoices.push([
                '<?= $invoice['id'];?>', 
                '<?= $invoice['title'];?>',
                '<?= $invoice['fname'].' '. $invoice['lname'] ;?>',
                '<?= $invoice['invoice_status'];?>',
                '<?= $invoice['total'];?>',
                '<?= $invoice['payment_date'];?>',
                '<?= $invoice['created_date'];?>',
                '<?= time_elapsed_string($invoice['updated_at'],true);?>',
            ]);
    <?php 
        endforeach; 
    endif;
    ?>

    $('#invoices-table').DataTable({
        dom: 'Bfrtip',
        buttons: ['copy', 'excel', 'pdf', 'print'],
        data: invoices,
    });

    $('#invoices-table').on( 'click', 'tbody tr', function () {
        var id = $(this).children('.sorting_1').eq(0).text(); 
        window.location= 'Invoice?i_id='+id;
    } );

</script>