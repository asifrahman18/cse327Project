<!DOCTYPE html>
<html>
  <head>
    <title>Course List</title>
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

      .course-name {
        font-weight: bold;
      }

      .course-id {
        color: #777;
      }

      #drop-button {
        border: none;
        background: none;
        color: red;
        cursor: pointer;
        border: 1px solid red;
      }

      #enroll-button {
        border: none;
        background: none;
        color: green;
        cursor: pointer;
        border: 1px solid green;
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
      <h2>Course List</h2>
      <table>
        <thead>
          <tr>
            <th>Course Code</th>
            <th>Course Name</th>
            <th>Category</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="course-id">CSE115</td>
            <td class="course-name">Introduction To Programming Language</td>
            <td class="course-category">Engineering</td>
            <td><button id="enroll-button">Enroll</button></td>
          </tr>
          <tr>
            <td class="course-id">CSE311</td>
            <td class="course-name">Database Management</td>
            <td class="course-category">Engineering</td>
            <td><button id="drop-button">Drop</button></td>
          </tr>
          <tr>
            <td class="course-id">BIO103</td>
            <td class="course-name">Introduction To Biology</td>
            <td class="course-category">Medical</td>
            <td><button id="enroll-button">Enroll</button></td>
          </tr>
          <tr>
            <td class="course-id">EEE111</td>
            <td class="course-name">Electronic Circuit</td>
            <td class="course-category">Engineering</td>
            <td><button id="enroll-button">Enroll</button></td>
          </tr>
          <tr>
            <td class="course-id">BUS103</td>
            <td class="course-name">Introduction To Business</td>
            <td class="course-category">Business</td>
            <td><button id="drop-button">Drop</button></td>
          </tr>
          <!-- Add more user rows as needed -->
        </tbody>
      </table>
    </div>
  </body>
</html>