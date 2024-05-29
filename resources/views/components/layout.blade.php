<!-- resources/views/components/layout.blade.php -->
<html>
<head>
    <title>{{ $title ?? 'Todo Manager' }}</title>
</head>
<body>
<h1>Exso</h1>
<a href="/">Главная</a> <a href="/jobs">Мы предлагаем (виды работ)</a> <a href="/examples">Примеры наших работ</a> <a href="/contacts">Контакты</a>
<hr/>
{{ $slot }}
</body>
</html>
