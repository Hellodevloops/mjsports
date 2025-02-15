<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jersey Order Details</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 20px;
            padding: 0;
            background-color: #f8f9fa;
        }
        .container {
            max-width: 700px;
            margin: auto;
            background: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
        .header {
            text-align: center;
            font-size: 28px;
            font-weight: bold;
            color: #333;
            border-bottom: 2px solid #007bff;
            padding-bottom: 10px;
        }
        .details {
            margin-top: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
            font-size: 16px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: left;
        }
        th {
            background-color: #007bff;
            color: white;
        }
        td {
            background-color: #f9f9f9;
        }
        .highlight {
            font-weight: bold;
            color: #007bff;
        }
        .logo a {
            color: #007bff;
            text-decoration: none;
            font-weight: bold;
        }
        .logo a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">Jersey Order Details</div>

        <div class="details">
            <table>
                <tr>
                    <th>First Name</th>
                    <td class="highlight">{{ $jersey->first_name }}</td>
                </tr>
                <tr>
                    <th>Last Name</th>
                    <td>{{ $jersey->last_name }}</td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td>{{ $jersey->email }}</td>
                </tr>
                <tr>
                    <th>Mobile Number</th>
                    <td>{{ $jersey->mobile_number }}</td>
                </tr>
                <tr>
                    <th>Jersey Size</th>
                    <td class="highlight">{{ $jersey->jersey_size }}</td>
                </tr>
                <tr>
                    <th>Left Chest Logo</th>
                    <td class="logo">
                        @if(!empty($jersey->left_chest_logo))
                            <a href="{{ asset($jersey->left_chest_logo) }}" target="_blank">View Logo</a>
                        @else
                            N/A
                        @endif
                    </td>
                </tr>
                <tr>
                    <th>Right Chest Logo</th>
                    <td class="logo">
                        @if(!empty($jersey->right_chest_logo))
                            <a href="{{ asset($jersey->right_chest_logo) }}" target="_blank">View Logo</a>
                        @else
                            N/A
                        @endif
                    </td>
                </tr>
                <tr>
                    <th>Team Name</th>
                    <td>{{ $jersey->team_name ?? 'N/A' }}</td>
                </tr>
                <tr>
                    <th>Material Choice</th>
                    <td>{{ $jersey->material_choice }}</td>
                </tr>
                <tr>
                    <th>Patterns</th>
                    <td>{{ $jersey->patterns ?? 'N/A' }}</td>
                </tr>
                <tr>
                    <th>Special Instructions</th>
                    <td>{{ $jersey->special_instructions ?? 'N/A' }}</td>
                </tr>
            </table>
        </div>
    </div>
</body>
</html>
