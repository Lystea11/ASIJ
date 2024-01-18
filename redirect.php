<?php
// Get the selected option from the form
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Check if the 'selectedOption' key exists in the $_POST array
    if (isset($_POST['selectedOption'])) {
        $selectedOption = $_POST['selectedOption'];

        // Redirect based on the selected option
        switch ($selectedOption) {
            case 'option1':
                header("Location: FOTMW.html");
                exit(); // Ensure that the script stops execution after the header is sent
            case 'option2':
                header("Location: English9.html");
                exit();
            case 'option3':
                header("Location: Bio9.html");
                exit();
            case 'option4':
                header("Location: Wellness9.html");
                exit();
            default:
                header("Location: index.html");
                exit();
        }
    } else {
        // Handle the case when 'selectedOption' is not set
        header("Location: error.html");
        exit();
    }
} else {
    // Handle the case when the form is not submitted using POST
    header("Location: error.html");
    exit();
}
?>
