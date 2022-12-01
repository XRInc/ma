<?php require('includes/application_top.php');

$action = isset($_GET['action']) ? $_GET['action'] : '';

switch($action) {

    case 'save':
        /**
         * facebook设置
         */
        $error = false;
        $facebook_params = db_prepare_input($_POST['facebook']);
        $securityToken = isset($_POST['securityToken'])?db_prepare_input($_POST['securityToken']):'';
        if ($securityToken != $_SESSION['securityToken']) {
            $error = true;
            $message_stack->add('category', 'facebook参数设置保存时出现安全错误。');
        }

        $fields = '';
        foreach($facebook_params as $key => $val) {
            if(empty($val)) {
                $sql = " update " . TABLE_FACEBOOK_PARAM . " set f_value=0 where f_key='" . $key . "' and f_group_id=1 ";
            }else{
                $sql = " update " . TABLE_FACEBOOK_PARAM . " set f_value='" . $val . "' where f_key='" . $key . "' and f_group_id=1 ";
            }
            $db->Execute($sql);
        }
        $message_stack->add_session('facekbook api', 'facebook参数设置已保存。', 'success');
        var_dump(1);
        redirect(href_link(FILENAME_FACEBOOK_API));
        break;
    default:
        $sql = " select * from ".TABLE_FACEBOOK_PARAM." where f_group_id=1 ";
        $result = $db->Execute($sql);
        $facebook = array();
        while(!$result->EOF) {
            $facebook[] = array(
                'f_title'  =>  $result->fields['f_title'],
                'f_key'  =>  $result->fields['f_key'],
                'f_value'  =>  $result->fields['f_value'],
                'f_group_id'  =>  $result->fields['f_group_id'],
                'f_added'  =>  $result->fields['f_added'],
                'sort_order'  =>  $result->fields['sort_order'],
                'type'  =>  $result->fields['type'],
            );
            $result->MoveNext();
        }
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>facebook api</title>
    <meta name="robot" content="noindex, nofollow" />
    <base href="<?php echo (($request_type=='SSL')?HTTPS_SERVER:HTTP_SERVER) . DIR_WS_ADMIN; ?>" />
    <link href="css/styles.css" type="text/css" rel="stylesheet" />
    <link href="css/styles-ie.css" type="text/css" rel="stylesheet" />
    <link href="css/ui.custom.css" type="text/css" rel="stylesheet" />
    <script src="js/jquery/jquery.js" type="text/javascript"></script>
    <script src="js/jquery/ui.custom.min.js" type="text/javascript"></script>
    <script src="js/jquery/base.js" type="text/javascript"></script>
</head>
<body>
<div class="wrapper">
    <?php require(DIR_FS_ADMIN_INCLUDES . 'noscript.php'); ?>
    <div class="page">
        <?php require(DIR_FS_ADMIN_INCLUDES . 'header.php'); ?>
        <div class="main-container">
            <div class="main">
                <?php if ($message_stack->size('facekbook api') > 0) echo $message_stack->output('facekbook api'); ?>
                <form action="<?php echo href_link(FILENAME_FACEBOOK_API, 'action=save'); ?>" method="post">
                    <div class="no-display">
                        <input type="hidden" value="<?php echo $_SESSION['securityToken']; ?>" name="securityToken" />
                    </div>
                    <div class="page-title title-buttons">
                        <h1>Facebook api</h1>
                        <button type="submit" class="button"><span><span>保存</span></span></button>
                    </div>
                    <?php if(count($facebook) > 0) {
                        $sorts = array_column($facebook,'sort_order');
                        array_multisort($sorts,SORT_ASC,$facebook);?>
                        <table class="data-table">
                            <tbody>
                            <?php foreach($facebook as $val) {?>
                                <tr>
                                    <th width="500"><?php echo $val['f_title'];?></th>
                                    <?php if($val['type'] == '0') {?>
                                        <td><input type="text" class="input-text" name="facebook[<?php echo $val['f_key'];?>]" value="<?php echo $val['f_value'];?>" /></td>
                                    <?php }else{ ?>
                                        <td>
                                            <textarea cols="100" rows="10" style="resize:none;" name="facebook[<?php echo $val['f_key'];?>]" id="facebook-params"><?php echo isset($val['f_value'])?$val['f_value']:''; ?></textarea>
                                        </td>
                                    <?php }?>
                                </tr>

                            <?php }?>

                            </tbody>
                        </table>
                    <?php }?>
                </form>
            </div>
        </div>
        <?php require(DIR_FS_ADMIN_INCLUDES . 'footer.php'); ?>
    </div>
</div>
</body>
</html>
<?php require('includes/application_bottom.php'); ?>
