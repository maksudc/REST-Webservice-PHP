<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if ($_POST['name']) {

        $name = $_POST['name'];

        $id = NULL;

        $email = $POST['email'];

        $address = $POST['address'];

        $conn = mysqli_connect('localhost', 'root', '', 'webservice');
        //var_dump($conn);
        $sql = "
                    INSERT INTO user VALUES(NULL,'$name','$address','$email')
               ";

        if (mysqli_connect_errno()) {

            echo json_encode(array(
                'status' => 'failure',
                'message' => 'Could Not connect to database',
            ));
        }

        $data = mysqli_query($conn, $sql);

        if ($data) {

            echo json_encode(array(
                'status' => 'successful',
            ));
        } else {

            echo json_encode(array(
                'status' => 'failure',
            ));
        }
    }
}
?>
