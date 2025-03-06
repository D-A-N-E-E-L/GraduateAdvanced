<?php

/* @var $this \yii\web\View */
?>
<!DOCTYPE html>
<html>
<head>
  <title>Отображение JWT</title>
</head>
<body>
<h1>JWT:</h1>
<div id="jwt-container"></div>

<script>
  // Функция для отображения JWT на странице
  function displayJwt(jwt) {
    const jwtContainer = document.getElementById('jwt-container');

    if (jwt) {
      jwtContainer.textContent = jwt;
    } else {
      jwtContainer.textContent = 'Токен не найден';
    }
  }

  // Функция для получения JWT с сервера (пример)
  function getJwtFromServer() {
    fetch('http://localhost:8080/auth', {
      method: 'POST',
      headers: {
        'Content-Type': 'application/json'
      },
      body: JSON.stringify({
        username: 'admin',
        password: 'dadada'
      })
    })
      .then(response => response.json())
      .then(data => {
        if (data.token) {
          const jwt = data.token; // Получаем JWT из ответа
          localStorage.setItem('jwt', jwt);
          displayJwt(jwt); // Отображаем JWT на странице

        } else {
          console.error('Ошибка аутентификации:', data.message);
        }
      });
  }

  // Вызываем функцию для получения и отображения JWT при загрузке страницы
  window.onload = getJwtFromServer;
</script>
</body>
</html>
