


function checkemail(name, tag_name) {

    let Email = name.value;
    var format = /^([a-zA-Z0-9_\.\-])+@(([a-zA-Z\-])+\.)+([a-zA-Z]{2,4})+$/;
    // console.log(format.test(name.value));
    let check = format.test(name.value);
    if (check == false) {
        document.getElementById('span').style.display = 'block';
    }
    else {
        document.getElementById('span').style.display = 'none';
    }
}

function checkpassword(name) {
    let cpassword = name.value;
    // console.log(password);
    var password = document.getElementById('password').value;
    
    if (cpassword != password) {
        document.getElementById('pspan').style.display = 'block';
        // console.log('helo');
        console.log('inside if confirm ', password);
    }
    else {
        
        document.getElementById('pspan').style.display = 'none';
        console.log('inside else confirm ', password);
    }
}
function passlen(name)
{
    // var password = document.getElementById('password').value;
    var passlen = name.value
    // var format =/^.*(?=.{8,})(?=.*[a-zA-Z])(?=.*\d)(?=.*[!#$%&? "]).*$ /;
    // let check = format.test(name.vale);
    // console.log(check);
    var password = document.getElementById('password').value;
    if (passlen.length<8)
        {
           document.getElementById('lspan').style.display = "block";
           console.log('inside if ', password);
        }
        else{
            document.getElementById('lspan').style.display = "none";
            
            console.log('inside else ', password);

        }
}