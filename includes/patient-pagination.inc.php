        <!-- Pagination Logic -->
        <?php

            //get page number
            if (isset($_GET['page_no']) && $_GET['page_no'] !=="" ) {
              $page_no = $_GET['page_no'];
            } else {
              $page_no = 1;
            }

            //total rows or recrords to display
            $total_records_per_page = 10;
            //get the page offset for the LIMIT query
            $offset = ($page_no - 1) * $total_records_per_page;
            //get previous page
            $previous_page = $page_no - 1;
            //get the next page
            $next_page = $page_no + 1;


            //get the total count of records
            $result_count = mysqli_query($con, "SELECT COUNT(*) as total_records FROM patient") or die(mysqli_error($con));
            //total records
            $records = mysqli_fetch_array($result_count);
            //store total_records to a variable
            $total_records = $records['total_records'];
            //get total pages
            $total_no_of_pages = ceil($total_records / $total_records_per_page);

            
            //query string
            $sql = "SELECT * FROM patient LIMIT $offset , $total_records_per_page";
            //result
            $result = mysqli_query($con, $sql) or die(mysqli_error($con));
         
        ?> <!-- Pagination Logic Ends -->
        
