<?php
/**
 * Created by PhpStorm.
 * User: binli
 * Date: 16/9/8
 * Time: 13:49
 */
?>


<!-- basic scripts -->

    <!--[if !IE]> -->
    <script src="<?php echo base_url('assets/js/jquery-2.1.4.min.js');?>"></script>

    <!-- <![endif]-->

    <!--[if IE]>
    <script src="<?php echo base_url('assets/js/jquery-1.11.3.min.js');?>"></script>
    <![endif]-->
    <script type="text/javascript">
        if('ontouchstart' in document.documentElement) document.write("<script src='<?php echo base_url('assets/js/jquery.mobile.custom.min.js');?>'>"+"<"+"/script>");
    </script>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>
