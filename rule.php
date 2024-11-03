<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Snort Rule Generator</title>
<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f2f2f2;
    }
    .container {
        max-width: 600px;
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
    <h2>Snort Rule Generator</h2>
    <form action="generate_rule.php" method="post">
        <div class="form-group">
            <label for="action">Action:</label>
            <input type="text" id="action" name="action" placeholder="Enter action (alert, log, pass, drop, reject, sdrop)">
        </div>
        <div class="form-group">
            <label for="protocol">Protocol:</label>
            <input type="text" id="protocol" name="protocol" placeholder="Enter protocol (tcp, udp, icmp, ip)">
        </div>
        <div class="form-group">
            <label for="source_ip">Source IP:</label>
            <input type="text" id="source_ip" name="source_ip" placeholder="Enter source IP (or 'any')">
        </div>
        <div class="form-group">
            <label for="source_port">Source Port:</label>
            <input type="text" id="source_port" name="source_port" placeholder="Enter source port (or 'any')">
        </div>
        <div class="form-group">
            <label for="destination_ip">Destination IP:</label>
            <input type="text" id="destination_ip" name="destination_ip" placeholder="Enter destination IP (or 'any')">
        </div>
        <div class="form-group">
            <label for="destination_port">Destination Port:</label>
            <input type="text" id="destination_port" name="destination_port" placeholder="Enter destination port (or 'any')">
        </div>
        <div class="form-group">
            <label for="content">Content:</label>
            <input type="text" id="content" name="content" placeholder="Enter content (optional)">
        </div>
        <div class="form-group">
            <label for="msg">Message:</label>
            <input type="text" id="msg" name="msg" placeholder="Enter message (optional)">
        </div>
        <div class="form-group">
            <label for="sid">SID:</label>
            <input type="text" id="sid" name="sid" placeholder="Enter SID (optional)">
        </div>
        <div class="form-group">
            <label for="sid">priority:</label>
            <input type="text" id="priority" name="priority" placeholder="Enter Priority (1-10)">
        </div>
        <div class="form-group">
            <label for="rev">Revision Number:</label>
            <input type="text" id="rev" name="rev" placeholder="Enter revision number (optional)">
        </div>
        <div class="form-group">
            <label for="references">References:</label>
            <input type="text" id="references" name="references" placeholder="Enter references (optional)">
        </div>
        <div class="form-group">
            <label for="depth">Depth:</label>
            <input type="text" id="depth" name="depth" placeholder="Enter depth (optional)">
        </div>
        <div class="form-group">
            <input type="submit" value="Generate Rule">
        </div>
    </form>
</div>

</body>
</html>