<?php
$menu=include Eleanor::$root.'addons/menus/multiline.php';
try
{
	return$menu ? Eleanor::$Template->BlockMenu($menu,null) : false;
}
catch(EE$E)
{
	return'Template BlockMenu does not exists.';
}