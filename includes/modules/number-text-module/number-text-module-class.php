<?php
if( !class_exists( 'PRC_InputModule' ) ){
    class PRC_InputModule extends PRC_module {
        
        function __construct(){

            $this->setModuleID('number_input');
            $this->setModuleName("Number");
            $this->setModuleIconUrl(plugin_dir_url(__FILE__)."src/icon/field.svg");

            $this->setSettingField( "label_name", array(
                "name" => "Field Name",
                "element" => "input",
                "attributes" => array(
                    "name" => "label_name",
                    "type" => "text",
                    "placeholder" => "Enter Field Name",
                    "required" => true,
                    "class" => "simple_input_setting_field",
                    "id" => "simple_input_setting_field",
                )
            ) );

            $this->setSettingField( "rate", array(
                "name" => "Rate ($)",
                "element" => "input",
                "attributes" => array(
                    "name" => "rate",
                    "placeholder" => "Enter rate",
                    "class" => "simple_input_setting_field",
                    "layout" => "half",
                    "required" => true,
                    "data-validation" => "prevantMinusValue",
                    "id" => "simple_input_setting_field",
                    "type" => "number",
                )
            ) );

            $this->setSettingField( "default_quantity", array(
                "name" => "Default Quantity",
                "element" => "input",
                "attributes" => array(
                    "name" => "default_quantity",
                    "placeholder" => "Enter Quantity",
                    "class" => "simple_input_setting_field",
                    "layout" => "half",
                    "data-validation" => "prevantMinusValue",
                    "id" => "simple_input_setting_field",
                    "type" => "number",
                    "required" => true,
                )
            ) );

            $this->setSettingField( "tooltip", array(
                "name" => "Tooltip",
                "element" => "input",
                "attributes" => array(
                    "name" => "tooltip",
                    "placeholder" => "Text for tooltip",
                    "class" => "simple_input_setting_field",
                    "id" => "simple_input_setting_field",
                    "type" => "text",
                )
            ) );

            $this->setSettingField( "logic", array(
                "name" => "Logical Conditions",
                "element" => "input",
                "status" => "hide",
                "attributes" => array(
                    "name" => "Logic",
                    "placeholder" => "Text for Logic",
                    "class" => "simple_Logic_setting_field",
                    "id" => "simple_Logic_setting_field",
                    "type" => "checkbox",
                    "value" => "no",
                )
            ) );

            $this->setSettingField( "elements_state", array(
                "name" => "This field if",
                "element" => "select",
                "attributes" => array(
                    "name" => "elements_state",
                    "placeholder" => "Elements State",
                    "class" => "elements_state_setting_field",
                    "id" => "elements_state_setting_field",
                    "type" => "select",
                    "layout" => "half",
                    "list" => array( "show" => "Show", "hide" => "Hide" ,"lock" => "Lock","unlock" => "Unlock"),
                )
            ) );

            $this->setSettingField( "elements_state_if", array(
                "name" => "of the following match:",
                "element" => "select",
                "attributes" => array(
                    "name" => "elements_state_if",
                    "placeholder" => "Elements State",
                    "class" => "elements_state_if_setting_field",
                    "id" => "elements_state_if_setting_field",
                    "type" => "select",
                    "layout" => "half",
                    "list" => array( "all" => "All", "any" => "Any"),
                )
            ) );

            $this->setSettingField( "elements_condition", array(
                "name" => "",
                "element" => "elements_condition",
                "attributes" =>array(
                    "elements_select" => array(
                    "name" => "elements_select",
                    "placeholder" => "Elements select",
                    "class" => "elements_select_setting_field ",
                    "id" => "elements_select_setting_field",
                    "type" => "select",
                    "element" => "select",
                    "list" => array( "select" => "select"),
                    ),
                    "elements_select_condition" => array(
                        "name" => "elements_select_condition",
                        "placeholder" => "Elements select condition",
                        "class" => "elements_select_condition_setting_field ",
                        "id" => "elements_select_condition_setting_field",
                        "type" => "select",
                        "element" => "select",
                        "list" => array( "is" => "Is","is not" => "Is not"),
                    ),
                    "elements_select_value" => array(
                        "name" => "elements_select_value",
                        "placeholder" => "value",
                        "class" => "elements_value_setting_field",
                        "id" => "elements_select_value_setting_field",
                        "type" => "text",
                        "element" => "input",
                        "clone" => "true",
                    ),
                )

            ) );

        }

        public function render($data){
            ob_start();
            $file = plugin_dir_path( __FILE__ )."template/input.php";
            if( file_exists( $file ) ){
                include $file;
            }
            return ob_get_clean();
        }

    }
}
PRC_fields_module::register_module(new PRC_InputModule());

?>