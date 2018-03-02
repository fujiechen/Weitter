<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Register Confirmation Link</title>
</head>
<body>
  <h1>Thank you to register！</h1>

  <p>
    Please click the following link to finish your registration：
    <a href="{{ route('confirm_email', $user->activation_token) }}">
      {{ route('confirm_email', $user->activation_token) }}
    </a>
  </p>

  <p>
    If it is not your operation, please ignore this email!
  </p>
</body>
</html>