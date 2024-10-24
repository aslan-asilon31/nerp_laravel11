<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KPI Results</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
    </style>
</head>
<body>
    <h1>Key Performance Indicators (KPI)</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>KPI Value</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($kpis as $id => $kpi)
                <tr>
                    <td>{{ $id }}</td>
                    <td>{{ $kpi['kpi'] }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="2">No KPI data available.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</body>
</html>
