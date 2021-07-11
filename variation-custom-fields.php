<?php

//ADDING CUSTOM FIELDS TO VARIATION FIELDS, TAGGING PARENT POST AND DISPLAYING SELECTED CHECKBOX ON FRONTEND IN TABS

 
//create new custom fields

$variation_settings_fields = function ( $loop, $variation_data, $variation ) { ?>
 <div class="functionalities-variation-field" id="functionalities-variation-field">

    <div class="wrap" style="width: 100%;">
            <h3 class="functionalities-variation-field__title">Kompatybilnosć</h3>
    </div>

    <div class="functionalities-variation-field__column-wrap">
        <div class="functionalities-variation-field__col">
                <?php
            // Terminal POS
            	woocommerce_wp_checkbox( 
            	array( 
            		'id'            => '_checkbox-terminal-pos[' . $variation->ID . ']', 
            		'label'         => __('Terminal POS', 'woocommerce' ), 
            		'value'         => get_post_meta( $variation->ID, '_checkbox-terminal-pos', true ), 
                    'class'         => 'variation-custom-checkbox',
            		)
            	); ?>



                <?php
                // Drukarka Fiskalna
                    woocommerce_wp_checkbox( 
                    array( 
                        'id'            => '_checkbox-printer[' . $variation->ID . ']', 
                        'label'         => __('Drukarka Fiskalna', 'woocommerce' ), 
                        'value'         => get_post_meta( $variation->ID, '_checkbox-printer', true ), 
                        'class'         => 'variation-custom-checkbox',
                        )
                ); ?>

        </div>
    </div>
   
    <div class="wrap" style="width: 100%;">
        <h3 class="functionalities-variation-field__title">Funkcjonalności systemu</h3>
    </div>

    <div class="functionalities-variation-field__column-wrap">
        <div class="functionalities-variation-field__col">
            <?php
            // Checkbox Bilans godzin personelu
            	woocommerce_wp_checkbox( 
            	array( 
            		'id'            => '_checkbox-balance[' . $variation->ID . ']', 
            		'label'         => __('Bilans godzin personelu', 'woocommerce' ), 
            		'value'         => get_post_meta( $variation->ID, '_checkbox-balance', true ), 
                    'class'         => 'variation-custom-checkbox',
            		)
            	);

                
            
                // Checkbox Food Cost
            
                woocommerce_wp_checkbox( 
                    array( 
                        'id'            => '_checkbox-foodcost[' . $variation->ID . ']', 
                        'label'         => __('Food Cost', 'woocommerce' ), 
                        'value'         => get_post_meta( $variation->ID, '_checkbox-foodcost', true ), 
                        'class'         => 'variation-custom-checkbox',
                        )
                );
            
                 // Checkbox Integracja z terminalem płatniczym
            
                 woocommerce_wp_checkbox( 
                    array( 
                        'id'            => '_checkbox-terminal-integration[' . $variation->ID . ']', 
                        'label'         => __('Integracja z terminalem płatniczym', 'woocommerce' ), 
                        'value'         => get_post_meta( $variation->ID, '_checkbox-terminal-integration', true ), 
                        'class'         => 'variation-custom-checkbox',
                        )
                );
            
                //Checkbox Integracje z portalami zewnętrznymi
            
                woocommerce_wp_checkbox( 
                    array( 
                        'id'            => '_checkbox-external-integration[' . $variation->ID . ']', 
                        'label'         => __('Integracje z portalami zewnętrznymi', 'woocommerce' ), 
                        'value'         => get_post_meta( $variation->ID, '_checkbox-external-integration', true ), 
                        'class'         => 'variation-custom-checkbox',
                        )
                );
            
                //Checkbox Integracje z systemami hotelowymi
                woocommerce_wp_checkbox( 
                    array( 
                        'id'            => '_checkbox-hotels-integration[' . $variation->ID . ']', 
                        'label'         => __('Integracje z systemami hotelowymi', 'woocommerce' ), 
                        'value'         => get_post_meta( $variation->ID, '_checkbox-hotels-integration', true ), 
                        'class'         => 'variation-custom-checkbox',
                        )
                );
                ?>
        </div>

        <div class="functionalities-variation-field__col">
        <?php 
                
            //Checkbox Magazyn
            woocommerce_wp_checkbox( 
                array( 
                    'id'            => '_checkbox-warehouse[' . $variation->ID . ']', 
                    'label'         => __('Magazyn', 'woocommerce' ), 
                    'value'         => get_post_meta( $variation->ID, '_checkbox-warehouse', true ), 
                    'class'         => 'variation-custom-checkbox',
                    )
            );

            //Checkbox Panel zarządzania
            woocommerce_wp_checkbox( 
                array( 
                    'id'            => '_checkbox-management-panel[' . $variation->ID . ']', 
                    'label'         => __('Panel zarządzania', 'woocommerce' ), 
                    'value'         => get_post_meta( $variation->ID, '_checkbox-management-panel', true ), 
                    'class'         => 'variation-custom-checkbox',
                    )
            );

            //Checkbox Program lojalnościowy
            woocommerce_wp_checkbox( 
                array( 
                    'id'            => '_checkbox-loyalty-program[' . $variation->ID . ']', 
                    'label'         => __('Program lojalnościowy', 'woocommerce' ), 
                    'value'         => get_post_meta( $variation->ID, '_checkbox-loyalty-program', true ), 
                    'class'         => 'variation-custom-checkbox',
                    )
            );

            //Checkbox Raporty i statystyki
            woocommerce_wp_checkbox( 
                array( 
                    'id'            => '_checkbox-reports[' . $variation->ID . ']', 
                    'label'         => __('Raporty i statystyki', 'woocommerce' ), 
                    'value'         => get_post_meta( $variation->ID, '_checkbox-reports', true ), 
                    'class'         => 'variation-custom-checkbox',
                    )
            );

            //Checkbox Remanent
            woocommerce_wp_checkbox( 
                array( 
                    'id'            => '_checkbox-inventory[' . $variation->ID . ']', 
                    'label'         => __('Remanent', 'woocommerce' ), 
                    'value'         => get_post_meta( $variation->ID, '_checkbox-inventory', true ), 
                    'class'         => 'variation-custom-checkbox',
                    )
            );



        ?>                
        </div>

        <div class="functionalities-variation-field__col">
        <?php 
            //Checkbox Moduł kucharza ( KDS )
             woocommerce_wp_checkbox( 
                 array( 
                     'id'            => '_checkbox-kds[' . $variation->ID . ']', 
                     'label'         => __('Moduł Kucharza ( KDS )', 'woocommerce' ), 
                     'value'         => get_post_meta( $variation->ID, '_checkbox-kds', true ), 
                     'class'         => 'variation-custom-checkbox',
                     )
             );


            //Checkbox Zarządzano zamówieniami na miejscu
            woocommerce_wp_checkbox( 
                array( 
                    'id'            => '_checkbox-order-management-onsite[' . $variation->ID . ']', 
                    'label'         => __('Zarządzanie zamówieniami na miejscu', 'woocommerce' ), 
                    'value'         => get_post_meta( $variation->ID, '_checkbox-order-management-onsite', true ), 
                    'class'         => 'variation-custom-checkbox',
                    )
            );
            //Checkbox Zarządzano zamówieniami w dostawie
            woocommerce_wp_checkbox( 
                array( 
                    'id'            => '_checkbox-order-management-ondeliver[' . $variation->ID . ']', 
                    'label'         => __('Zarządzanie zamówieniami w dostawie', 'woocommerce' ), 
                    'value'         => get_post_meta( $variation->ID, '_checkbox-order-management-ondeliver', true ), 
                    'class'         => 'variation-custom-checkbox',
                    )
            );

        ?>
        </div>
<?php };

