<?php
/*
	Copyright © Eleanor CMS
	URL: http://eleanor-cms.ru, http://eleanor-cms.com
	E-mail: support@eleanor-cms.ru
	Developing: Alexander Sunvas*
	Interface: Rumin Sergey
	=====
	*Pseudonym

	Шаблон по умолчанию для админки модуля контексных ссылок
	Рекомендуется скопировать этот файл в templates/[шаблон админки]/Classes/[имя этого файла] и там уже начинать править.
	В случае если такой файл уже существует - правьте его.
*/

class TPLAdminCL
{
	/*
		Страница отображения всех контексных ссылок
		$items - массив контексных ссылок. Формат: ID=>array(), ключи внутреннего массива:
			date_from - дата начала обработки
			date_till - дата завершения обработки
			status - статус активности контексной ссылки
			from - исходная строка преобразования контексной ссылки (из)
			to - результат преобразования контексной ссылки (в)
			_aswap - ссылка на включение / выключение активности контексной ссылки
			_aedit - ссылка на редактирование контексной ссылки
			_adel - ссылка на удаление контексной ссылки
		$cnt - число пунктов меню всего
		$pp - количество пунктов меню на страницу
		$qs - массив параметров адресной строки для каждого запроса
		$page - номер текущей страницы, на которой мы сейчас находимся
		$links - перечень необходимых ссылок, массив с ключами:
			sort_id - ссылка на сортировку списка $items по ID (возрастанию/убыванию в зависимости от текущей сортировки)
			sort_from - ссылка на сортировку списка $items по словам для замены (возрастанию/убыванию в зависимости от текущей сортировки)
			sort_to - ссылка на сортировку списка $items по тексту ссылки (возрастанию/убыванию в зависимости от текущей сортировки)
			sort_date_from - ссылка на сортировку списка $items по дате начала преобразований (возрастанию/убыванию в зависимости от текущей сортировки)
			sort_date_till - ссылка на сортировку списка $items по дате завершения преобразований (возрастанию/убыванию в зависимости от текущей сортировки)
			sort_status - ссылка на сортировку списка $items по статусу активности (возрастанию/убыванию в зависимости от текущей сортировки)
			form_items - ссылка для параметра action формы, внтури которой происходит отображение перечня $items
			pp - фукнция-генератор ссылок на изменение количества пунктов меню отображаемых на странице
			first_page - ссылка на первую страницу пагинатора
			pages - функция-генератор ссылок на остальные страницы
	*/
	public static function ShowList($items,$cnt,$pp,$qs,$page,$links)
	{

	}

	/*
		Страница добавления/редактирования контексной ссылки
		$id - идентификатор редактируемой контексной ссылки, если $id==0 значит контексная ссылка добавляется
		$controls - перечень контролов в соответствии с классом контролов. Если какой-то элемент массива не является массивом, значит это заголовок подгруппы контролов
		$values - результирующий HTML код контролов, который необходимо вывести на странице. Ключи данного массива совпадают с ключами $controls
		$errors - массив ошибок
		$back - URL возврата
		$hasdraft - признак того, что у контексной ссылки черновик
		$links - перечень необходимых ссылок, массив с ключами:
			delete - ссылка на удаление категории или false
			nodraft - ссылка на правку/добавление категории без использования черновика или false
			draft - ссылка на сохранение черновиков (для фоновых запросов)
	*/
	public static function AddEdit($id,$controls,$values,$errors,$back,$hasdraft,$links)
	{

	}
}