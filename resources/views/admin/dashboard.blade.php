<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          
        </h2>
    </x-slot>

    

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title></title>
        <script src="https://cdn.tailwindcss.com"></script>
</head>
        <style>
            .hotel-cover {
	background-image: url('../images/menu-8.jpg'); 
            }

    .hotel-cover2 {
	background-image: url('../images/bookings/jeshoots-com-9n1USijYJZ4-unsplash.jpg');
    }

    .hotel-cover3 {
	background-image: url('../images/users.jpg');
    }
        </style>
    

    <body>
        
        <center><h1 style="margin-bottom:1%; margin-top:1%;"><b>Hi Admin! This is an Admin Center For Admin</b>
        </h1></center>
        
        <center>
            <ul>
                <li>
        <a  href="../routes" target="_blank" class="text-center" style="color: blue;"> <u>Routes list</u> </a> <br>
                </li>
                
                <li>
                <a  href="../routestocsv" target="_blank" class="text-center" style="color: blue;"> <u>Download Routes list in CSV</u> </a>
                </li>
            </ul>
        </center>
        
        <div id="app" class="flex items-center justify-center h-full bg-gray-200 p-4" style="margin-top:2em;">
               
        
               <div class="w-full shadow-lg max-w-2xl bg-white sm:flex">
                   
                       <div class="w-full sm:w-1/4 hotel-cover2 bg-center bg-cover border relative h-48 sm:h-auto shadow-inner">
                           <div class="w-full absolute bottom-0 flex justify-center bg-gradient-black-transparent">
                               
                           </div>
                       </div>
                       <div class="w-full sm:w-3/4 p-3">
                           
                           <div class="flex justify-between items-center border-b pb-3">
                               <div>
                                   <div class="sm:flex items-center mb-1">
                                       <h2 class="text-lg font-semibold text-gray-600">Bookings Admin Center</h2>
                                       <div class="flex sm:ml-3">
                                           
                                                                                       
                                       </div>
                                   </div>
                                   <div class="flex items-center">
                                       
                                       
                                       <p class="text-xs text-gray-600">You can manage all of the hotels bookings<br> </p>
                                   </div>
                               </div>
                               <div>
                                   
                               </div>
                           </div>
                           
                           <div class="flex mt-3">
                               <div>
                                   <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="info-circle" class="w-3 h-3 text-blue-500 mt-1" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M256 8C119.043 8 8 119.083 8 256c0 136.997 111.043 248 248 248s248-111.003 248-248C504 119.083 392.957 8 256 8zm0 110c23.196 0 42 18.804 42 42s-18.804 42-42 42-42-18.804-42-42 18.804-42 42-42zm56 254c0 6.627-5.373 12-12 12h-88c-6.627 0-12-5.373-12-12v-24c0-6.627 5.373-12 12-12h12v-64h-12c-6.627 0-12-5.373-12-12v-24c0-6.627 5.373-12 12-12h64c6.627 0 12 5.373 12 12v100h12c6.627 0 12 5.373 12 12v24z"></path></svg>
                               </div>
                               <p class="text-xs ml-1 text-gray-600">
                                   You can manage the bookings. Add, edit, delete bookings from the queue.
                               </p>
                           </div>
                           
                           <div class="flex mt-3 items-center">
                               <div>
                                   
                                   
                               </div>
                               <p class="text-xs ml-1 text-gray-600 font-semibold">
                                  In case of bugs or issues found contact our devs at <a href="mailto:developers@hms.com"> <u>developers@hms.com</u> </a>
                               </p>
                           </div>
                           
                           <div class="sm:flex mt-3 items-center justify-between">
                               <div>
                                   <p class="text-xs text-green-700">
                                       <strong>You can write us anytime</strong> <br> We try to respond within 24 hours.
                                   </p>
                               </div>
                               <div class="mt-3 sm:mt-3 sm:-mr-8">
                                   <a href="../transactions" class="bg-blue-500 shadow text-blue-100 py-3 px-6 font-bold inline-block">Manage Bookings</a>
                               </div>
                           </div>
                           
                       </div>
                   
               </div>
               
           </div>
   
       

      

        
    
             <div id="app" class="flex items-center justify-center h-full bg-gray-200 p-4" style="margin-bottom: 0px;">
               
        
                <div class="w-full shadow-lg max-w-2xl bg-white sm:flex">
                    
                        <div class="w-full sm:w-1/4 hotel-cover bg-center bg-cover border relative h-48 sm:h-auto shadow-inner">
                            <div class="w-full absolute bottom-0 flex justify-center bg-gradient-black-transparent">
                                
                            </div>
                        </div>
                        <div class="w-full sm:w-3/4 p-3">
                            
                            <div class="flex justify-between items-center border-b pb-3">
                                <div>
                                    <div class="sm:flex items-center mb-1">
                                        <h2 class="text-lg font-semibold text-gray-600">Products Admin Center</h2>
                                        <div class="flex sm:ml-3">
                                            
                                                                                        
                                        </div>
                                    </div>
                                    <div class="flex items-center">
                                        
                                        
                                        <p class="text-xs text-gray-600">You can manage all of the hotels products<br> </p>
                                    </div>
                                </div>
                                <div>
                                    
                                </div>
                            </div>
                            
                            <div class="flex mt-3">
                                <div>
                                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="info-circle" class="w-3 h-3 text-blue-500 mt-1" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M256 8C119.043 8 8 119.083 8 256c0 136.997 111.043 248 248 248s248-111.003 248-248C504 119.083 392.957 8 256 8zm0 110c23.196 0 42 18.804 42 42s-18.804 42-42 42-42-18.804-42-42 18.804-42 42-42zm56 254c0 6.627-5.373 12-12 12h-88c-6.627 0-12-5.373-12-12v-24c0-6.627 5.373-12 12-12h12v-64h-12c-6.627 0-12-5.373-12-12v-24c0-6.627 5.373-12 12-12h64c6.627 0 12 5.373 12 12v100h12c6.627 0 12 5.373 12 12v24z"></path></svg>
                                </div>
                                <p class="text-xs ml-1 text-gray-600">
                                    You can manage the products. Add, edit, delete items from the shop, bar and restaurant.
                                </p>
                            </div>
                            
                            <div class="flex mt-3 items-center">
                                <div>
                                    
                                    
                                </div>
                                <p class="text-xs ml-1 text-gray-600 font-semibold">
                                   In case of bugs or issues found contact our devs at <a href="mailto:developers@hms.com"> <u>developers@hms.com</u> </a>
                                </p>
                            </div>
                            
                            <div class="sm:flex mt-3 items-center justify-between">
                                <div>
                                    <p class="text-xs text-green-700">
                                        <strong>You can write us anytime</strong> <br> We try to respond within 24 hours.
                                    </p>
                                </div>
                                <div class="mt-3 sm:mt-3 sm:-mr-8">
                                    <a href="../products" class="bg-blue-500 shadow text-blue-100 py-3 px-6 font-bold inline-block">Manage Products</a>
                                </div>
                            </div>
                            
                        </div>
                    
                </div>
                
            </div>
    
        
            <div id="app" class="flex items-center justify-center h-full bg-gray-200 p-4" style="margin-bottom: 0px;">
               
        
                <div class="w-full shadow-lg max-w-2xl bg-white sm:flex">
                    
                        <div class="w-full sm:w-1/4 hotel-cover3 bg-center bg-cover border relative h-48 sm:h-auto shadow-inner">
                            <div class="w-full absolute bottom-0 flex justify-center bg-gradient-black-transparent">
                                
                            </div>
                        </div>
                        <div class="w-full sm:w-3/4 p-3">
                            
                            <div class="flex justify-between items-center border-b pb-3">
                                <div>
                                    <div class="sm:flex items-center mb-1">
                                        <h2 class="text-lg font-semibold text-gray-600">Users Admin Center</h2>
                                        <div class="flex sm:ml-3">
                                            
                                                                                        
                                        </div>
                                    </div>
                                    <div class="flex items-center">
                                        
                                        
                                        <p class="text-xs text-gray-600">You can manage all of the users of the service<br> </p>
                                    </div>
                                </div>
                                <div>
                                    
                                </div>
                            </div>
                            
                            <div class="flex mt-3">
                                <div>
                                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="info-circle" class="w-3 h-3 text-blue-500 mt-1" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M256 8C119.043 8 8 119.083 8 256c0 136.997 111.043 248 248 248s248-111.003 248-248C504 119.083 392.957 8 256 8zm0 110c23.196 0 42 18.804 42 42s-18.804 42-42 42-42-18.804-42-42 18.804-42 42-42zm56 254c0 6.627-5.373 12-12 12h-88c-6.627 0-12-5.373-12-12v-24c0-6.627 5.373-12 12-12h12v-64h-12c-6.627 0-12-5.373-12-12v-24c0-6.627 5.373-12 12-12h64c6.627 0 12 5.373 12 12v100h12c6.627 0 12 5.373 12 12v24z"></path></svg>
                                </div>
                                <p class="text-xs ml-1 text-gray-600">
                                    You can manage the users. Add, edit, delete users. You can change users password and/or name and/or email and/or address and/or phone number. 
                                </p>
                            </div>
                            
                            <div class="flex mt-3 items-center">
                                <div>
                                    
                                    
                                </div>
                                <p class="text-xs ml-1 text-gray-600 font-semibold">
                                   In case of bugs or issues found contact our devs at <a href="mailto:developers@hms.com"> <u>developers@hms.com</u> </a>
                                </p>
                            </div>
                            
                            <div class="sm:flex mt-3 items-center justify-between">
                                <div>
                                    <p class="text-xs text-green-700">
                                        <strong>You can write us anytime</strong> <br> We try to respond within 24 hours.
                                    </p>
                                </div>
                                <div class="mt-3 sm:mt-3 sm:-mr-8">
                                    <a href="../users" class="bg-blue-500 shadow text-blue-100 py-3 px-6 font-bold inline-block">Manage Users</a>
                                </div>
                            </div>
                            
                        </div>
                    
                </div>
                
            </div>
    
        

        
            
    
        
        

    </div>
    
    
</div>


        
            
    
        
        

    </div>
    
    
</div>


 
           
   
       
       

   </div>
   
   
</div>

    </body>
   
    
        

  
    
    
    
</x-app-layout>