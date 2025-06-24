<div>
    <h1>Welcome page</h1><br>
    <form action="/plantData" method="get">
        <label for="CountryName">Plant Name</label>
        <input type="text" name="PlantName" placeholder="Enter Plant Name"><br><br>
        <label for="Pincode">Area Pin Code </label>
        <input type="text" name="PinCode" placeholder="Enter 6-digit Pincode"
            pattern="^\d{6}$" minlength="6" maxlength="6" inputmode="numeric" required><br><br>
        <button type="submit">Submit</button>
    </form>
</div>