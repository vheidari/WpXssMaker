<!DOCTYPE HTML>
   <html>
    <head>
        <!-- start title here  -->
        <title>wp xss exploit maker - wordpress version 3.x.x </title>
        
        <!-- start meta here  -->
        <meta charset="UTF-8"> 
        <meta name="keywords" content="exploit,wordpress xss,wordpress exploit,wordpress hack,wordpress xss generator,wordpress version 3.5 vulnerabilities,wordpress vulnerabilities,wordpress 3.5.1 exploit,wordpress hacks,wordpress xss attacks,wordpress xss vulnerability,wordpress xss hack">
        <meta name="description" content="wp xss exploit maker generate a wordpress xss javascript exploit. for hacking admin panel. this after run make a new user administartor rol on victim site.">
        <meta name="application-name" content="wp xss exploit maker">
        <meta name="language" content="english">
        <meta name="author" content="vahid heidari">
        <meta name="robots" content="index, follow">
        <meta name="web_author" content="http://remixnet.ir">
        
        <!-- start load css file -->
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel='stylesheet' href='//cdn.jsdelivr.net/font-hack/2.020/css/hack.min.css'>
        
        <!-- start load javascript file -->
        <script src="js/script.js" type="text/javascript"></script>

    </head> <!-- end of head -->
    <body>
        <header>
            <div class="wp xss-head">
               <span class="logo"></span>
            </div>
        </header>
       <div id="main">
         <div class="container">
              <div class="panel panel-default">
                <div class="panel-heading"><label>wp xss makere form</label></div> <!-- end of heading panel -->
                 <div class="panel-body">
                    <p>Hello and welcome to wp xss exploit maker, here you can making online javascript exploit for hacking wordpress <span class="label label-info">version 3.x.x</span> this javascript code add a administrator user on victim we site. enjoy it :-) </p>
                    <hr>
                        <div class="alert alert-danger" id="error" style="display:none">
                            <strong>Oh nooo! </strong>for make a valid xss exploit javascript code you must complete all field on this form. 
                        </div><!-- end of error alert -->
                        <div class="alert alert-success" id="success" style="display:none">
                            <strong>Ok :-)</strong> xss javascript exploit now generate.for using code you can use <a href="http://pastebin.com" rel="nofollow">pastbin</a> web site
                        </div><!-- end of successfully alert -->
                      <form action="#" method="post">
                      <div class="col-sm-9">
                            <div class="col-sm-12">
                                 <div class="form-group">
                                     <label for="victiomsite">Victim Site</label>
                                     <input type="text" name="victimsite" id="victiomsite" class="form-control" placeholder="ex: google.com" />
                                 </div><!-- end of victimsite -->
                             </div> <!-- end of col-sm-12 -->
                              <div class="col-sm-6">
                               <div class="form-group">
                                   <label for="username">Username:</label>
                                   <input class = "form-control" type="text" name="username" id="username" placeholder="ex: newAdmin" />
                               </div><!-- end of username -->                           
                               <div class="form-group">
                                   <label for="password">Password:</label>
                                   <input class = "form-control" type="text" name="password" id="password" placeholder="ex: newPassword" />
                               </div><!-- end of password -->
                               <div class="form-group">
                                   <label for="email">Email:</label>
                                   <input class = "form-control" type="text" name="email" id="email" placeholder="ex: yourmail@domine.com" />
                               </div><!-- end of email -->
                              </div><!-- end of form colume one -->
                              <div class="col-sm-6">
                               <div class="form-group">
                                   <label for="name">Name:</label>
                                   <input type="text" name="name" id="name" class="form-control" placeholder="ex: yourName" />
                               </div><!-- end of name -->
                               <div class="form-group">
                                   <label for="family">Family:</label>
                                   <input type="text" name="family" id="family" class="form-control" placeholder="ex: yourFamily"/>
                               </div><!-- end of family -->                           
                                <div class="form-group">
                                   <label for="url">Url:</label>
                                   <input type="text" name="url" id="url" class="form-control" placeholder="ex: domine.com"/>
                               </div><!-- end of url -->
                               <div class="form-group">
                                   <button type="button" class="btn btn-success" onclick="makeexploit()">Make xss javascrip exploit</button>
                                   <button type="button" class="btn btn-default" onclick="clearfrm()">clear form</button>
                               </div>
                              </div><!-- end of form colume two -->
                          </div><!-- end of col-sm-9 -->
                       </form>          
                   
                      <div class="col-sm-3">
                          <h4>Information :</h4>
                          <hr>
                          <div class="col-sm-12">
                             <p>
                                <span class="label label-danger">wp xss maker</span>
                                  using <a href="https://github.com/Prochainezo/xss2shell" rel="nofollow" target="_blank">xss2shell</a> and <a href="#" target="_blank" rel="nofollow">xssploiter</a> javascript file.
                             </p><!-- end of paragraph -->
                              <p>
                                 Work on : <span class="label label-warning">3.x.x</span> wordpress version
                              </p><!-- end of paragraph -->                               
                                <p>
                                 <span class="label label-info">info:</span>for more information please see <a href="https://klikki.fi/adv/wordpress.html">klikki.fi</a>
                              </p><!-- end of paragraph --> 
                          </div><!-- end of col-sm-12 -->
                      </div><!-- end right info sidebar -->
                    </div> <!-- end of panel-body -->
                 </div><!-- end of panel-default -->
                 
                    <div class="panel panel-success" >
                       <div class="panel-heading">You can now copy exploit code</div>
                       <div class="panel-body">
                           <textarea name="excode" id="excode" cols="30" rows="10" class="form-control"></textarea>
                       </div>
                   </div> <!-- end of show exploit code panle -->
              
           </div> <!-- end of container -->
         </div>
        
    </body>    
</html>