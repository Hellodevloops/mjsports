<!DOCTYPE html>
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
        a {
            color: #007BFF;
            text-decoration: none;
        }
        .logo img {
            border-radius: 5px;
            display: block;
            margin-top: 10px;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Jersey Order Confirmation</h2>

    <h3>Order Details</h3>
    <table>
        <tr><td>First Name:</td><td>{{ $jersey->first_name }}</td></tr>
        <tr><td>Last Name:</td><td>{{ $jersey->last_name }}</td></tr>
        <tr><td>Email:</td><td>{{ $jersey->email }}</td></tr>
        <tr><td>Mobile Number:</td><td>{{ $jersey->mobile_number }}</td></tr>
        <tr><td>Jersey Size:</td><td>{{ $jersey->jersey_size }}</td></tr>
        <tr><td>Material Choice:</td><td>{{ $jersey->material_choice }}</td></tr>
        <tr><td>Team Name:</td><td>{{ $jersey->team_name ?? 'N/A' }}</td></tr>
        <tr><td>Patterns:</td><td>{{ $jersey->patterns ?? 'N/A' }}</td></tr>
        <tr><td>Special Instructions:</td><td>{{ $jersey->special_instructions ?? 'None' }}</td></tr>
    </table>

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
                <a href="{{ asset('storage/logos/' . $jersey->left_chest_logo_image) }}" target="_blank">
                    <img src="{{ asset('storage/logos/' . $jersey->left_chest_logo_image) }}" width="100" alt="Left Chest Logo">
                </a>
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
                <a href="{{ asset('storage/logos/' . $jersey->right_chest_logo_image) }}" target="_blank">
                    <img src="{{ asset('storage/logos/' . $jersey->right_chest_logo_image) }}" width="100" alt="Right Chest Logo">
                </a>
            </td>
        </tr>
        @endif
    </table>
</div>

</body>
</html>
