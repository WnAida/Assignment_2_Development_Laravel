<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Maternal Health Risk Patient Data</title>
    <style>
        body {
          padding: 20px; /* Adjust the padding as needed */
        }

        table {
          border-collapse: collapse;
          width: 100%;
        }

        th, td {
          border: 1px solid #ddd;
          text-align: left;
          padding: 15px;
        }
    </style>
</head>
<body>

    <h2>Maternal Health Risk Data</h2>

    <table>
      <tr>
        <th>Age</th>
        <th>Systolic BP</th>
        <th>Diastolic BP</th>
        <th>Blood Sugar</th>
        <th>Body Temperature</th>
        <th>Heart Rate</th>
        <th>Risk</th>
      </tr>
      @foreach($MyData as $data)
      <tr>
        <td>{{$data['age']}}</td>
        <td>{{$data['SystolicBP']}}</td>
        <td>{{$data['DiastolicBP']}}</td>
        <td>{{$data['Blood_sugar']}}</td>
        <td>{{$data['Body_temp']}}</td>
        <td>{{$data['heartrate']}}</td>
        <td>{{$data['risk']}}</td>
      </tr>
      @endforeach
    </table>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
