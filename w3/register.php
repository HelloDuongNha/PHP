<div style="
    display: flex; 
    justify-content: center; 
    align-items: center;">
    <form action="result.php" method="post" style="
        width: 100%; 
        max-width: 400px;">
        <fieldset style="
            width: 100%; 
            padding: 20px;">
            <legend style="
            text-align: center;">
                <h1>Patient Registration</h1>
            </legend>

            <div style="
                display: flex; 
                justify-content: space-between; 
                margin-bottom: 10px;">
                <label for="first_name" style="width: 150px;">First Name:</label>
                <input type="text" name="first_name" style="width: 250px;">
            </div>

            <div style="
                display: flex; 
                justify-content: space-between; 
                margin-bottom: 10px;">
                <label for="last_name" style="width: 150px;">Last Name:</label>
                <input type="text" name="last_name" style="width: 250px;">
            </div>

            <div style="
                display: flex; 
                justify-content: space-between; 
                margin-bottom: 10px;">
                <label for="dob"  style="width: 150px;">Date of Birth:</label>
                <input type="date" name="dob" id="dob" min="1900-01-01" style="width: 250px;">
            </div>

            <div style="
                display: flex; 
                justify-content: space-between; 
                margin-bottom: 10px;">
                <label for="email" style="width: 150px;">Email:</label>
                <input type="email" name="email" style="width: 250px;">
            </div>

            <div style="
                display: flex; 
                justify-content: space-between; 
                margin-bottom: 10px;">
                <label for="contact_number" style="width: 150px;">Contact Number:</label>
                <input type="tel" name="contact_number" style="width: 250px;">
            </div>

            <div style="
                text-align: center; 
                margin-top: 20px;">
                <button type="submit">Register</button>
            </div>
        </fieldset>
    </form>
</div>
<script>
    function setMaxDate() {
        const today = new Date();
        const month = String(today.getMonth() + 1).padStart(2, '0'); 
        const year = today.getFullYear();
        const day = String(today.getDate()).padStart(2, '0');
        const maxDate = `${year}-${month}-${day}`;
        
        document.getElementById('dob').max = maxDate; 
    }

    window.onload = setMaxDate;
</script>
