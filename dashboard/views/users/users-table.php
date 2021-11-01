<script>
    var users =[];
    <?php 
    if(count($fetch_users) > 0):
        foreach($fetch_users as $user): ?>
            users.push([
                '<?= $user['id'];?>', 
                '<?= $user['fname'].' '. $user['lname'] ;?>',
                '<?= $user['email']; ?>',
                '<?= $user['phone_no'];?>',
                '<?= $user['role'];?>',
                '<?= $user['curr_status'];?>',
                '<?= time_elapsed_string($user['created_at'],true);?>',
                '<?= $user['created_at'];?>',
                '<?= time_elapsed_string($user['updated_at'],true);?>',
            ]);
    <?php 
        endforeach; 
    endif;
    ?>

    $('#users-table').DataTable({
        buttons: ['copy', 'excel', 'pdf', 'print'],
        data: users,
    });

    $('#users-table').on( 'click', 'tbody tr', function () {
        var id = $(this).children('.sorting_1').eq(0).text(); 
        window.location= 'index.php?page=User&u_id='+id;
    } );

</script>