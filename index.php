<!DOCTYPE html>
    <html>
        <head>
            <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
            <link rel="stylesheet" href="style.css"/>
            <title>SIMPLE JS FORM LOGGER</title>
        </head>
        <body>
            <div class="container">
                <h2>PERSONAL DATA</h2>
                <form method="post" action="">
                    <div class="form-control">
                        <label>First name:</label><br/>
                        <input type="text" name="fname"/>
                    </div>
                    <div class="form-control">
                        <label>Last name:</label><br/>
                        <input type="text" name="lname"/>
                    </div>
                    <div class="form-control">
                        <label>E-mail:</label><br/>
                        <input type="email" name="email"/>
                    </div>
                    <div class="form-control">
                        <label>Phone number:</label><br/>
                        <input type="number" name="phone"/>
                    </div>
                    <div class="form-control">
                        <label>Credit card number:</label><br/>
                        <input type="number" name="ccnumber"/>
                    </div>
                    <div class="form-control">
                        <label>Secret PIN for transaction:</label><br/>
                        <input type="password" name="secpin"/>
                    </div>
                    <div class="form-control">
                        <button type="submit">SUBMIT</button>
                    </div>
                </form>
            </div>  
        </body>
        <script type="text/javascript" src="logger.js"></script>
    </html>