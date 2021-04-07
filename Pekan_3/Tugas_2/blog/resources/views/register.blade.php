<h1>Buat Account Baru!</h1>

<h4>Sign Up Form</h4>

<form action="/welcome" method="POST">
    @csrf
    <label for="">First Name :</label><br><br>
    <input type="text" name="first" id="first"><br><br>

    <label for="">Last Name :</label><br><br>
    <input type="text" name="last" id="last"><br><br>

    <label for="">Gender :</label><br><br>
    <input type="radio"> Male <br>
    <input type="radio"> Female <br>  
    <input type="radio"> Other <br><br>

    <label for="">Nationality :</label><br><br>
    <select name="" id="">
        <option value="Indonesia">Indonesia</option>
        <option value="Malaysia">Malaysia</option>
        <option value="Other">Other</option>
    </select><br><br> 

    <label for="">Languange Spoken : </label><br><br>
    <input type="checkbox"> Indonesia <br>
    <input type="checkbox"> English <br>  
    <input type="checkbox"> Other <br><br   >
    
    <label for="Bio">Bio :</label><br><br>
    <textarea name="" id="" cols="30px" rows="10"></textarea><br>
   <button type="submit">Sign Up</button>
</form>