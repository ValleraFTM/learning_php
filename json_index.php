<!DOCTYPE html>
<html lang="ru">
<head>
    
    
    
    <title>передача JSON-данных</title>
    <meta charset="UTF-8">
    <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="/json_index.js"></script>
</head>
<body>
    <p id='js-hello'>Здравствуйте!</p>
    <form action="/json_answer.php" method="GET">
        <p> Имя: <input type="text" name="name" value="Ivan" /></p>
        <p>Фамилия:<input type="text" name="family" value="Ivanov" /></p> 
        <p><input type="submit" value="Представиться"><p>
    </form>
</body>
</html>