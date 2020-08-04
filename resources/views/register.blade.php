<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <form action="/welcome" method="POST">
        @csrf
        <h1>Buat Account Baru!</h1>
        <h3>Sign Up Form</h3>
        
        <label for="nama-awal">First name:<br></label>
        <input type="text" name="nama-awal">
    
        <label for="nama-akhir"><br><br>Last name:<br></label>
        <input type="text" name="nama-akhir">
    
        <p>Gender:</p>
        
        <!-- cara 1 -->
        <input type="radio" name="gender" value="laki-laki">
        <label for="gender">Male</label>     
        <!-- cara 2 -->
        <p><input type="radio" name="gender" value="perempuan">Female</p>
        <p><input type="radio" name="gender" value="lainnya">Other</p>
        
    
        <label for="nationality">Nationality:<br></label>
        <select name="nationality">
            <option value="Indonesian">Indonesian</option>
            <option value="Singaporean">Singaporean</option>
            <option value="Malaysian">Malaysian</option>
            <option value="Australian">Australian</option>
        </select>
    
        
        <p><input type="checkbox" name="bahasa" value="Bahasa Indonesia">Bahasa Indonesia</p>
        <p><input type="checkbox" name="bahasa" value="English">English</p>
        <p><input type="checkbox" name="bahasa" value="Other">Other</p>
        
        <p>Bio:</p>
        <textarea name="" id="" cols="30" rows="10"></textarea><br>
        <a href="welcome.html" >
            <input type="submit" name="submit" value="Sign Up" >
        </a>
    </form>
</body>
</html>