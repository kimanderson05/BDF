<?php


if(count($query) == 1){
    $row = $query[0];
    echo <<< __END

<h2>${row['firstName']} ${row['lastName']}</h2>
<ul class="ul_info">
    <li class="li_info">Username: ${row['userName']}</li>
    <li class="li_info">Email: ${row['email']}</li>
</ul>



__END;
}
?>

<a href="<?php echo site_url('body'); ?>" class="back">Back</a>