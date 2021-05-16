<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>airtime</title>
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link href="css/airtime.css" type="text/css" rel="stylesheet">
    </head>
    <body>
        <div class="sidebar">
            <div class="sidebar-brand">
                <h2><span class="las la-mobile">Phone</span></h2>
            </div>
            <div class="sidebar-menu">
                <ul>
                    <li>
                        <a href="Dashboard.php" ><span class="las la-igloo">Dashboard</span></a>
                    </li>
                    <li>
                        <a href="Upload.php"><span class="las la-phone-square">Upload Phone Numbers</span></a>
                    </li>

                    <li>
                        <a href="numbers.php"><span class="las la-address-book">Number list</span></a>
                    </li>
                    <li>
                        <a href="airtime.php" class="active"><span class="las la-clone">Configure Airtime Provider</span></a>
                    </li>
                    <li>
                        <a href="message.php"><span class="las la-comments">Configure Message to Beneficiaries</span></a>
                    </li>
                    <li>
                        <a href="send.php"><span class="las la-comments">Send Airtime</span></a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="main-content">
            <header>
                <h2>
                    <label for="" class="">
                        <span class="las la-bars"></span>
                    </label>
                    Dashboard
                </h2>
                <div class="search-wrapper">
                    <span class="las la-search"></span>
                    <input type="search" placeholder="search here" />
                </div>
                <div class="user-wrapper">
                    <img src="img/img2.jpg" width="40px" height="40px">
                    <div>
                    <h4>Admin</h4>
                    <small>Super admin</small>
                </div>
                </div>
            </header>
            <main>
                <div class="cards">
                    
                    <div class="card-single">
                         
                        <h1>Choose Provider</h1><br>
                        
                      
                        
                    
                    </div>
                      <div class="card-single">
                        <h1>API Key</h1>
                        <span></span>

                    
                    </div>
                    
                </div>
                <div class="card">
                    
                    <div class="card-single">
                        <h1>Secret Key</h1>
                        <span></span>
                        
                    
                    </div>
                      
                    
                </div><br>
    
                <button type="submit">Save</button>
               
                        
                    
                    
                     
                       
        
            
            
            
            </main>
        </div>
    </body>
</html>