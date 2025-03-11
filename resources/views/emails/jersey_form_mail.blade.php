<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Jersey Order Confirmation</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background-color: #f4f7fc;
      padding: 30px;
      color: #333;
    }
    .container {
      max-width: 700px;
      background-color: #ffffff;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.15);
      margin: auto;
    }
    h2 {
      text-align: center;
      color: #2c3e50;
      font-weight: 600;
      margin-bottom: 15px;
      border-bottom: 3px solid #3498db;
      padding-bottom: 10px;
    }
    h3 {
      color: #34495e;
      font-size: 18px;
      border-left: 5px solid #3498db;
      padding-left: 10px;
      margin-top: 25px;
    }
    table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 10px;
      background: #f8f9fc;
      border-radius: 8px;
      overflow: hidden;
    }
    td, th {
      padding: 12px;
      border-bottom: 1px solid #ddd;
    }
    td:first-child {
      font-weight: bold;
      color: #555;
      width: 40%;
      background: #ecf0f1;
    }
    .logo-note {
      padding: 12px;
      margin-top: 10px;
      background-color: #e8f4fd;
      border-radius: 5px;
      border-left: 4px solid #3498db;
      font-style: italic;
    }
    .list-container {
      padding: 15px;
      background-color: #f5f7fa;
      margin-top: 10px;
      border-radius: 8px;
      border-left: 4px solid #3498db;
    }
    .list-container ul {
      padding-left: 20px;
    }
    .list-container li {
      margin-bottom: 5px;
    }
    .button {
      display: block;
      width: 100%;
      text-align: center;
      background: #3498db;
      color: #fff;
      padding: 12px;
      margin-top: 20px;
      border-radius: 5px;
      text-decoration: none;
      font-weight: 600;
    }
    .button:hover {
      background: #2980b9;
    }
  </style>
</head>
<body>
<div class="container">
  <h2>Jersey Order Confirmation</h2>

  <h3>Order Details</h3>
  <table>
    <tr>
      <td>Team Name:</td>
      <td>{{ $jersey->team_name ?? 'N/A' }}</td>
    </tr>
    <tr>
      <td>Patterns:</td>
      <td>{{ $jersey->patterns ?? 'N/A' }}</td>
    </tr>
    <tr>
      <td>Special Instructions:</td>
      <td>{{ $jersey->special_instructions ?? 'None' }}</td>
    </tr>
  </table>

  @if($jersey->first_name)
  <h3>Personal Information</h3>
  <table>
    <tr>
      <td>First Name:</td>
      <td>{{ $jersey->first_name }}</td>
    </tr>
    <tr>
      <td>Last Name:</td>
      <td>{{ $jersey->last_name }}</td>
    </tr>
    <tr>
      <td>Email:</td>
      <td>{{ $jersey->email }}</td>
    </tr>
    <tr>
      <td>Mobile Number:</td>
      <td>{{ $jersey->mobile_number }}</td>
    </tr>
  </table>
  @endif

  @php
    // Decode the JSON jersey specifications stored in the jersey_specifications field
    $jerseySpecs = json_decode($jersey->jersey_specifications, true);
  @endphp

  @if(!empty($jerseySpecs))
  <h3>Jersey Specifications</h3>
  <table>
    <tr>
      <th>Total Members</th>
      <th>Name</th>
      <th>Jersey Size</th>
      <th>Material Choice</th>
      <th>Sleeves</th>
      <th>Number</th>
    </tr>
    @foreach($jerseySpecs as $index => $spec)
      <tr>
        <td>{{ $index + 1 }}</td>
        <td>{{ $spec['name'] ?? 'N/A' }}</td>
        <td>{{ $spec['jersey_size'] ?? 'N/A' }}</td>
        <td>{{ $spec['material_choice'] ?? 'N/A' }}</td>
        <td>{{ $spec['sleeves'] ?? 'N/A' }}</td>
        <td>{{ $spec['number'] ?? 'N/A' }}</td>
      </tr>
    @endforeach
  </table>
  @endif

  <h3>Logos</h3>
  <table>
    <tr>
      <td>Left Chest Logo (Text):</td>
      <td>
        @if (filter_var($jersey->left_logo, FILTER_VALIDATE_URL))
          <a href="{{ $jersey->left_logo }}" target="_blank">{{ $jersey->left_logo }}</a>
        @else
          {{ $jersey->left_logo }}
        @endif
      </td>
    </tr>
    <tr>
      <td>Right Chest Logo (Text):</td>
      <td>
        @if (filter_var($jersey->right_logo, FILTER_VALIDATE_URL))
          <a href="{{ $jersey->right_logo }}" target="_blank">{{ $jersey->right_logo }}</a>
        @else
          {{ $jersey->right_logo }}
        @endif
      </td>
    </tr>
  </table>

  @if($jersey->left_chest_logo_image || $jersey->right_chest_logo_image)
  <div class="logo-note">
    <p><strong>Note:</strong> The logo images you uploaded have been attached to this email. Please check the email attachments to view them.</p>
  </div>
  @endif
</div>
</body>
</html>
