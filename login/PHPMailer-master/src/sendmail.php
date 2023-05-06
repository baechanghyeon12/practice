    <!doctype html>
    <html lang="ko">
    <head>
        <meta charset="utf-8">
        <title>PHP</title>
        <style>
        body { font-family: sans-serif; }
        input, textarea { font-family: sans-serif; }
        textarea { width: 600px; height: 300px; }
        </style>
    </head>
    <body>
        <form action="mail.php" method="POST">
        <p><input type="text" name="subject" placeholder="제목" required /></p>
        <p><textarea name="content" required></textarea></p>
        <p><input type="submit" /></p>
        </form>
    </body>
    </html>