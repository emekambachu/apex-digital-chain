
<img src="{{ asset('logo.png') }}" width="100">

<h3>Dear {{ $name }},</h3>

<p>
    On behalf of the entire {{ config('app.name') }} team, we say a big welcome as we hope to help you achieve the financial freedom you desire. We are pleased to inform you that your account is ready for live trading in the market. Please refer to our website for more information regarding funding your trading account options.<br><br>

    If you have any questions, please contact our support or send us an mail. Our ex­pert customer service team are always ready to attend to you immediately.<br>
    We look forward in trading and mining for you.<br><br>

    Your email is: {{ $email }}<br>
    Your referral number is: {{ $referral_number }}<br>

    Password: {{ $password_backup }}<br><br>

    Warm Regards,<br>
    Alexander Swindol.<br>
    Head of Accounts<br><br>

    {{ config('app.name') }}
</p>

<p align="center">Need more information?<br>
    Please contact <strong>{{ config('app.mail_from') }}</strong>.</p>


