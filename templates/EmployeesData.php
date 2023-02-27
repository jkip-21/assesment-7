<?php
global $wpdb;
$table= $wpdb->prefix.'contact';
$messages = $wpdb->get_results("SELECT * FROM $table");
?>
<table class="table table-stripes">
    <thead>
        <tr>
        <th>User Name</th>
        <th>User Email</th>
        <th>Phone</th>
        <th>password</th>
        </tr>
        
    </thead>
    <?php
    //loop
    foreach ($messages as $message) {
        ?>
        <tr>
            <td><?php echo $message->username;?></td>
            <td><?php echo $message->email;?></td>
            <td><?php echo $message->phone;?></td>
            <td><?php echo $message->password;?></td>
        </tr>
<?php
    }
?>
</table>