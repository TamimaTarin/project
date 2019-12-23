function verifyid(id)
{
	var numberBox = ['0','1','2','3','4','5','6','7','8','9'];
	var	idArray = id.split('');
	var	temp = 0;
		for (var i = 0; i < idArray.length; i++) {
			for (var j = 0; j < numberBox.length; j++) 
			{
				if(idArray[i]==numberBox[j])
				{
					temp+=1
				}
				else
					temp=temp;
			}
		}
		if(id.charAt(0)=="")
		{
			return false;
		}
		else
		{
			if(id.length==temp)
			{
				return true;
			}
			else
				return false;
		}
}
function verifyname(name)
{
	var letter = ['a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z','A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z'];
	var	nameArray = name.split('');
	var	temp = 0;
		for (var i = 0; i < nameArray.length; i++) {
			for (var j = 0; j < letter.length; j++) 
			{
				if(nameArray[i]==letter[j])
				{
					temp+=1
				}
				else
					temp=temp;
			}
		}
		if(name.charAt(0)=="")
		{
			return false;
		}
		else
		{
			if(name.length==temp)
			{
				return true;
			}
			else
				return false;
		}
}
function namecheck()
{
	var id = document.getElementById('name').value;
	var msg = document.getElementById('namediv');

	if(verifyname(id))
	{
		msg.innerHTML = "correct";
		msg.style.color = 'green';
	}
	else
	{
		msg.innerHTML = "Incorrect";
		msg.style.color = 'red';
	}
	
}
function verifycno(cno)
{
	var numberBox = ['0','1','2','3','4','5','6','7','8','9'];
	var	idArray = id.split('');
	var	temp = 0;
		for (var i = 0; i < idArray.length; i++) {
			for (var j = 0; j < numberBox.length; j++) 
			{
				if(idArray[i]==numberBox[j])
				{
					temp+=1
				}
				else
					temp=temp;
			}
		}
		if(id.charAt(0)=="")
		{
			return false;
		}
		else
		{
			if(id.length==temp)
			{
				return true;
			}
			else
				return false;
		}
}

function verifyExistance(text, handler)
{
	var pos = text.indexOf(handler);
	return pos;
}

function verifyEmail(email)
{
	var pos = verifyExistance(email,'@');
	if(email.charAt(0)==" "||email.charAt(0)=="@")
	{
		return false;
	}
	else
	{
		if(pos == -1)
		{
			return false;
		}
		else
		{
			var array = email.split('@');
			var dotPos = verifyExistance(array[1],'.');

			if(array[1].charAt(0)==" "||array[1].charAt(0)==".")
			{
				return false;
			}
			else
			{
				if(dotPos == -1)
				{
					return false;
				}
				else
				{
					var array2 = array[1].split('.');
					if(array2[1]!="com")
					{
						return false;
					}
					else
						return true;
				}
			}
		}
	}
}
function  emailCheck()
{
	var id = document.getElementById('email').value;
	var msg = document.getElementById('emailDiv');

	if(verifyEmail(id))
	{
		msg.innerHTML = "correct";
		msg.style.color = 'green';
	}
	else
	{
		msg.innerHTML = "Incorrect";
		msg.style.color = 'red';
	}
}
function  cnoCheck()
{
	var id = document.getElementById('cno').value;
	var msg = document.getElementById('cnoDiv');

	if(verifyid(id))
	{
		msg.innerHTML = "correct";
		msg.style.color = 'green';
	}
	else
	{
		msg.innerHTML = "Incorrect";
		msg.style.color = 'red';
	}
}


function  idCheck()
{
	var id = document.getElementById('id').value;
	var msg = document.getElementById('idDiv');

	if(verifyid(id))
	{
		msg.innerHTML = "correct";
		msg.style.color = 'green';
	}
	else
	{
		msg.innerHTML = "Incorrect";
		msg.style.color = 'red';
	}
}
/*function loadDoc() 
{
  var xhttp = new XMLHttpRequest();
  var id = document.getElementById('id').value;
  var name = document.getElementById('name').value;
  var pass = document.getElementById('pass').value;
  var cpass = document.getElementById('cpass').value;
  var dob = document.getElementById('dob').value;
  var cno = document.getElementById('cno').value;
  var email = document.getElementById('email').value;
  var house = document.getElementById('house').value;
  var road = document.getElementById('road').value;
  var city = document.getElementById('city').value;
  var division = document.getElementById('division').value;
  //var Gender = verifygender();
  //var type = verifytype();
  xhttp.open("POST", "login.php", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  if(id==""||name==""||pass==""||cpass==""||dob==""||cno==""||email==""||house==""||road==""||city=="" ||division=="" )
  {
  	xhttp.send("get=invalid");
  }
}*/


