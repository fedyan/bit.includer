<?if(!check_bitrix_sessid()) return;
IncludeModuleLangFile(__FILE__);

echo CAdminMessage::ShowNote( GetMessage("MODULE_REMOVE_SUCCESS"));
?><form action="<?echo $APPLICATION->GetCurPage()?>">
    <?=bitrix_sessid_post()?>
    <p><?echo GetMessage("CONTENT_INCLUDER_REMOVE_PARAMS"); ?></p>
    <input type="hidden" name="lang" value="<?echo LANG?>">
    <input type="hidden" name="id" value="bit.includer">
    <input type="hidden" name="uninstall" value="Y">
    <input type="hidden" name="step" value="2">
    <input type="hidden" name="lang" value="<?echo LANG?>">
    <p><input type="checkbox" id="sample_iblock" name="remove_sample_iblock" value="Y" checked>
        <label for="sample_iblock"><?echo GetMessage("CONTENT_INCLUDER_REMOVE_IBLOCK")?></label></p>
    <input type="submit" name="" value="<?echo GetMessage("MOD_REMOVE")?>">
    <form>