<script>
    var clients = [];
    <?php 
    if(count($fetch_clients)>0): 
        foreach($fetch_clients as $fetch): ?>
            clients.push([
                '<?= $fetch['id'];?>', 
                '<?= $fetch['fname'].' '. $fetch['lname'] ;?>',
                '<?= $fetch['email']; ?>',
                '<?= $fetch['phone_no'];?>',
                '<?= $fetch['companyName'];?>',
                '<?= time_elapsed_string($fetch['created_at'],true);?>',
                '<?= $fetch['created_at'];?>',
                '<?= time_elapsed_string($fetch['updated_at'],true);?>',
            ]);
    <?php 
        endforeach; 
    endif; 
    ?>
    $('#clients-table').DataTable({
        dom: 'Bfrtip',
        buttons: ['copy', 'excel', 'pdf', 'print'],
        data: clients,
    });
    $('#clients-table').on( 'click', 'tbody tr', function () {
        var id = $(this).children('.sorting_1').eq(0).text(); 
        window.location= 'Client?c_id='+id;
    } );
</script>