add_action( 'woocommerce_product_after_variable_attributes', $variation_settings_fields, 10, 3 );





// Save Variation Settings
// $post_id = get_the_ID();
$save_variation_settings_fields = function ( $post_id ) {
    
    $parent_id = wp_get_post_parent_id( $post_id );

	//Checkbox balance
	$checkbox = isset( $_POST['_checkbox-balance'][ $post_id ] ) ? 'yes' : 'no';
	update_post_meta( $post_id, '_checkbox-balance', $checkbox );
    
    //if isset this checbkox 
    if(isset($_POST['_checkbox-balance'][ $post_id ])){
        //add product tag
        wp_set_post_terms( $parent_id , 'Bilans godzin personelu', 'product_tag', true ); 
    } else {
        // else remove product tag
        wp_remove_object_terms( $parent_id , 'Bilans godzin personelu', 'product_tag');
    }


    //Checkbox foodcost
	$checkbox2 = isset( $_POST['_checkbox-foodcost'][ $post_id ] ) ? 'yes' : 'no';
	update_post_meta( $post_id, '_checkbox-foodcost', $checkbox2 );

        //if isset this checbkox 
        if(isset($_POST['_checkbox-foodcost'][ $post_id ])){
            //add product tag
            wp_set_post_terms( $parent_id , 'Foodcost', 'product_tag', true ); 
        } else {
            // else remove product tag
            wp_remove_object_terms( $parent_id , 'Foodcost', 'product_tag');
        }

  // Checkbox Integracja z terminalem płatniczym
	$checkbox3 = isset( $_POST['_checkbox-terminal-integration'][ $post_id ] ) ? 'yes' : 'no';
	update_post_meta( $post_id, '_checkbox-terminal-integration', $checkbox3 );

        //if isset this checbkox 
        if(isset($_POST['_checkbox-terminal-integration'][ $post_id ])){
            //add product tag
            wp_set_post_terms( $parent_id , 'Integracja z terminalem płatniczym', 'product_tag', true ); 
        } else {
            // else remove product tag
            wp_remove_object_terms( $parent_id , 'Integracja z terminalem płatniczym', 'product_tag');
        }
        
    //Checkbox Integracje z portalami zewnętrznymi
	$checkbox4 = isset( $_POST['_checkbox-external-integration'][ $post_id ] ) ? 'yes' : 'no';
	update_post_meta( $post_id, '_checkbox-external-integration', $checkbox4 );

        //if isset this checkbox 
        if(isset($_POST['_checkbox-external-integration'][ $post_id ])){
            //add product tag
            wp_set_post_terms( $parent_id , 'Integracje z portalami zewnętrznymi', 'product_tag', true ); 
        } else {
            // else remove product tag
            wp_remove_object_terms( $parent_id , 'Integracje z portalami zewnętrznymi', 'product_tag');
        }

    //Checkbox Integracje z systemami hotelowymi
	$checkbox5 = isset( $_POST['_checkbox-hotels-integration'][ $post_id ] ) ? 'yes' : 'no';
	update_post_meta( $post_id, '_checkbox-hotels-integration', $checkbox5 );

        //if isset this checkbox 
        if(isset($_POST['_checkbox-hotels-integration'][ $post_id ])){
            //add product tag
            wp_set_post_terms( $parent_id , 'Integracje z systemami hotelowymi', 'product_tag', true ); 
        } else {
            // else remove product tag
            wp_remove_object_terms( $parent_id , 'Integracje z systemami hotelowymi', 'product_tag');
        }

    // Checkbox Magazyn
	$checkbox6 = isset( $_POST['_checkbox-warehouse'][ $post_id ] ) ? 'yes' : 'no';
	update_post_meta( $post_id, '_checkbox-warehouse', $checkbox6 );

      //if isset this checkbox 
        if(isset($_POST['_checkbox-warehouse'][ $post_id ])){
            //add product tag
            wp_set_post_terms( $parent_id , 'Magazyn', 'product_tag', true ); 
        } else {
            // else remove product tag
            wp_remove_object_terms( $parent_id , 'Magazyn', 'product_tag');
        }

    //Checkbox Panel zarządzania
	$checkbox7 = isset( $_POST['_checkbox-management-panel'][ $post_id ] ) ? 'yes' : 'no';
	update_post_meta( $post_id, '_checkbox-management-panel', $checkbox7 );

        //if isset this checkbox 
        if(isset($_POST['_checkbox-management-panel'][ $post_id ])){
            //add product tag
            wp_set_post_terms( $parent_id , 'Panel zarządzania', 'product_tag', true ); 
        } else {
            // else remove product tag
            wp_remove_object_terms( $parent_id , 'Panel zarządzania', 'product_tag');
        }

	//Checkbox Program lojalnościowy
	$checkbox8 = isset( $_POST['_checkbox-loyalty-program'][ $post_id ] ) ? 'yes' : 'no';
	update_post_meta( $post_id, '_checkbox-loyalty-program', $checkbox8 );

        //if isset this checkbox 
        if(isset($_POST['_checkbox-loyalty-program'][ $post_id ])){
            //add product tag
            wp_set_post_terms( $parent_id , 'Program lojalnościowy', 'product_tag', true ); 
        } else {
            // else remove product tag
            wp_remove_object_terms( $parent_id , 'Program lojalnościowy', 'product_tag');
        }
	
    // Checkbox Raporty i statystyki
	$checkbox9 = isset( $_POST['_checkbox-reports'][ $post_id ] ) ? 'yes' : 'no';
	update_post_meta( $post_id, '_checkbox-reports', $checkbox9 );

        //if isset this checkbox 
        if(isset($_POST['_checkbox-reports'][ $post_id ])){
            //add product tag
            wp_set_post_terms( $parent_id , 'Raporty i statystyki', 'product_tag', true ); 
        } else {
            // else remove product tag
            wp_remove_object_terms( $parent_id , 'Raporty i statystyki', 'product_tag');
        }
    

	//Remanent
	$checkbox10 = isset( $_POST['_checkbox-inventory'][ $post_id ] ) ? 'yes' : 'no';
	update_post_meta( $post_id, '_checkbox-inventory', $checkbox10 );

       //if isset this checkbox 
       if(isset($_POST['_checkbox-inventory'][ $post_id ])){
            //add product tag
            wp_set_post_terms( $parent_id , 'Remanent', 'product_tag', true ); 
        } else {
            // else remove product tag
           wp_remove_object_terms( $parent_id , 'Remanent', 'product_tag');
        }

    //Checkbox Zarządzanie zamówieniami na miejscu    
	$checkbox11 = isset( $_POST['_checkbox-order-management-onsite'][ $post_id ] ) ? 'yes' : 'no';
	update_post_meta( $post_id, '_checkbox-order-management-onsite', $checkbox11 );

       //if isset this checkbox 
       if(isset($_POST['_checkbox-order-management-onsite'][ $post_id ])){
            //add product tag
            wp_set_post_terms( $parent_id , 'Zarządzanie zamówieniami na miejscu', 'product_tag', true ); 
        } else {
            // else remove product tag
            wp_remove_object_terms( $parent_id , 'Zarządzanie zamówieniami na miejscu', 'product_tag');
        }

	//Checkbox Zarządzanie zamówieniami w dostawie
	$checkbox12 = isset( $_POST['_checkbox-order-management-ondeliver'][ $post_id ] ) ? 'yes' : 'no';
	update_post_meta( $post_id, '_checkbox-order-management-ondeliver', $checkbox12 );

        //if isset this checkbox 
        if(isset($_POST['_checkbox-order-management-ondeliver'][ $post_id ])){
            //add product tag
            wp_set_post_terms( $parent_id , 'Zarządzanie zamówieniami w dostawie', 'product_tag', true ); 
        } else {
            // else remove product tag
            wp_remove_object_terms( $parent_id , 'Zarządzanie zamówieniami w dostawie', 'product_tag');
        }

    //Checkbox Terminal POS
	$checkbox13 = isset( $_POST['_checkbox-terminal-pos'][ $post_id ] ) ? 'yes' : 'no';
	update_post_meta( $post_id, '_checkbox-terminal-pos', $checkbox13 );

        //if isset this checkbox 
        if(isset($_POST['_checkbox-terminal-pos'][ $post_id ])){
            //add product tag
            wp_set_post_terms( $parent_id , 'Terminal POS', 'product_tag', true ); 
        } else {
            // else remove product tag
            wp_remove_object_terms( $parent_id , 'Terminal POS', 'product_tag');
        }

    //Checkbox Drukarka Fiskalna
	$checkbox14 = isset( $_POST['_checkbox-printer'][ $post_id ] ) ? 'yes' : 'no';
	update_post_meta( $post_id, '_checkbox-printer', $checkbox14 );

        //if isset this checkbox 
        if(isset($_POST['_checkbox-printer'][ $post_id ])){
            //add product tag
            wp_set_post_terms( $parent_id , 'Drukarka Fiskalna', 'product_tag', true ); 
        } else {
            // else remove product tag
            wp_remove_object_terms( $parent_id , 'Drukarka Fiskalna', 'product_tag');
        }

     //Checkbox Moduł kucharza ( KDS )
	$checkbox15 = isset( $_POST['_checkbox-kds'][ $post_id ] ) ? 'yes' : 'no';
	update_post_meta( $post_id, '_checkbox-kds', $checkbox15 );

         //if isset this checkbox 
        if(isset($_POST['_checkbox-kds'][ $post_id ])){
            //add product tag
            wp_set_post_terms( $parent_id , 'Moduł kucharza ( KDS )', 'product_tag', true ); 
        } else {
            // else remove product tag
            wp_remove_object_terms( $parent_id , 'Moduł kucharza ( KDS )', 'product_tag');
        }

};

