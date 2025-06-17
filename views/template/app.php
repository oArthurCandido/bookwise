<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>BookWise</title>
</head>
<body>
    <header>
        <nav class="bg-gray-800 p-4">
            <ul class="flex space-x-4">
                <li><a href="/" class="text-white hover:text-gray-300 transition">Home</a></li>
            </ul>
        </nav>
    </header>
    <main>
            <?php require"views/{$view}.php"; ?>
    </main>
</body>
</html>