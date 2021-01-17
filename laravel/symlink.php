Projects 	->Main project
          ->Sub project 1
          ->Sub project 2 …

public_html    ->(move here all public files of Main project,index.php edit,create storage folder and add 
               ln -s /home/u163760621/domains/rahimsuleymanov.com/Projects/myPortfolio/storage/app/public/* /home/u163760621/domains/rahimsuleymanov.com/public_html/storage 	
               )

                ->sub1	->(move here all public files of Sub project 1,index.php edit,create storage folder and add 
                                   ln -s /home/u163760621/domains/rahimsuleymanov.com/Projects/Sub_project_2/storage/app/public/* /home/u163760621/domains/rahimsuleymanov.com/public_html/sub1/storage 	
                                   )

                ->sub2	->(move here all public files of Sub project 2,index.php edit,create storage folder and add 
                                   ln -s /home/u163760621/domains/rahimsuleymanov.com/Projects/Sub_project_2/storage/app/public/* /home/u163760621/domains/rahimsuleymanov.com/public_html/sub2/storage 	
                                   )
                …
