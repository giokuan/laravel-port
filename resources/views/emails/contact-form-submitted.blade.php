<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form Submission</title>
</head>

<body>
    <section style="max-width: 600px; margin: auto; padding: 20px; font-family: Arial, sans-serif; background-color: #f9f9f9;">
        <header style="text-align: center; margin-bottom: 20px;">
            <a href="#">
                <img src="https://merakiui.com/images/full-logo.svg" alt="Logo" style="height: 40px;">
            </a>
        </header>

        <main style="background-color: #fff; padding: 20px; border-radius: 10px; box-shadow: 0 0 10px rgba(0,0,0,0.1);">
            <h2 style="color: #333;">New Contact Form Submission</h2>

            {{-- <p><strong>Name:</strong> {{ $name ?? 'N/A' }}</p>
            <p><strong>Email:</strong> {{ $email ?? 'N/A' }}</p>
            <p><strong>Message:</strong></p>
            <blockquote style="border-left: 4px solid #007bff; padding-left: 10px; color: #555;">
                {{ $messageContent ?? 'No message provided.' }}
            </blockquote> --}}

            <p><strong>Name:</strong> {{ $name ?? 'N/A' }}</p>
    <p><strong>Email:</strong> {{ $email ?? 'N/A' }}</p>
    <p><strong>Message:</strong></p>
    <blockquote>{{ $messageContent ?? 'No message provided.' }}</blockquote>


            <p style="margin-top: 20px; color: #666;">Thanks,<br>{{ $name ?? 'Anonymous' }}</p>
        </main>

        <footer style="text-align: center; margin-top: 20px; color: #888; font-size: 12px;">
            <p>This email was sent from the contact form. If you didn't expect this, please ignore it.</p>
            <p>© {{ date('Y') }} Your Company. All Rights Reserved.</p>
        </footer>
    </section>
</body>

</html>
