<!DOCTYPE html>
<html>
<head>
    <title>My Power BI Dashboard</title>
    <style>
    body {
        background-image: url('images/background.png');
        background-size: cover;
        background-position: center;
        font-family: Arial, sans-serif;
    }

    .container {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }

    .card {
        background-color: #2C1E4A;
        border-radius: 5px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
        padding: 20px;
        width: 400px;
        max-width: 90%;
        text-align: center;
    }

    h1 {
        margin-top: 0;
        color: #E9C2B3;
    }

    button {
        background-color: #442063;
        color: white;
        border: none;
        padding: 10px 20px;
        border-radius: 3px;
        cursor: pointer;
        font-size: 16px;
        margin-top: 20px;
    }

    button:hover {
        color: #d73cbe;
    }
    </style>
</head>
<body style=" margin:20px; padding:20px;background-image: url('images/background.png');">
    <div class="container">
    <div class="card">
    <img src="images/logo2.png" alt=" logo"style="width: 30%; height: auto;">
        <h1>My Power BI Dashboard</h1>
        <button onclick="window.location.href='https://app.powerbi.com/groups/me/reports/de6697dd-a426-435e-9696-09bd6fd653c7?ctid=dbd6664d-4eb9-46eb-99d8-5c43ba153c61&pbi_source=linkShare&bookmarkGuid=08f92801-5cb4-4cdf-a0bd-705eeb46a881'">View Dashboard</button>
    </div>
    </div>
</body>
</html>
