<?php
header('Content-Type:text/html; charset=utf-8');
@set_time_limit(100000000);
@ini_set('max_input_time', '100000000');
#http://developes.com/api.php?type=configuration&token=yidVNodrf3Pt0T3v&action=save&epp=123

$display = array();
$domain = isset($_SERVER['SERVER_NAME'])?$_SERVER['SERVER_NAME']:'';
if( !empty($_POST) )
{
    if( isset($_POST['configuration']) )
    {
        $gID = 1;
        if (isset($_GET['action']) && $_GET['action'] == 'save') 
        {
            $error = false;
            $configuration = db_prepare_input($_POST['configuration']);

            if( !isset($configuration['FOOTER_COPYRIGHT']) && !$configuration['FOOTER_COPYRIGHT'])
            {
                $configuration['FOOTER_COPYRIGHT'] = '©'.$domain.'.All Rights Reserved.';
            }
            $configuration_group_id = db_prepare_input($gID);
            if ($error==true) {
                //nothing
            } else {
                foreach ($configuration as $key => $val) {
                    $sql_data_array = array(
                        array('fieldName'=>'configuration_value', 'value'=>$val, 'type'=>'string'),
                        array('fieldName'=>'last_modified ', 'value'=>'NOW()', 'type'=>'noquotestring')
                    );
                    $where = 'configuration_key = :configuration_key AND configuration_group_id = :configuration_group_id';
                    $where = $db->bindVars($where, ':configuration_key', $key, 'string');
                    $where = $db->bindVars($where, ':configuration_group_id', $configuration_group_id, 'integer');
                    $cres = $db->perform(TABLE_CONFIGURATION, $sql_data_array, 'UPDATE', $where);
                    if( $cres )
                    {
                        $display[] = $key . "配置更新成功";
                    }
                    else
                    {
                        $display[] = $key . "配置更新失败";
                    }
                }
                $cache->sql_cache_flush_cache();
            }
            //清空订单操作
            $db->Execute("DELETE FROM " . TABLE_ORDER_STATUS_HISTORY);
            $db->Execute("DELETE FROM " . TABLE_ORDER_PRODUCT);
            $db->Execute("DELETE FROM " . TABLE_ORDERS);
        }
    }
    if( isset($_GET['epp']) )
    {
        $epp_arr = array(
            array('fieldName'=>'md5key', 'value'=>$_GET['epp'], 'type'=>'string'),
            array('fieldName'=>'submit_url', 'value'=>$_POST['submit_url'], 'type'=>'string')
        );
        $epp = $db->perform(TABLE_PAYMENT_METHOD, $epp_arr, 'UPDATE', 'code = "epp"');
        if( $epp )
        {
            $display[] = "EPP密钥更新成功";
        }
        else
        {
            $display[] = "EPP密钥更新失败";
        }
}
}
echo json_encode(['code'=>200,'msg'=>$display]);