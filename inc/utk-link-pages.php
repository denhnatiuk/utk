<?php
/**
 * Альтернатива wp_link_pages
 * ver: 1.0
 */


function utk_link_pages(){

	## Настройки ================
	$text_num_page   = ''; // Текст для количества страниц. {current} заменится текущей, а {last} последней. Пример: 'Страница {current} из {last}' = Страница 4 из 60
	$num_pages       = 3; // сколько ссылок показывать
	$stepLink        = 3; // после навигации ссылки с определенным шагом (значение = число (какой шаг) или '', если не нужно показывать). Пример: 1,2,3...10,20,30
	$dotright_text   = '…'; // промежуточный текст "до".
	$dotright_text2  = '…'; // промежуточный текст "после".
	$backtext        = '« назад'; // текст "перейти на предыдущую страницу". Ставим '', если эта ссылка не нужна.
	$nexttext        = 'вперед »'; // текст "перейти на следующую страницу". Ставим '', если эта ссылка не нужна.
	$first_page_text = '« к началу'; // текст "к первой странице" или ставим '', если вместо текста нужно показать номер страницы.
	$last_page_text  = 'в конец »'; // текст "к последней странице" или пишем '', если вместо текста нужно показать номер страницы.
	## / Настроек ================

	global $page, $numpages;

	$paged    = (int) $page;
	$max_page = $numpages;

	if( $max_page <= 1 )
		return false; // если навигация не нужна

	if( empty($paged) || $paged == 0) $paged = 1;

	$pages_to_show         = intval($num_pages);
	$pages_to_show_minus_1 = $pages_to_show-1;

	$half_page_start = floor($pages_to_show_minus_1/2); // сколько ссылок до текущей страницы
	$half_page_end   = ceil($pages_to_show_minus_1/2); // сколько ссылок после текущей страницы

	$start_page = $paged - $half_page_start; // первая страница
	$end_page   = $paged + $half_page_end; // последняя страница (условно)

	if( $start_page <= 0)
		$start_page = 1;

	if( ($end_page - $start_page) != $pages_to_show_minus_1 )
		$end_page = $start_page + $pages_to_show_minus_1;

	if( $end_page > $max_page ){
		$start_page = $max_page - $pages_to_show_minus_1;
		$end_page   = (int) $max_page;
	}

	if( $start_page <= 0 ) $start_page = 1;

	// вывод
	$out = '<div class="wp-pagenavi">'. "\n";

		if( $text_num_page ){
			$text_num_page = preg_replace ('!{current}|{last}!', '%s', $text_num_page );
			$out .= sprintf ("<span class='pages'>$text_num_page</span>", $paged,$max_page );
		}

		if( $backtext && $paged != 1 )
			$out.= _wp_link_page($paged-1) . $backtext .'</a>';

		if( $start_page >= 2 && $pages_to_show < $max_page ) {
			$out .= _wp_link_page(1) . ( $first_page_text ?: 1 ) .'</a>';
			if( $dotright_text && $start_page != 2 )
				$out.= '<span class="extend">'. $dotright_text .'</span>';
		}

		for( $i = $start_page; $i <= $end_page; $i++ ){
			if( $i == $paged ) 
				$out .= '<span class="current">'. $i .'</span>';
			else
				$out .= _wp_link_page($i) . $i .'</a>';

		}

		//ссылки с шагом
		if( $stepLink && $end_page < $max_page ){
			for( $i=$end_page+1; $i<=$max_page; $i++ ){
				if( $i % $stepLink == 0 && $i !== $num_pages ){
					if( ++$dd == 1 )
						$out.= '<span class="extend">'. $dotright_text2 .'</span>';
					$out .= _wp_link_page($i) . $i .'</a>';
				}
			}
		}

		if( $end_page < $max_page ) {
			if( $dotright_text && $end_page != ($max_page-1) )
				$out.= '<span class="extend">'. $dotright_text2 .'</span>';
			$out .= _wp_link_page($max_page) . ( $last_page_text ?: $max_page ) .'</a>';
		}

		if( $nexttext && $paged != $end_page )
			$out .= _wp_link_page($paged+1) . $nexttext .'</a>';

	$out .= '</div>';

	return $out;
}