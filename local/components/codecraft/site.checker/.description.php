<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}

use Bitrix\Main\Localization\Loc;

$arComponentDescription = ['NAME'        => Loc::getMessage('COMPONENT_SITE_CHECKER_NAME'),
                           'DESCRIPTION' => Loc::getMessage('COMPONENT_SITE_CHECKER_DESCRIPTION'),
                           'ICON'        => '/images/icon.gif',
                           'COMPLEX'     => 'N',
                           'PATH'        => ['ID' => 'utility',],];