<?php
/*25. Приведите пример, чем отличается <?php от <?=. */


/*1.  <?php echo 'если вы хотите хранить код PHP в документах XHTML или XML,
                то используйте эти теги'; ?>

2. Вы можете использовать короткий 'echo'-тег чтобы <?= 'напечатать эту строку' ?>.
    Он всегда разрешен начиная с PHP 5.4.0. Этот тег эквивалентен такому коду
    <?php echo 'напечатать эту строку' ?>.

3.  <? echo 'этот код с короткими тегами, но он будет работать только если '.
                'включена опция "short_open_tag"'; ?> *?