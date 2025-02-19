{{-- <!DOCTYPE html>
<html>
<head>
    <title>Jersey Order Confirmation</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            padding: 20px;
        }
        .container {
            max-width: 600px;
            background-color: #ffffff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            margin: auto;
        }
        h2, h3 {
            text-align: center;
            color: #333;
            border-bottom: 2px solid #ddd;
            padding-bottom: 8px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 15px;
        }
        td {
            padding: 10px;
            border-bottom: 1px solid #eee;
        }
        td:first-child {
            font-weight: bold;
            color: #555;
            width: 40%;
        }
        .logo img {
            max-width: 150px;
            border-radius: 5px;
            display: block;
            margin-top: 10px;
        }
        .list-container {
            padding: 10px;
            background-color: #f9f9f9;
            margin-top: 10px;
            border-radius: 5px;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Jersey Order Confirmation</h2>

    <h3>Order Details</h3>
    <table>
        <tr><td>Team Name:</td><td>{{ $jersey->team_name ?? 'N/A' }}</td></tr>
        <tr><td>Patterns:</td><td>{{ $jersey->patterns ?? 'N/A' }}</td></tr>
        <tr><td>Special Instructions:</td><td>{{ $jersey->special_instructions ?? 'None' }}</td></tr>
    </table>

    <!-- Single Entry -->
    @if($jersey->first_name)
    <h3>Personal Information</h3>
    <table>
        <tr><td>First Name:</td><td>{{ $jersey->first_name }}</td></tr>
        <tr><td>Last Name:</td><td>{{ $jersey->last_name }}</td></tr>
        <tr><td>Email:</td><td>{{ $jersey->email }}</td></tr>
        <tr><td>Mobile Number:</td><td>{{ $jersey->mobile_number }}</td></tr>
        <tr><td>Jersey Size:</td><td>{{ $jersey->jersey_size }}</td></tr>
        <tr><td>Material Choice:</td><td>{{ $jersey->material_choice }}</td></tr>
        <tr><td>Sleeves:</td><td>{{ $jersey->sleeves }}</td></tr>
        <tr><td>Number:</td><td>{{ $jersey->number }}</td></tr>
    </table>
    @endif

    <!-- Multiple Entries -->
    @if(!empty($personalInfo))
    <h3>Multiple Personal Entries</h3>
    <div class="list-container">
        @foreach($personalInfo as $index => $person)
            <p><strong>Entry {{ $index + 1 }}:</strong></p>
            <ul>
                <li>First Name: {{ $person['first_name'] ?? 'N/A' }}</li>
                <li>Last Name: {{ $person['last_name'] ?? 'N/A' }}</li>
                <li>Email: {{ $person['email'] ?? 'N/A' }}</li>
                <li>Mobile Number: {{ $person['mobile_number'] ?? 'N/A' }}</li>
            </ul>
        @endforeach
    </div>
    @endif

    @if(!empty($jerseySpecs))
    <h3>Jersey Specifications</h3>
    <div class="list-container">
        @foreach($jerseySpecs as $index => $spec)
            <p><strong>Entry {{ $index + 1 }}:</strong></p>
            <ul>
                <li>Jersey Size: {{ $spec['jersey_size'] ?? 'N/A' }}</li>
                <li>Material Choice: {{ $spec['material_choice'] ?? 'N/A' }}</li>
                <li>Sleeves: {{ $spec['sleeves'] ?? 'N/A' }}</li>
                <li>Number: {{ $spec['number'] ?? 'N/A' }}</li>
            </ul>
        @endforeach
    </div>
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
        @if($jersey->left_chest_logo_image)
        <tr>
            <td>Left Chest Logo (Image):</td>
            <td class="logo">
                <img src="{{ asset('storage/' . $jersey->left_chest_logo_image) }}" alt="Left Chest Logo">
            </td>
        </tr>
        @endif

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
        @if($jersey->right_chest_logo_image)
        <tr>
            <td>Right Chest Logo (Image):</td>
            <td class="logo">
                <img src="{{ asset('storage/' . $jersey->right_chest_logo_image) }}" alt="Right Chest Logo">
            </td>
        </tr>
        @endif
    </table>

</div>

</body>
</html> --}}
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
        td {
            padding: 12px;
            border-bottom: 1px solid #ddd;
        }
        td:first-child {
            font-weight: bold;
            color: #555;
            width: 40%;
            background: #ecf0f1;
        }
        .logo img {
            max-width: 120px;
            border-radius: 5px;
            display: block;
            margin: 10px auto;
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
        <tr><td>Team Name:</td><td>{{ $jersey->team_name ?? 'N/A' }}</td></tr>
        <tr><td>Patterns:</td><td>{{ $jersey->patterns ?? 'N/A' }}</td></tr>
        <tr><td>Special Instructions:</td><td>{{ $jersey->special_instructions ?? 'None' }}</td></tr>
    </table>

    @if($jersey->first_name)
    <h3>Personal Information</h3>
    <table>
        <tr><td>First Name:</td><td>{{ $jersey->first_name }}</td></tr>
        <tr><td>Last Name:</td><td>{{ $jersey->last_name }}</td></tr>
        <tr><td>Email:</td><td>{{ $jersey->email }}</td></tr>
        <tr><td>Mobile Number:</td><td>{{ $jersey->mobile_number }}</td></tr>
        <tr><td>Jersey Size:</td><td>{{ $jersey->jersey_size }}</td></tr>
        <tr><td>Material Choice:</td><td>{{ $jersey->material_choice }}</td></tr>
        <tr><td>Sleeves:</td><td>{{ $jersey->sleeves }}</td></tr>
        <tr><td>Number:</td><td>{{ $jersey->number }}</td></tr>
    </table>
    @endif

    @if(!empty($personalInfo))
    <h3>Multiple Personal Entries</h3>
    <div class="list-container">
        @foreach($personalInfo as $index => $person)
            <p><strong>Entry {{ $index + 1 }}:</strong></p>
            <ul>
                <li>First Name: {{ $person['first_name'] ?? 'N/A' }}</li>
                <li>Last Name: {{ $person['last_name'] ?? 'N/A' }}</li>
                <li>Email: {{ $person['email'] ?? 'N/A' }}</li>
                <li>Mobile Number: {{ $person['mobile_number'] ?? 'N/A' }}</li>
            </ul>
        @endforeach
    </div>
    @endif

    @if(!empty($jerseySpecs))
    <h3>Jersey Specifications</h3>
    <div class="list-container">
        @foreach($jerseySpecs as $index => $spec)
            <p><strong>Entry {{ $index + 1 }}:</strong></p>
            <ul>
                <li>Jersey Size: {{ $spec['jersey_size'] ?? 'N/A' }}</li>
                <li>Material Choice: {{ $spec['material_choice'] ?? 'N/A' }}</li>
                <li>Sleeves: {{ $spec['sleeves'] ?? 'N/A' }}</li>
                <li>Number: {{ $spec['number'] ?? 'N/A' }}</li>
            </ul>
        @endforeach
    </div>
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
        @if($jersey->left_chest_logo_image)
        <tr>
            <td>Left Chest Logo (Image):</td>
            <td class="logo">
                <img src="{{ asset('storage/' . $jersey->left_chest_logo_image) }}" alt="Left Chest Logo">
            </td>
        </tr>
        @endif

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
        @if($jersey->right_chest_logo_image)
        <tr>
            <td>Right Chest Logo (Image):</td>
            <td class="logo">
                <img src="{{ asset('storage/' . $jersey->right_chest_logo_image) }}" alt="Right Chest Logo">
            </td>
        </tr>
        @endif
    </table>


</div>

</body>
</html>

