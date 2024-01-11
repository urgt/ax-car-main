<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {


	echo "Success! Form submitted and email sent.";
} else {
	echo "Error: Invalid request.";
}
?>