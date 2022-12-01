<?php
    
    
    get_header();
?>

    <sidebar id="sidebar" class="card">
        <?php 
            require_once __DIR__ . '/template-parts/sidebar.php';
        ?>
    </sidebar>
    <main id="content" class="container">

        <?php


            /**
             * Search Item by wharehouse or item-name or item-code
             * this section is complate
             */
            ?>
                <section id="search_item_container">
                <?php 
                    require_once __DIR__ . '/templates/search-item.php';
                ?>
                </section>
            <?php
            
            

            /**
             * for making order as if it can store the data for making panding order
             */
           ?>
            <section id="make_order_container" class="d-none">
    	        <?php 

                if( is_user_logged_in() ){
                    require_once __DIR__ . '/templates/make-order.php';  
                }
                      
                ?>
            </section>
           
            <section id="selling_history_container">
                <?php
                
                if( is_user_logged_in() ){
                    require_once __DIR__ . '/templates/selling-history.php';  
                }
                ?>
            </section>
           
           <?php
            
            /**
             * Insert or Upload new Items using form or by uploading excell-sheet
             */
            ?>
            <section id="insert_item_container" class="d-none my-3">
                <?php
                if( is_user_logged_in() ){
                    require_once __DIR__ . '/templates/insert-item.php'; 
                }
              
                ?>
            </section>
            <?php
            


            /**
             * Update or edit for stock-manage 
             */
            // require_once __DIR__ . '/templates/update-stock-manage.php';
           

            
        ?>

    </main>

<?php 
    
    get_footer();
