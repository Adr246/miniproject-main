<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Phone Repair -- Home</title>
</head>
<body>
    
        <form action="login-action.php" method="post">
            <label for="phone">Choose a Phone:</label>
            <select name="phone" id="">
                <option value="mi">Xiaomi</option>  
                <option value="samsung">Samsung</option> 
                <option value="apple">Apple</option> 
                <option value="realme">Realme</option> 
                <option value="oneplus">Oneplus</option> 
                <option value="nothing">Nothing</option>
                <option value="asus">ASUS</option>  
                <option value="blackberry">Blackberry</option> 
                <option value="sony">Sony</option>

            </select>
            <label for="complaint-box">Complaint</label>   
            <input type="text" required>
            <label for="prev-serv">Previosly Serviced?</label>
            <input type="radio" name="sel" id="">
            <label for="yes">Yes</label>
            <input type="radio" name="sel" id="">
            <label for="yes">No</label>
            <input type="text" placeholder="Explain The Complaint" required>
            <label for="">Purchase Date</label>
            <input type="date" name="" id="">
            <input type="submit" value="Submit">
            

        
        
        
        
        </form>



    
</body>
</html>