
<html>
    <head>
    
    <title>Update state information</title>
    </head>
    
    <body>
    <form method = "post" action = "updatecontroller.php">
    <section style="margin: 9px;">
    <fieldset style="border-radius: 4px; padding: 4px; min-height:149px; border:7px solid #1f497d; background-color:#eeece1;">
    <legend style=" margin-left:19px;background-color:#1f497d; padding-left:9px; padding-top:4px; padding-right:119px; padding-bottom:4px; ; color:white; 
    border-radius:14px;font-size:39px; border:7px solid:white; " ><b> UPDATE </b> </legend>
    <label> <br/> </label>
    

    <h8><b><br><br>Please enter STATE NAME whose STATE ABBREVIATION you want to change </br></br></b></h8>

        <label stateab = "label" for="stateab">State Abbreviation: </label>
        <input type="text" name="stateab" placeholder = "Enter State Abbreviation"></br>
<br>
        <label statename = "statename" for="statename">State Name:   </label>
        <input type="text" name="statename" placeholder ="Enter State Name"></br><br>

        
        <button type =" button" type ="button" name = "UPDATE">UPDATE</button>

    </fieldset>
</form>
    </body>
    </html>
