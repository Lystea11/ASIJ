<?php
// Get the selected option from the form
if(isset($_POST['selectedOption'])) {
    $selectedOption = $_POST['selectedOption'];

    // Redirect based on the selected option
    switch ($selectedOption) {
        case 'option1':
            header("Location: FOTMW.html");
            break;
        case 'option2':
            header("Location: English9.html");
            break;
        case 'option3':
            header("Location: Bio9.html");
            break;
        case 'option4':
            header("Location: Wellness9.html");
            break;
        default:
            header("Location: index.html");
            break;
    }
} else {
    // Handle the case when the form is submitted without selecting an option
    header("Location: error.html");
}
?>