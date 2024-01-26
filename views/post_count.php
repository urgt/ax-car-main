<div class="post_count" data-aos="fade-up" data-aos-delay="300"> 
    <?php
    $term = get_queried_object(); // Получаем объект текущей таксономии
    
    if ($term) {
        $term_count = $term->count; // Получаем количество записей для таксономии
        echo '<h2>' . single_term_title('', false) . '</h2>'; // Выводим заголовок таксономии
        echo '<p>' . $term_count . ' cars</p>'; // Выводим количество записей
    }
    ?>
</div>