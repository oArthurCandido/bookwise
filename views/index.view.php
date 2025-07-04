<section class=" p-4">
<input type="text" placeholder="Search books..." class="mb-4 p-2 border rounded  mt-2 w-full md:w-1/2 lg:w-1/3 m-auto">
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
    <?php foreach ($livros as $livro): ?>
        <a href="livro?id=<?php echo $livro['id']; ?>" class="bg-white p-4 rounded shadow">
            <h2 class="text-lg font-semibold"><?php echo $livro['titulo']; ?></h2>
            <p class="text-gray-600">Autor: <?php echo $livro['autor']; ?></p>
        </a>
    <?php endforeach; ?>
</div>
</section>