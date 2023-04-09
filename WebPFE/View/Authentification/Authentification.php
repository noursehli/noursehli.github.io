

  <head>
    <title>Authentication Page</title>
    <style>
      body {
        background-image: url('../../images/background.png');
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
        display: flex;
        flex-direction: column;
        align-items: center;
      }
      
      h1 {
        margin-top: 0;
        color: #E9C2B3;
      }

      form {
        display: flex;
        flex-direction: column;
        align-items: center;
      }

      input[type="text"],
      input[type="password"] {
        width: 100%;
        padding: 10px;
        margin-bottom: 10px;
        border-radius: 3px;
        border: 1px solid #ccc;
        font-size: 16px;
        background-color: #E9C2B3;
}                               

      input[type="submit"] {
        background-color: #442063;
        color: white;
        border: none;
        padding: 10px 20px;
        border-radius: 3px;
        cursor: pointer;
        font-size: 16px;
      }

      input[type="submit"]:hover {
        color: #d73cbe;
      }
    </style>
  </head>
  <body style="margin:20px; padding:20px;background-image: url('images/background.png'); background-size: cover; background-position: center;">
    <div class="container">
      <div class="card">
      <img src="images/logo2.png" alt="image"style="width: 40%; height: auto;">
        <h1>Welcome</h1>
        <form method="post" action="index.php?controller=Authentification&action=Dashboard">
          <label for="username"></label>
          <input type="text" id="username" name="username" required>
          <label for="password"></label>
          <input type="password" id="password" name="password" required>
          <input type="submit" value="Log In">
        </form>
      </div>
    </div>
  </body>

