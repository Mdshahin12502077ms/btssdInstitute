<!DOCTYPE html>
<html>
<head>
    <title>Query Send</title>
    <style>
        body {
            font-family: Arial,'NotoSansBangla', sans-serif;
            margin-top:0;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin: 0 auto;
            margin-bottom: 20px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 10px;
            width:50%;
            text-align: left;
        }
        th {
            background-color: #f4f4f4;
            color: #333;
            font-weight: bold;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        tr:hover {
            background-color: #f1f1f1;
        }
        caption {
            font-size: 1.5em;
            margin: 10px 0;
        }
        table, th, td {
            border: 2px solid #ddd;
        }
        @font-face {
            font-family: "NotoSansBengali";
            src: url({{ storage_path('fonts/NotoSansBengali.ttf') }}) format('truetype');
        }
        @media print {
            table {
                width: 100%;
                page-break-inside: auto;
            }
            tr {
                page-break-inside: avoid;
                page-break-after: auto;
            }
        }
    </style>
</head>
<body>
    @foreach($branches as $item)
    <table>

        <thead>
            <tr>
                <th>From,</th>
                <th>To,</th>

            </tr>
        </thead>
        <tbody>
               @php
                  $admin=App\Models\BackendSettings::first();
               @endphp

                <tr>
                    <td>Name: {{$admin->sub_title}}</td>
                    <td>{{ $item->Propietor_Name }}</td>
                </tr>
                <tr>
                    <td>Address: {{$admin->address}}
                    </td>
                    <td>{{ $item->address }}</td>
                </tr>
                <tr>
                    <td>Cell No: {{$admin->phone}}</td>
                    <td>{{ $item->mobile_number }}</td>
                </tr>

        </tbody>
    </table>
    @endforeach
</body>
</html>
