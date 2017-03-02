<h1>Додати статтю</h1>
<?php
    echo $this->Form->create($article);
    echo $this->Form->input('Заголовок');
    echo $this->Form->input('Текст', ['rows' => '3']);
    echo $this->Form->button(__('Зберегти статтю'));
    echo $this->Form->end();
?>