<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>{{ __('email_template.title') }}</title>
    <style>
        /* Inline styles for simplicity, consider using CSS classes for larger templates */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f1f1f1;
        }

        .logo {
            text-align: center;
            margin-bottom: 20px;
        }

        .logo img {
            max-width: 200px;
        }

        .message {
            padding: 20px;
            background-color: #ffffff;
        }

        .message p {
            margin-bottom: 10px;
        }

        .footer {
            text-align: center;
            margin-top: 20px;
        }
    </style>
</head>

<body>
    <div class="container">

        <div class="message">
            <h3>{{ __('email_template.greeting', ['name' => $mailData['name']]) }}</h3>
            <p>{{ __('email_template.registration_message') }}</p>
            <a href="{{ $mailData['email_verified_at'] }}">{{ __('email_template.verify_link') }}</a>
        </div>

        <div class="footer">
            <p>{{ __('email_template.footer') }}</p>
        </div>

    </div>
</body>

</html>
