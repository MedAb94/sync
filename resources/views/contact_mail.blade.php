<!DOCTYPE html>
<html>
<head>
    <title>New Contact Form Submission</title>
</head>
<body style="font-family: Arial, sans-serif; background-color: #f4f4f4; margin: 0; padding: 0;">
<table align="center" width="100%" cellpadding="0" cellspacing="0"
       style="max-width: 600px; background-color: #ffffff; border-radius: 8px; box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1); margin: 20px auto; padding: 20px;">
    <tr>
        <td style="text-align: center; padding-bottom: 20px;">
            <h2 style="color: #333; margin-bottom: 5px;">📩 New Contact Message</h2>
            <p style="color: #666; font-size: 14px;">You have received a new message from your website contact form.</p>
            <hr style="border: 1px solid #ddd;">
        </td>
    </tr>

    <tr>
        <td style="padding: 15px;">
            <p style="font-size: 16px; color: #333;"><strong>👤 Name:</strong> {{ $data['name'] }}</p>
            <p style="font-size: 16px; color: #333;"><strong>📧 Email:</strong> <a href="mailto:{{ $data['email'] }}"
                                                                                  style="color: #007bff; text-decoration: none;">{{ $data['email'] }}</a>
            </p>
            <p style="font-size: 16px; color: #333;"><strong>📱 WhatsApp:</strong> <a
                    href="https://wa.me/{{ $data['whatsapp'] }}"
                    style="color: #25D366; text-decoration: none;">{{ $data['whatsapp'] }}</a></p>
            <p style="font-size: 16px; color: #333;"><strong>💬 Message:</strong></p>
            <p style="background-color: #f8f9fa; padding: 12px; border-radius: 5px; font-size: 15px; color: #555;">{{ $data['message'] }}</p>
        </td>
    </tr>

    <tr>
        <td style="text-align: center; padding-top: 20px;">
            <hr style="border: 1px solid #ddd;">
            <p style="color: #888; font-size: 13px;">This email was automatically generated. Please do not reply.</p>
        </td>
    </tr>
</table>
</body>
</html>
