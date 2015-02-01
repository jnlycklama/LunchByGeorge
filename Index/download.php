<?php
    header('Content-Type: application/jpg');
    header('Content-disposition: attachment;filename=donation.jpg');
    readfile('donation.jpg');
    ?>