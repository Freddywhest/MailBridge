<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            padding: 20px;
        }
        .mail-container {
            background: #ffffff;
            border: 1px solid #ddd;
            border-radius: 8px;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }
        .mail-header {
            border-bottom: 1px solid #eee;
            margin-bottom: 20px;
        }
        .mail-header h2 {
            margin: 0;
            color: #333;
        }
        .mail-footer {
            margin-top: 20px;
            font-size: 13px;
            color: #888;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="mail-container">
        {!! $bodyText !!}
    </div>
</body>
</html>
