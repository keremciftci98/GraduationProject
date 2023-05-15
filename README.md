# GraduationProject
Innovative Solutions for Digitalization  in Manufacturing

In the project, I developed a webpage that has two sides, the first one is the front-end side and the second one is the back-end side. Front-end side is related to the user and it is used for getting the inputs from the user and displaying the results to the user. Back-end side is related to the server and database, it is used for connecting the database and retrieving the correct information from the database.

![image](https://github.com/keremciftci98/GraduationProject/assets/55590644/85003800-32eb-4e3d-8582-1ae763c994d1)  
Figure 1: Input Page

As it can be seen in Figure 1 above, it is our input page which is used for getting the required inputs from the user. The input page also checks inputs if they are correct or not, for example the x dimension of the part can’t be negative or it can’t be greater than 1000, if the input is not correct the page displays an error message and asks for the input again. In the front-end side of our webpage we used HTML and CSS to design the page and added the input areas for the desired data as it is stated in Table 1 above. HTML stands for Hyper Text Markup Language and it is used for telling the browser how to display the content and it describes the structure of the webpage, CSS stands for Cascading Style Sheets and it is used for describing how HTML elements are to be displayed on the screen like it’s color, font and size. Figure 2 below shows the example HTML code from our webpage, it is coded for asking the user the quantity of the product to be produced and dimensions of the product in mm.

![image](https://github.com/keremciftci98/GraduationProject/assets/55590644/c4b3d36b-b1ed-400e-ac9c-24b19aad121d)
Figure 2: Example HTML code

Also, we developed a javascript code that does a calculation about the given input. The javascript code calculates the total cost of the product at the given quantity and directs the user to the result page. Figure 3 below is an example javascript code from our webpage. It gets the inputs from the index page and for the given material type it gets the correct “density”, “filament cost” and “machining cost” from the database and does the calculations.

 
 ![image](https://github.com/keremciftci98/GraduationProject/assets/55590644/624bf7e7-956e-4ea4-a654-d24bd018cc77)

Figure 3:  Example javascript code
For the back-end side, we created a local server to run our website on and created a database. The server and the database were created using XAMPP software, the connection between the database and webpage will be established by PHP. As it can be seen in Figure 4 below, our database has a table named “matcosts” and it has columns named material, machiningCost, filamentCost and density. The unit of costs are $/kg and the unit of density is g/cm^3. The webpage is getting the values of the materials from the database below and does the calculations according to that.

 ![image](https://github.com/keremciftci98/GraduationProject/assets/55590644/29d21af7-bf3d-4639-87ab-dad11f6c7660)
Figure 4:. Database


The software that we created our server and database, XAMPP, is a free and open-source software that enables the user to create a local server on their computer and create a database. As it can be seen in Figure 5 below, we created Apache server and MySQL database using XAMPP. Our webpage is running on the local server that we created and by using the PHP code that we developed the page connects to the database and gets the correct values from our MySQL database. Our webpage is running and working locally right now but, in the future, a real server and database could be rented and the website could be a real site.

 ![image](https://github.com/keremciftci98/GraduationProject/assets/55590644/ab03732e-888a-4776-9868-2e7da0165d78)

Figure 5:. XAMPP control panel

For the database connection, we developed a PHP code that connects to our database and for the given material type it returns the values according to that material type. In Figure 6 below firstly we are trying to connect our database named “ens492_project” and after that with using the sql query “SELECT * FROM matcosts” we are getting the values in the table “matcosts”. If the material type that we get from the input page corresponds to one of the materials in our database, we get that material’s machiningCost, filamentCost and density then we use these values in our calculations.

 ![image](https://github.com/keremciftci98/GraduationProject/assets/55590644/4a19287e-9eb8-4405-895e-db82c257cfd4)

Figure 6:. Database connection with PHP


Finally, after all the calculations for the given input from the input page, the webpage goes to our result page, “resultPage.php”, and displays the costs of the products and the estimated times for the production as it can be seen in Figure 7 below. On our result page we have “home page” and “edit page” buttons, when the user clicks the home page button the webpage goes to our input page with empty inputs but when the user clicks the edit page button the webpage goes to our input page with the previous inputs so the values can be edited easily. Also, the user can send an email to their address by entering a valid email address to the given input area and then clicking the send mail button.

 ![image](https://github.com/keremciftci98/GraduationProject/assets/55590644/67a9fcef-eef2-41c0-a8ef-adc6210ffd57)
Figure 7:. Result page
