<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SanberBook - Create Account</title>
</head>
<body>
    <h1>Buat Account Baru!</h1>

<h3>Sign Up Form</h3>


<form action="{{route('welcome')}}" method="get">
        <section class="name">
            <label for="nama">First Name :</label><br>
            <input type="text" name="nama" id="nama"><br>

            <label for="last">Last Name :</label><br>
            <input type="text" name="last" id="last"><br><br>
        </section>
        
        <section class="jenis-kelamin">
            <label for="gender">Jenis Kelamin : </label><br>
            <input type="radio" name="gender" id="gender" value="prempuan"> Prempuan <br>
            <input type="radio" name="gender" id="gender" value="laki-laki"> Laki Laki <br>
            <input type="radio" name="gender" id="gender" value="other"> Other <br><br>
        </section>


        <section class="nationality">
            <label for="nationality">Nationality : </label><br>
            <select name="nationality" id="nationality">
                <option value="indonesia">Indonesia</option>
                <option value="englis">english</option>
                <option value="spanyol">spanyol</option>
            </select><br><br>
        </section>

        <section class="bahasa">
            <label for="league">Language Spoken : </label><br>

            <input type="checkbox" id="checkboxindo" value="indonesia">
            <label for="checkboxindo"> Bahasa Indonesia </label><br>
        
            <input  type="checkbox" id="checkboxmelayu" value="melayu">
            <label for="checkboxmelayu"> Bahasa Melayu</label><br>

            <input type="checkbox" id="checkboxother" value="other"> 
            <label for="checkboxother">Other</label> <br><br>   
        </section>

        <section class="bio">
            <label for="bio">Bio : </label><br>
            <textarea name="bio" id="bio" cols="30" rows="7"></textarea>
        </section>
        
        <button type="submit">Sign Up</button>
    </form>

</body>
</html>