add_action( 'woocommerce_save_product_variation', $save_variation_settings_fields, 10, 3 );




//checkbox layout styles

// add_action('admin_head', function(){
//     echo '<style>
//          label[for=_number_field[553]_field{
//             float: left !important;
//         }
//         .variation_custom_number_field{
//             float: left;
//             line-height: 2;
//             min-height: 30px;
//             width: 100% !important;
//             vertical-align: middle;
//             margin: 2px 0 0 !important; 
//             padding: 5px !important;
//         }

//         #functionalities-variation-field{
//             display: flex;
//             flex-flow: column;
//             height: auto;
//             align-items: start;
//             float: left;     
//         }

//         .functionalities-variation-field__title{
//             color: #555;            
//         }

//         .functionalities-variation-field__column-wrap{
//             display: flex;
//         }

//         .functionalities-variation-field__col{
//             margin-right: 24px;
//         }

//         .functionalities-variation-field__col .form-field{
//             display: flex;
//             justify-content: flex-end;
//             flex-flow: row-reverse;
//             white-space: nowrap;
//         }

//         @media screen and (width: 1400px){
//             #functionalities-variation-field{
//                 height: 400px;
//             }
//         }
//     </style>';
// });




add_filter('woocommerce_display_product_attributes', function( $product_attributes, $product ) {
  global $product;
  
    // Simple product
    if ( $product->is_type('simple' ) ) {
        // Get product SKU    

    } 
    // Variable product
    if ( $product->is_type('variable' ) ) {
        // Get childIDs in an array
        $children_ids = $product->get_children();
   
 
        // Loop
        foreach ( $children_ids as $child_id ) {
           //get product
           $product = wc_get_product( $child_id );
          
             // Get meta from selected checkboxes in variation options
               // Terminal POS
               $get_checkbox_terminal_pos = get_post_meta($child_id, '_checkbox-terminal-pos', true);
               //  Drukarka Fiskalna
               $get_checkbox_printer = get_post_meta($child_id, '_checkbox-printer', true);
               //  Bilans godzin personelu
               $get_checkbox_balance = get_post_meta($child_id, '_checkbox-balance', true);
               //  Food Cost
               $get_checkbox_foodcost = get_post_meta($child_id, '_checkbox-foodcost', true);
               //  Integracja z terminalem płatniczym
               $get_checkbox_terminal_integration = get_post_meta($child_id, '_checkbox-terminal-integration', true);
               //  Integracje z portalami zewnętrznymi
               $get_checkbox_external_integration = get_post_meta($child_id, '_checkbox-external-integration', true);
               //  Integracje z systemami hotelowymi
               $get_checkbox_hotels_integration = get_post_meta($child_id, '_checkbox-hotels-integration', true);
               //  Magazyn
               $get_checkbox_warehouse = get_post_meta($child_id, '_checkbox-warehouse', true);
               //  Panel zarządzania
               $get_checkbox_management_panel = get_post_meta($child_id, '_checkbox-management-panel', true);
               //  Program Lojalnościowy
               $get_checkbox_loyalty_program = get_post_meta($child_id, '_checkbox-loyalty-program', true);
               //  Raporty i statystyki
               $get_checkbox_reports = get_post_meta($child_id, '_checkbox-reports', true);
               //  Remanent
               $get_checkbox_inventory = get_post_meta($child_id, '_checkbox-inventory', true);
               //  Zarządzano zamówieniami na miejscu
               $get_checkbox_order_management_onsite = get_post_meta($child_id, '_checkbox-order-management-onsite', true);
               //  Zarządzano zamówieniami w dostawie
               $get_checkbox_order_management_ondeliver = get_post_meta($child_id, '_checkbox-order-management-ondeliver', true);
               // Moduł dla Kucharza ( KDS )
               $get_checkbox_kds = get_post_meta($child_id, '_checkbox-kds', true);

        
        // Display values on front end
               //Terminal POS
           
         
            
               $product_attributes[ 'posterminal-field posterminal-field-variable posterminal-field-variable-' . $child_id ] = array(
                   'label' => __('Terminal POS', 'woocommerce'),
                   'value' => $get_checkbox_terminal_pos,
               );
            
                // Drukarka Fiskalna
               $product_attributes[ 'printer-field printer-field-variable printer-field-variable-' . $child_id ] = array(
                   'label' => __('Drukarka Fiskalna', 'woocommerce'),
                   'value' => $get_checkbox_printer,
               );
            

                // Bilans godzin personelu
               $product_attributes[ 'balance-field balance-field-variable balance-field-variable-' . $child_id ] = array(
                   'label' => __('Bilans godzin', 'woocommerce'),
                   'value' => $get_checkbox_balance,
               );
            
                 // Food Cost
                $product_attributes[ 'foodcost-field foodcost-field-variable foodcost-field-variable-' . $child_id ] = array(
                        'label' => __('Food Cost', 'woocommerce'),
                        'value' => $get_checkbox_foodcost,
                );
   
               // Integracja z terminalem płatniczym
               $product_attributes[ 'terminal-integration-field terminal-integration-field-variable terminal-integration-field-variable-' . $child_id ] = array(
                   'label' => __('Integracja z terminalem płatniczym', 'woocommerce'),
                   'value' => $get_checkbox_terminal_integration,
               );
   
               // Integracje z portalami zewnętrznymi
               $product_attributes[ 'external-integration-field external-integration-field-variable external-integration-field-variable-' . $child_id ] = array(
                   'label' => __('Integracje z portalami zewnętrznymi', 'woocommerce'),
                   'value' => $get_checkbox_external_integration,
               );
               // Integracje z systemami hotelowymi
               $product_attributes[ 'hotels-systems-field hotels-systems-field-variable hotels-systems-field-variable-' . $child_id ] = array(
                   'label' => __('Integracje z systemami hotelowymi', 'woocommerce'),
                   'value' => $get_checkbox_hotels_integration,
               );
               // Magazyn
               $product_attributes[ 'warehouse-field warehouse-field-variable warehouse-field-variable-' . $child_id ] = array(
                   'label' => __('Magazyn', 'woocommerce'),
                   'value' => $get_checkbox_warehouse,
               );
               // Panel zarządzania
               $product_attributes[ 'management-panel-field management-panel-field-variable management-panel-field-variable-' . $child_id ] = array(
                   'label' => __('Panel Zarządzania', 'woocommerce'),
                   'value' => $get_checkbox_management_panel,
               );
               // Program lojalnościowy
               $product_attributes[ 'loyalty-field loyalty-field-variable loyalty-field-variable-' . $child_id ] = array(
                   'label' => __('Program lojalnościowy', 'woocommerce'),
                   'value' => $get_checkbox_loyalty_program,
               );
               // Raporty i statystyki
               $product_attributes[ 'reports-field reports-field-variable reports-field-variable-' . $child_id ] = array(
                   'label' => __('Raporty i statystyki', 'woocommerce'),
                   'value' => $get_checkbox_reports,
               );
               // Remanent
               $product_attributes[ 'inventory-field inventory-field-variable inventory-field-variable-' . $child_id ] = array(
                   'label' => __('Remanent', 'woocommerce'),
                   'value' => $get_checkbox_inventory,
               );

                 // Moduł kucharza ( KDS )
                 $product_attributes[ 'kds-field kds-field-variable kds-field-variable-' . $child_id ] = array(
                    'label' => __('Moduł kucharza ( KDS )', 'woocommerce'),
                    'value' => $get_checkbox_kds,
               );

               // Zarządzano zamówieniami na miejscu
               $product_attributes[ 'onsite-order-management-field onsite-order-management-field-variable onsite-order-management-field-variable-' . $child_id ] = array(
                   'label' => __('Zarządzanie zamówieniami na miejscu', 'woocommerce'),
                   'value' => $get_checkbox_order_management_onsite,
               );
                // Zarządzano zamówieniami w dostawie
                $product_attributes[ 'ondeliver-order-management-field ondeliver-order-management-field-variable ondeliver-order-management-field-variable-' . $child_id ] = array(
                   'label' => __('Zarządzanie zamówieniami w dostawie', 'woocommerce'),
                   'value' => $get_checkbox_order_management_ondeliver,
              );

            }
        ?>
        <script type="text/javascript">

        jQuery(document).ready(function($) {

     
        
        //     // Hide all rows
            $( ".posterminal-field-variable" ).css( 'display', 'none' );
            $( ".printer-field-variable" ).css( 'display', 'none' );
            $( ".balance-field-variable" ).css( 'display', 'none' );
            $( '.foodcost-field-variable' ).css( 'display', 'none' );
            $( '.terminal-integration-field-variable' ).css( 'display', 'none' );
            $( '.external-integration-field-variable' ).css( 'display', 'none' );
            $( '.hotels-systems-field-variable' ).css( 'display', 'none' );
            $( '.warehouse-field-variable' ).css( 'display', 'none' );
            $( '.management-panel-field-variable' ).css( 'display', 'none' );
            $( '.loyalty-field-variable' ).css( 'display', 'none' );
            $( '.reports-field-variable' ).css( 'display', 'none' );
            $( '.inventory-field-variable' ).css( 'display', 'none' );
            $( '.onsite-order-management-field-variable' ).css( 'display', 'none' );
            $( '.ondeliver-order-management-field-variable' ).css( 'display', 'none' );
            $( '.kds-field-variable' ).css( 'display', 'none' );

        //     // Change
            $( 'input.variation_id' ).change( function() {
        //         // Hide all rows
                $( '.posterminal-field-variable' ).css( 'display', 'none' );
                $( '.printer-field-variable' ).css( 'display', 'none' );
                $( '.balance-field-variable' ).css( 'display', 'none' );
                $( '.foodcost-field-variable' ).css( 'display', 'none' );
                $( '.terminal-integration-field-variable' ).css( 'display', 'none' );
                $( '.external-integration-field-variable' ).css( 'display', 'none' );
                $( '.hotels-systems-field-variable' ).css( 'display', 'none' );
                $( '.warehouse-field-variable' ).css( 'display', 'none' );
                $( '.management-panel-field-variable' ).css( 'display', 'none' );
                $( '.loyalty-field-variable' ).css( 'display', 'none' );
                $( '.reports-field-variable' ).css( 'display', 'none' );
                $( '.inventory-field-variable' ).css( 'display', 'none' );
                $( '.onsite-order-management-field-variable' ).css( 'display', 'none' );
                $( '.ondeliver-order-management-field-variable' ).css( 'display', 'none' );
                $( '.kds-field-variable' ).css( 'display', 'none' );

                if( $( 'input.variation_id' ).val() != '' ) {
                    var var_id = $( 'input.variation_id' ).val();


        //             // Display current
                    $( '.posterminal-field-variable-' + var_id ).css( 'display', 'block' );
                    $( '.printer-field-variable-' + var_id ).css( 'display', 'block' );
                    $( '.balance-field-variable-' + var_id ).css( 'display', 'block' );
                    $( '.foodcost-field-variable-' + var_id ).css( 'display', 'block' );
                    $( '.terminal-integration-field-variable-' + var_id ).css( 'display', 'block' );
                    $( '.external-integration-field-variable-' + var_id ).css( 'display', 'block' );
                    $( '.hotels-systems-field-variable-' + var_id ).css( 'display', 'block' );
                    $( '.warehouse-field-variable-' + var_id ).css( 'display', 'block' );
                    $( '.management-panel-field-variable-' + var_id ).css( 'display', 'block' );
                    $( '.loyalty-field-variable-' + var_id ).css( 'display', 'block' );
                    $( '.reports-field-variable-' + var_id ).css( 'display', 'block' );
                    $( '.inventory-field-variable-' + var_id ).css( 'display', 'block' );
                    $( '.onsite-order-management-field-variable-' + var_id ).css( 'display', 'block' );
                    $( '.ondeliver-order-management-field-variable-' + var_id ).css( 'display', 'block' );
                    $( '.kds-field-variable-' + var_id ).css( 'display', 'block' );
                  
                        
                    
                }   
            });    
        });

    
        </script>
        <?php
    }

    return $product_attributes;

}, 10, 2);
