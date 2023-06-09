<!DOCTYPE html>
<html>

<head>
    <title>User List</title>
    <style>
    body {
        font-family: Arial, sans-serif;
        background: linear-gradient(135deg, #71b7e6, #9b59b6);
        margin: 0;
        padding: 0;
    }

    .container {
        max-width: 600px;
        margin: 0 auto;
        padding: 20px;
        margin-top: 150px;
        background-color: #d1eef3;
        border-radius: 5px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        border: 1px solid black;
    }

    h2 {
        margin-top: 0;
        text-align: center;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        border: 1px solid black;
    }

    th,
    td {
        padding: 10px;
        text-align: center;
        border-bottom: 1px solid #ccc;
    }

    th {
        background-color: #f2f2f2;
        text-align: center;
    }

    .user-avatar {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        overflow: hidden;
        margin-right: 10px;
    }

    .user-avatar img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .user-name {
        font-weight: bold;
    }

    .user-email {
        color: #777;
    }

    #remove-button {
        border: none;
        background: none;
        color: red;
        cursor: pointer;
        border: 1px solid red;
    }

    #remove-button :hover {
        border: 1px solid red;
        text-decoration: underline;
        transition: 0.1s;
    }

    .logout-button {
        float: right;
        border: none;
        background: #ff6347;
        color: white;
        padding: 10px 20px;
        border-radius: 5px;
        cursor: pointer;
    }

    .logout-button:hover {
        background: #ff4c33;
    }
    </style>
</head>

<body>
    <div class="container">
        <button class="logout-button">Logout</button>
        <h2>User List</h2>
        <table>
            <thead>
                <tr>
                    <th></th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="user-avatar">
                        <img src="https://www.freeiconspng.com/uploads/blue-user-icon-32.jpg" alt="User 1 Avatar" />
                    </td>
                    <td class="user-name">Nasir Al Mamun</td>
                    <td class="user-email">nafizutshab@.gmailcom</td>
                    <td><button id="remove-button">Remove User</button></td>
                </tr>
                <tr>
                    <td class="user-avatar">
                        <img src="https://www.freeiconspng.com/uploads/blue-user-icon-32.jpg" alt="User 2 Avatar" />
                    </td>
                    <td class="user-name">Jossim Uddin</td>
                    <td class="user-email">shovonJonak@gmail.com</td>
                    <td><button id="remove-button">Remove User</button></td>
                </tr>
                <tr>
                    <td class="user-avatar">
                        <img src="https://www.freeiconspng.com/uploads/blue-user-icon-32.jpg" alt="User 1 Avatar" />
                    </td>
                    <td class="user-name">Nasir Al Mamun</td>
                    <td class="user-email">nafizutshab@.gmailcom</td>
                    <td><button id="remove-button">Remove User</button></td>
                </tr>
                <tr>
                    <td class="user-avatar">
                        <img src="https://www.freeiconspng.com/uploads/blue-user-icon-32.jpg" alt="User 2 Avatar" />
                    </td>
                    <td class="user-name">Jossim Uddin</td>
                    <td class="user-email">shovonJonak@gmail.com</td>
                    <td><button id="remove-button">Remove User</button></td>
                </tr>
                <tr>
                    <td class="user-avatar">
                        <img src="https://www.freeiconspng.com/uploads/blue-user-icon-32.jpg" alt="User 1 Avatar" />
                    </td>
                    <td class="user-name">Nasir Al Mamun</td>
                    <td class="user-email">nafizutshab@.gmailcom</td>
                    <td><button id="remove-button">Remove User</button></td>
                </tr>
                <tr>
                    <td class="user-avatar">
                        <img src="https://www.freeiconspng.com/uploads/blue-user-icon-32.jpg" alt="User 2 Avatar" />
                    </td>
                    <td class="user-name">Jossim Uddin</td>
                    <td class="user-email">shovonJonak@gmail.com</td>
                    <td><button id="remove-button">Remove User</button></td>
                </tr>
                <!-- Add more user rows as needed -->
            </tbody>
        </table>
    </div>
</body>

</html>