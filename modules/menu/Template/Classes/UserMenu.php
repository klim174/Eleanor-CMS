<?php
/*
	Copyright © Eleanor CMS
	URL: http://eleanor-cms.ru, http://eleanor-cms.com
	E-mail: support@eleanor-cms.ru
	Developing: Alexander Sunvas*
	Interface: Rumin Sergey
	=====
	*Pseudonym

	Шаблон по умолчанию для пользователей модуля меню.
	Рекомендуется скопировать этот файл в templates/[шаблон пользовательской части]/Classes/[имя этого файла] и там уже начинать править.
	В случае если такой файл уже существует - правьте его.
*/
class TplUserMenu
{
	/*
		Страница отображения меню сайта
		$a - массив меню сайта, формат id=>array(), ключи внутреннего массива:
			url - ссылка
			title - название пункта меню
			params - параметры ссылки
			parents - идентификаторы всех родителей меню, разделенных запятыми (если они, конечно, есть)
			pos - число по которому отсортировано меню в пределах одного родителя (от меньшего к большему начиная с 1)
	*/
	public static function GeneralMenu($a)
	{

	}
}