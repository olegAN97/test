<h1>Сатті блога</h1>
<?= $this->Html->link('Додати статтю', ['action' => 'add']) ?>
<table>
    <tr>
        <th>Id</th>
        <th>Заголовок</th>
        <th>Дата створення</th>
        <th>Дії</th>
    </tr>

<!-- Здесь мы проходимся в цикле по объекту запроса $articles, выводя данные статьи -->

    <?php foreach ($articles as $article): ?>
    <tr>
        <td><?= $article->id ?></td>
        <td>
            <?= $this->Html->link($article->title, ['action' => 'view', $article->id]) ?>
        </td>
        <td>
            <?= $article->created->format(DATE_RFC850) ?>
        </td>
        <td>
            <?= $this->Form->postLink(
                'Видалити',
                ['action' => 'delete', $article->id],
                ['confirm' => 'Ви впевнені?'])
            ?>
            <?= $this->Html->link('Редагувати', ['action' => 'edit', $article->id]) ?>
        </td>
    </tr>
    <?php endforeach; ?>

</table>