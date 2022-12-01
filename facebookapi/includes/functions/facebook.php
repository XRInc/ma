<?php
function get_facebook_param($f_key)
{
    global $db;
    $sql = " select f_value from " . TABLE_FACEBOOK_PARAM . " where f_key='".$f_key."' and f_group_id=1";
    $result = $db->Execute($sql);
    $f_value = 0;
    if($result->RecordCount() > 0) {
        $f_value = $result->fields['f_value'];
    }
    return $f_value;
}