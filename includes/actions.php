<?php

// * Check if the users details was saved to the database
if (mysqli_affected_rows($conn)) {
    $alert = "Your profile is updated";
    $color = "success";

    // * Returns a success message
    return ["alert" => $alert, "color" => $color];
} else {
    echo mysqli_error($conn);
}


?>