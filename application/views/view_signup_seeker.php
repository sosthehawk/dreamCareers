<!DOCTYPE html>
<html>
   
    <body>
        <form action="save_seeker" method="POST">
        <h1> Sign Up for FREE with dreamCareers </h1>
        <h2> Complete the Form below </h2>
        <p> 
            Email: <input type="text" name="txtEmail"> <br/>
            Password: <input type="password" name="txtPassword"> <br/>
            Name: <input type="text" name="txtFname" value="First Name"> &nbsp; <input type="text" name="txtLname" value="Last Name"><br/>
            Nationality: <select>
                <option></option>
            </select> <br/>
            Country of Residence:
            <select>
                <option></option>
            </select> <br/>
            Where do you want to work: <select>
                <option></option>
            </select> <br/>
            <a href="">Add another Location</a> <br/>
            <input type="checkbox">I want to work in any overseas location <br/>
            Expected monthly salary: <select name="selCurrency">
                <option></option>
            </select> $nbsp; 
            <input type="text" name="txtsalary"> <br/>
            Level of Position you want to work in: <br/>
            <input type="checkbox" name="chkPosition"> CEO/SVP/AVP/VP/Director <br/>
            <input type="checkbox" name="chkPosition" value="Assistant Manager">Assistant Manager<br/> 
            <input type="checkbox" name="chkPosition" value="Supervisor/5 Years & Up Experienced Employee"> Supervisor/5 Years & Up Experienced Employee<br/>
            <input type="checkbox" name="chkPosition" value="1-4 Years Experienced Employee"> 1-4 Years Experienced Employee<br/>
            <input type="checkbox" name="chkPosition" value="Fresh Grad/ < 1 Year Experienced Employee"> Fresh Grad/ < 1 Year Experienced Employee<br/>
            <input type="checkbox" name="chkPosition" value="Student Seeking Internship"> Student Seeking Internship<br/>
            What do you want to specialize in: <textarea>
                Accounting/Finance
                <input type="checkbox" name="chkAcctFin" value="Audit & Taxation"> Audit & Taxation<br/> 
                <input type="checkbox" name="chkAcctFin" value="Banking/Financial">Banking/Financial<br/> 

            </textarea> <br/><br/><br/>
            By clicking on "Sign Up Now", I have read and agreed to dreamCareers.com's Terms of Use and Privacy Policy.
            <button type="submit">Sign Up Now</button>
        </p>
        </form>
    </body>
</html>