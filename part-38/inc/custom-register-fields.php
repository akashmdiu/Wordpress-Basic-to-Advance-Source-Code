<?php

function custom_register_fields(){
    if(isset($_POST['first_name']) || isset($_POST['last_name']) || isset($_POST['father-name']) || isset($_POST['father-name'])){
        $FirstNama = $_POST['first_name'];
        $LastNama = $_POST['last_name'];
        $FatherName = $_POST['father-name'];
        $MotherName = $_POST['mother-name'];
    }else{
        $name = "";
    }
?>
       <div class="row">
            <div class="form-group col-md-4">
                <label for="firstName">First Name*<br></label>
                <input name="first_name" id="firstName" class="input form-control" value="<?php echo $FirstNama; ?>" size="20" type="text" required>
            </div>
            <div class="form-group col-md-4">
                <label for="lastName">Last Name*<br></label>
                <input name="last_name" id="lastName" class="input form-control" value="<?php echo $LastNama?>" size="20" type="text" required>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-4">
                <label for="father_name">Father Name*<br></label>
                <input name="father-name" id="father_name" class="input form-control" value="<?php echo $FatherName;?>" size="20" type="text" required>
            </div>
            <div class="form-group col-md-4">
                <label for="mother_name">Mother Name*<br></label>
                <input name="mother-name" id="mother_name" class="input form-control" value="<?php echo $MotherName; ?>" size="20" type="text" required>
            </div>
        </div>
<?php    
}
add_action('register_form', 'custom_register_fields');

function save_custom_fields_data($user_id){
    update_user_meta($user_id, 'first_name', $_POST['first_name']);
    update_user_meta($user_id, 'last_name', $_POST['last_name']);
    update_user_meta($user_id, 'father-name', $_POST['father-name']);
    update_user_meta($user_id, 'mother-name', $_POST['mother-name']);
}
add_action('user_register', 'save_custom_fields_data');
add_action('personal_options_update', 'save_custom_fields_data');
add_action('edit_user_profile_update', 'save_custom_fields_data');

function edit_profile($user){?>
    <table>
     <tr class="user-url-wrap">
        <th><label for="father_name">Father Name</label></th>
        <td><input type="text" name="father-name" id="father_name" value="<?php echo get_user_meta($user -> ID, 'father-name', true); ?>" class="regular-text code"></td>
    </tr>
     <tr class="user-url-wrap">
        <th><label for="mother_name">Mother Name</label></th>
        <td><input type="text" name="mother-name" id="mother_name" value="<?php echo get_user_meta($user -> ID, 'mother-name', true); ?>" class="regular-text code"></td>
        
        <!--for first/last name-->
        <div class="hidden">
        <input type="text" name="first_name" id="first_name" class="hidden" value="<?php echo get_user_meta($user -> ID, 'first_name', true); ?>" class="regular-text">
        <input type="text" name="last_name" id="last_name" class="hidden" value="<?php echo get_user_meta($user -> ID, 'last_name', true); ?>" class="regular-text">
        </div>
    </tr>
    </table>
<?php   
}
add_action('edit_user_profile', 'edit_profile');
add_action('show_user_profile', 'edit_profile');
