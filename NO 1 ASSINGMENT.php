<!DOCTYPE html>
<html>
<head>
    <title>Employee Information</title>
    <script>
        function displayEmployeeInfo() {
            var name = document.getElementById("name").value;
            var age = document.getElementById("age").value;
            var address = document.getElementById("address").value;
            var employeeId = document.getElementById("employeeId").value;
            var department = document.getElementById("department").value;
            var salary = document.getElementById("salary").value;
            var studentId = document.getElementById("studentId").value;
            var institution = document.getElementById("institution").value;

            var employeeInfo = `
                <h2>Employee Information:</h2>
                <p>Name: ${name}</p>
                <p>Age: ${age}</p>
                <p>Address: ${address}</p>
                <p>Employee ID: ${employeeId}</p>
                <p>Department: ${department}</p>
                <p>Salary: $${salary}</p>
            `;

            var studentInfo = `
                <h2>Student Information (Employee as Student):</h2>
                <p>Student ID: ${studentId}</p>
                <p>Institution: ${institution}</p>
            `;

            document.getElementById("result").innerHTML = employeeInfo + studentInfo;
        }
    </script>
</head>
<body>
    <h1>Employee Information Form</h1>
    <form>
        <label for="name">Name:</label>
        <input type="text" id="name" required><br><br>

        <label for="age">Age:</label>
        <input type="number" id="age" required><br><br>

        <label for="address">Address:</label>
        <input type="text" id="address" required><br><br>

        <label for="employeeId">Employee ID:</label>
        <input type="text" id="employeeId" required><br><br>

        <label for="department">Department:</label>
        <input type="text" id="department" required><br><br>

        <label for="salary">Salary:</label>
        <input type="number" id="salary" required><br><br>

        <label for="studentId">Student ID:</label>
        <input type="text" id="studentId" required><br><br>

        <label for="institution">Institution:</label>
        <input type="text" id="institution" required><br><br>

        <input type="button" value="Submit" onclick="displayEmployeeInfo()">
    </form>

    <div id="result"></div>
</body>
</html>
