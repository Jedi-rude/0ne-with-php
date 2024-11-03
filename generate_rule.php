<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Generated Snort Rule</title>
<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f2f2f2;
    }
    .container {
        width: auto;
        margin: 50px auto;
        padding: 20px;
        background-color: #fff;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    .form-group {
        margin-bottom: 20px;
    }
    label {
        display: block;
        font-weight: bold;
    }
    input[type="text"], select {
        width: 100%;
        padding: 10px;
        font-size: 16px;
        border-radius: 5px;
        border: 1px solid #ccc;
    }
    input[type="submit"] {
        width: 100%;
        padding: 10px;
        font-size: 16px;
        border-radius: 5px;
        border: none;
        background-color: #007bff;
        color: #fff;
        cursor: pointer;
    }
    input[type="submit"]:hover {
        background-color: #0056b3;
    }
</style>
</head>
<body>

<div class="container">
    <center><h2>Generated Snort Rule</h2></center>
    <?php
    // Function to generate Snort rule
    function generate_snort_rule($action, $protocol, $source_ip, $source_port, $destination_ip, $destination_port, $content, $msg, $sid, $rev, $references, $depth, $priority) {
        $rule = "{$action} {$protocol} {$source_ip} {$source_port} -> {$destination_ip} {$destination_port}";
        if ($content) {
            $rule .= " (content:\"{$content}\";";
            if ($depth) {
                $rule .= " depth:{$depth};";
            }
            $rule .= ")";
        }
        if ($msg) {
            $rule .= " (msg:\"{$msg}\";)";
        }
        if ($sid) {
            $rule .= " (sid:{$sid};)";
        }
        if ($rev) {
            $rule .= " (rev:{$rev};)";
        }
        if ($references) {
            $rule .= " (reference:{$references};)";
        }
        if ($priority) {
            $rule .= " (priority:{$priority};)";
        }
        return $rule;
    }

    // Retrieve form inputs
    $action = $_POST['action'];
    $protocol = $_POST['protocol'];
    $source_ip = $_POST['source_ip'];
    $source_port = $_POST['source_port'];
    $destination_ip = $_POST['destination_ip'];
    $destination_port = $_POST['destination_port'];
    $content = $_POST['content'];
    $msg = $_POST['msg'];
    $sid = $_POST['sid'];
    $rev = $_POST['rev'];
    $references = $_POST['references'];
    $depth = $_POST['depth'];
    $priority = $_POST['priority'];

    // Generate Snort rule
    $rule = generate_snort_rule($action, $protocol, $source_ip, $source_port, $destination_ip, $destination_port, $content, $msg, $sid, $rev, $references, $depth, $priority);
    ?>
    <pre><?php echo $rule; ?></pre>
</div>

</body>
</html>
