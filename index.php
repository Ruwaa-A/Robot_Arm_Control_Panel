<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Robot Arm Control Panel</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet" />
  <style>


body {
      font-family: 'Inter', sans-serif;
      background-color: ivory;
      margin: 0;
      padding: 40px;
      color: #333;
    }
    h2 {
      text-align: center;
      margin-bottom: 30px;
      font-weight: 600;
      color: #a84ae2;
    }
    .panel {
      background-color: white;
      max-width: 600px;
      margin: auto;
      padding: 30px;
      border-radius: 12px;
      box-shadow: 0 8px 24px rgba(0, 0, 0, 0.08);
    }
    .slider-group {
      display: flex;
      align-items: center;
      margin-bottom: 20px;
    }
    .slider-group label {
      flex: 1;
      font-weight: 500;
    }
    .slider-group input[type="range"] {
      flex: 4;
      margin: 0 15px;
      accent-color: #e24aaf;
    }
    .slider-group span {
      width: 40px;
      text-align: right;
      font-weight: 500;
    }
    .buttons {
      text-align: center;
      margin-top: 30px;
    }
    .buttons input[type="submit"],
    .buttons input[type="reset"] {
      background-color: #a84ae2;
      color: white;
      border: none;
      padding: 10px 20px;
      margin: 5px;
      font-weight: 600;
      border-radius: 6px;
      cursor: pointer;
    }
    .buttons input[type="submit"]:hover,
    .buttons input[type="reset"]:hover {
      background-color: #9035c4;
    }
    table {
      width: 100%;
      margin-top: 40px;
      border-collapse: collapse;
      background: white;
      border-radius: 10px;
      overflow: hidden;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
    }
    th, td {
      padding: 12px;
      text-align: center;
      border-bottom: 1px solid #eee;
    }
    th {
      background-color: #9035c43f;
      font-weight: 600;
    }
    td button {
      background-color: #eee;
      border: none;
      padding: 5px 10px;
      border-radius: 4px;
      cursor: pointer;
      margin: 2px;
      font-weight: 500;
    }
    td button:hover {
      background-color: #ddd;
    }
  </style>
</head>

<body>

  <h2>Robot Arm Control Panel</h2>

  <form action="pose.php" method="POST">
    <div class="panel">


    <div class="slider-group">
        <label for="motor1">Motor 1</label>
        <input type="range" id="motor1" name="motor1" min="0" max="180" value="90" />
        <span>90</span>
      </div>

      <div class="slider-group">
        <label for="motor2">Motor 2</label>
        <input type="range" id="motor2" name="motor2" min="0" max="180" value="90" />
        <span>90</span>
      </div>

      <div class="slider-group">
        <label for="motor3">Motor 3</label>
        <input type="range" id="motor3" name="motor3" min="0" max="180" value="90" />
        <span>90</span>
      </div>

      <div class="slider-group">
        <label for="motor4">Motor 4</label>
        <input type="range" id="motor4" name="motor4" min="0" max="180" value="90" />
        <span>90</span>
      </div>

      <div class="slider-group">
        <label for="motor5">Motor 5</label>
        <input type="range" id="motor5" name="motor5" min="0" max="180" value="90" />
        <span>90</span>
      </div>

      <div class="slider-group">
        <label for="motor6">Motor 6</label>
        <input type="range" id="motor6" name="motor6" min="0" max="180" value="90" />
        <span>90</span>
      </div>



      <div class="buttons">
        <input type="reset" value="Reset" />
        <input type="submit" value="Save Pose" />
      </div>
    </div>
  </form>



  <table>
    <thead>
      <tr>
        <th>#</th>
        <th>Motor 1</th>
        <th>Motor 2</th>
        <th>Motor 3</th>
        <th>Motor 4</th>
        <th>Motor 5</th>
        <th>Motor 6</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1</td>
        <td>90</td>
        <td>90</td>
        <td>59</td>
        <td>115</td>
        <td>34</td>
        <td>90</td>
        <td><button>Load</button> <button>Remove</button></td>
      </tr>
      <tr>
        <td>2</td>
        <td>137</td>
        <td>55</td>
        <td>90</td>
        <td>26</td>
        <td>90</td>
        <td>90</td>
        <td><button>Load</button> <button>Remove</button></td>
      </tr>
    </tbody>
  </table>




<script>
    document.querySelectorAll('.slider-group').forEach(group => {
      const slider = group.querySelector('input[type="range"]');
      const output = group.querySelector('span');
      output.textContent = slider.value;

      slider.addEventListener('input', () => {
        output.textContent = slider.value;
      });
    });
  </script>


</body>
</html>
