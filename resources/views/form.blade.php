<h1>Add costumer</h1>
<form action="add" method="POST">
    @csrf
    <input type="text" name="id" placeholder="input id"><br><br>
    <input type="text" name="name" placeholder="input name"><br><br>
    <input type="text" name="gender" placeholder="input gender"><br><br>
    <input type="text" name="address" placeholder="input address"><br><br>
    <button type="submit">Add Customer</button>
</form>