<!DOCTYPE html>
<html>
<head>
    <title>Table with Form</title>
</head>
<body>
    <h1>Table with Form</h1>

    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Age</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>John</td>
                <td>25</td>
            </tr>
            <tr>
                <td>Sarah</td>
                <td>30</td>
            </tr>
            <tr>
                <td>Mike</td>
                <td>28</td>
            </tr>
        </tbody>
    </table>

    <br>

    <form onsubmit="addUser(); return false;">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
        <label for="age">Age:</label>
        <input type="number" id="age" name="age" required>
        <button type="submit">Add User</button>
    </form>

    <script>
        function addUser() {
            var name = document.getElementById("name").value;
            var age = document.getElementById("age").value;

            var table = document.getElementsByTagName("table")[0];
            var newRow = table.insertRow(-1);

            var nameCell = newRow.insertCell(0);
            var ageCell = newRow.insertCell(1);

            nameCell.innerHTML = name;
            ageCell.innerHTML = age;

            document.getElementById("name").value = "";
            document.getElementById("age").value = "";
        }
    </script>

</body>
</html>

